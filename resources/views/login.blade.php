<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Halaman Login Admin</title>
  <script type="text/javascript">
      function login(){
        a = document.getElementById('id').value;
        b = document.getElementById('password').value;

        if ( a == "admin" && b == "admin") {
            alert("Login Berhasil");
            window.open ('/tubeswadakhir/admin','_self');
        }else{
          alert("Login Gagal");
        }

      }
    </script>
</head>
<body style="padding: 150px;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{url('/')}}">Apotik Sehat Farma</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
  <div class="container">
  <!-- Form Login -->
  <h1>Selamat Datang Di Halaman Login</h1>
  <!-- <form action="{{ route('produk.store') }}" method="post" enctype="multipart/form-data"> -->
    <!-- @csrf -->
    <div class="form-group">
      <label for="id">ID</label>
      <input type="text" class="form-control" name="id" placeholder="Masukkan id mu" id="id" >
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Masukkan passwordmu" id="password" >
    </div>
    <button type="submit" class="btn btn-success" name="btn_submit" onclick="login()">Submit</button>
  <!-- </form> -->
  </div>
</body>
</html>
