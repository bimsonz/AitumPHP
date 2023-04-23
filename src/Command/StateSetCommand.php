<?php

namespace Aitum\Command;

use Aitum\Model\ApiCommandRequest;
use Aitum\Model\State;
use Aitum\Model\StateValueInterface;

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