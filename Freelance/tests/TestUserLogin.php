<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Artisan;

class TestUserLogin extends TestCase
{
    public function testInsertAUserAndSignIn()
    {
        $this->visit('/register')
            ->type('Juan', 'name')
            ->type('juanfg@outlook.com', 'email')
            ->type('secret', 'password')
            ->type('secret', 'password_confirmation')
            ->press('Register')
            ->visit('login')
            ->type('juanfg@outlook.com', 'email')
            ->type('secret', 'password')
            ->press('Login')
            ->seePageIs('/home');      
    }
}
