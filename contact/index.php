<?php include_once("../header.php"); ?>

      <div id="contentArea">
        <div class="container" id="contentContainer">
          <div class="row">

            <div class="col s12 m8 l9">
              <h1 class="light grey-text text-darken-4 header">Contact</h1>
              <p class="light grey-text text-darken-4 intro-paragraph">
                The best way to get in touch with me is by using the form below.
              </p>
            </div>

              <form class="col s12" action="submit.php" method="post">
                <div class="row">
                  <div class="input-field col s12 m6 l4">
                    <i class="mdi-communication-email prefix"></i>
                    <input name="email" id="email" type="email" class="validate">
                    <label for="email">Email Address</label>
                  </div>
                </div>

                <div class="row">
                  <div class="input-field col s12 m12 l12">
                    <i class="mdi-content-create prefix"></i>
                    <textarea name="message" id="message" class="materialize-textarea"></textarea>
                    <label for="message">Message</label>
                  </div>
                </div>

                <button class="btn waves-effect waves-light" type="submit" name="action">Submit<i class="mdi-content-send right"></i></button>

                <p class="light grey-text text-darken-4">
                  I endeavour to sign any personal correspondance with my PGP key. You can verify the legitimacy
                  of my key by visiting my <a href="http://keybase.io/pricetx">KeyBase</a> profile. If you feel it
                  necessary to send me sensitive information by email, please send me a preliminary email containing
                  your public key, and then encrypt the following email with your private key and my public key.
                </p>
              </form>

            </div>

        </div>
      </div>

<?php include_once("../footer.php"); ?>
