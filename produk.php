<?php

    class Produk 
    {
        public $judul = 'judul', 
               $penulis = 'penulis',
               $penerbit = 'penerbit',
               $harga = 0;
        
        public function getLabel()
        {
            return "$this->penulis, $this->penerbit";
        }

    }

    // $produk1 = new Produk();

    // $produk1->judul = 'Naruto';

    // var_dump($produk1);

    // $produk2 = new Produk();
    // $produk2->judul = 'Dino Crisis';
    // var_dump($produk2->judul);

    $produk3 = new Produk();
    $produk3->judul = 'Naruto';
    $produk3->penulis = 'masashi kisimoto';
    $produk3->penerbit = 'shonen jump';
    $produk3->harga = 3000;

    $produk4 = new Produk();
    $produk4->judul = "unchareted";
    $produk4->penulis = "Neil";
    $produk4->penerbit = "Sony Computer";
    $produk4->harga = 80000;

    echo "Komik : ". $produk3->getLabel();
    echo "<br>";
    echo "Game : ". $produk4->getLabel();
