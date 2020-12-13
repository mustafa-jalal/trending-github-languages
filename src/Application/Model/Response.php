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

    /**
     * @return false|string
     */
    public function toJSON(): string
    {
        return json_encode($this);
    }
}