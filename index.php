<?php 


class Prodotti{
  public $prodotti;

  function __construct($_prodotti)
  {
    $this->prodotti = $_prodotti;
  }
}


class Categorie extends Prodotti{
  public $cani;
  public $gatti;

  function __construct($prodotti,$_cani,$_gatti)
  {
    parent::__construct($prodotti);

        $this->cani = $_cani;
            $this->gatti = $_gatti;
  }
}

class Vari extends Categorie{
  public $cibo;
  public $giochi;
  public $cucce;


  function __construct($prodotti,$_cani,$_gatti,$_cibo,$_giochi,$_cucce)
  {

    parent::__construct($prodotti,$_cani,$_gatti);
    $this->cibo = $_cibo;
      $this->giochi = $_giochi;
        $this->cucce = $_cucce;
  }
}


$prodotti= new Prodotti('Prodotti');
$categorie = new Categorie('Prodotti','Cani','Gatti');
$vari = new Vari('Prodotti','Cani','Gatti','Cibo','Giochi','Cucce');



var_dump($prodotti,$categorie,$vari);
?>








<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php Oop 2</title>
</head>
<body>
  
</body>
</html>