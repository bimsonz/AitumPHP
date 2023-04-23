<?php

namespace Aitum\Client;

use Aitum\Model\ApiCommandRequest;
use Psr\Http\Message\ResponseInterface;

interface HttpClientInterface {
  public function request(
    ApiCommandRequest $request,
  ): ResponseInterface;
}