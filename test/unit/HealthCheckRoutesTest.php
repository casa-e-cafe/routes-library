<?php
/**
 * Created by Rafael Girolineto
 * User: Rafael
 * Date: 01/03/18
 */

namespace CasaCafe\Tests\Routes\HealthCheck;

use CasaCafe\Library\Routes\HealthCheck\HealthCheckRoutes;
use PHPUnit\Framework\TestCase;
use Silex\Application;
use Symfony\Component\HttpFoundation\Response;

class HealthCheckRoutesTest extends TestCase
{
    public function testHealthCheck()
    {
        /** @var Application | \PHPUnit_Framework_MockObject_MockObject $silex */
        $silex = $this->createMock(Application::class);
        $silex->expects($this->once())
            ->method('get')
            ->with(
                '/healthcheck',
                function () {
                    $responseBody = json_encode(['message' => "[health check] Service working"]);
                    return new Response($responseBody, 200);
                }
            );

        HealthCheckRoutes::registerRoutes($silex);
    }
}
