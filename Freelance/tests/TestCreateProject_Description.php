<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TestCreateProject_Description extends TestCase
{
    public function testDescriptionToBig()
    {
        $this->visit('/login')
            ->type('admin@outlook.com', 'email')
            ->type('secret', 'password')
            ->press('Login')
            ->click('Add a project')
            ->type('Name of the project test', 'name')
            ->type('holaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholaholahola', 'description')
            ->seePageIs('projects/create');
    }

    //TODO: Juan Pablo
    //Missing check in the DB
    public function testDescriptionWithStrangeCharacters()
    {
        $this->visit('/login')
            ->type('admin@outlook.com', 'email')
            ->type('secret', 'password')
            ->press('Login')
            ->click('Add a project')
            ->type('Name of the project test', 'name')
            ->type('hola@hola ./[]()', 'description')
            ->seePageIs('projects/create');
    }

    public function testWithOutDescription()
    {
        $this->visit('/login')
            ->type('admin@outlook.com', 'email')
            ->type('secret', 'password')
            ->press('Login')
            ->click('Add a project')
            ->type('Name of the project test', 'name')
            ->type('', 'description')
            ->seePageIs('projects/create');
    }
}
