<!DOCTYPE html>
<html>

<head>
	<title>Linker | 404 Error</title>
	<?php include "$_SERVER[DOCUMENT_ROOT]/../public/heart/meta.php";?>
	<div class="site-wrapper">
		<?php include "$_SERVER[DOCUMENT_ROOT]/heart/fade.min.php";?>
		<div class="site-wrapper-inner">
			<div class="cover-container">
				<div class="hidden">
				<div class="masthead clearfix">
					<div class="inner">

					</div>
				</div>

				<div class="inner cover">
					<h1 class="cover-heading">
						<div id="clockbox">
							404
							<?php file_put_contents("aaaa.txt",$_SERVER['REMOTE_ADDR'] . " ~ ".$_SERVER['REQUEST_TIME'] . " ~ ".$_SERVER['REQUEST_URI']. " ~  " . $_SERVER['HTTP_USER_AGENT']  . "\n", FILE_APPEND); ?>
						</div>
					</h1>
					<p class="leadd">
						<h2>
							  <img src="/heart/img/errors/robit.png" alt="Robit" draggable="false">
              <p> Oh no! This page is broken, or maybe you got it wrong?
<p>You should go back to safety.
			      </h2>
					</p>
					<p class="lead"> <a onclick="history.back(-1)" class="btn btn-lg btn btn-outline-success">Safety!</a> </p>
				</div>
				<?php include "$_SERVER[DOCUMENT_ROOT]/heart/foot.php";?>
				</div>
		</div>
	</div>
	</div>
	</body>

</html>
