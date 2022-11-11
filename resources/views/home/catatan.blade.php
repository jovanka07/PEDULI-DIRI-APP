<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .row{
            border: 1px solid grey;
            border-radius: 30px;
            padding: 15px;
            box-sizing: border-box;
        }
        input{
            width: 100%;
        }
    </style>
</head>
<body>
    @extends('home/header')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col">
                    <form method="get" action="{{ url('auth/catatan') }}">
                        @csrf
                        <input type="text" name="keyword" id="" placeholder="Cari datamu..">
                    
                </div>

                <div class="col">
                  <button class="btn btn-primary">Cari data</button></form>
                </div>
                
            </div>
            <br><br>
            <table class="table table-hover table-striped">
                <tr class="table-primary">
                    <th>No.</th>
                    <th>Nama Lengkap</th>
                    <th>Jam</th>
                    <th>Lokasi</th>
                    <th>Suhu Tubuh</th>
                    <th>Tanggal</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <div style="display:none;">{{ $i= 1 }}</div>
                @foreach ($model as $item)
                    <tr class="table-success">
                        <td>{{ $i++ }}</td>
                        <td>{{ $item->Login->nama_lengkap }}</td>
                        <td>{{ $item->jam }}</td>
                        <td>{{ $item->lokasi }}</td>
                        <td>{{ $item->suhu }}</td>
                        <td>{{ $item->tanggal }}</td>
                        <td><a href="{{ route('home.edit', $item->id) }}" class="btn btn-primary">Edit</a></td>
                        <td><form method="post" action="{{ route('home.destroy', $item->id) }}" >
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">Submit</button>
                        </form></td>
                    </tr>
                @endforeach
            </table>
        </div>
    @endsection
</body>
</html>