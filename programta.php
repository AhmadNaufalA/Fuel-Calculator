<!DOCTYPE html>
<html>
    <head>
        <title>Program Tugas Akhir</title>
        <?php
class pendefinisi {
public function identitas (string $nama, string $nim) {
            echo "Hai, namaku $nama dan NIM-ku $nim <br>";
        }
    }
$objek = new pendefinisi ();
            $objek -> identitas('Ahmad Naufal Athaya','21120118110001');
?>
<?php
class umurasal {
  private $umur;
  private $asal;

  public function __construct($umur, $asal){
    $this->umur = $umur;
    $this->asal = $asal;
  }

  public function setUmur($umurBaru){
    $this->umur = $umurBaru;
  }

  public function getUmur(){
    return $this->umur;
  }

  public function getAsal(){
    return $this->asal;
  }
}

$naufal = new umurasal("Umurku 18, ", "Asal dari Bontang");

echo "<br>";
echo $naufal->getUmur();
echo $naufal->getAsal();

$naufal->setUmur("Eh salah, sekarang umurku udah 19");
echo "<br>";
echo $naufal->getUmur();

?>


        <body>


</script>
<link rel="stylesheet" type="text/css" href="style.css">

<form action="total.php" method="post">
<h1>Program Penghitung Estimasi Konsumsi BBM dan Total Biayanya</h1>

<h4>Masukkan Jarak Tempuh</h4>
<form 
		action="total.php" method="post">
               <label for="jarak">Jarak Tempuh:</label>
               <td><input name="jarak" onkeydown="preventNumberInput(event)" onkeyup="preventNumberInput(event)" /></td> Km
               

               </br></br>
<h3>Pilih Jenis Kendaraan</h3>

<label for="kendaraan">Kendaraan :</label></td>
<select name="kendaraan" id="kendaraan">
<option value="Motor">Motor</option>
<option value="Mobil">Mobil</option>
</select>
</br></br>

<h3>Pilih Jenis BBM</h3>
<label for="jenisb">Jenis BBM :</label></td>
<select name="jenisb" id="jenisb">
<option value="Pertamax">Pertamax</option>
<option value="Pertalite">Pertalite</option>
<option value="Premium">Premium</option>
</select>
</br></br>

               <input type="submit" name="submit" value="Mulai Hitung">
</form>
            <script type="text/javascript" src="jquery/jquery-3.4.1.min.js"></script>
            <script type="text/javascript" src="jquery/script.js"></script>
        </head>
    </body>
</html>