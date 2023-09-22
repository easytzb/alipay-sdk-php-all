<?php
/**
 * ExpenseCtrRuleInfo
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
 * ExpenseCtrRuleInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ExpenseCtrRuleInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExpenseCtrRuleInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ruleFactor' => 'string',
        'ruleId' => 'string',
        'ruleName' => 'string',
        'ruleOperator' => 'string',
        'ruleValue' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ruleFactor' => null,
        'ruleId' => null,
        'ruleName' => null,
        'ruleOperator' => null,
        'ruleValue' => null
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
        'ruleFactor' => 'rule_factor',
        'ruleId' => 'rule_id',
        'ruleName' => 'rule_name',
        'ruleOperator' => 'rule_operator',
        'ruleValue' => 'rule_value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ruleFactor' => 'setRuleFactor',
        'ruleId' => 'setRuleId',
        'ruleName' => 'setRuleName',
        'ruleOperator' => 'setRuleOperator',
        'ruleValue' => 'setRuleValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ruleFactor' => 'getRuleFactor',
        'ruleId' => 'getRuleId',
        'ruleName' => 'getRuleName',
        'ruleOperator' => 'getRuleOperator',
        'ruleValue' => 'getRuleValue'
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
        $this->container['ruleFactor'] = $data['ruleFactor'] ?? null;
        $this->container['ruleId'] = $data['ruleId'] ?? null;
        $this->container['ruleName'] = $data['ruleName'] ?? null;
        $this->container['ruleOperator'] = $data['ruleOperator'] ?? null;
        $this->container['ruleValue'] = $data['ruleValue'] ?? null;
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
     * Gets ruleFactor
     *
     * @return string|null
     */
    public function getRuleFactor()
    {
        return $this->container['ruleFactor'];
    }

    /**
     * Sets ruleFactor
     *
     * @param string|null $ruleFactor 费控维度
     *
     * @return self
     */
    public function setRuleFactor($ruleFactor)
    {
        $this->container['ruleFactor'] = $ruleFactor;

        return $this;
    }

    /**
     * Gets ruleId
     *
     * @return string|null
     */
    public function getRuleId()
    {
        return $this->container['ruleId'];
    }

    /**
     * Sets ruleId
     *
     * @param string|null $ruleId 费控条件ID
     *
     * @return self
     */
    public function setRuleId($ruleId)
    {
        $this->container['ruleId'] = $ruleId;

        return $this;
    }

    /**
     * Gets ruleName
     *
     * @return string|null
     */
    public function getRuleName()
    {
        return $this->container['ruleName'];
    }

    /**
     * Sets ruleName
     *
     * @param string|null $ruleName 费控条件名称
     *
     * @return self
     */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;

        return $this;
    }

    /**
     * Gets ruleOperator
     *
     * @return string|null
     */
    public function getRuleOperator()
    {
        return $this->container['ruleOperator'];
    }

    /**
     * Sets ruleOperator
     *
     * @param string|null $ruleOperator 费控条件操作符 枚举值： LT(\"<\",\"小于\") LE(\"<=\",\"小于等于\") EQ(\"=\",\"等于\") NE(\"!=\",\"不等于\") GE(\">=\",\"大于等于\") GT(\">\",\"大于\")
     *
     * @return self
     */
    public function setRuleOperator($ruleOperator)
    {
        $this->container['ruleOperator'] = $ruleOperator;

        return $this;
    }

    /**
     * Gets ruleValue
     *
     * @return string|null
     */
    public function getRuleValue()
    {
        return $this->container['ruleValue'];
    }

    /**
     * Sets ruleValue
     *
     * @param string|null $ruleValue 费控条件值
     *
     * @return self
     */
    public function setRuleValue($ruleValue)
    {
        $this->container['ruleValue'] = $ruleValue;

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


