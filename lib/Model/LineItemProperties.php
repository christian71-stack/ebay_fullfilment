<?php
/**
 * LineItemProperties
 *
 * PHP version 5
 *
 * @category Class
 * @package  cbdesk\ebay_fullfilment
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Fulfillment API
 *
 * Use the Fulfillment API to complete the process of packaging, addressing, handling, and shipping each order on behalf of the seller, in accordance with the payment method and timing specified at checkout.
 *
 * OpenAPI spec version: v1.19.17
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.36
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace cbdesk\ebay_fullfilment\Model;

use \ArrayAccess;
use \cbdesk\ebay_fullfilment\ObjectSerializer;

/**
 * LineItemProperties Class Doc Comment
 *
 * @category Class
 * @description This type contains information about the eBay programs under which a line item was listed and sold.
 * @package  cbdesk\ebay_fullfilment
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LineItemProperties implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LineItemProperties';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'buyer_protection' => 'bool',
'from_best_offer' => 'bool',
'sold_via_ad_campaign' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'buyer_protection' => null,
'from_best_offer' => null,
'sold_via_ad_campaign' => null    ];

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
        'buyer_protection' => 'buyerProtection',
'from_best_offer' => 'fromBestOffer',
'sold_via_ad_campaign' => 'soldViaAdCampaign'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'buyer_protection' => 'setBuyerProtection',
'from_best_offer' => 'setFromBestOffer',
'sold_via_ad_campaign' => 'setSoldViaAdCampaign'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'buyer_protection' => 'getBuyerProtection',
'from_best_offer' => 'getFromBestOffer',
'sold_via_ad_campaign' => 'getSoldViaAdCampaign'    ];

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
        $this->container['buyer_protection'] = isset($data['buyer_protection']) ? $data['buyer_protection'] : null;
        $this->container['from_best_offer'] = isset($data['from_best_offer']) ? $data['from_best_offer'] : null;
        $this->container['sold_via_ad_campaign'] = isset($data['sold_via_ad_campaign']) ? $data['sold_via_ad_campaign'] : null;
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
     * Gets buyer_protection
     *
     * @return bool
     */
    public function getBuyerProtection()
    {
        return $this->container['buyer_protection'];
    }

    /**
     * Sets buyer_protection
     *
     * @param bool $buyer_protection A value of <code>true</code> indicates that the line item is covered by eBay's Buyer Protection program.
     *
     * @return $this
     */
    public function setBuyerProtection($buyer_protection)
    {
        $this->container['buyer_protection'] = $buyer_protection;

        return $this;
    }

    /**
     * Gets from_best_offer
     *
     * @return bool
     */
    public function getFromBestOffer()
    {
        return $this->container['from_best_offer'];
    }

    /**
     * Sets from_best_offer
     *
     * @param bool $from_best_offer This field is only returned if <code>true</code> and indicates that the purchase occurred by the buyer and seller mutually agreeing on a Best Offer amount. The Best Offer feature can be set up for any listing type, but if this feature is set up for an auction listing, it will no longer be available once a bid has been placed on the listing.
     *
     * @return $this
     */
    public function setFromBestOffer($from_best_offer)
    {
        $this->container['from_best_offer'] = $from_best_offer;

        return $this;
    }

    /**
     * Gets sold_via_ad_campaign
     *
     * @return bool
     */
    public function getSoldViaAdCampaign()
    {
        return $this->container['sold_via_ad_campaign'];
    }

    /**
     * Sets sold_via_ad_campaign
     *
     * @param bool $sold_via_ad_campaign This field is only returned if <code>true</code> and indicates that the line item was sold as a result of a seller's ad campaign.
     *
     * @return $this
     */
    public function setSoldViaAdCampaign($sold_via_ad_campaign)
    {
        $this->container['sold_via_ad_campaign'] = $sold_via_ad_campaign;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
