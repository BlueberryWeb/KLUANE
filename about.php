<?php
require_once("tools/header.php");
require_once("tools/navbar.php");
?>
   <video src="vid/Header-about.mp4" muted loop autoplay ></video>
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="text">
                        <div class="container">
                            <div class="row d-flex justify-content-center">
                                <h1 class="animacion-titulos">ABOUT <b>US</b></h1>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>     
    </section>
    <?php
    require_once("tools/menu.php");
    ?>
     <!--FONDO DE MONTAÑAS PINTADAS-->
    <div class="container-fluid" id="fondo-montanas">
        <div class="container wp-animated-group">
            <div class="row d-flex justify-content-center">
                <img src="img/Logo-KLUANE-azul.gif" alt="KLUANE DRILLING LTD." class="img-fluid wp-animated" data-animation="fadeInDown" data-animation-duration="5s"/>
                <p class="text-center mb-5 wp-animated"  data-animation="fadeInDown" data-animation-delay="1s" data-animation-duration="5s">Kluane Drilling Ltd. is a <b>private Canadian company</b> with more than <br>
                <b>30 years of experience</b> dedicated to providing high quality drilling <br>
                services based on <b>technical innovation and human talent.</b></p>
            </div>
        </div>
    </div>
    <!--VIDEO-->
    <div class="container-fluid" id="fondo-negro">
        <div class="container">
            <div class="row wp-animated" data-animation="fadeInDown" data-animation-duration="5s">
                <div class="col-12 text-center mt-5 mb-5">
                    <div class="container-image d-flex justify-content-center pt-5">
                        <img src="img/thumb-video.jpg" alt="KLUANE VIDEO" id="poster" class="img-fluid img-thumbnail-item imagen-poster"/>
                        <div class="row d-flex justify-content-center btn-play hover-play">
                            <!--<img src="img/click-me.png" alt="Click Me!"/>-->
                            <img class="top" src="img/play-button.png" alt="Play" id="btn-play" data-bs-toggle="modal" data-bs-target="#Kluane-video"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal" id="Kluane-video" tabindex="-1" aria-labelledby="Kluane-videoLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="modal-body">
                            <div class="container">
                                <div class="row d-flex justify-content-center">
                                    <div style="padding:56.25% 0 0 0;position:relative;">
                                        <iframe src="https://player.vimeo.com/video/693220076?h=213566ae8f" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe>
                                    </div>
                                    <script src="https://player.vimeo.com/api/player.js"></script>
                                </div>
                            </div>          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!--FONDO FOREST CIRCULOS-->
     <section>
        <div class="container-fluid fondo-forest" id="timeline">
            <div class="container pt-5" >
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-lg-4 align-self-center"></div>
                    <div class="col-12 col-lg-6 align-self-center">
                        <div class="row d-flex justify-content-end wp-animated-group">
                            <div class="row pt-2">
                                <div class="d-flex justify-content-end">
                                    <img src="img/High-quality.gif" alt="HIGH QUALITY DRILLING SERVICES" class="img-fluid circulos wp-animated" data-animation="fadeInDown" data-animation-duration="3s"/>
                                </div>
                                <h3 class="text-end wp-animated" data-animation="fadeInDown" data-animation-delay="0.2s" data-animation-duration="3s"><b>HIGH QUALITY</b></h3>
                                <h3 class="text-end wp-animated" data-animation="fadeInDown" data-animation-delay="0.3s" data-animation-duration="3s"><b>DRILLING SERVICES</b></h3>
                                <p class="text-end wp-animated" data-animation="fadeInDown" data-animation-delay="0.4s" data-animation-duration="3s">Our mission is to <b>provide exceptional service to <br>
                                clients</b> in the exploration and mining industry, using <br>
                                <b>innovative and highly portable equipment</b></p>
                                <img src="img/Lineas-primera-seccion.png" alt="Linea" class="img-fluid d-none d-sm-none d-md-block wp-animated" id="linea1" data-animation="fadeInDown" data-animation-delay="0.5s" data-animation-duration="3s"/>
    
                            </div>    
                        </div> 
                    </div>
                    <div class="col-12 col-lg-2 align-self-center"></div>
                </div>
                <div class="row d-flex justify-content-center wp-animated-group">
                    <div class="col-12 col-lg-2 align-self-center"></div>
                    <div class="col-12 col-lg-4 col-sm-12 aling-self-center">
                        <div class="row d-flex justify-content-end ">
                            <div class="row">
                                <img src="img/Experience-and-talent.gif" alt="EXPERIENCE AND TALENT" class="img-fluid circulos wp-animated" data-animation="fadeInDown" data-animation-duration="3s"/>
                            </div>
                            <div class="row pt-2">
                                <h1 class="wp-animated" data-animation="fadeInDown" data-animation-delay="0.2s" data-animation-duration="3s"><b>EXPERIENCE <br>
                                    AND TALENT</b></h1>
                                <p class="wp-animated" data-animation="fadeInDown" data-animation-delay="0.3s" data-animation-duration="3s">We hae an excellent team of people, who <br>
                                    support our processes every day with their <br>
                                    talent, commitment, training and <br>
                                    experience.</p>
                                <img src="img/Lineas-segunda-seccion.png" alt="Linea" class="img-fluid d-none d-sm-none d-md-block wp-animated" id="linea2" data-animation="fadeInDown" data-animation-delay="0.4s" data-animation-duration="3s"/>
                            </div>
                        </div> 
                    </div>
                    <div class="col-12 col-lg-4 align-self-center"></div>
                    <div class="col-12 col-lg-2 align-self-center"></div>
                </div>
                <div class="row d-flex justify-content-center wp-animated-group">
                    <div class="col-12 col-lg-4 align-self-center"></div>
                    <div class="col-12 col-lg-6 align-self-center">
                        <div class="row d-flex justify-content-center">
                            <div class="row pt-2">
                                <div class="d-flex justify-content-center">
                                    <img src="img/Quality-services.gif" alt="QUALITY SERVICES" class="img-fluid circulos wp-animated"  data-animation="fadeInDown" data-animation-duration="3s"/>
                                </div>
                                <h3 class="text-center wp-animated" data-animation="fadeInDown" data-animation-delay="0.2s" data-animation-duration="3s"><b>QUALITY <br>
                                SERVICES</b></h3>
                                <p class="text-center wp-animated" data-animation="fadeInDown" data-animation-delay="0.3s" data-animation-duration="3s">In <b>Kluane Drilling Ltd.</b> we work together with our <br>
                                excellent people to provide quality services and to <br>
                                continuosly improve our organization.</p>
                                
                            </div>    
                        </div> 
                    </div>
                    <div class="col-12 col-lg-2 align-self-center"></div>
                </div>
            </div>
        </div>
    </section>
    <!--WHO WE ARE AND HAVE-->
    <div class="container who-we-have">
        <div class="row wp-animated-group">
            <div class="col-12 col-lg-2 align-self-center"></div>
            <div class="col-12 col-lg-4 align-self-center">
                <div class="row pt-5">
                    <h3 class="wp-animated"  data-animation="fadeInDown" data-animation-duration="3s"><b>WHO WE ARE</b></h3>
                </div>
                <img src="img/who-we-are.png" class="card-img-top mt-2 wp-animated" alt="WHO WE ARE" data-animation="fadeInDown" data-animation-delay="0.2s" data-animation-duration="3s"/>
                <div class="mt-3 mb-5">
                    <p class="card-text wp-animated" data-animation="fadeInDown" data-animation-delay="0.3s" data-animation-duration="3s">Kluane Drilling Ltd. is a private Canadian company <br>
                    with more than 30 years of experience dedicated <br>
                    to providing high quality drilling services based on <br>
                    technical innovation and human talent.</p>
                </div>
            </div>
            <div class="col-12 col-lg-4 align-self-center">
                <div class="pt-5">
                    <h3 class="mb-3 wp-animated"  data-animation="fadeInDown" data-animation-duration="3s"><b>WE HAVE</b></h3>
                    <img src="img/Worker.gif" alt="EXCELLENT TEAM OF PEOPLE" class="img-fluid we-have wp-animated" id="worker" data-animation="fadeInDown" data-animation-delay="0.2s" data-animation-duration="3s"/>
                    <aside>
                        <b class="wp-animated" data-animation="fadeInDown" data-animation-delay="0.2s" data-animation-duration="3s">EXCELLENT TEAM OF PEOPLE</b> <br>
                    </aside>
                    <p class="wp-animated" data-animation="fadeInDown" data-animation-delay="0.2s" data-animation-duration="3s">We have an excellent team of people, who <br>
                        support our processes every day with their <br>
                        talent, commitment, training and experience.</p>

                        <img src="img/Minimal.gif" alt="EXCELLENT TEAM OF PEOPLE" class="img-fluid we-have wp-animated" id="minimal" data-animation="fadeInDown" data-animation-delay="0.3s" data-animation-duration="3s"/>
                    <aside>
                        <b class="wp-animated" data-animation="fadeInDown" data-animation-delay="0.3s" data-animation-duration="3s">ENVIRONMENTAL CARE</b> <br>
                    </aside>
                    <p class="mb-5 wp-animated" data-animation="fadeInDown" data-animation-delay="0.3s" data-animation-duration="3s">We understand the importance of <br>
                    environmental care and good relations with
                    the community and strives to ensure that its 
                    operations are carried out to highest
                    standards and responsible manner.</p>
                </div>
            </div>
            <div class="col-12 col-lg-2 align-self-center"></div>
            
        </div>
    </div>
    <!--ISO-->
    <div class="container-fluid iso">
        <div class="container justify-content-center wp-animated-group">
            <div class="row d-flex justify-content-center pt-5 wp-animated" data-animation="fadeInDown" data-animation-duration="5s">
                <img src="img/iso.png" alt="ISO 45001" id="icono-iso"/>
            </div>
            <div class="row d-flex justify-content-center pt-4">
                <h5 class="wp-animated"  data-animation="fadeInDown" data-animation-delay="0.3s" data-animation-duration="5s"><b>Kluane Drilling Ltd. is committed to the "Injury Free Meters"</b> <br>
                philosophy throughout its operations. We adopted <br>
                internationally recognized safety standards such as <b>ISO 45001 <br>
                certification</b> in each country where it operates in order to <b>fulfill <br>
                its commitment to the health and safety of all its workers.</b></h5>
                
                <h5 class="mb-5 wp-animated"  data-animation="fadeInDown" data-animation-delay="0.6s" data-animation-duration="5s">This international standard ensures that the performance of the <br>
                company <b>matches the high levels of safety performance of <br>
                the services we supply.</b></h5>
            </div>
        </div>
    </div>
     <!--ENVIRONMENTAL IMPACT AND SOCIAL DEVELOPMENT-->
    <section class="showcase-enviroment" id="timeline">
        <video src="vid/fondo-bosque.mp4" muted loop autoplay ></video>
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="container pt-5 environment" >
                        <div class="row text pt-5">
                            <div class="col-12 col-lg-2 align-self-center"></div>
                                <div class="col-12 col-lg-4 align-self-center pt-5 wp-animated-group"  >
                                    <div class="card wp-animated" id="card" data-animation="fadeInDown" data-animation-duration="5s">
                                        <div class="card-body">
                                            <img src="img/Environment.gif" alt=" ENVIRONMENTAL IMPACT" class="img-fluid wp-animated" data-animation="fadeInDown" data-animation-delay="0.6s" data-animation-duration="5s"/>
                                            <div class="contenido">
                                                <h3 class="card-title text-start wp-animated" data-animation="fadeInDown" data-animation-delay="0.7s" data-animation-duration="5s"><b>ENVIRONMENTAL <br> IMPACT</b></h3>
                                                <p class="card-text text-start pt-2 wp-animated" data-animation="fadeInDown" data-animation-delay="0.8s" data-animation-duration="5s">Kluane Drilling Ltd. understands <br>
                                                the <b>importance of environmental <br>
                                                care</b> and strives to ensure that its <br>
                                                operations are carried out to the <br>
                                                <b>highest standards in a <br>
                                                professional and responsible <br>
                                                manner.</b></p>
                                            </div>
                                            
                                        </div>
                                      </div>
                                </div>
                                <div class="col-12 col-lg-4 align-self-center pt-5 wp-animated-group" data-animation="fadeInRight">
                                    <div class="card wp-animated" id="card" data-animation="fadeInDown" data-animation-duration="5s">
                                        <div class="card-body">
                                            <img src="img/Worker-bco.gif" alt="SOCIAL DEVELOPMENT" class="img-fluid wp-animated" data-animation="fadeInDown" data-animation-delay="0.6s" data-animation-duration="5s"/>
                                            <div class="contenido">
                                                <h3 class="card-title text-start wp-animated" data-animation="fadeInDown" data-animation-delay="0.7s" data-animation-duration="5s"><b>SOCIAL <br> DEVELOPMENT</b></h3>
                                                <p class="card-text text-start pt-2 wp-animated" data-animation="fadeInDown" data-animation-delay="0.8s" data-animation-duration="5s"><b>Kluane Drilling Ltd.</b> strives to <br>
                                                ensure to have good relations <br>
                                                with the community, with the <br>
                                                aim of gives priority to <b>direct <br>
                                                employment of local labour</b> <br>
                                                and <b>suppliers in the project <br>
                                                area.</b></p>
                                            </div>
                                            
                                        </div>
                                      </div>
                                </div>
                                <div class="col-12 col-lg-2 align-self-center"></div>
                        </div>
                    </div>
                </div>
            </div>
           
    </section>
   <!--RISK ANALYSIS AND PREVENTION-->
   <div class="container risk">
        <div class="row pt-5">
            <div class="col-12 col-lg-6 col-md-12 col-sm-12 aling-self-center wp-animated-group">
                <img src="img/risk.png" alt="RISK ANALYSIS AND PREVENTION" class="img-fluid img-thumbnail-item2 wp-animated" data-animation="fadeInDown" data-animation-duration="5s"/>
            </div>
            <div class="col-12 col-lg-6 col-md-12 col-sm-12 aling-self-center wp-animated-group">
                    <img src="img/Thunder.gif" alt="RISK ANALYSIS AND PREVENTION" id="icono" class="img-fluid wp-animated" data-animation="fadeInDown" data-animation-duration="5s"/>
                    <h2 class="wp-animated" data-animation="fadeInDown" data-animation-delay="0.6s" data-animation-duration="5s"><b>RISK ANALYSIS <br>
                    AND PREVENTION</b></h2>
                    <p class="wp-animated" data-animation="fadeInDown" data-animation-delay="0.8s" data-animation-duration="5s">All <b>Kluane Drilling Ltd.</b> personnel receive <br>
                    continuos training under international <br>
                    standards and best practices in the industry, <br>
                    with special emphasis on <b>risk analysis and <br>
                    prevention</b>, and the correct use of <b>Personal <br>
                    Protective Equipment.</b></p>
            </div>
        </div>
    </div>
     <!--SUSTAINABILITY-->
     <section class="showcase2" id="sustainability">
        <header class="navbar navbar-expand-lg">   
        </header>
        <video src="vid/sust-loop.mp4" muted loop autoplay ></video>
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="text">
                        <div class="container">
                            <div class="row d-flex justify-content-center wp-animated-group">
                                <div class="row d-flex justify-content-center pt-5 ">
                                    <img src="img/sustainability.png" alt="HIGH MOBILITY" id="icono" class="img-fluid wp-animated" data-animation="fadeInDown" data-animation-duration="5s"/>
                                </div>
                                <h2 class="wp-animated" data-animation="fadeInDown" data-animation-delay="0.4s" data-animation-duration="5s"><b>SUSTAINABILITY</b></h2>
                                <p class="wp-animated" data-animation="fadeInDown" data-animation-delay="0.6s" data-animation-duration="5s"><b>Our approach to Sustainability and Corporate Responsability</b> <br>
                                Kluane Drilling Ltd. understands that long-term success for us and our <br>
                                clients is only possible if we work sustainability in a responsible and <br>
                                respectful manner, and adopt the principles of E.S.G.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
    </section>
    <div class="container social-governance">
        <div class="row wp-animated-group">
            <div class="col-12 col-lg-4 aling-self-center">
                <div class="card wp-animated" data-animation="zoomIn" data-animation-duration="5s">
                    <img src="img/social.jpg" class="card-img-top img-thumbnail img-fluid zoom" alt="SOCIAL"/>
                    <div class="card-body">
                        <h2><b> SOCIAL</b></h2>
                      <p class="card-text">In our business, social sustainability <br>
                        performance issues include community <br>
                        engagement, providing good local work <br>
                        opportunities, reducing poverty, human <br>
                        rights, fair labour practices, diversity, equality <br>
                        of opportunity, and more.</p>
                    </div>
                  </div>
            </div>
            <div class="col-12 col-lg-4 aling-self-center">
                <div class="card wp-animated" data-animation="zoomIn" data-animation-duration="5s" data-animation-delay="1s">
                    <img src="img/environment.jpg" class="card-img-top img-thumbnail img-fluid zoom" alt="ENVIRONMENT"/>
                    <div class="card-body">
                        <h2><b>ENVIRONMENT</b></h2>
                      <p class="card-text">We understand the importance of the <br>
                        environment, especially for the local <br>
                        communities around our projects, and <br>
                        strive to ensure that our operations are <br>
                        carried out in a sustainable and <br>
                        responsible manner.</p>
                    </div>
                  </div>
            </div>
            <div class="col-12 col-lg-4 aling-self-center">
                <div class="card wp-animated" data-animation="zoomIn" data-animation-duration="5s" data-animation-delay="2s">
                    <img src="img/governance.jpg" class="card-img-top img-thumbnail img-fluid zoom" alt="GOVERNANCE"/>
                    <div class="card-body">
                        <h2><b>GOVERNANCE</b></h2>
                      <p class="card-text">In Kluane Drilling Ltd. our shared <br>
                        family values and strong management <br>
                        systems based on international <br>
                        standards promote a culture of doing <br>
                        the right things and working together <br>
                        with our clients and our excellent <br>
                        people to continuosly improve our <br>
                        service.</p>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <!--OUR GLOBAL PRESENCE-->
    <div class="container-fluid" id="fondo-azul">
        <div class="container">
            <div class="row d-flex justify-content-center wp-animated-group">
                <img src="img/Logo-KLUANE-Bco.gif" alt="KLUANE DRILLING LTD." id="logo" class="wp-animated img-fluid" data-animation="fadeInDown" data-animation-duration="5s"/>
                <h1 class="text-center wp-animated" data-animation="fadeInDown" data-animation-delay="0.4s" data-animation-duration="5s">OUR GLOBAL <b>PRESENCE</b></h1>
                <p class="text-center wp-animated" data-animation="fadeInDown" data-animation-delay="0.5s" data-animation-duration="5s">Kluane Drilling Ltd. continues to expand its operations and has <br>
                archieved international recognition in the industry thanks to the <br>
                efforts of its subsidiaries in the following countries:</p>
            </div>
            <div class="row wp-animated-group">
                <nav class="justify-content-center wp-animated" data-animation="fadeInDown" data-animation-duration="5s">
                    <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                      <button class="nav-link active" id="nav-north-tab" data-bs-toggle="tab" data-bs-target="#nav-north" type="button" role="tab" aria-controls="nav-north" aria-selected="true">NORTH AMÉRICA</button>
                      <button class="nav-link" id="nav-central-tab" data-bs-toggle="tab" data-bs-target="#nav-central" type="button" role="tab" aria-controls="nav-central" aria-selected="false">CENTRAL & SOUT AMERICA</button>
                      <button class="nav-link" id="nav-africa-tab" data-bs-toggle="tab" data-bs-target="#nav-africa" type="button" role="tab" aria-controls="nav-africa" aria-selected="false">AFRICA</button>
                    </div>
                  </nav>
                  <div class="tab-content justify-content-center" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-north" role="tabpanel" aria-labelledby="nav-north-tab" >
                        <div class="row d-flex justify-content-center pt-5 pb-5 wp-animated" data-animation="fadeInDown" data-animation-duration="5s">
                            <video muted autoplay loop class="video-bg_video" style="width: 1200px;">
                                <source src="vid/Mapa_V02.mp4" type="video/mp4">
                            </video>
                        </div>
                        
                    </div>
                    <div class="tab-pane fade" id="nav-central" role="tabpanel" aria-labelledby="nav-central-tab">...</div>
                    <div class="tab-pane fade" id="nav-africa" role="tabpanel" aria-labelledby="nav-africa-tab">...</div>
                  </div>
            </div>
        </div>
    </div>
           
            

<?php require_once("tools/footer.php"); ?>