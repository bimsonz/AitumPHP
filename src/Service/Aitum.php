<?php

use App\Client\HttpClientInterface;
use App\Command\StateSetCommand;
use App\Command\TriggerRuleCommand;
use App\Dispatcher\ApiCommandDispatcher;
use App\Model\Rule;
use App\Model\State;
use App\Model\StateValueInterface;

class Aitum {

  public function __construct(
    protected HttpClientInterface $client,
  ) {
  }

  public function triggerRule(Rule $rule) {
    $dispatcher = new ApiCommandDispatcher($this->client);

    return $dispatcher->dispatch(
      new TriggerRuleCommand(
        $rule,
      ),
    );
  }

  public function setState(State $state, StateValueInterface $value) {
    $dispatcher = new ApiCommandDispatcher($this->client);

    return $dispatcher->dispatch(
      new StateSetCommand(
        $state,
        $value,
      )
    );
  }
}