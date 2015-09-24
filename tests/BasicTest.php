<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Models\User;

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
             ->see('Teamwork | Datartisan');
    }

    public function testGetUserLogin()
    {
        $this->visit('/user/login')
             ->see('Datartisan Teamwork - 登录');
    }

    public function testGetKnowledgeIndex()
    {
        $user = factory(User::class)->make();

        $this->actingAs($user)             
             ->visit('/knowledge')
             ->see('知识库');
    }

    // public function testGetKnowledgeCeleryPage()
    // {
    //     $user = factory(User::class)->make();

    //     $this->actingAs($user)             
    //          ->visit('/knowledge/celery.md')
    //          ->see('Celery是一个分布式任务队列工具，是一个异步的任务队列基于分布式消息传递。');
    // }

    // public function testGetKnowledgePreviewNeuboardIndex()
    // {
    //     $user = factory(User::class)->make();

    //     $this->actingAs($user)             
    //          ->visit('/preview/neuboard/index.html')
    //          ->see('NEUBOARD');
    // }
}
