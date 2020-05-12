<?php


namespace App\Services;


use function GuzzleHttp\Psr7\build_query;

trait RequestExternalApi
{
    private $baseUrl;
    private $header;

    /**
     * A function that calls api using the defualt of the class in constructor
     * @param string $path
     * @param array $query
     * @return \Unirest\Response
     */
    private function request(string $path, array $query)
    {
        return \Unirest\Request::get(
            "{$this->baseUrl}/$path?" . build_query($query),
            $this->header
        );
    }
}
