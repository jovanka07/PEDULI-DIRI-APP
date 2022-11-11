<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        header{
            display: flex;
            width: 80%;
            background-color: #fff;
            box-shadow: 2px 2px 5px grey;
            border-radius: 30px;
            margin: 50px auto;
        }
        .nav{
            margin: 15px 0 0 0 ;
            display: inline;
        }
        .nav-a a{
            text-decoration: none;
            margin: 0 15px 0 0 ;
            color: #333;
            transition: 0.8s;
        }
        .nav-a a:hover{
            padding: 5px;
            background-color: #333;
            color: #fff;
            border-radius: 10px;
        }
        .container{
            width: 80%;
            margin: 30px auto;
        }
        textarea{
            width: 100%;
        }
        a{
            width: 100%;
        }
    </style>
  </head>
  <body>
    @extends('home/header')
    @section('content')
        <div class="container">
            @if (Session::has('pesan'))
                <div>
                    <p class="alert alert-success">{{ Session::get('pesan') }}</p>
                </div>
            @endif
            <textarea id="" cols="30" rows="10">Hallo {{ Auth()->user()->nama_lengkap }}</textarea>
            <a href="{{ route('home.create') }}" class="btn btn-primary">Isi Catatan Perjalanan</a>
        </div>
    @endsection


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>