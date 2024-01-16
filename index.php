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

  public

  function __construct($prodotti,$_cani,$_gatti,$_cibo,$_giochi,$_cucce)
  {

    parent::__construct($prodotti,$_cani,$_gatti);
    $this->cibo = $_cibo;
      $this->giochi = $_giochi;
        $this->cucce = $_cucce;
  }


}

class Info extends Vari{
    public $img;
  public $titolo;
   public $prezzo;

   function __construct($_img,$_titolo,$_prezzo, $prodotti,$_cani,$_gatti,$_cibo,$_giochi,$_cucce)
   {

     parent::__construct($prodotti,$_cani,$_gatti,$_cibo,$_giochi,$_cucce);
      $this->img= $_img;
            $this->titolo= $_titolo;
                  $this->prezzo= $_prezzo;
   }

}


$prodotti= new Prodotti('Prodotti');
$categorie = new Categorie('Prodotti','Cani','Gatti');
$vari = new Vari('Prodotti','Cani','Gatti','Cibo','Giochi','Cucce');
$info = new Info('img','Titolo','Prezzo','Prodotti','Cani','Gatti','Cibo','Giochi','Cucce');

$vari->cibo = 'Cibo';
$vari->giochi = 'Giochi ';
$vari->cucce = 'Cucce ';

$info->img = 'img';
$info->titolo= 'Titolo';
$info->prezzo = 'Prezzo';








var_dump($prodotti,$categorie,$vari,$info);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php Oop 2</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="cont">
    <div class="card">
<h3> <?php echo $info->img ?> </h1>
  <strong> <?php echo $info->titolo ?></strong>
  <p>  <?php echo $info->prezzo ?></p>
 </div>

    <div class="card">
<h3> <?php echo $info->img ?> </h1>
  <strong> <?php echo $info->titolo ?></strong>
  <p>  <?php echo $info->prezzo ?></p>
 </div>

    <div class="card">
<h3> <?php echo $info->img ?> </h1>
  <strong> <?php echo $info->titolo ?></strong>
  <p>  <?php echo $info->prezzo ?></p>
 </div>
    
    

  </div>
  
</body>
</html>