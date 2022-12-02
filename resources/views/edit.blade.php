@extends('layout')

@section('content')
    <h1>Add some items to your new list</h1>
    <h3>{{ $todolist->name }}</h3>
    @foreach ($todolist->items as $item)
        <p>{{ $item->name }}</p>
    @endforeach
    <form action="/items" method="POST">
        @csrf
        @method('post')
        <input type="hidden" name="listid" value="{{ $todolist->id }}">
        <input type="text" name="name">
        <input type="submit" value="Add">
    </form>
    <form action="/lists/{{$todolist->id}}" method="post">
        @csrf
        @method('delete')
        
        
        <input type="submit" value="Delete this list">
    </form>
    <a href="/">Back</a>
