<?php

namespace Service {

    use Entity\Todolist;
    use Repository\TodolistRepository;

    interface TodolistService
    {

        function showTodolist(): void;

        function addTodolist(string $todo): void;

        function removeTodolist(int $number): void;
    }

    class TodolistServiceImpl implements TodolistService
    {

        private TodolistRepository $todolistRepository;

        public function __construct(TodolistRepository $todolistRepository)
        {
            $this->todolistRepository = $todolistRepository;
        }

        public function showTodolist(): void
        {
            echo "TODOLIST" . PHP_EOL;
            foreach ($this->todolistRepository->findAll() as $number => $item) {
                echo $item->getId() . ". " . $item->getTodo() . PHP_EOL;
            }
        }

        public function addTodolist(string $todo): void
        {
            $todolist = new Todolist($todo);
            $this->todolistRepository->save($todolist);
            echo "SUKSES MENAMBAHKAN TODOLIST" . PHP_EOL;
        }

        public function removeTodolist(int $number): void
        {
            if ($this->todolistRepository->remove($number)) {
                echo "SUKSES MENGHAPUS TODOLIST" . PHP_EOL;
            } else {
                echo "GAGAL MENGHAPUS TODOLIST" . PHP_EOL;
            }
        }
    }
}
