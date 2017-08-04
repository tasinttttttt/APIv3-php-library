<?php
/**
 * GetExtendedCampaignStats
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SendinBlue API
 *
 * SendinBlue provide a RESTFul API that can be used with any languages. With this API, you will be able to :   - Manage your campaigns and get the statistics   - Manage your contacts   - Send transactional Emails and SMS   - and much more...  You can download our wrappers at https://github.com/orgs/sendinblue  **Possible responses**   | Code | Message |   | :-------------: | ------------- |   | 200  | OK. Successful Request  |   | 201  | OK. Successful Creation |   | 202  | OK. Request accepted |   | 204  | OK. Successful Update/Deletion  |   | 400  | Error. Bad Request  |   | 401  | Error. Authentication Needed  |   | 402  | Error. Not enough credit, plan upgrade needed  |   | 403  | Error. Permission denied  |   | 404  | Error. Object does not exist |   | 405  | Error. Method not allowed  |
 *
 * OpenAPI spec version: 3.0.0
 * Contact: contact@sendinblue.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * GetExtendedCampaignStats Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetExtendedCampaignStats implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'getExtendedCampaignStats';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'campaign_stats' => '\Swagger\Client\Model\InlineResponse2008StatisticsCampaignStats[]',
        'mirror_click' => 'int',
        'remaining' => 'int',
        'links_stats' => 'map[string,\Swagger\Client\Model\InlineResponse2008StatisticsLinksStats]',
        'stats_by_domain' => 'map[string,\Swagger\Client\Model\InlineResponse2008StatisticsCampaignStats]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'campaign_stats' => null,
        'mirror_click' => 'int32',
        'remaining' => 'int32',
        'links_stats' => null,
        'stats_by_domain' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'campaign_stats' => 'campaignStats',
        'mirror_click' => 'mirrorClick',
        'remaining' => 'remaining',
        'links_stats' => 'linksStats',
        'stats_by_domain' => 'statsByDomain'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'campaign_stats' => 'setCampaignStats',
        'mirror_click' => 'setMirrorClick',
        'remaining' => 'setRemaining',
        'links_stats' => 'setLinksStats',
        'stats_by_domain' => 'setStatsByDomain'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'campaign_stats' => 'getCampaignStats',
        'mirror_click' => 'getMirrorClick',
        'remaining' => 'getRemaining',
        'links_stats' => 'getLinksStats',
        'stats_by_domain' => 'getStatsByDomain'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['campaign_stats'] = isset($data['campaign_stats']) ? $data['campaign_stats'] : null;
        $this->container['mirror_click'] = isset($data['mirror_click']) ? $data['mirror_click'] : null;
        $this->container['remaining'] = isset($data['remaining']) ? $data['remaining'] : null;
        $this->container['links_stats'] = isset($data['links_stats']) ? $data['links_stats'] : null;
        $this->container['stats_by_domain'] = isset($data['stats_by_domain']) ? $data['stats_by_domain'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['campaign_stats'] === null) {
            $invalid_properties[] = "'campaign_stats' can't be null";
        }
        if ($this->container['mirror_click'] === null) {
            $invalid_properties[] = "'mirror_click' can't be null";
        }
        if ($this->container['remaining'] === null) {
            $invalid_properties[] = "'remaining' can't be null";
        }
        if ($this->container['links_stats'] === null) {
            $invalid_properties[] = "'links_stats' can't be null";
        }
        if ($this->container['stats_by_domain'] === null) {
            $invalid_properties[] = "'stats_by_domain' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['campaign_stats'] === null) {
            return false;
        }
        if ($this->container['mirror_click'] === null) {
            return false;
        }
        if ($this->container['remaining'] === null) {
            return false;
        }
        if ($this->container['links_stats'] === null) {
            return false;
        }
        if ($this->container['stats_by_domain'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets campaign_stats
     * @return \Swagger\Client\Model\InlineResponse2008StatisticsCampaignStats[]
     */
    public function getCampaignStats()
    {
        return $this->container['campaign_stats'];
    }

    /**
     * Sets campaign_stats
     * @param \Swagger\Client\Model\InlineResponse2008StatisticsCampaignStats[] $campaign_stats
     * @return $this
     */
    public function setCampaignStats($campaign_stats)
    {
        $this->container['campaign_stats'] = $campaign_stats;

        return $this;
    }

    /**
     * Gets mirror_click
     * @return int
     */
    public function getMirrorClick()
    {
        return $this->container['mirror_click'];
    }

    /**
     * Sets mirror_click
     * @param int $mirror_click Number of clicks on mirror link
     * @return $this
     */
    public function setMirrorClick($mirror_click)
    {
        $this->container['mirror_click'] = $mirror_click;

        return $this;
    }

    /**
     * Gets remaining
     * @return int
     */
    public function getRemaining()
    {
        return $this->container['remaining'];
    }

    /**
     * Sets remaining
     * @param int $remaining Number of remaning emails to send
     * @return $this
     */
    public function setRemaining($remaining)
    {
        $this->container['remaining'] = $remaining;

        return $this;
    }

    /**
     * Gets links_stats
     * @return map[string,\Swagger\Client\Model\InlineResponse2008StatisticsLinksStats]
     */
    public function getLinksStats()
    {
        return $this->container['links_stats'];
    }

    /**
     * Sets links_stats
     * @param map[string,\Swagger\Client\Model\InlineResponse2008StatisticsLinksStats] $links_stats
     * @return $this
     */
    public function setLinksStats($links_stats)
    {
        $this->container['links_stats'] = $links_stats;

        return $this;
    }

    /**
     * Gets stats_by_domain
     * @return map[string,\Swagger\Client\Model\InlineResponse2008StatisticsCampaignStats]
     */
    public function getStatsByDomain()
    {
        return $this->container['stats_by_domain'];
    }

    /**
     * Sets stats_by_domain
     * @param map[string,\Swagger\Client\Model\InlineResponse2008StatisticsCampaignStats] $stats_by_domain
     * @return $this
     */
    public function setStatsByDomain($stats_by_domain)
    {
        $this->container['stats_by_domain'] = $stats_by_domain;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

