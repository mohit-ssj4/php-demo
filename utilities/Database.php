<?php

class Database
{
  public $connection;

  public $statement;

  /**
   * Database constructor
   */
  public function __construct($configs, $userName = "root", $password = "")
  {
    // Connect to MySQL database
    $dsn = "mysql:" . http_build_query($configs, "", ";");
    $this->connection = new PDO($dsn, $userName, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
  }

  /**
   * Method to query the database.
   * 
   * @param string $query
   * @param array $params
   */
  public function query($query, $params = [])
  {
    // Prepare & execute the query
    $this->statement = $this->connection->prepare($query);
    $this->statement->execute($params);

    return $this;
  }

  /**
   * Method to find and return a single result from the database.
   */
  public function find()
  {
    return $this->statement->fetch();
  }

  /**
   * Method to find and return a single result from the database or fail.
   */
  public function findOrFail()
  {
    $result = $this->find();

    if (!$result) {
      showErrorPage();
    }

    return $result;
  }

  /**
   * Method to fetch all the result from the database.
   */
  public function fetchAll()
  {
    return $this->statement->fetchAll();
  }
}
