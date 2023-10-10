<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "concesionaria";

// Crear una conexión
$conn = mysqli_connect($servername, $username, $password, $database);

// Verificar la conexión
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aventuris</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">


</head>

<body>
    <header>

        <div id="menu-bar" class="fas fa-bars"></div>
        <a href="#" class="logo"><span>B</span>rum <span>B</span>rum</a></a>

        <nav class="navbar">
            <a href="index.html">Inicio</a>
            <a href="reservaciones.html">Reservaciones</a>
            <a href="Destinos.html">Catalogo</a>
            <a href="Recomendaciones.html">Recomendaciones</a>
            <a href="Gastronomia.html">Sucursales</a>
            <a href="contacto.html">Contacto</a>
        </nav>

        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <i class="fas fa-user" id="login-btn"></i>
        </div>

        <form action="" class="search-bar-conteiner">
            <input type="search" id="search-bar" placeholder="Buscar...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>
    </header>

    <div class="login-form-conteiner">
        <i class="fas fa-times" id="form-close"></i>
        <form action="registro.php" method="post">
            <h3>REGISTRARME</h3>
            <input type="usuario" name="usuario" class="box" placeholder="Introduce tu nombre de usuario">
            <input type="email" name="email" class="box" placeholder="Introduce tu correo electrónico">
            <input type="password" name="contrasena" class="box" placeholder="Introduce tu contraseña">
            <input type="submit" name="registrar" value="Registrarte ahora" class="btn">
            <input type="checkbox" id="recordar">
        </form>
        

    </div>

    <section class="home" id="home">

        <div class="content">
            <h3>Encuentra Tu Camino</h3>
            <p>Explora, Compra y Conduce con Nosotros</p>
        </div>

        <div class="controls">
            <span class="vid-btn active" data-src="img/nevada-29314.mp4"></span>
            <span class="vid-btn" data-src="img/nuevo2.mp4"></span>
            <span class="vid-btn" data-src="img/cascada-126442.mp4"></span>
            <span class="vid-btn" data-src="img/nuevo.mp4"></span>
            <span class="vid-btn" data-src="img/planta.mp4"></span>
        </div>

        <div class="video-conteiner">
            <video src="img/nevada-29314.mp4" id="video-slide" loop autoplay muted></video>
        </div>

    </section>



    <section class="services" id="services">

        <h1 class="heading">
            <span>S</span>
            <span>E</span>
            <span>R</span>
            <span>V</span>
            <span>I</span>
            <span>C</span>
            <span>I</span>
            <span>O</span>
            <span>S</span>
        </h1>

        <div class="box-conteiner">

            <div class="box">
                <i class="fas fa-dollar-sign"></i>
                <h3>Solicitud de Cotización</h3>
                <p></p>
            </div>

            <div class="box">
                <i class="fas fa-car"></i>
                <h3>Ventas</h3>
                <p></p>
            </div>

            <div class="box">
                <i class="fas fa-lightbulb"></i>
                <h3>Asesoramiento</h3>
                <p></p>
            </div>

        </div>

    </section>

    <section class="gallery" id="gallery">

        <h1 class="heading">
            <span>g</span>
            <span>a</span>
            <span>l</span>
            <span>e</span>
            <span>r</span>
            <span>i</span>
            <span>a</span>
        </h1>

        <div class="box-conteiner">

            <div class="box">
                <img src="img/galery1.jpeg" alt="">
                <div class="content">

                    <p>Ambiente relajante y exótico, con la presencia de palmeras típicas de las zonas tropicales y una
                        piscina que puede ofrecer un lugar refrescante para nadar y relajarse. La casa con forma de
                        triángulo puede ser única y llamativa en su diseño, y la iluminación resalta los detalles y crea
                        una atmósfera agradable.</p>

                </div>
            </div>
            <div class="box">
                <img src="img/galery3.jpeg" alt="">
                <div class="content">

                    <p>a imagen muestra un hospedaje bien amoblado y espacioso, ubicado cerca del mar. Alrededor de la
                        casa se puede apreciar agua, lo que sugiere que puede estar situada en una costa o en una isla
                    </p>


                </div>
            </div>
            <div class="box">
                <img src="img/galery4.jpeg" alt="">
                <div class="content">

                    <p> piscina rodeada de un quincho y reposeras. También mencionas la presencia de un jacuzzi. El
                        paisaje de fondo se describe como "muy lindo", lo que sugiere que puede haber elementos
                        naturales como montañas, bosques, un lago o el mar </p>

                </div>
            </div>
            <div class="box">
                <img src="img/galery5.jpeg" alt="">
                <div class="content">

                    <p>amplio espacio donde se pueden encontrar áreas para sentarse y posiblemente disfrutar de
                        actividades al aire libre, como hacer fogatas, La posibilidad de hacer fogatas sugiere un
                        ambiente acogedor y la oportunidad de socializar alrededor del fuego.</p>

                </div>
            </div>
            <div class="box">
                <img src="img/galery6.jpeg" alt="">
                <div class="content">
                    <p>Las cabañas probablemente están diseñadas para ofrecer un alojamiento acogedor y brindar a los
                        visitantes la oportunidad de disfrutar de las vistas y actividades relacionadas con el mar. El
                        entorno con agua cristalina sugiere un ambiente propicio para actividades como nadar, bucear o
                        simplemente relajarse en la playa.</p>

                </div>
            </div>
            <div class="box">
                <img src="img/galery7.jpeg" alt="">
                <div class="content">

                    <p>El uso de madera en la decoración de la cabaña brinda un ambiente cálido y rústico. La vista al
                        mar desde la habitación agrega un elemento de belleza natural y tranquilidad, brindando a los
                        huéspedes la oportunidad de disfrutar de paisajes impresionantes desde la comodidad de su
                        habitación.</p>

                </div>
            </div>
            <div class="box">
                <img src="img/galery8.jpeg" alt="">
                <div class="content">

                    <p>Cuenta con una cocina comedor donde todos los huéspedes pueden acceder para disfrutar de comidas
                        en cualquier momento del día: mañana, tarde o noche. La cocina comedor está disponible las 24
                        horas del día, lo que significa que los huéspedes pueden disfrutar de comidas y bebidas en
                        cualquier momento que deseen.</p>

                </div>
            </div>
            <div class="box">
                <img src="img/galery9.jpeg" alt="">
                <div class="content">

                    <p>El mobiliario está cuidadosamente seleccionado para garantizar la comodidad de los huéspedes.
                        Puede incluir sofás y sillas acogedoras, mesas auxiliares y posiblemente áreas de descanso al
                        aire libre para disfrutar de la vista panorámica.</p>
                </div>
            </div>
            <div class="box">
                <img src="img/galery10.jpg" alt="">
                <div class="content">

                    <p>sector de discoteca en uno de los hoteles. Este sector está diseñado para proporcionar
                        entretenimiento nocturno a los huéspedes. Puede incluir una pista de baile, luces de colores,
                        sistemas de sonido y una barra donde los huéspedes pueden disfrutar de una amplia variedad de
                        bebidas y cócteles.</p>

                </div>
            </div>


        </div>

    </section>

    <section class="brand-conteiner" id="brand">

        <div class="swiper-conteiner brand-slide">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="img/f1.png" alt=""></div>
                <div class="swiper-slide"><img src="img/f2.png" alt=""></div>
                <div class="swiper-slide"><img src="img/f3.png" alt=""></div>
                <div class="swiper-slide"><img src="img/f4.png" alt=""></div>
                <div class="swiper-slide"><img src="img/f1.png" alt=""></div>
                <div class="swiper-slide"><img src="img/f2.png" alt=""></div>
                <div class="swiper-slide"><img src="img/f3.png" alt=""></div>
            </div>
        </div>

    </section>

    <section class="footer">

        <div class="box-conteiner">
            <div class="box">
                <h3>Sobre Nosotros</h3>
                <p>En BRUM BRUM, nos apasiona ofrecerte una experiencia única en la adquisición de automóviles. Nos especializamos en la venta de automóviles de lujo y gama media, tanto nuevos como usados, brindando una gama diversa de opciones para satisfacer tus necesidades y deseos automovilísticos.</p>
            </div>
     
            <div class="box">
                <h3>Siganos</h3>
                <a href="https://www.facebook.com/profile.php?id=100093068226026&mibextid=ZbWKwL">facebook</a>
                <a href="https://instagram.com/aventuris_?igshid=MzRlODBiNWFlZA==">Instagram</a>

            </div>
        </div>


    </section>


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>