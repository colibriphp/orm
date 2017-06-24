<?php

namespace Colibri\Core\Repository;

use Colibri\Query\Builder;
use Colibri\Query\Statement\Modifiers;

/**
 * Class SoftRepositoryQueryFactory
 * @package Colibri\Core\Repository
 */
class SoftRepositoryQueryFactory extends RepositoryQueryFactory
{
  
  /**
   * @return Builder\Insert
   */
  public function createInsertQuery()
  {
    return parent::createInsertQuery()->addModifier(Modifiers::IGNORE);
  }
  
}