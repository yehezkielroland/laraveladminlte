@extends('master')
@section('conten')
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nama Produk</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Produk">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Harga</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Harga">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Jumlah</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Jumlah">
  </div>
  <a href=""><button type="button" class="btn btn-primary btn-sm">Submit</button></a>
@endsection