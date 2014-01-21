<?php
namespace Processing;

use Processing\Objects\Request;
use Processing\Objects\Response;

class Client extends \SoapClient
{
    /**
     * @var array
     */
    protected $defaults = [
        'uri'        => 'https://kz.processing.cnp.merchant_ws/',
        'soapaction' => '',
    ];

    /**
     * {@inheritdoc}
     *
     * @param null|string $wsdl
     * @param array       $options
     */
    public function __construct($wsdl = null, array $options = [])
    {
        $wsdl = (is_null($wsdl)
            ? 'https://test.processing.kz/CNPMerchantWebServices/CNPMerchantWebService.wsdl'
            : $wsdl);

        $options = array_merge($options, [
            'connection_timeout' => 60,
            'cache_wsdl'         => WSDL_CACHE_MEMORY,
            'trace'              => 1,
            'soap_version'       => SOAP_1_2,
            'encoding'           => 'UTF-8',
            'exceptions'         => true,
            'location'           => 'https://test.processing.kz/CNPMerchantWebServices/services/CNPMerchantWebService',
        ]);

        $options['classmap'] = $this->getClassMap();

        parent::__construct($wsdl, $options);
    }

    /**
     *
     *
     * @param  \Processing\Objects\Request\StartTransaction  $parameters
     * @return \Processing\Objects\Response\StartTransaction
     */
    public function startTransaction(Request\StartTransaction $parameters)
    {
        return $this->__soapCall('startTransaction', [$parameters], $this->defaults);

    }

    /**
     *
     *
     * @param  \Processing\Objects\Request\RefundTransaction  $parameters
     * @return \Processing\Objects\Response\RefundTransaction
     */
    public function refundTransaction(Request\RefundTransaction $parameters)
    {
        return $this->__soapCall('refundTransaction', [$parameters], $this->defaults);
    }

    /**
     * @return \Processing\Objects\Response\GetVersion
     */
    public function getVersion()
    {
        return $this->__soapCall('getVersion', [], $this->defaults);
    }

    /**
     * @param  \Processing\Objects\Request\GetTransactionStatus  $parameters
     * @return \Processing\Objects\Response\GetTransactionStatus
     */
    public function getTransactionStatus(Request\GetTransactionStatus $parameters)
    {
        return $this->__soapCall('getTransactionStatus', [$parameters], $this->defaults);
    }

    /**
     *
     *
     * @param  \Processing\Objects\Request\CompleteTransaction  $parameters
     * @return \Processing\Objects\Response\CompleteTransaction
     */
    public function completeTransaction(Request\CompleteTransaction $parameters)
    {
        return $this->__soapCall('completeTransaction', [$parameters], $this->defaults);
    }

    /**
     * @return array
     */
    protected function getClassMap()
    {
        return [
            'StartTransactionResult'       => '\Processing\Objects\Entity\StartTransactionResult',
            'TransactionDetails'           => '\Processing\Objects\Entity\TransactionDetails',
            'Address'                      => '\Processing\Objects\Entity\Address',
            'GoodsItem'                    => '\Processing\Objects\Entity\GoodsItem',
            'AdditionalInformation'        => '\Processing\Objects\Entity\AdditionalInformation',
            'StoredTransactionStatus'      => '\Processing\Objects\Entity\StoredTransactionStatus',
            'startTransaction'             => '\Processing\Objects\Request\StartTransaction',
            'startTransactionResponse'     => '\Processing\Objects\Response\StartTransaction',
            'refundTransaction'            => '\Processing\Objects\Request\RefundTransaction',
            'refundTransactionResponse'    => '\Processing\Objects\Response\RefundTransaction',
            'getVersionResponse'           => '\Processing\Objects\Response\GetVersion',
            'getTransactionStatus'         => '\Processing\Objects\Request\GetTransactionStatus',
            'getTransactionStatusResponse' => '\Processing\Objects\Response\GetTransactionStatus',
            'completeTransaction'          => '\Processing\Objects\Request\CompleteTransaction',
            'completeTransactionResponse'  => '\Processing\Objects\Response\CompleteTransaction',
        ];
    }
}
