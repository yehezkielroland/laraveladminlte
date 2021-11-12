@extends('master')
@section('conten')
<table class="table table-hover text-nowrap table-dark">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Produk</th>
        <th scope="col">Jumlah</th>
        <th scope="col">Harga</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($getproduk as $item)
        <tr>
          <th>{{$item->id}}</th>
          <td>{{$item->produk}}</td>
          <td>{{$item->jumlah}}</td>
          <td>{{$item->harga}}</td>
          <td><a href="{{route('produkdelete',$item->id)}}"><button class="btn btn-danger btn-sm" type="button"><i class="bi bi-trash"></i></button></a></td>
          
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection