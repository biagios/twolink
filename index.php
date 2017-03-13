<!DOCTYPE html>
<html>
<head>
	<title>Linker</title>
</head>
	<?php include "$_SERVER[DOCUMENT_ROOT]/../public/heart/meta.php";?>
	<div class="site-wrapper">
		<?php include "$_SERVER[DOCUMENT_ROOT]/heart/fade.min.php";?>
		<div class="site-wrapper-inner">
			<div class="cover-container">
				<div class="hidden">
				<div class="masthead clearfix">
					<div class="inner">
						<nav class="nav nav-masthead"> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">LogIn</button></nav>
					</div>
				</div>

				<!-- Modal -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons">cancel</i>
                  </button>
								<h4 class="modal-title centered" id="myModalLabel"></h4>
							</div>
							<div class="modal-body"> <span class="tag tag-default centered">
								<div class="span2">
								<p><a  class="btn btn-danger btn-block" href="/auth/login-with.php?provider=Google"><i class="fa fa-google" aria-hidden="true"></i> Login With Google</a>
                <p><a  class="btn btn-primary btn-block" href="/auth/login-with.php?provider=Facebook"><i class="fa fa-facebook" aria-hidden="true"></i> Login With Facebook</a>
		            <p><a  class="btn btn-info btn-block" href="/auth/login-with.php?provider=Twitter"><i class="fa fa-twitter" aria-hidden="true"></i> Login With Twitter</a>
	              <p><a  class="btn btn-success btn-block" href="/auth/login-with.php?provider=Steam"><i class="fa fa-steam" aria-hidden="true"></i> Login With Steam</a>
								</div>
		</span>
	</div>
							</div>
					</div>
				</div>
				<div class="inner cover">
					<h1 class="cover-heading display-1">
						<div id="clockbox">
							<script type="text/javascript">
								window.onload = function() {
									TwoLink.GetClock();
									}
							</script>
						</div>
					</h1>
						<h2 class="display-4">
							<script language="JavaScript">
								document.write(TwoLink.Greet.Greet());
							</script>
			      </h2>
					</p>
					<p class="lead">
						<a href="//google.com" class="btn btn-lg btn btn-outline-success" target="_blank"><i class="fa fa-google fa-lg" aria-hidden="true"></i></a>
						<!-- Invisible Makeshift Spacing -->
						<button type="button" class="btn btn-primary invisible"></button>
						<a href="//youtube.com" class="btn btn-lg btn btn-outline-danger" target="_blank"><i class="fa fa-youtube-play fa-lg" aria-hidden="true"></i></a>
						<!-- Invisible Makeshift Spacing -->
						<button type="button" class="btn btn-primary invisible"></button>
						<a href="//facebook.com" class="btn btn-lg btn btn-outline-primary" target="_blank"><i class="fa fa-facebook-official fa-lg" aria-hidden="true"></i></a>
						<!-- Invisible Makeshift Spacing -->
						<button type="button" class="btn btn-primary invisible"></button>
						<a href="//twitter.com" class="btn btn-lg btn btn-outline-info" target="_blank"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a>

				</div>
				<?php include "$_SERVER[DOCUMENT_ROOT]/heart/foot.php";?>
				</div>
	</div>
</div>
</div>
	</body>

</html>
