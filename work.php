<?php
require_once("tools/header.php");
require_once("tools/navbar.php");
?>
    <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="text">
                        <div class="container">
                            <div class="row d-flex justify-content-center">
                                <h1>WORK <br><b>WITH US</b></h1>
                                <h5>Be part of the team <br> at <b>Kluane Drilling LTD.</b></h5>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
           
    </section>
    <?php
    require_once("tools/menu.php");
    ?>

     <!--GALERÍA CON HOVER-->
     <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="slider-w">
                <div class="slide-track-w">
                    <div class="slide-w">
                        <img  src="img/worker-1-color.png"  alt="KLUANE DRILLING LTD."/>
                        <img class="top" src="img/worker-1-gris.png" alt="KLUANE DRILLING LTD."  />
                    </div>
                    <div class="slide-w">
                        <img  src="img/worker-2-color.png"  alt="KLUANE DRILLING LTD."/>
                        <img class="top" src="img/worker-2-gris.png" alt="KLUANE DRILLING LTD."/>
                    </div>
                    <div class="slide-w">
                        <img  src="img/worker-3-color.png"  alt=" KLUANE DRILLING LTD."/>
                        <img class="top" src="img/worker-3-gris.png" alt="KLUANE DRILLING LTD."/>
                    </div>
                    <div class="slide-w">
                        <img  src="img/worker-4-color.png"  alt="KLUANE DRILLING LTD."/>
                        <img class="top" src="img/worker-4-gris.png" alt="KLUANE DRILLING LTD."/>
                    </div>
                    <div class="slide-w">
                        <img  src="img/worker-5-color.png"  alt="KLUANE DRILLING LTD."/>
                        <img class="top" src="img/worker-5-gris.png" alt="KLUANE DRILLING LTD."/>
                    </div>
                    <div class="slide-w">
                        <img  src="img/worker-1-color.png"  alt="KLUANE DRILLING LTD."/>
                        <img class="top" src="img/worker-1-gris.png" alt="KLUANE DRILLING LTD."  />
                    </div>
                    <div class="slide-w">
                        <img  src="img/worker-2-color.png"  alt="KLUANE DRILLING LTD."/>
                        <img class="top" src="img/worker-2-gris.png" alt="KLUANE DRILLING LTD."/>
                    </div>
                    <div class="slide-w">
                        <img  src="img/worker-3-color.png"  alt=" KLUANE DRILLING LTD."/>
                        <img class="top" src="img/worker-3-gris.png" alt="KLUANE DRILLING LTD."/>
                    </div>
                    <div class="slide-w">
                        <img  src="img/worker-4-color.png"  alt="KLUANE DRILLING LTD."/>
                        <img class="top" src="img/worker-4-gris.png" alt="KLUANE DRILLING LTD."/>
                    </div>
                    <div class="slide-w">
                        <img  src="img/worker-5-color.png"  alt="KLUANE DRILLING LTD."/>
                        <img class="top" src="img/worker-5-gris.png" alt="KLUANE DRILLING LTD."/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FORMULARIO-->
    <div class="container-fluid form">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-2 align-self-center"></div>
                <div class="col-12 col-lg-8 align-self-center">
                    <div class="row d-flex justify-content-center">
                        <img src="img/Logo-KLUANE-azul.gif" alt="KLUANE DRILLING LTD." class="img-fluid" id="logo"/>
                        <h5 class="text-center"><b>Complete the following from <br>
                        and we'll be in touch shortly</b></h5>
                    </div>
                    <div class="row pt-5">
                        <form action="">
                            <div class="row">
                                <div class="col-12 col-lg-6 col-md-12 col-sm-12 pt-2">
                                    <label for="name" class="form-label">NAMES</label>
                                    <input type="text" class="form-control borde-bottom" id="name" name="name">
                                </div>
                                <div class="col-12 col-lg-6 col-md-12 col-sm-12 pt-2">
                                    <label for="Lname" class="form-label">LAST NAME</label>
                                    <input type="text" class="form-control borde-bottom" id="Lname" name="Lname">
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-12 col-lg-6 col-md-12 col-sm-12 pt-2">
                                    <label for="email" class="form-label">EMAIL</label>
                                    <input type="email" class="form-control borde-bottom" id="email" name="email">
                                </div>
                                <div class="col-12 col-lg-6 col-md-12 col-sm-12 pt-2">
                                    <label for="phone" class="form-label">PHONE</label>
                                    <input type="text" class="form-control borde-bottom" id="phone" name="phone">
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-12 col-lg-6 col-md-12 col-sm-12 pt-2">
                                    <label for="country" class="form-label">COUNTRY</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>SELECT</option>
                                        <option value="1">CANADA</option>
                                        <option value="2">AFRICA</option>
                                        <option value="3">MEXICO</option>
                                        <option value="3">GUATEMALA</option>
                                        <option value="3">PANAMA</option>
                                        <option value="3">DOMINICAN REPUBLIC</option>
                                        <option value="3">COLOMBIA</option>
                                        <option value="3">ECUADOR</option>
                                        <option value="3">CHILE</option>
                                        <option value="3">PERU</option>
                                        <option value="3">NICARAGUA</option>
                                      </select>
                                </div>
                                <div class="col-12 col-lg-6 col-md-12 col-sm-12 pt-2">
                                    <label for="city" class="form-label">CITY</label>
                                    <input type="text" class="form-control borde-bottom" id="city" name="city">
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-12 col-lg-12 col-md-12 col-sm-12 pt-2">
                                    <label for="position" class="form-label">POSITION OF INTEREST</label>
                                    <input type="text" class="form-control borde-bottom" id="position" name="position">
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-12 col-lg-12 col-md-12 col-sm-12 pt-2">
                                    <label for="mensaje" class="form-label">COMMENTS</label>
                                    <textarea class="form-control" id="mensaje" rows="3" name="mensaje"></textarea>
                                </div>
                            </div>
                            <div class="text-end pt-4 pb-5">
                                <button type="button" class="btn btn-light btn-enviar">SEND REQUEST</button>
                              </div>
                        </form>
                        
                    </div>
                </div>
                <div class="col-12 col-lg-2 align-self-center"></div>
            </div>
        </div>

    </div>
<?php require_once("tools/footer.php"); ?>