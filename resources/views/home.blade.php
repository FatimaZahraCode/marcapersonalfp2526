@extends('dopetrope.master')

@section('menu')
    @parent
    <p>¡Hola {{ $nombre ?? 'colega' }}!</p>
@endsection

@section('content')
    <ul>
        @if (count($users) === 1)
            <li>Solo hay un usuario! </li>
            <li>Usuario {{ $users['name'] }} con identificador: {{ $users['id'] }}</li>
        @elseif (count($users) > 1)
            Hay muchos usuarios!
            @include('users.usersList', ['users' => $users])
        @else
            <li> No hay ningún usuario :(</li>
        @endif
    </ul>
@endsection
