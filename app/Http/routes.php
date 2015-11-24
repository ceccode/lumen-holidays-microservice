<?php

$api = app('Dingo\Api\Routing\Router');
$api->version('v1', ['middleware' => ['api.auth', 'api.throttle'], 'namespace' => 'App\Http\Controllers\V1'], function ($api) {
    $api->get('holidays/{country}/{year}', 'HolidaysController@get');
});


$app->post('oauth/access-token', function() use($app) {
    return response()->json($app->make('oauth2-server.authorizer')->issueAccessToken());
});
