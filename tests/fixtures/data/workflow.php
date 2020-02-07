<?php

return [
    [
        'id' => 1,
        'name' => 'Общие задачи',
        'type' => null,
        'first_stage_name' => null,
        'last_stage_name' => null,
    ],
    [
        'id' => 2,
        'name' => 'Планы развития',
        'type' => 1,
        'first_stage_name' => null,
        'last_stage_name' => null,
    ],
    [
        'id' => 3,
        'name' => 'Листы оценки (заполняет дистрибьютор)',
        'type' => 3,
        'first_stage_name' => 'Проект',
        'last_stage_name' => 'Завершен',
    ],
    [
        'id' => 4,
        'name' => 'Листы оценки (заполняет дилер)',
        'type' => 3,
        'first_stage_name' => 1,
        'last_stage_name' => 1,
    ],
    [
        'id' => 5,
        'name' => 'тест 30.09.2019',
        'type' => null,
        'first_stage_name' => 1,
        'last_stage_name' => 2,
    ],
    [
        'id' => 6,
        'name' => 'тест-2 30.09.2019',
        'type' => 3,
        'first_stage_name' => 1,
        'last_stage_name' => 2,
    ],
];
