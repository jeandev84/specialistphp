<?php
namespace App\Entity;

use Framework\Database\ORM\Model;


class News extends Model implements NewsInterface
{
    public function __construct(string $database = null)
    {
        parent::__construct($database);
    }


    /**
     * @param $title
     * @param $category
     * @param $description
     * @param $source
     * @return bool
    */
    function saveNews($title, $category, $description, $source): bool
    {
        return parent::insert('msgs', [
           'title' => $title,
           'category' => $category,
           'description' => $description,
           'source' => $source,
           'datetime' => time()
        ]);
    }


    /**
     * @return array
    */
    function getNews()
    {
        return $this->select('msgs, category', [
            'msgs.id as id',
            'title',
            'category.name as category',
            'description',
            'source',
            'datetime'
        ], ['category.id' => 'msgs.category'], ['msgs.id' => 'DESC']);
    }


    /**
     * @param $id
     * @return bool
    */
    function deleteNews($id): bool
    {
         return $this->delete('msgs', $id);
    }



    public function schemas()
    {
        return [
            "CREATE TABLE msgs(
               id INTEGER PRIMARY KEY AUTOINCREMENT,
               title TEXT,
               category INTEGER,
               description TEXT,
               source TEXT,
               datetime INTEGER
            )",
            "CREATE TABLE category(id INTEGER, name TEXT)",
            "INSERT INTO category(id, name)
             SELECT 1 as id, 'Политика' as name
             UNION SELECT 2 as id, 'Культура' as name
             UNION SELECT 3 as id, 'Спорт' as name"
        ];
    }
}

