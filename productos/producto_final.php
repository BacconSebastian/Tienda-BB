<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Blonde</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
</head>

<body>
    <div class="busqueda_desplegada">
        <input type="text" placeholder="Buscá productos, kits, y más...">
        <i onclick="desplegar()" class="fa-solid fa-xmark"></i>
    </div>

    <header class="individual">
        <a href="index.php"><h1>Beauty Blonde</h1></a>
        <button onclick="desplegar()" class="busqueda">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </header>

    <div class="corrector_header"></div>

    <nav class="nav">
        <a href="../index.php" style="border-bottom: 2px solid #CCAC5C;">INICIO</a>
        <a href="../productos.php">PRODUCTOS</a>
        <a href="carrito.php">CARRITO <span id="productos_carrito">0</span></a>
    </nav>

    <div class="corrector_nav"></div>

    <article class="producto_final">
        <div class="encuadrar">
            <div class="info_producto">
                <h2>OLAPLEX PASO 0</h2>
                <img src="https://d3ugyf2ht6aenh.cloudfront.net/stores/001/040/907/products/03a1-44f2298c291bd92db116467766842076-320-0.jpg">
                <p class="precio">$8600</p>
                <p class="cuotas"><span>3</span> cuotas sin interes</p>
            </div>
            <div class="botones">
                <button class="btn">COMPRAR AHORA</button>
                <button class="btn">AGREGAR AL CARRITO</button>
            </div>
        </div>
    </article>

    <footer>
        <h3>REDES SOCIALES</h3>

        <div class="iconos_footer">
            <a target="_blank" href="https://instagram.com/beautyblonde.estilistas"><i class="fa-brands fa-instagram"></i></a>
            <a target="_blank" href="https://www.facebook.com/beautyblonde.estilistas/"><i class="fa-brands fa-facebook-square"></i></a>
            <a target="_blank" href="mailto:beautyblonde.estilista@gmail.com"><i class="fa-solid fa-envelope"></i></a>
        </div>

        <h4>CONTACTANOS</h4>

        <div class="contactos_footer">
            <a target="_blank" href=" https://wa.me/+541165519116">1165519116</a>
            <a target="_blank" href="mailto:beautyblonde.estilista@gmail.com">beautyblonde.estilista@gmail.com</a>
            <a id="direccion_web" target="_blank" href="https://www.google.com.ar/maps/place/Av.+San+Miguel+302,+B1663+San+Miguel,+Provincia+de+Buenos+Aires/@-34.5344316,-58.7073484,17z/data=!3m1!4b1!4m5!3m4!1s0x95bcbd173b2df605:0x93d3b3f18ffacdf1!8m2!3d-34.534436!4d-58.7051597"><p>San Miguel 302</p></a>
        </div>

        <a id="direccion" target="_blank" href="https://www.google.com.ar/maps/place/Av.+San+Miguel+302,+B1663+San+Miguel,+Provincia+de+Buenos+Aires/@-34.5344316,-58.7073484,17z/data=!3m1!4b1!4m5!3m4!1s0x95bcbd173b2df605:0x93d3b3f18ffacdf1!8m2!3d-34.534436!4d-58.7051597"><p>San Miguel 302</p></a>
    </footer>

    <script src="js/scripts.js"></script>
    <script src="https://kit.fontawesome.com/a04c61e21b.js" crossorigin="anonymous"></script>

</body>
</html>