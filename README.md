ProcessingKz
============
[![Build Status](https://travis-ci.org/iborodikhin/processing-kz.png?branch=master)](https://travis-ci.org/iborodikhin/processing-kz)

PHP client for SOAP API of processing.kz

Usage example
-------------

    $client = new \ProcessingKz\Client();

    // Begin payment transaction ("checkout").
    $details = new \ProcessingKz\Objects\Entity\TransactionDetails();
    $details->setMerchantId("000000000000001")
        ->setTerminalId("TEST TID")
        ->setTotalAmount($total)
        ->setCurrencyCode(398)
        ->setDescription("My first transaction")
        ->setReturnURL("/transaction-result")
        ->setGoodsList($_SESSION["basket"])
        ->setLanguageCode("ru")
        ->setMerchantLocalDateTime(date("d.m.Y H:i:s"))
        ->setOrderId(rand(1, 10000))
        ->setPurchaserName("IVANOV IVAN")
        ->setPurchaserEmail("purchaser@processing.kz");

    $transaction = new \ProcessingKz\Objects\Request\StartTransaction();
    $transaction->setTransaction($details);

    $startResult = $client->startTransaction($transaction);

    if (true === $startResult->getReturn()->getSuccess()) {
        $reference = $startResult->getReturn()->getCustomerReference();

        // Commit payment transaction.
        $complete = new \ProcessingKz\Objects\Request\CompleteTransaction();
        $complete->setMerchantId("000000000000001")
            ->setReferenceNr($reference)
            ->setTransactionSuccess(true);
        $completeResult = $client->completeTransaction($complete);

        // Get status of transaction.
        $status = new \ProcessingKz\Objects\Request\GetTransactionStatus();
        $status->setMerchantId("000000000000001")
            ->setReferenceNr($reference);
        $statusResult = $client->getTransactionStatus($status);
    } else {
        die($startResult->getReturn()->getErrorDescription());
    }
