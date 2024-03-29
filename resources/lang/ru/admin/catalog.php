<?php
return [
    'category' => [
        'index' => [
            'title' => 'Категории каталога',
            'description' => 'Описание главной страницы раздела "Категории каталога"',
            'table' => [
                'id' => 'Ид',
                'name' => 'Название',
                'code' => 'Код',
                'actions' => 'Действия',
                'button' => [
                    'create' => 'Создать категорию'
                ]
            ]
        ],
        'create' => [
            'title' => 'Создание категории',
        ],
        'edit' => [
            'title' => 'Редактирование категории',
        ],
    ],
    'brand' => [
        'index' => [
            'title' => 'Бренды каталога',
            'description' => 'Описание главной страницы раздела "Бренды каталога"',
            'table' => [
                'id' => 'Ид',
                'name' => 'Название',
                'code' => 'Код',
                'actions' => 'Действия',
                'button' => [
                    'create' => 'Создать бренд'
                ]
            ]
        ],
        'create' => [
            'title' => 'Создание бренда',
        ],
        'edit' => [
            'title' => 'Редактирование бренда',
        ],
    ],
    'product' => [
        'index' => [
            'title' => 'Товары каталога',
            'description' => 'Описание главной страницы раздела "Товары каталога"',
            'table' => [
                'id' => 'Ид',
                'name' => 'Название',
                'code' => 'Код',
                'category' => 'Категория',
                'actions' => 'Действия',
                'button' => [
                    'create' => 'Создать товар'
                ]
            ]
        ],
        'create' => [
            'title' => 'Создание товара',
        ],
        'edit' => [
            'title' => 'Редактирование товара',
        ],
    ],
    'sku' => [
        'index' => [
            'title' => 'Торговые предложения',
            'titleExtended' => 'Торговые предложения товара',
            'description' => 'Описание главной страницы раздела "Торговые предложения"',
            'table' => [
                'id' => 'Ид',
                'name' => 'Название',
                'code' => 'Код',
                'price' => 'Цена',
                'count' => 'Количество',
                'actions' => 'Действия',
                'button' => [
                    'create' => 'Создать торговое предложение'
                ]
            ]
        ],
        'create' => [
            'title' => 'Создание торгового предложения товара',
        ],
        'edit' => [
            'title' => 'Редактирование торгового предложения товара',
        ],
        'show' => [
            'titlePart1' => 'Торговое предложение',
            'titlePart2' => 'товара',
        ],
    ],
    'property' => [
        'index' => [
            'title' => 'Свойства товаров',
            'description' => 'Описание главной страницы раздела "Свойства товаров"',
            'table' => [
                'id' => 'Ид',
                'name' => 'Название',
                'code' => 'Код',
                'actions' => 'Действия',
                'button' => [
                    'create' => 'Создать свойство'
                ]
            ]
        ],
        'create' => [
            'title' => 'Создание свойства',
        ],
        'edit' => [
            'title' => 'Редактирование свойства',
        ],
    ],
    'propertyOptions' => [
        'index' => [
            'title' => 'Варианты свойства',
            'description' => 'Описание главной страницы раздела "Варианты свойства"',
            'table' => [
                'id' => 'Ид',
                'name' => 'Название',
                'code' => 'Код',
                'actions' => 'Действия',
                'button' => [
                    'create' => 'Создать вариант свойства'
                ]
            ]
        ],
        'create' => [
            'title' => 'Создание варианта свойства',
        ],
        'edit' => [
            'title' => 'Редактирование варианта свойства',
        ],
    ],
    'search' => [
        'placeholder' => '',
        'button' => [
            'search' => 'Поиск'
        ],
    ]
];

