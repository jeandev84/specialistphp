<?php
namespace Framework;

use Framework\Http\Response;

class App
{


     /**
      * @var string
     */
     private $basePath;



     /**
      * @var array
     */
     private $routes = [];



     /**
      * @var array
     */
     private $bindings = [];



     /**
      * @var static
     */
     public static $app;


     /**
      * @param array $bindings
     */
     public function __construct(array $bindings)
     {
          $this->binds($bindings);
     }



     /**
      * @param string $name
      * @param string $template
      * @param array $data
      * @return $this
     */
     public function map(string $name, string $template, array $data = []): self
     {
         $this->routes[$name] = [$template, $data];

         return $this;
     }



     /**
      * @param string $name
      * @param $value
      * @return $this
     */
     public function bind(string $name, $value): self
     {
         $this->bindings[$name] = $value;

         return $this;
     }




     /**
      * @param array $definitions
      * @return void
     */
     public function binds(array $definitions)
     {
         static::$app = $this;
         $this->bind('views', new \Framework\Templating\View($definitions['view.root']));

         foreach ($definitions as $name => $value) {
             $this->bind($name, $value);
         }
     }


    /**
     * @param string $name
     * @param $default
     * @return mixed|null
     */
     public function get(string $name, $default = null)
     {
          return $this->bindings[$name] ?? $default;
     }



     /**
      * @param string $page
      * @return void
     */
     public function run(string $page)
     {
         if (! array_key_exists($page, $this->routes)) {
              echo $this->get('views')->render('errors/404');
              exit;
         }
         list($template, $data) = $this->routes[$page];
         $output = $this->get('views')->render(trim($template, '\\/'), $data);
         $response = new Response($output);
         $response->send();
     }
}