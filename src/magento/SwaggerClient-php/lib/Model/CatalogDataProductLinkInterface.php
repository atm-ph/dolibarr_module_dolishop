<?php
/**
 * CatalogDataProductLinkInterface
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Magento Enterprise Edition 2.0
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * CatalogDataProductLinkInterface Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CatalogDataProductLinkInterface implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'catalog-data-product-link-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sku' => 'string',
        'link_type' => 'string',
        'linked_product_sku' => 'string',
        'linked_product_type' => 'string',
        'position' => 'int',
        'extension_attributes' => '\Swagger\Client\Model\CatalogDataProductLinkExtensionInterface'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sku' => null,
        'link_type' => null,
        'linked_product_sku' => null,
        'linked_product_type' => null,
        'position' => null,
        'extension_attributes' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'sku' => 'sku',
        'link_type' => 'linkType',
        'linked_product_sku' => 'linkedProductSku',
        'linked_product_type' => 'linkedProductType',
        'position' => 'position',
        'extension_attributes' => 'extensionAttributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sku' => 'setSku',
        'link_type' => 'setLinkType',
        'linked_product_sku' => 'setLinkedProductSku',
        'linked_product_type' => 'setLinkedProductType',
        'position' => 'setPosition',
        'extension_attributes' => 'setExtensionAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sku' => 'getSku',
        'link_type' => 'getLinkType',
        'linked_product_sku' => 'getLinkedProductSku',
        'linked_product_type' => 'getLinkedProductType',
        'position' => 'getPosition',
        'extension_attributes' => 'getExtensionAttributes'
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
        return self::$swaggerModelName;
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
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['link_type'] = isset($data['link_type']) ? $data['link_type'] : null;
        $this->container['linked_product_sku'] = isset($data['linked_product_sku']) ? $data['linked_product_sku'] : null;
        $this->container['linked_product_type'] = isset($data['linked_product_type']) ? $data['linked_product_type'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['extension_attributes'] = isset($data['extension_attributes']) ? $data['extension_attributes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
        }
        if ($this->container['link_type'] === null) {
            $invalidProperties[] = "'link_type' can't be null";
        }
        if ($this->container['linked_product_sku'] === null) {
            $invalidProperties[] = "'linked_product_sku' can't be null";
        }
        if ($this->container['linked_product_type'] === null) {
            $invalidProperties[] = "'linked_product_type' can't be null";
        }
        if ($this->container['position'] === null) {
            $invalidProperties[] = "'position' can't be null";
        }
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

        if ($this->container['sku'] === null) {
            return false;
        }
        if ($this->container['link_type'] === null) {
            return false;
        }
        if ($this->container['linked_product_sku'] === null) {
            return false;
        }
        if ($this->container['linked_product_type'] === null) {
            return false;
        }
        if ($this->container['position'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku SKU
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets link_type
     *
     * @return string
     */
    public function getLinkType()
    {
        return $this->container['link_type'];
    }

    /**
     * Sets link_type
     *
     * @param string $link_type Link type
     *
     * @return $this
     */
    public function setLinkType($link_type)
    {
        $this->container['link_type'] = $link_type;

        return $this;
    }

    /**
     * Gets linked_product_sku
     *
     * @return string
     */
    public function getLinkedProductSku()
    {
        return $this->container['linked_product_sku'];
    }

    /**
     * Sets linked_product_sku
     *
     * @param string $linked_product_sku Linked product sku
     *
     * @return $this
     */
    public function setLinkedProductSku($linked_product_sku)
    {
        $this->container['linked_product_sku'] = $linked_product_sku;

        return $this;
    }

    /**
     * Gets linked_product_type
     *
     * @return string
     */
    public function getLinkedProductType()
    {
        return $this->container['linked_product_type'];
    }

    /**
     * Sets linked_product_type
     *
     * @param string $linked_product_type Linked product type (simple, virtual, etc)
     *
     * @return $this
     */
    public function setLinkedProductType($linked_product_type)
    {
        $this->container['linked_product_type'] = $linked_product_type;

        return $this;
    }

    /**
     * Gets position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int $position Linked item position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets extension_attributes
     *
     * @return \Swagger\Client\Model\CatalogDataProductLinkExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extension_attributes'];
    }

    /**
     * Sets extension_attributes
     *
     * @param \Swagger\Client\Model\CatalogDataProductLinkExtensionInterface $extension_attributes extension_attributes
     *
     * @return $this
     */
    public function setExtensionAttributes($extension_attributes)
    {
        $this->container['extension_attributes'] = $extension_attributes;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


