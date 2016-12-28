<?php
/**
 * PaymentOut
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Payment Rails API
 *
 * No descripton provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.30.12
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * PaymentOut Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PaymentOut implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PaymentOut';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'string',
        'source_amount' => 'float',
        'source_currency' => 'string',
        'source_currency_name' => 'string',
        'target_amount' => 'float',
        'target_currency' => 'string',
        'target_currency_name' => 'string',
        'recipient_fees' => 'float',
        'fx_rate' => 'float',
        'memo' => 'string',
        'status' => 'string',
        'merchant_fees' => 'float',
        'recipient' => '\Swagger\Client\Model\PaymentRecipient',
        'compliance' => '\Swagger\Client\Model\PaymentComplianceStatus',
        'batch' => '\Swagger\Client\Model\PaymentBatch',
        'processed_at' => 'string',
        'updated_at' => 'string',
        'created_at' => 'string'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'id' => 'id',
        'source_amount' => 'sourceAmount',
        'source_currency' => 'sourceCurrency',
        'source_currency_name' => 'sourceCurrencyName',
        'target_amount' => 'targetAmount',
        'target_currency' => 'targetCurrency',
        'target_currency_name' => 'targetCurrencyName',
        'recipient_fees' => 'recipientFees',
        'fx_rate' => 'fxRate',
        'memo' => 'memo',
        'status' => 'status',
        'merchant_fees' => 'merchantFees',
        'recipient' => 'recipient',
        'compliance' => 'compliance',
        'batch' => 'batch',
        'processed_at' => 'processedAt',
        'updated_at' => 'updatedAt',
        'created_at' => 'createdAt'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'id' => 'setId',
        'source_amount' => 'setSourceAmount',
        'source_currency' => 'setSourceCurrency',
        'source_currency_name' => 'setSourceCurrencyName',
        'target_amount' => 'setTargetAmount',
        'target_currency' => 'setTargetCurrency',
        'target_currency_name' => 'setTargetCurrencyName',
        'recipient_fees' => 'setRecipientFees',
        'fx_rate' => 'setFxRate',
        'memo' => 'setMemo',
        'status' => 'setStatus',
        'merchant_fees' => 'setMerchantFees',
        'recipient' => 'setRecipient',
        'compliance' => 'setCompliance',
        'batch' => 'setBatch',
        'processed_at' => 'setProcessedAt',
        'updated_at' => 'setUpdatedAt',
        'created_at' => 'setCreatedAt'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'id' => 'getId',
        'source_amount' => 'getSourceAmount',
        'source_currency' => 'getSourceCurrency',
        'source_currency_name' => 'getSourceCurrencyName',
        'target_amount' => 'getTargetAmount',
        'target_currency' => 'getTargetCurrency',
        'target_currency_name' => 'getTargetCurrencyName',
        'recipient_fees' => 'getRecipientFees',
        'fx_rate' => 'getFxRate',
        'memo' => 'getMemo',
        'status' => 'getStatus',
        'merchant_fees' => 'getMerchantFees',
        'recipient' => 'getRecipient',
        'compliance' => 'getCompliance',
        'batch' => 'getBatch',
        'processed_at' => 'getProcessedAt',
        'updated_at' => 'getUpdatedAt',
        'created_at' => 'getCreatedAt'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['source_amount'] = isset($data['source_amount']) ? $data['source_amount'] : null;
        $this->container['source_currency'] = isset($data['source_currency']) ? $data['source_currency'] : null;
        $this->container['source_currency_name'] = isset($data['source_currency_name']) ? $data['source_currency_name'] : null;
        $this->container['target_amount'] = isset($data['target_amount']) ? $data['target_amount'] : null;
        $this->container['target_currency'] = isset($data['target_currency']) ? $data['target_currency'] : null;
        $this->container['target_currency_name'] = isset($data['target_currency_name']) ? $data['target_currency_name'] : null;
        $this->container['recipient_fees'] = isset($data['recipient_fees']) ? $data['recipient_fees'] : null;
        $this->container['fx_rate'] = isset($data['fx_rate']) ? $data['fx_rate'] : null;
        $this->container['memo'] = isset($data['memo']) ? $data['memo'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['merchant_fees'] = isset($data['merchant_fees']) ? $data['merchant_fees'] : null;
        $this->container['recipient'] = isset($data['recipient']) ? $data['recipient'] : null;
        $this->container['compliance'] = isset($data['compliance']) ? $data['compliance'] : null;
        $this->container['batch'] = isset($data['batch']) ? $data['batch'] : null;
        $this->container['processed_at'] = isset($data['processed_at']) ? $data['processed_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id P-XXXXXXXXXXXXXXXX
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets source_amount
     * @return float
     */
    public function getSourceAmount()
    {
        return $this->container['source_amount'];
    }

    /**
     * Sets source_amount
     * @param float $source_amount
     * @return $this
     */
    public function setSourceAmount($source_amount)
    {
        $this->container['source_amount'] = $source_amount;

        return $this;
    }

    /**
     * Gets source_currency
     * @return string
     */
    public function getSourceCurrency()
    {
        return $this->container['source_currency'];
    }

    /**
     * Sets source_currency
     * @param string $source_currency source currency code
     * @return $this
     */
    public function setSourceCurrency($source_currency)
    {
        $this->container['source_currency'] = $source_currency;

        return $this;
    }

    /**
     * Gets source_currency_name
     * @return string
     */
    public function getSourceCurrencyName()
    {
        return $this->container['source_currency_name'];
    }

    /**
     * Sets source_currency_name
     * @param string $source_currency_name currency name
     * @return $this
     */
    public function setSourceCurrencyName($source_currency_name)
    {
        $this->container['source_currency_name'] = $source_currency_name;

        return $this;
    }

    /**
     * Gets target_amount
     * @return float
     */
    public function getTargetAmount()
    {
        return $this->container['target_amount'];
    }

    /**
     * Sets target_amount
     * @param float $target_amount
     * @return $this
     */
    public function setTargetAmount($target_amount)
    {
        $this->container['target_amount'] = $target_amount;

        return $this;
    }

    /**
     * Gets target_currency
     * @return string
     */
    public function getTargetCurrency()
    {
        return $this->container['target_currency'];
    }

    /**
     * Sets target_currency
     * @param string $target_currency target currency code 3 letters ISO code
     * @return $this
     */
    public function setTargetCurrency($target_currency)
    {
        $this->container['target_currency'] = $target_currency;

        return $this;
    }

    /**
     * Gets target_currency_name
     * @return string
     */
    public function getTargetCurrencyName()
    {
        return $this->container['target_currency_name'];
    }

    /**
     * Sets target_currency_name
     * @param string $target_currency_name currency name
     * @return $this
     */
    public function setTargetCurrencyName($target_currency_name)
    {
        $this->container['target_currency_name'] = $target_currency_name;

        return $this;
    }

    /**
     * Gets recipient_fees
     * @return float
     */
    public function getRecipientFees()
    {
        return $this->container['recipient_fees'];
    }

    /**
     * Sets recipient_fees
     * @param float $recipient_fees
     * @return $this
     */
    public function setRecipientFees($recipient_fees)
    {
        $this->container['recipient_fees'] = $recipient_fees;

        return $this;
    }

    /**
     * Gets fx_rate
     * @return float
     */
    public function getFxRate()
    {
        return $this->container['fx_rate'];
    }

    /**
     * Sets fx_rate
     * @param float $fx_rate
     * @return $this
     */
    public function setFxRate($fx_rate)
    {
        $this->container['fx_rate'] = $fx_rate;

        return $this;
    }

    /**
     * Gets memo
     * @return string
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     * @param string $memo
     * @return $this
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets merchant_fees
     * @return float
     */
    public function getMerchantFees()
    {
        return $this->container['merchant_fees'];
    }

    /**
     * Sets merchant_fees
     * @param float $merchant_fees
     * @return $this
     */
    public function setMerchantFees($merchant_fees)
    {
        $this->container['merchant_fees'] = $merchant_fees;

        return $this;
    }

    /**
     * Gets recipient
     * @return \Swagger\Client\Model\PaymentRecipient
     */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
     * Sets recipient
     * @param \Swagger\Client\Model\PaymentRecipient $recipient
     * @return $this
     */
    public function setRecipient($recipient)
    {
        $this->container['recipient'] = $recipient;

        return $this;
    }

    /**
     * Gets compliance
     * @return \Swagger\Client\Model\PaymentComplianceStatus
     */
    public function getCompliance()
    {
        return $this->container['compliance'];
    }

    /**
     * Sets compliance
     * @param \Swagger\Client\Model\PaymentComplianceStatus $compliance
     * @return $this
     */
    public function setCompliance($compliance)
    {
        $this->container['compliance'] = $compliance;

        return $this;
    }

    /**
     * Gets batch
     * @return \Swagger\Client\Model\PaymentBatch
     */
    public function getBatch()
    {
        return $this->container['batch'];
    }

    /**
     * Sets batch
     * @param \Swagger\Client\Model\PaymentBatch $batch
     * @return $this
     */
    public function setBatch($batch)
    {
        $this->container['batch'] = $batch;

        return $this;
    }

    /**
     * Gets processed_at
     * @return string
     */
    public function getProcessedAt()
    {
        return $this->container['processed_at'];
    }

    /**
     * Sets processed_at
     * @param string $processed_at processing date
     * @return $this
     */
    public function setProcessedAt($processed_at)
    {
        $this->container['processed_at'] = $processed_at;

        return $this;
    }

    /**
     * Gets updated_at
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     * @param string $updated_at last update date
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets created_at
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     * @param string $created_at creation date
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

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


