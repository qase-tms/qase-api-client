<?php
/**
 * DefectQuery
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Qase\APIClientV1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Qase.io TestOps API v1
 *
 * Qase TestOps API v1 Specification.
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: support@qase.io
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Qase\APIClientV1\Model;

use \ArrayAccess;
use \Qase\APIClientV1\ObjectSerializer;

/**
 * DefectQuery Class Doc Comment
 *
 * @category Class
 * @package  Qase\APIClientV1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DefectQuery implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DefectQuery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'defectId' => 'int',
        'id' => 'int',
        'title' => 'string',
        'actualResult' => 'string',
        'severity' => 'string',
        'status' => 'string',
        'milestoneId' => 'int',
        'customFields' => '\Qase\APIClientV1\Model\CustomFieldValue[]',
        'attachments' => '\Qase\APIClientV1\Model\Attachment[]',
        'resolved' => '\DateTime',
        'memberId' => 'int',
        'authorId' => 'int',
        'externalData' => 'string',
        'tags' => '\Qase\APIClientV1\Model\TagValue[]',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'defectId' => 'int64',
        'id' => 'int64',
        'title' => null,
        'actualResult' => null,
        'severity' => null,
        'status' => null,
        'milestoneId' => 'int64',
        'customFields' => null,
        'attachments' => null,
        'resolved' => 'date-time',
        'memberId' => 'int64',
        'authorId' => 'int64',
        'externalData' => null,
        'tags' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'defectId' => false,
        'id' => false,
        'title' => false,
        'actualResult' => false,
        'severity' => false,
        'status' => false,
        'milestoneId' => true,
        'customFields' => false,
        'attachments' => false,
        'resolved' => true,
        'memberId' => false,
        'authorId' => false,
        'externalData' => false,
        'tags' => false,
        'createdAt' => false,
        'updatedAt' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'defectId' => 'defect_id',
        'id' => 'id',
        'title' => 'title',
        'actualResult' => 'actual_result',
        'severity' => 'severity',
        'status' => 'status',
        'milestoneId' => 'milestone_id',
        'customFields' => 'custom_fields',
        'attachments' => 'attachments',
        'resolved' => 'resolved',
        'memberId' => 'member_id',
        'authorId' => 'author_id',
        'externalData' => 'external_data',
        'tags' => 'tags',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'defectId' => 'setDefectId',
        'id' => 'setId',
        'title' => 'setTitle',
        'actualResult' => 'setActualResult',
        'severity' => 'setSeverity',
        'status' => 'setStatus',
        'milestoneId' => 'setMilestoneId',
        'customFields' => 'setCustomFields',
        'attachments' => 'setAttachments',
        'resolved' => 'setResolved',
        'memberId' => 'setMemberId',
        'authorId' => 'setAuthorId',
        'externalData' => 'setExternalData',
        'tags' => 'setTags',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'defectId' => 'getDefectId',
        'id' => 'getId',
        'title' => 'getTitle',
        'actualResult' => 'getActualResult',
        'severity' => 'getSeverity',
        'status' => 'getStatus',
        'milestoneId' => 'getMilestoneId',
        'customFields' => 'getCustomFields',
        'attachments' => 'getAttachments',
        'resolved' => 'getResolved',
        'memberId' => 'getMemberId',
        'authorId' => 'getAuthorId',
        'externalData' => 'getExternalData',
        'tags' => 'getTags',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt'
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
        $this->setIfExists('defectId', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('actualResult', $data ?? [], null);
        $this->setIfExists('severity', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('milestoneId', $data ?? [], null);
        $this->setIfExists('customFields', $data ?? [], null);
        $this->setIfExists('attachments', $data ?? [], null);
        $this->setIfExists('resolved', $data ?? [], null);
        $this->setIfExists('memberId', $data ?? [], null);
        $this->setIfExists('authorId', $data ?? [], null);
        $this->setIfExists('externalData', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('updatedAt', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['defectId'] === null) {
            $invalidProperties[] = "'defectId' can't be null";
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets defectId
     *
     * @return int
     */
    public function getDefectId()
    {
        return $this->container['defectId'];
    }

    /**
     * Sets defectId
     *
     * @param int $defectId defectId
     *
     * @return self
     */
    public function setDefectId($defectId)
    {
        if (is_null($defectId)) {
            throw new \InvalidArgumentException('non-nullable defectId cannot be null');
        }
        $this->container['defectId'] = $defectId;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets actualResult
     *
     * @return string|null
     */
    public function getActualResult()
    {
        return $this->container['actualResult'];
    }

    /**
     * Sets actualResult
     *
     * @param string|null $actualResult actualResult
     *
     * @return self
     */
    public function setActualResult($actualResult)
    {
        if (is_null($actualResult)) {
            throw new \InvalidArgumentException('non-nullable actualResult cannot be null');
        }
        $this->container['actualResult'] = $actualResult;

        return $this;
    }

    /**
     * Gets severity
     *
     * @return string|null
     */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
     * Sets severity
     *
     * @param string|null $severity severity
     *
     * @return self
     */
    public function setSeverity($severity)
    {
        if (is_null($severity)) {
            throw new \InvalidArgumentException('non-nullable severity cannot be null');
        }
        $this->container['severity'] = $severity;

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
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets milestoneId
     *
     * @return int|null
     */
    public function getMilestoneId()
    {
        return $this->container['milestoneId'];
    }

    /**
     * Sets milestoneId
     *
     * @param int|null $milestoneId milestoneId
     *
     * @return self
     */
    public function setMilestoneId($milestoneId)
    {
        if (is_null($milestoneId)) {
            array_push($this->openAPINullablesSetToNull, 'milestoneId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('milestoneId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['milestoneId'] = $milestoneId;

        return $this;
    }

    /**
     * Gets customFields
     *
     * @return \Qase\APIClientV1\Model\CustomFieldValue[]|null
     */
    public function getCustomFields()
    {
        return $this->container['customFields'];
    }

    /**
     * Sets customFields
     *
     * @param \Qase\APIClientV1\Model\CustomFieldValue[]|null $customFields customFields
     *
     * @return self
     */
    public function setCustomFields($customFields)
    {
        if (is_null($customFields)) {
            throw new \InvalidArgumentException('non-nullable customFields cannot be null');
        }
        $this->container['customFields'] = $customFields;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \Qase\APIClientV1\Model\Attachment[]|null
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \Qase\APIClientV1\Model\Attachment[]|null $attachments attachments
     *
     * @return self
     */
    public function setAttachments($attachments)
    {
        if (is_null($attachments)) {
            throw new \InvalidArgumentException('non-nullable attachments cannot be null');
        }
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets resolved
     *
     * @return \DateTime|null
     */
    public function getResolved()
    {
        return $this->container['resolved'];
    }

    /**
     * Sets resolved
     *
     * @param \DateTime|null $resolved resolved
     *
     * @return self
     */
    public function setResolved($resolved)
    {
        if (is_null($resolved)) {
            array_push($this->openAPINullablesSetToNull, 'resolved');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('resolved', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['resolved'] = $resolved;

        return $this;
    }

    /**
     * Gets memberId
     *
     * @return int|null
     * @deprecated
     */
    public function getMemberId()
    {
        return $this->container['memberId'];
    }

    /**
     * Sets memberId
     *
     * @param int|null $memberId Deprecated, use `author_id` instead.
     *
     * @return self
     * @deprecated
     */
    public function setMemberId($memberId)
    {
        if (is_null($memberId)) {
            throw new \InvalidArgumentException('non-nullable memberId cannot be null');
        }
        $this->container['memberId'] = $memberId;

        return $this;
    }

    /**
     * Gets authorId
     *
     * @return int|null
     */
    public function getAuthorId()
    {
        return $this->container['authorId'];
    }

    /**
     * Sets authorId
     *
     * @param int|null $authorId authorId
     *
     * @return self
     */
    public function setAuthorId($authorId)
    {
        if (is_null($authorId)) {
            throw new \InvalidArgumentException('non-nullable authorId cannot be null');
        }
        $this->container['authorId'] = $authorId;

        return $this;
    }

    /**
     * Gets externalData
     *
     * @return string|null
     */
    public function getExternalData()
    {
        return $this->container['externalData'];
    }

    /**
     * Sets externalData
     *
     * @param string|null $externalData externalData
     *
     * @return self
     */
    public function setExternalData($externalData)
    {
        if (is_null($externalData)) {
            throw new \InvalidArgumentException('non-nullable externalData cannot be null');
        }
        $this->container['externalData'] = $externalData;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \Qase\APIClientV1\Model\TagValue[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \Qase\APIClientV1\Model\TagValue[]|null $tags tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        if (is_null($tags)) {
            throw new \InvalidArgumentException('non-nullable tags cannot be null');
        }
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime|null $createdAt createdAt
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        if (is_null($createdAt)) {
            throw new \InvalidArgumentException('non-nullable createdAt cannot be null');
        }
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param \DateTime|null $updatedAt updatedAt
     *
     * @return self
     */
    public function setUpdatedAt($updatedAt)
    {
        if (is_null($updatedAt)) {
            throw new \InvalidArgumentException('non-nullable updatedAt cannot be null');
        }
        $this->container['updatedAt'] = $updatedAt;

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


