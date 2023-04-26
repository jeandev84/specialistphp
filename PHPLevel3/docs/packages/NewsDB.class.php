<?php

require "INewsDB.class.php";

/*
L1               3
L2               14
RAM              40 000
DISC             25 000 000
NETWORK          240 000 000
*/
class NewsDB implements INewsDB
{

    const DB_NAME = __DIR__ . '/../news.db';
    const ERR_PROPERTY = "Wrong property name.";
    private $_db;


    public function __construct()
    {
        $this->_db = new SQLite3(self::DB_NAME);
    }



    public function __destruct()
    {
        unset($this->_db);
    }



    /**
     * @param $name
     * @return SQLite3
     * @throws Exception
    */
    public function __get($name)
    {
        if ($name == "db") {
             return $this->_db;
        }

        throw new Exception(self::ERR_PROPERTY);
    }



    /**
     * @param $name
     * @param $value
     * @return mixed
     * @throws Exception
    */
    public function __set($name, $value)
    {
        throw new Exception(self::ERR_PROPERTY);
    }




    function saveNews($title, $category, $description, $source)
    {

    }



    function getNews()
    {
        // TODO: Implement getNews() method.
    }



    function deleteNews($id)
    {
        // TODO: Implement deleteNews() method.
    }
}