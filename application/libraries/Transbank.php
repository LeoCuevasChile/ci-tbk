<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'/third_party/libwebpay/webpay.php';

class Transbank {
    
    protected $CI;
    private $tbk;
    private $result;
    private $return_url;
    private $end_url;
    private $error_url;
    private $monto;

    public function __construct() {
        $this->CI =& get_instance();
    }

    public function init( $args ) {
        $this->tbk = new Webpay($args);
    }

    public function startTransaction()
    {
        $this->result = $this->tbk->getNormalTransaction()->initTransaction( $this->monto, rand(), uniqid(), $this->return_url, $this->end_url);
        return $this->result;
    }

    public function getTransactionResult( $token )
    {
        $result = $this->tbk->getNormalTransaction()->getTransactionResult($token);
        return $result;
    }

    public function config() {
        return new Configuration();
    }

    public function setMonto( $monto ) {
        $this->monto = $monto;
    }

    public function setReturnUrl( $url ) {
        $this->CI->load->helper('url');
        $this->return_url = site_url($url);
    }

    public function setEndUrl( $url ) {
        $this->CI->load->helper('url');
        $this->end_url = site_url($url);
    }

    public function setErrorUrl( $url ) {
        $this->CI->load->helper('url');
        $this->error_url = site_url($url);
    }
}