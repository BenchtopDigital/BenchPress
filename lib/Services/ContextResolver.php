<?php

namespace Benchpress\Services;

use Benchpress\Providers\ContextProviders\EventContextProvider;
use Benchpress\Providers\ContextProviders\EventsContextProvider;
use Benchpress\Providers\ContextProviders\IContextProvider;
use Benchpress\Providers\ContextProviders\PerformerContextProvider;
use Benchpress\Providers\ContextProviders\PerformersContextProvider;

class ContextResolver {

    public static function ResolveForPost(\WP_Post $post): IContextProvider | null {
        return match ($post->post_type) {
            'performer' => new PerformerContextProvider($post),
            'event' => new EventContextProvider($post),
            default => null,
        };
    }

    public static function ResolveForArchive($archiveName): IContextProvider | null {
        return match ($archiveName) {
            'performers' => new PerformersContextProvider(),
            'events' => new EventsContextProvider(),
            default => null,
        };
    }

    public static function ResolveForPage(\WP_Post $page): IContextProvider | null {
        return self::ResolveForPost($page);
    }

}