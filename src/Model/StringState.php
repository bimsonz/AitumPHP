<?php

namespace App\Model;

use App\Enum\StateType;

class StringState implements StateValueInterface {

  public function __construct(
    protected string $value,
  ) {
  }

  public function getType(): StateType {
    return StateType::STRING;
  }

  public function getValue() {
    return json_encode((object)['value' => $this->value]);
  }

}