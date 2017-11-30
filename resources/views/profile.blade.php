@extends('layouts.blank')


@section('content')

<div>
    <h2>{{$user->id}}</h2>
    <h2>{{$user->name}}</h2>
    <h2>{{$user->email}}</h2>
</div>

@endsection