<?php

namespace App\Model;

class Rule {
  public function __construct(
    public readonly string $id,
    public readonly string $name,
  ) {
  }
}