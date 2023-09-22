<?php
/**
 * ActivityDiscountVoucher
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
 * ActivityDiscountVoucher Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ActivityDiscountVoucher implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ActivityDiscountVoucher';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ceilingAmount' => 'string',
        'discount' => 'string',
        'floorAmount' => 'string',
        'goodsName' => 'string',
        'originAmount' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ceilingAmount' => null,
        'discount' => null,
        'floorAmount' => null,
        'goodsName' => null,
        'originAmount' => null
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
        'ceilingAmount' => 'ceiling_amount',
        'discount' => 'discount',
        'floorAmount' => 'floor_amount',
        'goodsName' => 'goods_name',
        'originAmount' => 'origin_amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ceilingAmount' => 'setCeilingAmount',
        'discount' => 'setDiscount',
        'floorAmount' => 'setFloorAmount',
        'goodsName' => 'setGoodsName',
        'originAmount' => 'setOriginAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ceilingAmount' => 'getCeilingAmount',
        'discount' => 'getDiscount',
        'floorAmount' => 'getFloorAmount',
        'goodsName' => 'getGoodsName',
        'originAmount' => 'getOriginAmount'
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
        $this->container['ceilingAmount'] = $data['ceilingAmount'] ?? null;
        $this->container['discount'] = $data['discount'] ?? null;
        $this->container['floorAmount'] = $data['floorAmount'] ?? null;
        $this->container['goodsName'] = $data['goodsName'] ?? null;
        $this->container['originAmount'] = $data['originAmount'] ?? null;
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
     * Gets ceilingAmount
     *
     * @return string|null
     */
    public function getCeilingAmount()
    {
        return $this->container['ceilingAmount'];
    }

    /**
     * Sets ceilingAmount
     *
     * @param string|null $ceilingAmount 封顶金额。
     *
     * @return self
     */
    public function setCeilingAmount($ceilingAmount)
    {
        $this->container['ceilingAmount'] = $ceilingAmount;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return string|null
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param string|null $discount 折扣率。
     *
     * @return self
     */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets floorAmount
     *
     * @return string|null
     */
    public function getFloorAmount()
    {
        return $this->container['floorAmount'];
    }

    /**
     * Sets floorAmount
     *
     * @param string|null $floorAmount 门槛金额。
     *
     * @return self
     */
    public function setFloorAmount($floorAmount)
    {
        $this->container['floorAmount'] = $floorAmount;

        return $this;
    }

    /**
     * Gets goodsName
     *
     * @return string|null
     */
    public function getGoodsName()
    {
        return $this->container['goodsName'];
    }

    /**
     * Sets goodsName
     *
     * @param string|null $goodsName 商品名称。说明：该字段可不填，填入 origin_amount 则必填。
     *
     * @return self
     */
    public function setGoodsName($goodsName)
    {
        $this->container['goodsName'] = $goodsName;

        return $this;
    }

    /**
     * Gets originAmount
     *
     * @return string|null
     */
    public function getOriginAmount()
    {
        return $this->container['originAmount'];
    }

    /**
     * Sets originAmount
     *
     * @param string|null $originAmount 原价。
     *
     * @return self
     */
    public function setOriginAmount($originAmount)
    {
        $this->container['originAmount'] = $originAmount;

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


