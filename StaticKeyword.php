<!-- 
  Nama  : Alexandro Binsar Joshua P Hutabarat
  NIM   : 13321001
  Kelas : 31 TK 1
-->

<?php
class ExmStatic{
    public static $n = 0;
    public static function string(){
        $str = "Telor Ayam". self:: $n++;
        return $str;
    }
}

echo ExmStatic :: string();
echo "<br>";
echo ExmStatic :: string();
echo "<br>";
echo ExmStatic :: string();
echo "<br>";
echo ExmStatic :: string();
echo "<br>";
?>