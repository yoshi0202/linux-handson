<?php
  require('DBSettingConstructor.php');
  require('PDOWrapper.php');
  if(!$_POST['record']) {
    header('Location: http://localhost:8080');
    exit;
  }
  $db_settings = new DBSettingConstructor();
  $pdo_wrapper = new PDOWrapper($db_settings);
  $sql = "INSERT INTO memo (content) VALUE('" . $_POST['record'] . "')";
  $sql_result = $pdo_wrapper->execSql($sql);
  header('Location: http://localhost:8080');
  exit;
?>