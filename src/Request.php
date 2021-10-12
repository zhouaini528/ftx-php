<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Ftx;

use GuzzleHttp\Exception\RequestException;
use Lin\Ftx\Exceptions\Exception;
use GuzzleHttp\Client;

class Request
{
    protected $key='';

    protected $secret='';

    protected $host='';

    protected $nonce='';

    protected $signature='';

    protected $authorization=false;

    protected $headers=[];

    protected $type='';

    protected $path='';

    protected $data=[];

    protected $options=[];


    protected $platform='';

    protected $version='';

    protected $async='';

    public function __construct(array $data)
    {
        $this->key=$data['key'] ?? '';
        $this->secret=$data['secret'] ?? '';
        $this->host=$data['host'] ?? '';

        $this->options=$data['options'] ?? [];

        $this->platform=$data['platform'] ?? [];
        $this->version=$data['version'] ?? [];

        $this->async=$data['async'] ?? '';
    }

    /**
     *
     * */
    protected function auth(){
        $this->nonce();

        $this->signature();

        $this->headers();

        $this->options();
    }

    /**
     *
     * */
    protected function nonce(){
        $this->nonce=time().'000';
    }

    /**
     *
     * */
    protected function signature(){
        $this->path='/api'.$this->path;

        if($this->authorization===true){
            $temp=$this->nonce.$this->type.$this->path;
            if(!empty($this->data)) $temp.=json_encode($this->data);
            //echo $temp.PHP_EOL;
            $this->signature = hash_hmac('sha256', $temp, $this->secret);
        }
    }

    /**
     *
     * */
    protected function headers(){
        $this->headers= [
            'Content-Type'=>'application/json',
            'FTX-KEY'=>$this->key,
            'FTX-TS'=>$this->nonce,
        ];

        if($this->authorization===true){
            $this->headers['FTX-SIGN']=$this->signature;
        }
    }

    /**
     *
     * */
    protected function options(){
        if(isset($this->options['headers'])) $this->headers=array_merge($this->headers,$this->options['headers']);

        $this->options['headers']=$this->headers;
        $this->options['timeout'] = $this->options['timeout'] ?? 60;
    }

    /**
     *
     * */
    protected function send(){
        $client = new Client();

        $url=$this->host.$this->path;

        if($this->type!='POST') $url.= empty($this->data) ? '' : '?'.http_build_query($this->data);
        else $this->options['body']=json_encode($this->data);

        /*echo $this->type.PHP_EOL.$url.PHP_EOL;
        print_r($this->options);*/

        $response = $client->request($this->type, $url, $this->options);
        return $response->getBody()->getContents();
    }

    /**
     *
     * */
    public function exec(array $param=[]){
        $this->auth();

        try {
            return json_decode($this->send(),true);
        }catch (RequestException $e){
            if(empty($e->getResponse()) || $e->getResponse()==null) throw new Exception(json_encode(['_message'=>'system error']));

            if(method_exists($e->getResponse(),'getBody')){
                $contents=$e->getResponse()->getBody()->getContents();

                $temp=json_decode($contents,true);
                if(!empty($temp)) {
                    $temp['_method']=$this->type;
                    $temp['_url']=$this->host.$this->path;
                }else{
                    $temp['_message']=$e->getMessage();
                }
            }else{
                $temp['_message']=$e->getMessage();
            }

            $temp['_httpcode']=$e->getCode();

            throw new Exception(json_encode($temp));
        }
    }
}
