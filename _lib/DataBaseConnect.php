<?php
/**
 * Created by PhpStorm.
 * User: sisa-
 * Date: 22.04.2018
 * Time: 13:35
 */
abstract class DataBaseConnect {
    protected $_connection;
    private $_host = "mariadb";
    private $_username = "root";
    private $_password = "root";
    private $_database = "riddler";
    private $_sqll = "mysql";
    public function __construct() {
        try{
            $this ->_connection = new PDO("$this->_sqll:host=$this->_host;dbname=$this->_database",$this->_username,$this->_password);
            $this->_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $ex){
            echo "Problem with connect to DataBase.";
            echo $ex;
            exit;
        }

    }
}