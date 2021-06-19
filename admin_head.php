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
              <h1 style="font-size:50px color:#ff6b81;">Soccer</h1>
							<h1 style="font-size:50px color:#ff6b81;">League</h1>
							<h1 style="font-size:50px color:#ff6b81;">Admin</h1>
							<h1 style="font-size:50px color:#ff6b81;">Dashboard</h1>
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

								</div>
						<?php
					  }
						?>
			</div>
		</div>
	</header>
