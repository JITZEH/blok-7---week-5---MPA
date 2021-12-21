@extends('layouts.template')
@section('content')
    @foreach($songsInGenre as $song)
        <div class="card">
            {{--            <img src="/w3images/team2.jpg" alt="John" style="width:100%">--}}
            <h1>{{$song->name}}</h1>
            <p class="title">{{$song->artist}}</p>
            <a class="genreLink" href="/genre/{{$song->genre_id}}"><p>{{$song->getGenreName()}}</p></a>
            <form>

                <a class="addtoplaylist" href="/sessionqueue/{{$song->id}}">add to queue</a>
            </form>

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
            height: 250px;
            margin: 10px;
            text-align: center;
            position: relative;

        }

        .title {
            color: grey;
            font-size: 18px;
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

        a {
            text-decoration: none;
            font-size: 22px;
            color: black;
        }

        a.addtoplaylist:hover {
            text-decoration: none;
            opacity: 0.7;}
    </style>
    <script src="https://kit.fontawesome.com/2593ccece0.js" crossorigin="anonymous"></script>
@endpush
