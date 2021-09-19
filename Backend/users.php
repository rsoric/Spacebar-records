<?php

require_once "database-config.php";

class Users
{
    private $_connection;
    private $_tableName;

    public function __construct()
    {
        $connStr = sprintf("mysql:host=%s;dbname=%s", DBConfig::serverName, DBConfig::dbName);

        try
        {
            $this->_connection = new PDO($connStr, DBConfig::dbUsername, DBConfig::dbPassword);
            //echo "Connected!";
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }


        $this->createTable();

        if(count($this->getDBdata()->fetchAll(PDO::FETCH_COLUMN, 3)) == 0)
        {    
            $this->insertUser('admin@admin.com', 'admin123', 2);
        }


    }

    public function __destruct()
    {
        $this->_connection = null;
    }

    public function createTable($name = 'users')
    {
        $this->_tableName = $name;

        $sql = <<<EOSQL
            CREATE TABLE IF NOT EXISTS $this->_tableName (
            userId          INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
            userEmail       NVARCHAR (255) DEFAULT NULL,
            userPassword    NVARCHAR (255) DEFAULT NULL,
            userType        INT DEFAULT NULL
        );
        EOSQL;

        $this->_connection->exec($sql);
        //echo "Table created ! <br>";
    }


    public function insertUser($userEmail, $userPassword, $userType)
    {
        $user = array(
            ':userEmail' => $userEmail,
            ':userPassword' => md5($userPassword),
            ':userType' => $userType
        );

        $sql = <<<EOSQL
            INSERT INTO $this->_tableName(userEmail, userPassword, userType) VALUES(:userEmail, :userPassword, :userType);
        EOSQL;

        $stmt = $this->_connection->prepare($sql);

        try
        {
            $stmt->execute($user);
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }
    }

    public function getDBdata()
    {
        $sql = <<<EOSQL
            SELECT * FROM $this->_tableName;
        EOSQL;

        $stmt = $this->_connection->prepare($sql);

        try
        {
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $stmt;

        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }
    }
  }
  
  $_users = new Users();