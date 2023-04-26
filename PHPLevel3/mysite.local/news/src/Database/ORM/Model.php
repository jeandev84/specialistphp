<?php

namespace Framework\Database\ORM;

use Exception;
use SQLite3;


/*
L1               3
L2               14
RAM              40 000
DISC             25 000 000
NETWORK          240 000 000
*/
abstract class Model
{

    const ERR_PROPERTY = "Wrong property name.";
    protected SQLite3 $_db;
    protected $database = 'data.db';


    public function __construct(string $database = null)
    {
        if ($database) {
            $this->database = $database;
        }

        $this->_db = new SQLite3($this->database);

        $this->migrate($this->schemas());
    }



    /**
     * @param array $schemas
     * @return void
    */
    public function migrate(array $schemas)
    {
        try {

            if (! filesize($this->database)) {
                foreach ($schemas as $schema) {
                    if (! $this->exec($schema)) {
                         throw new Exception("Could not create table : $schema");
                    }
                }
            }

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }



    /**
     * @param string $sql
     * @return bool
    */
    public function exec(string $sql): bool
    {
        return $this->_db->exec($sql);
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


    /**
     * @param string $table
     * @param array $data
     * @return bool
     */
    function insert(string $table, array $data)
    {
        $columns = array_keys($data);
        $values  = array_values($data);
        $sql = sprintf('INSERT INTO %s (%s) VALUES(%s)',
    $table,
            implode(', ', $columns),
            "'". implode("', '", $values). "'"
        );
        return $this->exec($sql);
    }


    /**
     * @param string $table
     * @param array $columns
     * @param array $where
     * @param array $orderBy
     * @return array
    */
    function select(string $table, array $columns, array $where = [], array $orderBy = []): array
    {
        $sql[] = sprintf('SELECT %s FROM %s',
          join(', ', array_values($columns)),
          $table
        );

        if ($where) {
            $sql[] = $this->whereSQL($where);
        }

        if ($orderBy) {
            $sql[] = $this->orderBySQL($orderBy);
        }

        $items = $this->_db->query(join(' ', $sql));

        /*
        if(! $data = $result->fetchArray(SQLITE3_ASSOC)) {
             return [];
        }

        return $data;
        */

        if (! $items) {
             return [];
        }

        return $this->fetchToArray($items);
    }


    /**
     * @param $table
     * @param $id
     * @return bool
    */
    function delete($table, $id): bool
    {
        return $this->_db->exec("DELETE FROM $table WHERE id = '$id'");
    }




    public function escape($data)
    {
        return $this->_db->escapeString(trim(strip_tags($data)));
    }



    /**
     * @param array $wheres
     * @param string $joinClosure
     * @return string
    */
    public function whereSQL(array $wheres, string $joinClosure = "AND"): string
    {
         $conditions = [];

         foreach ($wheres as $key => $value) {
             $conditions[] = "$key = $value";
         }

         return sprintf("WHERE %s", join($joinClosure, $conditions));
    }



    public function orderBySQL(array $orderBy)
    {
        $sortings = [];

        foreach ($orderBy as $field => $direction) {
            $sortings[] = "$field $direction";
        }

        return sprintf("ORDER BY %s", join(',', $sortings));
    }




    protected function fetchToArray($data)
    {
         $arr = [];

         while ($row = $data->fetchArray(SQLITE3_ASSOC)) {
             $arr[] = $row;
         }

         return $arr;
    }


    /**
     * @return array
    */
    abstract public function schemas();
}