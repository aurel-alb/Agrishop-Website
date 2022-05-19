<?php 
include_once 'header.php'
?>


<div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="InputName" class="mb-0">Preume</label>
                                <form  action="includes/singup.inc.php" method="post">
                                <input type="text"  name = "fname"class="form-control" id="InputName" placeholder="Prenumele tau"> </div>
                                </form>
                            <div class="form-group col-md-6">
                            <form  action="includes/singup.inc.php" method="post">
                                <label for="InputLastname" name = "lname" class="mb-0">Nume</label>
                                <input type="text" class="form-control" id="InputLastname" placeholder="Numele de Familie"> </div>
                            <div class="form-group col-md-6">
                            <form  action="includes/singup.inc.php" method="post">
                                <label for="InputEmail1" name="email" class="mb-0">Adresa de Email</label>
                                <input type="email" class="form-control" id="InputEmail1" placeholder="Email-ul tau"> </div>
                            <div class="form-group col-md-6">
                            <form  action="includes/singup.inc.php" method="post">
                                <label for="InputPassword1"  name = "password"class="mb-0">Parola</label>
                                <input type="password" class="form-control" id="InputPassword1" placeholder="Parola ta">
                                <button type="submit" name="submit" class="btn hvr-hover">Inregistrare</button>
                            </div>
                        </div>
                        
                    
                </div>
            </div>              

<?php 
include_once 'footer.php';
?>

<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

<!-- ALL JS FILES -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- ALL PLUGINS -->
<script src="js/jquery.superslides.min.js"></script>
<script src="js/bootstrap-select.js"></script>
<script src="js/inewsticker.js"></script>
<script src="js/bootsnav.js."></script>
<script src="js/images-loded.min.js"></script>
<script src="js/isotope.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/baguetteBox.min.js"></script>
<script src="js/form-validator.min.js"></script>
<script src="js/contact-form-script.js"></script>
<script src="js/custom.js"></script>