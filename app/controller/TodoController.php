<?php

class TodoController
{
  public function index()
  {
    //staticにしてあるからインスタンス化しないでアクセス可能
    $todo_list = Todo::findAll();
    return $todo_list;
  }

  //詳細の情報を取得する
  public function detail($todo_id)
  {
    //todoリストのフィールドを取得
    $detail = Todo::findById($todo_id);
    return $detail;
  }
}
