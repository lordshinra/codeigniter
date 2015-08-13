<div class="modal fade" id="inputGuru" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Input Guru Baru</h4>
      </div>
      <div class="modal-body">

<form class="form-horizontal" method="post" action="<?php echo base_url()."index.php/masterguru/insert_guru"; ?>">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nip">NIP</label>
  <div class="col-md-5">
  <input id="nip" name="nip" type="text" placeholder="NIP Guru" class="form-control input-md" required="">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nama">Nama Lengkap</label>
  <div class="col-md-5">
  <input id="nama" name="nama" type="text" placeholder="Nama Lengkap" class="form-control input-md" required="">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tgl_lahir">Tanggal Lahir</label>
  <div class="col-md-5">
  <input id="tgl_lahir" name="tgl_lahir" type="date" placeholder="Tanggal Lahir" class="form-control input-md" required="">

  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="jenkel">Jeis Kelamin</label>
  <div class="col-md-4">
    <label class="radio-inline" for="jenkel-0">
      <input type="radio" name="jenkel" id="jenkel-0" value="L" checked="checked">
      Laki-Laki
    </label><br />
    <label class="radio-inline" for="jenkel-1">
      <input type="radio" name="jenkel" id="jenkel-1" value="P">
      Perempuan
    </label>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="alamat">Alamat</label>
  <div class="col-md-5">
    <textarea class="form-control" id="alamat" name="alamat" rows="5" style="resize: none;"></textarea>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="agama">Agama</label>
  <div class="col-md-4">
    <select id="agama" name="agama" class="form-control">
      <option value="Islam">Islam</option>
      <option value="Kristen Protestan">Kristen Protestan</option>
      <option value="Kristen Katolik">Kristen Katolik</option>
      <option value="Hindu">Hindu</option>
      <option value="Budha">Budha</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="pendidikan">Pendidikan Terakhir</label>
  <div class="col-md-3">
    <select id="pendidikan" name="pendidikan" class="form-control">
      <option value="D3">D3</option>
      <option value="S1">S1</option>
      <option value="S2">S2</option>
      <option value="S3">S3</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="telepon">No. Telepon</label>
  <div class="col-md-5">
  <input id="telepon" name="telepon" type="text" placeholder="Nomor Telepon" class="form-control input-md" required="">
  </div>
</div>

</fieldset>
</div>
  <!-- Button -->
      <div class="modal-footer">
        <input type="submit" id="submit" name="submit" value="Simpan" class="btn btn-primary">
        <button type="button" data-dismiss="modal" class="btn">Batal</button>
      </div>
      </form>
    </div>
  </div>
  </div>


  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Data Guru</h4>
      </div>
      <div class="modal-body">
       <form class="form-horizontal" method="post" action="<?php echo base_url()."index.php/masterguru/update_guru"; ?>">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nip">NIP</label>
  <div class="col-md-5">
  <input id="id_user" name="id_user" type="hidden" value="">
  <input id="mnip" name="mnip" type="text" placeholder="NIP Guru" class="form-control input-md" required="" value="">
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
  <label class="col-md-4 control-label" for="pendidikan">Pendidikan Terakhir</label>
  <div class="col-md-3">
    <select id="mpendidikan" name="mpendidikan" class="form-control">
      <option value="D3">D3</option>
      <option value="S1">S1</option>
      <option value="S2">S2</option>
      <option value="S3">S3</option>
    </select>
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
