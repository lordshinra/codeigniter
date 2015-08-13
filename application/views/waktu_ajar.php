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

<?php echo $this->session->flashdata('pesan'); ?>

<div style="width: 80%;">
<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#inputwaktu"><span class="glyphicon glyphicon-plus"></span>Input waktu Baru</a>

<table class="table table-bordered table-striped text-center" style="margin-top:20px;">
  <thead>
    <tr>
      <th class="col-md-1" rowspan='2'>No.</th>
      <th rowspan='2'>Keterangan</th>
      <th colspan='2'>Waktu</th>
      <th rowspan='2'>Aksi</th>
    </tr>
    <tr>
      <th>Mulai</th>
      <th>Selesai</th>
    </tr>
  </thead>

  <tbody>
    <?php $no=1; foreach ($waktu as $tampil) {?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $tampil['keterangan'] ?></td>
      <td><?php echo $tampil['mulai'] ?></td>
      <td><?php echo $tampil['selesai'] ?></td>
      <td>
        <a href="#" onclick="getData('<?php echo $tampil['id_waktu']."','".$tampil['keterangan']."','".$tampil['mulai']."','".$tampil['selesai']; ?>')" style="text-decoration: none;">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editwaktu">Edit</button>
      </a>
        <a class="btn btn-warning" data-href="<?php echo base_url()."index.php/masterwaktu/delete_waktu/".$tampil['id_waktu']; ?>" data-toggle="modal" data-target="#confirm-delete" href="#">delete</a>
      </td>
    </tr>
    <?php $no++; } ?>
  </tbody>
</table>
</div>
<?php
  $this->load->view($modal);
?>

<!-- modal script -->
<script type="text/javascript">
function getData(id_waktu, nama_waktu, mulai, selesai) {
$("#mid").val(id_waktu);
$("#mwaktu").val(nama_waktu);
$("#mmulai").val(mulai);
$("#mselesai").val(selesai);
};
</script>
<!-- /modal script -->
