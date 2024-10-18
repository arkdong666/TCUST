<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TCUST_PJ01</title>
</head>

<body>
  <h1>選擇一個數字範圍(1 to 9)</h1>
  <form method="post" action="">
    <label for="number">選擇一個數字：</label>
    <select name="number" id="number">
      <?php
      include_once 'function.php'; // 使用 include_once 避免重複宣告
      generateOptions();
      ?>
    </select>
    <input type="submit" value="顯示乘法表" />
  </form>

  <h2>9x9 乘法表</h2>
  <?php
  if ($_SERVER["REQUEST_METHOD"]) {
    $selectedNumber = $_POST['number'];
    echo "<h2>{$selectedNumber}x{$selectedNumber} 乘法表</h2>";
    // 根據選擇的數字生成乘法表
    generateTable($selectedNumber);
  }
  ?>
</body>

</html>
