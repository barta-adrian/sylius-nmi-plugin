<?php

declare(strict_types=1);

namespace MCRO\SyliusNMIPlugin\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

final class MCROSyliusNMIExtension extends Extension
{
  /**
   * {@inheritdoc}
   */
  public function load(array $config, ContainerBuilder $container): void
  {
    $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));

    $loader->load('services.yml');
  }
}
