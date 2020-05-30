<?php

use App\Models\Link;

return [
    'title'       => '资源推荐',
    'single'      => '资源推荐',
    'model'       => Link::class,

    // 访问权限判断
    'permission'  => function ()
    {
        // 只有站长可以管理
        return Auth::user()->hasRole('Founder');
    },

    'columns'     => [
        'id '   => [
            'title' => 'ID',
        ],
        'title' => [
            // 表单标题
            'title' => '名称',
            'sortable' => false,
        ],
        'link'  => [
            'title' => '链接',
            'sortable' => false,
        ],
        'operation' => [
            'title' => '管理',
            'sortable' => false,
        ]
    ],
    // 站点配置表单
    'edit_fields' => [
        'title' => [
            // 表单标题
            'title' => '链接',
        ],

        'link' => [
            'title' => '链接推荐',
        ]
    ],
    'filters'     => [
        'id'          => [
            'title' => '标签 ID',
        ],
        'title'        => [
            'title' => '名称',
        ],
    ],
];
