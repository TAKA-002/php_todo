<?php

//ここで必要なものはなにか。
//index.phpで表示されていたtodo_listの一つのtodoを対象に、
//データベースからdetailsカラムのデータを表示すること


require_once('../../model/Todo.php');
require_once('../../controller/TodoController.php');

//urlのクエリからidを取得する
if (isset($_GET['todo_id'])) {
  $todo_id = $_GET['todo_id'];
}

$todo = new Todo();
$process = new TodoController();
$detail = $process->detail($todo_id);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $todo_id; ?>の詳細</title>
</head>

<body>
  <div>
    <table>
      <thead>todoの詳細</thead>
      <tr>
        <th>詳細</th>
        <td>
          <?php echo $detail; ?>
        </td>
      </tr>
    </table>
  </div>

</body>

</html>
