<?php

namespace Aitum\Model;

class BaseDevice {
  protected function __construct(
    public readonly string $name,
    public readonly string $type,
    public readonly string $host,
  ) {
  }
}