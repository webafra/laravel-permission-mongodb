<?php

namespace Webafra\Permission\Exceptions;

/**
 * Class UnauthorizedPermission
 * @package Webafra\Permission\Exceptions
 */
class UnauthorizedPermission extends UnauthorizedException
{
    /**
     * UnauthorizedPermission constructor.
     *
     * @param $statusCode
     * @param string|null $message
     * @param array $requiredPermissions
     */
    public function __construct($statusCode, string $message = null, array $requiredPermissions = [])
    {
        parent::__construct($statusCode, $message, [], $requiredPermissions);
    }
}
