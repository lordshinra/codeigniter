<h2 id="sec0">Selamat Datang</h2>
        <p>
          <h3>
          	<?php echo "Username : ".$this->session->userdata('username')."<br />"; ?>
          	<?php echo "Level : ".$this->session->userdata('level')."<br />"; ?>
          	<?php echo "Email : ".$this->session->userdata('email'); ?>
          </h3>
        </p>  
        <hr>