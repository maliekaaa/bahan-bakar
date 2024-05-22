<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan Bakar</title>
</head>
<body>
<?php
class Shell {
    protected $ppn;
    private $SSuper,
            $SVPower,
            $SVPowerDiesel,
            $SVPowerNitro;
    public $jumlah;
    public $jenis;

    public function __construct () {
        $this->ppn = 0.1;
    }

    public function setHarga ($tipe1, $tipe2, $tipe3, $tipe4) {
        $this->SSuper = $tipe1;
        $this->SVPower = $tipe2;
        $this->SVPowerDiesel = $tipe3;
        $this->SVPowerNitro = $tipe4;
    }

    public function getHarga () {
        $data["SSuper"] = $this->SSuper;
        $data["SVPower"] = $this->SVPower;
        $data["SVPowerDiesel"] = $this->SVPowerDiesel;
        $data["SVPowerNitro"] = $this->SVPowerNitro;
        return $data;
        // return $this->SSuper; 
    }
}
class Beli extends Shell {
    public function hargaBeli (){
        $dataHarga = $this->getHarga();
        $hargaBeli = $this->jumlah * $dataHarga[$this->jenis];
        $hargaPPN = $hargaBeli * $this->ppn;
        $hargaBayar = $hargaBeli + $hargaPPN;
        return $hargaBayar;
    }

    public function cetakPembelian () {
        echo
        "<center>----------------------------------------</center>";
        echo 
        "<center> Anda membeli bahan bakar minyak tipe {$this->jenis} 
        <br> 
        Dengan jumlah : {$this->jumlah} liter 
        <br> 
        Total yang harus anda bayar adalah Rp. " . number_format($this->hargaBeli(), 0, ',', '.') . "</center>";
        echo
        "<center>----------------------------------------</center>";
    }
}
?>