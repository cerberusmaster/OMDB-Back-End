<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ResultsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function testRouter()
    {
        $response = $this->get('/');
        $response->assertStatus(200);

        $params = array('username'=> 'test-user', 'terminator'=> 'cowboy', 'score'=> '5');
        $response = $this->post('/new-score', $params);

        $response = $this->get('/all-score');
        $response->assertStatus(200);

        $response = $this->get('/clear-score');
        $response->assertStatus(200);
    }
}
