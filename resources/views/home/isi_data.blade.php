@extends('home/header')
@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
            .container{
                box-shadow: 3px 3px 7px grey;
                border-radius: 30px;
                padding: 20px;
                box-sizing: border-box
            }
            button{
                width: 100%;
            }
        </style>
    </head>
    <body>
        <div class="container">
            @if (Session::has('pesan'))
                <div>
                <p class="alert alert-success">{{ Session::get('pesan') }}</p>
                </div>
            @endif
            <form method="post" action="{{ route('home.store') }}">
                @csrf
                Tanggal : <input type="date" name="tanggal" id="" class="form-control" placeholder="input tanggal..." required><br>

                Jam : <input type="time" name="jam" id="" class="form-control" placeholder="input jam..." required><br>

                Lokasi : <input type="text" name="lokasi" id="" class="form-control" placeholder="input Lokasi..." required><br>

                Suhu : <input type="text" name="suhu" id="" class="form-control" placeholder="input suhu..." required><br>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </body>
    </html>
@endsection