<?php
/**
 * AlipayOpenSearchSubservicekeywordApplyModel
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
 * AlipayOpenSearchSubservicekeywordApplyModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenSearchSubservicekeywordApplyModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenSearchSubservicekeywordApplyModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'configId' => 'string',
        'keyWords' => 'string[]',
        'subServiceCode' => 'string',
        'targetAppid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'configId' => null,
        'keyWords' => null,
        'subServiceCode' => null,
        'targetAppid' => null
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
        'configId' => 'config_id',
        'keyWords' => 'key_words',
        'subServiceCode' => 'sub_service_code',
        'targetAppid' => 'target_appid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'configId' => 'setConfigId',
        'keyWords' => 'setKeyWords',
        'subServiceCode' => 'setSubServiceCode',
        'targetAppid' => 'setTargetAppid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'configId' => 'getConfigId',
        'keyWords' => 'getKeyWords',
        'subServiceCode' => 'getSubServiceCode',
        'targetAppid' => 'getTargetAppid'
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
        $this->container['configId'] = $data['configId'] ?? null;
        $this->container['keyWords'] = $data['keyWords'] ?? null;
        $this->container['subServiceCode'] = $data['subServiceCode'] ?? null;
        $this->container['targetAppid'] = $data['targetAppid'] ?? null;
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
     * Gets configId
     *
     * @return string|null
     */
    public function getConfigId()
    {
        return $this->container['configId'];
    }

    /**
     * Sets configId
     *
     * @param string|null $configId 关键词id，（仅修改时传入，修改时仅能传一个关键词）
     *
     * @return self
     */
    public function setConfigId($configId)
    {
        $this->container['configId'] = $configId;

        return $this;
    }

    /**
     * Gets keyWords
     *
     * @return string[]|null
     */
    public function getKeyWords()
    {
        return $this->container['keyWords'];
    }

    /**
     * Sets keyWords
     *
     * @param string[]|null $keyWords 关键词，提报服务关键词，人工录入
     *
     * @return self
     */
    public function setKeyWords($keyWords)
    {
        $this->container['keyWords'] = $keyWords;

        return $this;
    }

    /**
     * Gets subServiceCode
     *
     * @return string|null
     */
    public function getSubServiceCode()
    {
        return $this->container['subServiceCode'];
    }

    /**
     * Sets subServiceCode
     *
     * @param string|null $subServiceCode 子服务code，提报服务关键词，alipay.open.app.service.list.query(服务批量查询)这个接口可以获取
     *
     * @return self
     */
    public function setSubServiceCode($subServiceCode)
    {
        $this->container['subServiceCode'] = $subServiceCode;

        return $this;
    }

    /**
     * Gets targetAppid
     *
     * @return string|null
     */
    public function getTargetAppid()
    {
        return $this->container['targetAppid'];
    }

    /**
     * Sets targetAppid
     *
     * @param string|null $targetAppid 小程序id
     *
     * @return self
     */
    public function setTargetAppid($targetAppid)
    {
        $this->container['targetAppid'] = $targetAppid;

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


