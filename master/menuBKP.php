


<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
          
            <div class="pull-left info">
              <p><?php echo $_SESSION['nama_user']; ?></p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
			<?php if($_SESSION['level']=='0'){ ?>
            <li class="<?php echo ($_GET['page']=='siswa' || $_GET['page']=='pelanggaran' ? 'active' : '')?> treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Master</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li <?php echo (isset($_GET['page']) && $_GET['page']=='siswa' ? 'class="active"' : '')?>><a href="index.php?page=siswa"><i class="fa fa-circle-o"></i> Data Siswa</a></li>
                <li <?php echo (isset($_GET['page']) && $_GET['page']=='pelanggaran' ? 'class="active"' : '')?>><a href="index.php?page=pelanggaran"><i class="fa fa-circle-o"></i>Data Pelanggaran</a></li>
           
              </ul>
            </li>
			<?php } ?>
 
            <li class="<?php echo ($_GET['page']=='updatepass' || $_GET['page']=='manage' ? 'active' : '')?> treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Settings</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li <?php echo (isset($_GET['page']) && $_GET['page']=='updatepass' ? 'class="active"' : '')?>><a href="index.php?page=updatepass"><i class="fa fa-circle-o"></i>Update Password</a></li>
				
                <li <?php echo (isset($_GET['page']) && $_GET['page']=='manage' ? 'class="active"' : '')?>> 
		<?php 
			//echo $_SESSION['level'];
			if($_SESSION['level']=='0'){
				echo '<a href="index.php?page=manage"><i class="fa fa-circle-o"></i> Manage User</a></li>';
			}
		?>
              </ul>
            </li>
			 <li class="<?php echo ($_GET['page']=='transaksi' ? 'active' : '')?> treeview">
              <a href="#">
                <i class="fa fa-stack-exchange"></i> <span>Pengolahan</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li <?php echo (isset($_GET['page']) && $_GET['page']=='transaksi' ? 'class="active"' : '')?>><a href="index.php?page=transaksi"><i class="fa fa-circle-o"></i>Pelanggaran</a></li>
              </ul>
            </li>
			   <?php if($_SESSION['level']=='0'){ ?>
			  <li class="<?php echo ($_GET['page']=='print' ? 'active' : '')?> treeview">
                <li <?php echo (isset($_GET['page']) && $_GET['page']=='print' ? 'class="active"' : '')?>><a href="index.php?page=print"><i class="fa fa-print"></i><span>Print</span></a>
             
            </li>
			  <?php } ?>
           
			
          </ul>
		  

        </section>
        <!-- /.sidebar -->
      </aside>