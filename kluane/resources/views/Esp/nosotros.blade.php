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
    <title>KLUANE | NOSOTROS</title>
</head>

<body>
    <div class="mb-5">
        <div class="box-about-1">
            <div class="bg-about">
                @include('Esp.componentes.menu-azul')
            </div>
            <div class="container-fluid p-0">
                <div class="row p-0">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                        <div data-aos="fade-right" data-aos-delay="1000" data-aos-duration="800"
                            class="bg-bco box-about-2 py-5">
                            <div class="txt-about">
                                <div class="d-none d-sm-none d-md-block">
                                    <p class="txt-gris regular h5">Kluane Drilling Ltd. es una <b>empresa Canadiense
                                            con</b> más de </p>
                                    <p class="txt-gris regular h5"><b>35 años de experiencia</b> dedicada a la prestación
                                        de servicios </p>
                                    <p class="txt-gris regular h5"> de perforación a través de la <b>innovación técnica y el</b> </p>
                                    <p class="txt-gris regular h5">talento humano.</b> </p>     
                                </div>
                                <div class="d-block d-sm-block d-md-none">
                                    <p class="txt-gris regular h5">Kluane Drilling Ltd. es una <b>empresa Canadiense
                                            con</b> más de
                                        <b>35 años de experiencia</b> dedicada a la prestación de servicios de perforación
                                        a través de la <b>innovación técnica y el talento humano.</b>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-5"></div>
                </div>
            </div>
            <div class="bg-trabajador-about">
                <div class="text-center">
                    <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879557/img/btn-play_xaflof.png" alt="Play" class="img-fluid btn-play"
                        data-bs-toggle="modal" data-bs-target="#Kluane-video" />
                </div>
                @include('Pagina.components.modal-video')
            </div>
        </div>
    </div>
    <!-- WE HAVE AND WE ARE -->
    <div class="container-fluid">
        <div class="row p-0">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 p-0 pt-5">
                <div class="bg-bco py-5 mt-4">
                    <div class="txt-we-are">
                        <div class="d-none d-sm-none d-md-block">
                            <h1 class="regular display-4">¿QUIÉNES <b class="black">SOMOS?</b> </h1>
                            <p class="regular h5">Kluane Drilling Ltd. es una empresa Canadiense con</p>
                            <p class="regular h5">más de 35 años de experiencia dedicada a la</p>
                            <p class="regular h5">prestación de servicios de perforación a tráves de</p>
                            <p class="regular h5">la innovación técnica y el talento humano.</p>
                        </div>
                        <div class="d-block d-sm-block d-md-none">
                            <h1 class="regular display-4">¿QUIÉNES <b class="black">SOMOS?</b> </h1>
                            <p class="regular h5">Kluane Drilling Ltd. es una empresa Canadiense con 
                                más de 35 años de experiencia dedicada a la 
                                prestación de servicios de perforación a tráves de 
                                la innovación técnica y el talento humano.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 p-0">
                <div class="bg-azul py-5">
                    <div class="txt-we-have text-end">
                        <div class="d-none d-sm-none d-md-block">
                            <h1 class="regular text-white display-4">¿CÓMO LO <b class="black">HACEMOS?</b> </h1>
                            <h5 class="bold text-white h3">UN EXCELENTE EQUIPO DE TRABAJO</h5>
                            <p class="regular text-white h5">Contamos con un excelente capital humano, quienes</p>
                            <p class="regular text-white h5">día a día enriquecen cada uno de nuestros procesos</p>
                            <p class="regular text-white h5">gracias a su talento, compromiso, formación y</p>
                            <p class="regular text-white mb-5 h5">experiencia.</p>

                            <h5 class="bold text-white h3">CUIDAMOS EL MEDIO AMBIENTE</h5>
                            <p class="regular text-white h5">Nosotros entendemos la importancia del cuidado</p>
                            <p class="regular text-white h5">del medio ambiente y las buenas relaciones con</p>
                            <p class="regular text-white h5">la comunidad y nos esforzamos por garantizar que</p>
                            <p class="regular text-white h5">nuestras operaciones se lleven a cabo con los más </p>
                            <p class="regular text-white h5">altos estándares de manera responsable y sostenible.</p>
                        </div>
                        <div class="d-block d-sm-block d-md-none">
                            <h1 class="regular text-white display-4">¿CÓMO LO <b class="black">HACEMOS?</b> </h1>
                            <h5 class="bold text-white h3">UN EXCELENTE EQUIPO DE TRABAJO</h5>
                            <p class="regular text-white h5">Contamos con un excelente capital humano, quienes 
                                día a día enriquecen cada uno de nuestros procesos 
                                gracias a su talento, compromiso, formación y experiencia.</p>

                            <h5 class="bold text-white h3">CUIDAMOS EL MEDIO AMBIENTE</h5>
                            <p class="regular text-white h5">Nosotros entendemos la importancia del cuidado 
                                del medio ambiente y las buenas relaciones con 
                                la comunidad y nos esforzamos por garantizar que 
                                nuestras operaciones se lleven a cabo con los más 
                                altos estándares de manera responsable y sostenible.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CARROUSEL WORKERS -->
    <div class="container py-5">
        <div data-aos="fade-down" data-aos-delay="1000" data-aos-duration="800" class="row">
            <div class="custom-slider">
                <div class="custom-box"><img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879515/img/trabajador-carrousel-1_vhznap.png"
                        alt="KLUANE DRILLING LTD" class="img-fluid" /></div>
                <div class="custom-box"><img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879565/img/trabajador-carrousel-2_hghwvi.png"
                        alt="KLUANE DRILLING LTD" class="img-fluid" /></div>
                <div class="custom-box"><img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879568/img/trabajador-carrousel-3_shy6bl.png"
                        alt="KLUANE DRILLING LTD" class="img-fluid" /></div>
                <div class="custom-box"><img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879515/img/trabajador-carrousel-1_vhznap.png"
                        alt="KLUANE DRILLING LTD" class="img-fluid" /></div>
                <div class="custom-box"><img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879565/img/trabajador-carrousel-2_hghwvi.png"
                        alt="KLUANE DRILLING LTD" class="img-fluid" /></div>
                <div class="custom-box"><img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879568/img/trabajador-carrousel-3_shy6bl.png"
                        alt="KLUANE DRILLING LTD" class="img-fluid" /></div>
                <div class="custom-box"><img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879518/img/trabajador-carrousel-4_a5mbtc.png"
                        alt="KLUANE DRILLING LTD" class="img-fluid" /></div>
                <div class="custom-box"><img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879521/img/trabajador-carrousel-5_lpvzkh.png"
                        alt="KLUANE DRILLING LTD" class="img-fluid" /></div>
                <div class="custom-box"><img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879523/img/trabajador-carrousel-6_tusadh.png"
                        alt="KLUANE DRILLING LTD" class="img-fluid" /></div>
            </div>
        </div>
    </div>
    <!-- INCIDENT FREE -->
    <div class="bg-trabajadores-about"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-2"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                <div data-aos="fade-up" data-aos-delay="1000" data-aos-duration="800"
                    class="bg-bco py-5 card-insident mx-5">
                    <div class="txt-incident text-center">
                        <div class="d-none d-sm-none d-md-block">
                            <p class="regular h5 txt-azul">In <b class="bold">Kluane Drilling Ltd.</b> estamos comprometidos
                                con la filosfía <b class="bold">"Metros Libres</b> </p>
                            <p class="regular h5 txt-azul mb-4"><b class="bold">de Incidentes"</b> en todas nuestras operaciones. </p>
                            <p class="regular h5 txt-azul">Hemos adoptado estándares de seguridad reconocidos internacionalmente </p>
                            <p class="regular h5 txt-azul">como la certificación <b class="bold">ISO 45001</b> en todos los países dónde
                                operamos</p>
                            <p class="regular h5 txt-azul">para cumplir con nuestro compromiso con la salud y seguridad <b
                                    class="bold"> de todos</b></p>
                                    <p class="regular h5 txt-azul mb-4"><b
                                        class="bold">nuestros colaboradores.</b></p>
                            <p class="regular h5 txt-azul"><b class="bold">Este estandár internacional</b> garantiza
                                que nuestros sistemas de gestión</p>
                            <p class="regular h5 txt-azul">respalden un rendimiento sólido y altos niveles de seguridad en
                                los</p>
                            <p class="regular h5 txt-azul">servicios que brindamos.</p>
                        </div>
                        <div class="d-block d-sm-block d-md-none">
                            <p class="regular h5 txt-azul">In <b class="bold">Kluane Drilling Ltd.</b> estamos comprometidos
                                con la filosfía <b class="bold">"Metros Libres de Incidentes"</b> en todas nuestras operaciones. </p>

                                <p class="regular h5 txt-azul">Hemos adoptado estándares de seguridad reconocidos internacionalmente 
                                    como la certificación <b class="bold">ISO 45001</b> en todos los países dónde
                                    operamos para cumplir con nuestro compromiso con la salud y seguridad <b class="bold"> de todos 
                                        nuestros colaboradores.</b>
                                </p>
                            </p>
                            <p class="regular h5 txt-azul"><b class="bold">Este estandár internacional</b> garantiza
                                que nuestros sistemas de gestión 
                                'brespalden un rendimiento sólido y altos niveles de seguridad en
                                los servicios que brindamos.</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-2"></div>
        </div>
    </div>
    <!--SOCIAL, ENVIROMENT, GOVERNANCE -->
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-sm-12 md-12 col-lg-4 ">
                <div class="mx-4">
                    <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879527/img/social_khd6og.png" alt="SOCIAL" class="img-fluid" />
                </div>
            </div>
            <div class="col-12 col-sm-12 md-12 col-lg-4 pt-3">
                <div class="txt-social txt-azul regular">
                    <h5 class="black h3">SOCIAL</h5>
                    <p>En nuestro negocio, los temas de</p>
                    <p>desempeño de sustentabilidad social </p>
                    <p>incluyen, la participación de la comunidad</p>
                    <p>la provición de buenas oportunidades laborales </p>
                    <p>locales, la reducción de la pobreza, los derechos </p>
                    <p>humanos,las prácticas laborales justas, la  </p>
                    <p>diversidad, la igualdad de oportunidades y más.</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 md-12 col-lg-4"></div>
            <div class="col-12 col-sm-12 md-12 col-lg-4"></div>
            <div class="col-12 col-sm-12 md-12 col-lg-4 box-enviroment order-2-phone">
                <div class="mx-4">
                    <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879527/img/enviroment_zdp3eo.png" alt="ENVIROMENT" class="img-fluid" />
                </div>
            </div>
            <div class="col-12 col-sm-12 md-12 col-lg-4 box-enviroment pt-3 order-1-phone">
                <div class="txt-enviroment txt-azul regular ">
                    <h5 class="black h3">MEDIO AMBIENTE</h5>
                    <p>Entendemos la importancia del medio </p>
                    <p>ambiente, especialmente para las comunidades</p>
                    <p>locales alrededor de nuestros proyectos,</p>
                    <p>y nos esforzamos por garantizar que nuestras</p>
                    <p>operaciones se lleven a cabo de manera </p>
                    <p>sostenible y responsable.</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 md-12 col-lg-4"></div>
            <div class="col-12 col-sm-12 md-12 col-lg-4 pt-5">
                <div class="txt-governance txt-azul regular text-end">
                    <h5 class="black h3">GOBERNANZA</h5>
                    <p>En Kluane Drilling Ltd. nuestros valores</p>
                    <p>familiares compartidos y sólidos sistemas</p>
                    <p>de gestión basados en estándares</p>
                    <p>internacionales promueven una cultura de </p>
                    <p>hacer lo correcto y trabajar junto con</p>
                    <p>nuestros clientes y nuestro excelente</p>
                    <p>equipo de personas para mejorar</p>
                    <p>continuamente nuestros servicios.</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 md-12 col-lg-4 box-governance">
                <div class="mx-4">
                    <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879562/img/governance_euh07h.png" alt="GOVERNANCE" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>

    <!-- FONDO TRABAJADORA -->
    <div class="bg-trabajadora-about"></div>

    <!-- MISION AND VISION -->
    <div class="container-fluid bg-brown-placas  py-5">
        <div class="row py-5">
            <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="text-center txt-mision-vision">
                            <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879561/img/mision_dcbx1k.gif" alt="MISION KLUANE DRILLING LTD."
                                class="img-fluid img-mision mb-4" />
                            <h1 class="bold">MISIÓN (PRÓPOSITO)</h1>
                            <div class="d-none d-sm-none d-md-block">
                                <p>Exploración sostenible para promover la prosperidad y  </p>
                                <p>el bienestar de todas las partes interesadas.</p>
                            </div>
                            <div class="d-block d-sm-block d-md-none">
                                <p>Exploración sostenible para promover la prosperidad y el bienestar de todas las partes interesadas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="text-center txt-mision-vision">
                            <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879516/img/vision_vy2tuz.gif" alt="VISION KLUANE DRILLING LTD."
                                class="img-fluid img-vision mb-4" />
                            <h1 class="bold">VISIÓN</h1>
                            <div class="d-none d-sm-none d-md-block">
                                <p>Generar éxito continuo, satisfaciendo y superando </p>
                                <p>las necesidades de nuestros clientes,  brindando un lugar de </p>
                                <p>trabajo donde nuestra gente tenga oportunidades para crecer, </p>
                                <p>desarrollarse y cumplir sus metas, asegurando que todas nuestras</p>
                                <p>actividades estén enfocadas en crear un mundo mejor para todos.</p>
                            </div>
                            <div class="d-block d-sm-block d-md-none">
                                <p>Generar éxito continuo, satisfaciendo y superando las necesidades de nuestros clientes, 
                                    brindando un lugar de trabajo donde nuestra gente tenga oportunidades para crecer, 
                                    desarrollarse y cumplir sus metas, asegurando que todas nuestras actividades estén 
                                    enfocadas en crear un mundo mejor para todos.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
            
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-3"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 box-value">
                <div class="mx-4">
                    <div 
                        class="bg-bco text-center py-5">
                        <h1 class="black display-2 txt-azul">VALORES</h1>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-3"></div>
        </div>
    </div>
    <div class="container py-3">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                        <div class="text-center">
                            <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879560/img/respect_sp4ooc.gif" alt="RESPECT"
                                class="img-fluid img-respect" />
                        </div>
                        <div class="txt-values">
                            <h1 class="bold txt-azul h2">RESPETO</h1>
                            <div class="d-none d-sm-none d-md-block">
                                <p>Cuidamos a nuestra gente, nuestros clientes,  </p>
                                <p>las comunidades, el ambiente y los recursos. Nos</p>
                                <p> tomamos el tiempo para entender las necesidades de </p>
                                <p>los demás y los tratamos como nos gusta que nos traten.</p>
                            </div>
                            <div class="d-block d-sm-block d-md-none">
                                <p>Cuidamos a nuestra gente, nuestros clientes, las comunidades, el ambiente y 
                                    los recursos.  Nos tomamos el tiempo para entender las necesidades de los 
                                    demás y los tratamos como nos gusta que nos traten.  </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                        <div class="text-center">
                            <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879522/img/honestly_k2uhq2.gif" alt="HONESTY"
                                class="img-fluid img-honesty" />
                        </div>
                        <div class="txt-values">
                            <h1 class="bold txt-azul h2">HONESTIDAD</h1>
                            <p>Somos veraces y transparentes en todo</p>
                            <p>lo que decimos y hacemos.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                        <div class="text-center">
                            <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879525/img/service_droqwd.gif" alt="SERVICE"
                                class="img-fluid img-service" />
                        </div>
                        <div class="txt-values">
                            <h1 class="bold txt-azul h2">SERVICIO</h1>
                            <div class="d-none d-sm-none d-md-block">
                                <p>Somos apasionados por proveer un excelente servicio </p>
                                <p>a nuestros clientes, equipos de trabajo y accionistas,</p>
                                <p> alcanzando y superando sus necesidades.</p>
                            </div>
                            <div class="d-block d-sm-block d-md-none">
                                <p>Somos apasionados por proveer un excelente servicio a nuestros 
                                    clientes, equipos de trabajo y  accionistas, alcanzando 
                                    y superando sus necesidades.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                        <div class="text-center">
                            <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879528/img/commitment_ok7jec.gif" alt="COMMITMENT"
                                class="img-fluid img-commitment" />
                        </div>
                        <div class="txt-values">
                            <h1 class="bold txt-azul h2">COMPROMISO</h1>
                            <div class="d-none d-sm-none d-md-block">
                                <p>Trabajamos duro y con determinación, siempre </p>
                                <p>dando lo mejor de nosotros y poniendo los objetivos </p>
                                <p>de la compañía y de los demás por encima de</p>
                                <p> nuestro beneficio particular.</p>
                            </div>
                            <div class="d-block d-sm-block d-md-none">
                                <p>Trabajamos duro y con determinación, siempre dando 
                                    lo mejor de nosotros y poniendo los objetivos de la 
                                    compañía y de los demás por encima de nuestro beneficio 
                                    particular.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                        <div class="text-center">
                            <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879561/img/kindness_zcmiva.gif" alt="KINDNESS"
                                class="img-fluid img-kidness" />
                        </div>
                        <div class="txt-values">
                            <h1 class="bold txt-azul h2">AMABILIDAD</h1>
                            <div class="d-none d-sm-none d-md-block">
                                <p>Nos cuidamos unos a otros y creemos que todos merecemos </p>
                                <p>la oportunidad y el apoyo para lograr el éxito.</p>
                            </div>
                            <div class="d-block d-sm-block d-md-none">
                                <p>Nos cuidamos unos a otros y creemos que 
                                    todos merecemos la oportunidad y el apoyo para lograr el éxito.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                        <div class="text-center">
                            <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879525/img/safety_izs0fg.gif" alt="SAFETY"
                                class="img-fluid img-safety" />
                        </div>
                        <div class="txt-values">
                            <h1 class="bold txt-azul h2">SEGURIDAD</h1>
                            <div class="d-none d-sm-none d-md-block">
                                <p>La seguridad es nuestro valor más importante y es esencial en cada</p>
                                <p>aspecto de nuestro negocio. Creemos que la seguridad y el cuidado</p>
                                <p>del medio ambiente son una responsabilidad personal y también </p>
                                <p>colectiva. Cada persona involucrada en los procesos de la  </p>
                                <p>compañía debe trabajar en equipo para fortalecer nuestra </p>
                                <p>cultura en seguridad</p>
                            </div>
                            <div class="d-block d-sm-block d-md-none">
                                <p>La seguridad es nuestro valor más importante y es esencial en cada 
                                    aspecto de nuestro negocio. Creemos que la seguridad y el cuidado 
                                    del medio ambiente son una responsabilidad personal y también 
                                    colectiva. Cada persona involucrada en los procesos de la compañía 
                                    debe trabajar en equipo para fortalecer nuestra cultura en seguridad.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
        </div>
    </div>
    <div class="bg-descanso-about"></div>
    <!-- OUR GLOBAL PRESENCE -->
    <div class="container py-5">
        <div class="row pt-5">
            <div class="text-center txt-global-presence">
                <h1 class="bold txt-azul display-4">NUESTRA PRESENCIA <b class="black">GLOBAL</b> </h1>
                <div class="d-none d-sm-none d-md-block">
                    <p class="txt-gris regular h6">Kluane Drilling Ltd. continua expandiendo sus operaciones y ha</p>
                    <p class="txt-gris regular h6">logrado el reconocimiento internacional en la industria gracias </p>
                    <p class="txt-gris regular h6">al esfuerzo de sus subsidiarias en los siguientes países:</p>
                </div>
                <div class="d-block d-sm-block d-md-none">
                    <p class="txt-gris regular h6">Kluane Drilling Ltd. continua expandiendo sus operaciones y ha 
                        logrado el reconocimiento internacional en la industria gracias 
                        al esfuerzo de sus subsidiarias en los siguientes países:
                    </p>
                </div>

                <div class="d-none d-sm-none d-md-block">
                    @include('Pagina.components.mapa')
                </div>
                <div class="d-block d-sm-block d-md-none">
                    <img data-aos="fade-up" data-aos-delay="1000" data-aos-duration="800"
                    src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879524/img/our-global-presence_ooe00q.png" alt="OUR GLOBAL PRESENCE"
                    class="img-fluid mt-3" />
                </div>
            </div>
        </div>
    </div>

    @include('Esp.componentes.footer')
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
