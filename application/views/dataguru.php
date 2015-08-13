<?php echo $this->session->flashdata('pesan'); ?>

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
  <div class="modal-body">
    Yakin mau menghapus data ini ?
    <p class="debug-url"></p>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn btn-danger danger" id="danger">Delete</a>
    <button type="button" data-dismiss="modal" class="btn">Cancel</button>
  </div>
</div>
</div>
</div>

<p>
<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#inputGuru"><span class="glyphicon glyphicon-plus"></span>Input Guru Baru</a>
</p>
<table id="DataTables" class="table table-bordered table-striped text-center" style="margin-top:20px;">
  <thead>
    <tr>
      <th class="col-md-1">No.</th>
      <th>NIP</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>
  </thead>

  <tbody>
    <?php $no=1; foreach ($guru as $tampil) { ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $tampil['nip'] ?></td>
      <td><?php echo $tampil['nama_guru'] ?></td>
      <td>
        <?php $tgl_lahir = date("Y-m-d", strtotime($tampil['tanggal_lahir'])); ?>
        <a href="#" onclick="getData('<?php echo $tampil['id_guru']."','".$tampil['nip']."','".$tampil['nama_guru']."','".$tampil['alamat']."','".$tampil['jenis_kelamin']."','".$tampil['agama']."','".$tampil['pendidikan']."','".$tampil['telepon']."','".$tgl_lahir;?>')" style="text-decoration: none;">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Edit</button>
      </a>
        <a class="btn btn-warning" data-href="<?php echo base_url()."index.php/masterguru/delete_guru/".$tampil['id_guru']; ?>" data-toggle="modal" data-target="#confirm-delete" href="#">delete</a>
      </td>
    </tr>
    <?php $no++; } ?>
  </tbody>
</table>



<?php
  $this->load->view($modal);
?>
<!-- modal script -->
<script type="text/javascript">
function getData(id_user, nip, nama, alamat, jenkel, agama, pendidikan, telepon, tanggal_lahir) {
$("#id_user").val(id_user);
$("#mnip").val(nip);
$("#mnama").val(nama);
$("#malamat").val(alamat);
$("input[name=mjenkel][value=" + jenkel + "]").prop('checked', true);
$("#magama option[value=" + agama + "]").prop('selected', true);
$("#mpendidikan option[value=" + pendidikan + "]").prop('selected', true);
$("#mtelepon").val(telepon);
$("#mtgl_lahir").val(tanggal_lahir);
};

</script>

<!-- /modal script -->
