
 <section class="content">
           <?php if($_SESSION['level']=='0'){ ?>
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>Data Siswa</h3>
                  <small>Master</small>
                  <!-- <font size="40"><?=totalSiswa('siswa');?></font> -->
                </div>
                <div class="icon">
                
                </div>
                <a href="index.php?page=siswa" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-4 col-xs-7">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>Data Pelanggaran</h3>
                  <small>Master</small>
                  <!-- <font size="40"><?=totalSiswa('t_pelanggaran');?></font> -->
                </div>
                <div class="icon">
                </div>
                <a href="index.php?page=pelanggaran" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-4 col-xs-7">
              <!-- small box -->
            <!--   <div class="small-box bg-red">
                <div class="inner">
                  <h3>Data User</h3>
                  <font size="40"><?=totalSiswa('login');?></font>
                </div>
                <div class="icon">
                </div>
                <a href="index.php?page=pelanggaran" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div> --><!-- ./col -->
			 <?php } ?>
			 
			  <?php if($_SESSION['level']=='1'){ ?>
			<div class="col-lg-4 col-xs-7">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
				
                  <h3>Data Pelanggaran</h3>
                  <p>Master</p>
                </div>
                <div class="icon">
                </div>
                <a href="index.php?page=transaksi" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
			<?php } ?>
           </section>
		   </div>
		   
		
        
		
		
		