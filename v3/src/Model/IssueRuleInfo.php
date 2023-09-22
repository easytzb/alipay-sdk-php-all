<?php
/**
 * IssueRuleInfo
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
 * IssueRuleInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class IssueRuleInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IssueRuleInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'effectivePeriod' => 'string',
        'invalidMode' => 'int',
        'invalidModeValue' => 'string',
        'issueAmountValue' => 'string',
        'issueEndDate' => 'string',
        'issueRuleId' => 'string',
        'issueRuleName' => 'string',
        'issueStartDate' => 'string',
        'issueType' => 'string',
        'outerSourceId' => 'string',
        'quotaType' => 'string',
        'shareMode' => 'int',
        'targetId' => 'string',
        'targetType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'effectivePeriod' => null,
        'invalidMode' => null,
        'invalidModeValue' => null,
        'issueAmountValue' => null,
        'issueEndDate' => null,
        'issueRuleId' => null,
        'issueRuleName' => null,
        'issueStartDate' => null,
        'issueType' => null,
        'outerSourceId' => null,
        'quotaType' => null,
        'shareMode' => null,
        'targetId' => null,
        'targetType' => null
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
        'effectivePeriod' => 'effective_period',
        'invalidMode' => 'invalid_mode',
        'invalidModeValue' => 'invalid_mode_value',
        'issueAmountValue' => 'issue_amount_value',
        'issueEndDate' => 'issue_end_date',
        'issueRuleId' => 'issue_rule_id',
        'issueRuleName' => 'issue_rule_name',
        'issueStartDate' => 'issue_start_date',
        'issueType' => 'issue_type',
        'outerSourceId' => 'outer_source_id',
        'quotaType' => 'quota_type',
        'shareMode' => 'share_mode',
        'targetId' => 'target_id',
        'targetType' => 'target_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'effectivePeriod' => 'setEffectivePeriod',
        'invalidMode' => 'setInvalidMode',
        'invalidModeValue' => 'setInvalidModeValue',
        'issueAmountValue' => 'setIssueAmountValue',
        'issueEndDate' => 'setIssueEndDate',
        'issueRuleId' => 'setIssueRuleId',
        'issueRuleName' => 'setIssueRuleName',
        'issueStartDate' => 'setIssueStartDate',
        'issueType' => 'setIssueType',
        'outerSourceId' => 'setOuterSourceId',
        'quotaType' => 'setQuotaType',
        'shareMode' => 'setShareMode',
        'targetId' => 'setTargetId',
        'targetType' => 'setTargetType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'effectivePeriod' => 'getEffectivePeriod',
        'invalidMode' => 'getInvalidMode',
        'invalidModeValue' => 'getInvalidModeValue',
        'issueAmountValue' => 'getIssueAmountValue',
        'issueEndDate' => 'getIssueEndDate',
        'issueRuleId' => 'getIssueRuleId',
        'issueRuleName' => 'getIssueRuleName',
        'issueStartDate' => 'getIssueStartDate',
        'issueType' => 'getIssueType',
        'outerSourceId' => 'getOuterSourceId',
        'quotaType' => 'getQuotaType',
        'shareMode' => 'getShareMode',
        'targetId' => 'getTargetId',
        'targetType' => 'getTargetType'
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
        $this->container['effectivePeriod'] = $data['effectivePeriod'] ?? null;
        $this->container['invalidMode'] = $data['invalidMode'] ?? null;
        $this->container['invalidModeValue'] = $data['invalidModeValue'] ?? null;
        $this->container['issueAmountValue'] = $data['issueAmountValue'] ?? null;
        $this->container['issueEndDate'] = $data['issueEndDate'] ?? null;
        $this->container['issueRuleId'] = $data['issueRuleId'] ?? null;
        $this->container['issueRuleName'] = $data['issueRuleName'] ?? null;
        $this->container['issueStartDate'] = $data['issueStartDate'] ?? null;
        $this->container['issueType'] = $data['issueType'] ?? null;
        $this->container['outerSourceId'] = $data['outerSourceId'] ?? null;
        $this->container['quotaType'] = $data['quotaType'] ?? null;
        $this->container['shareMode'] = $data['shareMode'] ?? null;
        $this->container['targetId'] = $data['targetId'] ?? null;
        $this->container['targetType'] = $data['targetType'] ?? null;
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
     * Gets effectivePeriod
     *
     * @return string|null
     */
    public function getEffectivePeriod()
    {
        return $this->container['effectivePeriod'];
    }

    /**
     * Sets effectivePeriod
     *
     * @param string|null $effectivePeriod 生效时间段
     *
     * @return self
     */
    public function setEffectivePeriod($effectivePeriod)
    {
        $this->container['effectivePeriod'] = $effectivePeriod;

        return $this;
    }

    /**
     * Gets invalidMode
     *
     * @return int|null
     */
    public function getInvalidMode()
    {
        return $this->container['invalidMode'];
    }

    /**
     * Sets invalidMode
     *
     * @param int|null $invalidMode 累计类型，默认为0 可选值：0（不可累计）、1（可累计）、2（累计天数）、3（累计到指定日期）
     *
     * @return self
     */
    public function setInvalidMode($invalidMode)
    {
        $this->container['invalidMode'] = $invalidMode;

        return $this;
    }

    /**
     * Gets invalidModeValue
     *
     * @return string|null
     */
    public function getInvalidModeValue()
    {
        return $this->container['invalidModeValue'];
    }

    /**
     * Sets invalidModeValue
     *
     * @param string|null $invalidModeValue 累计类型值
     *
     * @return self
     */
    public function setInvalidModeValue($invalidModeValue)
    {
        $this->container['invalidModeValue'] = $invalidModeValue;

        return $this;
    }

    /**
     * Gets issueAmountValue
     *
     * @return string|null
     */
    public function getIssueAmountValue()
    {
        return $this->container['issueAmountValue'];
    }

    /**
     * Sets issueAmountValue
     *
     * @param string|null $issueAmountValue 发放金额，单位元
     *
     * @return self
     */
    public function setIssueAmountValue($issueAmountValue)
    {
        $this->container['issueAmountValue'] = $issueAmountValue;

        return $this;
    }

    /**
     * Gets issueEndDate
     *
     * @return string|null
     */
    public function getIssueEndDate()
    {
        return $this->container['issueEndDate'];
    }

    /**
     * Sets issueEndDate
     *
     * @param string|null $issueEndDate 发放规则有效结束时间
     *
     * @return self
     */
    public function setIssueEndDate($issueEndDate)
    {
        $this->container['issueEndDate'] = $issueEndDate;

        return $this;
    }

    /**
     * Gets issueRuleId
     *
     * @return string|null
     */
    public function getIssueRuleId()
    {
        return $this->container['issueRuleId'];
    }

    /**
     * Sets issueRuleId
     *
     * @param string|null $issueRuleId 发放规则id
     *
     * @return self
     */
    public function setIssueRuleId($issueRuleId)
    {
        $this->container['issueRuleId'] = $issueRuleId;

        return $this;
    }

    /**
     * Gets issueRuleName
     *
     * @return string|null
     */
    public function getIssueRuleName()
    {
        return $this->container['issueRuleName'];
    }

    /**
     * Sets issueRuleName
     *
     * @param string|null $issueRuleName 发放规则名称
     *
     * @return self
     */
    public function setIssueRuleName($issueRuleName)
    {
        $this->container['issueRuleName'] = $issueRuleName;

        return $this;
    }

    /**
     * Gets issueStartDate
     *
     * @return string|null
     */
    public function getIssueStartDate()
    {
        return $this->container['issueStartDate'];
    }

    /**
     * Sets issueStartDate
     *
     * @param string|null $issueStartDate 发放规则有效起始时间
     *
     * @return self
     */
    public function setIssueStartDate($issueStartDate)
    {
        $this->container['issueStartDate'] = $issueStartDate;

        return $this;
    }

    /**
     * Gets issueType
     *
     * @return string|null
     */
    public function getIssueType()
    {
        return $this->container['issueType'];
    }

    /**
     * Sets issueType
     *
     * @param string|null $issueType 发放类型
     *
     * @return self
     */
    public function setIssueType($issueType)
    {
        $this->container['issueType'] = $issueType;

        return $this;
    }

    /**
     * Gets outerSourceId
     *
     * @return string|null
     */
    public function getOuterSourceId()
    {
        return $this->container['outerSourceId'];
    }

    /**
     * Sets outerSourceId
     *
     * @param string|null $outerSourceId 外部发放规则id
     *
     * @return self
     */
    public function setOuterSourceId($outerSourceId)
    {
        $this->container['outerSourceId'] = $outerSourceId;

        return $this;
    }

    /**
     * Gets quotaType
     *
     * @return string|null
     */
    public function getQuotaType()
    {
        return $this->container['quotaType'];
    }

    /**
     * Sets quotaType
     *
     * @param string|null $quotaType 额度类型
     *
     * @return self
     */
    public function setQuotaType($quotaType)
    {
        $this->container['quotaType'] = $quotaType;

        return $this;
    }

    /**
     * Gets shareMode
     *
     * @return int|null
     */
    public function getShareMode()
    {
        return $this->container['shareMode'];
    }

    /**
     * Sets shareMode
     *
     * @param int|null $shareMode 是否可转赠
     *
     * @return self
     */
    public function setShareMode($shareMode)
    {
        $this->container['shareMode'] = $shareMode;

        return $this;
    }

    /**
     * Gets targetId
     *
     * @return string|null
     */
    public function getTargetId()
    {
        return $this->container['targetId'];
    }

    /**
     * Sets targetId
     *
     * @param string|null $targetId 目标id
     *
     * @return self
     */
    public function setTargetId($targetId)
    {
        $this->container['targetId'] = $targetId;

        return $this;
    }

    /**
     * Gets targetType
     *
     * @return string|null
     */
    public function getTargetType()
    {
        return $this->container['targetType'];
    }

    /**
     * Sets targetType
     *
     * @param string|null $targetType 发放规则归属的目标类型
     *
     * @return self
     */
    public function setTargetType($targetType)
    {
        $this->container['targetType'] = $targetType;

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


