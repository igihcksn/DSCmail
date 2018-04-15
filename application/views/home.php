<!DOCTYPE html>
<html lang="en">
<head>
  <title>DSC Amikom 2018</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  	body{
  		padding: 20px;
  	}
  	.tab-content{
  		padding: 20px;
  	}
  </style>
</head>
<body>
  <ul class="nav nav-tabs" >
    <li class="active"><a data-toggle="tab" href="#home">Daftar</a></li>
    <li><a data-toggle="tab" href="#list">List Data</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Input Form</h3>
      <form method="post" action="add">
		  <div class="form-group col-sm-12">
		    <label for="nama">Nama Kamu</label>
		    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Kamu">
		    <span class="help-block"><?=form_error('nama')?></span>
		  </div>
		  <div class="form-group col-sm-12">
		    <label for="email">Email address</label>
		    <input type="text" class="form-control" name="email" placeholder="Email Aktif Saat Ini">
		    <span class="help-block"><?=form_error('email')?></span>
		  </div>
		  <div class="form-group col-sm-6">
		      <label for="sel1">Jenis Kelamin</label>
		      <select class="form-control" name="gender">
		        <option>Laki - Laki</option>
		        <option>Perempuan</option>
		      </select>
		      <span class="help-block"><?=form_error('gender')?></span>
		  </div>
		  <div class="form-group col-sm-6">
		    <label for="asal">Nomor Hp</label>
		    <input type="text" class="form-control" name="hape" placeholder="0812xxxxxxxx">
		    <span class="help-block"><?=form_error('hape')?></span>
		  </div>
		  <div class="form-group col-sm-12">
		    <label for="asal">Asal Daerah</label>
		    <input type="text" class="form-control" name="asal" placeholder="Asal Daerah Kamu">
		    <span class="help-block"><?=form_error('asal')?></span>
		  </div>
		  <button type="submit" class="btn btn-primary col-sm-4">Submit</button>
		</form>
    </div>
    <div id="list" class="tab-pane fade">
      <h3>List Data</h3>
      <table class="table table-hover">
	    <thead>
	      <tr>
	        <th>Nama</th>
	        <th>Email</th>
	        <th>Asal</th>
	        <th>Gender</th>
	        <th>No Hp</th>
	      </tr>
	    </thead>
	    <tbody>
	    <?php 
		foreach($peserta as $u){ 
		?>
		<tr>
			<td><?= $u->nama_peserta ?></td>
			<td><?= $u->email_peserta ?></td>
			<td><?= $u->asal_peserta ?></td>
			<td><?= $u->gender ?></td>
			<td><?= $u->hape ?></td>
		</tr>
		<?php } ?>
	     </tbody>
  		</table>
    </div>
  </div>
</div>

</body>
</html>
