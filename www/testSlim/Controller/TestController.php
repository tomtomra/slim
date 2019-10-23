<?php

use Slim\Http\Request;
use Slim\Http\Response;

class TestController
{
    public function index(Request $request, Response $response)
    {
        $name = $request->getAttribute('name');
        $response = $response->withJson(["response" => "Test, $name"], 200);
        return $response;
    }
}
