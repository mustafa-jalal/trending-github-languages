<?php


namespace Application\Model;


class Response
{
    public $status;
    public $code;
    public $data;

    public function __construct( $data, $status = 'Success', $code = 200)
    {
        $this->data = $data;
        $this->status = $status;
        $this->code = $code;
    }

    public function toJson(){
        return json_encode($this);
    }
}