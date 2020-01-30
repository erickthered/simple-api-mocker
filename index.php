<?php

require ('vendor/autoload.php');

use Pecee\SimpleRouter\SimpleRouter;

class ApiRouter extends SimpleRouter
{
    public static function start() : void
    {
        // @todo: any custom initialization that needs to be done
        parent::start();
    }
}

ApiRouter::get('/', function() {
    return 'Home';
});

ApiRouter::get('/users', function() {
    return ApiRouter::response()->json([
        [
            'id' => 1,
            'email' => 'someone@somewhere.com'
        ]
    ]);
});

ApiRouter::post('/users', function() {
    return ApiRouter::response()->json([
        'success' => true,
        'data' => [
            'id' => 2,
            'email' => 'someone2@somewhere.com'
        ]
    ]);
});

ApiRouter::start();