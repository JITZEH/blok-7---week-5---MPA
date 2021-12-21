@extends('layouts.template')
@section('content')
        <div class="card">
            <h1>{{$song->name}}</h1>
            <p class="artist">{{$song->artist}}</p>
            <a class="genreLink" href="/genre/{{$song->genre_id}}"><p>{{$song->getGenreName()}}</p></a>
            <p class="duration">{{$song->songDuration()}}</p>
            <form>

                <a class="addToPlaylist" href="/sessionqueue/{{$song->id}}">add to queue</a>
            </form>

        </div>
@endsection


@push('styles')
    <style>
        .py-4 {
            display: flex;
            flex-wrap: wrap;
        }
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            width: 1200px;
            height: 500px;
            margin: auto;
            text-align: center;
        }
        .artist, .duration {
            color: grey;
            font-size: 18px;
        }

        a.addToPlaylist {
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

        a {
            text-decoration: none;
            font-size: 22px;
            color: black;
        }

        a.addToPlaylist:hover {
            text-decoration: none;
            opacity: 0.7;}
    </style>
    <script src="https://kit.fontawesome.com/2593ccece0.js" crossorigin="anonymous"></script>
@endpush
