<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form Register</title>
    <style>
        .container{
            margin: 50px auto;
            width: 50%;
            box-shadow: 3px 3px 5px grey;
            padding: 15px;
            box-sizing: border-box;
            border-radius: 20px;
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
        <form method="post" action="{{ url('auth/postRegister') }}">
            @csrf
             Nama lengkap : <input type="text" name="nama_lengkap" id="" class="form-control" placeholder="input Nama lengkap.."><br>
            
             Email : <input type="te
             
        
          xt" name="email" id="" class="form-control" placeholder="input email.."><br>
             Password : <input type="password" name="password" id="" class="form-control" placeholder="input Password..">
              <br>
              <button type="submit" class="btn btn-primary">Submit</button>
              <br><br>
              <a href="{{ url('auth') }}" class="btn btn-warning">Sudah Punya Akun</a>
        </form>
      </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>