<?php include('cabeza.php');?>
<section>
<h2>Asignaturas</h2>
<?php
$asignaturas = array_map('str_getcsv', file('url'));
array_walk($asignaturas, function(&$a) use ($asignaturas) {$a = array_combine($asignaturas[0], $a);});
array_shift($asignaturas);
?>
<h4>1. Total de créditos para taller y otras asignaturas por nivel de estudio</h4>
<p>Reemplace este párrafo con una tabla que presente los datos correspondientes. La tabla debe ser generada mediante consulta a documento CSV o JSON, con PHP (1 pto.)</p>

<img src="images/RAMOS.png" class="img-responsive">


<h4>2. Relación de créditos y costos</h4>
<p>Reemplace este párrafo con una tabla que relacione los costos de arancel y las cantidades de créditos en cada nivel; de esta manera obtendrá el precio de "un crédito" (1 pto.)</p>
3.698.700/60=61645

<h5>2.1. Los "costos" de las asignaturas en primer año (plan común):</h5>

<img src="images/costosprimer.png" class="img-responsive">
<br>
<h5>2.2. Los "costos" de las asignaturas en mención de diseño gráfico:</h5>

<img src="images/COSTOS_MENCIONDIS.png" class="img-responsive">

<h5>2.3. Los "costos" de las asignaturas en mención de diseño industrial:</h5>

<img src="images/COSTOS_MENCIONDISENIOINDUSTRIAL.png" class="img-responsive">

<h4>3. Propongan una visualización</h4>
<p>Reemplace este párrafo por la tabla que corresponda (1pt.)</p>
<p>Reemplace este párrafo por la visualización que corresponda (1pt.)</p>

</section>
<?php include('pie.php');?>
