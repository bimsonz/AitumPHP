<?php

namespace Aitum\Command;

use Aitum\Model\ApiCommandRequest;

interface ApiCommandInterface {

  public function execute(): ApiCommandRequest;
}