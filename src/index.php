<html>
  <head>
    <title>ハンズオンサンプルプログラム</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  </head>
  <body>
    <?php
      require('DBSettingConstructor.php');
      require('PDOWrapper.php');
      require('CreateHtml.php');
      # wazato typo
      $db_settings = new DBSettingConstructor()
      $pdo_wrapper = new PDOWrapper($db_settings);
      $sql_result = $pdo_wrapper->execSql("SELECT * FROM memo;");
      $create_html = new CreateHtml();

      # htmlを作成
      print("<table class='table'><tbody>");
      print($create_html->thead());
      print($create_html->tbodyInner($sql_result));
      print("</tbody></table>");
      print($create_html->inputArea());
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>