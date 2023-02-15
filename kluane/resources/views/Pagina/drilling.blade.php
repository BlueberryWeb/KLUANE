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

    <title>KLUANE | DRILLING</title>
</head>

<body>
    @include('Pagina.components.menu')
    <!-- HEADER WEB -->
    <div class="d-none d-sm-none d-md-block">
        <div class="bg-drilling">
            <div class="container-fluid p-0">
                <div class="row p-0">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-7 p-0 box-drilling">
                        <div class="mx-3">
                            <div data-aos="fade-right" data-aos-delay="1000" data-aos-duration="800" class="bg-bco py-5">
                                <div class="mx-5 py-4">
                                    <h1 class="black txt-gris display-5">THE HIGHEST STANDARDS</h1>
                                    <h1 class="black txt-azul display-3">OF DRILLING</h1>
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
                    <h1 class="black txt-gris h3">THE HIGHEST STANDARDS</h1>
                    <h1 class="black txt-azul display-3">OF DRILLING</h1>
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
                                <h1 class="txt-azul">HIGH STANDARDS</h1>
                                <h1 class="txt-azul black mb-4">OF QUALITY</h1>
                                <div class="d-none d-sm-none d-md-block">
                                    <p class="h5">Our services are focused</p>
                                    <p class="h5">on the <b class="bold">highest standards</b></p>
                                    <p class="h5"><b class="bold">of quality,</b> safety, care of</p>
                                    <p class="h5">the environment, and good</p>
                                    <p class="h5">community relations </p>
                                    <p class="h5">and are directed to <b class="bold">public</b></p>
                                    <p class="bold h5">and private companies </p>
                                    <p class="bold h5">in the mining sector.</p>
                                </div>
                                <div class="d-block d-sm-block d-md-none">
                                    <p class="h5">Our services are focused
                                        on the <b class="bold">highest standards</b>
                                        <b class="bold">of quality,</b> safety, care of
                                        the environment, and good
                                        community relations
                                        and are directed to <b class="bold">public and prívate companies in the mining
                                            sector.</b>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                        <div class="mx-4">
                            <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879527/img/versatile_n40zh6.png" alt="VERSATILE AND"
                                class="img-fluid mb-5" />
                            <div class="regular txt-gris txt-versatile text-center">
                                <h1 class="txt-azul">VERSATILE AND</h1>
                                <h1 class="txt-azul black">LIGHTWEIGHT</h1>
                                <h1 class="txt-azul black mb-4">DRILLS</h1>
                                <div class="d-none d-sm-none d-md-block">
                                    <p class="h5">We specialize in versatile, </p>
                                    <p class="bold h5">highly mobile and lighweight</p>
                                    <p class="h5"><b class="bold">drills </b>which can operate</p>
                                    <p class="h5">successfully in any </p>
                                    <p class="h5">type of project, even in</p>
                                    <p class="bold h5">remote or mountainous areas.</p>
                                </div>
                                <div class="d-block d-sm-block d-md-none">
                                    <p class="h5">We specialize in versatile,
                                        <b class="bold">highly mobile and lighweight </b>
                                        <b class="bold">drills </b>which can operate
                                        successfully in any
                                        type of project, even in <b class="bold">remote or mountainous areas.</b>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                        <div class="mx-4">
                            <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879523/img/continuos_cbsnjp.png" alt="CONTINUOUS" class="img-fluid mb-5" />
                            <div class="regular txt-gris txt-continuos text-center">
                                <h1 class="txt-azul">CONTINUOUS</h1>
                                <h1 class="black txt-azul mb-4">IMPROVEMENT</h1>
                                <div class="d-none d-sm-none d-md-block">
                                    <p class="h5">In <b class="bold">Kluane Drilling Ltd. </b></p>
                                    <p class="h5">we work together with</p>
                                    <p class="h5">our clients and excellent</p>
                                    <p class="h5">people to provide quality</p>
                                    <p class="h5">services and to<b class="bold"> continuously</b></p>
                                    <p class="bold h5">improve our organization.</p>
                                </div>
                                <div class="d-block d-sm-block d-md-none">
                                    <p class="h5">In <b class="bold">Kluane Drilling Ltd. </b>
                                        we work together with
                                        our clients and excellent
                                        people to provide quality
                                        services and to<b class="bold"> continuously improve our organization. </b>
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
                        <div class="bg-dirlling-azul py-5">
                            <div class="cuadros">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                        <div class="bg-blanco py-5">
                                            <div class="mx-5">
                                                <h3 class="regular txt-azul">INNOVATION &</h3>
                                                <h3 class="black txt-azul">TECHNOLOGY</h3>
                                                <div class="my-4 regular txt-azul">
                                                    <p>We are aware of the market</p>
                                                    <p>requirements and </p>
                                                    <p>technological challenges </p>
                                                    <p>facing the industry.</p>
                                                </div>
                                                <div class="regular txt-azul">
                                                    <p>Our team of talented </p>
                                                    <p>professionals continuously</p>
                                                    <p>works on the innovation and</p>
                                                    <p>improvement of our drilling</p>
                                                    <p>equipment, in order to offer</p>
                                                    <p>versatile and highly </p>
                                                    <p>competitive services, ideally</p>
                                                    <p>suited to the individual needs </p>
                                                    <p>of each of our customers.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                        <div class="bg-blanco py-5">
                                            <div class="mx-5">
                                                <h3 class="regular txt-azul">EFFICIENT</h3>
                                                <h3 class="black txt-azul">MOBILITY</h3>
                                                <div class="my-4 regular txt-azul">
                                                    <p>Our drills have small footprints </p>
                                                    <p>and are extremely quick to </p>
                                                    <p>move and set up. They are  </p>
                                                    <p>characterized by their </p>
                                                    <p>portability and the ease with </p>
                                                    <p>which they can operate in </p>
                                                    <p>remote or mountainous areas</p>
                                                    <p>with difficult access.</p>
                                                </div>
                                                <div class="regular txt-azul">
                                                    <p>The drills are compact and</p>
                                                    <p>modular, which allows them</p>
                                                    <p>to be disassembled and </p>
                                                    <p>transported by helicopter, </p>
                                                    <p>truck or manually along</p>
                                                    <p>narrow trails.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                                        <div class="bg-blanco py-5">
                                            <div class="mx-5">
                                                <h3 class="regular txt-azul">HIGHER</h3>
                                                <h3 class="black txt-azul">PERFORMANCE</h3>
                                                <div class="my-4 regular txt-azul">
                                                    <p>Kluane Drilling Ltd.’s drills</p>
                                                    <p>perform very effectively in </p>
                                                    <p>comparasion with conventional</p>
                                                    <p>drilling equipment in terms of </p>
                                                    <p>depth capacity and production</p>
                                                    <p>rates.</p>
                                                </div>
                                                <div class="regular txt-azul">
                                                    <p>The thin wall system is used</p>
                                                    <p>which provides more core </p>
                                                    <p>sample volume due to the </p>
                                                    <p>arger diameter of the core and</p>
                                                    <p>also provides a greater </p>
                                                    <p>proportion of power per cubic </p>
                                                    <p>centimeter of cutting surface.</p>
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
                            <h3 class="regular h1">INNOVATION &</h3>
                            <h3 class="black h1">TECHNOLOGY</h3>
                            <div class="my-4 regular">
                                <p>We are aware of the market</p>
                                <p>requirements and </p>
                                <p>technological challenges </p>
                                <p>facing the industry.</p>
                            </div>
                            <div class="regular">
                                <p>Our team of talented </p>
                                <p>professionals continuously</p>
                                <p>works on the innovation and</p>
                                <p>improvement of our drilling</p>
                                <p>equipment, in order to offer</p>
                                <p>versatile and highly </p>
                                <p>competitive services, ideally</p>
                                <p>suited to the individual needs </p>
                                <p>of each of our customers.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                    <div class="text-white py-5">
                        <div class="mx-5 txt-cuadros-bcos">
                            <h3 class="regular h1">EFFICIENT</h3>
                            <h3 class="black h1">MOBILITY</h3>
                            <div class="my-4 regular">
                                <p>Our drills have small footprints </p>
                                <p>and are extremely quick to </p>
                                <p>move and set up. They are  </p>
                                <p>characterized by their </p>
                                <p>portability and the ease with </p>
                                <p>which they can operate in </p>
                                <p>remote or mountainous areas</p>
                                <p>with difficult access.</p>
                            </div>
                            <div class="regular">
                                <p>The drills are compact and</p>
                                <p>modular, which allows them</p>
                                <p>to be disassembled and </p>
                                <p>transported by helicopter, </p>
                                <p>truck or manually along</p>
                                <p>narrow trails.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                    <div class="text-white py-5">
                        <div class="mx-5 txt-cuadros-bcos">
                            <h3 class="regular h1">HIGHER</h3>
                            <h3 class="black h1">PERFORMANCE</h3>
                            <div class="my-4 regular">
                                <p>Kluane Drilling Ltd.’s drills</p>
                                <p>perform very effectively in </p>
                                <p>comparasion with </p>
                                <p>conventional drilling   </p>
                                <p>equipment in terms of depth  </p>
                                <p>capacity and production rates.</p>
                            </div>
                            <div class="regular">
                                <p>The thin wall system is used</p>
                                <p>which provides more core </p>
                                <p>sample volume due to the </p>
                                <p>arger diameter of the core and</p>
                                <p>also provides a greater </p>
                                <p>proportion of power per cubic </p>
                                <p>centimeter of cutting surface.</p>
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
    <!-- INNOVATION, EFFICIENT, HIGHER -->
    {{-- <div class="container py-5">
        <div class="row py-5">
            <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                <!-- INNOVATION -->
                <div class="row mb-5">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-5 order-2-phone">
                        <div class="text-center">
                            <div class="mx-4">
                                <img class="" src="{{ asset('front/img/innovation-in-techology.png') }}"
                                    alt="INNOVATION AND TECHNOLOGY" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 order-1-phone">
                        <div class="text-end mb-4">
                            <h1 class="regular txt-azul">INNOVATION &</h1>
                            <h1 class="black txt-azul">TECHNOLOGY</h1>
                        </div>
                        <div class="d-none d-sm-none d-md-block">
                            <div data-aos="fade-left" data-aos-delay="1000" data-aos-duration="800" class="text-end regular txt-innovation txt-azul h5">
                                <p>We are aware of the market requirements and</p>
                                <p class="bold">techonogical challenges facing the</p>
                                <p><b class="bold">industry. </b>Our team of talented professionals</p>
                                <p>continuosly works on the innovation and</p>
                                <p>improvement of our drilling equipment, in</p>
                                <p>order to offer versatile and highly competitive</p>
                                <p>services, ideally suited to the <b class="bold">individual needs</b></p>
                                <p class="bold">of each of our customers.</p>
                            </div>
                        </div>
                        <div class="d-block d-sm-block d-md-none">
                            <div class="text-end regular txt-innovation txt-azul h5">
                                <p>We are aware of the market requirements and
                                    <b class="bold"> techonogical challenges facing the industry. </b>Our team of
                                    talented professionals
                                    continuosly works on the innovation and
                                    improvement of our drilling equipment, in
                                    order to offer versatile and highly competitive
                                    services, ideally suited to the <b class="bold">individual needs of each of our
                                        customers.</b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- EFFICIENT -->
                <div class="row mb-5">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 order-1-phone">
                        <div class="text-start mb-4">
                            <h1 class="regular txt-azul">EFFICIENT</h1>
                            <h1 class="black txt-azul">MOBILITY</h1>
                        </div>
                        <div data-aos="fade-right" data-aos-delay="1000" data-aos-duration="800" class="d-none d-sm-none d-md-block">
                            <div class="text-start mb-3 regular txt-azul txt-efficient h5">
                                <p><b class="bold">Kluane Drillin Ltd.’s </b>drilling have small</p>
                                <p>footprints and are extremely quick to move</p>
                                <p>and set up. They are characterized by their</p>
                                <p class="bold">portability and the ease with which they</p>
                                <p class="bold">can operate in remote or mountainous</p>
                                <p><b class="bold">areas </b>with difficult access, minimizing the</p>
                                <p>impact on the environment and the cost.</p>
                            </div>
                            <div class="text-start txt-azul txt-efficient h5 regular">
                                <p>The drills are compact and modular, which</p>
                                <p>allows them to be disassembled and</p>
                                <p>transported by <b class="bold">helicopter, truck or manually</b></p>
                                <p class="bold">along narrow trails.</p>
                            </div>
                        </div>
                        <div  class="d-block d-sm-block d-md-none">
                            <div class="text-start mb-3 regular txt-azul txt-efficient h5">
                                <p><b class="bold">Kluane Drillin Ltd.’s </b>drilling have small
                                    footprints and are extremely quick to move
                                    and set up. They are characterized by their
                                    <b class="bold">portability and the ease with which they can operate in remote or
                                        mountainous areas </b>
                                    with difficult access, minimizing the
                                    impact on the environment and the cost.
                                </p>
                            </div>
                            <div class="text-start txt-azul txt-efficient h5 regular">
                                <p>The drills are compact and modular, which
                                    allows them to be disassembled and
                                    transported by <b class="bold">helicopter, truck or manually along narrow
                                        trails.</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-5 order-2-phone">
                        <div class="text-center">
                            <div class="mx-4">
                                <img src="{{ asset('front/img/efficient-mobility.png') }}" alt="EFFICIENT MOBILITY"
                                    class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- HIGHER -->
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-5 order-2-phone">
                        <div class="text-center">
                            <div class="mx-4">
                                <img src="{{ asset('front/img/higher-performance.png') }}" alt="HIGHER PERFORMANCE"
                                    class="img-fluid" />
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 order-1-phone">
                        <div class="text-end mb-4">
                            <h1 class="regular txt-azul">HIGHER</h1>
                            <h1 class="black txt-azul">PERFORMANCE</h1>
                        </div>
                        <div data-aos="fade-left" data-aos-delay="1000" data-aos-duration="800" class="d-none d-sm-none d-md-block">
                            <div class="text-end mb-3 regular txt-azul txt-higher h5">
                                <p><b class="bold">Kluane Drilling Ltd.’s </b>drills perform very</p>
                                <p>effectively in comparasion with conventional</p>
                                <p>drilling equipment in terms of <b class="bold">depth capacity</b></p>
                                <p class="bold">and production rates.</p>
                            </div>
                            <div class="text-end regular txt-azul txt-higher h5">
                                <p>The thin wall systems is used which provides</p>
                                <p>more core sample volume due to the larger</p>
                                <p>diameter of the core and also <b class="bold">provides a greater</b></p>
                                <p><b class="bold">proportion of power per cubic centimeter</b> of</p>
                                <p>cutting surface.</p>
                            </div>
                        </div>
                        <div class="d-block d-sm-block d-md-none">
                            <div class="text-end mb-3 regular txt-azul txt-higher h5">
                                <p><b class="bold">Kluane Drilling Ltd.’s </b> drills perform very
                                    effectively in comparasion with conventional
                                    drilling equipment in terms of <b class="bold">depth capacity and production
                                        rates.</b>
                            </div>
                            <div class="text-end regular txt-azul txt-higher h5">
                                <p>The thin wall systems is used which provides
                                    more core sample volume due to the larger
                                    diameter of the core and also <b class="bold">provides a greater</b>
                                    <b class="bold">proportion of power per cubic centimeter</b> of
                                    cutting surface.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
        </div>
    </div> --}}
    <!-- MAIN ADVANTAGES -->
    <div class="bg-drilling-last"></div>
    <div class="bg-brown-placas pb-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 col-sm-12 col-md-12 col-lg-2"></div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                    <div data-aos="fade-up" data-aos-delay="1000" data-aos-duration="800" class="mx-4 box-drilling-2">
                        <div class="bg-bco py-5 text-center">
                            <h1 class="black txt-gris mt-5 display-5">MAIN ADVANTAGES</h1>
                            <h1 class="black txt-azul display-2">OF THE DRILLS OF</h1>
                            <h1 class="black txt-azul mb-5 display-5">KLUANE DRILLING LTD.</h1>
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
                                        <p>Adaptability to </p>
                                        <p>challenging climatic,</p>
                                        <p>geographical and</p>
                                        <p>geological conditions.</p>
                                    </div>
                                </div>
                                <div class="d-block d-sm-block d-md-none">
                                    <div class="txt-main h6 regular">
                                        <p>Adaptability to
                                            challenging climatic,
                                            geographical and
                                            geological conditions.</p>
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
                                        <p>High production and</p>
                                        <p>excellent depth</p>
                                        <p>capacity.</p>
                                    </div>
                                </div>
                                <div class="d-block d-sm-block d-md-none">
                                    <div class="txt-main">
                                        <p>High production and
                                            excellent depth
                                            capacity.</p>
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
                                        <p>Modular components </p>
                                        <p>and standardized </p>
                                        <p>design increase </p>
                                        <p>reliability and </p>
                                        <p>minimize downtime.</p>
                                    </div>
                                </div>
                                <div class="d-block d-sm-block d-md-none">
                                    <div class="txt-main">
                                        <p>Modular components
                                            and standardized
                                            design increase
                                            eliability and
                                            minimize downtime.</p>
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
                                        <p>Easy transport and</p>
                                        <p>assembly of lighweight</p>
                                        <p>components (max.</p>
                                        <p>weight of an individual</p>
                                        <p>component (160 - 180kgs)</p>
                                    </div>
                                </div>
                                <div class="d-block d-sm-block d-md-none">
                                    <div class="txt-main h6 regular">
                                        <p>Easy transport and
                                            assembly of lighweight
                                            components (max.
                                            weight of an individual
                                            component (160 - 180kgs)</p>
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
                                        <p>Minimal</p>
                                        <p>environmental</p>
                                        <p>impact.</p>
                                    </div>
                                </div>
                                <div class="d-block d-sm-block d-md-none">
                                    <div class="txt-main h6 regular">
                                        <p>Minimal
                                            environmental
                                            impact.</p>
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
                                        <p>Fast and efficient</p>
                                        <p>logistical support.</p>
                                    </div>
                                </div>
                                <div class="d-block d-sm-block d-md-none">
                                    <div class="txt-main regular h6">
                                        <p>Fast and efficient
                                            ogistical support.</p>
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
                                    <h1 class="h4">Capacity</h1>
                                </button>
                            </li>
                            <li class="nav-item borde-right" role="presentation">
                                <button class="nav-link" id="pills-Core-size-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-Core-size" type="button" role="tab"
                                    aria-controls="pills-Core-size" aria-selected="false">
                                    <h1 class="h4">
                                        Core size <br />
                                        Specifications
                                    </h1>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-Equipment-Capacity-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-Equipment-Capacity" type="button" role="tab"
                                    aria-controls="pills-Equipment-Capacity" aria-selected="false">
                                    <h1 class="h4">
                                        Equipment <br />
                                        Capacity
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
                                    <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879563/img/core-size_ehx5y2.png" alt="Core size"
                                        class="img-fluid" />
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-Equipment-Capacity" role="tabpanel"
                                aria-labelledby="pills-Equipment-Capacity-tab">
                                <div class="text-center">
                                    <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879564/img/equipment_nontuc.png" alt="Equipment Capacity"
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
    @include('Pagina.components.footer')

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
