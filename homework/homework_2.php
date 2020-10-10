<?php
$task_manager = [
    [
        'ID' => '1',
        'title' => 'Homework_1',
        'description' => 'Maths',
        'responsible' => 'Stan Marsh',
        'dedline' => 'Tuesday',
        'status' => 'Done',
        'subtask' => [
            'sub_ID' => '1.1',
            'sub_title' => 'Homework_1.1',
        ],
    ],
    [
        'ID' => '2',
        'title' => 'Homework_2',
        'description' => 'Chemistry',
        'responsible' => 'Kenny McCormick',
        'dedline' => 'Friday',
        'status' => 'postponed',
        'subtask' => [
            'sub_ID' => '2.1',
            'sub_title' => 'Homework_2.1',
        ],
    ],
    [
        'ID' => '3',
        'title' => 'Homework_3',
        'description' => 'Physics',
        'responsible' => 'Eric Cartman',
        'dedline' => 'Monday',
        'status' => 'Not done',
        'subtask' => [
            'sub_ID' => '3.1',
            'sub_title' => 'Homework_3.1',
        ],
    ],
];

var_dump($task_manager);

