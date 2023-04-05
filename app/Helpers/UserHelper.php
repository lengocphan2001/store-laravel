<?php

namespace App\Helpers;

use App\Services\User\CategoryService;

class UserHelper
{


    /**
     *  Get page title
     *
     * @param null $title
     * @return string|null
     */
    public static function getPageTitle($title = null): ?string
    {
        if (!$title) {
            return config('app.name');
        }//end if

        return $title . ' - ' . config('app.name');
    }

    /**
     * Get user sidebar
     *
     * @return array
     */
    public static function getUserMenu(): array
    {
        return [
            [
                'label' => trans('user.sidebar.home'),
                'route' => 'user.home',
            ],
            [
                'label' => trans('user.sidebar.product'),
                'route' => 'user.products.index',
            ],
            [
                'label' => trans('user.sidebar.category'),
                'items' => CategoryService::getInstance()->getListCategories()
            ],
            [
                'label' => trans('user.sidebar.contact'),
                'route' => 'user.contact',
            ],
            [
                'label' => trans('user.sidebar.about'),
                'route' => 'user.about',
            ],
        ];
    }
}
