<?php
namespace Paranoia\Helper\Http;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\RequestException;
use Paranoia\Exception\ConnectionError;

class Client
{
    /**
     * @param string $url
     * @param array $data
     * @return \Guzzle\Http\EntityBodyInterface|string
     * @throws ConnectionError
     */
    public static function post($url, array $data)
    {
        $client = new HttpClient();

        try {
            $response = $client->post($url, [
                'body'      => $data,
                'verify'    => false,
            ]);
            return new HttpResponse($response->getStatusCode(), $response->getBody());
        } catch (RequestException $e) {
            throw new ConnectionError('Communication failed: ' . $url);
        }
    }
}
