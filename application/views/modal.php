  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">


  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Update</h4>
      </div>
      <div class="modal-body">
       <form class="form-horizontal" method="post" action="<?php echo base_url()."index.php/project/insert_guru"; ?>">
<fieldset>

<!-- Form Name -->
<legend>Edit Data Guru</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nip">NIP</label>  
  <div class="col-md-5">
  <input id="nip" name="nip" type="text" placeholder="NIP Guru" class="form-control input-md" required="" value="<?php echo $tampil['nip'] ?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nama">Nama Lengkap</label>  
  <div class="col-md-5">
  <input id="nama" name="nama" type="text" placeholder="Nama Lengkap" class="form-control input-md" required="" value="<?php echo $tampil['nama_guru'] ?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tgl_lahir">Tanggal Lahir</label>  
  <div class="col-md-5">
  <input id="tgl_lahir" name="tgl_lahir" type="date" placeholder="Tanggal Lahir" class="form-control input-md" required="" value="">
    
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="jenkel">Jeis Kelamin</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="jenkel-0">
      <input type="radio" name="jenkel" id="jenkel-0" value="L" checked="checked">
      Laki-Laki
    </label> 
    <label class="radio-inline" for="jenkel-1">
      <input type="radio" name="jenkel" id="jenkel-1" value="P">
      Perempuan
    </label>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="alamat">Alamat</label>
  <div class="col-md-4">                     
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
  <label class="col-md-4 control-label" for="pendidikan">Pendidikan Terakhir</label>
  <div class="col-md-2">
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
  <div class="col-md-4">
  <input id="telepon" name="telepon" type="text" placeholder="Nomor Telepon" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
</fieldset>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
  </div><!-- /.modal -->