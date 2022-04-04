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
                                <h1 >ABOUT <b>US</b></h1>
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
        <div class="container">
            <div class="row d-flex justify-content-center">
                <img src="img/Logo-KLUANE-azul.gif" alt="KLUANE DRILLING LTD." class="img-fluid"/>
                <p class="text-center mb-5">Kluane Drilling Ltd. is a <b>private Canadian company</b> with more than <br>
                <b>30 years of experience</b> dedicated to providing high quality drilling <br>
                services based on <b>technical innovation and human talent.</b></p>
            </div>
        </div>
    </div>
    <!--VIDEO-->
    <div class="container-fluid" id="fondo-negro">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-5 mb-5">
                    <div class="container-image d-flex justify-content-center pt-5">
                        <img src="img/thumb-video.jpg" alt="KLUANE VIDEO" id="poster" class="img-fluid img-thumbnail-item imagen-poster"/>
                        <div class="row d-flex justify-content-center btn-play">
                            <img src="img//play-button.png" alt="Play" id="btn-play" data-bs-toggle="modal" data-bs-target="#Kluane-video"/>
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
     <div class="container-fluid" id="fondo-forest">
        <div class="container pt-5" >
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-lg-4 align-self-center"></div>
                <div class="col-12 col-lg-6 align-self-center">
                    <div class="row d-flex justify-content-end">
                        <div class="row pt-2">
                            <div class="d-flex justify-content-end">
                                <img src="img/High-quality.gif" alt="HIGH QUALITY DRILLING SERVICES" class="img-fluid circulos"/>
                            </div>
                            <h3 class="text-end"><b>HIGH QUALITY</b></h3>
                            <h3 class="text-end"><b>DRILLING SERVICES</b></h3>
                            <p class="text-end">Our mission is to <b>provide exceptional service to <br>
                            clients</b> in the exploration and mining industry, using <br>
                            <b>innovative and highly portable equipment</b></p>
                            <img src="img/Lineas-primera-seccion.png" alt="Linea" class="img-fluid d-none d-sm-none d-md-block" id="linea1"/>

                        </div>    
                    </div> 
                </div>
                <div class="col-12 col-lg-2 align-self-center"></div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-lg-2 align-self-center"></div>
                <div class="col-12 col-lg-4 col-sm-12 aling-self-center">
                    <div class="row d-flex justify-content-end">
                        <div class="row">
                            <img src="img/Experience-and-talent.gif" alt="EXPERIENCE AND TALENT" class="img-fluid circulos"/>
                        </div>
                        <div class="row pt-2">
                            <h1><b>EXPERIENCE <br>
                                AND TALENT</b></h1>
                                <p>We hae an excellent team of people, who <br>
                                support our processes every day with their <br>
                                talent, commitment, training and <br>
                                experience.</p>
                                <img src="img/Lineas-segunda-seccion.png" alt="Linea" class="img-fluid d-none d-sm-none d-md-block" id="linea2"/>
                        </div>
                    </div> 
                </div>
                <div class="col-12 col-lg-4 align-self-center"></div>
                <div class="col-12 col-lg-2 align-self-center"></div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-lg-4 align-self-center"></div>
                <div class="col-12 col-lg-6 align-self-center">
                    <div class="row d-flex justify-content-center">
                        <div class="row pt-2">
                            <div class="d-flex justify-content-center">
                                <img src="img/Quality-services.gif" alt="QUALITY SERVICES" class="img-fluid circulos"/>
                            </div>
                            <h3 class="text-center"><b>QUALITY <br>
                            SERVICES</b></h3>
                            <p class="text-center">In <b>Kluane Drilling Ltd.</b> we work together with our <br>
                            excellent people to provide quality services and to <br>
                            continuosly improve our organization.</p>   
                        </div>    
                    </div> 
                </div>
                <div class="col-12 col-lg-2 align-self-center"></div>
            </div>
        </div>
    </div>
    <!--WHO WE ARE AND HAVE-->
    <div class="container who-we-have">
        <div class="row">
            <div class="col-12 col-lg-2 align-self-center"></div>
            <div class="col-12 col-lg-4 align-self-center">
                <div class="row pt-5">
                    <h3><b>WHO WE ARE</b></h3>
                </div>
                <img src="img/who-we-are.png" class="card-img-top mt-2" alt="WHO WE ARE"/>
                <div class="mt-3 mb-5">
                    <p class="card-text">Kluane Drilling Ltd. is a private Canadian company <br>
                    with more than 30 years of experience dedicated <br>
                    to providing high quality drilling services based on <br>
                    technical innovation and human talent.</p>
                </div>
            </div>
            <div class="col-12 col-lg-4 align-self-center">
                <div class="pt-5">
                    <h3 class="mb-3"><b>WE HAVE</b></h3>
                    <img src="img/Worker.gif" alt="EXCELLENT TEAM OF PEOPLE" class="img-fluid we-have" id="worker"/>
                    <aside>
                        <b>EXCELLENT TEAM OF PEOPLE</b> <br>
                    </aside>
                    <p>We have an excellent team of people, who <br>
                        support our processes every day with their <br>
                        talent, commitment, training and experience.</p>

                        <img src="img/Minimal.gif" alt="EXCELLENT TEAM OF PEOPLE" class="img-fluid we-have" id="minimal"/>
                    <aside>
                        <b>ENVIRONMENTAL CARE</b> <br>
                    </aside>
                    <p class="mb-5">We understand the importance of <br>
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
        <div class="container justify-content-center">
            <div class="row d-flex justify-content-center pt-5">
                <img src="img/iso.png" alt="ISO 45001" id="icono-iso"/>
            </div>
            <div class="row d-flex justify-content-center pt-4">
            <h5 ><b>Kluane Drilling Ltd. is committed to the "Injury Free Meters"</b> <br>
                philosophy throughout its operations. We adopted <br>
                internationally recognized safety standards such as <b>ISO 45001 <br>
                certification</b> in each country where it operates in order to <b>fulfill <br>
                its commitment to the health and safety of all its workers.</b></h5>
                
                <h5 class="mb-5">This international standard ensures that the performance of the <br>
                company <b>matches the high levels of safety performance of <br>
                the services we supply.</b></h5>
            </div>
        </div>
    </div>
     <!--ENVIRONMENTAL IMPACT AND SOCIAL DEVELOPMENT-->
     <section class="showcase-enviroment">
        <video src="vid/fondo-bosque.mp4" muted loop autoplay ></video>
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="container pt-5 environment">
                        <div class="row text pt-5">
                            <div class="col-12 col-lg-2 align-self-center"></div>
                                <div class="col-12 col-lg-4 align-self-center pt-5">
                                    <div class="card" id="card">
                                        <div class="card-body">
                                            <img src="img/Environment.gif" alt=" ENVIRONMENTAL IMPACT" class="img-fluid"/>
                                            <div class="contenido">
                                                <h3 class="card-title text-start"><b>ENVIRONMENTAL <br> IMPACT</b></h3>
                                                <p class="card-text text-start pt-2">Kluane Drilling Ltd. understands <br>
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
                                <div class="col-12 col-lg-4 align-self-center pt-5">
                                    <div class="card" id="card">
                                        <div class="card-body">
                                            <img src="img/Worker-bco.gif" alt="SOCIAL DEVELOPMENT" class="img-fluid"/>
                                            <div class="contenido">
                                                <h3 class="card-title text-start"><b>SOCIAL <br> DEVELOPMENT</b></h3>
                                                <p class="card-text text-start pt-2"><b>Kluane Drilling Ltd.</b> strives to <br>
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
            <div class="col-12 col-lg-6 col-md-12 col-sm-12 aling-self-center">
                <img src="img/risk.png" alt="RISK ANALYSIS AND PREVENTION" class="img-fluid img-thumbnail-item2"/>
            </div>
            <div class="col-12 col-lg-6 col-md-12 col-sm-12 aling-self-center">
                    <img src="img/Thunder.gif" alt="RISK ANALYSIS AND PREVENTION" id="icono"/>
                    <h2><b>RISK ANALYSIS <br>
                    AND PREVENTION</b></h2>
                    <p>All <b>Kluane Drilling Ltd.</b> personnel receive <br>
                    continuos training under international <br>
                    standards and best practices in the industry, <br>
                    with special emphasis on <b>risk analysis and <br>
                    prevention</b>, and the correct use of <b>Personal <br>
                    Protective Equipment.</b></p>
            </div>
        </div>
    </div>
           
            

<?php require_once("tools/footer.php"); ?>