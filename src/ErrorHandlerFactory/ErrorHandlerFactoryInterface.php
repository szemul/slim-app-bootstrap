<?php

declare(strict_types=1);

namespace Szemul\SlimAppBootstrap\ErrorHandlerFactory;

use Psr\Container\ContainerInterface;
use Slim\App;
use Slim\Handlers\ErrorHandler as SlimErrorHandler;

interface ErrorHandlerFactoryInterface
{
    public function getErrorHandler(ContainerInterface $container, App $app): SlimErrorHandler;

}
