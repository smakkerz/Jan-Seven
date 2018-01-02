<div class="page-content container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="login-wrapper">
			   	<div class="box">
			       	<div class="content-wrap mySlides">
			           	<h6>Sign Up</h6>
			                <div class="social">
	                            <a class="face_login" href="#"  onclick="plusDivs(+1)">
	                                <span class="face_icon">
	                                    <img src="<?= base_url() ?>Assets/images/fb.png" width="30px" alt="fb">
	                                </span>
	                                <span class="text">Register Officer</span>

	                            </a>
	                            <div class="division">
	                                <hr class="left">
	                                <span>or Sign In</span>
	                                <hr class="right">
	                            </div>
	                        </div>
	                        <form method="post" action="<?= $Action ?>">
			                <input class="form-control" name="PostUser" type="text" placeholder="User/Phone" required />
			                <input class="form-control" name="PostPass" type="password" placeholder="Password" required />
						<?= $this->session->userdata('msg') <> '' ? $this->session->userdata('msg') : ''; ?>
			                <div class="action">
			                    <button class="btn btn-primary signup" type="submit">Login</button>
			                </div>    
			                </form>        
			       	</div>
			       				       	<div class="content-wrap mySlides">
			                <div class="social">
	                            <a class="face_login" href="#" onclick="plusDivs(-1)">
	                                <span class="face_icon">
	                                    <img src="<?= base_url() ?>Assets/images/fb.png" width="30px" alt="fb">
	                                </span>
	                                <span class="text">Sign In</span>
	                            </a>
	                            <div class="division">
	                                <hr class="left">
	                                <span>or Sign Up</span>
	                                <hr class="right">
	                            </div>
	                        </div>
	                        <form method="post" action="<?= $Action ?>">
			                <input class="form-control" name="PostUser" type="text" placeholder="User/Phone">
			                <input class="form-control" name="PostPass" type="password" placeholder="Password">
						<?= $this->session->userdata('msg') <> '' ? $this->session->userdata('msg') : ''; ?>
			                <div class="action">
			                    <button class="btn btn-primary signup" type="submit">Login</button>
			                </div>    
			                </form>        
			       	</div>
			   	</div>

			  	<div class="already">
			            <p><?php echo $NoCompany; ?></p>
			            <a href="#" onclick="plusDivs(-1)"><?php echo $Company; ?></a>
			   	</div>
			</div>
		</div>
	</div>
</div>