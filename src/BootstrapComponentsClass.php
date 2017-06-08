<?php

namespace Appstract\BootstrapComponents;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

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
        $items = $items instanceof Collection ? $items : Collection::make($items);

        $paginator = (new LengthAwarePaginator($items, $items->count(), (int) $perPage, (int) $page))
            ->withPath($path);

        return $paginator->render('bootstrap-components::render.pagination');
    }
}
