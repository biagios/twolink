
<nav class="navbar navbar-default">

  <!-- Button trigger modal -->





  <!-- Modal -->

  <div class="masthead clearfix">
  	<div class="inner">
  		<nav class="nav nav-masthead"> <?php if(empty($_SESSION["user"])){
        include "$_SERVER[DOCUMENT_ROOT]/../public/heart/headloggedout.php";
      }else {
        include "$_SERVER[DOCUMENT_ROOT]/../public/heart/headloggedin.php";
        } ?></nav>
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
  				<p><a  class="btn btn-danger btn-block" href="//twolink.co.uk/auth/login-with.php?provider=Google"><i class="fa fa-google" aria-hidden="true"></i> Login With Google</a>
  				<p><a  class="btn btn-primary btn-block" href="//twolink.co.uk/auth/login-with.php?provider=Facebook"><i class="fa fa-facebook" aria-hidden="true"></i> Login With Facebook</a>
  				<p><a  class="btn btn-info btn-block" href="//twolink.co.uk/auth/login-with.php?provider=Twitter"><i class="fa fa-twitter" aria-hidden="true"></i> Login With Twitter</a>
  				<p><a  class="btn btn-success btn-block" href="//twolink.co.uk/auth/login-with.php?provider=Steam"><i class="fa fa-steam" aria-hidden="true"></i> Login With Steam</a>
  					<p style="color:#212121"><small>TwoLink promises only to use external site details for identification, and keeps any private information secure.</p>
  				</div>
  </span>
  </div>
  			</div>
  	</div>
  </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> -->
      </div>
    </div>
  </div>

</nav>
