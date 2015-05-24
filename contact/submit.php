<?php
include '../header.php';
?>

<?php

$email = $_POST["email"];
$message = $_POST["message"];

$email = escapeshellcmd($email);
$message = escapeshellcmd($message);

$formatted_msg = "Email: " . $email . "\nMessage:\n" . $message;

mail("pricetx", "Website Contact Form", $formatted_msg);

?>

      <div id="contentArea">
        <div class="container" id="contentContainer">
          <div class="row">

            <div class="col s12 m8 l9">
              <h1 class="light grey-text text-darken-4 header">Thank You</h1>
              <p class="light grey-text text-darken-4 intro-paragraph">
                Thank you for your message. I will try to get back to you shortly.
              </p>
            </div>

          </div>
        </div>
    </div>


<?php
include '../footer.php';
?>
