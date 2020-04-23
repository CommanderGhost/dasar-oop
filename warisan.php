<?php

    class Produk 
    {
        public $judul, 
               $penulis,
               $penerbit,
               $harga,
               $jmlhalaman,
               $waktumain;

        public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "Penerbit", $harga = 0, $jmlhalaman = 0, $waktumain = 0)
        {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jmlhalaman = $jmlhalaman;
            $this->waktumain = $waktumain; 

        }
        
        public function getLabel()
        {
            return "$this->penulis, $this->penerbit";
        }

        public function getInfoProduk()
        {
            $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";

            return $str;
        }

    }

    class komik extends Produk
    {
        public function getInfoProduk()
        {
            $str = "Komik : ". parent::getInfoProduk()." | {$this->getLabel()} (Rp.{$this->harga}) - {$this->jmlhalaman} Halaman";

            return $str;
        }
    }

    class game extends Produk
    {
        public function getInfoProduk()
        {
            $str = "Game : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) - {$this->jmlhalaman} Jam";

            return $str;
        }
    }

        class cetakInfoProduk
        {
            public function cetak(Produk $produk)
            {
                $str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
                return $str;
            }
        }

    $produk1 = new komik("Naruto", "Masashi Kisimoto", "Shonen Jump", 50000, 100, 0);
    $produk2 = new game("Uncharted", "Neil Durkman", "Sony Computer", 40000, 0, 50);

    echo $produk1->getInfoProduk();
    echo "<br>";
    echo $produk2->getInfoProduk();

