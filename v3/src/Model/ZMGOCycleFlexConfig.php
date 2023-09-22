<?php
/**
 * ZMGOCycleFlexConfig
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
 * ZMGOCycleFlexConfig Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ZMGOCycleFlexConfig implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ZMGOCycleFlexConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cycleFlexWithholdFeeName' => 'string',
        'cycleFlexWithholdMaxPrice' => 'string',
        'cycleFlexWithholdTotalPeriodCount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cycleFlexWithholdFeeName' => null,
        'cycleFlexWithholdMaxPrice' => null,
        'cycleFlexWithholdTotalPeriodCount' => null
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
        'cycleFlexWithholdFeeName' => 'cycle_flex_withhold_fee_name',
        'cycleFlexWithholdMaxPrice' => 'cycle_flex_withhold_max_price',
        'cycleFlexWithholdTotalPeriodCount' => 'cycle_flex_withhold_total_period_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cycleFlexWithholdFeeName' => 'setCycleFlexWithholdFeeName',
        'cycleFlexWithholdMaxPrice' => 'setCycleFlexWithholdMaxPrice',
        'cycleFlexWithholdTotalPeriodCount' => 'setCycleFlexWithholdTotalPeriodCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cycleFlexWithholdFeeName' => 'getCycleFlexWithholdFeeName',
        'cycleFlexWithholdMaxPrice' => 'getCycleFlexWithholdMaxPrice',
        'cycleFlexWithholdTotalPeriodCount' => 'getCycleFlexWithholdTotalPeriodCount'
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
        $this->container['cycleFlexWithholdFeeName'] = $data['cycleFlexWithholdFeeName'] ?? null;
        $this->container['cycleFlexWithholdMaxPrice'] = $data['cycleFlexWithholdMaxPrice'] ?? null;
        $this->container['cycleFlexWithholdTotalPeriodCount'] = $data['cycleFlexWithholdTotalPeriodCount'] ?? null;
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
     * Gets cycleFlexWithholdFeeName
     *
     * @return string|null
     */
    public function getCycleFlexWithholdFeeName()
    {
        return $this->container['cycleFlexWithholdFeeName'];
    }

    /**
     * Sets cycleFlexWithholdFeeName
     *
     * @param string|null $cycleFlexWithholdFeeName 周期灵活扣的费用名称
     *
     * @return self
     */
    public function setCycleFlexWithholdFeeName($cycleFlexWithholdFeeName)
    {
        $this->container['cycleFlexWithholdFeeName'] = $cycleFlexWithholdFeeName;

        return $this;
    }

    /**
     * Gets cycleFlexWithholdMaxPrice
     *
     * @return string|null
     */
    public function getCycleFlexWithholdMaxPrice()
    {
        return $this->container['cycleFlexWithholdMaxPrice'];
    }

    /**
     * Sets cycleFlexWithholdMaxPrice
     *
     * @param string|null $cycleFlexWithholdMaxPrice 周期灵活扣单期扣款的最大额度
     *
     * @return self
     */
    public function setCycleFlexWithholdMaxPrice($cycleFlexWithholdMaxPrice)
    {
        $this->container['cycleFlexWithholdMaxPrice'] = $cycleFlexWithholdMaxPrice;

        return $this;
    }

    /**
     * Gets cycleFlexWithholdTotalPeriodCount
     *
     * @return int|null
     */
    public function getCycleFlexWithholdTotalPeriodCount()
    {
        return $this->container['cycleFlexWithholdTotalPeriodCount'];
    }

    /**
     * Sets cycleFlexWithholdTotalPeriodCount
     *
     * @param int|null $cycleFlexWithholdTotalPeriodCount 周期灵活扣的总期数
     *
     * @return self
     */
    public function setCycleFlexWithholdTotalPeriodCount($cycleFlexWithholdTotalPeriodCount)
    {
        $this->container['cycleFlexWithholdTotalPeriodCount'] = $cycleFlexWithholdTotalPeriodCount;

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


