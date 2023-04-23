<?php

namespace Aitum\Model;

use Aitum\Enum\StateType;

class State {

  public function __construct(
    public readonly string $id,
    public readonly string $name,
    public readonly StateType $type,
    public readonly ?string $value,
  ) {

  }
}