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

    <title>KLUANE | WORK WITH US </title>
</head>
<body>
    @include('Pagina.components.menu')
    <div class="bg-work-with-us">
        <div class="container-fluid p-0">
            <div class="row p-0">
                <div class="col-12 col-sm-12 col-md-12 col-lg-7 p-0 box-work">
                    <div class="mx-3">
                        <div data-aos="fade-right" data-aos-delay="1000" data-aos-duration="800" class="bg-bco py-5">
                            <div class="mx-5">
                                <h1 class="black txt-gris display-5">WORK</h1>
                                <h1 class="black txt-azul display-3">WITH US</h1>
                                <div class="d-none d-sm-none d-md-block">
                                    <p class="txt-gris regular"><b class="bold">We care  </b>for our employees and <b class="bold">provide a safe and healthy</b></p>
                                    <p class="txt-gris regular"><b class="bold">work environmental</b> based on providing opportunities for everyone </p>
                                    <p class="txt-gris regular">and developing our people to help them reach their<b class="bold"> goals.</b></p>
                                </div>
                                <div class="d-block d-sm-block d-md-none">
                                    <p class="txt-gris regular"><b class="bold">We care  </b>for our employees and <b class="bold">provide a safe and healthy work environmental</b>
                                        based on providing opportunities for all and developing our people to help them reach their<b class="bold"> goals.</b>
                                    </p>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-5"></div>
            </div>
        </div>
    </div>
    <!--GALERÍA CON HOVER-->
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="slider-w">
                <div class="slide-track-w">
                    <div class="slide-w">
                        <img  src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879567/img/worker-1-color_xo7vs1.png"  alt="KLUANE DRILLING LTD."/>
                        <img class="top" src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879523/img/worker-1-gris_gn9z3t.png" alt="KLUANE DRILLING LTD."  />
                    </div>
                    <div class="slide-w">
                        <img  src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879561/img/worker-2-color_xh7qg9.png"  alt="KLUANE DRILLING LTD."/>
                        <img class="top" src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879528/img/worker-2-gris_uqz7ah.png" alt="KLUANE DRILLING LTD."/>
                    </div>
                    <div class="slide-w">
                        <img  src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879517/img/worker-3-color_xt8bxd.png"  alt=" KLUANE DRILLING LTD."/>
                        <img class="top" src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879524/img/worker-3-gris_fi9qwo.png" alt="KLUANE DRILLING LTD."/>
                    </div>
                    <div class="slide-w">
                        <img  src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879563/img/worker-4-color_bnigtg.png"  alt="KLUANE DRILLING LTD."/>
                        <img class="top" src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879564/img/worker-4-gris_i0th0a.png" alt="KLUANE DRILLING LTD."/>
                    </div>
                    <div class="slide-w">
                        <img  src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879551/img/worker-5-color_rrkokp.png"  alt="KLUANE DRILLING LTD."/>
                        <img class="top" src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879563/img/worker-5-gris_m89nhq.png" alt="KLUANE DRILLING LTD."/>
                    </div>
                    <div class="slide-w">
                        <img  src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879567/img/worker-1-color_xo7vs1.png"  alt="KLUANE DRILLING LTD."/>
                        <img class="top" src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879523/img/worker-1-gris_gn9z3t.png" alt="KLUANE DRILLING LTD."  />
                    </div>
                    <div class="slide-w">
                        <img  src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879561/img/worker-2-color_xh7qg9.png"  alt="KLUANE DRILLING LTD."/>
                        <img class="top" src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879528/img/worker-2-gris_uqz7ah.png" alt="KLUANE DRILLING LTD."/>
                    </div>
                    <div class="slide-w">
                        <img  src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879517/img/worker-3-color_xt8bxd.png"  alt=" KLUANE DRILLING LTD."/>
                        <img class="top" src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879524/img/worker-3-gris_fi9qwo.png" alt="KLUANE DRILLING LTD."/>
                    </div>
                    <div class="slide-w">
                        <img  src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879563/img/worker-4-color_bnigtg.png"  alt="KLUANE DRILLING LTD."/>
                        <img class="top" src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879564/img/worker-4-gris_i0th0a.png" alt="KLUANE DRILLING LTD."/>
                    </div>
                    <div class="slide-w">
                        <img  src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879551/img/worker-5-color_rrkokp.png"  alt="KLUANE DRILLING LTD."/>
                        <img class="top" src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879563/img/worker-5-gris_m89nhq.png" alt="KLUANE DRILLING LTD."/>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- FORMULARIO -->
    <div data-aos="fade-down" data-aos-delay="1000" data-aos-duration="800" class="container py-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                <div class="text-center mb-4">
                    <img src="https://res.cloudinary.com/dra1bsh4u/image/upload/v1675262637/Kluane/logo-kluane-azul_jygojg.png" alt="KLUANE DRILLING LTD" class="img-fluid mb-3"/>
                    <h1 class="regular txt-azul"><b class="bold">COMPLETE </b>THE FOLLOWING FORM</h1>
                    <h1 class="regular txt-azul">AND WE’LL BE IN <b class="bold">TOUCH SHORTLY </b></h1>
                </div>
                <form class="form-work" method="POST" action="{{ route('contacto.index') }} " >
                    @csrf
                    <div class="bg-azul p-5">
                        <div class="mb-3 row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label bold">NAME</label>
                                    <input type="text" class="form-control" id="name" name="name" required/>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="lname" class="form-label bold">LAST NAME</label>
                                    <input type="text" class="form-control" id="lname" name="lname" required/>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label bold">EMAIL</label>
                                    <input type="email" class="form-control" id="email" name="email" required/>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="phone" class="form-label bold">PHONE</label>
                                    <input type="text" class="form-control" id="phone" name="phone" required/>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="country" class="form-label bold">COUNTRY</label>
                                    <select name="country" class="form-select" aria-label="Default select example" required>
                                        <option selected>SELECT</option>
                                        <option value="CANADA">CANADA</option>
                                        <option value="AFRICA">AFRICA</option>
                                        <option value="MEXICO">MEXICO</option>
                                        <option value="GUATEMALA">GUATEMALA</option>
                                        <option value="PANAMA">PANAMA</option>
                                        <option value="DOMINICAN REPUBLIC">DOMINICAN REPUBLIC</option>
                                        <option value="COLOMBIA">COLOMBIA</option>
                                        <option value="ECUADOR">ECUADOR</option>
                                        <option value="CHILE">CHILE</option>
                                        <option value="PERU">PERU</option>
                                        <option value="NICARAGUA">NICARAGUA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="city" class="form-label bold">CITY</label>
                                    <input type="text" class="form-control" id="city" name="city" required/>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="position" class="form-label bold">POSITION OF INTEREST</label>
                            <input type="text" class="form-control" id="position" name="position" required/>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="bold">MESSAGE</label>
                            <textarea class="form-control" id="message" style="height: 200px" name="message" required></textarea>
                        </div>   
                    </div>
                    <div class="text-end mt-4">
                        <button type="submit" class="btn btn-primary btn-send regular">
                            <h2 class="h5 pt-1">SEND REQUEST</h2>
                        </button>
                    </div>
                </form>
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