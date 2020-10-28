<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


        <!--navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-success">
    <a class="navbar-brand" href="#">TOKO JUAL BELI SUPERMOTO BEKAS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        
        <li class="nav-item active">
          <a class="nav-link" href="{{ url("beranda") }}">BERANDA<span class="sr-only">(current)</span></a>
        </li>
      
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url("produk") }}">PRODUK</a>
        </li>

       

        <li class="nav-item">
          <a class="nav-link" href="{{ url("login") }}">LOGIN</a>
        </li>
      </ul>
    </div>
  </nav>

    <title>HAI PESERTA BARU</title>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header bg-warning mb-0"><h5 class="text-center">TOLONG <span class="font-weight-bold text-danger">LOGIN DAHULU</span></h5></div>
            <div class="card-body">
              <form action="">
                <div class="form-group">
                  <input type="text" name="" class="form-control" placeholder="MASUKKAN NAMA ANDA">
                </div>
                <div class="form-group">
                  <input type="text" name="" class="form-control" placeholder="SANDI YANG AMAN">
                </div>
                <div class="form-group custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                  <label class="custom-control-label" for="customControlAutosizing">INGAT TERUS SANDI</label>
                </div>
                <div class="form-group">
                  <input type="submit" name="" value="MASUK" class="btn btn-primary btn-block">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>