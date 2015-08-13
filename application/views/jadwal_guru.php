<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
  <div class="modal-body">
    Yakin mau menghapus data ini ?
  </div>
  <div class="modal-footer">
    <a href="#" class="btn btn-danger danger" id="danger">Delete</a>
    <button type="button" data-dismiss="modal" class="btn">Cancel</button>
  </div>
</div>
</div>
</div>

<div class="modal fade" id="inputJadwal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Input Jadwal Guru</h4>
      </div>
    <div class="modal-body">
      <form class="form-horizontal" method="post" action="<?php echo base_url()."index.php/masterjadwal/insert_jadwal"; ?>">
        <div class="form-group">
          <label class="col-md-4 control-label" for="nis">Tahun Ajaran</label>
          <div class="col-md-5">
			<select class="form-control" class="col-md-4" name="thn_ajaran">
				<option value="2014/2015">2014/2015</option>
				<option value="2015/2016">2015/2016</option>
			</select>
          </div>
        </div>
		<div class="form-group">
          <label class="col-md-4 control-label" for="guru">Guru</label>
          <div class="col-md-5">
          <select class="form-control" class="col-md-4" name="guru">
				<?php foreach ($guru as $tampil) {?>
				<option value="<?php echo $tampil['id_guru'] ?>"><?php echo $tampil['nama_guru'] ?></option>
				<?php } ?>
          </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="nis">Mata Pelajaran</label>
          <div class="col-md-5">
          <select class="form-control" class="col-md-4" name="mapel">
				<?php foreach ($mapel as $tampil) {?>
				<option value="<?php echo $tampil['id_mapel'] ?>"><?php echo $tampil['nama_mapel'] ?></option>
				<?php } ?>
          </select>
          </div>
        </div>
		<div class="form-group">
          <label class="col-md-4 control-label" for="nis">Kelas</label>
          <div class="col-md-3">
          <select class="form-control" class="col-md-4" name="kelas">
				<?php foreach ($kelas as $tampil) {?>
				<option value="<?php echo $tampil['id_kelas'] ?>"><?php echo $tampil['nama_kelas'] ?></option>
				<?php } ?>
          </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="nis">Hari</label>
          <div class="col-md-3">
          <select class="form-control" class="col-md-4" name="hari">
				<option value="senin">Senin</option>
				<option value="selasa">Selasa</option>
				<option value="rabu">Rabu</option>
				<option value="kamis">Kamis</option>
				<option value="jumat">Jumat</option>
          </select>
          </div>
        </div>
		<div class="form-group">
          <label class="col-md-4 control-label" for="nis">Kelas</label>
          <div class="col-md-5">
          <select class="form-control" class="col-md-4" name="waktu">
				<?php foreach ($waktu as $tampil) {?>
				<option value="<?php echo $tampil['id_waktu'] ?>"><?php echo $tampil['keterangan'] ?></option>
				<?php } ?>
          </select>
          </div>
        </div>
        </div>
    <div class="modal-footer">
      <input type="submit" name="submit" value="Simpan" class="btn btn-success success">
      <button type="button" data-dismiss="modal" class="btn">Batal</button>
      </form>
    </div>
  </div>
  </div>
</div>

<div class="modal fade" id="editJadwal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Input Jadwal Guru</h4>
      </div>
    <div class="modal-body">
      <form class="form-horizontal" method="post" action="<?php echo base_url()."index.php/masterjadwal/edit_jadwal"; ?>">
        <div class="form-group">
          <label class="col-md-4 control-label" for="nis">Tahun Ajaran</label>
          <div class="col-md-5">
			<select class="form-control" class="col-md-4" name="thn_ajaran" id="mthn_ajaran">
				<option value="2014/2015">2014/2015</option>
				<option value="2015/2016">2015/2016</option>
			</select>
          </div>
        </div>
		<div class="form-group">
          <label class="col-md-4 control-label" for="guru">Guru</label>
          <div class="col-md-5">
          <select class="form-control" class="col-md-4" name="guru" id="mguru">
				<?php foreach ($guru as $tampil) {?>
				<option value="<?php echo $tampil['id_guru'] ?>"><?php echo $tampil['nama_guru'] ?></option>
				<?php } ?>
          </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="nis">Mata Pelajaran</label>
          <div class="col-md-5">
          <select class="form-control" class="col-md-4" name="mapel" id="mmapel">
				<?php foreach ($mapel as $tampil) {?>
				<option value="<?php echo $tampil['id_mapel'] ?>"><?php echo $tampil['nama_mapel'] ?></option>
				<?php } ?>
          </select>
          </div>
        </div>
		<div class="form-group">
          <label class="col-md-4 control-label" for="nis">Kelas</label>
          <div class="col-md-3">
          <select class="form-control" class="col-md-4" name="kelas" id="mkelas">
				<?php foreach ($kelas as $tampil) {?>
				<option value="<?php echo $tampil['id_kelas'] ?>"><?php echo $tampil['nama_kelas'] ?></option>
				<?php } ?>
          </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="nis">Hari</label>
          <div class="col-md-3">
          <select class="form-control" class="col-md-4" name="hari" id="mhari">
				<option value="senin">Senin</option>
				<option value="selasa">Selasa</option>
				<option value="rabu">Rabu</option>
				<option value="kamis">Kamis</option>
				<option value="jumat">Jumat</option>
          </select>
          </div>
        </div>
		<div class="form-group">
          <label class="col-md-4 control-label" for="nis">Waktu</label>
          <div class="col-md-5">
          <select class="form-control" class="col-md-4" name="waktu" id="mwaktu">
				<?php foreach ($waktu as $tampil) {?>
				<option value="<?php echo $tampil['id_waktu'] ?>"><?php echo $tampil['keterangan'] ?></option>
				<?php } ?>
          </select>
          </div>
        </div>
        </div>
    <div class="modal-footer">
      <input type="submit" name="submit" value="Simpan" class="btn btn-success success">
      <button type="button" data-dismiss="modal" class="btn">Batal</button>
      </form>
    </div>
  </div>
  </div>
</div>

<div class="modal fade" id="editwaktu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Nama waktu</h4>
      </div>
    <div class="modal-body">
      <form class="form-horizontal" method="post" action="<?php echo base_url()."index.php/project/update_waktu"; ?>">
        <div class="form-group">
          <label class="col-md-4 control-label" for="nis">Nama waktu</label>
          <div class="col-md-5">
          <input id="mid" name="mid" type="hidden" value="">
          <input id="mwaktu" name="mwaktu" type="text" placeholder="Nama waktu" class="form-control input-md" required="" value="">
          </div>
        </div>
    </div>
    <div class="modal-footer">
      <input type="submit" name="submit" value="Simpan" class="btn btn-success success">
      <button type="button" data-dismiss="modal" class="btn">Batal</button>
      </form>
    </div>
  </div>
  </div>
</div>


<?php echo $this->session->flashdata('pesan'); ?>

<div style="width: 80%;">
<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#inputJadwal"><span class="glyphicon glyphicon-plus"></span>Input Jadwal Baru</a>

<table class="table table-bordered table-striped text-center" style="margin-top:20px;">
  <thead>
    <tr>
      <th class="col-md-1">No.</th>
      <th>Nama Guru</th>
      <th>Mata Pelajaran</th>
	  <th>Kelas</th>
	  <th>Hari</th>
	  <th>Jam</th>
	  <th>Aksi</th>
    </tr>
  </thead>

  <tbody>
	<?php $no=1; foreach ($data_jadwal as $tampil) {?>
    <tr>
      <td><?php echo $no ?></td>
      <td><?php echo $tampil["nama_guru"]; ?></td>
      <td><?php echo $tampil["nama_mapel"]; ?></td>
      <td><?php echo $tampil["nama_kelas"]; ?></td>
	  <td><?php echo $tampil["hari"]; ?></td>
	  <td><?php echo $tampil["keterangan"]; ?></td>
      <td>
        <a href="#" onclick="getData('<?php echo $tampil['id_guru']."','".$tampil['id_mapel']."','".$tampil['id_kelas']."','".$tampil['hari']."','".$tampil['id_waktu']."','".$tampil['tahun_ajaran']; ?>')" style="text-decoration: none;">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editJadwal">Edit</button>
      </a>
        <a class="btn btn-warning" data-href="<?php echo base_url()."index.php/masterjadwal/delete_jadwal/".$tampil['id_jadwal']; ?>" data-toggle="modal" data-target="#confirm-delete" href="#">delete</a>
      </td>
      </tr>
	<?php }?>
  </tbody>
</table>
</div>

<!-- modal script -->
<script type="text/javascript">
function getData(id_guru, id_mapel, id_kelas, hari, id_waktu, thn_ajaran) {
$("#mguru").val(id_guru);
$("#mthn_ajaran").val(thn_ajaran);
$("#mkelas").val(id_kelas);
$("#mwaktu").val(id_waktu);
$("#mmapel").val(id_mapel);
$("#mhari").val(hari);
};
</script>
<!-- /modal script -->
