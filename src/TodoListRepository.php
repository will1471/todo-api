<?php

namespace TodoApi;

class TodoListRepository
{

    /**
     * @return TodoList[]
     */
    public function fetchAll()
    {
        return [
            new TodoList(1, 'Some List')
        ];
    }
}
