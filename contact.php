<?php

define("TITLE", "Contact | Honor Roll Skate Crew");

include('includes/header.php')
?>
<div class="jumbotron jumbotron-fluid contact" id="jumbo">
    <div class="container">
        <hr>
        <h1 class="display-4 contactTitle">Contact Us!</h1>
        <hr>


        <?php

            // Check for Header Injections
            function has_header_injection($str) {
                return preg_match( "/[\r\n]/", $str );
            }


            if (isset($_POST['contact_submit'])) {

                // Assign trimmed form data to variables
                // Note that the value within the $_POST array is looking for the HTML "name" attribute, i.e. name="email"
                $name	= trim($_POST['name']);
                $email	= trim($_POST['email']);
                $msg	= $_POST['message']; // no need to trim message

                // Check to see if $name or $email have header injections
                if (has_header_injection($name) || has_header_injection($email)) {

                    die(); // If true, kill the script

                }

                if (!$name || !$email || !$msg) {
                    echo '<h4 class="error">All fields required.</h4>
                          <a href="contact.php" class="button block">Go back and try again!</a>';
                    exit;
                }

                // Add the recipient email to a variable
                $to	= "jordan@thehnrl.com";

                // Create a subject
                $subject = "$name sent a message via your contact form";

                // Construct the message
                $message = "Name: $name\r\n";
                $message .= "Email: $email\r\n\r\n";
                $message .= "Message:\r\n$msg";

                // If the subscribe checkbox was checked
                if (isset($_POST['subscribe']) && $_POST['subscribe'] == 'Subscribe' ) {

                    // Add a new line to the $message
                    $message .= "\r\n\r\nPlease add $email to the mailing list.\r\n";

                }

                $message = wordwrap($message, 72); // Keep the message neat n' tidy

                // Set the mail headers into a variable
                $headers  = "MIME-Version: 1.0\r\n";
                $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
                $headers .= "From: " . $name . " <" . $email . ">\r\n";
                $headers .= "X-Priority: 1\r\n";
                $headers .= "X-MSMail-Priority: High\r\n\r\n";


                // Send the email!
                mail($to, $subject, $message, $headers);
             ?>

                <!-- Show success message after email has sent -->
                <h5>Thanks for contacting Honor Roll Skate Crew!</h5>
                <p>Please allow 24 hours for a response.</p>
                <p><a href="/index.php" class="button block">&laquo; Go to Home Page</a></p>

            <?php
                } else {
            ?>
                <form method="post" id="contact-form">
                    <div class="row">
                        <div class="col">
                            <label for="name">Your Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                            <hr>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                        <hr>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control"
                                    name="message"
                                    id="message"
                                    rows="3"
                                    placeholder="--> Your message here! <--"
                        ></textarea>
                        <hr>
                    </div>
                    <div class="form-check submitBtn">
                        <input class="form-check-input"
                                type="checkbox"
                                name="subscribe"
                                value="Subscribe"
                                id="subscribe"
                        >
                        <label class="form-check-label" for="subscribe">
                            Subscribe to Newsletter!
                        </label>
                        <hr>
                    </div>
                    <div class="submitBtn">
                    <button type="submit" class="btn btn-primary" name="contact_submit">Submit</button>
                    </div>
                    <hr>
                    <div class="contactImage">
                        <img src="/img/Logo.png" style="width: 20rem;" alt="HNRL">
                    </div>
                </form>

            <?php
                }
            ?>
    </div>
</div>




<?php include('includes/footer.php') ?>
