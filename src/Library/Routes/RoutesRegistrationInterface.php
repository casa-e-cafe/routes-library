<?php
/**
 * Created by Rafael Girolineto
 * User: Rafael
 * Date: 02/11/17
 */

namespace CasaCafe\Library\Routes;

use Silex\Application;

interface RoutesRegistrationInterface
{
    public static function registerRoutes(Application $silexApp);
}
