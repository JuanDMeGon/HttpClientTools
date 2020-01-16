<?php

namespace JuanDMeGon\Test;

use JuanDMeGon\Traits\ConsumesExternalServices;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    use ConsumesExternalServices;

    public function testCanConsumeExternalService()
    {
        $response = $this->makeRequest('GET', 'example.com');

        $this->assertStringContainsString('Example', $response);
    }

    public function testCanConsumeJsonService()
    {
        $response = $this->makeRequest(
            'POST',
            'example.com',
            [],
            [
                'test' => 'something',
            ],
            [],
            false,
            true);

        $this->assertStringContainsString('Example', $response);
    }
}
