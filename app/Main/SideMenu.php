<?php

namespace App\Main;

class SideMenu
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
                'halaman-utama-admin' => [
                    'icon' => 'home',
                    'route_name' => 'akunmahasiswa.index',
                    'title' => 'Kelola Akun',
                ],
                'halaman-kedua-admin' => [
                    'icon' => 'home',
                    'route_name' => 'pendaftaranmahasiswa.index',
                    'title' => 'Kelola Pendaftaran',
                ],
            ];
        }

        if (auth()->guard('mahasiswa')->check()) {
            $menu = [
                'halaman-utama-mahasiswa' => [
                    'icon' => 'home',
                    'route_name' => 'halamanutama.index',
                    'title' => 'Halaman Utama',
                ],
                'halaman-daftar-mahasiswa' => [
                    'icon' => 'book-open-check',
                    'route_name' => 'halamandaftar.index',
                    'title' => 'Form Pendaftaran',
                ],
            ];
        }

        return $menu;
    }
}
