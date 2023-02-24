<?php


namespace App\Rpc;

/**
 * 定义一个消息服务
 *
 * @\Hyperf\RpcServer\Annotation\RpcService(name="MsgService",publishTo="consul")
 * class MsgService
 */
class MsgService implements MsgServiceInterface
{
    public function send(string $msg): string
    {
        return '收到一条消息：' . $msg;
    }
}