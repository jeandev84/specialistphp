<?php

interface StreamReader
{
     /**
      * Implements internal abstract interface PHP for working with stream
      *
      * Open stream
      *
      * $fp = fopen('translit://text.txt', 'r');
      *
      * @param string $path
      * @param string $mode
      * @return bool
     */
     public function stream_open(string $path, string $mode): bool;


     /**
      * Implements internal abstract interface PHP for working with stream
      *
      * Read stream count
      *
      * $fp = fopen('translit://text.txt', 'r');
      * fread(($fp, 1024);
      *
      * @param int $count count of bytes
      * @return string
     */
     public function stream_read(int $count): string;




     /**
      * Implements internal abstract interface PHP for working with stream
      *
      * Read stream count
      *
      * $fp = fopen('translit://text.txt', 'r');
      *
      * while(! feof()) {} ==> stream_eof()
      *
      * fread(($fp, 1024);
      *
      * @return bool
     */
     public function stream_eof(): bool;



     /**
      * Implements internal abstract interface PHP for working with stream
      *
      * Read stream count
      *
      * $fp = fopen('translit://text.txt', 'r');
      *
      * while(! feof()) {} ==> stream_eof()
      *
      * fread(($fp, 1024);
      *
      * fclose($fp)
      *
      * @return bool
     */
     public function stream_close(): bool;
}



class StreamTranslit implements StreamReader
{

     private $read_path;
     private $fp;
     private const SCHEME = 'translit://';
     private const DICT =  [
         "а"=>"a","б"=>"b","в"=>"v","г"=>"g","д"=>"d",
         "е"=>"e", "ё"=>"jo","ж"=>"zh","з"=>"z","и"=>"i",
         "й"=>"j","к"=>"k","л"=>"l", "м"=>"m","н"=>"n",
         "о"=>"o","п"=>"p","р"=>"r","с"=>"s","т"=>"t",
         "у"=>"u","ф"=>"f","х"=>"h","ц"=>"c","ч"=>"ch",
         "ш"=>"sh","щ"=>"sch", "ь"=> '\'', "ы"=>"y",
         "ъ" => '\'', "э"=>"e","ю"=>"ju", "я"=>"ja"
     ];



     public function __construct()
     {

     }


     /**
      * @inheritDoc
     */
    public function stream_open(string $path, string $mode): bool
    {
        // TODO: Implement stream_open() method.
    }


    /**
     * @inheritDoc
     */
    public function stream_read(int $count): string
    {
        // TODO: Implement stream_read() method.
    }

    /**
     * @inheritDoc
     */
    public function stream_eof(): bool
    {
        // TODO: Implement stream_eof() method.
    }

    /**
     * @inheritDoc
     */
    public function stream_close(): bool
    {
        // TODO: Implement stream_close() method.
    }
}




$fp = fopen('translit://text.txt', 'r');
while(!feof());
fread($fp, 1024);
fclose($fp);
