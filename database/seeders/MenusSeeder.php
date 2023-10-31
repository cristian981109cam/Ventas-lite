<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menus;

class MenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = [
            [
                'id_parent' => 0,
                'name' => 'Dashboard',
                'icon' => 'fas fa-house',
                'url' => 'dashboard',
                'status' => 1
            ],
            [
                'id_parent' => 0,
                'name' => 'App',
                'icon' => 'fa-solid fa-microchip',
                'url' => 'app',
                'status' => 1
            ],
            // [
            //     'id_parent' => 0,
            //     'name' => 'UI Kit',
            //     'icon' => 'fa-solid fa-cloud-bolt',
            //     'url' => 'uiKit',
            //     'status' => 1
            // ],
            // [
            //     'id_parent' => 0,
            //     'name' => 'Components',
            //     'icon' => 'fa-solid fa-cube',
            //     'url' => 'components',
            //     'status' => 1
            // ],
            // [
            //     'id_parent' => 0,
            //     'name' => 'Forms',
            //     'icon' => 'fa-solid fa-tablet',
            //     'url' => 'forms',
            //     'status' => 1
            // ],
            // [
            //     'id_parent' => 0,
            //     'name' => 'Tables',
            //     'icon' => 'fa-solid fa-table',
            //     'url' => 'tables',
            //     'status' => 1
            // ],
            // [
            //     'id_parent' => 0,
            //     'name' => 'Users',
            //     'icon' => 'fa-solid fa-users',
            //     'url' => 'users',
            //     'status' => 1
            // ],
            // [
            //     'id_parent' => 0,
            //     'name' => 'Pages',
            //     'icon' => 'fa-solid fa-file',
            //     'url' => 'pages',
            //     'status' => 1
            // ],
            // [
            //     'id_parent' => 0,
            //     'name' => 'More',
            //     'icon' => 'fa-solid fa-circle-plus',
            //     'url' => 'more',
            //     'status' => 1
            // ],
            [
                'id_parent' => 1,
                'name' => 'Analytics',
                'icon' => 'fa-solid fa-chart-pie',
                'url' => 'index.html',
                'status' => 1
            ],
            [
                'id_parent' => 1,
                'name' => 'Sales',
                'icon' => 'fa-solid fa-box-archive',
                'url' => 'index2.html',
                'status' => 1
            ],
            [
                'id_parent' => 2,
                'name' => 'Chat',
                'icon' => 'fa-regular fa-comment',
                'url' => 'apps_chat.html',
                'status' => 1
            ],
            [
                'id_parent' => 2,
                'name' => 'Todo List',
                'icon' => 'fa-regular fa-note-sticky',
                'url' => 'apps_todoList.html',
                'status' => 1
            ],
            [
                'id_parent' => 2,
                'name' => 'Notes',
                'icon' => 'fa-regular fa-newspaper',
                'url' => 'apps_notes.html',
                'status' => 1
            ],
            [
                'id_parent' => 2,
                'name' => 'Scrumboard',
                'icon' => 'fa-solid fa-file-circle-plus',
                'url' => 'apps_scrumboard.html',
                'status' => 1
            ],
            [
                'id_parent' => 2,
                'name' => 'Contacts',
                'icon' => 'fa-solid fa-location-dot',
                'url' => 'apps_contacts.html',
                'status' => 1
            ],
            [
                'id_parent' => 2,
                'name' => 'Invoice List',
                'icon' => 'fa-solid fa-sack-dollar',
                'url' => 'apps_invoice.html',
                'status' => 1
            ],
            [
                'id_parent' => 2,
                'name' => 'Calendar',
                'icon' => 'fa-regular fa-calendar',
                'url' => 'apps_calendar.html',
                'status' => 1
            ],


    ];

    foreach ($data as $val) {
        Menus::create($val);
    }

    }
}
