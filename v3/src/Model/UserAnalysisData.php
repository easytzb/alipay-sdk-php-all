<?php
/**
 * UserAnalysisData
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
 * UserAnalysisData Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UserAnalysisData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserAnalysisData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cancelUserCnt' => 'string',
        'cumulateUserCnt' => 'string',
        'date' => 'string',
        'growUserCnt' => 'string',
        'newUserCnt' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cancelUserCnt' => null,
        'cumulateUserCnt' => null,
        'date' => null,
        'growUserCnt' => null,
        'newUserCnt' => null
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
        'cancelUserCnt' => 'cancel_user_cnt',
        'cumulateUserCnt' => 'cumulate_user_cnt',
        'date' => 'date',
        'growUserCnt' => 'grow_user_cnt',
        'newUserCnt' => 'new_user_cnt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cancelUserCnt' => 'setCancelUserCnt',
        'cumulateUserCnt' => 'setCumulateUserCnt',
        'date' => 'setDate',
        'growUserCnt' => 'setGrowUserCnt',
        'newUserCnt' => 'setNewUserCnt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cancelUserCnt' => 'getCancelUserCnt',
        'cumulateUserCnt' => 'getCumulateUserCnt',
        'date' => 'getDate',
        'growUserCnt' => 'getGrowUserCnt',
        'newUserCnt' => 'getNewUserCnt'
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
        $this->container['cancelUserCnt'] = $data['cancelUserCnt'] ?? null;
        $this->container['cumulateUserCnt'] = $data['cumulateUserCnt'] ?? null;
        $this->container['date'] = $data['date'] ?? null;
        $this->container['growUserCnt'] = $data['growUserCnt'] ?? null;
        $this->container['newUserCnt'] = $data['newUserCnt'] ?? null;
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
     * Gets cancelUserCnt
     *
     * @return string|null
     */
    public function getCancelUserCnt()
    {
        return $this->container['cancelUserCnt'];
    }

    /**
     * Sets cancelUserCnt
     *
     * @param string|null $cancelUserCnt 取消关注人数
     *
     * @return self
     */
    public function setCancelUserCnt($cancelUserCnt)
    {
        $this->container['cancelUserCnt'] = $cancelUserCnt;

        return $this;
    }

    /**
     * Gets cumulateUserCnt
     *
     * @return string|null
     */
    public function getCumulateUserCnt()
    {
        return $this->container['cumulateUserCnt'];
    }

    /**
     * Sets cumulateUserCnt
     *
     * @param string|null $cumulateUserCnt 累积关注人数
     *
     * @return self
     */
    public function setCumulateUserCnt($cumulateUserCnt)
    {
        $this->container['cumulateUserCnt'] = $cumulateUserCnt;

        return $this;
    }

    /**
     * Gets date
     *
     * @return string|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string|null $date 日期
     *
     * @return self
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets growUserCnt
     *
     * @return string|null
     */
    public function getGrowUserCnt()
    {
        return $this->container['growUserCnt'];
    }

    /**
     * Sets growUserCnt
     *
     * @param string|null $growUserCnt 净增关注人数
     *
     * @return self
     */
    public function setGrowUserCnt($growUserCnt)
    {
        $this->container['growUserCnt'] = $growUserCnt;

        return $this;
    }

    /**
     * Gets newUserCnt
     *
     * @return string|null
     */
    public function getNewUserCnt()
    {
        return $this->container['newUserCnt'];
    }

    /**
     * Sets newUserCnt
     *
     * @param string|null $newUserCnt 新关注人数
     *
     * @return self
     */
    public function setNewUserCnt($newUserCnt)
    {
        $this->container['newUserCnt'] = $newUserCnt;

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


