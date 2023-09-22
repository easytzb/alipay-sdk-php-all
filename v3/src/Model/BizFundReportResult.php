<?php
/**
 * BizFundReportResult
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
 * BizFundReportResult Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BizFundReportResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BizFundReportResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'alipayAmount' => 'string',
        'batchType' => 'string',
        'bizType' => 'string',
        'bizTypeDesc' => 'string',
        'chargeFee' => 'string',
        'gmtCreate' => 'string',
        'instructionId' => 'string',
        'memo' => 'string',
        'noMbillEncrypt' => 'string',
        'orderId' => 'string',
        'payAmount' => 'string',
        'payeeCardNo' => 'string',
        'payeeFullName' => 'string',
        'payeeFundType' => 'string',
        'payeeFundTypeDesc' => 'string',
        'payeeInstName' => 'string',
        'payeeLoginEmail' => 'string',
        'payeeName' => 'string',
        'payerFundType' => 'string',
        'payerFundTypeDesc' => 'string',
        'refundAmount' => 'string',
        'showDetail' => 'string',
        'showVoucher' => 'string',
        'source' => 'string',
        'status' => 'string',
        'statusDesc' => 'string',
        'subBizType' => 'string',
        'subBizTypeDesc' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'alipayAmount' => null,
        'batchType' => null,
        'bizType' => null,
        'bizTypeDesc' => null,
        'chargeFee' => null,
        'gmtCreate' => null,
        'instructionId' => null,
        'memo' => null,
        'noMbillEncrypt' => null,
        'orderId' => null,
        'payAmount' => null,
        'payeeCardNo' => null,
        'payeeFullName' => null,
        'payeeFundType' => null,
        'payeeFundTypeDesc' => null,
        'payeeInstName' => null,
        'payeeLoginEmail' => null,
        'payeeName' => null,
        'payerFundType' => null,
        'payerFundTypeDesc' => null,
        'refundAmount' => null,
        'showDetail' => null,
        'showVoucher' => null,
        'source' => null,
        'status' => null,
        'statusDesc' => null,
        'subBizType' => null,
        'subBizTypeDesc' => null
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
        'alipayAmount' => 'alipay_amount',
        'batchType' => 'batch_type',
        'bizType' => 'biz_type',
        'bizTypeDesc' => 'biz_type_desc',
        'chargeFee' => 'charge_fee',
        'gmtCreate' => 'gmt_create',
        'instructionId' => 'instruction_id',
        'memo' => 'memo',
        'noMbillEncrypt' => 'no_mbill_encrypt',
        'orderId' => 'order_id',
        'payAmount' => 'pay_amount',
        'payeeCardNo' => 'payee_card_no',
        'payeeFullName' => 'payee_full_name',
        'payeeFundType' => 'payee_fund_type',
        'payeeFundTypeDesc' => 'payee_fund_type_desc',
        'payeeInstName' => 'payee_inst_name',
        'payeeLoginEmail' => 'payee_login_email',
        'payeeName' => 'payee_name',
        'payerFundType' => 'payer_fund_type',
        'payerFundTypeDesc' => 'payer_fund_type_desc',
        'refundAmount' => 'refund_amount',
        'showDetail' => 'show_detail',
        'showVoucher' => 'show_voucher',
        'source' => 'source',
        'status' => 'status',
        'statusDesc' => 'status_desc',
        'subBizType' => 'sub_biz_type',
        'subBizTypeDesc' => 'sub_biz_type_desc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alipayAmount' => 'setAlipayAmount',
        'batchType' => 'setBatchType',
        'bizType' => 'setBizType',
        'bizTypeDesc' => 'setBizTypeDesc',
        'chargeFee' => 'setChargeFee',
        'gmtCreate' => 'setGmtCreate',
        'instructionId' => 'setInstructionId',
        'memo' => 'setMemo',
        'noMbillEncrypt' => 'setNoMbillEncrypt',
        'orderId' => 'setOrderId',
        'payAmount' => 'setPayAmount',
        'payeeCardNo' => 'setPayeeCardNo',
        'payeeFullName' => 'setPayeeFullName',
        'payeeFundType' => 'setPayeeFundType',
        'payeeFundTypeDesc' => 'setPayeeFundTypeDesc',
        'payeeInstName' => 'setPayeeInstName',
        'payeeLoginEmail' => 'setPayeeLoginEmail',
        'payeeName' => 'setPayeeName',
        'payerFundType' => 'setPayerFundType',
        'payerFundTypeDesc' => 'setPayerFundTypeDesc',
        'refundAmount' => 'setRefundAmount',
        'showDetail' => 'setShowDetail',
        'showVoucher' => 'setShowVoucher',
        'source' => 'setSource',
        'status' => 'setStatus',
        'statusDesc' => 'setStatusDesc',
        'subBizType' => 'setSubBizType',
        'subBizTypeDesc' => 'setSubBizTypeDesc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alipayAmount' => 'getAlipayAmount',
        'batchType' => 'getBatchType',
        'bizType' => 'getBizType',
        'bizTypeDesc' => 'getBizTypeDesc',
        'chargeFee' => 'getChargeFee',
        'gmtCreate' => 'getGmtCreate',
        'instructionId' => 'getInstructionId',
        'memo' => 'getMemo',
        'noMbillEncrypt' => 'getNoMbillEncrypt',
        'orderId' => 'getOrderId',
        'payAmount' => 'getPayAmount',
        'payeeCardNo' => 'getPayeeCardNo',
        'payeeFullName' => 'getPayeeFullName',
        'payeeFundType' => 'getPayeeFundType',
        'payeeFundTypeDesc' => 'getPayeeFundTypeDesc',
        'payeeInstName' => 'getPayeeInstName',
        'payeeLoginEmail' => 'getPayeeLoginEmail',
        'payeeName' => 'getPayeeName',
        'payerFundType' => 'getPayerFundType',
        'payerFundTypeDesc' => 'getPayerFundTypeDesc',
        'refundAmount' => 'getRefundAmount',
        'showDetail' => 'getShowDetail',
        'showVoucher' => 'getShowVoucher',
        'source' => 'getSource',
        'status' => 'getStatus',
        'statusDesc' => 'getStatusDesc',
        'subBizType' => 'getSubBizType',
        'subBizTypeDesc' => 'getSubBizTypeDesc'
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
        $this->container['alipayAmount'] = $data['alipayAmount'] ?? null;
        $this->container['batchType'] = $data['batchType'] ?? null;
        $this->container['bizType'] = $data['bizType'] ?? null;
        $this->container['bizTypeDesc'] = $data['bizTypeDesc'] ?? null;
        $this->container['chargeFee'] = $data['chargeFee'] ?? null;
        $this->container['gmtCreate'] = $data['gmtCreate'] ?? null;
        $this->container['instructionId'] = $data['instructionId'] ?? null;
        $this->container['memo'] = $data['memo'] ?? null;
        $this->container['noMbillEncrypt'] = $data['noMbillEncrypt'] ?? null;
        $this->container['orderId'] = $data['orderId'] ?? null;
        $this->container['payAmount'] = $data['payAmount'] ?? null;
        $this->container['payeeCardNo'] = $data['payeeCardNo'] ?? null;
        $this->container['payeeFullName'] = $data['payeeFullName'] ?? null;
        $this->container['payeeFundType'] = $data['payeeFundType'] ?? null;
        $this->container['payeeFundTypeDesc'] = $data['payeeFundTypeDesc'] ?? null;
        $this->container['payeeInstName'] = $data['payeeInstName'] ?? null;
        $this->container['payeeLoginEmail'] = $data['payeeLoginEmail'] ?? null;
        $this->container['payeeName'] = $data['payeeName'] ?? null;
        $this->container['payerFundType'] = $data['payerFundType'] ?? null;
        $this->container['payerFundTypeDesc'] = $data['payerFundTypeDesc'] ?? null;
        $this->container['refundAmount'] = $data['refundAmount'] ?? null;
        $this->container['showDetail'] = $data['showDetail'] ?? null;
        $this->container['showVoucher'] = $data['showVoucher'] ?? null;
        $this->container['source'] = $data['source'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['statusDesc'] = $data['statusDesc'] ?? null;
        $this->container['subBizType'] = $data['subBizType'] ?? null;
        $this->container['subBizTypeDesc'] = $data['subBizTypeDesc'] ?? null;
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
     * Gets alipayAmount
     *
     * @return string|null
     */
    public function getAlipayAmount()
    {
        return $this->container['alipayAmount'];
    }

    /**
     * Sets alipayAmount
     *
     * @param string|null $alipayAmount 实付金额（元）
     *
     * @return self
     */
    public function setAlipayAmount($alipayAmount)
    {
        $this->container['alipayAmount'] = $alipayAmount;

        return $this;
    }

    /**
     * Gets batchType
     *
     * @return string|null
     */
    public function getBatchType()
    {
        return $this->container['batchType'];
    }

    /**
     * Sets batchType
     *
     * @param string|null $batchType 是否批量转账
     *
     * @return self
     */
    public function setBatchType($batchType)
    {
        $this->container['batchType'] = $batchType;

        return $this;
    }

    /**
     * Gets bizType
     *
     * @return string|null
     */
    public function getBizType()
    {
        return $this->container['bizType'];
    }

    /**
     * Sets bizType
     *
     * @param string|null $bizType 业务类型
     *
     * @return self
     */
    public function setBizType($bizType)
    {
        $this->container['bizType'] = $bizType;

        return $this;
    }

    /**
     * Gets bizTypeDesc
     *
     * @return string|null
     */
    public function getBizTypeDesc()
    {
        return $this->container['bizTypeDesc'];
    }

    /**
     * Sets bizTypeDesc
     *
     * @param string|null $bizTypeDesc 业务类型描述
     *
     * @return self
     */
    public function setBizTypeDesc($bizTypeDesc)
    {
        $this->container['bizTypeDesc'] = $bizTypeDesc;

        return $this;
    }

    /**
     * Gets chargeFee
     *
     * @return string|null
     */
    public function getChargeFee()
    {
        return $this->container['chargeFee'];
    }

    /**
     * Sets chargeFee
     *
     * @param string|null $chargeFee 服务费（元）
     *
     * @return self
     */
    public function setChargeFee($chargeFee)
    {
        $this->container['chargeFee'] = $chargeFee;

        return $this;
    }

    /**
     * Gets gmtCreate
     *
     * @return string|null
     */
    public function getGmtCreate()
    {
        return $this->container['gmtCreate'];
    }

    /**
     * Sets gmtCreate
     *
     * @param string|null $gmtCreate 交易时间
     *
     * @return self
     */
    public function setGmtCreate($gmtCreate)
    {
        $this->container['gmtCreate'] = $gmtCreate;

        return $this;
    }

    /**
     * Gets instructionId
     *
     * @return string|null
     */
    public function getInstructionId()
    {
        return $this->container['instructionId'];
    }

    /**
     * Sets instructionId
     *
     * @param string|null $instructionId 2020xxx
     *
     * @return self
     */
    public function setInstructionId($instructionId)
    {
        $this->container['instructionId'] = $instructionId;

        return $this;
    }

    /**
     * Gets memo
     *
     * @return string|null
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string|null $memo 出借
     *
     * @return self
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets noMbillEncrypt
     *
     * @return string|null
     */
    public function getNoMbillEncrypt()
    {
        return $this->container['noMbillEncrypt'];
    }

    /**
     * Sets noMbillEncrypt
     *
     * @param string|null $noMbillEncrypt 是否脱敏
     *
     * @return self
     */
    public function setNoMbillEncrypt($noMbillEncrypt)
    {
        $this->container['noMbillEncrypt'] = $noMbillEncrypt;

        return $this;
    }

    /**
     * Gets orderId
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     *
     * @param string|null $orderId 业务订单号
     *
     * @return self
     */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;

        return $this;
    }

    /**
     * Gets payAmount
     *
     * @return string|null
     */
    public function getPayAmount()
    {
        return $this->container['payAmount'];
    }

    /**
     * Sets payAmount
     *
     * @param string|null $payAmount 实付金额（元）
     *
     * @return self
     */
    public function setPayAmount($payAmount)
    {
        $this->container['payAmount'] = $payAmount;

        return $this;
    }

    /**
     * Gets payeeCardNo
     *
     * @return string|null
     */
    public function getPayeeCardNo()
    {
        return $this->container['payeeCardNo'];
    }

    /**
     * Sets payeeCardNo
     *
     * @param string|null $payeeCardNo 收款方银行卡号
     *
     * @return self
     */
    public function setPayeeCardNo($payeeCardNo)
    {
        $this->container['payeeCardNo'] = $payeeCardNo;

        return $this;
    }

    /**
     * Gets payeeFullName
     *
     * @return string|null
     */
    public function getPayeeFullName()
    {
        return $this->container['payeeFullName'];
    }

    /**
     * Sets payeeFullName
     *
     * @param string|null $payeeFullName 收款方全名
     *
     * @return self
     */
    public function setPayeeFullName($payeeFullName)
    {
        $this->container['payeeFullName'] = $payeeFullName;

        return $this;
    }

    /**
     * Gets payeeFundType
     *
     * @return string|null
     */
    public function getPayeeFundType()
    {
        return $this->container['payeeFundType'];
    }

    /**
     * Sets payeeFundType
     *
     * @param string|null $payeeFundType 收款方资金类型
     *
     * @return self
     */
    public function setPayeeFundType($payeeFundType)
    {
        $this->container['payeeFundType'] = $payeeFundType;

        return $this;
    }

    /**
     * Gets payeeFundTypeDesc
     *
     * @return string|null
     */
    public function getPayeeFundTypeDesc()
    {
        return $this->container['payeeFundTypeDesc'];
    }

    /**
     * Sets payeeFundTypeDesc
     *
     * @param string|null $payeeFundTypeDesc 支付宝余额
     *
     * @return self
     */
    public function setPayeeFundTypeDesc($payeeFundTypeDesc)
    {
        $this->container['payeeFundTypeDesc'] = $payeeFundTypeDesc;

        return $this;
    }

    /**
     * Gets payeeInstName
     *
     * @return string|null
     */
    public function getPayeeInstName()
    {
        return $this->container['payeeInstName'];
    }

    /**
     * Sets payeeInstName
     *
     * @param string|null $payeeInstName 收款银行中文简称
     *
     * @return self
     */
    public function setPayeeInstName($payeeInstName)
    {
        $this->container['payeeInstName'] = $payeeInstName;

        return $this;
    }

    /**
     * Gets payeeLoginEmail
     *
     * @return string|null
     */
    public function getPayeeLoginEmail()
    {
        return $this->container['payeeLoginEmail'];
    }

    /**
     * Sets payeeLoginEmail
     *
     * @param string|null $payeeLoginEmail 收款方登录Id
     *
     * @return self
     */
    public function setPayeeLoginEmail($payeeLoginEmail)
    {
        $this->container['payeeLoginEmail'] = $payeeLoginEmail;

        return $this;
    }

    /**
     * Gets payeeName
     *
     * @return string|null
     */
    public function getPayeeName()
    {
        return $this->container['payeeName'];
    }

    /**
     * Sets payeeName
     *
     * @param string|null $payeeName 收款方姓名
     *
     * @return self
     */
    public function setPayeeName($payeeName)
    {
        $this->container['payeeName'] = $payeeName;

        return $this;
    }

    /**
     * Gets payerFundType
     *
     * @return string|null
     */
    public function getPayerFundType()
    {
        return $this->container['payerFundType'];
    }

    /**
     * Sets payerFundType
     *
     * @param string|null $payerFundType 付款方资金类型
     *
     * @return self
     */
    public function setPayerFundType($payerFundType)
    {
        $this->container['payerFundType'] = $payerFundType;

        return $this;
    }

    /**
     * Gets payerFundTypeDesc
     *
     * @return string|null
     */
    public function getPayerFundTypeDesc()
    {
        return $this->container['payerFundTypeDesc'];
    }

    /**
     * Sets payerFundTypeDesc
     *
     * @param string|null $payerFundTypeDesc 付款方资金类型描述
     *
     * @return self
     */
    public function setPayerFundTypeDesc($payerFundTypeDesc)
    {
        $this->container['payerFundTypeDesc'] = $payerFundTypeDesc;

        return $this;
    }

    /**
     * Gets refundAmount
     *
     * @return string|null
     */
    public function getRefundAmount()
    {
        return $this->container['refundAmount'];
    }

    /**
     * Sets refundAmount
     *
     * @param string|null $refundAmount 退款金额
     *
     * @return self
     */
    public function setRefundAmount($refundAmount)
    {
        $this->container['refundAmount'] = $refundAmount;

        return $this;
    }

    /**
     * Gets showDetail
     *
     * @return string|null
     */
    public function getShowDetail()
    {
        return $this->container['showDetail'];
    }

    /**
     * Sets showDetail
     *
     * @param string|null $showDetail 是否展示细节，默认为true
     *
     * @return self
     */
    public function setShowDetail($showDetail)
    {
        $this->container['showDetail'] = $showDetail;

        return $this;
    }

    /**
     * Gets showVoucher
     *
     * @return string|null
     */
    public function getShowVoucher()
    {
        return $this->container['showVoucher'];
    }

    /**
     * Sets showVoucher
     *
     * @param string|null $showVoucher 是否出示凭证
     *
     * @return self
     */
    public function setShowVoucher($showVoucher)
    {
        $this->container['showVoucher'] = $showVoucher;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source 数据来源
     *
     * @return self
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

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
     * @param string|null $status 单据状态
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets statusDesc
     *
     * @return string|null
     */
    public function getStatusDesc()
    {
        return $this->container['statusDesc'];
    }

    /**
     * Sets statusDesc
     *
     * @param string|null $statusDesc 单据状态描述
     *
     * @return self
     */
    public function setStatusDesc($statusDesc)
    {
        $this->container['statusDesc'] = $statusDesc;

        return $this;
    }

    /**
     * Gets subBizType
     *
     * @return string|null
     */
    public function getSubBizType()
    {
        return $this->container['subBizType'];
    }

    /**
     * Sets subBizType
     *
     * @param string|null $subBizType 业务子类型
     *
     * @return self
     */
    public function setSubBizType($subBizType)
    {
        $this->container['subBizType'] = $subBizType;

        return $this;
    }

    /**
     * Gets subBizTypeDesc
     *
     * @return string|null
     */
    public function getSubBizTypeDesc()
    {
        return $this->container['subBizTypeDesc'];
    }

    /**
     * Sets subBizTypeDesc
     *
     * @param string|null $subBizTypeDesc 业务子类型描述
     *
     * @return self
     */
    public function setSubBizTypeDesc($subBizTypeDesc)
    {
        $this->container['subBizTypeDesc'] = $subBizTypeDesc;

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


