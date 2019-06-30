<?php
  /*
  * This php file is used to standardize the creation of data validation tables in html
  */
 ?>
<div class="col-lg-12"><!-- Outer Card Seperation div -->
  <div class="card"><!-- Start of card -->
    <form>
      <div class="card-header">
          <strong>Discovered Table #<?php echo $x + 1 ?>:</strong>
      </div>
      <div class="card-body card-block fullPageTableDiv">
        <center>
          <?php
            //Here is where the $currentTableHTMLString is echoed
            echo $currentTableHTMLString;
           ?>
         </center>
      </div>
      <div class="card-footer"> <!-- card footer -->
        <button type="submit" class="btn btn-success">
            <i class="fa fa-thumbs-o-up"></i> Submit Validated Data
        </button>
        <button type="reset" class="btn btn-danger">
            <i class="fa fa-trash-o"></i> Remove Table
        </button>
      </div><!-- End of card footer -->
    </form>
  </div> <!-- End of card -->
</div> <!-- End of Outer Card Seperation div -->
