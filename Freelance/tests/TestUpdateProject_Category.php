<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TestUpdateProject_Category extends TestCase
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
            ->select('1', 'category')
            ->press('Edit your project')
            ->seePageIs('/projects');
    }
}
