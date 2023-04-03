<?php

namespace App\Command;

use App\Model\ApiCommandRequest;

interface ApiCommandInterface {

  public function execute(): ApiCommandRequest;
}