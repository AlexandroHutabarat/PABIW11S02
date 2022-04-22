<!-- 
  Nama  : Alexandro Binsar Joshua P Hutabarat
  NIM   : 13321001
  Kelas : 31 TK 1
-->


<?php

//Class
class Coba{ 

  private $name; //Property
  private $marga; //Property
  private $tgglhr; //Property
  private $tptlhr; //Property
  private $tipe; //Property


  public function __construct($name, $marga, $tptlhr, $tgglhr, $tipe){ //Magic Method
    $this -> name = $name; // object type
    $this -> marga = $marga; // object type
    $this -> tptlhr = $tptlhr; // object type
    $this -> tgglhr = $tgglhr; // object type
    $this -> tipe = $tipe; // object type
    
  }
  public function getRetrunLengkap(){ //Method
    $str = "Nama : {$this->name} {$this->marga} <br> Tempat Tanggal Lahir : {$this->tptlhr}/{$this->tgglhr} <br>Hobi : {$this->tipe}";  // object type
    return $str;
  }

}
class hobby extends Coba{
    public function getRetrunLengkap(){
        $str = parent::getRetrunLengkap();
        return $str;
    }
}
class gender extends Coba{
    public function getRetrunLengkap(){
        $str = parent::getRetrunLengkap();
        return $str;
    }
}

//Object
$ObjectResult1 = new hobby('Alexandro', 'Hutabarat', 'Tarutung', '16-05-2001', 0, "Bercanda");
echo $ObjectResult1 -> getRetrunLengkap();
$ObjectResult2 = new gender('Hanna', 'Hutabarat', 'Tarutung', '24-06-1991', "Perempuan", 0);
echo "<br><hr>";
echo $ObjectResult2 -> getRetrunLengkap();
?>