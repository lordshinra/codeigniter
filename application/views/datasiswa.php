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

<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#inputSiswa"><span class="glyphicon glyphicon-plus"></span>Input Siswa Baru</a>

<?php echo $this->session->flashdata('pesan'); ?>

<table id="DataTables" class="table table-bordered table-striped text-center" style="margin-top:20px;">
  <thead>
    <tr>
      <th class="col-md-1">No.</th>
      <th>NIS</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>
  </thead>

  <tbody>
    <?php $no=1; foreach ($siswa as $tampil) { ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $tampil['nis'] ?></td>
      <td><?php echo $tampil['nama_siswa'] ?></td>
      <td>
        <?php $tgl_lahir = date("Y-m-d", strtotime($tampil['tanggal_lahir'])); ?>
        <a href="#" onclick="getData('<?php echo $tampil['id_siswa']."','".$tampil['nis']."','".$tampil['nama_siswa']."','".$tampil['alamat']."','".$tampil['jenis_kelamin']."','".$tampil['agama']."','".$tampil['nama_wali']."','".$tampil['telepon']."','".$tgl_lahir;?>')" style="text-decoration: none;">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Edit</button>
      </a>
        <a class="btn btn-warning" data-href="<?php echo base_url()."index.php/mastersiswa/delete_siswa/".$tampil['id_siswa']; ?>" data-toggle="modal" data-target="#confirm-delete" href="#">delete</a>
      </td>
    </tr>
    <?php $no++; } ?>
  </tbody>
</table>

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Data Siswa</h4>
      </div>
      <div class="modal-body">
       <form class="form-horizontal" method="post" action="<?php echo base_url()."index.php/mastersiswa/update_siswa"; ?>">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nis">NIS</label>
  <div class="col-md-5">
  <input id="id_user" name="id_user" type="hidden" value="">
  <input id="mnis" name="mnis" type="text" placeholder="NIS Siswa" class="form-control input-md" required="" value="">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nama">Nama Lengkap</label>
  <div class="col-md-5">
  <input id="mnama" name="mnama" type="text" placeholder="Nama Lengkap" class="form-control input-md" required="" value="">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tgl_lahir">Tanggal Lahir</label>
  <div class="col-md-5">
  <input id="mtgl_lahir" name="mtgl_lahir" type="date" placeholder="Tanggal Lahir" class="form-control input-md" required="" value="">

  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="jenkel">Jeis Kelamin</label>
  <div class="col-md-4">
    <label class="radio-inline" for="jenkel-0">
      <input type="radio" name="mjenkel" id="mjenkel" value="L" checked="checked">
      Laki-Laki
    </label><br />
    <label class="radio-inline" for="jenkel-1">
      <input type="radio" name="mjenkel" id="mjenkel" value="P">
      Perempuan
    </label>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="alamat">Alamat</label>
  <div class="col-md-4">
    <textarea class="form-control" id="malamat" name="malamat" rows="5" style="resize: none;"></textarea>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="agama">Agama</label>
  <div class="col-md-4">
    <select id="magama" name="magama" class="form-control">
      <option value="Islam">Islam</option>
      <option value="Kristen_Protestan">Kristen Protestan</option>
      <option value="Kristen_Katolik">Kristen Katolik</option>
      <option value="Hindu">Hindu</option>
      <option value="Budha">Budha</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="nis">Nama Wali</label>
  <div class="col-md-5">
  <input id="mwali" name="mwali" type="text" placeholder="Nama Wali" class="form-control input-md" required="">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="telepon">No. Telepon</label>
  <div class="col-md-4">
  <input id="mtelepon" name="mtelepon" type="text" placeholder="Nomor Telepon" class="form-control input-md" required="">

  </div>
</div>

<!-- Button -->
</fieldset>
      </div>
      <div class="modal-footer">
        <input type="Submit" class="btn btn-primary" value="Simpan">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
</form>
  </div>
  </div><!-- /.modal -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="simpan btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

<?php
  $this->load->view($modal);
?>
<!-- modal script -->
<script type="text/javascript">
function getData(id_user, nis, nama, alamat, jenkel, agama, wali, telepon, tanggal_lahir) {
$("#id_user").val(id_user);
$("#mnis").val(nis);
$("#mnama").val(nama);
$("#malamat").val(alamat);
$("input[name=mjenkel][value=" + jenkel + "]").prop('checked', true);
$("#magama option[value=" + agama + "]").prop('selected', true);
$("#mwali").val(wali);
$("#mtelepon").val(telepon);
$("#mtgl_lahir").val(tanggal_lahir);
};

$('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('#danger').attr('href', $(e.relatedTarget).data('href'));
        });
</script>
<!-- /modal script -->
