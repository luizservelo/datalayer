<?php

namespace Example\Models;

use Wallygator\Datalayer\Datalayer;

/**
 * Class TestUUID
 * @package Example\Models
 */
class TestUUID extends DataLayer
{
  public function __construct()
  {
    parent::__construct("app_test_uuid", [], "test_id", false, true);
  }
}
