<!doctype html>
<html lang="es">
<head>
	<title>Surf Zurriola</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="main.css" />
	<link href="sliderstyle.css" type="text/css" rel="stylesheet">
</head>


<body>

<header id="top_header">
		<img class="logo" src="images/logo.gif" />

	<form id="logearse" action="login.php" method="post">
		<div>
			<label><font  color="silver"></font></label>
			<input type="text" name="username" placeholder="administrador"/>
		</div>
		<div>
			<label><font  color="silver"></font></label>
			<input type="password" name="password" placeholder="contraseña"/>
		</div>
		<div>
			<input type="submit" value="Log In" />
		</div>
	</form>
	<form id="registrarse" action="/registro" method="get">
		<div>
			<input type="submit" value="Registro" />
		</div>
	</form>
</header>

<nav>
<ul>
    <li><a title="Magazine" href="#">Magazine</a></li>
    <li><a title="Fotos" href="#">Fotos</a></li>
    <li><a title="Previsión de olas" href="#">Previsión</a></li>
    <li><a title="Mareas" href="#">Mareas</a></li>
    <li><a title="Surfología" href="#">Surfología</a></li>
    <li><a title="Surfología" href="#">Foro</a></li>
    <li><a title="Surfología" href="#">Redes sociales</a></li>
</ul>
</nav>
<section id="main_section">
<div id="slider"> 
        <input type="radio" id="control1" name="controls" checked="checked"/>
        <label for="control1"></label>
        <input type="radio" id="control2" name="controls"/>
        <label for="control2"></label>
        <input type="radio" id="control3" name="controls"/>
        <label for="control3"></label>
        <input type="radio" id="control4" name="controls"/>
        <label for="control4"></label>
        <input type="radio" id="control5" name="controls"/>
        <label for="control5"></label>
        <div id="sliderinner">
            <ul>
                <li>
                    <img src="images/argazkia1.jpg" width="640px" height="320px" />
                    <div class="description">
 
                        <div class="description-text">
                            <h2>Tubo de izquierdas</h2>
                            <p>Kelly Slater cogiendo una ola enroscada que rompe en ángulo contrario.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="images/argazkia2.jpg" width="640px" height="320px" />
                    <div class="description">

                        <div class="description-text">
                            <h2>Campeonato verano</h2>
                            <p>El campeon de verano Occiluppo cogiendo la ola ganadora.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="images/argazkia3.jpg" width="640px" height="320px" />
                    <div class="description">
  
                        <div class="description-text">
                            <h2>Temporal en San Sebastian</h2>
                            <p>Las olas rompiendo contra el espigón del Kursaal.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="images/argazkia4.jpg" width="640px" height="320px" />
                    <div class="description">
     
                        <div class="description-text">
                            <h2>Campus Zurriola</h2>
                            <p>Ven y animate a surfear apuntate en Surf Zurriola.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="images/argazkia5.jpg" width="640px" height="320px" />
                    <div class="description">

                        <div class="description-text">
                            <h2>Olas peligrosas</h2>
                            <p>Zurriola es una playa peligrosa por las corrientes de la mar.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div><!--slider-->
    <div id="video">
    	<video src="images/cavs2k15.mp4" height="310px" width="450px" controls static >
    	</video>
    </div>
   
</section>
</body>

</html>