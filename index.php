<?php
require('admin/config.php');
$get = $db->query("SELECT * FROM `TMQ` WHERE `id` = '1'")->fetch();
$t2 = explode(PHP_EOL,$get['thu2']);
$t3 = explode(PHP_EOL,$get['thu3']);
$t4 = explode(PHP_EOL,$get['thu4']);
$t5 = explode(PHP_EOL,$get['thu5']);
$t6 = explode(PHP_EOL,$get['thu6']);
$t7 = explode(PHP_EOL,$get['thu7']);

?><!DOCTYPE html>
<html lang="en">
<head>
  <title>Thời khóa biểu 11a2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

 
    <?php
echo "<h3 style='text-align: center; color: red;'>";
echo "Chỉnh sửa lần cuối vào: ".$get['time'];
echo "</h3>";
?>

<div class="container">
  <h2 style="text-align: center;">Thời khóa biểu chính khóa</h2>
  <p style="text-align: center;">Make by: TMQ</p>            
  <table class="table table-bordered" style="text-align: center;">
    <thead>
      <tr>
        <th style="text-align: center;">Thứ 2</th>
        <th style="text-align: center;">Thứ 3</th>
        <th style="text-align: center;">Thứ 4</th>
        <th style="text-align: center;">Thứ 5</th>
        <th style="text-align: center;">Thứ 6</th>
        <th style="text-align: center;">Thứ 7</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        
        <td><?=$t2[0];?></td>
        <td><?=$t3[0];?></td>
        <td><?=$t4[0];?></td>
        <td><?=$t5[0];?></td>
        <td><?=$t6[0];?></td>
        <td><?=$t7[0];?></td>
        
      </tr>
      
     <tr>
         
        <td><?=$t2[1];?></td>
        <td><?=$t3[1];?></td>
        <td><?=$t4[1];?></td>
        <td><?=$t5[1];?></td>
        <td><?=$t6[1];?></td>
        <td><?=$t7[1];?></td>
        
      </tr>
      
      <tr>
          
        <td><?=$t2[2];?></td>
        <td><?=$t3[2];?></td>
        <td><?=$t4[2];?></td>
        <td><?=$t5[2];?></td>
        <td><?=$t6[2];?></td>
        <td><?=$t7[2];?></td>
        
      </tr>
      
      <tr>
          
        <td><?=$t2[3];?></td>
        <td><?=$t3[3];?></td>
        <td><?=$t4[3];?></td>
        <td><?=$t5[3];?></td>
        <td><?=$t6[3];?></td>
        <td><?=$t7[3];?></td>
        
      </tr>
      
      <tr>
        <td><?=$t2[4];?></td>
        <td><?=$t3[4];?></td>
        <td><?=$t4[4];?></td>
        <td><?=$t5[4];?></td>
        <td><?=$t6[4];?></td>
        <td><?=$t7[4];?></td>
      
      </tr>
    </tbody>
  </table>
</div>





<div class="container">
  <h2 style="text-align: center;">Thời khóa biểu chuyên đề</h2>
  <table class="table table-bordered" style="text-align: center;">
    <thead>
      <tr>
        <th style="text-align: center;">Thứ 2</th>
        <th style="text-align: center;">Thứ 3</th>
        <th style="text-align: center;">Thứ 4</th>
        <th style="text-align: center;">Thứ 5</th>
        <th style="text-align: center;">Thứ 6</th>
        <th style="text-align: center;">Thứ 7</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        
        <td><?=$t2[5];?></td>
        <td><?=$t3[5];?></td>
        <td><?=$t4[5];?></td>
        <td><?=$t5[5];?></td>
        <td><?=$t6[5];?></td>
        <td><?=$t7[5];?></td>
        
      </tr>
      
  
    </tbody>
  </table>
</div>

</body>
</html>
