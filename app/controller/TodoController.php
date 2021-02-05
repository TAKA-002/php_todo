<?php

class TodoController
{
  public function index()
  {
    //staticにしてあるからインスタンス化しないでアクセス可能
    $todo_list = Todo::findAll();
    return $todo_list;
  }
}
