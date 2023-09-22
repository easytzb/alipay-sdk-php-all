<?php
/**
 * ItemModel
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
 * ItemModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ItemModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ItemModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'creatorId' => 'string',
        'creatorType' => 'string',
        'extInfo' => 'string',
        'frontCategoryId' => 'string',
        'gmtCreate' => 'string',
        'gmtModified' => 'string',
        'itemId' => 'string',
        'name' => 'string',
        'skuList' => '\Alipay\OpenAPISDK\Model\ItemSkuInfo[]',
        'sort' => 'int',
        'status' => 'string',
        'targetId' => 'string',
        'targetType' => 'string',
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
        'creatorId' => null,
        'creatorType' => null,
        'extInfo' => null,
        'frontCategoryId' => null,
        'gmtCreate' => null,
        'gmtModified' => null,
        'itemId' => null,
        'name' => null,
        'skuList' => null,
        'sort' => null,
        'status' => null,
        'targetId' => null,
        'targetType' => null,
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
        'creatorId' => 'creator_id',
        'creatorType' => 'creator_type',
        'extInfo' => 'ext_info',
        'frontCategoryId' => 'front_category_id',
        'gmtCreate' => 'gmt_create',
        'gmtModified' => 'gmt_modified',
        'itemId' => 'item_id',
        'name' => 'name',
        'skuList' => 'sku_list',
        'sort' => 'sort',
        'status' => 'status',
        'targetId' => 'target_id',
        'targetType' => 'target_type',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'creatorId' => 'setCreatorId',
        'creatorType' => 'setCreatorType',
        'extInfo' => 'setExtInfo',
        'frontCategoryId' => 'setFrontCategoryId',
        'gmtCreate' => 'setGmtCreate',
        'gmtModified' => 'setGmtModified',
        'itemId' => 'setItemId',
        'name' => 'setName',
        'skuList' => 'setSkuList',
        'sort' => 'setSort',
        'status' => 'setStatus',
        'targetId' => 'setTargetId',
        'targetType' => 'setTargetType',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'creatorId' => 'getCreatorId',
        'creatorType' => 'getCreatorType',
        'extInfo' => 'getExtInfo',
        'frontCategoryId' => 'getFrontCategoryId',
        'gmtCreate' => 'getGmtCreate',
        'gmtModified' => 'getGmtModified',
        'itemId' => 'getItemId',
        'name' => 'getName',
        'skuList' => 'getSkuList',
        'sort' => 'getSort',
        'status' => 'getStatus',
        'targetId' => 'getTargetId',
        'targetType' => 'getTargetType',
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
        $this->container['creatorId'] = $data['creatorId'] ?? null;
        $this->container['creatorType'] = $data['creatorType'] ?? null;
        $this->container['extInfo'] = $data['extInfo'] ?? null;
        $this->container['frontCategoryId'] = $data['frontCategoryId'] ?? null;
        $this->container['gmtCreate'] = $data['gmtCreate'] ?? null;
        $this->container['gmtModified'] = $data['gmtModified'] ?? null;
        $this->container['itemId'] = $data['itemId'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['skuList'] = $data['skuList'] ?? null;
        $this->container['sort'] = $data['sort'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['targetId'] = $data['targetId'] ?? null;
        $this->container['targetType'] = $data['targetType'] ?? null;
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
     * Gets creatorId
     *
     * @return string|null
     */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
     * Sets creatorId
     *
     * @param string|null $creatorId 创建者id
     *
     * @return self
     */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;

        return $this;
    }

    /**
     * Gets creatorType
     *
     * @return string|null
     */
    public function getCreatorType()
    {
        return $this->container['creatorType'];
    }

    /**
     * Sets creatorType
     *
     * @param string|null $creatorType 创建者类型
     *
     * @return self
     */
    public function setCreatorType($creatorType)
    {
        $this->container['creatorType'] = $creatorType;

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
     * @param string|null $extInfo 商品扩展信息：可以解析成 Map<String, String> 的 json string
     *
     * @return self
     */
    public function setExtInfo($extInfo)
    {
        $this->container['extInfo'] = $extInfo;

        return $this;
    }

    /**
     * Gets frontCategoryId
     *
     * @return string|null
     */
    public function getFrontCategoryId()
    {
        return $this->container['frontCategoryId'];
    }

    /**
     * Sets frontCategoryId
     *
     * @param string|null $frontCategoryId 前台类目id
     *
     * @return self
     */
    public function setFrontCategoryId($frontCategoryId)
    {
        $this->container['frontCategoryId'] = $frontCategoryId;

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
     * @param string|null $gmtCreate 商品创建时间
     *
     * @return self
     */
    public function setGmtCreate($gmtCreate)
    {
        $this->container['gmtCreate'] = $gmtCreate;

        return $this;
    }

    /**
     * Gets gmtModified
     *
     * @return string|null
     */
    public function getGmtModified()
    {
        return $this->container['gmtModified'];
    }

    /**
     * Sets gmtModified
     *
     * @param string|null $gmtModified 商品更新时间
     *
     * @return self
     */
    public function setGmtModified($gmtModified)
    {
        $this->container['gmtModified'] = $gmtModified;

        return $this;
    }

    /**
     * Gets itemId
     *
     * @return string|null
     */
    public function getItemId()
    {
        return $this->container['itemId'];
    }

    /**
     * Sets itemId
     *
     * @param string|null $itemId 商品id
     *
     * @return self
     */
    public function setItemId($itemId)
    {
        $this->container['itemId'] = $itemId;

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
     * @param string|null $name 商品名称
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets skuList
     *
     * @return \Alipay\OpenAPISDK\Model\ItemSkuInfo[]|null
     */
    public function getSkuList()
    {
        return $this->container['skuList'];
    }

    /**
     * Sets skuList
     *
     * @param \Alipay\OpenAPISDK\Model\ItemSkuInfo[]|null $skuList 商品sku列表
     *
     * @return self
     */
    public function setSkuList($skuList)
    {
        $this->container['skuList'] = $skuList;

        return $this;
    }

    /**
     * Gets sort
     *
     * @return int|null
     */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
     * Sets sort
     *
     * @param int|null $sort 商品排序
     *
     * @return self
     */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;

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
     * @param string|null $status 商品状态
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * @param string|null $targetId 商户归属主体id
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
     * @param string|null $targetType 商品归属主体类型：5(商铺)
     *
     * @return self
     */
    public function setTargetType($targetType)
    {
        $this->container['targetType'] = $targetType;

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
     * @param string|null $type 商品类型
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


