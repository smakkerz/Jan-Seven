<div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">Bootstrap dataTables</div>
				</div>
  				<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered table-hover" id="example">
						<thead>
							<tr>
								<th></th>
								<th>Nama</th>
								<th>Phone</th>
								<th>Kota</th>
								<th>Tanggal lahir</th>
								<th>Golongan Darah</th>
							</tr>
						</thead>
						<tbody>
							<tr class="center">
							<?php 
							foreach ($Data as $key) {

								?>
								<td><?= $key->Sex ?></td>
								<td><?= $key->FirstName." ".$key->LastName ?></td>
								<td><?= $key->Phone ?></td>
								<td><?= $key->City ?></td>
								<td><?= date("d F Y", strtotime($key->BirthDate)); ?></td>
								<td ><?= $key->Group_Blood ?></td>
								<?php 							
							}
							?>
							</tr>
						</tbody>
					</table>
  				</div>
  			</div>