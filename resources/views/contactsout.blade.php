@extends('layout.app')

@section('content')
    <h1>THANK YOU {{$name}}</h1>
    <p>YOUR MESSAGE "{{$message}}" HAS BEEN SUBMITTED</p>
    <p>SUBMITTED YOUR EMAIL ADDRESS {{$email}}</p>
@endsection

@section('title')
    CONTACTS
@endsection