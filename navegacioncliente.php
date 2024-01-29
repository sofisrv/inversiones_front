<head><meta charset="gb18030">

</head>
<body onload="nobackbutton();">
<style>
<?php
 /*header('Content-Type: text/html; charset=utf-8');  
 @ob_start();
 require 'conexion.php';

if(!isset($_SESSION)) 
{ 
    session_start(); 
}
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == TRUE){
  */
?>

@import url('https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i');
html,body{
  margin:0;
  width:100%;
  font-family: 'Josefin Sans', sans-serif;
  font-size: 2;

}
a{

  text-decoration:none
}
.header{
  position:fixed;
  overflow:hidden;
  display:flex;
  flex-wrap: wrap;
  width: 100%;
  color:#eee;
  background-color: black;
}
.header a{
  color:#eee;
}
.boton{
  border:2px solid #fff;
  border-radius:3px;
  text-decoration:none;
  display:inline-flex;
  align-items:center;
  align-content:center;
  font-weight: 900;
  font-size:1.1em;
  line-height:1;
  box-sizing:border-box;
  padding: 10px;
}
.sides{
  display:inline-flex;
  align-items:center;
  align-content:center;
  margin: 5px;
  margin-left: 5%;
  margin-right: 5%;
}
.sides1{
margin-left: 5%;
  margin: 5px;
  float: right;
}
.author{
  margin-left: 5%;
  display:inline-block;
  width:60px;
  height:60px;
  border-radius:50%;
  background:url("logos/lp1.png") center no-repeat;
  background-size:cover;
  border:2px solid #fff;
  border-radius:3px;
  border-radius: 60px;
}
</style>


<div class="header">
  <div class="sides">
     <a href="c_t_depositos.php" class="boton">Depositos</a>
     <a href="c_t_retiros.php" class="boton">Retiros</a>
     <a href="c_t_oportunidades.php" class="boton">Oportunidades</a>
     <a href="c_t_inversiones.php" class="boton">Mis inversiones</a>
  </div>

  <div class="sides1" align="right"> 
    <a href="login.php" class="author"></a>
    <br>
     <a><?php /* echo $_SESSION['username']; */ echo 'Saldo 0$'?></a>
     <br>
     <a><?php /* echo $_SESSION['username']; */ echo 'Rendimiento 0$'?></a>
  </div>
</div>
<?php
/*
}else{
  echo "INICIA SESIÓN PARA PODER ACCEDER";
   header('Location: login.php');
   */
?>


<?php 
/*
}
*/
?>

