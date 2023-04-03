<?php

namespace App\Model;

class Host {
  public function __construct(
    public readonly string $id,
    public readonly string $name,
    public readonly string $type
  ) {
  }

}