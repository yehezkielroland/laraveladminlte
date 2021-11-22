@extends('master')
@section('conten')
<table class="table table-hover text-nowrap table-dark">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">description</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($getCategories as $Categories)
        <tr>
          <th>{{$Categories->id}}</th>
          <td>{{$Categories->nanme}}</td>
          <td>{{$Categories->description}}</td>
          <td><a href="{{route('categoriesdelete',$Categories->id)}}"><button class="btn btn-danger btn-sm" type="button"><i class="bi bi-trash"></i></button></a></td>
          
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection