<?php
/**
 * ZhimaCreditPayafteruseCreditagreementTransferModel
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
 * ZhimaCreditPayafteruseCreditagreementTransferModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ZhimaCreditPayafteruseCreditagreementTransferModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ZhimaCreditPayafteruseCreditagreementTransferModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'categoryId' => 'string',
        'deductAgreementNo' => 'string',
        'extendParams' => 'string',
        'outAgreementNo' => 'string',
        'productCode' => 'string',
        'zmServiceId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'categoryId' => null,
        'deductAgreementNo' => null,
        'extendParams' => null,
        'outAgreementNo' => null,
        'productCode' => null,
        'zmServiceId' => null
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
        'categoryId' => 'category_id',
        'deductAgreementNo' => 'deduct_agreement_no',
        'extendParams' => 'extend_params',
        'outAgreementNo' => 'out_agreement_no',
        'productCode' => 'product_code',
        'zmServiceId' => 'zm_service_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'categoryId' => 'setCategoryId',
        'deductAgreementNo' => 'setDeductAgreementNo',
        'extendParams' => 'setExtendParams',
        'outAgreementNo' => 'setOutAgreementNo',
        'productCode' => 'setProductCode',
        'zmServiceId' => 'setZmServiceId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'categoryId' => 'getCategoryId',
        'deductAgreementNo' => 'getDeductAgreementNo',
        'extendParams' => 'getExtendParams',
        'outAgreementNo' => 'getOutAgreementNo',
        'productCode' => 'getProductCode',
        'zmServiceId' => 'getZmServiceId'
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
        $this->container['categoryId'] = $data['categoryId'] ?? null;
        $this->container['deductAgreementNo'] = $data['deductAgreementNo'] ?? null;
        $this->container['extendParams'] = $data['extendParams'] ?? null;
        $this->container['outAgreementNo'] = $data['outAgreementNo'] ?? null;
        $this->container['productCode'] = $data['productCode'] ?? null;
        $this->container['zmServiceId'] = $data['zmServiceId'] ?? null;
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
     * Gets categoryId
     *
     * @return string|null
     */
    public function getCategoryId()
    {
        return $this->container['categoryId'];
    }

    /**
     * Sets categoryId
     *
     * @param string|null $categoryId 芝麻外部类目
     *
     * @return self
     */
    public function setCategoryId($categoryId)
    {
        $this->container['categoryId'] = $categoryId;

        return $this;
    }

    /**
     * Gets deductAgreementNo
     *
     * @return string|null
     */
    public function getDeductAgreementNo()
    {
        return $this->container['deductAgreementNo'];
    }

    /**
     * Sets deductAgreementNo
     *
     * @param string|null $deductAgreementNo 用户的代扣协议号
     *
     * @return self
     */
    public function setDeductAgreementNo($deductAgreementNo)
    {
        $this->container['deductAgreementNo'] = $deductAgreementNo;

        return $this;
    }

    /**
     * Gets extendParams
     *
     * @return string|null
     */
    public function getExtendParams()
    {
        return $this->container['extendParams'];
    }

    /**
     * Sets extendParams
     *
     * @param string|null $extendParams 业务扩展参数，Json格式
     *
     * @return self
     */
    public function setExtendParams($extendParams)
    {
        $this->container['extendParams'] = $extendParams;

        return $this;
    }

    /**
     * Gets outAgreementNo
     *
     * @return string|null
     */
    public function getOutAgreementNo()
    {
        return $this->container['outAgreementNo'];
    }

    /**
     * Sets outAgreementNo
     *
     * @param string|null $outAgreementNo 商户外部协议号，不同的支付宝用户需要传递不同的外部单号
     *
     * @return self
     */
    public function setOutAgreementNo($outAgreementNo)
    {
        $this->container['outAgreementNo'] = $outAgreementNo;

        return $this;
    }

    /**
     * Gets productCode
     *
     * @return string|null
     */
    public function getProductCode()
    {
        return $this->container['productCode'];
    }

    /**
     * Sets productCode
     *
     * @param string|null $productCode 商户签约的芝麻产品的产品码
     *
     * @return self
     */
    public function setProductCode($productCode)
    {
        $this->container['productCode'] = $productCode;

        return $this;
    }

    /**
     * Gets zmServiceId
     *
     * @return string|null
     */
    public function getZmServiceId()
    {
        return $this->container['zmServiceId'];
    }

    /**
     * Sets zmServiceId
     *
     * @param string|null $zmServiceId 芝麻信用服务ID
     *
     * @return self
     */
    public function setZmServiceId($zmServiceId)
    {
        $this->container['zmServiceId'] = $zmServiceId;

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


