<?php

namespace RestApi\Service;

use Symfony\Component\Routing\Router;
use RestApi\Entity\UriEntityInterface;

class UriEntityService {

    public static $router;

    public function __construct(Router $router)
    {
        self::$router = $router;
    }

    public function setEntityUri(UriEntityInterface &$uriEntity)
    {
        $uri = self::$router->generate($uriEntity->getUriRouteId(), $uriEntity->getUriRouteParameters());
        $uriEntity->setUri($uri);
    }

    public function &getRouter()
    {
        return self::$router;
    }
}
