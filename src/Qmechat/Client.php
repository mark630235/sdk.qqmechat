<?php

namespace Qmechat\ApiGateway\Qmechat;

use Freyo\ApiGateway\Kernel\BaseClient;
use Illuminate\Support\Arr;
use QLife\ApiGateway\Logger\Foundation\Qmechat\LogPost;
use QLife\ApiGateway\Logger\Foundation\Qmechat\QmechatSearch;

class Client extends BaseClient
{
    /**
     * 获取指定数据
     * @author kaylv@dayuw.com
     * @param $id
     * @return array|\Freyo\ApiGateway\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \Freyo\ApiGateway\Kernel\Exceptions\InvalidConfigException
     */
    public function get()
    {
        return $this->httpGet('v2/portalapi/groups');
    }
}