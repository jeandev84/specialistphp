<?php

// https://www.php.net/manual/en/class.streamwrapper.php
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

interface StreamSizeable {
    /**
     *  Позволяет использовать "filesize"
     *
     * @param string $path
     * @return array
    */
   public function url_stat(string $path): array;
}


interface StreamReadable
{
     public function stream_stat(): array;
}


class StreamTranslit implements StreamReader, StreamSizeable, StreamReadable
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



    /**
     * @param string $path
     * @return string
     */
     private function make_path(string $path)
     {
        return substr($path, strlen(self::SCHEME));
     }


     /**
      * @inheritDoc
     */
     public function stream_open(string $path, string $mode): bool
     {
         $this->read_path = $this->make_path($path);
         $this->fp = fopen($this->read_path, $mode);
         return true;
     }


    /**
     * @inheritDoc
    */
    public function stream_read(int $count): string
    {
         $input  = strtolower(fread($this->fp, $count));
         $len    = strlen($input);
         $output = '';

         for ($i = 0; $i < $len; ++$i) {
             if (isset(self::DICT[$input[$i]])) {
                 $output .= self::DICT[$input[$i]];
             } else {
                 $output .= $input[$i];
             }
         }

         return $output;
    }



    /**
     * @inheritDoc
     */
    public function stream_eof(): bool
    {
        return feof($this->fp);
    }




    /**
     * @inheritDoc
     */
    public function stream_close(): bool
    {
        return fclose($this->fp);
    }

    /**
     * @inheritDoc
    */
    public function url_stat(string $path): array
    {
         return stat($this->make_path($path));
    }

    public function stream_stat(): array
    {
        return fstat($this->fp);
    }
}


// Зарегистрировать наш StreamTranslit
stream_wrapper_register('translit', StreamTranslit::class);



// Запускаем наш скрипт
$filename = 'translit://text.txt';


$fp = fopen($filename, 'r');
echo fread($fp, filesize($filename)) ."\n";
fclose($fp);


// echo file_get_contents($filename);
//  print_r(file($filename));