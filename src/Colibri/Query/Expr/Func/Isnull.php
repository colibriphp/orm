<?php

namespace Colibri\Query\Expr\Func;

use Colibri\Exception\BadCallMethodException;
use Colibri\Query\Expr\Func;

class Isnull extends Func
{
    
    /**
     * Isnull constructor.
     * MySQL Function ISNULL
     *
     * @param array $parameters
     *
     * @throws BadCallMethodException
     */
    public function __construct(...$parameters)
    {
        parent::__construct('ISNULL', $parameters);
    }
    
}