<?php

namespace Benchpress;

use Benchpress\Exceptions\ControllerNotFoundException;
use Benchpress\Helpers\StringHelpers;
use Benchpress\Models\Wordpress\ActionHooks;
use Benchpress\Models\WordpressQueryContext;
use Benchpress\Resolvers\IControllerResolver;

final class Benchpress {

	public function __construct(
        private readonly WordpressQueryContext $queryContext,
        private readonly IControllerResolver $controllerResolver,
    ) {

	}

    public function render(): void {
        $controller = $this->controllerResolver->resolveController($this->queryContext);

        if (!$controller) {
            throw new ControllerNotFoundException();
        }

        $controller->render();
    }

    public function registerPageTemplate(string $templateName) {
        $type = StringHelpers::Lowercase($postType);
        $name = StringHelpers::Capitalize($postType);
        $plural = empty($plural) ? ($name . 's') : $plural;

        register_post_type($plural, array(
              'labels' => array(
                  'name' => __($plural), 'singular_name' => __($name),
                  'add_new_item' => __('Add New ' . $name),
                  'edit_item' => __('Edit ' . $name),
                  'new_item' => __('New ' . $name),
                  'view_item' => __('View ' . $name),
                  'view_items' => __('View All ' . $plural),
              ), 'public' => true, 'has_archive' => true,
              'menu_icon' => "dashicons-location",
              'rewrite' => array('slug' => StringHelpers::Slugify($postType)),
          )
        );
    }

    public function registerPostType(string $postType, string $plural = '') {
        $type = StringHelpers::Lowercase($postType);
        $name = StringHelpers::Capitalize($postType);
        $plural = empty($plural) ? ($name . 's') : $plural;

        register_post_type($plural, array(
               'labels' => array(
                   'name' => __($plural), 'singular_name' => __($name),
                   'add_new_item' => __('Add New ' . $name),
                   'edit_item' => __('Edit ' . $name),
                   'new_item' => __('New ' . $name),
                   'view_item' => __('View ' . $name),
                   'view_items' => __('View All ' . $plural),
               ), 'public' => true, 'has_archive' => true,
               'menu_icon' => "dashicons-location",
               'rewrite' => array('slug' => StringHelpers::Slugify($postType)),
           )
        );
    }

}