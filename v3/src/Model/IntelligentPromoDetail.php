<?php
/**
 * IntelligentPromoDetail
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
 * IntelligentPromoDetail Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class IntelligentPromoDetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IntelligentPromoDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'budget' => '\Alipay\OpenAPISDK\Model\BudgetInfo',
        'campId' => 'string',
        'constraint' => '\Alipay\OpenAPISDK\Model\ConstraintInfo',
        'crowdConstraint' => '\Alipay\OpenAPISDK\Model\CrowdConstraintInfo',
        'desc' => 'string',
        'extInfo' => 'string',
        'forecastEffect' => '\Alipay\OpenAPISDK\Model\IntelligentPromoEffect',
        'merchantPromoType' => 'string',
        'name' => 'string',
        'promoTools' => '\Alipay\OpenAPISDK\Model\PromoTool[]',
        'publishChannels' => '\Alipay\OpenAPISDK\Model\PublishChannel[]',
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
        'budget' => null,
        'campId' => null,
        'constraint' => null,
        'crowdConstraint' => null,
        'desc' => null,
        'extInfo' => null,
        'forecastEffect' => null,
        'merchantPromoType' => null,
        'name' => null,
        'promoTools' => null,
        'publishChannels' => null,
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
        'budget' => 'budget',
        'campId' => 'camp_id',
        'constraint' => 'constraint',
        'crowdConstraint' => 'crowd_constraint',
        'desc' => 'desc',
        'extInfo' => 'ext_info',
        'forecastEffect' => 'forecast_effect',
        'merchantPromoType' => 'merchant_promo_type',
        'name' => 'name',
        'promoTools' => 'promo_tools',
        'publishChannels' => 'publish_channels',
        'templateId' => 'template_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'budget' => 'setBudget',
        'campId' => 'setCampId',
        'constraint' => 'setConstraint',
        'crowdConstraint' => 'setCrowdConstraint',
        'desc' => 'setDesc',
        'extInfo' => 'setExtInfo',
        'forecastEffect' => 'setForecastEffect',
        'merchantPromoType' => 'setMerchantPromoType',
        'name' => 'setName',
        'promoTools' => 'setPromoTools',
        'publishChannels' => 'setPublishChannels',
        'templateId' => 'setTemplateId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'budget' => 'getBudget',
        'campId' => 'getCampId',
        'constraint' => 'getConstraint',
        'crowdConstraint' => 'getCrowdConstraint',
        'desc' => 'getDesc',
        'extInfo' => 'getExtInfo',
        'forecastEffect' => 'getForecastEffect',
        'merchantPromoType' => 'getMerchantPromoType',
        'name' => 'getName',
        'promoTools' => 'getPromoTools',
        'publishChannels' => 'getPublishChannels',
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
        $this->container['budget'] = $data['budget'] ?? null;
        $this->container['campId'] = $data['campId'] ?? null;
        $this->container['constraint'] = $data['constraint'] ?? null;
        $this->container['crowdConstraint'] = $data['crowdConstraint'] ?? null;
        $this->container['desc'] = $data['desc'] ?? null;
        $this->container['extInfo'] = $data['extInfo'] ?? null;
        $this->container['forecastEffect'] = $data['forecastEffect'] ?? null;
        $this->container['merchantPromoType'] = $data['merchantPromoType'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['promoTools'] = $data['promoTools'] ?? null;
        $this->container['publishChannels'] = $data['publishChannels'] ?? null;
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
     * Gets budget
     *
     * @return \Alipay\OpenAPISDK\Model\BudgetInfo|null
     */
    public function getBudget()
    {
        return $this->container['budget'];
    }

    /**
     * Sets budget
     *
     * @param \Alipay\OpenAPISDK\Model\BudgetInfo|null $budget budget
     *
     * @return self
     */
    public function setBudget($budget)
    {
        $this->container['budget'] = $budget;

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
     * @param string|null $campId 营销活动的id，也就是消费送的活动id
     *
     * @return self
     */
    public function setCampId($campId)
    {
        $this->container['campId'] = $campId;

        return $this;
    }

    /**
     * Gets constraint
     *
     * @return \Alipay\OpenAPISDK\Model\ConstraintInfo|null
     */
    public function getConstraint()
    {
        return $this->container['constraint'];
    }

    /**
     * Sets constraint
     *
     * @param \Alipay\OpenAPISDK\Model\ConstraintInfo|null $constraint constraint
     *
     * @return self
     */
    public function setConstraint($constraint)
    {
        $this->container['constraint'] = $constraint;

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
     * @param string|null $desc 智能营销活动的子活动
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
     * @param string|null $merchantPromoType 自运营活动类型。DIRECT_SEND：直发奖；CONSUME_SEND：消费送
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
     * @param string|null $name 子营销活动名称
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets promoTools
     *
     * @return \Alipay\OpenAPISDK\Model\PromoTool[]|null
     */
    public function getPromoTools()
    {
        return $this->container['promoTools'];
    }

    /**
     * Sets promoTools
     *
     * @param \Alipay\OpenAPISDK\Model\PromoTool[]|null $promoTools 营销工具集合。主要是活动涉及到的奖品信息
     *
     * @return self
     */
    public function setPromoTools($promoTools)
    {
        $this->container['promoTools'] = $promoTools;

        return $this;
    }

    /**
     * Gets publishChannels
     *
     * @return \Alipay\OpenAPISDK\Model\PublishChannel[]|null
     */
    public function getPublishChannels()
    {
        return $this->container['publishChannels'];
    }

    /**
     * Sets publishChannels
     *
     * @param \Alipay\OpenAPISDK\Model\PublishChannel[]|null $publishChannels 投放渠道信息
     *
     * @return self
     */
    public function setPublishChannels($publishChannels)
    {
        $this->container['publishChannels'] = $publishChannels;

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


