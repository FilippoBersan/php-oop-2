<?php 


class Prodotti{

  public $id;
  public $nome;
public $categoria;
 public $descrizione;
  public $prezzo;

  function __construct($_id,$_nome,$_categoria)
  {
   $this->set_id($_id);
   $this->set_nome($_nome);
   $this->set_categoria($_categoria);
  }


  // GETTERS.
 

  public function get_id(){
    return $this->id;
  }

    public function get_nome(){
    return $this->nome;
  }


        public function get_categoria(){
    return $this->categoria;
  }

      public function get_descrizione(){
    return $this->descrizione;
  }


        public function get_prezzo(){
    return $this->prezzo;
  }


    // SETTERS


      public function set_id($_id){
 return $this->id = $_id;
  }

    public function set_nome($_nome){
    return $this->nome = $_nome;
  }

     public function set_categoria($_categoria){
    return $this->categoria =  $_categoria;
  }

      public function set_descrizione($_descrizione){
    return $this->descrizione= $_descrizione ;
  }

     

        public function set_prezzo($_prezzo){
    return $this->prezzo =  $_prezzo;
  }
}



?>