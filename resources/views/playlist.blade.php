@extends('layouts.template')
@section('content')
        <dl>
{{--                <dt><h1>{{$playlist->title}}</h1></dt>--}}
{{--                <dd>$playlist->description </dd>--}}
                <dt><h1>{{$playlist->title}}</h1></dt>
                <dd><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, eius, nulla. Praesentium
                                reiciendis reprehenderit rerum.</p></dd>
        </dl>



        <table class="styled-table">
                <thead>
                <tr>
                        <th>name</th>
                        <th>artist</th>
                        <th>genre</th>
                        <th>duration - {{--{$playlistDuration}}--}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($playlistSongs as  $key => $song)
                        <tr>
                                <td><a href="/song/{{$song->id}}">{{$song->name}}</a></td>
                                <td>{{$song->artist}}</td>
                                <td><a href="/genre/{{$song->genre_id}}">{{$song->getGenreName()}}</a></td>
                                <td>{{$song->songDuration()}}</td>
                        </tr>
                @endforeach
                </tbody>
        </table>
@endsection


@push('styles')
        <style>
                dl>dt>h1 {
                        font-weight: bold;
                        font-family: 'Open Sans', sans-serif;;
                }

                dl {
                        margin-left: 10px;
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
