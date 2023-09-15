<?php

require_once __DIR__ . '/../Entity/Todolist.php';
require_once __DIR__ . '/../Repository/TodolistRepository.php';
require_once __DIR__ . '/../Service/TodolistService.php';

use Entity\Todolist;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;

function testShowTodolist()
{
    $todolistRepository = new TodolistRepositoryImpl();

    $todolistRepository->todolist[] = new Todolist("Belajar OOP");
    $todolistRepository->todolist[] = new Todolist("Membuat Aplikasi Todolist");
    $todolistRepository->todolist[] = new Todolist("Object Oriented Programming");

    $todolistService = new TodolistServiceImpl($todolistRepository);

    $todolistService->showTodolist();
}

function testAddTodolist()
{
    $todolistRepository = new TodolistRepositoryImpl();

    $todolistService = new TodolistServiceImpl($todolistRepository);

    $todolistService->addTodolist("Belajar OOP");
    $todolistService->addTodolist("Object Oriented Programming");
    $todolistService->addTodolist("Membuat Aplikasi Todolist OOP");

    $todolistService->showTodolist();
}

function testRemoveTodolist()
{
    $todolistRepository = new TodolistRepositoryImpl();

    $todolistService = new TodolistServiceImpl($todolistRepository);

    $todolistService->addTodolist("Belajar OOP");
    $todolistService->addTodolist("Object Oriented Programming");
    $todolistService->addTodolist("Membuat Aplikasi Todolist OOP");

    $todolistService->showTodolist();

    $todolistService->removeTodolist(1);
    $todolistService->showTodolist();

    $todolistService->removeTodolist(5);
    $todolistService->showTodolist();
}

testRemoveTodolist();
