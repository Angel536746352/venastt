<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link href="css/productoshombre.css" rel="stylesheet" type="text/css">
</head>
<body>
<header>
        <nav class="navbar">
            <div class="logo">
                <h1 class="hlogo">Accesorios Masculinos</h1>
            </div>
            <ul class="menu">
              <li><a href="menuhombre.php">Inicio</a></li>
                <li><a href="cadenashombre.php">Cadenas</a></li>
                <li><a href="pulserashombre.php">Pulseras</a></li>
                <li><a href="anilloshombre.php">Anillos</a></li>
                <li><a href="relojeshombre.php">Relojes</a></li>
                <li><a href="accesorioscompartidoshombre.php">Accesorios para compartir</a></li>
                <li><a href="ayuda.php">Ayuda</a></li>
            </ul>

        </nav>
    </header>
        <h1>Catálogo de Accesorios compartidos</h1>
        <p><center>¡Descubre nuestras piezas únicas y exclusivas en acessorios compartidos!</center></p>
    
    <h3><center><strong>Anillos</strong></center></h3>
    <section class="catalog">
     <div class="product">
            <img src="imagenes/anillosdecompromiso.jpg" alt="Pulsera de Corazón">
            <h2>Anillos de compromiso</h2>
            <p></p>
            <span class="price">Lps.2,420</span>
        </div>
     <div class="product">
            <img src="imagenes/anillosdepromesa.jpg" alt="Pulsera de Corazón">
            <h2>Anillos de promesa</h2>
            <p></p>
            <span class="price">Lps.2,000</span>
        </div>
        <div class="product">
            <img src="imagenes/anillosdecompromisooro.jpg" alt="Pulsera de Corazón">
            <h2>Anillos de compromiso de oro</h2>
            <p></p>
            <span class="price">Lps.2,800</span>
        </div><div class="product">
            <img src="imagenes/anillosdebodaoro.jpg" alt="Pulsera de Corazón">
            <h2>Anillos de boda</h2>
            <p></p>
            <span class="price">Lps.2,800</span>
        </div>
   </section>
   <h3><center><strong>Collares</strong></center></h3>
   <section class="catalog">
   <div class="product">
            <img src="imagenes/collaresde3corazonpuzzle.jfif" alt="Pulsera de Corazón">
            <h2>Cadenas para 3 personas</h2>
            <p></p>
            <span class="price">Lps.390</span>
        </div>
        <div class="product">
            <img src="imagenes/collaresyingyangcomparit.jfif" alt="Pulsera de Corazón">
            <h2>Cadenas del ying y el yang</h2>
            <p></p>
            <span class="price">Lps.260</span>
        </div>
<div class="product">
            <img src="imagenes/collaresbestfriend.jfif" alt="Pulsera de Corazón">
            <h2>Cadenas de mejores amigos</h2>
            <p></p>
            <span class="price">Lps.240</span>
        </div>
        <div class="product">
            <img src="imagenes/cadenasdeaguacate.jpg" alt="Pulsera de Corazón">
            <h2>Cadenas de aguacate</h2>
            <p></p>
            <span class="price">Lps.250</span>
        </div>
        <div class="product">
            <img src="imagenes/collaredecuarzo.jfif" alt="Pulsera de Corazón">
            <h2>Collares de cuarzo</h2>
            <p></p>
            <span class="price">Lps.230</span>
        </div>
        <div class="product">
            <img src="imagenes/collaresdepinchinguitos.jfif" alt="Pulsera de Corazón">
            <h2>Cadenas de corazón</h2>
            <p></p>
            <span class="price">Lps.250</span>
        </div>
        <div class="product">
            <img src="imagenes/cadenasdemariposa.jfif" alt="Pulsera de Corazón">
            <h2>Cadenas de mariposa</h2>
            <p></p>
            <span class="price">Lps.270</span>
        </div>
        <div class="product">
            <img src="imagenes/cadenasbff3.jfif" alt="Pulsera de Corazón">
            <h2>Cadenas de Best Friends para 3</h2>
            <p></p>
            <span class="price">Lps.400</span>
        </div>
        <div class="product">
            <img src="imagenes/cadenasdefantasmitas.jpg" alt="Pulsera de Corazón">
            <h2>Cadenas de fantasmitas</h2>
            <p></p>
            <span class="price">Lps.270</span>
        </div>
        <div class="product">
            <img src="imagenes/collaresgamers.jpg" alt="Pulsera de Corazón">
            <h2>Collares Gamers</h2>
            <p></p>
            <span class="price">Lps.290</span>
        </div>
    </section>
    <div class="container">
    <div class="selection">
            <button id="option1" class="btn">Siguiente Página</button>
        </div>
    </div>

    <form id="form1" action="accesorioscompartidos2hombre.php" method="post" style="display: none;">
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
