<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Laravel\Socialite\Facades\Socialite;
use \Mockery;
class SocialiteTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testItCallsFacebookCallback()
    {

        $provider = Mockery::mock('Laravel\Socialite\Contracts\Provider');
        $provider->shouldReceive('driver->fields->scopes->user')->andReturn(true);
        // replace the return value of true with whatever values you wish to return for your test
        //Socialite::shouldReceive('driver->fields->scopes->user')->andReturn(true);

        $this->visit('/login/facebook/callback');
    }
    //twitter
    public function testItCallsTwitterCallback()
    {
        $provider = Mockery::mock('Laravel\Socialite\Contracts\Provider');
        $provider->shouldReceive('driver->fields->scopes->user')->andReturn(true);
        // replace the return value of true with whatever values you wish to return for your test
        //Socialite::shouldReceive('driver->fields->scopes->user')->andReturn(true);

        $this->visit('/login/twitter/callback');
    }
    //google
    public function testItCallsGoogleCallback()
    {
        $provider = Mockery::mock('Laravel\Socialite\Contracts\Provider');
        $provider->shouldReceive('driver->fields->scopes->user')->andReturn(true);
        // replace the return value of true with whatever values you wish to return for your test
        //Socialite::shouldReceive('driver->fields->scopes->user')->andReturn(true);

        $this->visit('/login/google/callback');

        $this->visit('/login/google/callback');
    }
}
