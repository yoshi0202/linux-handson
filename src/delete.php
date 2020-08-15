<?php
  require('DBSettingConstructor.php');
  require('PDOWrapper.php');
  if(!$_POST['id']) {
    header('Location: http://localhost:8080');
    exit;
  }
  $db_settings = new DBSettingConstructor();
  $pdo_wrapper = new PDOWrapper($db_settings);
  $sql = "DELETE FROM memo WHERE id = " . (int)$_POST['id'];
  $sql_result = $pdo_wrapper->execSql($sql);
  header('Location: http://localhost:8080');
  exit;
?>