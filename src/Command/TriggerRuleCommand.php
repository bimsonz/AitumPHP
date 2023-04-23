<?php

namespace Aitum\Command;

use Aitum\Model\ApiCommandRequest;
use Aitum\Model\Rule;

class TriggerRuleCommand implements ApiCommandInterface {


  public function __construct(
    protected Rule $rule,
  ) {
  }

  public function execute(): ApiCommandRequest {
    return new ApiCommandRequest(
      '/aitum/rules/' . $this->rule->id,
      'GET',
      NULL
    );
  }

}