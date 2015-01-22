<?php
namespace Netdudes\DataSourceryBundle\DataSource\Driver\Doctrine\Exception;

use Exception;
use Netdudes\DataSourceryBundle\DataSource\Driver\Exception\DriverException;

class InvalidQueryException extends DriverException
{
    public function __construct($reason)
    {
        parent::__construct("Invalid query: " . $reason, 0, null);
    }
}