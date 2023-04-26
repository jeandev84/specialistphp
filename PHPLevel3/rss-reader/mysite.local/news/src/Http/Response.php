<?php
namespace Framework\Http;

class Response
{

     protected ?string $content;
     protected int $status;
     protected array $headers = [];



     /**
      * @param string|null $content
      * @param int $status
      * @param array $headers
     */
     public function __construct(?string $content, int $status = 200, array $headers = [])
     {
         $this->content = $content;
         $this->status = $status;
         $this->headers = $headers;
     }



     /**
      * @return void
     */
     public function send()
     {
          echo $this->content;
     }
}