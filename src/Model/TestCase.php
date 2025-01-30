<?php
/**
 * TestCase
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
 * TestCase Class Doc Comment
 *
 * @category Class
 * @package  Qase\APIClientV1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TestCase implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TestCase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'position' => 'int',
        'title' => 'string',
        'description' => 'string',
        'preconditions' => 'string',
        'postconditions' => 'string',
        'severity' => 'int',
        'priority' => 'int',
        'type' => 'int',
        'layer' => 'int',
        'isFlaky' => 'int',
        'behavior' => 'int',
        'automation' => 'int',
        'status' => 'int',
        'milestoneId' => 'int',
        'suiteId' => 'int',
        'customFields' => '\Qase\APIClientV1\Model\CustomFieldValue[]',
        'attachments' => '\Qase\APIClientV1\Model\Attachment[]',
        'stepsType' => 'string',
        'steps' => '\Qase\APIClientV1\Model\TestStep[]',
        'params' => '\Qase\APIClientV1\Model\TestCaseParams',
        'tags' => '\Qase\APIClientV1\Model\TagValue[]',
        'memberId' => 'int',
        'authorId' => 'int',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime',
        'deleted' => 'string',
        'created' => 'string',
        'updated' => 'string',
        'externalIssues' => '\Qase\APIClientV1\Model\ExternalIssue[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'position' => null,
        'title' => null,
        'description' => null,
        'preconditions' => null,
        'postconditions' => null,
        'severity' => null,
        'priority' => null,
        'type' => null,
        'layer' => null,
        'isFlaky' => null,
        'behavior' => null,
        'automation' => null,
        'status' => null,
        'milestoneId' => 'int64',
        'suiteId' => 'int64',
        'customFields' => null,
        'attachments' => null,
        'stepsType' => null,
        'steps' => null,
        'params' => null,
        'tags' => null,
        'memberId' => 'int64',
        'authorId' => 'int64',
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'deleted' => null,
        'created' => null,
        'updated' => null,
        'externalIssues' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'position' => false,
        'title' => false,
        'description' => true,
        'preconditions' => true,
        'postconditions' => true,
        'severity' => false,
        'priority' => false,
        'type' => false,
        'layer' => false,
        'isFlaky' => false,
        'behavior' => false,
        'automation' => false,
        'status' => false,
        'milestoneId' => true,
        'suiteId' => true,
        'customFields' => false,
        'attachments' => false,
        'stepsType' => true,
        'steps' => false,
        'params' => false,
        'tags' => false,
        'memberId' => false,
        'authorId' => false,
        'createdAt' => false,
        'updatedAt' => false,
        'deleted' => true,
        'created' => false,
        'updated' => false,
        'externalIssues' => false
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
        'id' => 'id',
        'position' => 'position',
        'title' => 'title',
        'description' => 'description',
        'preconditions' => 'preconditions',
        'postconditions' => 'postconditions',
        'severity' => 'severity',
        'priority' => 'priority',
        'type' => 'type',
        'layer' => 'layer',
        'isFlaky' => 'is_flaky',
        'behavior' => 'behavior',
        'automation' => 'automation',
        'status' => 'status',
        'milestoneId' => 'milestone_id',
        'suiteId' => 'suite_id',
        'customFields' => 'custom_fields',
        'attachments' => 'attachments',
        'stepsType' => 'steps_type',
        'steps' => 'steps',
        'params' => 'params',
        'tags' => 'tags',
        'memberId' => 'member_id',
        'authorId' => 'author_id',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at',
        'deleted' => 'deleted',
        'created' => 'created',
        'updated' => 'updated',
        'externalIssues' => 'external_issues'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'position' => 'setPosition',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'preconditions' => 'setPreconditions',
        'postconditions' => 'setPostconditions',
        'severity' => 'setSeverity',
        'priority' => 'setPriority',
        'type' => 'setType',
        'layer' => 'setLayer',
        'isFlaky' => 'setIsFlaky',
        'behavior' => 'setBehavior',
        'automation' => 'setAutomation',
        'status' => 'setStatus',
        'milestoneId' => 'setMilestoneId',
        'suiteId' => 'setSuiteId',
        'customFields' => 'setCustomFields',
        'attachments' => 'setAttachments',
        'stepsType' => 'setStepsType',
        'steps' => 'setSteps',
        'params' => 'setParams',
        'tags' => 'setTags',
        'memberId' => 'setMemberId',
        'authorId' => 'setAuthorId',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'deleted' => 'setDeleted',
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'externalIssues' => 'setExternalIssues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'position' => 'getPosition',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'preconditions' => 'getPreconditions',
        'postconditions' => 'getPostconditions',
        'severity' => 'getSeverity',
        'priority' => 'getPriority',
        'type' => 'getType',
        'layer' => 'getLayer',
        'isFlaky' => 'getIsFlaky',
        'behavior' => 'getBehavior',
        'automation' => 'getAutomation',
        'status' => 'getStatus',
        'milestoneId' => 'getMilestoneId',
        'suiteId' => 'getSuiteId',
        'customFields' => 'getCustomFields',
        'attachments' => 'getAttachments',
        'stepsType' => 'getStepsType',
        'steps' => 'getSteps',
        'params' => 'getParams',
        'tags' => 'getTags',
        'memberId' => 'getMemberId',
        'authorId' => 'getAuthorId',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'deleted' => 'getDeleted',
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'externalIssues' => 'getExternalIssues'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('position', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('preconditions', $data ?? [], null);
        $this->setIfExists('postconditions', $data ?? [], null);
        $this->setIfExists('severity', $data ?? [], null);
        $this->setIfExists('priority', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('layer', $data ?? [], null);
        $this->setIfExists('isFlaky', $data ?? [], null);
        $this->setIfExists('behavior', $data ?? [], null);
        $this->setIfExists('automation', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('milestoneId', $data ?? [], null);
        $this->setIfExists('suiteId', $data ?? [], null);
        $this->setIfExists('customFields', $data ?? [], null);
        $this->setIfExists('attachments', $data ?? [], null);
        $this->setIfExists('stepsType', $data ?? [], null);
        $this->setIfExists('steps', $data ?? [], null);
        $this->setIfExists('params', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('memberId', $data ?? [], null);
        $this->setIfExists('authorId', $data ?? [], null);
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('updatedAt', $data ?? [], null);
        $this->setIfExists('deleted', $data ?? [], null);
        $this->setIfExists('created', $data ?? [], null);
        $this->setIfExists('updated', $data ?? [], null);
        $this->setIfExists('externalIssues', $data ?? [], null);
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
     * Gets position
     *
     * @return int|null
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int|null $position position
     *
     * @return self
     */
    public function setPosition($position)
    {
        if (is_null($position)) {
            throw new \InvalidArgumentException('non-nullable position cannot be null');
        }
        $this->container['position'] = $position;

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
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets preconditions
     *
     * @return string|null
     */
    public function getPreconditions()
    {
        return $this->container['preconditions'];
    }

    /**
     * Sets preconditions
     *
     * @param string|null $preconditions preconditions
     *
     * @return self
     */
    public function setPreconditions($preconditions)
    {
        if (is_null($preconditions)) {
            array_push($this->openAPINullablesSetToNull, 'preconditions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('preconditions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['preconditions'] = $preconditions;

        return $this;
    }

    /**
     * Gets postconditions
     *
     * @return string|null
     */
    public function getPostconditions()
    {
        return $this->container['postconditions'];
    }

    /**
     * Sets postconditions
     *
     * @param string|null $postconditions postconditions
     *
     * @return self
     */
    public function setPostconditions($postconditions)
    {
        if (is_null($postconditions)) {
            array_push($this->openAPINullablesSetToNull, 'postconditions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('postconditions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['postconditions'] = $postconditions;

        return $this;
    }

    /**
     * Gets severity
     *
     * @return int|null
     */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
     * Sets severity
     *
     * @param int|null $severity severity
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
     * Gets priority
     *
     * @return int|null
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int|null $priority priority
     *
     * @return self
     */
    public function setPriority($priority)
    {
        if (is_null($priority)) {
            throw new \InvalidArgumentException('non-nullable priority cannot be null');
        }
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets layer
     *
     * @return int|null
     */
    public function getLayer()
    {
        return $this->container['layer'];
    }

    /**
     * Sets layer
     *
     * @param int|null $layer layer
     *
     * @return self
     */
    public function setLayer($layer)
    {
        if (is_null($layer)) {
            throw new \InvalidArgumentException('non-nullable layer cannot be null');
        }
        $this->container['layer'] = $layer;

        return $this;
    }

    /**
     * Gets isFlaky
     *
     * @return int|null
     */
    public function getIsFlaky()
    {
        return $this->container['isFlaky'];
    }

    /**
     * Sets isFlaky
     *
     * @param int|null $isFlaky isFlaky
     *
     * @return self
     */
    public function setIsFlaky($isFlaky)
    {
        if (is_null($isFlaky)) {
            throw new \InvalidArgumentException('non-nullable isFlaky cannot be null');
        }
        $this->container['isFlaky'] = $isFlaky;

        return $this;
    }

    /**
     * Gets behavior
     *
     * @return int|null
     */
    public function getBehavior()
    {
        return $this->container['behavior'];
    }

    /**
     * Sets behavior
     *
     * @param int|null $behavior behavior
     *
     * @return self
     */
    public function setBehavior($behavior)
    {
        if (is_null($behavior)) {
            throw new \InvalidArgumentException('non-nullable behavior cannot be null');
        }
        $this->container['behavior'] = $behavior;

        return $this;
    }

    /**
     * Gets automation
     *
     * @return int|null
     */
    public function getAutomation()
    {
        return $this->container['automation'];
    }

    /**
     * Sets automation
     *
     * @param int|null $automation automation
     *
     * @return self
     */
    public function setAutomation($automation)
    {
        if (is_null($automation)) {
            throw new \InvalidArgumentException('non-nullable automation cannot be null');
        }
        $this->container['automation'] = $automation;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int|null $status status
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
     * Gets suiteId
     *
     * @return int|null
     */
    public function getSuiteId()
    {
        return $this->container['suiteId'];
    }

    /**
     * Sets suiteId
     *
     * @param int|null $suiteId suiteId
     *
     * @return self
     */
    public function setSuiteId($suiteId)
    {
        if (is_null($suiteId)) {
            array_push($this->openAPINullablesSetToNull, 'suiteId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('suiteId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['suiteId'] = $suiteId;

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
     * Gets stepsType
     *
     * @return string|null
     */
    public function getStepsType()
    {
        return $this->container['stepsType'];
    }

    /**
     * Sets stepsType
     *
     * @param string|null $stepsType stepsType
     *
     * @return self
     */
    public function setStepsType($stepsType)
    {
        if (is_null($stepsType)) {
            array_push($this->openAPINullablesSetToNull, 'stepsType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('stepsType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['stepsType'] = $stepsType;

        return $this;
    }

    /**
     * Gets steps
     *
     * @return \Qase\APIClientV1\Model\TestStep[]|null
     */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
     * Sets steps
     *
     * @param \Qase\APIClientV1\Model\TestStep[]|null $steps steps
     *
     * @return self
     */
    public function setSteps($steps)
    {
        if (is_null($steps)) {
            throw new \InvalidArgumentException('non-nullable steps cannot be null');
        }
        $this->container['steps'] = $steps;

        return $this;
    }

    /**
     * Gets params
     *
     * @return \Qase\APIClientV1\Model\TestCaseParams|null
     */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
     * Sets params
     *
     * @param \Qase\APIClientV1\Model\TestCaseParams|null $params params
     *
     * @return self
     */
    public function setParams($params)
    {
        if (is_null($params)) {
            throw new \InvalidArgumentException('non-nullable params cannot be null');
        }
        $this->container['params'] = $params;

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
     * Gets deleted
     *
     * @return string|null
     * @deprecated
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param string|null $deleted deleted
     *
     * @return self
     * @deprecated
     */
    public function setDeleted($deleted)
    {
        if (is_null($deleted)) {
            array_push($this->openAPINullablesSetToNull, 'deleted');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('deleted', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets created
     *
     * @return string|null
     * @deprecated
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param string|null $created Deprecated, use the `created_at` property instead.
     *
     * @return self
     * @deprecated
     */
    public function setCreated($created)
    {
        if (is_null($created)) {
            throw new \InvalidArgumentException('non-nullable created cannot be null');
        }
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets updated
     *
     * @return string|null
     * @deprecated
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     *
     * @param string|null $updated Deprecated, use the `updated_at` property instead.
     *
     * @return self
     * @deprecated
     */
    public function setUpdated($updated)
    {
        if (is_null($updated)) {
            throw new \InvalidArgumentException('non-nullable updated cannot be null');
        }
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets externalIssues
     *
     * @return \Qase\APIClientV1\Model\ExternalIssue[]|null
     */
    public function getExternalIssues()
    {
        return $this->container['externalIssues'];
    }

    /**
     * Sets externalIssues
     *
     * @param \Qase\APIClientV1\Model\ExternalIssue[]|null $externalIssues externalIssues
     *
     * @return self
     */
    public function setExternalIssues($externalIssues)
    {
        if (is_null($externalIssues)) {
            throw new \InvalidArgumentException('non-nullable externalIssues cannot be null');
        }
        $this->container['externalIssues'] = $externalIssues;

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


