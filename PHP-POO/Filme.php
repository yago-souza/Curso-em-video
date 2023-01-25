<?php

class Filme
{
    private $titulo;
    private $diretores;
    private $atores;
    private $personagens;
    private $produtoras;
    private $lancamento;
    private $nota;
    private $duração;
    private $enredo;

    public function __construct(string $titulo,
                                string $diretores,
                                string $atores,
                                string $personagens,
                                string $produtoras,
                                string $lancamento,
                                float $nota,
                                int $duração,
                                string $enredo)
        {

            $this->titulo = $titulo;
            $this->diretores = $diretores;
            $this->atores = $atores;
            $this->personagens = $personagens;
            $this->produtoras = $produtoras;
            $this->lancamento = $lancamento;
            $this->nota = $nota;
            $this->duração = $duração;
            $this->enredo = $enredo;
        }


    public function dicaFilme()
    {
        echo $this->titulo . PHP_EOL;
        echo $this->diretores;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }
}

DIRETOR

