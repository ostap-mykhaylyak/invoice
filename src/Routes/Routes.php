<?php
namespace Invoice\Config;

use CodeIgniter\Config\BaseService;
use CodeIgniter\Router\RouteCollectionInterface;

class Routes extends BaseService
{
    public static function routes(RouteCollectionInterface $routes)
    {
        $routes->group('api', function($routes) {
            $routes->resource('invoices', ['controller' => 'Invoice\Controllers\InvoicesController']);
        });
    }
}