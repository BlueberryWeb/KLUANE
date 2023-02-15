<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <script src="https://kit.fontawesome.com/4514d9060c.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css'/>
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}"/>
    <link rel="shortcut icon" href="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879526/img/favicon-kdl_eyyony.png" />
    <link rel="preload" href="{{ asset('front/css/style.css') }}"/>
    <link rel="preload" href="{{ asset('front/js/script.js') }}"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> 

    <title>KLUANE | CONTACT</title>
</head>
<body>
    @include('Pagina.components.menu-azul')
    <div class="bg-contact"></div>
    <div class="bg-brown-placas py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-3"></div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 box-contact">
                    <div class="mx-3">
                        <div data-aos="fade-up" data-aos-delay="1000" data-aos-duration="800" class="bg-bco text-center py-5">
                            <h1 class="txt-cafe black display-2">CONTACT <b class="txt-azul"> US</b></h1>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-3"></div>
            </div>
            <div class="row py-4">
                <div class="text-center">
                    <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879524/img/logo-kluane-bco_z6web3.png" alt="KLUANE DRILLING LTD" class="img-fluid logo-contact mb-3"/>
                    <h1 class="regular text-white display-5">WE <b class="bold">WANT</b> TO HEAR FROM <b class="bold">YOU</b></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                <div class="row">
                    <div data-aos="fade-right" data-aos-delay="1000" data-aos-duration="800" class="col-12 col-sm-12 col-md-12 col-lg-4">
                        <div class="bg-bco">
                            <!-- CANADA -->
                            <div class="text-center box-countries">
                                <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879566/img/Canada_cryv3l.png" alt="Canada" class="img-fluid mb-3 icon-country"/>
                                <h1 class="black txt-azul">KLUANE</h1>
                                <h1 class="black txt-azul">DRILLING LTD</h1>
                                <div class="my-3 txt-gris txt-country">
                                    <h6 class="bold txt-gris">CANADA/AFRICA</h6>
                                    <p>14 Macdonald Rd. Whitehorse, YT</p>
                                    <p>Y1A 4L2 Canada</p>
                                </div>
                                <div class="txt-gris txt-country">
                                    <p class="bold">JIM COYNE</p>
                                    <a href="tel:+18676334800" class="a_none_style txt-gris">
                                        <p class="regular">Phone: (1) 867 633 4800</p>
                                    </a>
                                    <a href="mailto:info@kluanedrilling.ca" class="a_none_style txt-gris">
                                        <p class="regular">info@kluanedrilling.ca</p>
                                    </a>
                                </div>
                            </div>
                            <!-- CENTRO AMERICA -->
                            <div class="text-center box-countries">
                                <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879521/img/Centro_pntyum.png" alt="Centro america" class="img-fluid mb-3 icon-country"/>
                                <h1 class="black txt-azul">KLUANE DRILLING</h1>
                                <h1 class="black txt-azul">CENTROAMERICA</h1>
                                <div class="my-3 txt-gris txt-country">
                                    <h6 class="bold txt-gris">GUATEMALA/</h6>
                                    <h6 class="bold txt-gris">PANAMA / DOMINICAN</h6>
                                    <h6 class="bold txt-gris">REPUBLIC</h6>
                                </div>
                                <div class="txt-gris txt-country">
                                    <a href="tel:+18676334800" class="a_none_style txt-gris">
                                        <p class="regular">Phone: +1 (867) 633 4800</p>
                                    </a>
                                    <a href="mailto:info@kluanedrilling.ca" class="a_none_style txt-gris">
                                        <p class="regular">info@kluanedrilling.ca</p>
                                    </a>
                                </div>
                            </div>
                            <!-- ECUADOR -->
                            <div class="text-center box-countries ecuador">
                                <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879562/img/Ecuador_ww6jpx.png" alt="Ecuador" class="img-fluid mb-3 icon-country"/>
                                <h1 class="black txt-azul">KLUANE DRILLING</h1>
                                <h1 class="black txt-azul">ECUADOR S.A.</h1>
                                <div class="my-3 txt-gris txt-country">
                                    <h6 class="bold txt-gris">ECUADOR</h6>
                                    <p>Juan Barrenzueta N72-Lote2 y Rodrigo</p>
                                    <p>de Villalobos, Quito.</p>
                                </div>
                                <div class="txt-gris txt-country">
                                    <p class="bold">CARLOS VACA</p>
                                    <a href="tel:+593997309190" class="a_none_style txt-gris">
                                        <p class="regular">Phone: (593) 99 730 9190</p>
                                    </a>
                                    <a href="mailto:carlos.vaca@kluane-ecuador.ec" class="a_none_style txt-gris">
                                        <p class="regular">carlos.vaca@kluane-ecuador.ec</p>
                                    </a>
                                </div>
                            </div>
                            <!-- PERU -->
                            <div class="text-center box-countries peru">
                                <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879525/img/Peru_veijhr.png" alt="Peru" class="img-fluid mb-3 icon-country"/>
                                <h1 class="black txt-azul">KLUANE</h1>
                                <h1 class="black txt-azul">PERU SAC</h1>
                                <div class="my-3 txt-gris txt-country">
                                    <h6 class="bold txt-gris">PERU</h6>
                                    <p>Av. Pio XII N°246 Surco</p>
                                    <p>Lima, Perú</p>
                                </div>
                                <div class="txt-gris txt-country">
                                    <p class="bold">CARLOS VACA</p>
                                    <a href="tel:+593997309190" class="a_none_style txt-gris">
                                        <p class="regular">Phone: (593) 99 730 9190</p>
                                    </a>
                                    <a href="mailto:carlos.vaca@kluane-ecuador.ec" class="a_none_style txt-gris">
                                        <p class="regular">carlos.vaca@kluane-ecuador.ec</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4"></div>
                    <div data-aos="fade-left" data-aos-delay="1000" data-aos-duration="800" class="col-12 col-sm-12 col-md-12 col-lg-4">
                        <div class="bg-bco">
                            <!-- MEXICO -->
                            <div class="text-center box-countries">
                                <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879526/img/Mexico_egol3i.png" alt="Mexico" class="img-fluid mb-3 icon-country"/>
                                <h1 class="black txt-azul">KDL MEXICO</h1>
                                <h1 class="black txt-azul">S.A. DE C.V.</h1>
                                <div class="my-3 txt-gris txt-country">
                                    <h6 class="bold txt-gris">MEXICO</h6>
                                    <p>Antimonio 123, Ciudad Industrial</p>
                                    <p>Durango, Dgo. México 34208</p>
                                </div>
                                <div class="txt-gris txt-country">
                                    <p class="bold">VICTORIA GARCÍA</p>
                                    <a href="tel:+526188145310" class="a_none_style txt-gris">
                                        <p class="regular">Phone: (52) 618 814 5310</p>
                                    </a>
                                    <a href="mailto:victoria.garcia@kluanedrilling.ca" class="a_none_style txt-gris">
                                        <p class="regular">victoria.garcia@kluanedrilling.ca</p>
                                    </a>
                                </div>
                            </div>
                            <!-- COLOMBIA -->
                            <div class="text-center box-countries">
                                <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879526/img/Colombia_ak7pgr.png" alt="Colombia" class="img-fluid mb-3 icon-country"/>
                                <h1 class="black txt-azul">KLUANE</h1>
                                <h1 class="black txt-azul">COLOMBIA SAS</h1>
                                <div class="my-3 txt-gris txt-country">
                                    <h6 class="bold txt-gris">COLOMBIA</h6>
                                    <p>Km 7.0 de la Autopista Bogotá-Medellín</p>
                                    <p>Parque Industrial Celta Trade Park</p>
                                    <p>Municipio de Funza</p>
                                    <p>Departamento de </p>
                                    <p>Cundinamarca, Bodega 73 A, Bogotá</p>
                                </div>
                                <div class="txt-gris txt-country">
                                    <p class="bold">JHON PUERTA</p>
                                    <a href="tel:+576018966775" class="a_none_style txt-gris">
                                        <p class="regular">Phone: (57) 601 896 6775</p>
                                    </a>
                                    <a href="mailto:jhon.puerta@kluanecolombia.com" class="a_none_style txt-gris">
                                        <p class="regular">jhon.puerta@kluanecolombia.com</p>
                                    </a>
                                </div>
                            </div>
                            <!-- CHILE -->
                            <div class="text-center box-countries">
                                <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879526/img/Chile_bvvlxk.png" alt="Chile" class="img-fluid mb-3 icon-country"/>
                                <h1 class="black txt-azul">KLUANE DRILLING</h1>
                                <h1 class="black txt-azul">CHILE S.A.</h1>
                                <div class="my-3 txt-gris txt-country">
                                    <h6 class="bold txt-gris">CHILE</h6>
                                    <p>Parcela 33 H1, Alfafares La Serena</p>
                                    <p>Coquimbo IV Región.</p>
                                </div>
                                <div class="txt-gris txt-country">
                                    <p class="bold">VICTORIA GARCÍA</p>
                                    <a href="mailto:victoria.garcia@kluanedrilling.ca" class="a_none_style txt-gris">
                                        <p class="regular">victoria.garcia@kluanedrilling.ca</p>
                                    </a>
                                </div>
                            </div>
                            <!-- NICARAGUA -->
                            <div class="text-center box-countries">
                                <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879520/img/Nicaragua_ffwx8p.png" alt="Nicaragua" class="img-fluid mb-3 icon-country"/>
                                <h1 class="black txt-azul">KLUANE</h1>
                                <h1 class="black txt-azul">NICARAGUA SA</h1>
                                <div class="my-3 txt-gris txt-country">
                                    <h6 class="bold txt-gris">NICARAGUA</h6>
                                    <p>Km 11.5 Carretera a Masaya frente a la  </p>
                                    <p>embajada de Guatemala casa No 35.</p>
                                </div>
                                <div class="txt-gris txt-country">
                                    <p class="bold">JUAN GUILLERMO ZAPATA</p>
                                    <a href="tel:+50582334468" class="a_none_style txt-gris">
                                        <p class="regular">Phone: (505) 823 34468</p>
                                    </a>
                                    <a href="mailto:juan.zapata@kluanedrilling.ca" class="a_none_style txt-gris">
                                        <p class="regular">juan.zapata@kluanedrilling.ca</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
        </div>
    </div>
    @include('Pagina.components.footer')
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>
</html>