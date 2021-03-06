<!DOCTYPE html>
<html>
  <head>
    <title>Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <base href="http://mmb.irbbarcelona.org/formacio/~dbw20/">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="MIOD_styles.css">
    <!--Import header from patró.html-->
    <?php 
      include '../miod_scripts/patro.php';
    ?> 

  </head>
  <body>
      <div id="header"></div>
      <div class="container" class="contact" >
        <p> This is a submit form in case you need to contact us for any reason, like problems with your data, our website or any questions about the project. <br>We recommend you to use the first line of the message to say what kind of message it is (question, complain, suggestion, etc).</p>
        <form method="post" action="./miod_scripts/send_mail.php" name="input">
          <p><label>Email <input placeholder="Your Email" type="email" name="email_address" size="100" ></label></p>
          <p><label>Comments<br><textarea placeholder="Your message" name="comments" maxlength="1000" cols="120" rows="10"></textarea></label></p>
          <div class="columns">
            <p><button class="first2 button3" id="clear"><input type="reset" value="Reset">Clear text</button></p>
            <p><button class="second2 button3" id="send">Send</button></p>
          </div>
        </form>
      </div>
    </body>
  </html>