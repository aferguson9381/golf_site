<?php
include('includes/driver_delete.php'); 
$get_driver = "SELECT * FROM in_my_bag_driver WHERE user_id = '".$_GET['user_id']."' AND club_driver_status = 'active' ORDER BY driver_id DESC"; 
$run_driver = mysqli_query($con, $get_driver); 
$num_driver = mysqli_num_rows($run_driver); 
while($row_driver = mysqli_fetch_array($run_driver)) {
  if($num_driver != 0) {
echo"
  <!-- today tasks -->
  <li class='group'>
    <div class='pointer' style='color:#fff !important;'></div>
    <!-- tasks -->
    <div class='task-group'>
      <!-- task -->
      <div class='task panel tile color transparent-black'>
        <div></div>
        <div class='panel-heading'>
          <div class='heading'>
            <h5 style='color:#fff !important;'>".$row_driver['club_driver_co']."</h5>
            <small style='color:#fff !important;'>".$row_driver['club_driver_kind'].": ".$row_driver['club_driver_loft']." <sup><i style='font-size:6px; color:#fff !important;'' class='fa fa-circle-thin'></i></sup></small>
          </div>
          <span class='label label-default' style='min-width:100px;'>Driver</span>
          <a class='task-toggle' data-toggle='collapse' style='color:#fff !important;' data-target='#task_driver".$row_driver['driver_id']."' data-parent='.task-group' href='#'>
            <i class='fa fa-angle-down'></i>
          </a>
        </div>
        <div id='task_driver".$row_driver['driver_id']."' class='collapse'>
          <div class='panel-body task-content'>
            <div class='row'>
              <div class='col-lg-10 col-md-10'>
                <ul class='media-list'>
                  <li class='media'>
                    <i class='pull-left fa fa-circle' style='color:#fff !important;'></i>
                    <div class='media-body'>
                      <h5 class='media-heading' style='color:#fff !important;'><strong style='color:#fff !important;'>Brand:</strong> ".$row_driver['club_driver_co']."</h5>
                    </div>
                  </li>
                  <li class='media'>
                    <i class='pull-left fa fa-circle-o' style='color:#fff !important;'></i>
                    <div class='media-body'>
                      <h5 class='media-heading' style='color:#fff !important;'><strong style='color:#fff !important;'>Model:</strong> ".$row_driver['club_driver_kind']."</h5>
                    </div>
                  </li>
                  <li class='media'>
                    <i class='pull-left fa fa-circle-thin' style='color:#fff !important;'></i>
                    <div class='media-body'>
                      <h5 class='media-heading' style='color:#fff !important;'><strong style='color:#fff !important;'>Loft:</strong> ".$row_driver['club_driver_loft']." <sup><i style='font-size:6px;' class='fa fa-circle-thin'></i></sup></h5>
                    </div>
                  </li>
                  <li class='media'>
                    <i class='pull-left fa fa-info-circle' style='color:#fff !important;'></i>
                    <div class='media-body'>
                      <h5 class='media-heading'><strong style='color:#fff !important;'>Driver Desc:</strong></h5>
                      <p style='color:#fff !important;'>".$row_driver['club_driver_desc']."</p>
                    </div>
                  </li>
                </ul>
              </div>
              <div class='col-lg-2 col-md-2 task-controls'>
                <form action='' method='post'>
                  <input type='hidden' name='driver_id' value='".$row_driver['driver_id']."'>
                  <button type='submit' name='driver_delete' class='btn btn-danger btn-sm'><i class='fa fa-plus'></i> Delete</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /task -->
    </div>
    <!-- tasks -->
  </li>
  <!-- /today tasks -->
  <!-- yesterday tasks -->";
} else {
  echo "";
}
}
  include('includes/wood_delete.php'); 
  $get_woods = "SELECT * FROM in_my_bag_woods WHERE user_id = '".$_GET['user_id']."' AND club_wood_status = 'active' ORDER BY wood_id DESC"; 
  $run_woods = mysqli_query($con, $get_woods); 
  $num_woods = mysqli_num_rows($run_woods); 
  while($row_woods = mysqli_fetch_array($run_woods)) {
    if($num_woods != 0) {
  echo"
  <li class='group'>
    <div class='pointer' style='color:#fff !important;'></div>
    <!-- tasks -->
    <div class='task-group' id='accordion03'>
      <!-- task -->
      <div class='task panel tile color transparent-black'>
        <div></div>
        <div class='panel-heading'>
          <div class='heading'>
            <h5 style='color:#fff !important;'>".$row_woods['club_wood_co']."</h5>
            <small style='color:#fff !important;'>".$row_woods['club_wood_kind'].": ".$row_woods['club_wood_loft']." <sup><i style='font-size:6px;' style='color:#fff !important;' class='fa fa-circle-thin'></i></sup></small>
          </div>
          <span class='label label-slategray' style='min-width:100px;'>Woods</span>
          <a class='task-toggle' data-toggle='collapse' style='color:#fff !important;' data-target='#task_wood".$row_woods['wood_id']."' data-parent='.task-group' href='#'>
            <i class='fa fa-angle-down'></i>
          </a>
        </div>
        <div id='task_wood".$row_woods['wood_id']."' class='collapse'>
          <div class='panel-body task-content'>
            <div class='row'>
              <div class='col-lg-10 col-md-8'>
                <ul class='media-list'>
                  <li class='media'>
                    <i class='pull-left fa fa-circle' style='color:#fff !important;'></i>
                    <div class='media-body'>
                      <h5 class='media-heading' style='color:#fff !important;'><strong style='color:#fff !important;'>Brand:</strong> ".$row_woods['club_wood_co']."</h5>
                    </div>
                  </li>
                  <li class='media'>
                    <i class='pull-left fa fa-circle-o' style='color:#fff !important;'></i>
                    <div class='media-body'>
                      <h5 class='media-heading' style='color:#fff !important;'><strong style='color:#fff !important;'>Model:</strong> ".$row_woods['club_wood_kind']."</h5>
                    </div>
                  </li>
                  <li class='media'>
                    <i class='pull-left fa fa-circle-thin' style='color:#fff !important;'></i>
                    <div class='media-body'>
                      <h5 class='media-heading' style='color:#fff !important;'><strong style='color:#fff !important;'>Loft:</strong> ".$row_woods['club_wood_loft']." <sup><i style='font-size:6px;' class='fa fa-circle-thin'></i></sup></h5>
                    </div>
                  </li>
                  <li class='media'>
                    <i class='pull-left fa fa-info-circle' style='color:#fff !important;'></i>
                    <div class='media-body'>
                      <h5 class='media-heading'><strong style='color:#fff !important;'>Additional Info:</strong></h5>
                      <p style='color:#fff !important;'>".$row_woods['club_wood_desc']."</p>
                    </div>
                  </li>
                </ul>
              </div>
              <div class='col-lg-2 col-md-4 task-controls'>
                <form action='' method='post'>
                  <input type='hidden' name='wood_id' value='".$row_woods['wood_id']."'>
                  <button type='submit' name='wood_delete' class='btn btn-danger btn-sm'><i class='fa fa-plus'></i> Delete</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /task -->
    </div>
    <!-- tasks -->
  </li>";
  } else {
    echo ""; 
  }
} 
include('includes/hybrid_delete.php'); 
$get_hybrids = "SELECT * FROM in_my_bag_hybrids WHERE user_id = '".$_GET['user_id']."' AND club_hybrid_status = 'active' ORDER BY hybrid_id DESC"; 
$run_hybrids = mysqli_query($con, $get_hybrids); 
$num_hybrids = mysqli_num_rows($run_hybrids); 
while($row_hybrids = mysqli_fetch_array($run_hybrids)) {
  if($num_hybrids != 0) {
echo"
<li class='group'>
    <div class='pointer'></div>
    <!-- tasks -->
    <div class='task-group' id='accordion04'>
      <!-- task -->
      <div class='task panel tile color transparent-black'>
        <div></div>
        <div class='panel-heading'>
          <div class='heading'>
            <h5 style='color:#fff !important;'>".$row_hybrids['club_hybrid_co']."</h5>
            <small style='color:#fff !important;'>".$row_hybrids['club_hybrid_kind'].": ".$row_hybrids['club_hybrid_loft']." <sup><i style='font-size:6px;' style='color:#fff !important;' class='fa fa-circle-thin'></i></sup></small>
          </div>
          <span class='label label-primary' style='min-width:100px;'>Hybrids</span>
          <a class='task-toggle' data-toggle='collapse' style='color:#fff !important;' data-target='#task_hybrid".$row_hybrids['hybrid_id']."' data-parent='.task-group' href='#'>
            <i class='fa fa-angle-down'></i>
          </a>
        </div>
        <div id='task_hybrid".$row_hybrids['hybrid_id']."' class='collapse'>
          <div class='panel-body task-content'>
            <div class='row'>
              <div class='col-lg-10 col-md-8'>
                <ul class='media-list'>
                  <li class='media'>
                    <i class='pull-left fa fa-circle' style='color:#fff !important;'></i>
                    <div class='media-body'>
                      <h5 class='media-heading' style='color:#fff !important;'><strong style='color:#fff !important;'>Brand:</strong> ".$row_hybrids['club_hybrid_co']."</h5>
                    </div>
                  </li>
                  <li class='media'>
                    <i class='pull-left fa fa-circle-o' style='color:#fff !important;'></i>
                    <div class='media-body'>
                      <h5 class='media-heading' style='color:#fff !important;'><strong style='color:#fff !important;'>Model:</strong> ".$row_hybrids['club_hybrid_kind']."</h5>
                    </div>
                  </li>
                  <li class='media'>
                    <i class='pull-left fa fa-circle-thin' style='color:#fff !important;'></i>
                    <div class='media-body'>
                      <h5 class='media-heading' style='color:#fff !important;'><strong style='color:#fff !important;'>Loft:</strong> ".$row_hybrids['club_hybrid_loft']." <sup><i style='font-size:6px;' class='fa fa-circle-thin'></i></sup></h5>
                    </div>
                  </li>
                  <li class='media'>
                    <i class='pull-left fa fa-info-circle' style='color:#fff !important;'></i>
                    <div class='media-body'>
                      <h5 class='media-heading'><strong style='color:#fff !important;'>Additional Info:</strong></h5>
                      <p style='color:#fff !important;'>".$row_hybrids['club_hybrid_desc']."</p>
                    </div>
                  </li>
                </ul>
              </div>
              <div class='col-lg-2 col-md-4 task-controls'>
                <form action='' method='post'>
                  <input type='hidden' name='hybrid_id' value='".$row_hybrids['hybrid_id']."'>
                  <button name='hybrid_delete' class='btn btn-danger btn-sm'><i class='fa fa-plus'></i> Delete</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /task -->
    </div>
    <!-- tasks -->
  </li>
";
  } else {
    echo "";
  }
}
include('includes/irons_delete.php'); 
$get_irons = "SELECT * FROM in_my_bag_irons WHERE user_id = '".$_GET['user_id']."' AND club_irons_status = 'active' ORDER BY irons_id DESC"; 
$run_irons = mysqli_query($con, $get_irons); 
$num_irons = mysqli_num_rows($run_irons);
while($row_irons = mysqli_fetch_array($run_irons)) {
  if($num_irons != 0) {
echo"
<li class='group'>
    <div class='pointer'></div>
    <!-- tasks -->
    <div class='task-group' id='accordion05'>
      <!-- task -->
      <div class='task panel tile color transparent-black'>
        <div></div>
        <div class='panel-heading'>
          <div class='heading'>
            <h5 style='color:#fff !important;'>".$row_irons['club_irons_co']."</h5>
            <small style='color:#fff !important;'>".$row_irons['club_irons_kind'].": ".$row_irons['club_irons_clubs']."</small>
          </div>
          <span class='label label-cyan' style='min-width:100px;'>Irons</span>
          <a class='task-toggle' data-toggle='collapse' style='color:#fff !important;' data-target='#task_irons".$row_irons['irons_id']."' data-parent='.task-group' href='#'>
            <i class='fa fa-angle-down'></i>
          </a>
        </div>
        <div id='task_irons".$row_irons['irons_id']."' class='collapse'>
          <div class='panel-body task-content'>
            <div class='row'>
              <div class='col-lg-10 col-md-8'>
                <ul class='media-list'>
                  <li class='media'>
                    <i class='pull-left fa fa-circle' style='color:#fff !important;'></i>
                    <div class='media-body'>
                      <h5 class='media-heading' style='color:#fff !important;'><strong style='color:#fff !important;'>Brand:</strong> ".$row_irons['club_irons_co']."</h5>
                    </div>
                  </li>
                  <li class='media'>
                    <i class='pull-left fa fa-circle-o' style='color:#fff !important;'></i>
                    <div class='media-body'>
                      <h5 class='media-heading' style='color:#fff !important;'><strong style='color:#fff !important;'>Model:</strong> ".$row_irons['club_irons_kind']."</h5>
                    </div>
                  </li>
                  <li class='media'>
                    <i class='pull-left fa fa-circle-thin' style='color:#fff !important;'></i>
                    <div class='media-body'>
                      <h5 class='media-heading' style='color:#fff !important;'><strong style='color:#fff !important;'>Loft:</strong> ".$row_irons['club_irons_clubs']."</h5>
                    </div>
                  </li>
                  <li class='media'>
                    <i class='pull-left fa fa-info-circle' style='color:#fff !important;'></i>
                    <div class='media-body'>
                      <h5 class='media-heading'><strong style='color:#fff !important;'>Additional Info:</strong></h5>
                      <p style='color:#fff !important;'>".$row_irons['club_irons_desc']."</p>
                    </div>
                  </li>
                </ul>
              </div>
              <div class='col-lg-2 col-md-4 task-controls'>
                <form action='' method='post'>
                  <input type='hidden' name='irons_id' value='".$row_irons['irons_id']."'>
                  <button type='submit' name='irons_delete' class='btn btn-danger btn-sm'><i class='fa fa-plus'></i> Delete</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /task -->
    </div>
    <!-- tasks -->
  </li>
";
} else {
  echo ""; 
}
} 
include('includes/wedge_delete.php');
$get_wedges = "SELECT * FROM in_my_bag_wedges WHERE user_id = '".$_GET['user_id']."' AND club_wedge_status = 'active' ORDER BY wedge_id DESC"; 
$run_wedges = mysqli_query($con, $get_wedges); 
$num_wedges = mysqli_num_rows($run_wedges);
while($row_wedges = mysqli_fetch_array($run_wedges)) {
  if($num_wedges != 0) {
echo"
<li class='group'>
    <div class='pointer'></div>
    <!-- tasks -->
    <div class='task-group' id='accordion06'>
      <!-- task -->
      <div class='task panel tile color transparent-black'>
        <div></div>
        <div class='panel-heading'>
          <div class='heading'>
            <h5 style='color:#fff !important;'>".$row_wedges['club_wedge_co']."</h5>
            <small style='color:#fff !important;'>".$row_wedges['club_wedge_kind'].": ".$row_wedges['club_wedge_loft']." <sup><i style='font-size:6px;' style='color:#fff !important;' class='fa fa-circle-thin'></i></sup></small>
          </div>
          <span class='label label-dutch' style='min-width:100px;'>Wedges</span>
          <a class='task-toggle' data-toggle='collapse' style='color:#fff !important;' data-target='#task_wedge".$row_wedges['wedge_id']."' data-parent='.task-group' href='#'>
            <i class='fa fa-angle-down'></i>
          </a>
        </div>
        <div id='task_wedge".$row_wedges['wedge_id']."' class='collapse'>
          <div class='panel-body task-content'>
            <div class='row'>
              <div class='col-lg-10 col-md-8'>
                <ul class='media-list'>
                  <li class='media'>
                    <i class='pull-left fa fa-circle' style='color:#fff !important;'></i>
                    <div class='media-body'>
                      <h5 class='media-heading' style='color:#fff !important;'><strong style='color:#fff !important;'>Brand:</strong> ".$row_wedges['club_wedge_co']."</h5>
                    </div>
                  </li>
                  <li class='media'>
                    <i class='pull-left fa fa-circle-o' style='color:#fff !important;'></i>
                    <div class='media-body'>
                      <h5 class='media-heading' style='color:#fff !important;'><strong style='color:#fff !important;'>Model:</strong> ".$row_wedges['club_wedge_kind']."</h5>
                    </div>
                  </li>
                  <li class='media'>
                    <i class='pull-left fa fa-circle-thin' style='color:#fff !important;'></i>
                    <div class='media-body'>
                      <h5 class='media-heading' style='color:#fff !important;'><strong style='color:#fff !important;'>Loft:</strong> ".$row_wedges['club_wedge_loft']." <sup><i style='font-size:6px;' style='color:#fff !important;' class='fa fa-circle-thin'></i></sup></h5>
                    </div>
                  </li>
                  <li class='media'>
                    <i class='pull-left fa fa-info-circle' style='color:#fff !important;'></i>
                    <div class='media-body'>
                      <h5 class='media-heading'><strong style='color:#fff !important;'>Additional Info:</strong></h5>
                      <p style='color:#fff !important;'>".$row_wedges['club_wedge_desc']." </p>
                    </div>
                  </li>
                </ul>
              </div>
              <div class='col-lg-2 col-md-4 task-controls'>
                <form action='' method='post'>
                  <input type='hidden' name='wedge_id' value='".$row_wedges['wedge_id']."'>
                  <button type='submit' name='wedge_delete' class='btn btn-danger btn-sm'><i class='fa fa-plus'></i> Delete</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /task -->
    </div>
    <!-- tasks -->
  </li>
";
} else {
  echo ""; 
}
}
include('includes/putter_delete.php'); 
$get_putters = "SELECT * FROM in_my_bag_putters WHERE user_id = '".$_GET['user_id']."' AND club_putter_status = 'active' ORDER BY putter_id DESC"; 
$run_putters = mysqli_query($con, $get_putters); 
$num_putters = mysqli_num_rows($run_putters); 
while($row_putters = mysqli_fetch_array($run_putters)) {
  if($num_putters != 0) {
echo"
<li class='group'>
    <div class='pointer'></div>
    <!-- tasks -->
    <div class='task-group' id='accordion05'>
      <!-- task -->
      <div class='task panel tile color transparent-black'>
        <div></div>
        <div class='panel-heading'>
          <div class='heading'>
            <h5 style='color:#fff !important;'>".$row_putters['club_putter_co']."</h5>
            <small style='color:#fff !important;'>".$row_putters['club_putter_kind']."</small>
          </div>
          <span class='label label-greensea' style='min-width:100px;'>Putter</span>
          <a class='task-toggle' data-toggle='collapse' style='color:#fff !important;' data-target='#task_putter".$row_putters['putter_id']."' data-parent='.task-group' href='#'>
            <i class='fa fa-angle-down'></i>
          </a>
        </div>
        <div id='task_putter".$row_putters['putter_id']."' class='collapse'>
          <div class='panel-body task-content'>
            <div class='row'>
              <div class='col-lg-10 col-md-8'>
                <ul class='media-list'>
                  <li class='media'>
                    <i class='pull-left fa fa-circle' style='color:#fff !important;'></i>
                    <div class='media-body'>
                      <h5 class='media-heading' style='color:#fff !important;'><strong style='color:#fff !important;'>Brand:</strong> ".$row_putters['club_putter_co']."</h5>
                    </div>
                  </li>
                  <li class='media'>
                    <i class='pull-left fa fa-circle-o' style='color:#fff !important;'></i>
                    <div class='media-body'>
                      <h5 class='media-heading' style='color:#fff !important;'><strong style='color:#fff !important;'>Model:</strong> ".$row_putters['club_putter_kind']."</h5>
                    </div>
                  </li>
                  <li class='media'>
                    <i class='pull-left fa fa-info-circle' style='color:#fff !important;'></i>
                    <div class='media-body'>
                      <h5 class='media-heading'><strong style='color:#fff !important;'>Additional Info:</strong></h5>
                      <p style='color:#fff !important;'>".$row_putters['club_putter_desc']." </p>
                    </div>
                  </li>
                </ul>
              </div>
              <div class='col-lg-2 col-md-4 task-controls'>
                <form action='' method='post'>
                  <input type='hidden' name='putter_id' value='".$row_putters['putter_id']."'>
                  <button type='submit' name='putter_delete' class='btn btn-danger btn-sm'><i class='fa fa-plus'></i> Delete</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /task -->
    </div>
    <!-- tasks -->
  </li>
";
} else {
  echo ""; 
}
}
?>