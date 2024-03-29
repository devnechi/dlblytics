<?php

namespace App\Support;

use Illuminate\Container\Container;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

class CollectionHelper
{
    public static function paginate(Collection $collection, $pageSize)
    {
        $page = Paginator::resolveCurrentPage('page');

        $total = $collection->count();

        
        return self::paginator(
            $collection->forPage($page, $pageSize),
            $total,
            $pageSize,
            $page,
            [
                'path' => Paginator::resolveCurrentPath(),
                'pageName' => 'page',
            ]);
    }
    /**
     * Paginate the given query into a simple paginator.
     *
     * @param  \Illuminate\Support\Collection $items
     * @param  int  $total
     * @param  int  $perPage
     * @param  int  $currentPage
     * @param  array  $options
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
 protected static function paginator($items, $total, $perPage, $currentPage, $options)
    {
        return Container::getInstance()->makeWith(LengthAwarePaginator::class, compact(
            'items',
            'total',
            'perPage',
            'currentPage',
            'options'
        ));
    }
}
