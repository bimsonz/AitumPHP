<?php

namespace App;

use App\Client\HttpClientInterface;
use App\Model\ApiCommandRequest;
use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

class GuzzleClientAdapter implements HttpClientInterface {

  public function request(ApiCommandRequest $request): ResponseInterface {
    $client = new Client([
      'base_uri' => '127.0.0.1',
      'port' => '7777',
      'headers' => [
        'Content-Type' => 'application/json',
      ]
    ]);

    return $client->request(
      $request->method,
      $request->url,
      ['body' => $request->body]
    );
  }


}