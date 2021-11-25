@extends('master')
@section('conten')
<form action="{{route('tambahAdd')}}" method="POST">
  @csrf
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nama</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama" name="name">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Descripsi</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Descripsi" name="description">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Stok</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Stok" name="stock">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Harga</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Harga" name="price">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Categori</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Categori" name="category_id">
</div>
<button type="submit" class="btn btn-primary btn-sm">Submit</button>
</form>

@endsection