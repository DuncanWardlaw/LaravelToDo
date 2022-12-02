@extends('layout')

@section('content')

    <body>

        <div class="bg-container">
            <nav>ToDo List App
                <a href="/create">Create a List</a>
                <a href="">Link 2</a>
                <a href="">Link 3</a>
                <a href="">Sign Out</a>
            </nav>

            <div id="mainGrid">
                @foreach ($todolists as $todolist)
                    <div class="hello">
                        <table>
                            <tr>
                                <th>{{ $todolist->name }}</th>
                                <th>Date Added</th>
                                <th>Completed</th>
                                <th><a class="btn btn-primary" href="{{ route('lists.edit', $todolist->id) }}">Edit</a></th>
                               
                            </tr>

                            @foreach ($todolist->items as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ date('j F, Y', strtotime($item->created_at)) }}</td>
                                    @if ($item->completed == 0)
                                        <td><img src="..\x-lg.svg" width="50px"></img></td>
                                    @elseif($item->completed == 1)                    
                                        <td><img src="..\check.svg" width="50px"></img></td>
                                    @endif
                                    
                                </tr>
                            @endforeach


                        </table>

                    </div>
                @endforeach

            </div>
            <div id="sidebar">

            </div>
        </div>
    </body>
    <script src="{{ mix('js/app.js') }}"></script>
