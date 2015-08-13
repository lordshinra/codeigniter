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

<div class="modal fade" id="inputmapel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Input Mata Pelajaran Baru</h4>
      </div>
    <div class="modal-body">
      <form class="form-horizontal" method="post" action="<?php echo base_url()."index.php/mastermapel/insert_mapel"; ?>">
        <div class="form-group">
          <label class="col-md-4 control-label" for="nis">Nama mapel</label>
          <div class="col-md-5">
          <input id="mapel" name="mapel" type="text" placeholder="Nama mapel" class="form-control input-md" required="" value="">
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

<div class="modal fade" id="editmapel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Nama mapel</h4>
      </div>
    <div class="modal-body">
      <form class="form-horizontal" method="post" action="<?php echo base_url()."index.php/mastermapel/update_mapel"; ?>">
        <div class="form-group">
          <label class="col-md-4 control-label" for="nis">Nama mapel</label>
          <div class="col-md-5">
          <input id="mid" name="mid" type="hidden" value="">
          <input id="mmapel" name="mmapel" type="text" placeholder="Nama mapel" class="form-control input-md" required="" value="">
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
<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#inputmapel"><span class="glyphicon glyphicon-plus"></span>Input mapel Baru</a>

<table class="table table-bordered table-striped text-center" style="margin-top:20px;">
  <thead>
    <tr>
      <th class="col-md-1">No.</th>
      <th>Nama mapel</th>
      <th>Aksi</th>
    </tr>
  </thead>

  <tbody>
    <?php $no=1; foreach ($mapel as $tampil) {?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $tampil['nama_mapel'] ?></td>
      <td>
        <a href="#" onclick="getData('<?php echo $tampil['id_mapel']."','".$tampil['nama_mapel']; ?>')" style="text-decoration: none;">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editmapel">Edit</button>
      </a>
        <a class="btn btn-warning" data-href="<?php echo base_url()."index.php/mastermapel/delete_mapel/".$tampil['id_mapel']; ?>" data-toggle="modal" data-target="#confirm-delete" href="#">delete</a>
      </td>
    </tr>
    <?php $no++; } ?>
  </tbody>
</table>
</div>

<!-- modal script -->
<script type="text/javascript">
function getData(id_mapel, nama_mapel) {
$("#mid").val(id_mapel);
$("#mmapel").val(nama_mapel);
};

$('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('#danger').attr('href', $(e.relatedTarget).data('href'));
        });
</script>
<!-- /modal script -->
