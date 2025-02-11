<?php
/**
 * MerchantOnlineActivityOpenModel
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * 支付宝开放平台API
 *
 * 支付宝开放平台v3协议文档
 *
 * The version of the OpenAPI document: 2023-10-26
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Alipay\OpenAPISDK\Model;

use \ArrayAccess;
use \Alipay\OpenAPISDK\ObjectSerializer;

/**
 * MerchantOnlineActivityOpenModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MerchantOnlineActivityOpenModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MerchantOnlineActivityOpenModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'activityId' => 'string',
        'campId' => 'string',
        'countLimit' => 'int',
        'countLimitPerDay' => 'int',
        'countLimitPerUser' => 'int',
        'countLimitPerUserPerDay' => 'int',
        'crowd' => 'string',
        'deductAmount' => 'string',
        'externalUniqueId' => 'string',
        'gmtEnd' => 'string',
        'gmtStart' => 'string',
        'itemIds' => 'string[]',
        'memo' => 'string',
        'minCost' => 'string',
        'obtainManually' => 'bool',
        'voucherInfo' => '\Alipay\OpenAPISDK\Model\MerchantActivityVoucherInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'activityId' => null,
        'campId' => null,
        'countLimit' => null,
        'countLimitPerDay' => null,
        'countLimitPerUser' => null,
        'countLimitPerUserPerDay' => null,
        'crowd' => null,
        'deductAmount' => null,
        'externalUniqueId' => null,
        'gmtEnd' => null,
        'gmtStart' => null,
        'itemIds' => null,
        'memo' => null,
        'minCost' => null,
        'obtainManually' => null,
        'voucherInfo' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'activityId' => 'activity_id',
        'campId' => 'camp_id',
        'countLimit' => 'count_limit',
        'countLimitPerDay' => 'count_limit_per_day',
        'countLimitPerUser' => 'count_limit_per_user',
        'countLimitPerUserPerDay' => 'count_limit_per_user_per_day',
        'crowd' => 'crowd',
        'deductAmount' => 'deduct_amount',
        'externalUniqueId' => 'external_unique_id',
        'gmtEnd' => 'gmt_end',
        'gmtStart' => 'gmt_start',
        'itemIds' => 'item_ids',
        'memo' => 'memo',
        'minCost' => 'min_cost',
        'obtainManually' => 'obtain_manually',
        'voucherInfo' => 'voucher_info'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activityId' => 'setActivityId',
        'campId' => 'setCampId',
        'countLimit' => 'setCountLimit',
        'countLimitPerDay' => 'setCountLimitPerDay',
        'countLimitPerUser' => 'setCountLimitPerUser',
        'countLimitPerUserPerDay' => 'setCountLimitPerUserPerDay',
        'crowd' => 'setCrowd',
        'deductAmount' => 'setDeductAmount',
        'externalUniqueId' => 'setExternalUniqueId',
        'gmtEnd' => 'setGmtEnd',
        'gmtStart' => 'setGmtStart',
        'itemIds' => 'setItemIds',
        'memo' => 'setMemo',
        'minCost' => 'setMinCost',
        'obtainManually' => 'setObtainManually',
        'voucherInfo' => 'setVoucherInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activityId' => 'getActivityId',
        'campId' => 'getCampId',
        'countLimit' => 'getCountLimit',
        'countLimitPerDay' => 'getCountLimitPerDay',
        'countLimitPerUser' => 'getCountLimitPerUser',
        'countLimitPerUserPerDay' => 'getCountLimitPerUserPerDay',
        'crowd' => 'getCrowd',
        'deductAmount' => 'getDeductAmount',
        'externalUniqueId' => 'getExternalUniqueId',
        'gmtEnd' => 'getGmtEnd',
        'gmtStart' => 'getGmtStart',
        'itemIds' => 'getItemIds',
        'memo' => 'getMemo',
        'minCost' => 'getMinCost',
        'obtainManually' => 'getObtainManually',
        'voucherInfo' => 'getVoucherInfo'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['activityId'] = $data['activityId'] ?? null;
        $this->container['campId'] = $data['campId'] ?? null;
        $this->container['countLimit'] = $data['countLimit'] ?? null;
        $this->container['countLimitPerDay'] = $data['countLimitPerDay'] ?? null;
        $this->container['countLimitPerUser'] = $data['countLimitPerUser'] ?? null;
        $this->container['countLimitPerUserPerDay'] = $data['countLimitPerUserPerDay'] ?? null;
        $this->container['crowd'] = $data['crowd'] ?? null;
        $this->container['deductAmount'] = $data['deductAmount'] ?? null;
        $this->container['externalUniqueId'] = $data['externalUniqueId'] ?? null;
        $this->container['gmtEnd'] = $data['gmtEnd'] ?? null;
        $this->container['gmtStart'] = $data['gmtStart'] ?? null;
        $this->container['itemIds'] = $data['itemIds'] ?? null;
        $this->container['memo'] = $data['memo'] ?? null;
        $this->container['minCost'] = $data['minCost'] ?? null;
        $this->container['obtainManually'] = $data['obtainManually'] ?? null;
        $this->container['voucherInfo'] = $data['voucherInfo'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets activityId
     *
     * @return string|null
     */
    public function getActivityId()
    {
        return $this->container['activityId'];
    }

    /**
     * Sets activityId
     *
     * @param string|null $activityId 活动Id
     *
     * @return self
     */
    public function setActivityId($activityId)
    {
        $this->container['activityId'] = $activityId;

        return $this;
    }

    /**
     * Gets campId
     *
     * @return string|null
     */
    public function getCampId()
    {
        return $this->container['campId'];
    }

    /**
     * Sets campId
     *
     * @param string|null $campId 营销活动Id
     *
     * @return self
     */
    public function setCampId($campId)
    {
        $this->container['campId'] = $campId;

        return $this;
    }

    /**
     * Gets countLimit
     *
     * @return int|null
     */
    public function getCountLimit()
    {
        return $this->container['countLimit'];
    }

    /**
     * Sets countLimit
     *
     * @param int|null $countLimit 活动优惠次数限制
     *
     * @return self
     */
    public function setCountLimit($countLimit)
    {
        $this->container['countLimit'] = $countLimit;

        return $this;
    }

    /**
     * Gets countLimitPerDay
     *
     * @return int|null
     */
    public function getCountLimitPerDay()
    {
        return $this->container['countLimitPerDay'];
    }

    /**
     * Sets countLimitPerDay
     *
     * @param int|null $countLimitPerDay 活动优惠单日次数限制
     *
     * @return self
     */
    public function setCountLimitPerDay($countLimitPerDay)
    {
        $this->container['countLimitPerDay'] = $countLimitPerDay;

        return $this;
    }

    /**
     * Gets countLimitPerUser
     *
     * @return int|null
     */
    public function getCountLimitPerUser()
    {
        return $this->container['countLimitPerUser'];
    }

    /**
     * Sets countLimitPerUser
     *
     * @param int|null $countLimitPerUser 活动单用户限次
     *
     * @return self
     */
    public function setCountLimitPerUser($countLimitPerUser)
    {
        $this->container['countLimitPerUser'] = $countLimitPerUser;

        return $this;
    }

    /**
     * Gets countLimitPerUserPerDay
     *
     * @return int|null
     */
    public function getCountLimitPerUserPerDay()
    {
        return $this->container['countLimitPerUserPerDay'];
    }

    /**
     * Sets countLimitPerUserPerDay
     *
     * @param int|null $countLimitPerUserPerDay 活动单用户单日限次
     *
     * @return self
     */
    public function setCountLimitPerUserPerDay($countLimitPerUserPerDay)
    {
        $this->container['countLimitPerUserPerDay'] = $countLimitPerUserPerDay;

        return $this;
    }

    /**
     * Gets crowd
     *
     * @return string|null
     */
    public function getCrowd()
    {
        return $this->container['crowd'];
    }

    /**
     * Sets crowd
     *
     * @param string|null $crowd 人群规则  DEFAULT：全部用户  ONLINE_NEWCOMER：在线购买新人  MEMBER：会员
     *
     * @return self
     */
    public function setCrowd($crowd)
    {
        $this->container['crowd'] = $crowd;

        return $this;
    }

    /**
     * Gets deductAmount
     *
     * @return string|null
     */
    public function getDeductAmount()
    {
        return $this->container['deductAmount'];
    }

    /**
     * Sets deductAmount
     *
     * @param string|null $deductAmount 代金券面额
     *
     * @return self
     */
    public function setDeductAmount($deductAmount)
    {
        $this->container['deductAmount'] = $deductAmount;

        return $this;
    }

    /**
     * Gets externalUniqueId
     *
     * @return string|null
     */
    public function getExternalUniqueId()
    {
        return $this->container['externalUniqueId'];
    }

    /**
     * Sets externalUniqueId
     *
     * @param string|null $externalUniqueId 外部Id
     *
     * @return self
     */
    public function setExternalUniqueId($externalUniqueId)
    {
        $this->container['externalUniqueId'] = $externalUniqueId;

        return $this;
    }

    /**
     * Gets gmtEnd
     *
     * @return string|null
     */
    public function getGmtEnd()
    {
        return $this->container['gmtEnd'];
    }

    /**
     * Sets gmtEnd
     *
     * @param string|null $gmtEnd 活动结束时间  格式为：yyyy-MM-dd HH:mm:ss
     *
     * @return self
     */
    public function setGmtEnd($gmtEnd)
    {
        $this->container['gmtEnd'] = $gmtEnd;

        return $this;
    }

    /**
     * Gets gmtStart
     *
     * @return string|null
     */
    public function getGmtStart()
    {
        return $this->container['gmtStart'];
    }

    /**
     * Sets gmtStart
     *
     * @param string|null $gmtStart 活动开始时间，格式为:yyyy-MM-dd HH:mm:ss
     *
     * @return self
     */
    public function setGmtStart($gmtStart)
    {
        $this->container['gmtStart'] = $gmtStart;

        return $this;
    }

    /**
     * Gets itemIds
     *
     * @return string[]|null
     */
    public function getItemIds()
    {
        return $this->container['itemIds'];
    }

    /**
     * Sets itemIds
     *
     * @param string[]|null $itemIds 商品列表
     *
     * @return self
     */
    public function setItemIds($itemIds)
    {
        $this->container['itemIds'] = $itemIds;

        return $this;
    }

    /**
     * Gets memo
     *
     * @return string|null
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string|null $memo 备注
     *
     * @return self
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets minCost
     *
     * @return string|null
     */
    public function getMinCost()
    {
        return $this->container['minCost'];
    }

    /**
     * Sets minCost
     *
     * @param string|null $minCost 使用门槛，满X元可用，使用门槛必须大于券面额
     *
     * @return self
     */
    public function setMinCost($minCost)
    {
        $this->container['minCost'] = $minCost;

        return $this;
    }

    /**
     * Gets obtainManually
     *
     * @return bool|null
     */
    public function getObtainManually()
    {
        return $this->container['obtainManually'];
    }

    /**
     * Sets obtainManually
     *
     * @param bool|null $obtainManually 是否手动领取，本期只支持true
     *
     * @return self
     */
    public function setObtainManually($obtainManually)
    {
        $this->container['obtainManually'] = $obtainManually;

        return $this;
    }

    /**
     * Gets voucherInfo
     *
     * @return \Alipay\OpenAPISDK\Model\MerchantActivityVoucherInfo|null
     */
    public function getVoucherInfo()
    {
        return $this->container['voucherInfo'];
    }

    /**
     * Sets voucherInfo
     *
     * @param \Alipay\OpenAPISDK\Model\MerchantActivityVoucherInfo|null $voucherInfo voucherInfo
     *
     * @return self
     */
    public function setVoucherInfo($voucherInfo)
    {
        $this->container['voucherInfo'] = $voucherInfo;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


