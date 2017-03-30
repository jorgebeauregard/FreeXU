<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TestCreateProject_Category extends TestCase
{
    //TODO: Juan Pablo
    //Missing check in the DB
    public function testCreateProjectWithACathegory()
    {
        $this->visit('/login')
            ->type('admin@outlook.com', 'email')
            ->type('secret', 'password')
            ->press('Login')
            ->click('Add a project')
            ->type('Name test', 'name')
            ->type('Description test', 'description')
            ->select('Architecture', 'category')
            ->seePageIs('projects/create');
    }
}
