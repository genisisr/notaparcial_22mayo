<?php include('cabeza.php');?>
<section>
<h2>Estudiantes</h2>


<?php
$estudiantes = array_map('str_getcsv', file('estudiantes.csv'));
array_walk($estudiantes, function(&$a) use ($estudiantes) {$a = array_combine($estudiantes[0], $a);});
array_shift($estudiantes);
$all = count($estudiantes);
?>

<h4>1. Total de estudiantes matriculados en la carrera</h4>

<table class="table table-condensed">
  <tr>
    <th>Año</th>
    <th>Estudiantes matriculados</th>
  </tr>
<?php for($a=0; $a < $all; $a++){?>
  <tr>
    <td><?php echo$estudiantes[$a]["year"]?></td>
    <td><?php echo$estudiantes[$a]["total_matricula"]?></td>
  </tr>
<?php };?>
</table>



<br>
<h4>Cantidad de matriculados por año <h4>
<br>
<img src="images/matriculas.png" class="img-responsive">


<h4>2. Establecimientos educacionales de procedencia de los estudiantes que ingresan al primer año:</h4>

<table class="table table-condensed">
  <tr>
    <th>Año</th>
    <th>Ingreso total</th>
    <th>Establecimiento Municipal</th>
    <th>Establecimiento Subvencionado</th>
    <th>Establecimiento Particular</th>
  </tr>
<?php for($b=0; $b < $all; $b++){?>
  <tr>
    <td><?php echo$estudiantes[$b]["year"]?></td>
    <td><?php echo$estudiantes[$b]["total_ingreso"]?></td>
    <td><?php echo$estudiantes[$b]["ingreso_municipal"]?></td>
    <td><?php echo$estudiantes[$b]["ingreso_subvencionado"]?></td>
    <td><?php echo$estudiantes[$b]["ingreso_particular"]?></td>
  </tr>
<?php };?>
</table>


<h4><b style="color:#bf6969;">particular</b>, <b style="color:#69bfbf;">subvencionado</b>, <b style="color:#9469bf;">municipal</b> e <b style="color:#94bf69;">ingreso especial</b><h4>
<img src="images/colegios.png" class="img-responsive">
<br>

<h4>3. Edad, género y procedencia regional de los estudiantes que ingresaron a primer año en 2015:</h4>

<table class="table table-condensed">
  <tr>
    <th>Año</th>
    <th>Ingreso total</th>
    <th>Mujeres</th>
    <th>Hombres</th>
    <th>Menores de 18 años</th>
    <th>Entre 18 y 21 años</th>
    <th>Entre 21 y 25 años</th>
    <th>Mayores de 25 años</th>
    <th>Región Metropolitana</th>
    <th>Otras regiones</th>
</tr>
<?php for($c=0; $c < $all; $c++){?>
  <tr>
    <td><?php echo$estudiantes[$c]["year"]?></td>
    <td><?php echo$estudiantes[$c]["total_ingreso"]?></td>
    <td><?php echo$estudiantes[$c]["ingreso_total_mujeres"]?></td>
    <td><?php echo$estudiantes[$c]["ingreso_total_hombres"]?></td>
    <td><?php echo$estudiantes[$c]["ingreso_total_menores_18"]?></td>
    <td><?php echo$estudiantes[$c]["ingreso_total_18_21"]?></td>
    <td><?php echo$estudiantes[$c]["ingreso_total_21_25"]?></td>
    <td><?php echo$estudiantes[$c]["ingreso_total_mayores_25"]?></td>
    <td><?php echo$estudiantes[$c]["ingreso_total_metropolitana"]?></td>
    <td><?php echo$estudiantes[$c]["ingreso_total_regiones"]?></td>
  </tr>
<?php };?>
</table>

<br>
<h4>Gráfico correspondiente a la distribución según género de un total de 144 estudiantes <b style="color:#69bfbf;">hombres</b>  <b style="color:#bf6969;">mujeres</b><h4>
<img src="images/genero.png" class="img-responsive">

<h4>Estudiantes que corresponden a la <b style="color:#40c9a9;">región metropolitana</b> y de <b style="color:#bf699d;">otras regiones</b>
<br>
<br>
<img src="images/ubicacion.png" class="img-responsive"><h4>

<h4>La distribución etárea de los estudiantes corresponde a los siguientes intervalos: <b style="color:#bf6969;">menores de 18 años</b>, <b style="color:#94bf69;">entre 18 y 21 años</b>, <b style="color:#69bfbf;">entre 21 y 25 años</b> y <b style="color:#9469bf;">mayores de 25 años</b>.
<br>
<br><img src="images/edades.png" class="img-responsive"><h4>
<br>

<h4>4. Puntajes de ingreso</h4>

<table class="table table-condensed">
  <tr>
    <th>Año</th>
    <th>Menor Puntaje</th>
    <th>Mayor Puntaje</th>
</tr>
<?php for($d=0; $d < $all; $d++){?>
  <tr>
    <td><?php echo$estudiantes[$d]["year"]?></td>
    <td>Este dato no está agregado</td>
    <td>Este dato no está agregado</td>
  </tr>
<?php };?>
</table>

<br>
<b style="color:#77aee0;">puntaje máximo</b> y <b style="color:#dbcb91;">puntaje mínimo</b>
<img src="images/puntajes.png" class="img-responsive">
<br>


</section>
<?php include('pie.php');?>
