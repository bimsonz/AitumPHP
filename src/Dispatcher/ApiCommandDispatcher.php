<?php

namespace App\Dispatcher;

use App\Client\HttpClientInterface;
use App\Command\ApiCommandInterface;

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