<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TestUpdateProject_Name extends TestCase
{
    //TODO: Juan Pablo
    //Check directly in the DB
    public function testUpdateProjectName()
    {
        $this->visit('/login')
            ->type('admin@outlook.com', 'email')
            ->type('secret', 'password')
            ->press('Login')
            ->click('Submitted projects')
            ->press('edit')
            ->type('new name', 'name')
            ->press('Edit your project')
            ->seePageIs('/projects');
    }
}
