<?php

return [

    /*
     * Laravel-admin name.
     */
    'name'      => '西安全能手家政',

    /*
     * Logo in admin panel header.
     */
    'logo'      => 'Su',

    /*
     * Mini-logo in admin panel header.
     */
    'logo-mini' => 'Su',

    /*
     * Laravel-admin url prefix.
     */
    'prefix'    => 'admin',

    /*
     * Laravel-admin install directory.
     */
    'directory' => app_path('Admin'),

    /*
     * Laravel-admin html title.
     */
    'title'  => '西安全能手家政',

    /*
     * Laravel-admin auth setting.
     */
    'auth' => [
        'driver'   => 'session',
        'provider' => '',
        'model'    => Encore\Admin\Auth\Database\Administrator::class,
    ],

    /*
     * Laravel-admin upload setting.
     */
    'upload'  => [

        'disk' => 'public',

        'directory'  => [
            'image'  => 'image',
            'file'   => 'file',
        ],

        'host' => '',
    ],

    /*
     * Laravel-admin database setting.
     */
    'database' => [

        // Database connection for following tables.
        'connection'  => '',

        // User tables and model.
        'users_table' => 'admin_users',
        'users_model' => Encore\Admin\Auth\Database\Administrator::class,

        // Role table and model.
        'roles_table' => 'admin_roles',
        'roles_model' => Encore\Admin\Auth\Database\Role::class,

        // Permission table and model.
        'permissions_table' => 'admin_permissions',
        'permissions_model' => Encore\Admin\Auth\Database\Permission::class,

        // Menu table and model.
        'menu_table'  => 'admin_menu',
        'menu_model'  => Encore\Admin\Auth\Database\Menu::class,

        // Pivot table for table above.
        'operation_log_table'    => 'admin_operation_log',
        'user_permissions_table' => 'admin_user_permissions',
        'role_users_table'       => 'admin_role_users',
        'role_permissions_table' => 'admin_role_permissions',
        'role_menu_table'        => 'admin_role_menu',
    ],

    /*
     * By setting this option to open or close operation log in laravel-admin.
     */
    'operation_log'   => true,

    /*
    |---------------------------------------------------------|
    | SKINS         | skin-blue                               |
    |               | skin-black                              |
    |               | skin-purple                             |
    |               | skin-yellow                             |
    |               | skin-red                                |
    |               | skin-green                              |
    |---------------------------------------------------------|
     */
    'skin'    => 'skin-blue',

    /*
    |---------------------------------------------------------|
    |LAYOUT OPTIONS | fixed                                   |
    |               | layout-boxed                            |
    |               | layout-top-nav                          |
    |               | sidebar-collapse                        |
    |               | sidebar-mini                            |
    |---------------------------------------------------------|
     */
    'layout'  => ['sidebar-mini'],

    /*
     * Version displayed in footer.
     */
    'version'   => '1.0',
    //性格
    'nature'=>[
      0=>'内向腼腆',
      1=>'外向开朗',
    ],
    //做饭
    'make_food'=>[
      0=>'面食',
      1=>'米饭',
      2=>'其他',
    ],
    //工作时间
    'work_time'=>[
      0=>'全天',
      1=>'上午半天',
      2=>'下午半天',
    ],
    //居家情况
    'live'=>[
      0=>'居家',
      1=>'不居家',
    ],
    //休息日
    'free_time'=>[
      0=>'单休',
      1=>'双休',
      2=>'二者均可',
    ],
    //育婴内容
    'baby_content'=>[
      0=>'一般护理',
      1=>'读书游戏',
      2=>'接送',
      3=>'其他',
    ],
    //孩子年龄
    'baby_age'=>[
      0=>'1岁以下',
      1=>'2岁以下',
      2=>'3岁以下',
      3=>'幼儿园',
      4=>'小学',
    ],
    //老人陪护
    'older_can'=>[
      0=>'能自理',
      1=>'半自理',
      2=>'不能自理',
    ],
    //老人年龄
    'older_age'=>[
      0=>'60岁-70岁',
      1=>'70岁-80岁',
      2=>'80岁-90岁',
      3=>'90岁以上',
    ],
    //病人护理
    'patient_protect'=>[
      0=>'陪就医',
      1=>'住院陪护',
      2=>'居家陪护',
    ],
    //病人情况
    'patient_can'=>[
      0=>'能自理',
      1=>'半自理',
      2=>'不能自理',
    ],
    //客户来源
    'custom_from'=>[
      0=>'到店咨询',
      1=>'电话来访',
      2=>'网络查找',
      3=>'客户推荐',
      4=>'其他',
    ],
    //房屋类型
    'house_type'=>[
      0=>'平房',
      1=>'单元房',
      2=>'复试',
      3=>'别墅',
    ],
    //陪护内容
    'care_content'=>[
      0=>'一般护理',
      1=>'陪伴说话',
      2=>'按时喂药',
      3=>'医院陪护',
      4=>'其他',
    ],
    //一般家务
    'housework'=>[
      0=>'洗衣',
      1=>'擦玻璃 ',
      2=>'做饭',
      3=>'其他',
    ],
    //做饭时间
    'cooking_time'=>[
      0=>'早',
      1=>'中',
      2=>'晚',
      3=>'其他',
    ],
    //合作意向
    'keep_time'=>[
      0=>'一年',
      1=>'半年',
      2=>'一季',
      3=>'一个月',
      4=>'一次性',
      5=>'其他',
    ],
];
