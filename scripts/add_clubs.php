<div class='row text-center'>
  <button type='button' style='color:#fff !important;' class='btn btn-link margin-bottom-20 md-trigger' data-modal='modal-1'>Add A Driver</button>
  <button type='button' style='color:#fff !important;' class='btn btn-link margin-bottom-20 md-trigger' data-modal='modal-2'>Add A Wood</button>
  <button type='button' style='color:#fff !important;' class='btn btn-link margin-bottom-20 md-trigger' data-modal='modal-3'>Add A Hybrid</button>
  <button type='button' style='color:#fff !important;' class='btn btn-link margin-bottom-20 md-trigger' data-modal='modal-4'>Add Irons</button>
  <button type='button' style='color:#fff !important;' class='btn btn-link margin-bottom-20 md-trigger' data-modal='modal-5'>Add A Wedge</button>
  <button type='button' style='color:#fff !important;' class='btn btn-link margin-bottom-20 md-trigger' data-modal='modal-6'>Add A Putter</button>
    <!-- add club modals -->
    <div class="md-modal md-effect-1 md-white" id="modal-1">
      <div class="md-content">
        <h3>Add A Driver</h3>
        <div>
          <form action='' method='post'>
            <div class='form-group'>
              <label for='input07' class='col-sm-4 control-label'>Driver</label>
              <div class='col-sm-8'>
                <select class='chosen-select chosen-transparent form-control' name='driver_brand' onchange="get_driver(this.value)">
                  <option value=''>Select Club Maker</option>
                  <?php get_drivers() ?>
                </select>
              </div>
            </div>
            <br><br>
            <div class='form-group'>
              <label for='input07' class='col-sm-4 control-label'>&nbsp;</label>
              <div class='col-sm-8'>
                <select class='chosen-select chosen-transparent form-control' name='driver_model' id='txtDriver'>
                </select>
              </div>
            </div>
            <br><br>
            <button type='submit' name='driver_sub' class='btn btn-slategray margin-bottom-20 pull-right'>Add</button>
            <button type='button' class='md-close btn btn-default pull-right' style='margin-right:15px;'>Never Mind</button><br><br>
          </form>
          <?php include('includes/update_driver.php'); ?>
        </div>
      </div>
    </div>
    <div class="md-modal md-effect-1 md-white" id="modal-2">
      <div class="md-content">
        <h3>Add A Wood</h3>
        <div>
          <form action='' method='post'>
            <div class='form-group'>
              <label for='input07' class='col-sm-4 control-label'>Wood</label>
              <div class='col-sm-8'>
                <select class='chosen-select chosen-transparent form-control' name='wood_brand' onchange="get_wood(this.value)">
                  <option value=''>Select Club Maker</option>
                  <?php get_woods() ?>
                </select>
              </div>
            </div>
            <br><br>
            <div class='form-group'>
              <label for='input07' class='col-sm-4 control-label'>&nbsp;</label>
              <div class='col-sm-8'>
                <select class='chosen-select chosen-transparent form-control' name='wood_model' id='txtWood'>
                </select>
              </div>
            </div>
            <br><br>
            <button type='submit' name='wood_sub' class='btn btn-slategray margin-bottom-20 pull-right'>Add</button>
            <button type='button' class='md-close btn btn-default pull-right' style='margin-right:15px;'>Never Mind</button><br><br>
          </form>
          <?php include('includes/update_wood.php'); ?>
        </div>
      </div>
    </div>
    <div class="md-modal md-effect-1 md-white" id="modal-3">
      <div class="md-content">
        <h3>Add A Hybrid</h3>
        <div>
          <form action='' method='post'>
            <div class='form-group'>
              <label for='input07' class='col-sm-4 control-label'>Hybrid</label>
              <div class='col-sm-8'>
                <select class='chosen-select chosen-transparent form-control' name='hybrid_brand' onchange="get_hybrid(this.value)">
                  <option value=''>Select Club Maker</option>
                  <?php get_hybrids() ?>
                </select>
              </div>
            </div>
            <br><br>
            <div class='form-group'>
              <label for='input07' class='col-sm-4 control-label'>&nbsp;</label>
              <div class='col-sm-8'>
                <select class='chosen-select chosen-transparent form-control' name='hybrid_model' id='txtHybrid'>
                </select>
              </div>
            </div>
            <br><br>
            <button type='submit' name='hybrid_sub' class='btn btn-slategray margin-bottom-20 pull-right'>Add</button>
            <button type='button' class='md-close btn btn-default pull-right' style='margin-right:15px;'>Never Mind</button><br><br>
          </form>
          <?php include('includes/update_hybrid.php'); ?>
        </div>
      </div>
    </div>
    <div class="md-modal md-effect-1 md-white" id="modal-4">
      <div class="md-content">
        <h3>Add An Iron Set</h3>
        <div>
          <form action='' method='post'>
            <div class='form-group'>
              <label for='input07' class='col-sm-4 control-label'>Iron Set</label>
              <div class='col-sm-8'>
                <select class='chosen-select chosen-transparent form-control' name='irons_brand' onchange="get_irons(this.value)">
                  <option value=''>Select Club Maker</option>
                  <?php get_irons() ?>
                </select>
              </div>
            </div>
            <br><br>
            <div class='form-group'>
              <label for='input07' class='col-sm-4 control-label'>&nbsp;</label>
              <div class='col-sm-8'>
                <select class='chosen-select chosen-transparent form-control' name='irons_model' id='txtIrons'>
                </select>
              </div>
            </div>
            <br><br>
            <button type='submit' name='irons_sub' class='btn btn-slategray margin-bottom-20 pull-right'>Add</button>
            <button type='button' class='md-close btn btn-default pull-right' style='margin-right:15px;'>Never Mind</button><br><br>
          </form>
          <?php include('includes/update_irons.php'); ?>
        </div>
      </div>
    </div>
    <div class="md-modal md-effect-1 md-white" id="modal-5">
      <div class="md-content">
        <h3>Add A Wedge</h3>
        <div>
          <form action='' method='post'>
            <div class='form-group'>
              <label for='input07' class='col-sm-4 control-label'>Wedges</label>
              <div class='col-sm-8'>
                <select class='chosen-select chosen-transparent form-control' name='wedge_brand' onchange="get_wedges(this.value)">
                  <option value=''>Select Club Maker</option>
                  <?php get_wedge() ?>
                </select>
              </div>
            </div>
            <br><br>
            <div class='form-group'>
              <label for='input07' class='col-sm-4 control-label'>&nbsp;</label>
              <div class='col-sm-8'>
                <select class='chosen-select chosen-transparent form-control' name='wedge_model' id='txtWedges'>
                </select>
              </div>
            </div>
            <br><br>
            <button type='submit' name='wedge_sub' class='btn btn-slategray margin-bottom-20 pull-right'>Add</button>
            <button type='button' class='md-close btn btn-default pull-right' style='margin-right:15px;'>Never Mind</button><br><br>
          </form>
          <?php include('includes/update_wedges.php'); ?>
        </div>
      </div>
    </div>
    <div class="md-modal md-effect-1 md-white" id="modal-6">
      <div class="md-content">
        <h3>Add A Putter</h3>
        <div>
          <form action='' method='post'>
            <div class='form-group'>
              <label for='input07' class='col-sm-4 control-label'>Putter</label>
              <div class='col-sm-8'>
                <select class='chosen-select chosen-transparent form-control' name='putter_brand' onchange="get_putters(this.value)">
                  <option value=''>Select Club Maker</option>
                  <?php get_putter() ?>
                </select>
              </div>
            </div>
            <br><br>
            <div class='form-group'>
              <label for='input07' class='col-sm-4 control-label'>&nbsp;</label>
              <div class='col-sm-8'>
                <select class='chosen-select chosen-transparent form-control' name='putter_model' id='txtPutters'>
                </select>
              </div>
            </div>
            <br><br>
            <button type='submit' name='putter_sub' class='btn btn-slategray margin-bottom-20 pull-right'>Add</button>
            <button type='button' class='md-close btn btn-default pull-right' style='margin-right:15px;'>Never Mind</button><br><br>
          </form>
          <?php include('includes/update_putter.php'); ?>
        </div>
      </div>
    </div>
    <!-- end club modals -->
</div>