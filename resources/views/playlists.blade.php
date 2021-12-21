@extends('layouts.template')
@section('content')
    @foreach($playlists as  $key => $playlist)
        <div class="card">
            <h1 class="songName"><a href="/playlist/{{$playlist->id}}">{{$playlist->title}}</a></h1>
        </div>
    @endforeach


@endsection


@push('styles')
    <style>
        .py-4 {
            display: flex;
            flex-wrap: wrap;
        }
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            width: 300px;
            height: 275px;
            margin: 10px;
            text-align: center;
            position: relative;

        }

        .artist, .duration {
            color: grey;
            font-size: 18px;
        }

        .duration {
            vertical-align: bottom ;
        }

        a.addtoplaylist {
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
            position: absolute;
            bottom: 0;
            left: 0;
        }

        .songName>a {
            color: black;
        }

        .genreLink>p {
            text-decoration: none;
            font-size: 22px;
            color: dodgerblue;
        }

        a.addtoplaylist:hover {
            text-decoration: none;
            opacity: 0.7;
        }
    </style>
    <script src="https://kit.fontawesome.com/2593ccece0.js" crossorigin="anonymous"></script>
@endpush
