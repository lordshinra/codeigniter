<div class="modal fade" id="inputwaktu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Input Waktu Ajar</h4>
      </div>
    <div class="modal-body">
      <form class="form-horizontal" method="post" action="<?php echo base_url()."index.php/masterwaktu/insert_waktu"; ?>">
        <div class="form-group">
          <label class="col-md-4 control-label" for="nis">Keterangan</label>
          <div class="col-md-5">
          <input id="keterangan" name="keterangan" type="text" placeholder="Nama waktu" class="form-control input-md" required="" value="">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="nis">Mulai</label>
          <div class="col-md-3">
          <select class="form-control" class="col-md-4" name="mulai" id="mulai">
            <?php
            $start = "07:00";
            $end = "17:00";

            $tStart = strtotime($start);
            $tEnd = strtotime($end);
            $tNow = $tStart;

            while($tNow <= $tEnd){
              $time = date("H:i",$tNow);
              echo '<option value="'.$time.'">'.$time.'</option>';
              $tNow = strtotime('+30 minutes',$tNow);
            }
            ?>
          </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="nis">Selesai</label>
          <div class="col-md-3">
          <select class="form-control" class="col-md-4" name="selesai" id="selesai">
            <?php
            $start = "07:00";
            $end = "17:00";

            $tStart = strtotime($start);
            $tEnd = strtotime($end);
            $tNow = $tStart;

            while($tNow <= $tEnd){
              $time = date("H:i",$tNow);
              echo '<option value="'.$time.'">'.$time.'</option>';
              $tNow = strtotime('+30 minutes',$tNow);
            }
            ?>
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
      <form class="form-horizontal" method="post" action="<?php echo base_url()."index.php/masterwaktu/update_waktu"; ?>">
        <div class="form-group">
          <label class="col-md-4 control-label" for="nis">Nama waktu</label>
          <div class="col-md-5">
          <input id="mid" name="mid" type="hidden" value="">
          <input id="mwaktu" name="mwaktu" type="text" placeholder="Nama waktu" class="form-control input-md" required="" value="">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="mulai">Mulai</label>
          <div class="col-md-3">
          <select id="mmulai" name="mmulai" class="form-control">
            <?php
            $start = "07:00";
            $end = "17:00";

            $tStart = strtotime($start);
            $tEnd = strtotime($end);
            $tNow = $tStart;

            while($tNow <= $tEnd){
              $time = date("H:i",$tNow);
              echo '<option value="'.$time.'">'.$time.'</option>';
              $tNow = strtotime('+30 minutes',$tNow);
            }
            ?>
          </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="nis">Selesai</label>
          <div class="col-md-3">
          <select id="mselesai" name="mselesai" class="form-control" >
            <?php
            $start = "07:00";
            $end = "17:00";

            $tStart = strtotime($start);
            $tEnd = strtotime($end);
            $tNow = $tStart;

            while($tNow <= $tEnd){
              $time = date("H:i",$tNow);
              echo '<option value="'.$time.'">'.$time.'</option>';
              $tNow = strtotime('+30 minutes',$tNow);
            }
            ?>
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
