<?php

/* 7 - Exercício
Classe com Método que Usa Condicional  

Crie uma classe chamada Musica com os atributos:  
- álbum  
- artista  
- anoDeLancamento  

Adicione um método verificaLancamento() que:  
- Se a música tiver menos de 1 ano → é "lançamento".  
- Caso contrário → é "contemporânea".*/

class Music{//create the class / cria classe

    public $album, $artist, $release;//create the attributes / cria atributos
    public $songs = [];//array to store the name songs / gurda nome das musicas

    public function __construct($album, $artist, $release, $songs)//build object / constroi objeto
    {
        $this->album = $album;
        $this->artist = $artist;
        $this->release = $release;
        $this->songs = $songs; 
    }

    public function checkLaunch()
    {
        $currentYear = date("Y");//receive date /  recebe a data

        echo "Album: $this->album | Artista: $this->artist | Lançamento: $this->release | ";

        if(($currentYear - $this->release) < 1)
        {
            echo "Status: Lançamento" . PHP_EOL;
        }else
        {
        echo "Status: Contemporâneo" . PHP_EOL;
        }

        if(!empty($this->songs))
        {
            echo "Musicas: " . PHP_EOL;
            foreach($this->songs as $song)
            {
                echo $song . PHP_EOL;
            }
        }else
        {
            echo "Sem musicas para exibir" . PHP_EOL;
        }
    }
}

$music = new Music("True", "Avicii", 2013, ["Wake Me Up", "Hey Brother", "Addicted To You"]);

$music->checkLaunch();
echo "===============" . PHP_EOL;

$music = new Music("Happier Than Ever", "Billie Eilish", 2021, ["My future", "Happier Than Ever", "Male Fantasy"]);

$music->checkLaunch();