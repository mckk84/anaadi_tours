  <main id="main" class="main">

    <section class="section dashboard">
        
        <div class="col-lg-12 p-0">
          <div class="row">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Services <button type="button" class="new-service btn btn-sm btn-primary float-right">Add <i class="bi bi-plus-circle ms-1"></i></button></h5>
                <div class="col-lg-12 showalert">
                <?php if( count($records) == 0 ){?>
                  <div class="alert alert-danger">No records found.</div>
                <?php } ?>  
                <?php $error = $this->session->flashdata('error');
                      if($error) { ?>
                  <div class="alert alert-danger">
                      <?php echo $this->session->flashdata('error'); ?>
                  </div>
                  <?php } ?>
                  <?php $success = $this->session->flashdata('success');
                      if($success) {
                  ?>
                  <div class="alert alert-success alert-dismissable">
                      <?php echo $this->session->flashdata('success'); ?>
                  </div>
                  <?php } ?>
              </div>
            </div>

          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  