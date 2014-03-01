<?php
namespace ProcessingKz;

use ProcessingKz\Objects\Request;
use ProcessingKz\Objects\Response;

/**
 * ProcessingKz.kz SOAP API client.
 */
class Client extends \SoapClient
{
    /**
     * Currency code for KZT.
     */
    const CURRENCY_KZT = 398;

    /**
     * Russian language code.
     */
    const LANGUAGE_RU = 'ru';

    /**
     * Kazakh language code.
     */
    const LANGUAGE_KZ = 'kz';

    /**
     * English language code.
     */
    const LANGUAGE_EN = 'en';

    /**
     * Default options for SOAP API requests.
     *
     * @var array
     */
    protected $defaults = array(
        'uri'        => 'https://kz.processing.cnp.merchant_ws/',
        'soapaction' => '',
    );

    /**
     * {@inheritdoc}
     *
     * @param null|string $wsdl
     * @param array       $options
     */
    public function __construct($wsdl = null, array $options = array())
    {
        $wsdl = (is_null($wsdl)
            ? 'https://test.processing.kz/CNPMerchantWebServices/CNPMerchantWebService.wsdl'
            : $wsdl);

        $options = array_merge(array(
            'connection_timeout' => 60,
            'cache_wsdl'         => WSDL_CACHE_MEMORY,
            'trace'              => 1,
            'soap_version'       => SOAP_1_2,
            'encoding'           => 'UTF-8',
            'exceptions'         => true,
            'location'           => 'https://test.processing.kz/CNPMerchantWebServices/services/CNPMerchantWebService',
        ), $options);

        $options['classmap'] = $this->getClassMap();

        parent::__construct($wsdl, $options);
    }

    /**
     * Begin transaction.
     *
     * @param  \ProcessingKz\Objects\Request\StartTransaction  $parameters
     * @return \ProcessingKz\Objects\Response\StartTransaction
     */
    public function startTransaction(Request\StartTransaction $parameters)
    {
        return $this->__soapCall('startTransaction', array($parameters), $this->defaults);

    }

    /**
     * Revert transaction.
     *
     * @param  \ProcessingKz\Objects\Request\RefundTransaction  $parameters
     * @return \ProcessingKz\Objects\Response\RefundTransaction
     */
    public function refundTransaction(Request\RefundTransaction $parameters)
    {
        return $this->__soapCall('refundTransaction', array($parameters), $this->defaults);
    }

    /**
     * Get API version.
     *
     * @return \ProcessingKz\Objects\Response\GetVersion
     */
    public function getVersion()
    {
        return $this->__soapCall('getVersion', array(), $this->defaults);
    }

    /**
     * Get status of transaction.
     *
     * @param  \ProcessingKz\Objects\Request\GetTransactionStatus  $parameters
     * @return \ProcessingKz\Objects\Response\GetTransactionStatus
     */
    public function getTransactionStatus(Request\GetTransactionStatus $parameters)
    {
        return $this->__soapCall('getTransactionStatus', array($parameters), $this->defaults);
    }

    /**
     * Mark transaction complete.
     *
     * @param  \ProcessingKz\Objects\Request\CompleteTransaction  $parameters
     * @return \ProcessingKz\Objects\Response\CompleteTransaction
     */
    public function completeTransaction(Request\CompleteTransaction $parameters)
    {
        return $this->__soapCall('completeTransaction', array($parameters), $this->defaults);
    }

    /**
     * Get SOAP to PHP class mapping.
     *
     * @return array
     */
    protected function getClassMap()
    {
        return array(
            'StartTransactionResult'       => '\ProcessingKz\Objects\Entity\StartTransactionResult',
            'TransactionDetails'           => '\ProcessingKz\Objects\Entity\TransactionDetails',
            'Address'                      => '\ProcessingKz\Objects\Entity\Address',
            'GoodsItem'                    => '\ProcessingKz\Objects\Entity\GoodsItem',
            'AdditionalInformation'        => '\ProcessingKz\Objects\Entity\AdditionalInformation',
            'StoredTransactionStatus'      => '\ProcessingKz\Objects\Entity\StoredTransactionStatus',
            'startTransaction'             => '\ProcessingKz\Objects\Request\StartTransaction',
            'startTransactionResponse'     => '\ProcessingKz\Objects\Response\StartTransaction',
            'refundTransaction'            => '\ProcessingKz\Objects\Request\RefundTransaction',
            'refundTransactionResponse'    => '\ProcessingKz\Objects\Response\RefundTransaction',
            'getVersionResponse'           => '\ProcessingKz\Objects\Response\GetVersion',
            'getTransactionStatus'         => '\ProcessingKz\Objects\Request\GetTransactionStatus',
            'getTransactionStatusResponse' => '\ProcessingKz\Objects\Response\GetTransactionStatus',
            'completeTransaction'          => '\ProcessingKz\Objects\Request\CompleteTransaction',
            'completeTransactionResponse'  => '\ProcessingKz\Objects\Response\CompleteTransaction',
        );
    }
}
