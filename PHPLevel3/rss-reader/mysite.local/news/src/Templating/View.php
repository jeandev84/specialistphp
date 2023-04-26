<?php
namespace Framework\Templating;

class View
{
    /**
     * @var string
    */
    private $basePath;


    /**
     * @param string $basePath
    */
    public function __construct(string $basePath)
    {
        $this->basePath = $basePath;
    }



    /**
     * @param string $template
     * @param array $data
     * @return string
    */
    public function render(string $template, array $data = []): string
    {
        extract($data);
        ob_start();
        require_once rtrim($this->basePath, '\\/') . "/{$template}.php";
        return ob_get_clean();
    }
}