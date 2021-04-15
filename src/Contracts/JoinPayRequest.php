<?php
/**
 * ---------------------------------------------------------------------------------------------------------------------
 * FileName: JoinPayRequest.php
 * Description:
 * ---------------------------------------------------------------------------------------------------------------------
 * Author: jackven <jackven@qq.com>
 * Date:    2021/4/15
 * Version: 1.0
 */

namespace Jackven\Joinpay\Contracts;


use Jackven\Joinpay\JoinPayClient;

abstract class JoinPayRequest
{

    protected $params   = [];
    protected $method   = '';
    protected $uri      = '';
    protected $signType = 'MD5';
    protected $signFiled= 'hmac';

    public function __construct($data=[])
    {
        $this->params = $data;
    }

    public function setParam($field,$value){
        $this->params[$field] = $value;
        return $this;
    }

    public function setParams($data){
        $this->params = $data;
        return $this;
    }

    public function getParam($field){
        return $this->params[$field];
    }

    public function getParams(){
        return $this->params;
    }

    /**
     * @param false $isJsonRequest      是否http body Json请求
     * @param false $is_form_request    是否表单提交跳转
     * @return mixed|string
     */
    public function send($isJsonRequest=false,$is_form_request=false){
        return JoinPayClient::getInstance()->setSignType($this->signType)->setSignField($this->signFiled)->send($this->uri,$this->params,$this->method,$isJsonRequest,$is_form_request);
    }
}
