<?php

namespace Colibri\Query\Expr\Func;

use Colibri\Exception\BadCallMethodException;
use Colibri\Query\Expr\Func;

class OldPassword extends Func
{
    
    /**
     * OldPassword constructor.
     * MySQL Function OLD_PASSWORD
     *
     * @param array $parameters
     *
     * @throws BadCallMethodException
     */
    public function __construct(...$parameters)
    {
        parent::__construct('OLD_PASSWORD', $parameters);
    }
    
}