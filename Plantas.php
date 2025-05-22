<?php
class Plantas
{
    public $id;
    public $name;
    public $imagem;

    public function __construct($id, $name, $imagem)
    {
        $this->id = $id;
        $this->name = $name;
        $this->imagem = $imagem;
    }
}
