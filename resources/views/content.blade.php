@extends('layouts.master')
@section('isi')

    <form class="contact2-form validate-form" method="POST" action="/data">
        @csrf
        <span class="contact2-form-title">
            Buku Telepon
        </span>

        <div class="wrap-input2 validate-input" data-validate="Masukkan Nama">
            <input class="input2" type="text" name="name">
            <span class="focus-input2" data-placeholder="NAMA"></span>
        </div>

        <div class="wrap-input2 validate-input" data-validate = "Masukkan Email yang Valid : ex@abc.xyz">
            <input class="input2" type="text" name="email">
            <span class="focus-input2" data-placeholder="EMAIL"></span>
        </div>

        <div class="wrap-input2 validate-input" data-validate = "Masukkan Pekerjaan">
            <input class="input2" type="text" name="job">
            <span class="focus-input2" data-placeholder="PEKERJAAN"></span>
        </div>

        <div class="wrap-input2 validate-input" data-validate = "Masukkan No. Telepon">
                <input class="input2" type="text" name="number">
                <span class="focus-input2" data-placeholder="NO TELEPON"></span>
        </div>

        <div class="container-contact2-form-btn">
            <div class="wrap-contact2-form-btn">
                <div class="contact2-form-bgbtn"></div>
                <a href="http://127.0.0.1:8000/data"><button class="contact2-form-btn">Kirim</button></a> 
                    {{-- Kirim --}}
                
            </div>
        </div>
    </form>
    
@endsection