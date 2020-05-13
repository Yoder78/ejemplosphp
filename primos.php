
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
    <title>INICIO</title>
</head>
<body>
    <header>
    <img id= "logo" src="imagenes/logo1.png" alt="">
    <div class="header">
      <ul class="nav">
        <li><a href="index.php">INICIO</a></li>

        <li><a href="">SERIES</a>
          <ul>
            <li><a href="primos.php">PRIMOS</a></li>
            <li><a href="fibonaci.php">FIBONACI</a></li>
          </ul>
        </li>
        
        <li><a href="">SERVICIOS ESPECIALIZADOS</a>
          <ul>
            <li><a href="tabla.html">ATENCIÓN PAPELERIA</a></li>
            <li><a href="">ATENCIÓN A OFICINAS</a></li>
          </ul>
        </li>
        <li><a href="">NOTICIAS</a></li>
        <li><a href="contactos.html">CONTACTOS</a></li>
      </ul>
    </div>
    </header>
    <div class="slinder">
    <ul>
      <li><img src="imagenes/php1.png" alt=""></li>
      <li><img src="imagenes/php2.png" alt=""></li>
      <li><img src="imagenes/php3.png" alt=""></li>
      <li><img src="imagenes/php4.png" alt=""></li>
      <li><img src="imagenes/php5.png" alt=""></li>
      <li><img src="imagenes/php6.png" alt=""></li>
      <li><img src="imagenes/php7.png" alt=""></li>
     
      <li><img src="img/6banner.jpg" alt=""></li>
    </ul>
  </div>
  <section id="contenedor">
    <section id="contenido">
      <h2>NUMEROS PRIMOS</h1>
      <section class="numeros">
        <?php
          $n1 = 1; 
          $n2 = 20;
          print 'Números primos del ';print $n1; print ' al '; print $n2."<br>";
          for ($i = $n1; $i <= $n2; $i++)
          {
          $nDiv = 0; // Número de divisores
          for ($n = 1; $n <= $i; $n++) // Desde 1 hasta el valor que tenga $i
          {
          if($i%$n == 0) // $n es un divisor de $i
          {
          $nDiv = $nDiv + 1; // Agregamos un divisor mas.
          }
          }
          if($nDiv == 2 or $i == 1)// Si tiene 2 divisores ó es 1 --> Es primo
          {
          print ',';
          print $i;
          }
          }
        ?>
      </section>

    </section>
    <footer>Este sitio fue creado por Yoder A.
    <p>Barrio San Cayetano bajo Calle Venecia y Bucaret</p>
</footer>    
</body>
</html>

















