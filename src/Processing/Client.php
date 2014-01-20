<?php
namespace Processing;

class Client extends \SoapClient
{
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
     * @return array
     */
    protected function getClassMap()
    {
        return [
            'StartTransactionResult'       => '\Processing\Objects\StartTransactionResult',
            'TransactionDetails'           => '\Processing\Objects\TransactionDetails',
            'Address'                      => '\Processing\Objects\Address',
            'GoodsItem'                    => '\Processing\Objects\GoodsItem',
            'AdditionalInformation'        => '\Processing\Objects\AdditionalInformation',
            'StoredTransactionStatus'      => '\Processing\Objects\StoredTransactionStatus',
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
