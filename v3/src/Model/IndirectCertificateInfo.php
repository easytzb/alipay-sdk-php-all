<?php
/**
 * IndirectCertificateInfo
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
 * IndirectCertificateInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class IndirectCertificateInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IndirectCertificateInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'certImage' => 'string',
        'certNo' => 'string',
        'certType' => 'string',
        'effectTime' => 'string',
        'expireTime' => 'string',
        'legalPersonName' => 'string',
        'merchantName' => 'string',
        'registerAddress' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'certImage' => null,
        'certNo' => null,
        'certType' => null,
        'effectTime' => null,
        'expireTime' => null,
        'legalPersonName' => null,
        'merchantName' => null,
        'registerAddress' => null
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
        'certImage' => 'cert_image',
        'certNo' => 'cert_no',
        'certType' => 'cert_type',
        'effectTime' => 'effect_time',
        'expireTime' => 'expire_time',
        'legalPersonName' => 'legal_person_name',
        'merchantName' => 'merchant_name',
        'registerAddress' => 'register_address'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'certImage' => 'setCertImage',
        'certNo' => 'setCertNo',
        'certType' => 'setCertType',
        'effectTime' => 'setEffectTime',
        'expireTime' => 'setExpireTime',
        'legalPersonName' => 'setLegalPersonName',
        'merchantName' => 'setMerchantName',
        'registerAddress' => 'setRegisterAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'certImage' => 'getCertImage',
        'certNo' => 'getCertNo',
        'certType' => 'getCertType',
        'effectTime' => 'getEffectTime',
        'expireTime' => 'getExpireTime',
        'legalPersonName' => 'getLegalPersonName',
        'merchantName' => 'getMerchantName',
        'registerAddress' => 'getRegisterAddress'
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
        $this->container['certImage'] = $data['certImage'] ?? null;
        $this->container['certNo'] = $data['certNo'] ?? null;
        $this->container['certType'] = $data['certType'] ?? null;
        $this->container['effectTime'] = $data['effectTime'] ?? null;
        $this->container['expireTime'] = $data['expireTime'] ?? null;
        $this->container['legalPersonName'] = $data['legalPersonName'] ?? null;
        $this->container['merchantName'] = $data['merchantName'] ?? null;
        $this->container['registerAddress'] = $data['registerAddress'] ?? null;
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
     * Gets certImage
     *
     * @return string|null
     */
    public function getCertImage()
    {
        return $this->container['certImage'];
    }

    /**
     * Sets certImage
     *
     * @param string|null $certImage 证照图片（使用图片上传接口）
     *
     * @return self
     */
    public function setCertImage($certImage)
    {
        $this->container['certImage'] = $certImage;

        return $this;
    }

    /**
     * Gets certNo
     *
     * @return string|null
     */
    public function getCertNo()
    {
        return $this->container['certNo'];
    }

    /**
     * Sets certNo
     *
     * @param string|null $certNo 证件编号
     *
     * @return self
     */
    public function setCertNo($certNo)
    {
        $this->container['certNo'] = $certNo;

        return $this;
    }

    /**
     * Gets certType
     *
     * @return string|null
     */
    public function getCertType()
    {
        return $this->container['certType'];
    }

    /**
     * Sets certType
     *
     * @param string|null $certType 登记证书类型时必填，枚举：统一社会信用代码证书（UNIT_SOCIAL_CREDIT）、慈善组织公开募捐资格证书（CHARITY_ORG_SOLICIT），社会团体法人登记证书（SOCIAL_ORG_LEGAL），民办非企业单位登记证书（CIVIL_UN_ENT），基金会法人登记证书（FOUNDATION_LEGAL_PERSON），农民专业合作社法人营业执照（FARMERS_COOPERATE），宗教活动场所登记证（RELIGION_PLACES），其他证书/批文/证明（OTHER_REG_CERT）
     *
     * @return self
     */
    public function setCertType($certType)
    {
        $this->container['certType'] = $certType;

        return $this;
    }

    /**
     * Gets effectTime
     *
     * @return string|null
     */
    public function getEffectTime()
    {
        return $this->container['effectTime'];
    }

    /**
     * Sets effectTime
     *
     * @param string|null $effectTime 证照生效时间
     *
     * @return self
     */
    public function setEffectTime($effectTime)
    {
        $this->container['effectTime'] = $effectTime;

        return $this;
    }

    /**
     * Gets expireTime
     *
     * @return string|null
     */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
     * Sets expireTime
     *
     * @param string|null $expireTime 证照过期时间
     *
     * @return self
     */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;

        return $this;
    }

    /**
     * Gets legalPersonName
     *
     * @return string|null
     */
    public function getLegalPersonName()
    {
        return $this->container['legalPersonName'];
    }

    /**
     * Sets legalPersonName
     *
     * @param string|null $legalPersonName 证照法人姓名
     *
     * @return self
     */
    public function setLegalPersonName($legalPersonName)
    {
        $this->container['legalPersonName'] = $legalPersonName;

        return $this;
    }

    /**
     * Gets merchantName
     *
     * @return string|null
     */
    public function getMerchantName()
    {
        return $this->container['merchantName'];
    }

    /**
     * Sets merchantName
     *
     * @param string|null $merchantName 证照商户名称
     *
     * @return self
     */
    public function setMerchantName($merchantName)
    {
        $this->container['merchantName'] = $merchantName;

        return $this;
    }

    /**
     * Gets registerAddress
     *
     * @return string|null
     */
    public function getRegisterAddress()
    {
        return $this->container['registerAddress'];
    }

    /**
     * Sets registerAddress
     *
     * @param string|null $registerAddress 证照注册地址
     *
     * @return self
     */
    public function setRegisterAddress($registerAddress)
    {
        $this->container['registerAddress'] = $registerAddress;

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


