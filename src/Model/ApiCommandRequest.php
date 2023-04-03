<?php

namespace App\Model;

class ApiCommandRequest {
  public function __construct(
    public string $url,
    public string $method,
    public ?string $body,
  ) {
  }
}