@extends('layouts.template')
@section('content')
    <h1>Queuelist: <a href="/createplaylist">make playlist</a> <a href="/clearqueue"><i class="fas fa-trash-alt queuebin"></i></a></h1>

    <table class="styled-table">
        <thead>
            <tr>
                <th>name</th>
                <th>artist</th>
                <th>genre</th>
                <th>duration - {{$queuelistDuration}}</th>
                <th><i class="fas fa-heart"></i></th>
                <th>delete</th>
            </tr>
        </thead>
        <tbody>
    @foreach($queuelist as  $key => $song)
            <tr>
                <td><a href="/song/{{$song->id}}">{{$song->name}}</a></td>
                <td>{{$song->artist}}</td>
                <td><a href="/genre/{{$song->genre_id}}">{{$song->getGenreName()}}</a></td>
                <td>{{$song->songDuration()}}</td>
                <td><i class="far fa-heart"></i></td>
                <td><a href="/deletequeueitem/{{$key}}"><i class="fas fa-trash-alt"></i></a></td>
            </tr>
    @endforeach
</tbody>
    </table>
    <a href="/songs" style="font-size: 30px;">Add more songs to the queue<i class="fas fa-arrow-right"></i></a>

@endsection


@push('styles')
    <style>
        .queuebin {
            margin-right: 1em;
            font-size: 2em;
            float: right;
        }
        .styled-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 100%;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            /*margin: 10px;*/
        }
        .styled-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: center;
        }
        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
            text-align: center;
        }
        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }
        button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }
        #knop {
            width: auto;
        }

        a {
            text-decoration: none;
            font-size: 22px;
            color: black;
        }

        button:hover, a:hover {
            opacity: 0.7;}

        .fa-trash-alt {
            color: black;
        }
        td>a {
            font-size: 13px;
        }
    </style>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
@endpush
