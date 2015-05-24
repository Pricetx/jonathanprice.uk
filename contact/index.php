<?php
include '../header.php';
?>

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
                  <div class="input-field col s12">
                    <input name="email" id="email" type="email" class="validate">
                    <label for="email">Email Address</label>
                  </div>
                </div>

                <div class="row">
                  <div class="input-field col s12">
                    <textarea name="message" id="message" class="materialize-textarea"></textarea>
                    <label for="message">Message</label>
                  </div>
                </div>

                <button class="btn waves-effect waves-light" type="submit" name="action">Submit<i class="mdi-content-send right"></i></button>
              </form>

            </div>

        </div>
      </div>

<?php
include '../footer.php';
?>
