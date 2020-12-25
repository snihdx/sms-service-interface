<?php
namespace longxiaoyang\smsServiceInterface;

/**
 * Class SmsService
 * @package App\JsonRpc
 * @RpcService(name="SmsService", protocol="jsonrpc-http", server="jsonrpc-http", publishTo="consul")
 */
interface SmsServiceInterface
{
    public function send(string $mobile, int $type);
}
