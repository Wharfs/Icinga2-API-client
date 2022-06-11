<?php
/**
 * Created by PhpStorm.
 * User: poa32kc
 * Date: 14.12.17
 * Time: 14:39
 */

namespace Icinga2_API\Exception;

class ServerNotReachableException extends \Exception{

    /**
     * ServerNotReachableException constructor.
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}