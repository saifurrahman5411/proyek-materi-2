<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="https://kit.fontawesome.com/350ae57961.js" crossorigin="anonymous"></script>

    <title>Halaman Beranda</title>
  </head>
  <body>
  	
    <!--navbar-->
	<nav class="navbar navbar-expand-lg navbar-light bg-warning">
	  <a class="navbar-brand" href="#">TOKO JUAL BELI SUPERMOTO BEKAS</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavDropdown">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="{{ url("beranda") }}">BERANDA<span class="sr-only">(current)</span></a>
	      </li>
	     
	     <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
	     
	      <li class="nav-item">
	        <a class="nav-link" href="{{ url("produk") }}">PRODUK</a>
	      </li>
	      
	       <li class="nav-item">
	        <a class="nav-link" href="{{ url("login") }}">LOGIN</a>
	      </li>

	    </ul>
	  </div>
	</nav>



<!--navbar search-->
<nav class="navbar  navbar-light bg-light ">
  <a class="navbar-brand">SELAMAT DATAND DI TOKO ONLINE KAMI</a>
  <form class="form-inline ml-auto">
    <input class="form-control mr-sm-2" type="search" placeholder="Cari barang" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">PENCARIAN</button>
  </form>
  <i class="fas fa-cart-plus ml-2"></i>
</nav>

<!--coursel-->

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="motor1.jpg" class="d-block w-100 " alt="..." height="500px">
    </div>
    <div class="carousel-item">
      <img src="motor5.jpg" class="d-block w-100" alt="..." height="500px">
    </div>
    <div class="carousel-item">
      <img src="motor3.jpg" class="d-block w-100" alt="..." height="500px">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
<br>



<!--jumbotron kategory-->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h2>KATEGORI MOTOR</h2>

<p>
  <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">SUPERMOTO</a>

  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">ORIGINAL</button>
  
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
      	Supermoto adalah olahraga otomotif yang menggunakan kendaraan yang dirancang untuk kemampuan ekstrim. ... Bukan cuma perkara mengganti ban saja dengan ban aspal atau ban race khusus supermoto, ternyata supermoto adalah motor yang juga di setting bagian setang nya agar tidak sepanjang dan selebar motor trail.
      	<img src="motor3.jpg" class="" alt="">
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body">
      Supermoto adalah olahraga otomotif yang menggunakan kendaraan yang dirancang untuk kemampuan ekstrim. ... Bukan cuma perkara mengganti ban saja dengan ban aspal atau ban race khusus supermoto, ternyata supermoto adalah motor yang juga di setting bagian setang nya agar tidak sepanjang dan selebar motor trail.
        <img src="motor2.jpg">
      </div>
    </div>
  </div>
</div>
  </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="dtracker" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DETAIL</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="motor1.jpg">
        <h5>detail</h5>
        <p>motor teknologi terkini</p>
        <p>over power</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="dtracker150" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DETAIL</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="motor2.jpg">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="hasqivarna" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DETAIL</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="motor3.jpg">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="crf" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DETAIL</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="motor4.jpg">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!--jumbotron-->
<div class="jumbotron jumbotron-fluid">
	<h5>Rekomendasi</h5>

<div class="container">
  <div class="row">
    <div class="col-sm">
      <img src="motor1.jpg" class="card-img-top" alt="">
    	<div class="card-body">
        <h5 class="card-title">DTRECKER</h5>
        <p class="card-text">Rp 75.000,-</p>
        <a href="#dtracker" class="btn btn-dark" data-target="#dtracker" data-toggle="modal" >KERANJANG</a>
       
    </div>
    </div>
    <div class="col-sm">
      <img src="motor2.jpg" class="card-img-top" alt="">
    <div class="card-body">
        <h5 class="card-title">DTRECKER 150</h5>
        <p class="card-text">Rp 80.000,-</p>
        <a href="#" class="btn btn-dark"data-target="#dtracker150" data-toggle="modal" >KERANJANG</a>
        
    </div>
    </div>
    <div class="col-sm">
     <img src="motor3.jpg" class="card-img-top" alt="">
    <div class="card-body">
        <h5 class="card-title">HASQIVARNA</h5>
        <p class="card-text">Rp 87.000,-</p>
        <a href="#" class="btn btn-dark"data-target="#hasqivarna" data-toggle="modal" >KERANJANG</a>
        
    </div>
    </div>
     <div class="col-sm">
     <img src="motor4.jpg" class="card-img-top" alt="">
    <div class="card-body">
    
        <h5 class="card-title">CRF</h5>
        <p class="card-text">Rp 90.000,-</p>
        <a href="#" class="btn btn-dark"data-target="#crf" data-toggle="modal" >KERANJANG</a>
        
    </div>
    </div>

    
   
    


</div>
</div>
      </div>
	  </div>
	  </div>
</div>
</div>
</div>
</div>


<div class="bg-dark">
	<div class="container">
  <div class="row">
    <div class="col-sm text-white">

    	<h5>KONTAK</h5>
      <p><i class="fab fa-whatsapp mr-2"></i>whatsapp</p>
      <P></P>
      <p></p>
    </div>
    <div class="col-sm  text-white">
      <h5>KONTAK</h5>
      <p><i class="fab fa-facebook mr-2"></i>facebook</p>
      <P></P>
    </div>
    <div class="col-sm  text-white">
 <h5>KONTAK</h5>
      <p><i class="fab fa-instagram mr-2"></i>instagram</p>
      <P></P>
    </div>
</div>
  </div>
</div>







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
