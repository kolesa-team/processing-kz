<?php
namespace ProcessingKz\Objects\Entity;

/**
 * Class represents result of transaction start command.
 */
class StartTransactionResult extends Base
{
    /**
     * Reference in customer's system.
     *
     * @var string
     */
    protected $customerReference;

    /**
     * Description of error.
     *
     * @var string
     */
    protected $errorDescription;

    /**
     * URL where user would be redirected.
     *
     * @var string
     */
    protected $redirectURL;

    /**
     * Success status of command.
     *
     * @var boolean
     */
    protected $success;

    /**
     * @see \ProcessingKz\Objects\Entity\StartTransactionResult::$customerReference
     *
     * @param  string                                              $customerReference
     * @return \ProcessingKz\Objects\Entity\StartTransactionResult
     */
    public function setCustomerReference($customerReference)
    {
        $this->customerReference = $customerReference;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\StartTransactionResult::$customerReference
     *
     * @return string
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\StartTransactionResult::$errorDescription
     *
     * @param  string                                              $errorDescription
     * @return \ProcessingKz\Objects\Entity\StartTransactionResult
     */
    public function setErrorDescription($errorDescription)
    {
        $this->errorDescription = $errorDescription;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\StartTransactionResult::$errorDescription
     *
     * @return string
     */
    public function getErrorDescription()
    {
        return $this->errorDescription;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\StartTransactionResult::$redirectURL
     *
     * @param  string                                              $redirectURL
     * @return \ProcessingKz\Objects\Entity\StartTransactionResult
     */
    public function setRedirectURL($redirectURL)
    {
        $this->redirectURL = $redirectURL;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\StartTransactionResult::$redirectURL
     *
     * @return string
     */
    public function getRedirectURL()
    {
        return $this->redirectURL;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\StartTransactionResult::$success
     *
     * @param  boolean                                             $success
     * @return \ProcessingKz\Objects\Entity\StartTransactionResult
     */
    public function setSuccess($success)
    {
        $this->success = $success;

        return $this;
    }

    /**
     * @see \ProcessingKz\Objects\Entity\StartTransactionResult::$success
     *
     * @return boolean
     */
    public function getSuccess()
    {
        return $this->success;
    }
}
