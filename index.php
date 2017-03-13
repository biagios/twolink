<!DOCTYPE html>
<html>
<head>
    <title>Dashboard | Linker</title>
 <?php include "$_SERVER[DOCUMENT_ROOT]/../public/heart/meta.php";?>
</head>
    <div class="site-wrapper">
	<?php include "$_SERVER[DOCUMENT_ROOT]/heart/fade.min.php";?>
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="hidden">
          <div class="masthead clearfix">
            <div class="inner">
              <nav class="nav nav-masthead">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Sign In</button>
              </nav>
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
            <h1 class="cover-heading display-3">Create your own homepage.</h1>
<p class="lead"> Edit the links below and add your own. You can also add more, as many as you need.
<!-- Makeshift Spacing -->
<hr class="my-4 invisible">
<hr class="my-4 invisible">


            <p class="lead text-center">
                <button type="button" class="btn btn-success" onclick="">Google  <i class="fa fa-pencil" aria-hidden="true"></i></button>

                <!-- Invisible Makeshift Spacing -->
                <button type="button" class="btn btn-primary invisible"></button>

                <button type="button" class="btn btn-danger" onclick="">Youtube  <i class="fa fa-pencil" aria-hidden="true"></i></button>

                <!-- Invisible Makeshift Spacing -->
                <button type="button" class="btn btn-primary invisible"></button>

                <button type="button" class="btn btn-primary" onclick="">Facebook  <i class="fa fa-pencil" aria-hidden="true"></i></button>

                <!-- Invisible Makeshift Spacing -->
                <button type="button" class="btn btn-primary invisible"></button>

                <button type="button" class="btn btn-info" onclick="">Twitter  <i class="fa fa-pencil" aria-hidden="true"></i></button>

                <button type="button" class="btn btn-link" onclick="createButton(this.parentNode);"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
            </p>

          </div>

          <script>
          function createButton(context){
              var button = document.createElement("a");
              button.class = "btn"
              button.innerHTML="<button >other</button>";
              context.appendChild(button);
            }
          </script>

<?php include "$_SERVER[DOCUMENT_ROOT]/../public/heart/foot.php";?>

        </div>
      </div>
    </div>
  </body>
</html>
