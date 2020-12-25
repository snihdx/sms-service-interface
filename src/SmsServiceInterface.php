<?php
namespace longxiaoyang\smsServiceInterface;

interface SmsServiceInterface
{
    public function send(string $mobile, int $type);
}
