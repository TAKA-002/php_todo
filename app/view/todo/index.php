<?php
require_once('../../model/Todo.php');
require_once('../../controller/TodoController.php');

$todo = new Todo();
$process = new TodoController();
$todo_list = $process->index();
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
