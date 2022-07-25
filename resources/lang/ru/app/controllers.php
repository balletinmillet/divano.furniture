<?php
return [
    'admin' => [
        'category' => [
            'successCreated' => 'Новая категория успешно создана',
            'successUpdated' => 'Категория была изменена',
            'successDeleted' => 'Категория успешно удалена',
            'errorDeletedBecauseChildren' => 'Нельзя удалить категорию с дочерними категориями',
            'errorDeletedBecauseProducts' => 'Нельзя удалить категорию, которая содержит товары',
        ],
        'brand' => [
            'successCreated' => 'Новый бренд успешно создан',
            'successUpdated' => 'Бренд был изменен',
            'successDeleted' => 'Бренд успешно удален',
            'errorDeletedBecauseProducts' => 'Нельзя удалить бренд, у которого есть товары',
        ],
        'product' => [
            'successCreated' => 'Новый товар успешно создан',
            'successUpdated' => 'Товар был изменен',
            'successDeleted' => 'Товар успешно удален',
        ]
    ]
];

