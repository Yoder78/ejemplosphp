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
        
        <li><a href="crud.php">CRUD</a>
          
        </li>
        <li><a href="suma.php">SUMA</a></li>
        <li><a href="multiplicacion.html">MULTIPLICACIÒN</a></li>
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
        <h2>LA MULTIPLICACION DE DOS NUMEROS</h1>
                <section class="">
                    <form  action="suma.php" method="POST">
                        <div id= "main-container">
                    <table>
                    <tr>
                        <td class="nun1"><input type="text" name="numero1"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="numero2"></td>
                    </tr>
                    <tr>
                        <td> <input type="submit" value="sumar"> </td>
                    </tr>
                </table>  
                </div>  
                </form>
                <?php
                if($_POST)
                {	
                    $num1 = $_POST
                    ['numero1'];
                    $num2 = $_POST
                    ['numero2'];
                    $multiplicacion = $num1 
                    * $num2;
                    echo "La multiplicacion de ".$num1." y ".$num2." es ".$multiplicacion; 
                }
            ?>
      </section>

    </section>
    <footer>Este sitio fue creado por Yoder A.
    <p>Barrio San Cayetano bajo Calle Venecia y Bucaret</p>
</footer>    
</body>
</html>