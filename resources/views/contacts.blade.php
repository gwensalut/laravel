@extends('layout.app')

@section('content')
    <h1>WELCOME TO CONTACTS PAGE</h1>
    <form action="{{ route ('contacts.submit')}}" method="post">
        @csrf
        <div>
            <label for="name">NAME</label>
            <input type="text" name="name" id="name">
        </div>

        <div>
            <label for="email">EMAIL</label>
            <input type="email" name="email" id="email">
        </div>

        <div>
            <label for="message">MESSAGE</label>
            <input type="text" message="message" id="message">
        </div>

        <div>
            <button>SUBMIT</button>
        </div>
    </form>
@endsection

@section('title')
    CONTACTS
@endsection