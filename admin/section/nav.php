<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url(images/logo.jpg);"></div>
	  				<h3>Catriona Henderson</h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="utama.php"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <li>
              <a href="operator.php"><span class="fa fa-address-card-o mr-3 notif"></span>List Operator</a>          </li>
          <li>
            <a href="absensi.php"><span class="fa fa-users mr-3"></span> Absensi</a>
          </li>
          <li>
		  <?php
		  	$dateku=date('Y-m');
			?>
            <a href="produksi.php?periode=<?php echo $dateku; ?>"><span class="fa fa-crosshairs mr-3"></span> Produksi</a>
          </li>
		  <li>
            <a href="index.php"><span class="fa fa-line-chart mr-3"></span> Kenaikan Grade</a>
          </li>
          
          <li>
            
          </li>
          <li>
            <a href="#"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
        </ul>

    	</nav>
