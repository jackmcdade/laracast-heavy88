<?php

return [

    /*
    |--------------------------------------------------------------------------
    | GraphQL
    |--------------------------------------------------------------------------
    |
    | Here you may enable the GraphQL API, and select which resources
    | are available to be queried, depending on your site's needs.
    |
    | https://statamic.dev/graphql
    |
    */

    'enabled' => true,

    'resources' => [
        'collections' => true,
        'navs' => false,
        'taxonomies' => true,
        'assets' => false,
        'globals' => false,
        'sites' => false,
        'users' => false,
    ],

    /*
    |--------------------------------------------------------------------------
    | Caching
    |--------------------------------------------------------------------------
    |
    | By default, Statamic will cache each request until the specified
    | expiry, or until content is changed. See the documentation for
    | more details on how to customize your cache implementation.
    |
    | https://statamic.dev/graphql#caching
    |
    */

    'cache' => false // Disable

    // 'cache' => [
    //     'expiry' => 60,
    // ],

];
