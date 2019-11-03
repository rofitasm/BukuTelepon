@extends('layouts.master')
@section('isi')
 <?php

    $lines = ( count (file("DataKontak.txt")) / 4 ) ;
    $open = fopen("DataKontak.txt",'r');

    for($i = 1; $i <= $lines; $i++){
        // print $i.' ';
        $baca = fgets($open);
        print $baca.'<br>';
        $baca = fgets($open);
        print $baca.'<br>';
        $baca = fgets($open);
        print $baca.'<br>';
        $baca = fgets($open);
        print $baca.'<br>';
    }

    fclose($open)
 ?>
@endsection