<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Controller\Api\Improve\Design\PositionsController' shared service.

$this->services['PrestaShopBundle\\Controller\\Api\\Improve\\Design\\PositionsController'] = $instance = new \PrestaShopBundle\Controller\Api\Improve\Design\PositionsController();

$instance->setLogger(${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});
$instance->setContainer($this);

return $instance;
