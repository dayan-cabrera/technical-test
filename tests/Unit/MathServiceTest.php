<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use App\Service\MathService;


class MathServiceTest extends WebTestCase
{
    private MathService $mathService;

    protected function setUp(): void
    {
        $this->mathService = new MathService();
    }

    public function testAdd()
    {
        $result = $this->mathService->add(2.0, 3.0);
        $this->assertEquals(5.0, $result);
    }
}
