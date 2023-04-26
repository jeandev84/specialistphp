<?php
namespace App\Entity;

use DOMDocument;
use Framework\Database\ORM\Model;


class News extends Model implements NewsInterface
{
    // RSS
    // RSS_LINK - это ссылка на ленту новостей
    const RSS_NAME  = 'rss.xml';
    const RSS_TITLE = "Новостная лента";
    const RSS_LINK  = 'http://localhost:8000/';



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
        $result = parent::save('msgs', [
           'title' => $title,
           'category' => $category,
           'description' => $description,
           'source' => $source,
           'datetime' => time()
        ]);

        if (! $result) {
            return false;
        }

        $this->createRss();
        return true;
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



    protected function createRss()
    {
        $dom = new DomDocument("1.0", "utf-8");
        $dom->formatOutput = true;
        $dom->preserveWhiteSpace = false;
        $rss =  $dom->createElement("rss");
        $version = $dom->createAttribute("version");
        $version->value = '2.0';
        $rss->appendChild($version);
        $dom->appendChild($rss);


        $channel = $dom->createElement("channel");


        $title = $dom->createElement("title", self::RSS_TITLE);
        $link  = $dom->createElement("link", self::RSS_LINK);
        $channel->appendChild($title);
        $channel->appendChild($link);
        $rss->appendChild($channel);

        if(! $lenta = $this->getNews()) {
             return false;
        }

        foreach ($lenta as $news) {

            // INITIALIZE ELEMENTS
            $item         = $dom->createElement("item");
            $title        = $dom->createElement("title", $news["title"]);
            $category     = $dom->createElement("category", $news["category"]);

            // [!CDATA ]
            $description  = $dom->createElement("description");
            $cdata        = $dom->createCDATASection($news['description']);
            $description->appendChild($cdata);


            // URL
            $linkText     = self::RSS_LINK. '?id='. $news["id"];
            $link         = $dom->createElement("link", $linkText);

            // DATE
            $dt           = date('r', $news["datetime"]);
            $pubDate      = $dom->createElement("pubDate", $dt);


            // APPEND ELEMENTS OF ITEM
            $item->appendChild($title);
            $item->appendChild($link);
            $item->appendChild($description);
            $item->appendChild($pubDate);
            $item->appendChild($category);
            $channel->appendChild($item);
        }

        $dom->save(self::RSS_NAME);

    }
}

