<?php
/**
 * DownloadableDataSampleInterface
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
 * DownloadableDataSampleInterface Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DownloadableDataSampleInterface implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'downloadable-data-sample-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'title' => 'string',
        'sort_order' => 'int',
        'sample_type' => 'string',
        'sample_file' => 'string',
        'sample_file_content' => '\Swagger\Client\Model\DownloadableDataFileContentInterface',
        'sample_url' => 'string',
        'extension_attributes' => '\Swagger\Client\Model\DownloadableDataSampleExtensionInterface'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'title' => null,
        'sort_order' => null,
        'sample_type' => null,
        'sample_file' => null,
        'sample_file_content' => null,
        'sample_url' => null,
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
        'id' => 'id',
        'title' => 'title',
        'sort_order' => 'sortOrder',
        'sample_type' => 'sampleType',
        'sample_file' => 'sampleFile',
        'sample_file_content' => 'sampleFileContent',
        'sample_url' => 'sampleUrl',
        'extension_attributes' => 'extensionAttributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'title' => 'setTitle',
        'sort_order' => 'setSortOrder',
        'sample_type' => 'setSampleType',
        'sample_file' => 'setSampleFile',
        'sample_file_content' => 'setSampleFileContent',
        'sample_url' => 'setSampleUrl',
        'extension_attributes' => 'setExtensionAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'title' => 'getTitle',
        'sort_order' => 'getSortOrder',
        'sample_type' => 'getSampleType',
        'sample_file' => 'getSampleFile',
        'sample_file_content' => 'getSampleFileContent',
        'sample_url' => 'getSampleUrl',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['sort_order'] = isset($data['sort_order']) ? $data['sort_order'] : null;
        $this->container['sample_type'] = isset($data['sample_type']) ? $data['sample_type'] : null;
        $this->container['sample_file'] = isset($data['sample_file']) ? $data['sample_file'] : null;
        $this->container['sample_file_content'] = isset($data['sample_file_content']) ? $data['sample_file_content'] : null;
        $this->container['sample_url'] = isset($data['sample_url']) ? $data['sample_url'] : null;
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

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['sort_order'] === null) {
            $invalidProperties[] = "'sort_order' can't be null";
        }
        if ($this->container['sample_type'] === null) {
            $invalidProperties[] = "'sample_type' can't be null";
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

        if ($this->container['title'] === null) {
            return false;
        }
        if ($this->container['sort_order'] === null) {
            return false;
        }
        if ($this->container['sample_type'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Sample(or link) id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets sort_order
     *
     * @return int
     */
    public function getSortOrder()
    {
        return $this->container['sort_order'];
    }

    /**
     * Sets sort_order
     *
     * @param int $sort_order Order index for sample
     *
     * @return $this
     */
    public function setSortOrder($sort_order)
    {
        $this->container['sort_order'] = $sort_order;

        return $this;
    }

    /**
     * Gets sample_type
     *
     * @return string
     */
    public function getSampleType()
    {
        return $this->container['sample_type'];
    }

    /**
     * Sets sample_type
     *
     * @param string $sample_type sample_type
     *
     * @return $this
     */
    public function setSampleType($sample_type)
    {
        $this->container['sample_type'] = $sample_type;

        return $this;
    }

    /**
     * Gets sample_file
     *
     * @return string
     */
    public function getSampleFile()
    {
        return $this->container['sample_file'];
    }

    /**
     * Sets sample_file
     *
     * @param string $sample_file relative file path
     *
     * @return $this
     */
    public function setSampleFile($sample_file)
    {
        $this->container['sample_file'] = $sample_file;

        return $this;
    }

    /**
     * Gets sample_file_content
     *
     * @return \Swagger\Client\Model\DownloadableDataFileContentInterface
     */
    public function getSampleFileContent()
    {
        return $this->container['sample_file_content'];
    }

    /**
     * Sets sample_file_content
     *
     * @param \Swagger\Client\Model\DownloadableDataFileContentInterface $sample_file_content sample_file_content
     *
     * @return $this
     */
    public function setSampleFileContent($sample_file_content)
    {
        $this->container['sample_file_content'] = $sample_file_content;

        return $this;
    }

    /**
     * Gets sample_url
     *
     * @return string
     */
    public function getSampleUrl()
    {
        return $this->container['sample_url'];
    }

    /**
     * Sets sample_url
     *
     * @param string $sample_url file URL
     *
     * @return $this
     */
    public function setSampleUrl($sample_url)
    {
        $this->container['sample_url'] = $sample_url;

        return $this;
    }

    /**
     * Gets extension_attributes
     *
     * @return \Swagger\Client\Model\DownloadableDataSampleExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extension_attributes'];
    }

    /**
     * Sets extension_attributes
     *
     * @param \Swagger\Client\Model\DownloadableDataSampleExtensionInterface $extension_attributes extension_attributes
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


