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
          include 'demo.php';
          generateOptions(); // 正確調用 generateOptions 函數
        ?>
      </select>
    </form>

    <h2>9x9 乘法表</h2>
    
    <?php
    echo "<table border='1' style='border-collapse: collapse;'>";
    for ($i = 1; $i <= 9; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 9; $j++) {
            $result = $i * $j;
            echo "<td>$i x $j = $result</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
  </body>
</html>
