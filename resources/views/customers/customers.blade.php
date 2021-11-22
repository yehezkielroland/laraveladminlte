@extends('master')
@section('conten')
<table class="table table-hover text-nowrap table-dark">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Email</th>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Phone</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($getCustomers as $customers)
        <tr>
          <th>{{$customers->id}}</th>
          <td>{{$customers->email}}</td>
          <td>{{$customers->name}}</td>
          <td>{{$customers->address}}</td>
          <td>{{$customers->phone}}</td>
          <td><a href="{{route('customersdelete',$customers->id)}}"><button class="btn btn-danger btn-sm" type="button"><i class="bi bi-trash"></i></button></a></td>
          
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection