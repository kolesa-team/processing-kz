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
     * Set customer's reference.
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
     * Get customer's reference.
     *
     * @return string
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * Set error description.
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
     * Get error description.
     *
     * @return string
     */
    public function getErrorDescription()
    {
        return $this->errorDescription;
    }

    /**
     * Set redirect URL.
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
     * Get redirect URL.
     *
     * @return string
     */
    public function getRedirectURL()
    {
        return $this->redirectURL;
    }

    /**
     * Set success status.
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
     * Get success status.
     *
     * @return boolean
     */
    public function getSuccess()
    {
        return $this->success;
    }
}
