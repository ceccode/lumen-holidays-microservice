<?php

use Illuminate\Foundation\Testing\DatabaseMigrations;

class ControllerTest extends TestCase
{
    protected $key;
    protected $serverParams;

    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();
        $this->artisan('migrate');
        $this->artisan('db:seed');
        $this->key = env('APP_KEY');
        $this->serverParams = [
            'HTTP_ACCEPT' => 'application/vnd.app.v1+json',
            'HTTP_CONTENT_TYPE' => 'application/x-www-form-urlencoded'
        ];
    }

    public function tearDown()
    {
      $this->artisan('migrate:reset');
      parent::tearDown();
    }

    public function test_apit_without_credentials()
    {
        $response = $this->call('GET', '/api/holidays/it_IT/2016');
        $this->assertResponseStatus(401);
    }

    // public function test_can_get_access_token()
    // {
    //
    //     $data = [
    //       "username" => "user@palmabit.com",
    //       "password" => "1234",
    //       "grant_type" => "password",
    //       "client_id" => "1",
    //       "client_secret" => "gKYG75sw"
    //     ];
    //     $response = $this->call('POST', '/oauth/access-token', $data, [], [], $this->serverParams);
    //     $this->assertEquals('application/json', $response->headers->get('Content-Type'));
    // }

    // public function testGetHolidays()
    // {
    //     $this->call('GET', "/api/holidays/it_IT/2016", [], [], [], $this->serverParams);
    //     $json = json_decode($response->getContent());
    //     $this->assertResponseOk();
    // }

}
