<?php
declare(strict_types=1);

namespace Template\HomeBundle;

use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

class TemplateHomeBundle extends AbstractBundle {
    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void {
        $container->import(__DIR__ . '/../config/services.yaml');
    }
}
