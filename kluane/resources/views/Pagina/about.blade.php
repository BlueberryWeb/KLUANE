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
    <title>KLUANE | ABOUT US</title>
</head>

<body>
    <div class="mb-5">
        <div class="box-about-1">
            <div class="bg-about">
                @include('Pagina.components.menu-azul')
            </div>
            <div class="container-fluid p-0">
                <div class="row p-0">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                        <div data-aos="fade-right" data-aos-delay="1000" data-aos-duration="800"
                            class="bg-bco box-about-2 py-5">
                            <div class="txt-about">
                                <div class="d-none d-sm-none d-md-block">
                                    <p class="txt-gris regular h5">Kluane Drilling Ltd. is a <b>private Canadian
                                            company</b> with more than</p>
                                    <p class="txt-gris regular h5"><b>35 years of experience</b> dedicated to providing
                                        high quality drilling</p>
                                    <p class="txt-gris regular h5">services based on <b>technical innovation and human
                                            talent.</b> </p>
                                </div>
                                <div class="d-block d-sm-block d-md-none">
                                    <p class="txt-gris regular h5">Kluane Drilling Ltd. is a <b>private Canadian
                                            company</b> with more than
                                        <b>35 years of experience</b> dedicated to providing high quality drilling
                                        services based on <b>technical innovation and human talent.</b>
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
                            <h1 class="regular display-4">WHO WE <b class="black">ARE</b> </h1>
                            <p class="regular h5">Kluane Drilling Ltd. is a private Canadian company</p>
                            <p class="regular h5">with more than 35 years of experience dedicated</p>
                            <p class="regular h5">to providing high quality drilling services based on</p>
                            <p class="regular h5">technical innovation and human talent.</p>
                        </div>
                        <div class="d-block d-sm-block d-md-none">
                            <h1 class="regular display-4">WHO WE <b class="black">ARE</b> </h1>
                            <p class="regular h5">Kluane Drilling Ltd. is a private Canadian company
                                with more than 35 years of experience dedicated to providing high quality drilling
                                services based on technical innovation and human talent.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 p-0">
                <div class="bg-azul py-5">
                    <div class="txt-we-have text-end">
                        <div class="d-none d-sm-none d-md-block">
                            <h1 class="regular text-white display-4">WE <b class="black">HAVE</b> </h1>
                            <h5 class="bold text-white h3">EXCELLENT TEAM OF PEOPLE</h5>
                            <p class="regular text-white h5">We have an excellent team of people, who</p>
                            <p class="regular text-white h5">support our processes every day with their</p>
                            <p class="regular text-white mb-5 h5">talent, commitment, training and experience.</p>

                            <h5 class="bold text-white h3">ENVIRONMENTAL CARE</h5>
                            <p class="regular text-white h5">We understand the importance of environmental</p>
                            <p class="regular text-white h5">care and good relations with the community and</p>
                            <p class="regular text-white h5">strive to ensure that our operations are carried</p>
                            <p class="regular text-white h5">out to the highest standards in a responsible </p>
                            <p class="regular text-white h5">and sustainable manner.</p>
                        </div>
                        <div class="d-block d-sm-block d-md-none">
                            <h1 class="regular text-white display-4">WE <b class="black">HAVE</b> </h1>
                            <h5 class="bold text-white h3">EXCELLENT TEAM OF PEOPLE</h5>
                            <p class="regular text-white h5 mb-5 ">We have an excellent team of people, who support our
                                processes every day with their talent, commitment, training and experience.</p>

                            <h5 class="bold text-white h3">ENVIRONMENTAL CARE</h5>
                            <p class="regular text-white h5">We understand the importance of environmental care and good
                                relations with the community and
                                strives to ensure that our operations are carried out to highest standards in a
                                responsible and sustainable manner.
                            </p>
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
                            <p class="regular h5 txt-azul">In <b class="bold">Kluane Drilling Ltd.</b> we are
                                committed to the <b class="bold">"Incident Free Meters"</b> </p>
                            <p class="regular h5 txt-azul mb-4">philosophy throughout our operations. </p>
                            <p class="regular h5 txt-azul">We adopted internationally recognized safety standards such
                                as <b class="bold">ISO 45001</b> </p>
                            <p class="regular h5 txt-azul">certification in every country where we operate in order to
                                fulfill</p>
                            <p class="regular h5 txt-azul mb-4">our commitment to the health and safety of all <b
                                    class="bold"> our workers.</b></p>
                            <p class="regular h5 txt-azul"><b class="bold">This international standard</b> ensures
                                our management systems support</p>
                            <p class="regular h5 txt-azul">strong performance and high levels of safety in the services
                                we supply.</p>
                        </div>
                        <div class="d-block d-sm-block d-md-none">
                            <p class="regular h5 txt-azul mb-4">In <b class="bold">Kluane Drilling Ltd.</b> We are
                                committed to the <b class="bold">"Incident Free Meters"</b>
                                philosophy throughout our operations.
                            </p>

                            <p class="regular h5 txt-azul mb-4">We adopted internationally recognized safety standards
                                such as <b class="bold">ISO 45001</b>
                                certification in every country where we operate in order to fulfill our commitment to
                                the health and safety of all <b class="bold"> our workers.</b>
                            </p>
                            <p class="regular h5 txt-azul"><b class="bold">This international standard</b> ensures
                                our management systems support strong performance and high levels of safety in the
                                services we supply.</p>
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
                    <p>In our business, social sustainability</p>
                    <p>performance issues include community</p>
                    <p>engagement, providing good local work</p>
                    <p>opportunities, reducing poverty, human</p>
                    <p>rights, fair labour practices, diversity, equality</p>
                    <p>of opportunity, and more.</p>
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
                    <h5 class="black h3">ENVIRONMENT</h5>
                    <p>We understand the importance of the</p>
                    <p>environment, especially for the local</p>
                    <p>communities around our projects, and</p>
                    <p>strive to ensure that our operations are</p>
                    <p>carried out in a sustainable and</p>
                    <p>responsible manner.</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 md-12 col-lg-4"></div>
            <div class="col-12 col-sm-12 md-12 col-lg-4 pt-5">
                <div class="txt-governance txt-azul regular text-end">
                    <h5 class="black h3">GOVERNANCE</h5>
                    <p>In Kluane Drilling Ltd. our shared</p>
                    <p>family values and strong management</p>
                    <p>systems based on international</p>
                    <p>standards promote a culture of doing</p>
                    <p>the right thing and working together</p>
                    <p>with our clients and our excellent</p>
                    <p>people to continuously improve our</p>
                    <p>services.</p>
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
                            <h1 class="bold">MISSION (PURPOSE)</h1>´
                            <div class="d-none d-sm-none d-md-block">
                                <p>Sustainable exploration to promote the prosperity and </p>
                                <p>well-being of all stakeholders</p>
                            </div>
                            <div class="d-block d-sm-block d-md-none">
                                <p>Sustainable exploration to promote the prosperity and
                                    well-being of all stakeholders</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="text-center txt-mision-vision">
                            <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879516/img/vision_vy2tuz.gif" alt="VISION KLUANE DRILLING LTD."
                                class="img-fluid img-vision mb-4" />
                            <h1 class="bold">VISION</h1>
                            <div class="d-none d-sm-none d-md-block">
                                <p>Generate long-term success, meeting and exceeding </p>
                                <p>the needs of our customers, providing a workplace where </p>
                                <p>our people have opportunities to grow, develop and meet </p>
                                <p>their goals, ensuring that all our activities are focused on</p>
                                <p>creating a better world for all.</p>
                            </div>
                            <div class="d-block d-sm-block d-md-none">
                                <p>Generate long-term success, meeting and exceeding
                                    the needs of our customers, providing a workplace where
                                    our people have opportunities to grow, develop and meet
                                    their goals, ensuring that all our activities are focused on
                                    creating a better world for all.</p>
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
                        <h1 class="black display-2 txt-azul">VALUES</h1>
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
                            <h1 class="bold txt-azul h2">RESPECT</h1>
                            <div class="d-none d-sm-none d-md-block">
                                <p>We take care of our people, clients, communities,  </p>
                                <p>environment, and resources. We take time to </p>
                                <p>understand the needs of others and we treat</p>
                                <p>others as we like to be treated ourselves.</p>
                            </div>
                            <div class="d-block d-sm-block d-md-none">
                                <p>We take care of our people, clients, communities, 
                                    environment, and resources. We take time to understand 
                                    the needs of others and we treat others as we like to 
                                    be treated ourselves.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                        <div class="text-center">
                            <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879522/img/honestly_k2uhq2.gif" alt="HONESTY"
                                class="img-fluid img-honesty" />
                        </div>
                        <div class="txt-values">
                            <h1 class="bold txt-azul h2">HONESTY</h1>
                            <p>We are truthful and transparent in everything  </p>
                            <p>we say and do.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                        <div class="text-center">
                            <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879525/img/service_droqwd.gif" alt="SERVICE"
                                class="img-fluid img-service" />
                        </div>
                        <div class="txt-values">
                            <h1 class="bold txt-azul h2">SERVICE</h1>
                            <div class="d-none d-sm-none d-md-block">
                                <p>We are passionate about providing an excellent </p>
                                <p>service by meeting and exceeding the needs of our</p>
                                <p> clients, our team and our shareholders.</p>
                            </div>
                            <div class="d-block d-sm-block d-md-none">
                                <p>We are passionate about providing an excellent 
                                    service by meeting and exceeding the needs of our 
                                    clients, our team and our shareholders.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                        <div class="text-center">
                            <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879528/img/commitment_ok7jec.gif" alt="COMMITMENT"
                                class="img-fluid img-commitment" />
                        </div>
                        <div class="txt-values">
                            <h1 class="bold txt-azul h2">COMMITMENT</h1>
                            <div class="d-none d-sm-none d-md-block">
                                <p>We work hard with determination, always</p>
                                <p>doing our best and putting the  objectives of</p>
                                <p> our company and others above our own.</p>
                            </div>
                            <div class="d-block d-sm-block d-md-none">
                                <p>We work hard with determination, always doing 
                                    our best and putting the objectives of 
                                    our company and others above our own.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                        <div class="text-center">
                            <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879561/img/kindness_zcmiva.gif" alt="KINDNESS"
                                class="img-fluid img-kidness" />
                        </div>
                        <div class="txt-values">
                            <h1 class="bold txt-azul h2">KINDNESS</h1>
                            <div class="d-none d-sm-none d-md-block">
                                <p>We look after one another and believe that everyone </p>
                                <p>deserves the opportunity and support to be successful.</p>
                            </div>
                            <div class="d-block d-sm-block d-md-none">
                                <p>We look after one another and believe that 
                                    everyone deserves the opportunity and support to be successful.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
                        <div class="text-center">
                            <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879525/img/safety_izs0fg.gif" alt="SAFETY"
                                class="img-fluid img-safety" />
                        </div>
                        <div class="txt-values">
                            <h1 class="bold txt-azul h2">SAFETY</h1>
                            <div class="d-none d-sm-none d-md-block">
                                <p>Safety is our core value, being essential in every part of our business. </p>
                                <p>We believe that safety and care for the environment are a </p>
                                <p> personal responsibility and also a responsibility towards others.</p>
                                <p>responsibility. Each person involved in the processes of </p>
                                <p>Everyone involved in company processes must work together to  </p>
                                <p>strengthen our safety culture.</p>
                            </div>
                            <div class="d-block d-sm-block d-md-none">
                                <p>Safety is our core value, being essential in every part of 
                                    our business. We believe that safety and care for the 
                                    environment are a personal responsibility and also a 
                                    responsibility towards others. Everyone involved in company 
                                    processes must work together to strengthen our safety culture.</p>
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
                <h1 class="bold txt-azul display-4">OUR GLOBAL <b class="black">PRESENCE</b> </h1>
                <div class="d-none d-sm-none d-md-block">
                    <p class="txt-gris regular h6">Kluane Drilling Ltd. continues to expand its operations and has</p>
                    <p class="txt-gris regular h6">archieved international recognition in the industry thanks to the
                    </p>
                    <p class="txt-gris regular h6">efforts of its subsidiaries in the following countries:</p>
                </div>
                <div class="d-block d-sm-block d-md-none">
                    <p class="txt-gris regular h6">Kluane Drilling Ltd. continues to expand its operations and has
                        archieved international recognition in the industry thanks to the
                        efforts of its subsidiaries in the following countries:</p>
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

    @include('Pagina.components.footer')
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
