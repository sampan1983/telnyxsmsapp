<?php

namespace Telnyx\Exception;

/**
 * AuthenticationException is thrown when invalid credentials are used to
 * connect to Telnyx's servers.
 *
 * @package Telnyx\Exception
 */
#[AllowDynamicProperties]
class AuthenticationException extends ApiErrorException
{
}
