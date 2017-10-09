<!DOCTYPE html>
<html lang="en">
<head>
	<title>Linker</title>

</head>
	<?php include "$_SERVER[DOCUMENT_ROOT]/../public/heart/meta.php";?>
	<div class="site-wrapper">
		<?php include "$_SERVER[DOCUMENT_ROOT]/heart/fade.min.php";?>
		<div class="site-wrapper-inner">
			<div class="cover-container">
				<div class="hidden">

				<div class="inner cover">
					<!-- Place head under here -->
					<?php include "$_SERVER[DOCUMENT_ROOT]/heart/head.php";?>

					<h1 class="cover-heading display-1" style="font-family: 'Roboto', sans-serif;">
						<div id="clockbox">
							<script type="text/javascript">
								window.onload = function() {
									TwoLink.GetClock();
									}
							</script>
						</div>
					</h1>
						<h2 class="display-4" style="font-family: 'Roboto', sans-serif;">
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
						<p>
						<p>TwoLink will soon be shut down, it has been fun working on this.
				</div>
				<?php include "$_SERVER[DOCUMENT_ROOT]/heart/foot.php";?>
				</div>
	</div>
</div>
</div>
	</body>

</html>
