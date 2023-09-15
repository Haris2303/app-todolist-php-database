<?php

require_once __DIR__ . '/../Entity/Todolist.php';
require_once __DIR__ . '/../Helper/InputHelper.php';
require_once __DIR__ . '/../Repository/TodolistRepository.php';
require_once __DIR__ . '/../Service/TodolistService.php';
require_once __DIR__ . '/../View/TodolistView.php';

use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodolistView;

function testViewShowTodolist()
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist('Belajar PHP');
    $todolistService->addTodolist('Belajar PHP OOP');
    $todolistService->addTodolist('Membuat Aplikasi Todolist');

    $todolistView->showTodolist();
}

function testViewAddTodolist()
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist('Belajar PHP');
    $todolistService->addTodolist('Belajar PHP OOP');
    $todolistService->addTodolist('Membuat Aplikasi Todolist');

    $todolistView->addTodolist();

    $todolistView->showTodolist();
}

function testViewRemoveTodolist()
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist('Belajar PHP');
    $todolistService->addTodolist('Belajar PHP OOP');
    $todolistService->addTodolist('Membuat Aplikasi Todolist');

    $todolistView->removeTodolist(1);

    $todolistView->showTodolist();
}

testViewRemoveTodolist();
