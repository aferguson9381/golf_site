<?php 
include('includes/connection.php'); 

function get_drivers() {
  global $con; 
  $get_drivers = "SELECT * FROM driver_brands";
  $run_drivers = mysqli_query($con, $get_drivers); 
  while($row_drivers = mysqli_fetch_array($run_drivers)) {

    $brand_id = $row_drivers['brand_id']; 

    echo "<option value='".$brand_id."'>".$row_drivers['brand_name']."</option>"; 
  }
}

function get_woods() {
  global $con; 
  $get_woods = "SELECT * FROM wood_brands";
  $run_woods = mysqli_query($con, $get_woods); 
  while($row_woods = mysqli_fetch_array($run_woods)) {

    $brand_id = $row_woods['brand_id']; 

    echo "<option value='".$brand_id."'>".$row_woods['brand_name']."</option>"; 
  }
}

function get_hybrids() {
  global $con; 
  $get_hybrids = "SELECT * FROM hybrid_brands";
  $run_hybrids = mysqli_query($con, $get_hybrids); 
  while($row_hybrids = mysqli_fetch_array($run_hybrids)) {

    $brand_id = $row_hybrids['brand_id']; 

    echo "<option value='".$brand_id."'>".$row_hybrids['brand_name']."</option>"; 
  }
}

function get_irons() {
  global $con; 
  $get_irons = "SELECT * FROM iron_brands";
  $run_irons = mysqli_query($con, $get_irons); 
  while($row_irons = mysqli_fetch_array($run_irons)) {

    $brand_id = $row_irons['brand_id']; 

    echo "<option value='".$brand_id."'>".$row_irons['brand_name']."</option>"; 
  }
}

function get_wedge() {
  global $con; 
  $get_wedges = "SELECT * FROM wedge_brands";
  $run_wedges = mysqli_query($con, $get_wedges); 
  while($row_wedges = mysqli_fetch_array($run_wedges)) {

    $brand_id = $row_wedges['brand_id']; 

    echo "<option value='".$brand_id."'>".$row_wedges['brand_name']."</option>"; 
  }
}

function get_putter() {
  global $con; 
  $get_putters = "SELECT * FROM putter_brands";
  $run_putters = mysqli_query($con, $get_putters); 
  while($row_putters = mysqli_fetch_array($run_putters)) {

    $brand_id = $row_putters['brand_id']; 

    echo "<option value='".$brand_id."'>".$row_putters['brand_name']."</option>"; 
  }
}

function get_courses() {
  global $con;
  $get_course = "SELECT * 
       FROM courses";

  $run_course = mysqli_query($con,$get_course);

  while($row=mysqli_fetch_array($run_course)) {
    $course_id = $row["course_id"];
    $course_name = $row["course_name"];

    echo '<option value="'.$course_id."_".htmlentities($course_name).'">'.$course_name.'</option>';
  }
}
?>