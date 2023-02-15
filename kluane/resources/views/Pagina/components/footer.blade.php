<footer class="bg-footer">
    <div class="container py-5">
        <div class="row pt-5">
            <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                <div class="logo-footer">
                    <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879562/img/logo-kluane-azul_hupqix.png" alt="KLUANE" class="img-fluid mb-5"/>
                    <p class="regular">Kluane Drilling Ltd. is a </p>
                    <p class="regular">private Canadian company</p>
                    <p class="regular">providing high quality drilling</p>
                    <p class="regular">services based on technical </p>
                    <p class="regular">innovation and human talent.</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-1"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                <div class="menu-footer">
                    <p class="bold h5 mb-3">MENU</p>
                    <a href="{{ url ('/')}}" class="a_none_style txt-gris"> <p class="regular">INDEX</p></a>
                    <a href="{{ route('about.index') }}" class="a_none_style txt-gris"><p class="regular">ABOUT US</p></a>
                    <a href="{{ route('drilling.index') }}" class="a_none_style txt-gris"><p class="regular">DRILLING</p></a>
                    <a href="{{ route('contact.index') }}" class="a_none_style txt-gris"><p class="regular">CONTACT</p></a>
                    <a href="{{ route('work-with-us.index') }}" class="a_none_style txt-gris"><p class="regular">WORK WITH US</p></a>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-3">
                <div class="legal-footer">
                    <p class="bold h5 mb-3">SITE</p>
                    <a href="{{ route('privacy.index') }}" class="a_none_style txt-gris"><p class="regular">PRIVACY NOTICE</p></a>
                    <a href="{{ route('hse.index') }}" class="a_none_style txt-gris"><p class="regular">HSE POLICY</p></a>
                    <a href="{{ route('terms.index') }}" class="a_none_style txt-gris"><p class="regular">TERMS AND CONDITIONS</p></a>
                    <a href="{{ route('cookies.index') }}" class="a_none_style txt-gris"><p class="regular">COOKIE POLICY</p></a>
                    <a href="#" class="a_none_style txt-gris"><p class="regular">SUPPORT</p></a>
                    <a href="{{ route('hse.index') }}" class="a_none_style txt-gris"><p class="regular">PRIVACY POLICY</p></a>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-2">
                <div class="social-footer text-center">
                    <p class="text-center bold h5 mb-3">FOLLOW US</p>
                    <a href="#" class="a_none_style" target="_blank" class="a_none_style">
                        <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879526/img/icono-fb_bd8v8c.png" alt="FB: Kluane" class="img-fluid"/>
                    </a>
                    <a href="#" class="a_none_style" target="_blank" class="a_none_style">
                        <img src="https://res.cloudinary.com/di4ezko9l/image/upload/v1675879556/img/icono-ig_ofygin.png" alt="IG: Kluane" class="img-fluid"/>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="container-fluid bg-azul py-2">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-4">
            <h6 class="regular text-white">© <?php echo date("Y"); ?> KLUANE DRILLING LTD. All Rights Reserved.</h6>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-4"></div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-4">
            <img src="https://res.cloudinary.com/dej55trpk/image/upload/v1675785357/Blueberry%20animtion%20footer/blueberry-tech-negativo_tbdm9o.gif" alt="Materialized by Blueberry" class="img-fluid bb-footer"/>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.1.0/jquery-migrate.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js'></script>
<script src="{{ asset('front/js/script.js') }}"></script>