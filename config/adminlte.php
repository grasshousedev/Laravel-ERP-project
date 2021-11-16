<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => 'Dashboard 3D Printer',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => false,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => '<b>3D</b>Printer',
    'logo_img' => 'vendor/adminlte/dist/img/SENATI-logo.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => '3D Printers',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-info',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => true,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => true,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => true,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'bg-gradient-dark card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => 'bg-gradient-dark',
    'classes_auth_footer' => 'text-center',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-dark',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-dark',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 200,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-dark',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => 'admin',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        // Navbar items:
        [
            'type'         => 'navbar-search',
            'text'         => 'search',
            'topnav_right' => false,
        ],

        // [
        //     'type'         => 'fullscreen-widget',
        //     'topnav_right' => true,
        // ],

        // // Sidebar items:
        // [
        //     'type' => 'sidebar-menu-search',
        //     'text' => 'search',
        // ],
        [
            'type'         => 'darkmode-widget',
            'topnav_right' => true, // Or "topnav => true" to place on the left.
        ],
        
        [
            'text'  => 'Dashboard',
            'url'   => 'admin',
            'icon'  => 'fas fa-fw fa-home',
            'can'   => 'Ver dashboard'
        ],
        // [
        //     'text'        => 'Usuarios',
        //     'route'       => 'admin.users.index',
        //     'icon'        => 'fas fa-users fa-fw',
        //     'can'         => 'Ver listado de usuarios'
        //     // 'label'       => 4,
        //     // 'label_color' => 'success',
        // ],
        // [
        //     'text'        => 'Roles',
        //     'route'       => 'admin.roles.index',
        //     'icon'        => 'far fa-address-card',
        //     'can'         => 'Ver listado de roles'
        // ],

        // [
        //     'text'        => 'Proveedores',
        //     'route'       => 'admin.proveedores.index',
        //     'icon'        => 'fas fa-boxes',
        //     'can'         => 'Ver listado de roles'
        // ],
        [
            'text'        => 'Productos / Servicios',
            'route'       => 'admin.productos.index',
            'icon'        => 'fas fa-box-open',
            'can'         => 'Ver listado de productos'
        ],

        [
            'text' => 'Proveedores',
            'route' => 'admin.proveedores.index'
        ],

        [
            'text'  => 'Clientes',
            'route' => 'admin.clientes.index'
        ],

        [
            'text'    => 'Venta',
            
            'icon'        => 'fas fa-concierge-bell',
            'submenu' => [
                [
                    'text'  => 'Clientes',
                    'route' => 'admin.clientes.index'
                ],
                // [
                //     'text'    => 'level_one',
                //     'url'     => '#',
                //     'submenu' => [
                //         [
                //             'text' => 'level_two',
                //             'url'  => '#',
                //         ],
                //         [
                //             'text'    => 'level_two',
                //             'url'     => '#',
                //             'submenu' => [
                //                 [
                //                     'text' => 'level_three',
                //                     'url'  => '#',
                //                 ],
                //                 [
                //                     'text' => 'level_three',
                //                     'url'  => '#',
                //                 ],
                //             ],
                //         ],
                //     ],
                // ],
                [
                    'text' => 'Proveedores',
                    'route' => 'admin.proveedores.index'
                ],

                [
                    'text' => 'O.C. Clientes',
                    'route' => 'admin.occClientes.index'
                ],
            ],
        ],
        [
            'text'        => 'Operaciones',
            'icon'        => 'fas fa-cogs',
            'submenu' => [
                        [
                            'text'  => 'Evaluaciones',
                            'route'   => 'admin.evaluaciones.index',
                        ],
                        [
                            'text'  => 'Ordenes de Trabajo',
                            'route' => 'admin.ordenestrabajo.index'
                        ],
                        // [
                        //     'text'    => 'level_one',
                        //     'url'     => '#',
                        //     'submenu' => [
                        //         [
                        //             'text' => 'level_two',
                        //             'url'  => '#',
                        //         ],
                        //         [
                        //             'text'    => 'level_two',
                        //             'url'     => '#',
                        //             'submenu' => [
                        //                 [
                        //                     'text' => 'level_three',
                        //                     'url'  => '#',
                        //                 ],
                        //                 [
                        //                     'text' => 'level_three',
                        //                     'url'  => '#',
                        //                 ],
                        //             ],
                        //         ],
                        //     ],
                        // ],
                    ],
        ],
        [
            'text'        => 'Logística',
            'icon'        => 'fas fa-clipboard-check',
            'submenu' => [
                        [
                            'text'  => 'Ordenes de Pedido',
                            'route'   => 'admin.logistica.index',
                        ],
                        [
                            'text'  => 'Compras',
                            'route'   => 'admin.listaproductos.index',
                        ],
                    ],
        ],

        [
            'text'        => 'Almacen',
            'route'       => 'admin.almacen.index',
            'icon'        => 'fas fa-boxes',
            'can'         => 'Ver listado de roles'
        ],

        [
            'text'        => 'Admin',
            'icon'        => 'fas fa-users-cog',
            'label'       => "CRUD'S",
            'label_color' => 'success',
            'submenu' => [
                        [
                            'text'  => 'CRUD ROLES',
                            'route'   => 'admin.roles.index',
                        ],
                        [
                            'text'  => 'CRUD USUARIOS',
                            'route'   => 'admin.users.index',
                        ],
                        [
                            'text'  => 'CRUD PROVEEDORES',
                            'route'   => 'admin.proveedores.index',
                        ],
                        [
                            'text'  => 'CRUD PS',
                            'route'   => 'admin.productos.index',
                        ],
                        [
                            'text'  => 'CRUD CLIENTES',
                            'route'   => 'admin.clientes.index',
                        ],
                        [
                            'text'  => 'CRUD ESTADO',
                            'route'   => 'admin.estadoentrega.index',
                        ],
                        [
                            'text'  => 'CRUD FORMA DE PAGO',
                            'route'   => 'admin.formapago.index',
                        ],
                        [
                            'text'  => 'CRUD MONEDA',
                            'route'   => 'admin.tipomoneda.index',
                        ],
                        [
                            'text'  => 'CRUD TIEMPO ENTREGA',
                            'route'   => 'admin.tiempoentrega.index',
                        ],
                        [
                            'text'  => 'CRUD VALIDEZ OFERTA',
                            'route'   => 'admin.tiempoexpiracion.index',
                        ],
                        [
                            'text'  => 'CRUD CONDICIONES GENERALES',
                            'route'   => 'admin.condiciones.index',
                        ],
                        [
                            'text'  => 'CRUD PIE DE PAGINA',
                            'route'   => 'admin.piedepagina.index',
                        ],
                        [
                            'text'  => 'CRUD IGV',
                            'route'   => 'admin.logistica.index',
                        ],
                        [
                            'text'  => 'CRUD ESTADO (cliente/proveedor)',
                            'route'   => 'admin.estadocliente.index',
                        ],
                        [
                            'text'  => 'CRUD AREA DE CONTACTO',
                            'route'   => 'admin.areacontacto.index',
                        ],
                        // [
                        //     'text'    => 'level_one',
                        //     'url'     => '#',
                        //     'submenu' => [
                        //         [
                        //             'text' => 'level_two',
                        //             'url'  => '#',
                        //         ],
                        //         [
                        //             'text'    => 'level_two',
                        //             'url'     => '#',
                        //             'submenu' => [
                        //                 [
                        //                     'text' => 'level_three',
                        //                     'url'  => '#',
                        //                 ],
                        //                 [
                        //                     'text' => 'level_three',
                        //                     'url'  => '#',
                        //                 ],
                        //             ],
                        //         ],
                        //     ],
                        // ],
                    ],
        ],

        ['header' => 'Configuración de Cuenta'],
        [
            'text' => 'profile',
            'url'  => 'user/profile',
            'icon' => 'fas fa-fw fa-user',
        ],

        
        
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | IFrame
    |--------------------------------------------------------------------------
    |
    | Here we change the IFrame mode configuration. Note these changes will
    | only apply to the view that extends and enable the IFrame mode.
    |
    | For detailed instructions you can look the iframe mode section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/IFrame-Mode-Configuration
    |
    */

    'iframe' => [
        'default_tab' => [
            'url' => null,
            'title' => null,
        ],
        'buttons' => [
            'close' => true,
            'close_all' => true,
            'close_all_other' => true,
            'scroll_left' => true,
            'scroll_right' => true,
            'fullscreen' => false,
        ],
        'options' => [
            'loading_screen' => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items' => true,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'livewire' => false,
];
