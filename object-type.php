<?php

    class Produk 
    {
        public $judul = 'judul', 
               $penulis = 'penulis',
               $penerbit = 'penerbit',
               $harga = 0;

        public function __construct($judul, $penulis, $penerbit, $harga)
        {
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;

        }
        
        public function getLabel()
        {
            return "$this->penulis, $this->penerbit";
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

    $produk1 = new Produk("Naruto", "Masashi Kisimoto", "Shonen Jump", 50000);
    $produk2 = new Produk("Uncharted", "Neil Durkman", "Sony Computer", 40000);


    echo "Komik : ". $produk1->getLabel();
    echo "<br>";
    echo "Game : ". $produk2->getLabel();
    echo "<br>";
    

$infoProduk = new cetakInfoProduk();
        echo $infoProduk->cetak($produk1);
