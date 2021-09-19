<?php

require_once "database-config.php";

class Releases
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
    }

    public function __destruct()
    {
        $this->_connection = null;
    }

    public function createTable($name = 'albums')
    {
         $this->_tableName = $name;

         $sql = <<<EOSQL
            CREATE TABLE IF NOT EXISTS $this->_tableName (
            albumID           INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
            catalogueID       TEXT UNIQUE DEFAULT NULL,
            albumName         NVARCHAR (255) DEFAULT NULL,
            albumImg          TEXT DEFAULT NULL,
            albumCover        TEXT DEFAULT NULL,
            albumAutor        TEXT DEFAULT NULL,
            albumTracks       TEXT DEFAULT NULL,
            albumDescription  TEXT DEFAULT NULL
        );
        EOSQL; 

        $this->_connection->exec($sql);
        //echo "Table Created";
     }


    public function insertAlbum($albumName, $albumImg, $albumCover, $albumAutor, $albumTracks, $albumDescription)
    {
        $product = array(
            ':albumName' => $albumName,
            ':albumImg' => $albumImg,
            ':albumCover' => $albumCover,
            ':albumAutor' => $albumAutor,
            ':albumTracks' => $albumTracks,
            ':albumDescription' => $albumDescription
        );

        $sql = <<<EOSQL
            INSERT INTO $this->_tableName(albumName, albumImg, albumCover, albumAutor, albumTracks, albumDescription) VALUES(:albumName, :albumImg, :albumCover, :albumAutor, :albumTracks, :albumDescription);
            UPDATE $this->_tableName
            SET catalogueID = CONCAT("SPCBR", LPAD(LAST_INSERT_ID(), 3, 0))
            WHERE albumID = LAST_INSERT_ID();
        EOSQL;

        $stmt = $this->_connection->prepare($sql);

        try
        {
            $stmt->execute($product);
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }
    }

    public function updateAlbum($albumID, $albumName, $albumImg, $albumCover, $albumAutor, $albumTracks, $albumDescription)
    {
        $product = array(
            ':albumID' => $albumID,
            ':albumName' => $albumName,
            ':albumImg' => $albumImg,
            ':albumCover' => $albumCover,
            ':albumAutor' => $albumAutor,
            ':albumTracks' => $albumTracks,
            ':albumDescription' => $albumDescription
        );

        $sql = <<<EOSQL
            UPDATE $this->_tableName
            SET albumName = :albumName, albumImg = :albumImg, albumCover = :albumCover, albumAutor = :albumAutor, albumTracks = :albumTracks, albumDescription = :albumDescription
            WHERE albumID = :albumID;
        EOSQL;

        $stmt = $this->_connection->prepare($sql);

        try
        {
            $stmt->execute($product);
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }
    }

    public function deleteAlbum($albumID)
    {
        $sql = <<<EOSQL
            DELETE FROM $this->_tableName WHERE albumID = $albumID;
        EOSQL;

        $this->_connection->exec($sql);
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

$_releases = new Releases();
