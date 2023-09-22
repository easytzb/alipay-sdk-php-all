<?php
/**
 * AlipayCommerceLogisticsOrderInstantdeliveryPrecreateModel
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
 * AlipayCommerceLogisticsOrderInstantdeliveryPrecreateModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayCommerceLogisticsOrderInstantdeliveryPrecreateModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayCommerceLogisticsOrderInstantdeliveryPrecreateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'consumerId' => 'string',
        'consumerNotify' => '\Alipay\OpenAPISDK\Model\ConsumerNotifyIstd',
        'consumerSource' => 'string',
        'goodsDetails' => '\Alipay\OpenAPISDK\Model\GoodsDetailIstd[]',
        'goodsInfo' => '\Alipay\OpenAPISDK\Model\GoodsInfoIstd',
        'logisticsCompanies' => '\Alipay\OpenAPISDK\Model\LogisticsCompanyIstd[]',
        'openId' => 'string',
        'orderExtIstd' => '\Alipay\OpenAPISDK\Model\OrderExtIstdForPreOrder',
        'outOrderNo' => 'string',
        'receiver' => '\Alipay\OpenAPISDK\Model\ReceiverIstd',
        'sender' => '\Alipay\OpenAPISDK\Model\SenderIstd',
        'shopNo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'consumerId' => null,
        'consumerNotify' => null,
        'consumerSource' => null,
        'goodsDetails' => null,
        'goodsInfo' => null,
        'logisticsCompanies' => null,
        'openId' => null,
        'orderExtIstd' => null,
        'outOrderNo' => null,
        'receiver' => null,
        'sender' => null,
        'shopNo' => null
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
        'consumerId' => 'consumer_id',
        'consumerNotify' => 'consumer_notify',
        'consumerSource' => 'consumer_source',
        'goodsDetails' => 'goods_details',
        'goodsInfo' => 'goods_info',
        'logisticsCompanies' => 'logistics_companies',
        'openId' => 'open_id',
        'orderExtIstd' => 'order_ext_istd',
        'outOrderNo' => 'out_order_no',
        'receiver' => 'receiver',
        'sender' => 'sender',
        'shopNo' => 'shop_no'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'consumerId' => 'setConsumerId',
        'consumerNotify' => 'setConsumerNotify',
        'consumerSource' => 'setConsumerSource',
        'goodsDetails' => 'setGoodsDetails',
        'goodsInfo' => 'setGoodsInfo',
        'logisticsCompanies' => 'setLogisticsCompanies',
        'openId' => 'setOpenId',
        'orderExtIstd' => 'setOrderExtIstd',
        'outOrderNo' => 'setOutOrderNo',
        'receiver' => 'setReceiver',
        'sender' => 'setSender',
        'shopNo' => 'setShopNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'consumerId' => 'getConsumerId',
        'consumerNotify' => 'getConsumerNotify',
        'consumerSource' => 'getConsumerSource',
        'goodsDetails' => 'getGoodsDetails',
        'goodsInfo' => 'getGoodsInfo',
        'logisticsCompanies' => 'getLogisticsCompanies',
        'openId' => 'getOpenId',
        'orderExtIstd' => 'getOrderExtIstd',
        'outOrderNo' => 'getOutOrderNo',
        'receiver' => 'getReceiver',
        'sender' => 'getSender',
        'shopNo' => 'getShopNo'
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
        $this->container['consumerId'] = $data['consumerId'] ?? null;
        $this->container['consumerNotify'] = $data['consumerNotify'] ?? null;
        $this->container['consumerSource'] = $data['consumerSource'] ?? null;
        $this->container['goodsDetails'] = $data['goodsDetails'] ?? null;
        $this->container['goodsInfo'] = $data['goodsInfo'] ?? null;
        $this->container['logisticsCompanies'] = $data['logisticsCompanies'] ?? null;
        $this->container['openId'] = $data['openId'] ?? null;
        $this->container['orderExtIstd'] = $data['orderExtIstd'] ?? null;
        $this->container['outOrderNo'] = $data['outOrderNo'] ?? null;
        $this->container['receiver'] = $data['receiver'] ?? null;
        $this->container['sender'] = $data['sender'] ?? null;
        $this->container['shopNo'] = $data['shopNo'] ?? null;
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
     * Gets consumerId
     *
     * @return string|null
     */
    public function getConsumerId()
    {
        return $this->container['consumerId'];
    }

    /**
     * Sets consumerId
     *
     * @param string|null $consumerId 消费者id， 如果consumer_source是alipay，则consumer_id必须是支付宝用户uid；如果consumer_source是wx，则consumer_id可以为空
     *
     * @return self
     */
    public function setConsumerId($consumerId)
    {
        $this->container['consumerId'] = $consumerId;

        return $this;
    }

    /**
     * Gets consumerNotify
     *
     * @return \Alipay\OpenAPISDK\Model\ConsumerNotifyIstd|null
     */
    public function getConsumerNotify()
    {
        return $this->container['consumerNotify'];
    }

    /**
     * Sets consumerNotify
     *
     * @param \Alipay\OpenAPISDK\Model\ConsumerNotifyIstd|null $consumerNotify consumerNotify
     *
     * @return self
     */
    public function setConsumerNotify($consumerNotify)
    {
        $this->container['consumerNotify'] = $consumerNotify;

        return $this;
    }

    /**
     * Gets consumerSource
     *
     * @return string|null
     */
    public function getConsumerSource()
    {
        return $this->container['consumerSource'];
    }

    /**
     * Sets consumerSource
     *
     * @param string|null $consumerSource 消费者来源, 支付宝：alipay, 微信：wx
     *
     * @return self
     */
    public function setConsumerSource($consumerSource)
    {
        $this->container['consumerSource'] = $consumerSource;

        return $this;
    }

    /**
     * Gets goodsDetails
     *
     * @return \Alipay\OpenAPISDK\Model\GoodsDetailIstd[]|null
     */
    public function getGoodsDetails()
    {
        return $this->container['goodsDetails'];
    }

    /**
     * Sets goodsDetails
     *
     * @param \Alipay\OpenAPISDK\Model\GoodsDetailIstd[]|null $goodsDetails 商品明细
     *
     * @return self
     */
    public function setGoodsDetails($goodsDetails)
    {
        $this->container['goodsDetails'] = $goodsDetails;

        return $this;
    }

    /**
     * Gets goodsInfo
     *
     * @return \Alipay\OpenAPISDK\Model\GoodsInfoIstd|null
     */
    public function getGoodsInfo()
    {
        return $this->container['goodsInfo'];
    }

    /**
     * Sets goodsInfo
     *
     * @param \Alipay\OpenAPISDK\Model\GoodsInfoIstd|null $goodsInfo goodsInfo
     *
     * @return self
     */
    public function setGoodsInfo($goodsInfo)
    {
        $this->container['goodsInfo'] = $goodsInfo;

        return $this;
    }

    /**
     * Gets logisticsCompanies
     *
     * @return \Alipay\OpenAPISDK\Model\LogisticsCompanyIstd[]|null
     */
    public function getLogisticsCompanies()
    {
        return $this->container['logisticsCompanies'];
    }

    /**
     * Sets logisticsCompanies
     *
     * @param \Alipay\OpenAPISDK\Model\LogisticsCompanyIstd[]|null $logisticsCompanies 即时配送公司配置列表
     *
     * @return self
     */
    public function setLogisticsCompanies($logisticsCompanies)
    {
        $this->container['logisticsCompanies'] = $logisticsCompanies;

        return $this;
    }

    /**
     * Gets openId
     *
     * @return string|null
     */
    public function getOpenId()
    {
        return $this->container['openId'];
    }

    /**
     * Sets openId
     *
     * @param string|null $openId 消费者id， 如果consumer_source是alipay，则consumer_id必须是支付宝的openId；如果consumer_source是wx，则consumer_id可以为空
     *
     * @return self
     */
    public function setOpenId($openId)
    {
        $this->container['openId'] = $openId;

        return $this;
    }

    /**
     * Gets orderExtIstd
     *
     * @return \Alipay\OpenAPISDK\Model\OrderExtIstdForPreOrder|null
     */
    public function getOrderExtIstd()
    {
        return $this->container['orderExtIstd'];
    }

    /**
     * Sets orderExtIstd
     *
     * @param \Alipay\OpenAPISDK\Model\OrderExtIstdForPreOrder|null $orderExtIstd orderExtIstd
     *
     * @return self
     */
    public function setOrderExtIstd($orderExtIstd)
    {
        $this->container['orderExtIstd'] = $orderExtIstd;

        return $this;
    }

    /**
     * Gets outOrderNo
     *
     * @return string|null
     */
    public function getOutOrderNo()
    {
        return $this->container['outOrderNo'];
    }

    /**
     * Sets outOrderNo
     *
     * @param string|null $outOrderNo 商家订单号
     *
     * @return self
     */
    public function setOutOrderNo($outOrderNo)
    {
        $this->container['outOrderNo'] = $outOrderNo;

        return $this;
    }

    /**
     * Gets receiver
     *
     * @return \Alipay\OpenAPISDK\Model\ReceiverIstd|null
     */
    public function getReceiver()
    {
        return $this->container['receiver'];
    }

    /**
     * Sets receiver
     *
     * @param \Alipay\OpenAPISDK\Model\ReceiverIstd|null $receiver receiver
     *
     * @return self
     */
    public function setReceiver($receiver)
    {
        $this->container['receiver'] = $receiver;

        return $this;
    }

    /**
     * Gets sender
     *
     * @return \Alipay\OpenAPISDK\Model\SenderIstd|null
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param \Alipay\OpenAPISDK\Model\SenderIstd|null $sender sender
     *
     * @return self
     */
    public function setSender($sender)
    {
        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets shopNo
     *
     * @return string|null
     */
    public function getShopNo()
    {
        return $this->container['shopNo'];
    }

    /**
     * Sets shopNo
     *
     * @param string|null $shopNo 商家门店编号
     *
     * @return self
     */
    public function setShopNo($shopNo)
    {
        $this->container['shopNo'] = $shopNo;

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


