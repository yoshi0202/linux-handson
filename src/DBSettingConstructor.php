<?php
  class DBSettingConstructor {
    private $DB_HOST;
    private $DB_NAME;
    private $DB_USER;
    private $DB_PASSWORD;

    function __construct() {
      $this->DB_HOST = "localhost";
      $this->DB_NAME = "handson";
      $this->DB_USER = "root";
      $this->DB_PASSWORD = "password";
    }

    function getDbHost() {
      return $this->DB_HOST;
    }

    function getDbName() {
      return $this->DB_NAME;
    }

    function getDbUser() {
      return $this->DB_USER;
    }

    function getDbPassword() {
      return $this->DB_PASSWORD;
    }
  }
?>