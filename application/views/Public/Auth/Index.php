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
	                                <span class="text">Register</span>

	                            </a>
	                            <div class="division">
	                                <hr class="left">
	                                <span>Sign In</span>
	                                <hr class="right">
	                            </div>

						<?= $this->session->userdata('msg') <> '' ? $this->session->userdata('msg') : ''; ?>
	                        </div>
	                        <form method="post" action="<?= $ActionLogin ?>">
			                <input class="form-control" name="PostUser" type="text" placeholder="User/Phone" required />
			                <input class="form-control" name="PostPass" type="password" placeholder="Password" required />
			                <span><a href="#myModal" data-toggle="modal">Forget Password</a></span>
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
	                                <span>Sign Up</span>
	                                <hr class="right">
	                            </div>
						<?= $this->session->userdata('msg') <> '' ? $this->session->userdata('msg') : ''; ?>
	                        </div>
	                        <form method="post" action="<?= $ActionRegister ?>">
			                <input class="form-control" name="PostName" type="text" placeholder="Full Name" required="required">
			                <input class="form-control" name="PostPhone" type="tel" placeholder="Phone" required="required">
			                <br>
			                <input class="form-control" name="PostDate" type="date" placeholder="Birth Date" required="required">
			                <br>
			                <input class="form-control" name="Postuser" type="text" placeholder="User" required="required">
			                <input class="form-control" name="Postpass" type="password" placeholder="Password" required="required">
			                <select class="form-control" name="PostCity" required="required">
			                <?php foreach ($City as $key => $value) {
			                	echo "<option value='".$value."'>". $value."</option>";
			                } ?>
			                </select>
			                <div class="action">
			                    <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-send"></i> SignUp</button>
			                </div>    
			                </form>        
			       	</div>
			   	</div>
			  	<div class="already">
			            <a href="#" onclick="plusDivs(-1)"><?php print_r($Company); ?></a>
			            <p><?php echo $NoCompany; ?></p>
			   	</div>
			</div>
		</div>
	</div>
</div>
			   	<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="0" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Reset Password</h4>
			</div>
				<div class="modal-body">
					<form method="post" class="form-horizontal" action="<?= $ActionForget ?>">
						<div class="form-group">
							<label for="firstname" class="col-sm-4 control-label">User or Phone</label>
								<div class="col-sm-8">
			                <input class="form-control" name="PostUser" type="text" placeholder="User/Phone" required />
			                	</div>
			            </div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Next <i class="glyphicon glyphicon-arrow-right"></i></button>
					</form>
				</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div>