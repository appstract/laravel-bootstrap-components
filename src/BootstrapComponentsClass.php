<?php

namespace Appstract\BootstrapComponents;

use Illuminate\Pagination\LengthAwarePaginator;

class BootstrapComponentsClass
{

    public function __construct()
    {
        // constructor body
    }

    /*
     * Render pagination buttons
     *
     * @param     $items
     * @param int $page
     * @param int $perPage
     * @param     $url
     */
    public function pagination($items, $page = 1, $perPage = 25, $path = '')
    {
        $paginator = (new LengthAwarePaginator($items, count($items), $perPage, $page))
            ->withPath($path);

        return $paginator->render('bootstrap-components::render.pagination');
    }
}
