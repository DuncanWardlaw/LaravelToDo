@extends('layout')

@section('content')
    <h1>Enter the name of the list</h1>
    <form action="{{route('lists.store')}}" method="post">
        @csrf
    <input type="text" name="name">
    <input type="submit" value="create">
    </form>
    <a href="/">Back</a>

