<?php

namespace App\Command;

use App\Model\ApiCommandRequest;
use App\Model\State;
use App\Model\StateValueInterface;

class StateSetCommand implements ApiCommandInterface {

  public function __construct(
    protected State $state,
    protected StateValueInterface $value,
  ) {}

  /**
   * @throws \Exception
   */
  public function execute(): ApiCommandRequest {

    if ($this->state->type != $this->value->getType()) {
      throw new \Exception('State value type much match current type.');
    }

    return new ApiCommandRequest(
      '/aitum/state/' . $this->state->id,
      'PUT',
      $this->value->getValue(),
    );
  }

}