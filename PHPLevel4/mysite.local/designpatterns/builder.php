<?php


class Window
{
     private $visible = false;
     private $modal   = false;
     private $dialog  = false;


     public function __construct($dialog, $modal, $visible)
     {
          $this->dialog = $dialog;
          $this->modal  = $modal;
          $this->visible = $visible;
     }
}


// $w = new Window(true, false, true);
// чтобы не заставить передавать все параметры
// создадим класс который отвечает за создание окна "CreateWindow"

class CreateWindow
{
     private $dialog  = false;
     private $visible = false;
     private $modal   = false;



     /**
      * @param bool $dialog
      * @return $this
     */
     public function setDialog(bool $dialog)
     {
         $this->dialog = $dialog;

         return $this;
     }




    /**
     * @param bool $modal
     * @return $this
     */
     public function setModal(bool $modal)
     {
         $this->modal = $modal;

         return $this;
     }



    /**
     * @param mixed $visible
    */
    public function setVisible(bool $visible): void
    {
        $this->visible = $visible;
    }



    /**
     * @return Window
    */
    public function create()
    {
         return new Window($this->dialog, $this->modal, $this->visible);
    }
}

// $w = new Window(true, false, true);
$x = new CreateWindow();
$w = $x->setModal(true)->setModal(true)->create();