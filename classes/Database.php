<?php

/**
 *
 * Responsible for dealing with the database
 */
class Database {

  /**
   * Host name
   *
   * @var string
   */

  protected $dbHost;

  /**
   * Database name
   *
   * @var string
   */
  protected $dbName;

  /**
   * User name
   *
   * @var string
   */
  protected $userName;

  /**
   * Password
   *
   * @var string
   */
  protected $pass;

  /**
   * Constructor
   *
   * @param string $host hostname
   * @param string $dbName name of the database
   * @param string $username User
   * @param string $pass User's password
   */

  public function __construct(
    string $hostname,
    string $dbName,
    string $username,
    string $pass
  ) {
    $this->dbHost = $hostname;
    $this->dbName = $dbName;
    $this->userName = $username;
    $this->pass = $pass;
  }

  /**
   * Gets the database connection
   *
   * @return PDO object Connection to the database
   */

  public function getConection(): PDO {

    $dsn = 'mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName . ';charset=utf8;';
    try {
      $db = new PDO($dsn, $this->userName, $this->pass);
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $db;
    } catch (PDOException $e) {
      echo $e->getMessage();
      exit;
    }
  }

}