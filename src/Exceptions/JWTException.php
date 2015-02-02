<?php

namespace Tymon\JWTAuth\Exceptions;

class JWTException extends \Exception
{
    /**
     * @var integer
     */
    protected $statusCode = 500;

    /**
     * @param string  $message
     * @param integer $statusCode
     */
    public function __construct($message = 'An error occured', $statusCode = null)
    {
        parent::__construct($message);

        if ($statusCode) {
            $this->setStatusCode($statusCode);
        }
    }

    /**
     * @param integer $statusCode
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
    }

    /**
     * @return integer the status code
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }
}
