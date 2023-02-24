<?php


namespace App\Rpc;


interface MsgServiceInterface
{
    /**
     * 定义一个发送消息的方法
     *
     * @param string $msg
     * @return string
     */
    public function send(string $msg): string;
}