<div id="b_main">
	<table id="banner_t">
		<tr>
			<td id="title">
				<a id="posit" href="index.php">Posit</a>
			</td>
			<td id="user_buttons" class="banner_text">
				<p>
					<a style="font-size: 16px" class="banner_link" href="#">Friends</a>
					&nbsp; &nbsp; &nbsp;
					<a style="font-size: 16px" class="banner_link" href="#">Notifications</a>
				</p>
			</td>
			<td>
				<p>
					<form action="" method="post">
						<input id="searchbox" name="search_query" placeholder="Search">
					</form>
				</p>
			</td>
			<td id="newPostIcon">
				<button id="newPostButton" class="login_button" onClick="showTextarea(); theBox(true, 'newPostArea', ''); theBox(false, 'month', 'showBtn');" title="New Note"><img src="resources/postit.png"></img></button>
			</td>
			<td>
				<span id="notifications"></span>
			</td>
			<td id="current_user" class="banner_text">
				<a class="banner_link" href="#">
				<img src="../images/usr.jpg" alt="Me">
					&nbsp;
					<?php 
					$name = "<a href='profile.php?id=%d'>%s</a>";
					$username = ucfirst(base64_decode($_SESSION["username"]));
					$id = $_SESSION['id'];
					echo sprintf($name, $id, $username)
					?>
				</a>
					&nbsp; &nbsp; &nbsp;
				<a class="banner_link" href="core/server_side/log_out.php">
					LogOut
				</a>
			</td>
		</tr>
	</table>
</div>