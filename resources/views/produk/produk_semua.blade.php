@extends('master')
@section('conten')
<table class="table table-hover text-nowrap table-dark">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nama Produk</th>
        <th scope="col">Depcripsi</th>
        <th scope="col">Stock</th>
        <th scope="col">Harga</th>
        <th scope="col">Id categori</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($getproduk as $item)
        <tr>
          <th>{{$item->id}}</th>
          <td>{{$item->name}}</td>
          <td>{{$item->description}}</td>
          <td>{{$item->stock}}</td>
          <td>{{$item->price}}</td>
          <td>{{$item->category_id}}</td>
          
          <td>
            <a href="{{route('produkedit',$item->id)}}"><button class="btn btn-danger btn-sm" type="button">Edit</button></a>
            <a href="{{route('produkdelete',$item->id)}}"><button class="btn btn-danger btn-sm" type="button"><i class="bi bi-trash"></i></button></a></td>
          
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection