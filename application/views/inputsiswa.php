<div class="modal fade" id="inputSiswa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Input Guru Baru</h4>
      </div>
      <div class="modal-body">

<form class="form-horizontal" method="post" action="<?php echo base_url()."index.php/mastersiswa/insert_siswa"; ?>">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nis">NIS</label>
  <div class="col-md-5">
  <input id="nis" name="nis" type="text" placeholder="NIS Siswa" class="form-control input-md" required="">
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
  <label class="col-md-4 control-label" for="jenkel">Jenis Kelamin</label>
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
  <div class="col-md-3">
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
  <label class="col-md-4 control-label" for="nis">Nama Wali</label>
  <div class="col-md-5">
  <input id="wali" name="wali" type="text" placeholder="Nama Wali" class="form-control input-md" required="">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="telepon">No. Telepon</label>
  <div class="col-md-5">
  <input id="telepon" name="telepon" type="text" placeholder="Nomor Telepon" class="form-control input-md" required="">
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
