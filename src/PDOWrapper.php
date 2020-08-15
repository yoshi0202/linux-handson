<?php
  class PDOWrapper {
    private $pdo;
    function __construct($DBSettingConstructor) {
      $db_host = $DBSettingConstructor->getDbHost();
      $db_name = $DBSettingConstructor->getDbName();
      $db_user = $DBSettingConstructor->getDbUser();
      $db_password = $DBSettingConstructor->getDbPassword();
      try {
        $this->pdo = new PDO('mysql:host=' . $db_host . ';dbname=' . $db_name .';', $db_user, $db_password);
      } catch (Exception $th) {
        exit($th->getMessage());
      }
    }

    function execSql($sql) {
      $stmt = $this->pdo->query($sql);
      return $stmt->fetchAll();
    }
  }
?>