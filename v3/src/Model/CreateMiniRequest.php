<?php
/**
 * CreateMiniRequest
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
 * CreateMiniRequest Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateMiniRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateMiniRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'alipayAccount' => 'string',
        'appName' => 'string',
        'certName' => 'string',
        'certNo' => 'string',
        'contactName' => 'string',
        'contactPhone' => 'string',
        'isIndividual' => 'bool',
        'legalPersonalName' => 'string',
        'licensePic' => 'string',
        'outOrderNo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'alipayAccount' => null,
        'appName' => null,
        'certName' => null,
        'certNo' => null,
        'contactName' => null,
        'contactPhone' => null,
        'isIndividual' => null,
        'legalPersonalName' => null,
        'licensePic' => null,
        'outOrderNo' => null
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
        'alipayAccount' => 'alipay_account',
        'appName' => 'app_name',
        'certName' => 'cert_name',
        'certNo' => 'cert_no',
        'contactName' => 'contact_name',
        'contactPhone' => 'contact_phone',
        'isIndividual' => 'is_individual',
        'legalPersonalName' => 'legal_personal_name',
        'licensePic' => 'license_pic',
        'outOrderNo' => 'out_order_no'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alipayAccount' => 'setAlipayAccount',
        'appName' => 'setAppName',
        'certName' => 'setCertName',
        'certNo' => 'setCertNo',
        'contactName' => 'setContactName',
        'contactPhone' => 'setContactPhone',
        'isIndividual' => 'setIsIndividual',
        'legalPersonalName' => 'setLegalPersonalName',
        'licensePic' => 'setLicensePic',
        'outOrderNo' => 'setOutOrderNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alipayAccount' => 'getAlipayAccount',
        'appName' => 'getAppName',
        'certName' => 'getCertName',
        'certNo' => 'getCertNo',
        'contactName' => 'getContactName',
        'contactPhone' => 'getContactPhone',
        'isIndividual' => 'getIsIndividual',
        'legalPersonalName' => 'getLegalPersonalName',
        'licensePic' => 'getLicensePic',
        'outOrderNo' => 'getOutOrderNo'
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
        $this->container['alipayAccount'] = $data['alipayAccount'] ?? null;
        $this->container['appName'] = $data['appName'] ?? null;
        $this->container['certName'] = $data['certName'] ?? null;
        $this->container['certNo'] = $data['certNo'] ?? null;
        $this->container['contactName'] = $data['contactName'] ?? null;
        $this->container['contactPhone'] = $data['contactPhone'] ?? null;
        $this->container['isIndividual'] = $data['isIndividual'] ?? null;
        $this->container['legalPersonalName'] = $data['legalPersonalName'] ?? null;
        $this->container['licensePic'] = $data['licensePic'] ?? null;
        $this->container['outOrderNo'] = $data['outOrderNo'] ?? null;
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
     * Gets alipayAccount
     *
     * @return string|null
     */
    public function getAlipayAccount()
    {
        return $this->container['alipayAccount'];
    }

    /**
     * Sets alipayAccount
     *
     * @param string|null $alipayAccount 商家登录支付宝的邮箱帐号或手机号。（1）默认只支持企业账号类型；（2）将is_individual设置为true，支持个体工商户类型的账号（同时也兼容企业账号）（3）将is_individual设置为true且上传营业执照照片，将同时对具备个体工商户营业执照的商家个人账号认证成为个体工商户账号（同时也兼容企业账号、个体工商户账号）
     *
     * @return self
     */
    public function setAlipayAccount($alipayAccount)
    {
        $this->container['alipayAccount'] = $alipayAccount;

        return $this;
    }

    /**
     * Gets appName
     *
     * @return string|null
     */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
     * Sets appName
     *
     * @param string|null $appName 小程序名称
     *
     * @return self
     */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;

        return $this;
    }

    /**
     * Gets certName
     *
     * @return string|null
     */
    public function getCertName()
    {
        return $this->container['certName'];
    }

    /**
     * Sets certName
     *
     * @param string|null $certName 营业执照企业名称，如果是“无主体名称个体工商户”则填“个体户+法人姓名”，例如“个体户张三”
     *
     * @return self
     */
    public function setCertName($certName)
    {
        $this->container['certName'] = $certName;

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
     * @param string|null $certNo 营业执照编码
     *
     * @return self
     */
    public function setCertNo($certNo)
    {
        $this->container['certNo'] = $certNo;

        return $this;
    }

    /**
     * Gets contactName
     *
     * @return string|null
     */
    public function getContactName()
    {
        return $this->container['contactName'];
    }

    /**
     * Sets contactName
     *
     * @param string|null $contactName 商家联系人名称
     *
     * @return self
     */
    public function setContactName($contactName)
    {
        $this->container['contactName'] = $contactName;

        return $this;
    }

    /**
     * Gets contactPhone
     *
     * @return string|null
     */
    public function getContactPhone()
    {
        return $this->container['contactPhone'];
    }

    /**
     * Sets contactPhone
     *
     * @param string|null $contactPhone 商家联系人手机电话
     *
     * @return self
     */
    public function setContactPhone($contactPhone)
    {
        $this->container['contactPhone'] = $contactPhone;

        return $this;
    }

    /**
     * Gets isIndividual
     *
     * @return bool|null
     */
    public function getIsIndividual()
    {
        return $this->container['isIndividual'];
    }

    /**
     * Sets isIndividual
     *
     * @param bool|null $isIndividual 默认为 false。当设置为 true 时，支持个体工商户的账号类型（同时兼容企业账号）
     *
     * @return self
     */
    public function setIsIndividual($isIndividual)
    {
        $this->container['isIndividual'] = $isIndividual;

        return $this;
    }

    /**
     * Gets legalPersonalName
     *
     * @return string|null
     */
    public function getLegalPersonalName()
    {
        return $this->container['legalPersonalName'];
    }

    /**
     * Sets legalPersonalName
     *
     * @param string|null $legalPersonalName 商家法人名称
     *
     * @return self
     */
    public function setLegalPersonalName($legalPersonalName)
    {
        $this->container['legalPersonalName'] = $legalPersonalName;

        return $this;
    }

    /**
     * Gets licensePic
     *
     * @return string|null
     */
    public function getLicensePic()
    {
        return $this->container['licensePic'];
    }

    /**
     * Sets licensePic
     *
     * @param string|null $licensePic 营业执照图片的Base64编码字符串，图片大小不能超过2M。将is_individual设置为true，当传入该参数后，如果商家账号不是个体工商户类型，将同时为商家升级账号，无需商家额外操作升级（同时支持企业账号、个体工商户账号）
     *
     * @return self
     */
    public function setLicensePic($licensePic)
    {
        $this->container['licensePic'] = $licensePic;

        return $this;
    }

    /**
     * Gets outOrderNo
     *
     * @return string|null
     */
    public function getOutOrderNo()
    {
        return $this->container['outOrderNo'];
    }

    /**
     * Sets outOrderNo
     *
     * @param string|null $outOrderNo 开发者外部订单号，自定义传入，通过开发者账号+outOrderNo做业务幂等。（1）该字段会在商家确认创建后通过应用授权通知出参notify_context以out_biz_no属性返回给ISV，应用授权通知订阅参考：https://opendocs.alipay.com/isv/01fejh。（2）该字段也会通过alipay.open.mini.merchant.confirmed返回给订阅方
     *
     * @return self
     */
    public function setOutOrderNo($outOrderNo)
    {
        $this->container['outOrderNo'] = $outOrderNo;

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


