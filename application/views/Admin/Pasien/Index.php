<div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">Data Pasien <?= $Company ?></div> 
						<a href="" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-plus"></i> Add Pasien</a>
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
								<th></th>
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
								<td><a href="" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-pencil"></i> Update</a> | 
								<a href="" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove-circle"></i> Hapus</a> | 
								<a href="" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-credit-card"> Detail</a></td>
								<?php 							
							}
							?>
							</tr>
						</tbody>
					</table>
  				</div>
  			</div>