<html>
<head><title> </title>
 <link rel="stylesheet" href="css/animate.css">
 <link rel="stylesheet" href="css/bootstrap-grid.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/search.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>



<style>
  

<meta name="viewport" content="width=device-width, initial-scale=1.0">
*{
      margin:0px;
      padding: 0px;
      font-family: 'josefin sans',sans-serif;

   }
   nav{
      height: 100px;
      background-color: #81ecec;
      display: flex;
      justify-content: space-around;
      align-items: center;

   }
.logo{

   width: 40%;
   color: #0984e3;
   /*background:#fab1a0;*/
   padding-left: 55px;
}

.logo h2{
    text-transform: capitalize;
    text-shadow: 2px 2px 2px #dfe6e9;
    font-size: 40px;
}




.menu{

   width: 60%;
   /*background-color:#6c5ce7;*/
   display: flex;
   justify-content: space-around;
   align-items: center;
   font-size: 20px;

}

.menu a{
   text-decoration: none;
   color: #2d3436;
   text-transform: uppercase;
   font-weight:bold;
position: relative;

}
.active{
    border-bottom:2px solid red;   
}

.menu a:hover:before{
   width: 100%;
   background-color:#6c5ce7;
}
.menu a:before{
   content: "";
   position: absolute;
   left: 0px;
   top: 100%;
   width: 100%;
   height: 5px;
   width: 0;
   background-color:#000;
   transition: all .5s linear;
}



.fix{
   position: -webkit-sticky;
   position: sticky;
   top: 0;
}
</style>


</head>
<body>
<nav class="fix">
  <div class="logo" >
    <h2>Medico<span>+</span></h2>
  </div>

  <div class="menu">
    <a href="index.php"> Home </a>
    <a href="medical.php">Medical</a>
    <a href="hospital.php" >Hospital</a>
    <a href="about.php">About Us</a>
    <a href="login.html">Login</a>
  </div>    
</nav>
</body>
</html>