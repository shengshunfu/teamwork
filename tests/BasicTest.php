<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BasicTest extends TestCase
{
    /**
     * test
     *
     * @return void
     */
    public function testIndex()
    {
        $this->visit('/')
             ->see('Laravel 5');
    }
}
