<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Joyeria Rashti</title>
<link href="css/pulserasmujer.css" rel="stylesheet" type="text/css">
</head>
<body>
 <header>
        <nav class="navbar">
            <div class="logo">
                <h1 class="hlogo">Accesorios Femeninos</h1>
            </div>
            <ul class="menu">
                <li><a href="menumujer.php">Inicio</a></li>
                <li><a href="collaresf.php">Collares y gargantillas</a></li>
                <li><a href="pulserasmujer.php">Pulseras</a></li>
                <li><a href="anillosf.php">Anillos</a></li>
                <li><a href="relojes.php">Relojes</a></li>
                <li><a href="aritos.php">Aritos y Argollas</a></li>
                <li><a href="accesorioscompartidos.php">Accesorios para compartir</a></li>
                <li><a href="ayudamujer.php">Ayuda</a></li>
            </ul>
        </nav>
    </header>
        <h1>Catálogo de Anillos</h1>
        <p><center>¡Descubre nuestras piezas únicas y exclusivas en anillos!</center></p>
    <h3><center><strong>Anillos de perlas</strong></center></h3>
    <section class="catalog">
    <div class="product">
            <img src="imagenes/anilloperlas.jpg" alt="Pulsera de perlas con cristal">
            <h2>Anillo de perlas</h2>
            <p></p>
            <span class="price">Lps.60</span>
            </div>
            <div class="product">
            <img src="imagenes/anillodeflorperl.jpg" alt="Pulsera de perlas con cristal">
            <h2>Anillo con flor</h2>
            <p></p>
            <span class="price">Lps.80</span>
            </div>
            <div class="product">
            <img src="imagenes/anillodelazoperl.jfif" alt="Pulsera de perlas con cristal">
            <h2>Anillo de lazo</h2>
            <p></p>
            <span class="price">Lps.85</span>
            </div>
            <div class="product">
            <img src="imagenes/anilloarcoiris.jpg" alt="Pulsera de perlas con cristal">
            <h2>Anillo de arcoiris</h2>
            <p></p>
            <span class="price">Lps.60</span>
            </div>
            <div class="product">
            <img src="imagenes/anilloestrella.jpg" alt="Pulsera de perlas con cristal">
            <h2>Anillo de estrella</h2>
            <p></p>
            <span class="price">Lps.80</span>
            </div>
            <div class="product">
            <img src="imagenes/anillocorazonblanco.jfif" alt="Pulsera de perlas con cristal">
            <h2>Anillo de corazón</h2>
            <p></p>
            <span class="price">Lps.90</span>
            </div>
            <div class="product">
            <img src="imagenes/anillodecerza.jpg" alt="Pulsera de perlas con cristal">
            <h2>Anillo de cerezas</h2>
            <p></p>
            <span class="price">Lps.85</span>
            </div>
            <div class="product">
            <img src="imagenes/anilloconojo.jpg" alt="Pulsera de perlas con cristal">
            <h2>Anillo con ojo</h2>
            <p></p>
            <span class="price">Lps.70</span>
            </div>
            <div class="product">
            <img src="imagenes/anillosconinicial.jpg" alt="Pulsera de perlas con cristal">
            <h2>Anillo con inicial</h2>
            <p></p>
            <span class="price">Lps.90</span>
            </div>
   </section>
    <div class="container">
    <div class="selection">
            <button id="option1" class="btn">Página  anterior</button>
        </div>
    </div>

    <form id="form1" action="anillosf.php" method="post" style="display: none;">
        <input type="hidden" name="selectedOption" value="Opción 1">
        <input type="submit" value="Enviar Opción 1">
    </form>
    <script>
        document.getElementById('option1').addEventListener('click', function() {
            document.getElementById('form1').submit();
        });

            </script>
</body>
</html>
