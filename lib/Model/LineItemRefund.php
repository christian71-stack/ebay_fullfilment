<?php
/**
 * LineItemRefund
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
 * LineItemRefund Class Doc Comment
 *
 * @category Class
 * @description This type contains refund information for a line item.
 * @package  cbdesk\ebay_fullfilment
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LineItemRefund implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LineItemRefund';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount' => '\cbdesk\ebay_fullfilment\Model\Amount',
'refund_date' => 'string',
'refund_id' => 'string',
'refund_reference_id' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amount' => null,
'refund_date' => null,
'refund_id' => null,
'refund_reference_id' => null    ];

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
        'amount' => 'amount',
'refund_date' => 'refundDate',
'refund_id' => 'refundId',
'refund_reference_id' => 'refundReferenceId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
'refund_date' => 'setRefundDate',
'refund_id' => 'setRefundId',
'refund_reference_id' => 'setRefundReferenceId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
'refund_date' => 'getRefundDate',
'refund_id' => 'getRefundId',
'refund_reference_id' => 'getRefundReferenceId'    ];

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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['refund_date'] = isset($data['refund_date']) ? $data['refund_date'] : null;
        $this->container['refund_id'] = isset($data['refund_id']) ? $data['refund_id'] : null;
        $this->container['refund_reference_id'] = isset($data['refund_reference_id']) ? $data['refund_reference_id'] : null;
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
     * Gets amount
     *
     * @return \cbdesk\ebay_fullfilment\Model\Amount
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \cbdesk\ebay_fullfilment\Model\Amount $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets refund_date
     *
     * @return string
     */
    public function getRefundDate()
    {
        return $this->container['refund_date'];
    }

    /**
     * Sets refund_date
     *
     * @param string $refund_date The date and time that the refund was issued for the line item. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned until the refund has been issued. <br /><br /><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br /><b>Example:</b> <code>2015-08-04T19:09:02.768Z</code>
     *
     * @return $this
     */
    public function setRefundDate($refund_date)
    {
        $this->container['refund_date'] = $refund_date;

        return $this;
    }

    /**
     * Gets refund_id
     *
     * @return string
     */
    public function getRefundId()
    {
        return $this->container['refund_id'];
    }

    /**
     * Sets refund_id
     *
     * @param string $refund_id Unique identifier of a refund that was initiated for an order's line item through the <b>issueRefund</b> method. If the <b>issueRefund</b> method was used to issue a refund at the order level, this identifier is returned at the order level instead (<b>paymentSummary.refunds.refundId</b> field).<br/><br/> A <b>refundId</b> value is returned in the response of the <b>issueRefund</b> method, and this same value will be returned in the <b>getOrder</b> and <b>getOrders</b> responses for pending and completed refunds.
     *
     * @return $this
     */
    public function setRefundId($refund_id)
    {
        $this->container['refund_id'] = $refund_id;

        return $this;
    }

    /**
     * Gets refund_reference_id
     *
     * @return string
     */
    public function getRefundReferenceId()
    {
        return $this->container['refund_reference_id'];
    }

    /**
     * Sets refund_reference_id
     *
     * @param string $refund_reference_id This field is reserved for internal or future use.
     *
     * @return $this
     */
    public function setRefundReferenceId($refund_reference_id)
    {
        $this->container['refund_reference_id'] = $refund_reference_id;

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