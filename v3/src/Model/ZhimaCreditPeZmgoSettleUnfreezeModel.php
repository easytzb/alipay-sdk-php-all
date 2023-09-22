<?php
/**
 * ZhimaCreditPeZmgoSettleUnfreezeModel
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
 * The version of the OpenAPI document: 2023-08-31
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
 * ZhimaCreditPeZmgoSettleUnfreezeModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ZhimaCreditPeZmgoSettleUnfreezeModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ZhimaCreditPeZmgoSettleUnfreezeModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'agreementId' => 'string',
        'alipayOpenId' => 'string',
        'alipayUserId' => 'string',
        'bizTime' => 'string',
        'orderTitle' => 'string',
        'outRequestNo' => 'string',
        'partnerId' => 'string',
        'unfreezeAmount' => 'string',
        'unfreezeExtendParams' => '\Alipay\OpenAPISDK\Model\UnfreezeExtendParams'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'agreementId' => null,
        'alipayOpenId' => null,
        'alipayUserId' => null,
        'bizTime' => null,
        'orderTitle' => null,
        'outRequestNo' => null,
        'partnerId' => null,
        'unfreezeAmount' => null,
        'unfreezeExtendParams' => null
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
        'agreementId' => 'agreement_id',
        'alipayOpenId' => 'alipay_open_id',
        'alipayUserId' => 'alipay_user_id',
        'bizTime' => 'biz_time',
        'orderTitle' => 'order_title',
        'outRequestNo' => 'out_request_no',
        'partnerId' => 'partner_id',
        'unfreezeAmount' => 'unfreeze_amount',
        'unfreezeExtendParams' => 'unfreeze_extend_params'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agreementId' => 'setAgreementId',
        'alipayOpenId' => 'setAlipayOpenId',
        'alipayUserId' => 'setAlipayUserId',
        'bizTime' => 'setBizTime',
        'orderTitle' => 'setOrderTitle',
        'outRequestNo' => 'setOutRequestNo',
        'partnerId' => 'setPartnerId',
        'unfreezeAmount' => 'setUnfreezeAmount',
        'unfreezeExtendParams' => 'setUnfreezeExtendParams'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agreementId' => 'getAgreementId',
        'alipayOpenId' => 'getAlipayOpenId',
        'alipayUserId' => 'getAlipayUserId',
        'bizTime' => 'getBizTime',
        'orderTitle' => 'getOrderTitle',
        'outRequestNo' => 'getOutRequestNo',
        'partnerId' => 'getPartnerId',
        'unfreezeAmount' => 'getUnfreezeAmount',
        'unfreezeExtendParams' => 'getUnfreezeExtendParams'
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
        $this->container['agreementId'] = $data['agreementId'] ?? null;
        $this->container['alipayOpenId'] = $data['alipayOpenId'] ?? null;
        $this->container['alipayUserId'] = $data['alipayUserId'] ?? null;
        $this->container['bizTime'] = $data['bizTime'] ?? null;
        $this->container['orderTitle'] = $data['orderTitle'] ?? null;
        $this->container['outRequestNo'] = $data['outRequestNo'] ?? null;
        $this->container['partnerId'] = $data['partnerId'] ?? null;
        $this->container['unfreezeAmount'] = $data['unfreezeAmount'] ?? null;
        $this->container['unfreezeExtendParams'] = $data['unfreezeExtendParams'] ?? null;
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
     * Gets agreementId
     *
     * @return string|null
     */
    public function getAgreementId()
    {
        return $this->container['agreementId'];
    }

    /**
     * Sets agreementId
     *
     * @param string|null $agreementId 支付宝系统中用以唯一标识用户签约记录的编号，即花呗先享协议号
     *
     * @return self
     */
    public function setAgreementId($agreementId)
    {
        $this->container['agreementId'] = $agreementId;

        return $this;
    }

    /**
     * Gets alipayOpenId
     *
     * @return string|null
     */
    public function getAlipayOpenId()
    {
        return $this->container['alipayOpenId'];
    }

    /**
     * Sets alipayOpenId
     *
     * @param string|null $alipayOpenId 买家在支付宝的用户id
     *
     * @return self
     */
    public function setAlipayOpenId($alipayOpenId)
    {
        $this->container['alipayOpenId'] = $alipayOpenId;

        return $this;
    }

    /**
     * Gets alipayUserId
     *
     * @return string|null
     */
    public function getAlipayUserId()
    {
        return $this->container['alipayUserId'];
    }

    /**
     * Sets alipayUserId
     *
     * @param string|null $alipayUserId 买家在支付宝的用户id
     *
     * @return self
     */
    public function setAlipayUserId($alipayUserId)
    {
        $this->container['alipayUserId'] = $alipayUserId;

        return $this;
    }

    /**
     * Gets bizTime
     *
     * @return string|null
     */
    public function getBizTime()
    {
        return $this->container['bizTime'];
    }

    /**
     * Sets bizTime
     *
     * @param string|null $bizTime 解冻成功时间
     *
     * @return self
     */
    public function setBizTime($bizTime)
    {
        $this->container['bizTime'] = $bizTime;

        return $this;
    }

    /**
     * Gets orderTitle
     *
     * @return string|null
     */
    public function getOrderTitle()
    {
        return $this->container['orderTitle'];
    }

    /**
     * Sets orderTitle
     *
     * @param string|null $orderTitle 解冻的描述
     *
     * @return self
     */
    public function setOrderTitle($orderTitle)
    {
        $this->container['orderTitle'] = $orderTitle;

        return $this;
    }

    /**
     * Gets outRequestNo
     *
     * @return string|null
     */
    public function getOutRequestNo()
    {
        return $this->container['outRequestNo'];
    }

    /**
     * Sets outRequestNo
     *
     * @param string|null $outRequestNo 商户本次操作的请求流水号，用于标识请求流水的唯一性，不能包含除中文、英文、数字以外的字符，需要保证在商户端不重复。由商户传入，最终返回给商户。
     *
     * @return self
     */
    public function setOutRequestNo($outRequestNo)
    {
        $this->container['outRequestNo'] = $outRequestNo;

        return $this;
    }

    /**
     * Gets partnerId
     *
     * @return string|null
     */
    public function getPartnerId()
    {
        return $this->container['partnerId'];
    }

    /**
     * Sets partnerId
     *
     * @param string|null $partnerId 商户ID
     *
     * @return self
     */
    public function setPartnerId($partnerId)
    {
        $this->container['partnerId'] = $partnerId;

        return $this;
    }

    /**
     * Gets unfreezeAmount
     *
     * @return string|null
     */
    public function getUnfreezeAmount()
    {
        return $this->container['unfreezeAmount'];
    }

    /**
     * Sets unfreezeAmount
     *
     * @param string|null $unfreezeAmount 解冻金额
     *
     * @return self
     */
    public function setUnfreezeAmount($unfreezeAmount)
    {
        $this->container['unfreezeAmount'] = $unfreezeAmount;

        return $this;
    }

    /**
     * Gets unfreezeExtendParams
     *
     * @return \Alipay\OpenAPISDK\Model\UnfreezeExtendParams|null
     */
    public function getUnfreezeExtendParams()
    {
        return $this->container['unfreezeExtendParams'];
    }

    /**
     * Sets unfreezeExtendParams
     *
     * @param \Alipay\OpenAPISDK\Model\UnfreezeExtendParams|null $unfreezeExtendParams unfreezeExtendParams
     *
     * @return self
     */
    public function setUnfreezeExtendParams($unfreezeExtendParams)
    {
        $this->container['unfreezeExtendParams'] = $unfreezeExtendParams;

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


