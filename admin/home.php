<!--<h1>Welcome to <?php echo $_settings->info('name') ?></h1>-->

<?php 

   
    $qry = $conn->query("SELECT * FROM `treks`  where  	`postcategory`='Track' order by `id` asc");
    $tot= $qry->num_rows;
    
    $qry = $conn->query("SELECT * FROM `treks`  where  `postcategory`='Watersports' order by `id` asc");
    $admin= $qry->num_rows;
    
    $qry = $conn->query("SELECT * FROM `treks`  where  `postcategory`='Caravantours' order by `id` asc");
    $ctot= $qry->num_rows;
    
    $qry = $conn->query("SELECT * FROM `treks`  where  `postcategory`='Backpacking' order by `id` asc");
    $cqtot= $qry->num_rows;

?>

<div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $tot;?></h3>

                <p>Total Traks </p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="?page=traks" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $admin; ?></h3>

                <p>Total Water Sports</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="?page=watersports" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $ctot; ?></h3>

                <p>Total Caravan Tours</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="?page=caravan-tours" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $cqtot ?></h3>

                <p>Total Backpacking</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="?page=backpacking" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
