<?php
/**
 * Created by Rafael Girolineto
 * User: Rafael
 * Date: 01/03/18
 */

namespace CasaCafe\Library\Routes\HealthCheck;

use CasaCafe\Library\Routes\RoutesRegistrationInterface;
use Silex\Application;
use Symfony\Component\HttpFoundation\Response;

class HealthCheckRoutes implements RoutesRegistrationInterface
{
    public static function registerRoutes(Application $silexApp)
    {
        $silexApp->get(
            '/healthcheck',
            function () {
                $responseBody = json_encode(['message' => "[health check] Service working"]);
                return new Response($responseBody, 200);
            }
        );
    }
}
