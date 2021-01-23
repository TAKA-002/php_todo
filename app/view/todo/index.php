<?php

const DSN = 'mysql:host=73e21cc45265;dbname=firsttodo;charset=utf8';
//DSN：data source name(データベースに接続するために必要な情報)

const USERNAME = 'miura';
const PASSWORD = 'miura';

$pdo = new PDO(DSN, USERNAME, PASSWORD);
//PDO：PHP Database Object

$stmh = $pdo->query('SELECT * FROM firsttodo.todos');
//stmhはstatementの略
//すべてのカラムをfirsttodoデータベースのtodosテーブルから取得

$todo_list = $stmh->fetchAll(PDO::FETCH_ASSOC);
var_dump($todo_list);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TODOリスト</title>
</head>

<body>
  <div>
    <?php if ($todo_list) : ?>
      <ul>
        <?php foreach ($todo_list as $todo) : ?>
          <li>
            <a href="./detail.php?todo_id=<?php echo $todo['id']; ?>">
              <?php echo $todo['title']; ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php else : ?>
      <div>データなし</div>
    <?php endif; ?>
  </div>
</body>

</html>
