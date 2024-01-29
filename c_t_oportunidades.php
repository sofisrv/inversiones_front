<?php
/*
header('Content-Type: text/html; charset=utf-8');  
@ob_start();
require_once('crud_video.php');
require_once('clase_video.php');
$crud=new Crudvideo();
$videos= new Video();
$listaVideos=$crud->mostrarvideos($_GET['id_curso']);
$id=$_GET['id_curso'];    
include("conexion.php");
include ('bucket.php');
include ('puedevercurso.php');
if($puedever!=1){ 
header('Location: np.php');
 }else{
*/
?>

<!DOCTYPE html>
<html>
<head>
    <link  rel="icon" href="logos/logo.png" type="image/png"/>
<title>Oportunidades</title>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="style.css">
<style>
html,body{
    height:100%;
  width: 100%;
  font-family: 'Josefin Sans', sans-serif;

}
* {
  box-sizing: border-box;
}
.ver1{
  display:inline-block;
  width: 100%;
  height: auto;
  border-radius:10%;
  background:center no-repeat;
  background-size:cover;
  box-shadow:0 2px 3px rgba(0,0,0,0.3);
  margin-bottom:3px 
}
</style>
<body oncontextmenu="return false" onkeydown="return false">
  <?php
  include("navegacioncliente.php");
  ?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="filtros">
  <?php
  /*
  $query = $mysqli -> query ("SELECT * FROM curso WHERE id_curso= $id");
  while ($valores = mysqli_fetch_array($query)) {
    $n=$valores['nombre'];
  }
  */
?>
 
<input type="text" id="filtro1" onkeyup="myFunction()" placeholder="Buscar oportunidad por nombre" title="Buscar oportunidad por nombre">
</div>
  <table id="myTable">
        <tr id="t1" class="w3-teal">
          <th style="width:12.5%;"><h4>Oportunidad</h4></th>
          <th style="width:25%;"><h4>Descripción</h4></th>
          <th style="width:12.5%;"><h4>Monto Minimo</h4></th>
          <th style="width:12.5%;"><h4>Monto Máximo</h4></th>
          <th style="width:12.5%;"><h4>Rendimiento</h4></th>
          <th style="width:12.5%;"><h4>Plazo</h4></th>
          <th style="width:12.5%;"><h4></h4></th>
        </tr>
        <tbody>
          <?php /*foreach ($listaVideos as $videos) {?>
            <?php 
                  $id_video = $videos->getid_video();
                  $titulo= $videos->gettitulo(); 
                  $video= $videos->getvideo(); 
                  $f_a= $videos->getf_a(); 
                  $id_curso= $videos->getid_curso(); 
                  $keyname = $centro.'/'.$video;
                  $URL = 'https://s3.us-east-2.amazonaws.com/' . $bucketName . '/' . $keyname;
            */
            ?>
              <tr>
                <td><b><?php /*echo $nombre?></b><br><?php echo $descripcion*/?></td>
                <td><b><?php /*echo $nombre?></b><br><?php echo $descripcion*/?></td>
                <td><b><?php /*echo $nombre?></b><br><?php echo $descripcion*/?></td>
                <td><b><?php /*echo $nombre?></b><br><?php echo $descripcion*/?></td>
                <td><b></td>
              </tr>
              <?php /*}*/?>
            </tbody>
        </tbody>
        </table>
      </div>
    </div>
</body>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("filtro1");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</html>
<?php
/*
}
*/?>