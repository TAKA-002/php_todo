<?php
// やりたいこと
// データベースからデータを取得する処理をここにかく
// todoクラスを作成し、findAllメソッドを使用してすべてのtodoを取得する

// ・データベースに接続。pdoオブジェクトをインスタンス化
// ・pdoオブジェクトのquery文でデータベースへsql文で出力してほしい情報をリクエスト：戻り地はPDOStatementオブジェクトで返される
// ・[PDOStatement]オブジェクトからfetchAllメソッドで連想配列の形式にしてmySqlからの情報を戻してもらう。

require_once('../../config/database.php');

class Todo
{
  private $pdo;

  public function setPdo($dsn, $username, $password)
  {
    $this->pdo = new PDO($dsn, $username, $password);
    return $this->pdo;
  }

  //インスタンス化して固有の特徴のあるものとする必要がない処理なので、staticでOK
  public static function findAll()
  {
    //pdo
    $TODO = new Todo();
    $pdo = $TODO->setPdo(DSN, USERNAME, PASSWORD);

    //sql
    $condition = 'SELECT * FROM firsttodo.todos WHERE user_id = 1';

    $stmh = $pdo->query($condition);
    $todo_list = $stmh->fetchAll(PDO::FETCH_ASSOC);
    return $todo_list;
  }
}
