@extends('layouts.master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <title>Concesionario Vehicular</title>
</head>
<body>
    <div class="container">
        <section class="index">
            {{-- <header>
                <div>
                    <a href="#">Concesionario Vehicular</a>
                    <!-- hamburguesa -->
                    <!-- ul>li>a -->
                    <!-- esto permite crear una lista completa como atajo -->
                    <ul>
                        <li><a href="index.html">Inicio</a></li>
                        <li><a href="nosotros.html">Acerca De</a></li>
                        <li><a href="catalogo.html">Catalogo</a></li>
                        <li><a href="inicio.html">Iniciar Sesion</a></li>
                    </ul>
                </div>
            </header> --}}

            <!-- Enterprise -->
            <section class="ent">
                <picture>
                    <img src="/img/imagenconcesionario.jpg" alt="">
                </picture>
                <div>
                    <h2>Acerca de nosotros</h2>
                    <h4>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo quasi, deserunt repellendus animi error ex est odio dolor, officiis facilis inventore architecto alias nesciunt voluptates ut qui, natus tempore eveniet!</h4>
                </div>
            </section>
            <!-- Cards -->
            <section class="prods">
                <div class="card">
                    <!-- fontawesome icon -->
                    <!-- <img src="/img/car-side-solid.svg" alt=""> -->
                    <div>
                        <img class="img2" src="/img/test2.png" alt="">
                    </div>
                    <h3>Test Drive</h3>
                    <p>Puedes realizar una preueba de manejo garantizada sin ningun compromiso para mayor conformidad antes de adquirir tu primer lorem ipsum.</p>
                    <button class="button">Prueba de manejo</button>
                </div>
                <div class="card">
                    <!-- fontawesome icon -->
                    <div>
                        <img class="img2" src="/img/cotizar.png" alt="">
                    </div>
                    <h3>Cotizar</h3>
                    <p>En esta ventana podras realizar una cotizacion de tu lorem ipsum personalizado a tu gusto y con preferencias unicas y calcular toda la cotizacion total del lorem ipsum</p>
                    <button class="button">Cotizacion</button>
                </div>
                <div class="card">
                    <!-- fontawesome icon -->
                    <div>
                        <img class="img2" src="/img/accesorios.png" alt="">
                    </div>
                    <h3>Accesorios</h3>
                    <p>En esta ventana podras buscar todo tipo de accesorios de lorem ipsum tanto repuesto o piezas orginales para tu lorem ipsum y podras cotizar el precio total del repuesto.</p>
                    <button class="button">Buscar Accesorios</button>
                </div>
                <div class="card">
                    <!-- fontawesome icon -->
                    <div>
                        <img class="img2" src="/img/contactanos3.jpeg" alt="">
                    </div>
                    <h3>Configurar</h3>
                    <p>Aqui en esta ventana podras configurar todo acerca de tu primer lorem ipsum tanto las piezas como los complementos de tu primer lorem ipsum a la par podras cotizarlo el precio total del lorem ipsum una vez configurado tu primer lorem ipsum</p>
                    <button class="button">Configurar</button>
                </div>
            </section>
        </section>
        {{-- <footer>Angel Arancibia &copy; 2022</footer> --}}
    </div>
</body>
</html>
