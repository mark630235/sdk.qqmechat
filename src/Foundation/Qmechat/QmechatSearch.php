<?php
/**
 * Created by PhpStorm.
 * User: kaylv@dayuw.com
 * Date: 2018/11/9
 * Time: 14:26
 */

namespace Qmechat\ApiGateway\Qmechat\Foundation\Qmechat;
/**
 * @method $this uerId(int $uerId)
 * @method $this userName(string $userName)
 * @method $this referer(string $referer)
 * @method $this userAgent(string $userAgent)
 * @method $this platform(string $platform)
 * @method $this browser(string $browser)
 * @method $this ipAddress(string $ipAddress)
 *
 * Class LogSearch
 * @package QLife\ApiGateway\Logger\Foundation\Logger
 */
class QmechatSearch
{
    /**
     * @var array
     */
    protected $attributes = [];

    /**
     * @var array
     */
    protected $fillable = [
        'user_id',
        'user_name',
        'referer',
        'user_agent',
        'platform',
        'browser',
        'ip_address',
    ];

    /**
     * 获取实列对象
     * @return QmechatSearch
     *@author kaylv@dayuw.com
     */
    public static function make()
    {
        return new static;
    }

    /**
     * 设置日志类型
     * @author kaylv@dayuw.com
     * @param LogType $logType
     * @return $this
     */
    public function logType(LogType $logType)
    {
        $this->attributes['log_type'] = $logType->logType;

        return $this;
    }

    /**
     * 服务商ID
     * @author kaylv@dayuw.com
     * @param $grpId
     * @return $this
     */
    public function grpId($grpId)
    {
        $this->attributes['grp_id'] = $grpId;

        return $this;
    }

    /**
     * 商户ID
     * @author kaylv@dayuw.com
     * @param $mchId
     * @return $this
     */
    public function mchId($mchId)
    {
        $this->attributes['mch_id'] = $mchId;

        return $this;
    }

    /**
     * 业务来源
     * @author kaylv@dayuw.com
     * @param $business
     * @return $this
     */
    public function business($business)
    {
        $this->attributes['business'] = $business;

        return $this;
    }

    /**
     * 操作场景
     * @author kaylv@dayuw.com
     * @param $scene
     * @return $this
     */
    public function scene($scene)
    {
        $this->attributes['scene'] = $scene;

        return $this;
    }

    /**
     * 操作方式
     * @author kaylv@dayuw.com
     * @param $method
     * @return $this
     */
    public function method($method)
    {
        $this->attributes['method'] = $method;

        return $this;
    }

    /**
     * 操作对象ID
     * @author kaylv@dayuw.com
     * @param $targetId
     * @return $this
     */
    public function targetId($targetId)
    {
        $this->attributes['target_id'] = $targetId;

        return $this;
    }

    /**
     * 操作对象名称
     * @author kaylv@dayuw.com
     * @param $targetName
     * @return $this
     */
    public function targetName($targetName)
    {
        $this->attributes['target_name'] = $targetName;

        return $this;
    }

    /**
     * 操作对象描述
     * @author kaylv@dayuw.com
     * @param $targetDescription
     * @return $this
     */
    public function targetDescription($targetDescription)
    {
        $this->attributes['target_description'] = $targetDescription;

        return $this;
    }

    /**
     * 当前请求地址
     * @author kaylv@dayuw.com
     * @param $url
     * @return $this
     */
    public function url($url)
    {
        $this->attributes['url'] = $url;

        return $this;
    }

    /**
     * 指定列表排序字段
     * @author kaylv@dayuw.com
     * @param array $orderSortFields
     * [
     *      "created_at" => 'desc'
     * ]
     * @return $this
     */
    public function sortFields($orderSortFields = [])
    {
        $this->attributes['_sort'] = $orderSortFields;

        return $this;
    }

    /**
     * 每页记录数目
     * @author kaylv@dayuw.com
     * @param int $size
     * @return $this
     */
    public function searchSize($size = 10)
    {
        $this->attributes['_size'] = $size;

        return $this;
    }

    /**
     * 页码
     * @author kaylv@dayuw.com
     * @param int $page
     * @return $this
     */
    public function searchPage($page = 1)
    {
        $this->attributes['page'] = $page;

        return $this;
    }

    /**
     * 设置搜素创建时间区间
     * @author kaylv@dayuw.com
     * @param $createTimeStart
     * @param $createTimeEnd
     * @return $this
     */
    public function createTime($createTimeStart, $createTimeEnd)
    {
        $this->attributes['create_time'] = [
            $createTimeStart,
            $createTimeEnd
        ];

        return $this;
    }

    /**
     * @author kaylv@dayuw.com
     * @return array
     */
    public function toArray()
    {
        return array_filter( $this->attributes, function($item){
            return !empty($item);
        });
    }

    /**
     * 魔术方法
     * @author kaylv@dayuw.com
     * @param $name
     * @param $arguments
     * @return $this
     */
    public function __call($name, $arguments)
    {
        if (count($arguments) > 0 && in_array($key = snake_case($name), $this->fillable)) {
            $this->attributes[$key] = $arguments[0];
        }

        return $this;
    }
}