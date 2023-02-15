<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="https://kit.fontawesome.com/4514d9060c.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css' />
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}" />
    <link rel="shortcut icon" href="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879526/img/favicon-kdl_eyyony.png" />
    <link rel="preload" href="{{ asset('front/css/style.css') }}" />
    <link rel="preload" href="{{ asset('front/js/script.js') }}" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>KLUANE | PERFORACIÓN</title>
</head>

<body>
    @include('Esp.componentes.menu')
    <!-- HEADER WEB -->
    <div class="d-none d-sm-none d-md-block">
        <div class="bg-drilling">
            <div class="container-fluid p-0">
                <div class="row p-0">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-7 p-0 box-drilling">
                        <div class="mx-3">
                            <div data-aos="fade-right" data-aos-delay="1000" data-aos-duration="800" class="bg-bco py-5">
                                <div class="mx-5 py-4">
                                    <h1 class="black txt-gris display-5">LOS MÁS ALTOS ESTANDÁRES</h1>
                                    <h1 class="black txt-azul display-3"> EN LA PERFORACIÓN</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-5"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- HEADER PHONE -->
    <div class="d-block d-sm-block d-md-none">
        <div class="bg-drilling-phone"></div>
        <div class="box-drilling-phone">
            <div class="bg-bco py-5 me-5">
                <div class="ms-5">
                    <h1 class="black txt-gris h3">LOS MÁS ALTOS ESTANDÁRES</h1>
                    <h1 class="black txt-azul display-3">DE PERFORACIÓN</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- HIGHS STANDARS, VERSATILE, CONTINUOS -->
    <div class="container-fluid py-5">
        <div class="row pt-5">
            <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-10 pt-5">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                        <div class="mx-4">
                            <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879524/img/high-standar_cfhrfn.png" alt="HIGH STANDARDS"
                                class="img-fluid mb-5" />
                            <div class="regular txt-gris txt-high-standards text-center">
                                <h1 class="txt-azul">SERVICIOS DE PERFORACIÓN</h1>
                                <h1 class="txt-azul black mb-4">CON CALIDAD</h1>
                                <div class="d-none d-sm-none d-md-block">
                                    <p class="h5">Nuestros servicios están enfocados</p>
                                    <p class="h5">en los <b class="bold">más altos estandáres de</b></p>
                                    <p class="h5"><b class="bold">calidad,</b> seguridad, cuidado del</p>
                                    <p class="h5">medio ambiente, y las buenas </p>
                                    <p class="h5">relaciones con la comunidad y están</p>
                                    <p class="h5">dirigidos a empresas <b class="bold">públicas</b></p>
                                    <p class="bold h5">y privadas del sector  minero.</p>
                                </div>
                                <div class="d-block d-sm-block d-md-none">
                                    <p class="h5">Nuestros servicios están enfocados 
                                        en los <b class="bold">más altos estandáres de</b> 
                                        <b class="bold">calidad,</b> seguridad, cuidado del 
                                        medio ambiente, y las buenas 
                                        relaciones con la comunidad y están
                                        dirigidos a empresas <b class="bold">públicas</b>
                                        y privadas del sector  minero.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                        <div class="mx-4">
                            <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879527/img/versatile_n40zh6.png" alt="VERSATILE AND"
                                class="img-fluid mb-5" />
                            <div class="regular txt-gris txt-versatile text-center">
                                <h1 class="txt-azul">PERFORADORAS</h1>
                                <h1 class="txt-azul black">VERSÁTILES</h1>
                                <h1 class="txt-azul black mb-4">Y LIGERAS</h1>
                                <div class="d-none d-sm-none d-md-block">
                                    <p class="h5">Nos especializamos en perforadoras</p>
                                    <p class="bold h5">versátiles, altamente portátiles y</p>
                                    <p class="h5"><b class="bold">ligeras; </b>para trabajar con</p>
                                    <p class="h5">la misma facilidad en cualquier </p>
                                    <p class="h5">tipo de proyecto, incluso en zonas</p>
                                    <p class="bold h5">remotas o montañosas.</p>
                                </div>
                                <div class="d-block d-sm-block d-md-none">
                                    <p class="h5">Nos especializamos en perforadoras
                                        <b class="bold">versátiles, altamente portátiles y  
                                            ligeras; </b>para trabajar con 
                                        la misma facilidad en cualquier 
                                        tipo de proyecto, incluso en zonas 
                                        <b class="bold">remotas o montañosas.</b> </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                        <div class="mx-4">
                            <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879523/img/continuos_cbsnjp.png" alt="CONTINUOUS" class="img-fluid mb-5" />
                            <div class="regular txt-gris txt-continuos text-center">
                                <h1 class="txt-azul">MEJORA</h1>
                                <h1 class="black txt-azul mb-4">CONTINUA</h1>
                                <div class="d-none d-sm-none d-md-block">
                                    <p class="h5">En <b class="bold">Kluane Drilling Ltd. </b></p>
                                    <p class="h5">trabajamos en conjunto con</p>
                                    <p class="h5">nuestros clientes y nuestro</p>
                                    <p class="h5">excelente equipo de trabajo,</p>
                                    <p class="h5">lo que hace posible trabajar en</p>
                                    <p class="h5">conjunto para brindar servicios</p>
                                    <p class="h5"><b class="bold"> de calidad</b> y por la mejora</p>
                                    <p class="bold h5">continua de nuestra organización.</p>
                                </div>
                                <div class="d-block d-sm-block d-md-none">
                                    <p class="h5">En <b class="bold">Kluane Drilling Ltd. </b> 
                                        trabajamos en conjunto con 
                                        nuestros clientes y nuestro
                                        excelente equipo de trabajo, 
                                        lo que hace posible trabajar en 
                                        conjunto para brindar servicios 
                                        <b class="bold"> de calidad</b> 
                                        y por la mejora<b class="bold"> continua de nuestra organización.</b>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
        </div>
    </div>
    <!-- IMAGEN TRABAJADOR -->
    <div class="d-none d-sm-none d-md-block">
        <div class="bg-drilling-middle">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4"></div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-8 pt-5">
                        <div class="bg-dirlling-azul-2 py-5">
                            <div class="cuadros">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                        <div class="bg-blanco-2 py-5">
                                            <div class="mx-5">
                                                <h3 class="regular txt-azul">INNOVACIÓN Y </h3>
                                                <h3 class="black txt-azul">TECNOLOGÍA</h3>
                                                <div class="my-4 regular txt-azul">
                                                    <p>Estamos concientes de las </p>
                                                    <p>exigencias del mercado y </p>
                                                    <p>de los  retos tecnológicos a </p>
                                                    <p>los que se enfrenta la</p>
                                                    <p>industria. </p>
                                                    <p></p>
                                                </div>
                                                <div class="regular txt-azul">
                                                    <p>Nuestro equipo de </p>
                                                    <p>talentosos profesionales</p>
                                                    <p>trabaja continuamente en la</p>
                                                    <p>innovación y mejora de </p>
                                                    <p>nuestros equipos de </p>
                                                    <p>perforación, con el fin de </p>
                                                    <p>ofrecer servicios versátiles </p>
                                                    <p>y altamente competitivos, </p>
                                                    <p>adaptados a las necesidades</p>
                                                    <p>individuales de cada uno de </p>
                                                    <p>nuestros clientes.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                        <div class="bg-blanco-2 py-5">
                                            <div class="mx-5">
                                                <h3 class="regular txt-azul">MOVILIDAD Y</h3>
                                                <h3 class="black txt-azul">EFICIENCIA</h3>
                                                <div class="my-4 regular txt-azul">
                                                    <p>La movilización de las  </p>
                                                    <p>perforadoras de Kluane Drilling  </p>
                                                    <p>Ltd. es altamente eficiente.</p>
                                                    <p>Se caracterizan por su </p>
                                                    <p>portabilidad y la facilidad</p>
                                                    <p>con la que pueden operar </p>
                                                    <p>en áreas remotas o montañosas</p>
                                                    <p>que carecen o tienen acceso</p>
                                                    <p>difícil, lo que minimiza el</p>
                                                    <p>impacto sobre el medio </p>
                                                    <p>ambiente y los costos.</p>
                                                </div>
                                                <div class="regular txt-azul">
                                                    <p>Son compactas y modulares,</p>
                                                    <p>lo que permite desarmarse y</p>
                                                    <p>transportarse por hélicoptero, </p>
                                                    <p>camión o manualmente por </p>
                                                    <p>senderos de difícil tránsito.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                        <div class="bg-blanco-2 py-5">
                                            <div class="mx-5">
                                                <h3 class="black txt-azul">DESEMPEÑO</h3>
                                                <div class="my-4 regular txt-azul">
                                                    <p>Las perforadoras de Kluane </p>
                                                    <p>Drilling Ltd. compiten con  </p>
                                                    <p>eficiencia en comparación con</p>
                                                    <p>las perforadoras  </p>
                                                    <p>convencionales en términos</p>
                                                    <p> de capacidad de profundidad</p>
                                                    <p> y producción.</p>
                                                </div>
                                                <div class="regular txt-azul">
                                                    <p>Utilizan un sistema de pared </p>
                                                    <p>delgada que proporciona más </p>
                                                    <p>volumen de muestra de núcleo </p>
                                                    <p>debido al tamaño del diámetro, </p>
                                                    <p>permitiendo al mismo tiempo </p>
                                                    <p> una mayor proporción de</p>
                                                    <p>potencia por centímetro</p>
                                                    <p> cúbico de la superficie de corte,</p>
                                                    <p>dando como resultado una</p>
                                                    <p> mayor eficiencia y mayores</p>
                                                    <p>tasas de recuperación.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <div class="d-block d-sm-block d-md-none">
        <div class="bg-drilling-middle-phone"></div>
        <div class="bg-azul py-5">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                    <div class="text-white py-5">
                        <div class="mx-5 txt-cuadros-bcos">
                            <h3 class="regular">INNOVACIÓN Y </h3>
                                <h3 class="black">TECNOLOGÍA</h3>
                                <div class="my-4 regular">
                                    <p>Estamos concientes de las </p>
                                    <p>exigencias del mercado y </p>
                                    <p>de los  retos tecnológicos a </p>
                                    <p>los que se enfrenta la</p>
                                    <p>industria. </p>
                                    <p></p>
                                </div>
                                <div class="regular">
                                    <p>Nuestro equipo de </p>
                                    <p>talentosos profesionales</p>
                                    <p>trabaja continuamente en la</p>
                                    <p>innovación y mejora de </p>
                                    <p>nuestros equipos de </p>
                                    <p>perforación, con el fin de </p>
                                    <p>ofrecer servicios versátiles </p>
                                    <p>y altamente competitivos, </p>
                                    <p>adaptados a las necesidades</p>
                                    <p>individuales de cada uno de </p>
                                    <p>nuestros clientes.</p>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                    <div class="text-white py-5">
                        <div class="mx-5 txt-cuadros-bcos">
                            <h3 class="regular">MOVILIDAD Y</h3>
                            <h3 class="black">EFICIENCIA</h3>
                            <div class="my-4 regular">
                                <p>La movilización de las  </p>
                                <p>perforadoras de Kluane   </p>
                                <p>Drilling Ltd. es altamente </p>
                                <p>eficiente. Se caracterizan por  </p>
                                <p>su portabilidad y la facilidad</p>
                                <p>con la que pueden operar </p>
                                <p>en áreas remotas o </p>
                                <p>montañosas que carecen o  </p>
                                <p>tienen acceso difícil, lo que  </p>
                                <p>minimiza el impacto sobre el  </p>
                                <p>medio ambiente y los costos.</p>
                            </div>
                            <div class="regular">
                                <p>Son compactas y modulares,</p>
                                <p>lo que permite desarmarse y</p>
                                <p>transportarse por hélicoptero, </p>
                                <p>camión o manualmente por </p>
                                <p>senderos de difícil tránsito.</p>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                    <div class="text-white py-5">
                        <div class="mx-5 txt-cuadros-bcos">
                            <h3 class="black">DESEMPEÑO</h3>
                            <div class="my-4 regular">
                                <p>Las perforadoras de Kluane </p>
                                <p>Drilling Ltd. compiten con  </p>
                                <p>eficiencia en comparación con</p>
                                <p>las perforadoras  </p>
                                <p>convencionales en términos</p>
                                <p> de capacidad de profundidad</p>
                                <p> y producción.</p>
                            </div>
                            <div class="regular">
                                <p>Utilizan un sistema de pared </p>
                                <p>delgada que proporciona más </p>
                                <p>volumen de muestra de  </p>
                                <p>núcleo debido al tamaño del  </p>
                                <p>diámetro, permitiendo al   </p>
                                <p>mismo tiempo una mayor  </p>
                                <p>proporción de potencia por </p>
                                <p>centímetro cúbico de la  </p>
                                <p>superficie de corte, dando   </p>
                                <p>como resultado una mayor  </p>
                                <p>eficiencia y mayores tasas de </p>
                                <p>recuperación.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    

    <br>
    <br>
    <br>

    <!-- MAIN ADVANTAGES -->
    <div class="bg-drilling-last"></div>
    <div class="bg-brown-placas pb-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 col-sm-12 col-md-12 col-lg-2"></div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                    <div data-aos="fade-up" data-aos-delay="1000" data-aos-duration="800" class="mx-4 box-drilling-2">
                        <div class="bg-bco py-5 text-center">
                            <h1 class="black txt-gris mt-5 display-5">PRINCIPALES BENEFICIO DE</h1>
                            <h1 class="black txt-azul display-2">LAS PERFORADORAS</h1>
                            <h1 class="black txt-azul mb-5 display-5">DE KLUANE DRILLING LTD.</h1>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-2"></div>
            </div>
            <div class="row py-5">
                <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                            <div class="text-center">
                                <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675880768/img/Adaptability_xs7jq6.gif" alt="ADAPTABILITY"
                                    class="img-fluid mb-3 icon-main" />
                                <div class="d-none d-sm-none d-md-block">
                                    <div class="txt-main h6 regular">
                                        <p>Adaptabilidad a las </p>
                                        <p>adversas condiciones</p>
                                        <p>climáticas y geológicas.</p>
                                    </div>
                                </div>
                                <div class="d-block d-sm-block d-md-none">
                                    <div class="txt-main h6 regular">
                                        <p>Adaptabilidad a las adversas condiciones climáticas y geológicas.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                            <div class="text-center h6 regular">
                                <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675880791/img/Thunder-bco_jhfpi1.gif" alt="HIGH PRODUCTION"
                                    class="img-fluid mb-3 icon-main" />
                                <div class="d-none d-sm-none d-md-block">
                                    <div class="txt-main">
                                        <p>Alta producción y</p>
                                        <p>excelente capacidad de</p>
                                        <p>profundidad.</p>
                                    </div>
                                </div>
                                <div class="d-block d-sm-block d-md-none">
                                    <div class="txt-main">
                                        <p>Alta producción y excelente capacidad de profundidad.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                            <div class="text-center h6 regular">
                                <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675880811/img/Hydraulic_Energy_tpokhf.gif" alt="MODULAR COMPONENTS"
                                    class="img-fluid mb-3 icon-main-2" />
                                <div class="d-none d-sm-none d-md-block">
                                    <div class="txt-main">
                                        <p>Los componentes</p>
                                        <p>modulares y el diseño</p>
                                        <p>estandarizado aumentan</p>
                                        <p> la confiabilidad y</p>
                                        <p>minimizan el tiempo de</p>
                                        <p>inactividad.</p>
                                    </div>
                                </div>
                                <div class="d-block d-sm-block d-md-none">
                                    <div class="txt-main">
                                        <p>Los componentes modulares y el diseño estandarizado aumentan la confiabilidad y minimizan el tiempo de inactividad.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                            <div class="text-center">
                                <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675880828/img/Transport_disjep.gif" alt="EASY TRANSPORT"
                                    class="img-fluid mb-3 icon-main-2" />
                                <div class="d-none d-sm-none d-md-block">
                                    <div class="txt-main h6 regular">
                                        <p>Fácil transporte y</p>
                                        <p>montaje de componentes</p>
                                        <p>livianos y modulares </p>
                                        <p>(peso máximo de un</p>
                                        <p>componente individual</p>
                                        <p>(160 - 180kgs))</p>
                                    </div>
                                </div>
                                <div class="d-block d-sm-block d-md-none">
                                    <div class="txt-main h6 regular">
                                        <p>Fácil transporte y montaje de componentes livianos y modulares (peso máximo de un componente individual (160 - 180kgs))</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                            <div class="text-center">
                                <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675880849/img/Minimal-bco_jcjfwa.gif" alt="MINIMAL ENVIROMENTAL"
                                    class="img-fluid mb-3 icon-main" />
                                <div class="d-none d-sm-none d-md-block">
                                    <div class="txt-main h6 regular">
                                        <p>Mínimo impacto</p>
                                        <p>ambiental.</p>
                                    </div>
                                </div>
                                <div class="d-block d-sm-block d-md-none">
                                    <div class="txt-main h6 regular">
                                        <p>Mínimo impacto ambiental.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                            <div class="text-center">
                                <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675880870/img/Fast_jvgyvj.gif" alt="FAST AND EFFICIENT"
                                    class="img-fluid mb-3 icon-main" />
                                <div class="d-none d-sm-none d-md-block">
                                    <div class="txt-main regular h6">
                                        <p>Apoyo logístico rápido y</p>
                                        <p>eficiente.</p>
                                    </div>
                                </div>
                                <div class="d-block d-sm-block d-md-none">
                                    <div class="txt-main regular h6">
                                        <p>Apoyo logístico rápido y eficiente.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
            </div>
            <!-- MODELOS DE MAQUINARIA -->
            <div class="row py-5 dipper">
                <div class="text-center">
                    <ul class="nav nav-pills nav-justified" id="pills-tab" role="tablist">
                        <li class="nav-item borde-right" role="presentation">
                            <button class="nav-link active" id="pills-KD200-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-KD200" type="button" role="tab"
                                aria-controls="pills-KD200" aria-selected="true">
                                <h1>KD200</h1>
                            </button>
                        </li>
                        <li class="nav-item borde-right" role="presentation">
                            <button class="nav-link" id="pills-KD600-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-KD600" type="button" role="tab"
                                aria-controls="pills-KD600" aria-selected="false">
                                <h1>KD600</h1>
                            </button>
                        </li>
                        <li class="nav-item borde-right" role="presentation">
                            <button class="nav-link" id="pills-KD1000-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-KD1000" type="button" role="tab"
                                aria-controls="pills-KD1000" aria-selected="false">
                                <h1>KD1000</h1>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-KD1700-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-KD1700" type="button" role="tab"
                                aria-controls="pills-KD1700" aria-selected="false">
                                <h1>KD1700</h1>
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content mt-5" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-KD200" role="tabpanel"
                            aria-labelledby="pills-KD200-tab">
                            <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879525/img/KDL200_o7k92r.png" alt="KDL200" class="img-fluid" />
                        </div>
                        <div class="tab-pane fade" id="pills-KD600" role="tabpanel"
                            aria-labelledby="pills-KD600-tab">
                            <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879521/img/Maquina-KD600_y6pybp.png" alt="KDL600" class="img-fluid" />
                        </div>
                        <div class="tab-pane fade" id="pills-KD1000" role="tabpanel"
                            aria-labelledby="pills-KD1000-tab">
                            <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879563/img/Maquina-KD1000_iy55dz.png" alt="KDL1000" class="img-fluid" />
                        </div>
                        <div class="tab-pane fade" id="pills-KD1700" role="tabpanel"
                            aria-labelledby="pills-KD1700-tab">
                            <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879523/img/Maquina-KD1700_ib1o8m.png" alt="KDL1700" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- GRÁFICAS -->
            <div class="row py-5">
                <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                    <div class="">
                        <ul class="nav nav-pills nav-justified" id="pills-tab" role="tablist">
                            <li class="nav-item borde-right" role="presentation">
                                <button class="nav-link active py-4 " id="pills-Capacity-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-Capacity" type="button" role="tab"
                                    aria-controls="pills-Capacity" aria-selected="true">
                                    <h1 class="h4">Capacidad</h1>
                                </button>
                            </li>
                            <li class="nav-item borde-right" role="presentation">
                                <button class="nav-link" id="pills-Core-size-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-Core-size" type="button" role="tab"
                                    aria-controls="pills-Core-size" aria-selected="false">
                                    <h1 class="h4">
                                        Tamaño de  <br />
                                        Núcleo
                                    </h1>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-Equipment-Capacity-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-Equipment-Capacity" type="button" role="tab"
                                    aria-controls="pills-Equipment-Capacity" aria-selected="false">
                                    <h1 class="h4">
                                        Capacidad de <br />
                                        Equipo
                                    </h1>
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content mt-5" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-Capacity" role="tabpanel"
                                aria-labelledby="pills-Capacity-tab">
                                <div class="text-center content">
                                    <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879561/img/Grafica_Entrada_qjkjtl.gif" alt="Capacity"
                                        class="img-fluid" />
                                </div>
                                <div style="display: none" class="text-center content2">
                                    <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879558/img/Grafica_Loop_ph9if5.gif" alt="Capacity"
                                        class="img-fluid" />
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-Core-size" role="tabpanel"
                                aria-labelledby="pills-Core-size-tab">
                                <div class="text-center">
                                    <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675882634/img/tabla_2_es_wkzbgg.png" alt="Core size"
                                        class="img-fluid" />
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-Equipment-Capacity" role="tabpanel"
                                aria-labelledby="pills-Equipment-Capacity-tab">
                                <div class="text-center">
                                    <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675882642/img/tabla_3_es_fxippu.png" alt="Equipment Capacity"
                                        class="img-fluid" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
            </div>
        </div>
    </div>
    @include('Esp.componentes.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('front/js/easy-waypoint-animate.js') }}"></script>
    <script src="{{ asset('front/js/jquery.waypoints.min.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        var $dipper = $('.dipper');
        $dipper.waypoint(function() {
            setTimeout(function() {
                $(".content").fadeOut(0);
            }, 3700);

            setTimeout(function() {
                $(".content2").fadeIn(0);
            }, 3700);
        });
    </script>
</body>

</html>
