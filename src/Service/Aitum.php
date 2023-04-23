<?php

use Aitum\Client\HttpClientInterface;
use Aitum\Command\StateSetCommand;
use Aitum\Command\TriggerRuleCommand;
use Aitum\Dispatcher\ApiCommandDispatcher;
use Aitum\Model\Rule;
use Aitum\Model\State;
use Aitum\Model\StateValueInterface;

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