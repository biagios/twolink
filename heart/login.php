<div class="pay">
	<div class="card">
		<div class="card-header card-header-form">
		Login to Linker
              <br><small>Login with your favorite medium
		</div>
		<div class="card-block card-form text-center">
			<form action="" method="POST" class="form-horizontal">

			<div class="form-group">
<center> <div id="my-signin2"></div> </center>

 <script>
     function onSuccess(googleUser) {
       console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
     }
     function onFailure(error) {
       console.log(error);
     }
     function renderButton() {
       gapi.signin2.render('my-signin2', {
         'scope': 'profile email',
         'width': 240,
         'height': 50,
         'longtitle': true,
         'theme': 'dark',
         'onsuccess': onSuccess,
         'onfailure': onFailure
       });
     }
   </script>


  </div>


	<div class="form-group">





				</div>


          <!--      <div class="form-group">
					<input  required class="form-control" type="tel" autocomplete="off" autocorrect="off" spellcheck="off" autocapitalize="off" placeholder="Enter your password" maxlength="4"/>
				</div> -->


			 <!-- <center>	<button type="submit" class="btn btn-primary"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</button> </center> -->
			 <!--	<input type="checkbox" name="remember" value="1"> Remember Me -->

			</form>
		</div>
	</div>
		<!-- <div class="contact">
            <b>For support contact: <a href="mailto:support@help.me">support@help.me</a></b>
	</div> -->
</div>
        </div>
