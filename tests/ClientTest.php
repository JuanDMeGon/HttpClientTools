<?php

namespace JuanDMeGon\Test;

use PHPUnit\Framework\TestCase;
use JuanDMeGon\Traits\ConsumesExternalServices;

class ClientTest extends TestCase
{
    use ConsumesExternalServices;

    public function testConsumesExternalServices()
    {
        $response = $this->makeRequest('GET', 'example.com');

        $this->assertStringContainsString('Example', $response);
    }
}
