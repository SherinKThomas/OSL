<script>
function val()
{
	window.location.href = 'logout.php';
}

</script>

<header>
		<div class='main-header'>
			<div class = 'adj-main-header'>

				<div class="header_widgets_text">
              <h1 style="font-size:50px color:white;">Soccer League</h1>
				</div>
				<div class="social-follow">
					<ul>
						<li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<?php
				if (strlen($_SESSION['login'])!=0)
				{
					?>
					<div class='header_widgets_btn_s'>
					<button name='btn' class='sbtn' onclick = 'val();'> signout
					  </button>
					  </div>
					  <?php
				}
					  else
					  {
						  ?>
						  <div class='header_widgets_btn'>
						  <button class='sbtn' id='l' data-target="#myModallog" data-toggle="modal" data-dismiss="modal">Login
							</button>
							<button class='sbtn' id='s' data-target="#myModalreg" data-toggle="modal" data-dismiss="modal">Register
								</button>

								</div>
						<?php
					  }
						?>
			</div>
		</div>
	</header>
