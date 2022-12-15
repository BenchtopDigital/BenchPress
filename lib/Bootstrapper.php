<?php

namespace Benchpress;

use Benchpress\Config\SiteConfig;
use Benchpress\Models\WordpressQueryContext;
use DI\Container;
use DI\ContainerBuilder;
use Timber\Twig;
use Timber\Twig_Function;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use function DI\create;

class Bootstrapper {
    public function __construct(
        private readonly WordpressQueryContext $queryContext
    ) {}

    public function bootstrap(SiteConfig $config = null): Container {
        if (!$config) {
            $config = new SiteConfig();
        }

        $builder = new ContainerBuilder();
        $builder->useAutowiring(true);
        $builder->useAnnotations(true);
        $builder->ignorePhpDocErrors(true);

        if(!$config->isDebug) {
            $builder->enableCompilation($config->themeDir . '/tmp');
            $builder->writeProxiesToFile(true, $config->themeDir . '/tmp/proxies');
        }

        $container = $builder->build();
        $container->set('WordpressPageContext', $this->queryContext);
        $this->registerServices($container, $config);

        if (isset($this->serviceProvider)) {
            $this->serviceProvider->registerServices($container);
        }

        return $container;
    }

    private function registerServices(Container $container, SiteConfig $config): void {
        $container->set('ICacheService', create('RuntimeMemoryCacheService'));
        $this->registerTwig($container, $config);

        // code-deploy access key QaV9CnYV3b+jXgR8XUHxNWsIeO9SUN83SpVp5uJO
    }

    private function registerTwig(Container $container, SiteConfig $config): void {
        $timberTwig = new Twig();
        $loader = new FilesystemLoader($config->twigTemplateDirectory);
        $twig = new Environment($loader, [
            'auto_reloaded' => $config->isDebug, 'debug' => $config->isDebug,
            'cache' => $config->isDebug ? false : $config->twigCacheDirectory,
        ]);

        $twig = $timberTwig->add_timber_functions($twig);
        $twig = $timberTwig->add_timber_escapers($twig);
        $twig = $timberTwig->add_timber_filters($twig);

        $dump = function ($context) {
            $args = func_get_args();
            echo '<pre>';
            call_user_func_array('var_dump', $args);
            echo '</pre>';
        };

        if ($config->isDebug) {
            $twig->addFunction(
                new Twig_Function('dump', $dump, array('needs_context' => false))
            );
        }

        $container->set('Twig\Environment', $twig);
    }
}