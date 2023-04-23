<?php

namespace Aitum\Dispatcher;

use Aitum\Client\HttpClientInterface;
use Aitum\Command\ApiCommandInterface;

class ApiCommandDispatcher {

  public function __construct(protected HttpClientInterface $client) {
  }

  public function dispatch(ApiCommandInterface $command): string {
    $response = $this->client->request(
      $command->execute()
    );

    if ($response->getStatusCode() != 200) {
      throw new \Exception('Invalid request:' . $response->getStatusCode());
    }

    return $response->getBody()->getContents();
  }
}