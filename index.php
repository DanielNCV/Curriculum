<?php
$nombre = $_POST['fname'];
$nacim = $_POST['fnac'];
$tel = $_POST['conta'];
$ocupacion = $_POST['ocup'];
$nacion = $_POST['nacion'];
$prog = $_POST['prog'];
$aptitudes = $_POST['Apt'];

$ingles = $_POST['niv_ingl'];

$perfil = $_POST['Perfil'];

$habilidad1 ="";
$habilidad2 ="";
$habilidad3 ="";
$habilidad1 = (isset($_POST['habil1']))? $_POST['habil1']:"";
$habilidad2 = (isset($_POST['habil2']))? $_POST['habil2']:"";
$habilidad3 = (isset($_POST['habil3']))? $_POST['habil3']:"";


?>     
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link rel="php" href="index.php">
    <title>Curriculum Vitae</title>
</head>
<body>
    <div class="grid-container">
        <div class="grid-item1">
            <img src="guy-headshot-business_result.webp" class="imagen" alt="no"/>
        </div>
        <div class="grid-item2"><h1> <?php echo $nombre ?> </h1>
            <h2>PUESTO OCUPADO/BUSCADO<h2>     
        </div>
        <div class="grid-item3">
            <h3>CONTACTO</h3>
            <div class="linea"></div>
            <p> <?php echo $tel ?> 
             <br>Mexico DF <br>linkedin.com/jose-martinez
            </p>
            <h3>IDIOMAS</h3>
            <div class="linea"></div>
            <p>Español: Nativo <br> 
            Ingles: 
            <?php
                echo $ingles 
            ?>
            <br>Frances: Intermedio (B2)
            </p>

            <h3>APTITUDES</h3>
            <div class="linea"></div>
            <p> <?php echo $aptitudes ?>          
            </p>

            
            <h3>HABILIDADES</h3>
            <div class="linea"></div>
            <p>
                <?php 
                    echo "<ul>";
                        if($habilidad1)
                            echo "<li>$habilidad1 </li>";
                        if($habilidad2)
                            echo "<li>$habilidad2 </li>";
                        if($habilidad3)
                            echo "<li>$habilidad3 </li>";         
                    echo "</ul>"; 
                ?>
            </p>

            <h3>OTROS INTERESES</h3>
            <div class="linea"></div>
            <p>
                <ul>
                    <li>Creador de yincanas</li>
                    <li>Paseos ecológicos grupales</li>
                    <li>Lectura grupal en inglés</li>
                    <li>Tenis</li>
                </ul>
            </p>
        </div>
        <div class="grid-item4">
            <h3>PERFIL</h3>
            <div class="linea"></div>
                <p>  <?php echo $perfil ?>
                </p>
                <h3>EXPERIENCIA LABORAL</h3>
                <div class="linea"></div>
                <h4>Trabajador social</h4>
                <p><b><em>Mexico</em> DF, </b><div id="aaa">| 2022 - Actualmente</div>            
                    <ul>
                        <li>Coordinador y mediador entre los equipos de ayuda psicológica a jovenes y niños en exclusipon social</li>
                        <li>Velar por la salud mental del equipo y de miembros involucrados en proyectos</li>
                        <li>Mepeo de necesidades estratégicas y lógicas para las diferetnes áreas</li>
                        <li>Monitor de ejercicios físicos para adolescentes.</li>
                        <li>Programar diferentes actividades extracurriculares en los involucrados.</li>
                    </ul>
                </p>

                <h4>Trabajador social</h4>
                <p><b>Mexico DF, </b><div id="aaa">| 2020 - 2022</div>
                    <ul>
                        <li>Funciones para seguimientos de casos para jóvenes con problemas de adicciones</li>
                        <li>Capacitaciones e integración vinculadas a medidas preventivas</li>
                        <li>Recopilación de evidencias para auditorias y programas sociales.</li>
                    </ul>
                </p>  

                <h4>Trabajador social (Prácticas)</h4>
                <p><b><em>Zaragoza</em>, España</b><div id="aaa">| 2019 - 2020</div>
                    <ul>
                        <li>Profesor de lengua española e inglesa para jóvenes migrantes</li>
                        <li>Monitor de actividades ecológicas con adolescentes</li>
                        <li>Coordinador de áres deportivas</li>
                    </ul>
                </p>     
                
                <h3>FORMACION</h3>
                <div class="linea"></div>
                <h4>Grado de Trabajo Social</h4>
                <p><b><em>ESMA</em>, Madrid</b><div id="aaa">| 2012 - 2015</div>
                <h4>Licenciatura Profesional</h4>
                <p><b><em>Universidad</em> de la Frontera, México DF</b></p>
                <div id="aaa">| 2011 - 2012</div>
        </div>    
    </div>
</body>
</html>                    
