<!DOCTYPE HTML>
<html lang="<?php echo substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);?>">
  <head>
    <title>Posit - Register</title>
    <link rel="stylesheet" type="text/css" href="styles/login_banner.css">
    <link rel="stylesheet" type="text/css" href="styles/main_banner.css">
    <link rel="stylesheet" type="text/css" href="styles/main_page.css">
	<script type="text/javascript" src="core/client_side/sign_up.js"></script>
  </head>
  <body>
  <?php
    require_once "core/server_side/lib/RandBG.php";
	PutRandomBG();
  ?>
    <div>
      <div id="b_main">
        <table id="banner_t">
            <tr>
                <td id="title">
    				<a id="posit" href="index.php">Get a Posit ID</a>
    			</td>
    			<td>
    			    <p>The only thing you need to start, what are you waiting for getting one?</p>
    			</td>
			</tr>
        </table>
      </div>
      
	  <div class="posit_frame" id="centered">
        <form action="sign_up.php" method="post">
          <ul id="register_elements">
            <li><label for="register_username" id="bevel_title_b">1. Choose your username</label></li>
            <li><input type="text" id="register_username" name="register_username" class="textbox"></li>
            <li><label for="register_password" id="bevel_title_b">2. Think a safe password</label></li>
            <li><input type="password" id="register_password" name="register_password" class="textbox"></li>
            <li><label for="register_email" id="bevel_title_b">3. Write your e-mail address</label></li>
            <li><input type="text" id="register_email" name="register_email" class="textbox"></li>
            <li><input type="button" id="register_button" name="register_button" class="login_button_big" style="width: 100%" value="Get My ID" onClick="checkForm()"></li>
          </ul>
        </form>
    </div>
  </body>
</html>