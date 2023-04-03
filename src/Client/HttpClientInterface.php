<?php

namespace App\Client;

use App\Model\ApiCommandRequest;
use Psr\Http\Message\ResponseInterface;

interface HttpClientInterface {
  public function request(
    ApiCommandRequest $request,
  ): ResponseInterface;
}