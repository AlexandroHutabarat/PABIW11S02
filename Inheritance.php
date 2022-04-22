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
  private $gender; //Property
  private $hobby; //Property

  public function __construct($name, $marga, $tptlhr, $tgglhr, $gender, $hobby){ //Magic Method
    $this -> name = $name; // object type
    $this -> marga = $marga; // object type
    $this -> tptlhr = $tptlhr; // object type
    $this -> tgglhr = $tgglhr; // object type
    $this -> gender = $gender; // object type
    $this -> hobby = $hobby; // object type
    
  }
  public function getRetrunLengkap(){ //Method
    $str = "Nama : {$this->name} {$this->marga} <br> Tempat Tanggal Lahir : {$this->tptlhr}/{$this->tgglhr}";  // object type
    if ($this -> name == "Alexandro") {
      $str .= "<br>Hobi : {$this->hobby}";
   }else if($this -> name == "Hanna") {
      $str .= "<br>Jenis Kelamin : {$this->gender}";
   }
    return $str;
  }

}
class hobby extends Coba{

}
class gender extends Coba{

}

//Object
$ObjectResult1 = new hobby('Alexandro', 'Hutabarat', 'Tarutung', '16-05-2001',0,"Bercanda");
echo $ObjectResult1 -> getRetrunLengkap();
$ObjectResult2 = new gender('Hanna', 'Hutabarat', 'Tarutung', '24-06-1991', "Perempuan", 0);
echo "<br><hr>";
echo $ObjectResult2 -> getRetrunLengkap();
?>