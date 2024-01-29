<?php

namespace Example\Models;

use Wallygator\DataLayer\DataLayer;

/**
 * Class TestInt
 * @package Example\Models
 */
class TestInt extends DataLayer
{
  public function __construct()
  {
    parent::__construct("app_test_int", [], "test_id", false);
  }
}
