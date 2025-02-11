<?php
/**
 * InteligentGeneralMerchantPromo
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
 * InteligentGeneralMerchantPromo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InteligentGeneralMerchantPromo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InteligentGeneralMerchantPromo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'campId' => 'string',
        'crowdConstraint' => '\Alipay\OpenAPISDK\Model\CrowdConstraintInfo',
        'desc' => 'string',
        'extInfo' => 'string',
        'forecastEffect' => '\Alipay\OpenAPISDK\Model\IntelligentPromoEffect',
        'inteligentBudget' => '\Alipay\OpenAPISDK\Model\InteligentBudgetInfo',
        'inteligentConstraint' => '\Alipay\OpenAPISDK\Model\InteligentConstraintInfo',
        'inteligentPromoTools' => '\Alipay\OpenAPISDK\Model\InteligentPromoTool[]',
        'inteligentPublishChannels' => '\Alipay\OpenAPISDK\Model\InteligentPublishChannel[]',
        'merchantPromoType' => 'string',
        'name' => 'string',
        'templateId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'campId' => null,
        'crowdConstraint' => null,
        'desc' => null,
        'extInfo' => null,
        'forecastEffect' => null,
        'inteligentBudget' => null,
        'inteligentConstraint' => null,
        'inteligentPromoTools' => null,
        'inteligentPublishChannels' => null,
        'merchantPromoType' => null,
        'name' => null,
        'templateId' => null
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
        'campId' => 'camp_id',
        'crowdConstraint' => 'crowd_constraint',
        'desc' => 'desc',
        'extInfo' => 'ext_info',
        'forecastEffect' => 'forecast_effect',
        'inteligentBudget' => 'inteligent_budget',
        'inteligentConstraint' => 'inteligent_constraint',
        'inteligentPromoTools' => 'inteligent_promo_tools',
        'inteligentPublishChannels' => 'inteligent_publish_channels',
        'merchantPromoType' => 'merchant_promo_type',
        'name' => 'name',
        'templateId' => 'template_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'campId' => 'setCampId',
        'crowdConstraint' => 'setCrowdConstraint',
        'desc' => 'setDesc',
        'extInfo' => 'setExtInfo',
        'forecastEffect' => 'setForecastEffect',
        'inteligentBudget' => 'setInteligentBudget',
        'inteligentConstraint' => 'setInteligentConstraint',
        'inteligentPromoTools' => 'setInteligentPromoTools',
        'inteligentPublishChannels' => 'setInteligentPublishChannels',
        'merchantPromoType' => 'setMerchantPromoType',
        'name' => 'setName',
        'templateId' => 'setTemplateId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'campId' => 'getCampId',
        'crowdConstraint' => 'getCrowdConstraint',
        'desc' => 'getDesc',
        'extInfo' => 'getExtInfo',
        'forecastEffect' => 'getForecastEffect',
        'inteligentBudget' => 'getInteligentBudget',
        'inteligentConstraint' => 'getInteligentConstraint',
        'inteligentPromoTools' => 'getInteligentPromoTools',
        'inteligentPublishChannels' => 'getInteligentPublishChannels',
        'merchantPromoType' => 'getMerchantPromoType',
        'name' => 'getName',
        'templateId' => 'getTemplateId'
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
        $this->container['campId'] = $data['campId'] ?? null;
        $this->container['crowdConstraint'] = $data['crowdConstraint'] ?? null;
        $this->container['desc'] = $data['desc'] ?? null;
        $this->container['extInfo'] = $data['extInfo'] ?? null;
        $this->container['forecastEffect'] = $data['forecastEffect'] ?? null;
        $this->container['inteligentBudget'] = $data['inteligentBudget'] ?? null;
        $this->container['inteligentConstraint'] = $data['inteligentConstraint'] ?? null;
        $this->container['inteligentPromoTools'] = $data['inteligentPromoTools'] ?? null;
        $this->container['inteligentPublishChannels'] = $data['inteligentPublishChannels'] ?? null;
        $this->container['merchantPromoType'] = $data['merchantPromoType'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['templateId'] = $data['templateId'] ?? null;
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
     * @param string|null $campId 营销活动的id，如merchant_promo_type：CONSUME_SEND即消费送的活动id
     *
     * @return self
     */
    public function setCampId($campId)
    {
        $this->container['campId'] = $campId;

        return $this;
    }

    /**
     * Gets crowdConstraint
     *
     * @return \Alipay\OpenAPISDK\Model\CrowdConstraintInfo|null
     */
    public function getCrowdConstraint()
    {
        return $this->container['crowdConstraint'];
    }

    /**
     * Sets crowdConstraint
     *
     * @param \Alipay\OpenAPISDK\Model\CrowdConstraintInfo|null $crowdConstraint crowdConstraint
     *
     * @return self
     */
    public function setCrowdConstraint($crowdConstraint)
    {
        $this->container['crowdConstraint'] = $crowdConstraint;

        return $this;
    }

    /**
     * Gets desc
     *
     * @return string|null
     */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
     * Sets desc
     *
     * @param string|null $desc 活动描述信息，该信息有可能会在店铺详情页漏出，请自己填写
     *
     * @return self
     */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;

        return $this;
    }

    /**
     * Gets extInfo
     *
     * @return string|null
     */
    public function getExtInfo()
    {
        return $this->container['extInfo'];
    }

    /**
     * Sets extInfo
     *
     * @param string|null $extInfo 活动扩展信息
     *
     * @return self
     */
    public function setExtInfo($extInfo)
    {
        $this->container['extInfo'] = $extInfo;

        return $this;
    }

    /**
     * Gets forecastEffect
     *
     * @return \Alipay\OpenAPISDK\Model\IntelligentPromoEffect|null
     */
    public function getForecastEffect()
    {
        return $this->container['forecastEffect'];
    }

    /**
     * Sets forecastEffect
     *
     * @param \Alipay\OpenAPISDK\Model\IntelligentPromoEffect|null $forecastEffect forecastEffect
     *
     * @return self
     */
    public function setForecastEffect($forecastEffect)
    {
        $this->container['forecastEffect'] = $forecastEffect;

        return $this;
    }

    /**
     * Gets inteligentBudget
     *
     * @return \Alipay\OpenAPISDK\Model\InteligentBudgetInfo|null
     */
    public function getInteligentBudget()
    {
        return $this->container['inteligentBudget'];
    }

    /**
     * Sets inteligentBudget
     *
     * @param \Alipay\OpenAPISDK\Model\InteligentBudgetInfo|null $inteligentBudget inteligentBudget
     *
     * @return self
     */
    public function setInteligentBudget($inteligentBudget)
    {
        $this->container['inteligentBudget'] = $inteligentBudget;

        return $this;
    }

    /**
     * Gets inteligentConstraint
     *
     * @return \Alipay\OpenAPISDK\Model\InteligentConstraintInfo|null
     */
    public function getInteligentConstraint()
    {
        return $this->container['inteligentConstraint'];
    }

    /**
     * Sets inteligentConstraint
     *
     * @param \Alipay\OpenAPISDK\Model\InteligentConstraintInfo|null $inteligentConstraint inteligentConstraint
     *
     * @return self
     */
    public function setInteligentConstraint($inteligentConstraint)
    {
        $this->container['inteligentConstraint'] = $inteligentConstraint;

        return $this;
    }

    /**
     * Gets inteligentPromoTools
     *
     * @return \Alipay\OpenAPISDK\Model\InteligentPromoTool[]|null
     */
    public function getInteligentPromoTools()
    {
        return $this->container['inteligentPromoTools'];
    }

    /**
     * Sets inteligentPromoTools
     *
     * @param \Alipay\OpenAPISDK\Model\InteligentPromoTool[]|null $inteligentPromoTools 营销工具集合。主要是活动涉及到的奖品信息
     *
     * @return self
     */
    public function setInteligentPromoTools($inteligentPromoTools)
    {
        $this->container['inteligentPromoTools'] = $inteligentPromoTools;

        return $this;
    }

    /**
     * Gets inteligentPublishChannels
     *
     * @return \Alipay\OpenAPISDK\Model\InteligentPublishChannel[]|null
     */
    public function getInteligentPublishChannels()
    {
        return $this->container['inteligentPublishChannels'];
    }

    /**
     * Sets inteligentPublishChannels
     *
     * @param \Alipay\OpenAPISDK\Model\InteligentPublishChannel[]|null $inteligentPublishChannels 投放渠道信息
     *
     * @return self
     */
    public function setInteligentPublishChannels($inteligentPublishChannels)
    {
        $this->container['inteligentPublishChannels'] = $inteligentPublishChannels;

        return $this;
    }

    /**
     * Gets merchantPromoType
     *
     * @return string|null
     */
    public function getMerchantPromoType()
    {
        return $this->container['merchantPromoType'];
    }

    /**
     * Sets merchantPromoType
     *
     * @param string|null $merchantPromoType 营销活动类型；枚举（DIRECT_SEND：直发奖；CONSUME_SEND：消费送）
     *
     * @return self
     */
    public function setMerchantPromoType($merchantPromoType)
    {
        $this->container['merchantPromoType'] = $merchantPromoType;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name 营销活动名称
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets templateId
     *
     * @return string|null
     */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
     * Sets templateId
     *
     * @param string|null $templateId 子营销活动对应的模板id
     *
     * @return self
     */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;

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


