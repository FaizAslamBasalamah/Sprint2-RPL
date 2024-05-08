@extends('layout.template-layout')

@section('tittle', 'BagiBarang | Riwayat Donasi')

@section('content')
@include('layout.main-layout')

<div class="table-responsive small ms-3 mt-3">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">full_name</th>
              <th scope="col">username</th>
              <th scope="col">email</th>
              <th scope="col">telpon</th>
              <th scope="col">telpon</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($manage as $item)
            <tr>
              <td>{{ $item -> id}}</td>
              <td>{{ $item -> full_name}}</td>
              <td>{{ $item -> username}}</td>
              <td>{{ $item -> email}}</td>
              <td>{{ $item -> telpon}}</td>
              <td><a href="{{ url('/manage-user'.$item->id)}}" class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
        @if(Session::has('deletedMessage'))
          <div class="alert alert-danger alert-lg"> {{ Session::get('deletedMessage') }}</div>
        @endif
      </div>