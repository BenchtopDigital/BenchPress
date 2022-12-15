<?php

namespace Benchpress\Controllers;

use Benchpress\Enums\WordpressArchiveType;
use Benchpress\Enums\WordpressPageType;
use Benchpress\Models\WordpressQueryContext;
use Timber\Menu;
use Timber\Timber;
use Twig\Environment;

class Controller implements IController {

    private array $context;
    private string|false $template = false;

    public function __construct(
        protected readonly Environment $twig,
        protected readonly WordpressQueryContext $queryContext
    ) {
        $this->context = $this->getBaseContext();
    }

    public function render(): void {
        $template = $this->twig->load($this->getTemplateName());
        echo $this->twig->render($template, $this->context);
    }

    protected function isArchive(): bool {
        return $this->queryContext->archiveType != WordpressArchiveType::UNSET;
    }

    protected function addToContext(string $key, array|object $context): void {
        $this->context[$key] = (array)$context;
    }

    protected function setTemplate(string $templateName): void {
        $this->template = $templateName;
    }

    private function getTemplateName(): string {
        if ($this->template) {
            return $this->template;
        }

        if ($this->isArchive()) {
            return 'archive.twig';
        }

        if ($this->queryContext->pageType == WordpressPageType::POST) {
            return 'single.twig';
        }

        return 'index.twig';
    }

    private function getBaseContext(): array {
        return [
            'options' => [
                'logo' => get_field('logo', 'options')
            ],
            'menu' => new Menu('Main Menu'),
            'post' => Timber::get_post(),
            'posts' => Timber::get_posts()
        ];
    }
}