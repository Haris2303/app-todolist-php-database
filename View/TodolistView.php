<?php

namespace View {

    use Helper\InputHelper;
    use Service\TodolistService;

    class TodolistView
    {

        private TodolistService $todolistSerivce;

        public function __construct(TodolistService $todolistSerivce)
        {
            $this->todolistSerivce = $todolistSerivce;
        }

        public function showTodolist(): void
        {
            while (true) {
                $this->todolistSerivce->showTodoList();

                echo "==== MENU ====" . PHP_EOL;
                echo "1. Tambah Todo" . PHP_EOL;
                echo "2. Hapus Todo" . PHP_EOL;
                echo "x. keluar" . PHP_EOL;

                $pilihan = InputHelper::input("Pilih menu: ");

                switch ($pilihan) {
                    case '1':
                        $this->addTodolist();
                        break;
                    case '2':
                        $this->removeTodolist();
                        break;
                    case 'x':
                        echo "Bye." . PHP_EOL;
                        return;
                    default:
                        echo "Pilihan tidak diketahui! Masukkan [1, 2, x]." . PHP_EOL;
                        break;
                }
            }
        }

        public function addTodolist(): void
        {
            echo "MENAMBAHKAN TODOLIST" . PHP_EOL;

            $todo = InputHelper::input("Masukkan Todo (x untuk batal): ");

            if ($todo == 'x') {
                echo "Batal menambahkan todo" . PHP_EOL;
            } else {
                $this->todolistSerivce->addTodolist($todo);
            }
        }

        public function removeTodolist(): void
        {
            echo "MENGHAPUS TODO" . PHP_EOL;

            $pilihan = InputHelper::input("Masukkan Nomor Todo (x untuk batal): ");

            if ($pilihan == 'x') {
                echo "Batal menghapus todo" . PHP_EOL;
            } else {
                $this->todolistSerivce->removeTodolist($pilihan);
            }
        }
    }
}
