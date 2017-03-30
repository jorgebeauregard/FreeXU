<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TestCreateProject_Name extends TestCase
{
    public function testNameToBig()
    {
        $this->visit('/login')
            ->type('admin@outlook.com', 'email')
            ->type('secret', 'password')
            ->press('Login')
            ->click('Add a project')
            ->type('holaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholahola', 'name')
            ->type('Description test', 'description')
            ->seePageIs('projects/create');
    }

    //TODO: Juan Pablo
    //Missing check in the DB
    public function testNameWithStrangeCharacters()
    {
        $this->visit('/login')
            ->type('admin@outlook.com', 'email')
            ->type('secret', 'password')
            ->press('Login')
            ->click('Add a project')
            ->type('hola@hola ./[]()', 'name')
            ->type('Description test', 'description')
            ->seePageIs('projects/create');
    }

    public function testWithoutName()
    {
        $this->visit('/login')
            ->type('admin@outlook.com', 'email')
            ->type('secret', 'password')
            ->press('Login')
            ->click('Add a project')
            ->type('', 'name')
            ->type('Description test', 'description')
            ->seePageIs('projects/create');
    }
}
