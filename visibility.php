<?php

    class Produk 
    {
        public $judul, 
               $penulis,
               $penerbit;

        protected $diskon = 0;
        private $harga;

        public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "Penerbit", $harga = 0)
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

        public function getInfoProduk()
        {
            $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";

            return $str;
        }

        public function getHarga()
        {
            return $this->harga - ($this->harga * $this->diskon / 100);
        }

    }

    class komik extends Produk
    {
        public $jmlhalaman;

        public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "Penerbit", $harga = 0, $jmlhalaman = 0)
        {
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->jmlhalaman = $jmlhalaman;
        }

        public function getInfoProduk()
        {
            $str = "Komik : ". parent::getInfoProduk()." - {$this->jmlhalaman} Halaman";

            return $str;
        }
    }

    class game extends Produk
    {
        public $waktumain;

        public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "Penerbit", $harga = 0, $waktumain = 0)
        {
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->waktumain = $waktumain;
        }

        public function setDiskon($diskon)
        {
            $this->diskon = $diskon;
        }
        
        public function getInfoProduk()
        {
            $str = "Game : ".parent::getInfoProduk() ."- {$this->waktumain} Jam";

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

    $produk1 = new komik("Naruto", "Masashi Kisimoto", "Shonen Jump", 50000, 100);
    $produk2 = new game("Uncharted", "Neil Durkman", "Sony Computer", 40000, 50);

    echo $produk1->getInfoProduk();
    echo "<br>";
    echo $produk2->getInfoProduk();
    echo "<hr>";
    
    $produk2->setDiskon(50);
    echo $produk2->getHarga();
    

