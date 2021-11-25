@extends('master')

@section('conten')
<form action="{{route('produkupdate', $produk->id)}}" method="POST">
    @csrf
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nama</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama" value="{{$produk->name}}">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Descripsi</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Descripsi" value="{{$produk->description}}">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Stok</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Stok" value="{{$produk->stock}}">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Harga</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Harga" value="{{$produk->price}}">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Categori</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Categori" value="{{$produk->category_id}}">
  </div>
  <button type="submit" class="btn btn-primary btn-sm">Submit</button>
  </form>
@endsection