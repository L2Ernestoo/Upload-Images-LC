@extends('Assets.header')

@section('container')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Fecha Nacimiento</th>
            <th scope="col">Email</th>
            <th scope="col">Avatar</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customers as $c)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$c->first_name}}</td>
            <td>{{$c->last_name}}</td>
            <td>{{$c->birth_date}}</td>
            <td>{{$c->email}}</td>
            <td><img src="/storage/{{$c->path_avatar}}" alt="{{$c->first_name}} Avatar's" width="100px" height="100px"></td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
