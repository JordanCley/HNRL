<?php

define("TITLE", "Contact | Honor Roll Skate Crew");

include('includes/header.php')
?>
<div class="jumbotron jumbotron-fluid contact" id="jumbo">
    <div class="container">
        <hr>
        <h1 class="display-4 contactTitle">Contact Us!</h1>
        <hr>
        <form>
            <div class="row">
                <div class="col">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" id="firstName" placeholder="First name">
                    <hr>
                </div>
                <div class="col">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" id="lastName" placeholder="Last name">
                    <hr>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                <hr>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="--> Your message here! <--"
                          rows="3"></textarea>
                <hr>
            </div>
            <div class="submitBtn">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <hr>
            <div class="contactImage">
                <img src="/img/HNRL_logo.png" width="400" height="200" alt="">
            </div>
        </form>
    </div>
</div>




<?php include('includes/footer.php') ?>
