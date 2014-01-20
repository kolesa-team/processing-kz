<?php
namespace Processing\Objects;

class StartTransactionResult
{
    /**
     * @var string
     */
    protected $customerReference;

    /**
     * @var string
     */
    protected $errorDescription;

    /**
     * @var string
     */
    protected $redirectURL;

    /**
     * @var boolean
     */
    protected $success;

    /**
     * @param  string                                     $customerReference
     * @return \Processing\Objects\StartTransactionResult
     */
    public function setCustomerReference($customerReference)
    {
        $this->customerReference = $customerReference;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @param  string                                     $errorDescription
     * @return \Processing\Objects\StartTransactionResult
     */
    public function setErrorDescription($errorDescription)
    {
        $this->errorDescription = $errorDescription;

        return $this;
    }

    /**
     * @return string
     */
    public function getErrorDescription()
    {
        return $this->errorDescription;
    }

    /**
     * @param  string                                     $redirectURL
     * @return \Processing\Objects\StartTransactionResult
     */
    public function setRedirectURL($redirectURL)
    {
        $this->redirectURL = $redirectURL;

        return $this;
    }

    /**
     * @return string
     */
    public function getRedirectURL()
    {
        return $this->redirectURL;
    }

    /**
     * @param  boolean                                    $success
     * @return \Processing\Objects\StartTransactionResult
     */
    public function setSuccess($success)
    {
        $this->success = $success;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getSuccess()
    {
        return $this->success;
    }
}
