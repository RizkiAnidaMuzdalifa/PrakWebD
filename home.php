<!DOCTYPE html>
<html>
<head>
	<title>SISKA UBG</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">SISKA-UBG</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="data_mahasiswa.php">Data Mahasiswa</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="data_nilai.php">Data Nilai</a>
      </li>
    </form>
  </div>
</nav>
<div class="container">

  <div class="jumbotron">
    <h1 class="display-4">PUBG</h1>
    <p class="lead"> Selamat datang di situs PUBG LOMBOK<p>

<div class="row">
   <!--  <div class="col-sm-4">
  <div class="card">
    <img src="OK.jpg" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">TLC </h5>
      <p class="card-text">
      GAYA LO BADUT!
      </p>
    </div>
  </div>
</div>
  <div class="col-sm-4">
  <div class="card">
    <img src="OK.jpg" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">TLC </h5>
      <p class="card-text">
       GAYA LO BADUT!
      </p>
    </div>
  </div>
</div> -->
 <div class="col-sm-4">
  <div class="card">
    <img src="OK.jpg" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">TLC </h5>
      <p class="card-text">
       GAYA LO BADUT!
      </p>
      <button id="read">
        read more...
      </button>
      <button id="unread" hidden="">
          Unread
        </button>  
      <p id="open" hidden>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>
</div>
  <script src="js/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function (){
      $('#read').click(function (){
        $('#open').prop('hidden', false);
        $('#unread').prop('hidden', false);
        $('#read').prop('hidden', true);
      })
      $('#unread').click(function (){
        $('#open').prop('hidden', true);
        $('#read').prop('hidden', false);
        $('#unread').prop('hidden', true);
})
})
</script>
</body>
</html>