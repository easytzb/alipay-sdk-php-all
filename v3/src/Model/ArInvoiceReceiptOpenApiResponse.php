<?php
/**
 * ArInvoiceReceiptOpenApiResponse
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
 * ArInvoiceReceiptOpenApiResponse Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ArInvoiceReceiptOpenApiResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ArInvoiceReceiptOpenApiResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'arrangementNo' => 'string',
        'id' => 'string',
        'instId' => 'string',
        'invDt' => 'string',
        'invMode' => 'string',
        'invoiceAmt' => '\Alipay\OpenAPISDK\Model\MultiCurrencyMoneyOpenApi',
        'invoicedAmt' => '\Alipay\OpenAPISDK\Model\MultiCurrencyMoneyOpenApi',
        'ipId' => 'string',
        'ipRoleId' => 'string',
        'lastModer' => 'string',
        'linkInvoiceAmt' => '\Alipay\OpenAPISDK\Model\MultiCurrencyMoneyOpenApi',
        'outBizNo' => 'string',
        'outBizType' => 'string',
        'payWay' => 'string',
        'prodCode' => 'string',
        'settleType' => 'string',
        'status' => 'string',
        'taxRate' => 'int',
        'taxType' => 'string',
        'tntInstId' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'arrangementNo' => null,
        'id' => null,
        'instId' => null,
        'invDt' => null,
        'invMode' => null,
        'invoiceAmt' => null,
        'invoicedAmt' => null,
        'ipId' => null,
        'ipRoleId' => null,
        'lastModer' => null,
        'linkInvoiceAmt' => null,
        'outBizNo' => null,
        'outBizType' => null,
        'payWay' => null,
        'prodCode' => null,
        'settleType' => null,
        'status' => null,
        'taxRate' => null,
        'taxType' => null,
        'tntInstId' => null,
        'type' => null
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
        'arrangementNo' => 'arrangement_no',
        'id' => 'id',
        'instId' => 'inst_id',
        'invDt' => 'inv_dt',
        'invMode' => 'inv_mode',
        'invoiceAmt' => 'invoice_amt',
        'invoicedAmt' => 'invoiced_amt',
        'ipId' => 'ip_id',
        'ipRoleId' => 'ip_role_id',
        'lastModer' => 'last_moder',
        'linkInvoiceAmt' => 'link_invoice_amt',
        'outBizNo' => 'out_biz_no',
        'outBizType' => 'out_biz_type',
        'payWay' => 'pay_way',
        'prodCode' => 'prod_code',
        'settleType' => 'settle_type',
        'status' => 'status',
        'taxRate' => 'tax_rate',
        'taxType' => 'tax_type',
        'tntInstId' => 'tnt_inst_id',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'arrangementNo' => 'setArrangementNo',
        'id' => 'setId',
        'instId' => 'setInstId',
        'invDt' => 'setInvDt',
        'invMode' => 'setInvMode',
        'invoiceAmt' => 'setInvoiceAmt',
        'invoicedAmt' => 'setInvoicedAmt',
        'ipId' => 'setIpId',
        'ipRoleId' => 'setIpRoleId',
        'lastModer' => 'setLastModer',
        'linkInvoiceAmt' => 'setLinkInvoiceAmt',
        'outBizNo' => 'setOutBizNo',
        'outBizType' => 'setOutBizType',
        'payWay' => 'setPayWay',
        'prodCode' => 'setProdCode',
        'settleType' => 'setSettleType',
        'status' => 'setStatus',
        'taxRate' => 'setTaxRate',
        'taxType' => 'setTaxType',
        'tntInstId' => 'setTntInstId',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'arrangementNo' => 'getArrangementNo',
        'id' => 'getId',
        'instId' => 'getInstId',
        'invDt' => 'getInvDt',
        'invMode' => 'getInvMode',
        'invoiceAmt' => 'getInvoiceAmt',
        'invoicedAmt' => 'getInvoicedAmt',
        'ipId' => 'getIpId',
        'ipRoleId' => 'getIpRoleId',
        'lastModer' => 'getLastModer',
        'linkInvoiceAmt' => 'getLinkInvoiceAmt',
        'outBizNo' => 'getOutBizNo',
        'outBizType' => 'getOutBizType',
        'payWay' => 'getPayWay',
        'prodCode' => 'getProdCode',
        'settleType' => 'getSettleType',
        'status' => 'getStatus',
        'taxRate' => 'getTaxRate',
        'taxType' => 'getTaxType',
        'tntInstId' => 'getTntInstId',
        'type' => 'getType'
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
        $this->container['arrangementNo'] = $data['arrangementNo'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['instId'] = $data['instId'] ?? null;
        $this->container['invDt'] = $data['invDt'] ?? null;
        $this->container['invMode'] = $data['invMode'] ?? null;
        $this->container['invoiceAmt'] = $data['invoiceAmt'] ?? null;
        $this->container['invoicedAmt'] = $data['invoicedAmt'] ?? null;
        $this->container['ipId'] = $data['ipId'] ?? null;
        $this->container['ipRoleId'] = $data['ipRoleId'] ?? null;
        $this->container['lastModer'] = $data['lastModer'] ?? null;
        $this->container['linkInvoiceAmt'] = $data['linkInvoiceAmt'] ?? null;
        $this->container['outBizNo'] = $data['outBizNo'] ?? null;
        $this->container['outBizType'] = $data['outBizType'] ?? null;
        $this->container['payWay'] = $data['payWay'] ?? null;
        $this->container['prodCode'] = $data['prodCode'] ?? null;
        $this->container['settleType'] = $data['settleType'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['taxRate'] = $data['taxRate'] ?? null;
        $this->container['taxType'] = $data['taxType'] ?? null;
        $this->container['tntInstId'] = $data['tntInstId'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
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
     * Gets arrangementNo
     *
     * @return string|null
     */
    public function getArrangementNo()
    {
        return $this->container['arrangementNo'];
    }

    /**
     * Sets arrangementNo
     *
     * @param string|null $arrangementNo 合约号
     *
     * @return self
     */
    public function setArrangementNo($arrangementNo)
    {
        $this->container['arrangementNo'] = $arrangementNo;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id 可开票单据主键ID
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets instId
     *
     * @return string|null
     */
    public function getInstId()
    {
        return $this->container['instId'];
    }

    /**
     * Sets instId
     *
     * @param string|null $instId 机构ID
     *
     * @return self
     */
    public function setInstId($instId)
    {
        $this->container['instId'] = $instId;

        return $this;
    }

    /**
     * Gets invDt
     *
     * @return string|null
     */
    public function getInvDt()
    {
        return $this->container['invDt'];
    }

    /**
     * Sets invDt
     *
     * @param string|null $invDt 开票时间 格式：yyyymm
     *
     * @return self
     */
    public function setInvDt($invDt)
    {
        $this->container['invDt'] = $invDt;

        return $this;
    }

    /**
     * Gets invMode
     *
     * @return string|null
     */
    public function getInvMode()
    {
        return $this->container['invMode'];
    }

    /**
     * Sets invMode
     *
     * @param string|null $invMode 开票模式  01：实收开票， 02：应收开票， 03：累计实收开票
     *
     * @return self
     */
    public function setInvMode($invMode)
    {
        $this->container['invMode'] = $invMode;

        return $this;
    }

    /**
     * Gets invoiceAmt
     *
     * @return \Alipay\OpenAPISDK\Model\MultiCurrencyMoneyOpenApi|null
     */
    public function getInvoiceAmt()
    {
        return $this->container['invoiceAmt'];
    }

    /**
     * Sets invoiceAmt
     *
     * @param \Alipay\OpenAPISDK\Model\MultiCurrencyMoneyOpenApi|null $invoiceAmt invoiceAmt
     *
     * @return self
     */
    public function setInvoiceAmt($invoiceAmt)
    {
        $this->container['invoiceAmt'] = $invoiceAmt;

        return $this;
    }

    /**
     * Gets invoicedAmt
     *
     * @return \Alipay\OpenAPISDK\Model\MultiCurrencyMoneyOpenApi|null
     */
    public function getInvoicedAmt()
    {
        return $this->container['invoicedAmt'];
    }

    /**
     * Sets invoicedAmt
     *
     * @param \Alipay\OpenAPISDK\Model\MultiCurrencyMoneyOpenApi|null $invoicedAmt invoicedAmt
     *
     * @return self
     */
    public function setInvoicedAmt($invoicedAmt)
    {
        $this->container['invoicedAmt'] = $invoicedAmt;

        return $this;
    }

    /**
     * Gets ipId
     *
     * @return string|null
     */
    public function getIpId()
    {
        return $this->container['ipId'];
    }

    /**
     * Sets ipId
     *
     * @param string|null $ipId 结算ip_id
     *
     * @return self
     */
    public function setIpId($ipId)
    {
        $this->container['ipId'] = $ipId;

        return $this;
    }

    /**
     * Gets ipRoleId
     *
     * @return string|null
     */
    public function getIpRoleId()
    {
        return $this->container['ipRoleId'];
    }

    /**
     * Sets ipRoleId
     *
     * @param string|null $ipRoleId 结算对象ip_role_id
     *
     * @return self
     */
    public function setIpRoleId($ipRoleId)
    {
        $this->container['ipRoleId'] = $ipRoleId;

        return $this;
    }

    /**
     * Gets lastModer
     *
     * @return string|null
     */
    public function getLastModer()
    {
        return $this->container['lastModer'];
    }

    /**
     * Sets lastModer
     *
     * @param string|null $lastModer 最后修改人
     *
     * @return self
     */
    public function setLastModer($lastModer)
    {
        $this->container['lastModer'] = $lastModer;

        return $this;
    }

    /**
     * Gets linkInvoiceAmt
     *
     * @return \Alipay\OpenAPISDK\Model\MultiCurrencyMoneyOpenApi|null
     */
    public function getLinkInvoiceAmt()
    {
        return $this->container['linkInvoiceAmt'];
    }

    /**
     * Sets linkInvoiceAmt
     *
     * @param \Alipay\OpenAPISDK\Model\MultiCurrencyMoneyOpenApi|null $linkInvoiceAmt linkInvoiceAmt
     *
     * @return self
     */
    public function setLinkInvoiceAmt($linkInvoiceAmt)
    {
        $this->container['linkInvoiceAmt'] = $linkInvoiceAmt;

        return $this;
    }

    /**
     * Gets outBizNo
     *
     * @return string|null
     */
    public function getOutBizNo()
    {
        return $this->container['outBizNo'];
    }

    /**
     * Sets outBizNo
     *
     * @param string|null $outBizNo 外部单据号，对应开票记录的月账单号
     *
     * @return self
     */
    public function setOutBizNo($outBizNo)
    {
        $this->container['outBizNo'] = $outBizNo;

        return $this;
    }

    /**
     * Gets outBizType
     *
     * @return string|null
     */
    public function getOutBizType()
    {
        return $this->container['outBizType'];
    }

    /**
     * Sets outBizType
     *
     * @param string|null $outBizType 可开票单据来源，01：主站，02：芝麻，03：金融云，04：微贷
     *
     * @return self
     */
    public function setOutBizType($outBizType)
    {
        $this->container['outBizType'] = $outBizType;

        return $this;
    }

    /**
     * Gets payWay
     *
     * @return string|null
     */
    public function getPayWay()
    {
        return $this->container['payWay'];
    }

    /**
     * Sets payWay
     *
     * @param string|null $payWay 付款方式，1：资金，5：走量
     *
     * @return self
     */
    public function setPayWay($payWay)
    {
        $this->container['payWay'] = $payWay;

        return $this;
    }

    /**
     * Gets prodCode
     *
     * @return string|null
     */
    public function getProdCode()
    {
        return $this->container['prodCode'];
    }

    /**
     * Sets prodCode
     *
     * @param string|null $prodCode 产品码
     *
     * @return self
     */
    public function setProdCode($prodCode)
    {
        $this->container['prodCode'] = $prodCode;

        return $this;
    }

    /**
     * Gets settleType
     *
     * @return string|null
     */
    public function getSettleType()
    {
        return $this->container['settleType'];
    }

    /**
     * Sets settleType
     *
     * @param string|null $settleType 结算类型 ，01：实时，02：预收，03：后收，04：周期性，05：按日汇总，09：延期结算
     *
     * @return self
     */
    public function setSettleType($settleType)
    {
        $this->container['settleType'] = $settleType;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status 开票金额消耗状态：01未开票，02部分开票，03：已开票
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets taxRate
     *
     * @return int|null
     */
    public function getTaxRate()
    {
        return $this->container['taxRate'];
    }

    /**
     * Sets taxRate
     *
     * @param int|null $taxRate 税率
     *
     * @return self
     */
    public function setTaxRate($taxRate)
    {
        $this->container['taxRate'] = $taxRate;

        return $this;
    }

    /**
     * Gets taxType
     *
     * @return string|null
     */
    public function getTaxType()
    {
        return $this->container['taxType'];
    }

    /**
     * Sets taxType
     *
     * @param string|null $taxType 税收类型01：增值税，02：营业税
     *
     * @return self
     */
    public function setTaxType($taxType)
    {
        $this->container['taxType'] = $taxType;

        return $this;
    }

    /**
     * Gets tntInstId
     *
     * @return string|null
     */
    public function getTntInstId()
    {
        return $this->container['tntInstId'];
    }

    /**
     * Sets tntInstId
     *
     * @param string|null $tntInstId 租户ID
     *
     * @return self
     */
    public function setTntInstId($tntInstId)
    {
        $this->container['tntInstId'] = $tntInstId;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type 类型，1：应收，2：返点
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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


