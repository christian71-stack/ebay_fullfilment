<?php
/**
 * Refund
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
 * Refund Class Doc Comment
 *
 * @category Class
 * @description This is the base type of the &lt;b&gt;issueRefund&lt;/b&gt; response payload. As long as the &lt;b&gt;issueRefund&lt;/b&gt; method does not trigger an error, a response payload will be returned.
 * @package  cbdesk\ebay_fullfilment
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Refund implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Refund';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'refund_id' => 'string',
'refund_status' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'refund_id' => null,
'refund_status' => null    ];

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
        'refund_id' => 'refundId',
'refund_status' => 'refundStatus'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'refund_id' => 'setRefundId',
'refund_status' => 'setRefundStatus'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'refund_id' => 'getRefundId',
'refund_status' => 'getRefundStatus'    ];

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
        $this->container['refund_id'] = isset($data['refund_id']) ? $data['refund_id'] : null;
        $this->container['refund_status'] = isset($data['refund_status']) ? $data['refund_status'] : null;
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
     * @param string $refund_id The unique identifier of the order refund. This value is returned unless the refund operation fails (<b>refundStatus</b> value shows <code>FAILED</code>). This identifier can be used to track the status of the refund through a <b>getOrder</b> or <b>getOrders</b> call. For order-level refunds, check the <b>paymentSummary.refunds.refundId</b> field in the <b>getOrder</b>/<b>getOrders</b> response, and for line item level refunds, check the <b>lineItems.refunds.refundId</b> field(s) in the <b>getOrder</b>/<b>getOrders</b> response.
     *
     * @return $this
     */
    public function setRefundId($refund_id)
    {
        $this->container['refund_id'] = $refund_id;

        return $this;
    }

    /**
     * Gets refund_status
     *
     * @return string
     */
    public function getRefundStatus()
    {
        return $this->container['refund_status'];
    }

    /**
     * Sets refund_status
     *
     * @param string $refund_status The value returned in this field indicates the success or failure of the refund operation. A successful <b>issueRefund</b> operation should result in a value of <code>PENDING</code>. A failed <b>issueRefund</b> operation should result in a value of <code>FAILED</code>, and an HTTP status code and/or and API error code may also get returned to possibly indicate the issue.<br/><br/>The refunds issued through this method are processed asynchronously, so the refund will not show as 'Refunded' right away. A seller will have to make a subsequent <a href=\"https://developer.ebay.com/api-docs/sell/fulfillment/resources/order/methods/getOrder\" target=\"_blank\">getOrder</a> call to check the status of the refund.  The status of an order refund can be found in the <a href=\"https://developer.ebay.com/api-docs/sell/fulfillment/resources/order/methods/getOrder#response.paymentSummary.refunds.refundStatus\" target=\"_blank\">paymentSummary.refunds.refundStatus</a> field of the <a href=\"https://developer.ebay.com/api-docs/sell/fulfillment/resources/order/methods/getOrder\" target=\"_blank\">getOrder</a> response. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:RefundStatusEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setRefundStatus($refund_status)
    {
        $this->container['refund_status'] = $refund_status;

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