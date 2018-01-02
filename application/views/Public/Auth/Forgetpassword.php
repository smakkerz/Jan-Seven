<div class="page-content container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="login-wrapper">
			   	<div class="box">
			       	<div class="content-wrap mySlides">
			           	<h6>New Password <?= $this->session->userdata('Forgetuser') ?></h6>
			                <div class="social">
						<?= $this->session->userdata('msg') <> '' ? $this->session->userdata('msg') : ''; ?>
	                        </div>
	                        <form method="post" action="<?= $ActionForgetpassword ?>">
			                <input class="form-control" name="PostPass" type="password" placeholder="New Password" required />
			                <input class="form-control" name="PostPass" type="password" placeholder="Confirm Password" required />
			                <span><a href="#myModal" data-toggle="modal">Forget Password</a></span>
			                <div class="action">
			                    <button class="btn btn-primary signup" type="submit">Login</button>
			                </div>    
			                </form>        
			       	</div>
			   	</div>
			  	<div class="already">
			            <p><?php echo $NoCompany; ?></p>
			            <a href="#"><?php echo $Company; ?></a>
			   	</div>
			</div>
		</div>
	</div>
</div>