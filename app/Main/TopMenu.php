<?php

namespace App\Main;

class TopMenu
{
    /**
     * List of side menu items.
     */
    public static function menu(): array
    {
        $menu = [
            'dashboard' => [
                'icon' => 'home',
                'route_name' => 'dashboard',
                'title' => 'Dashboard',
            ],
        ];

        if (auth()->guard('admin')->check()) {
            $menu = [
                'halaman-utama' => [
                    'icon' => 'home',
                    'route_name' => 'dashboard-overview-2',
                    'title' => 'Ini Halaman Utama ADM',
                ],
                'halaman-kedua' => [
                    'icon' => 'home',
                    'route_name' => 'calendar',
                    'title' => 'bugggg',
                ],
            ];
        }

        if (auth()->guard('mahasiswa')->check()) {
            $menu = [
                'halaman-utama' => [
                    'icon' => 'home',
                    'route_name' => 'dashboard',
                    'title' => 'Ini Halaman Utama MHSW',
                ],
            ];
        }

        return $menu;
    }
}
