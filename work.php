<?php
require_once("tools/header.php");
require_once("tools/navbar.php");
?>
    <div class="container-fluid">
        <div class="row">
            <span>galeria</span>
        </div>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-start">
            <img src="" alt=""/>
        </div>
        <form action="">
            <div class="container">
                <div class="row d-flex justify-content-start">
                    <div class="col-auto">
                        <label for="inputPassword6" class="form-label">Password</label>
                        <input type="text" id="inputPassword6" class="form-control" >
                    </div>
                    <div class="col-auto">
                        <label for="inputPassword6" class="form-label">Password</label>
                        <input type="text" id="inputPassword6" class="form-control" >
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-start">
                <div class="col-auto">
                    <label for="inputPassword6" class="form-label">Password</label>
                    <input type="text" id="inputPassword6" class="form-control" >
                </div>
                <div class="col-auto">
                    <label for="inputPassword6" class="form-label">Password</label>
                    <input type="text" id="inputPassword6" class="form-control" >
                </div>
            </div>
            <div class="row d-flex justify-content-start">
                <div class="col-auto">
                    <label for="inputPassword6" class="form-label">Password</label>
                    <input type="text" id="inputPassword6" class="form-control" >
                </div>
                <div class="col-auto">
                    <label for="inputPassword6" class="form-label">Password</label>
                    <input type="text" id="inputPassword6" class="form-control" >
                </div>
            </div>
            <div class="row d-flex justify-content-start">
                <div class="col">
                    <label for="inputPassword6" class="form-label">Password</label>
                    <input type="text" id="inputPassword6" class="form-control" >
                </div>
            </div>
            <div class="row d-flex justify-content-start">
                <div class="col">
                    <label for="inputPassword6" class="form-label">Password</label>
                    <textarea class="form-control borde-bottom" id="mensaje" rows="3" name="mensaje"></textarea>
                </div>
            </div>
            <div class="text-end">
                <button type="button" class="btn btn-light btn-enviar" onclick="enviar()">Enviar</button>
            </div>

        </form>
        
       
        
       
        
    </div>
<?php require_once("tools/footer.php"); ?>