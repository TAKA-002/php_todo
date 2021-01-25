<?php
// やりたいこと
// データベースからデータを取得する処理をここにかく
// todoクラスを作成し、findAllメソッドを使用してすべてのtodoを取得する

// ・データベースに接続。pdoオブジェクトをインスタンス化
// ・pdoオブジェクトのquery文でデータベースへsql文で出力してほしい情報をリクエスト：戻り地はPDOStatementオブジェクトで返される
// ・[PDOStatement]オブジェクトからfetchAllメソッドで連想配列の形式にしてmySqlからの情報を戻してもらう。

class Todo
{
  private $pdo;

  public function setPdo($dsn, $username, $password)
  {
    $this->pdo = new PDO($dsn, $username, $password);
    return $this->pdo;
  }

  public function findAll($pdo, $condition)
  {
    $stmh = $pdo->query($condition);
    $todo_list = $stmh->fetchAll(PDO::FETCH_ASSOC);
    return $todo_list;
  }
}

//検索条件文
$condition = 'SELECT * FROM firsttodo.todos WHERE user_id = 1';
// $condition = 'SELECT * FROM firsttodo.todos';

$todo = new Todo();
$pdo = $todo->setPdo(DSN, USERNAME, PASSWORD);
$todo_list = $todo->findAll($pdo, $condition);
