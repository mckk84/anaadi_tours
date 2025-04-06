  <main id="main" class="main">
    <section class="section dashboard">
        <div class="col-lg-12 p-0">
          <div class="row">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Add Tour <a href="<?=base_url('Tours')?>" class="back btn btn-md btn-secondary float-right">Back <i class="bi bi-arrow-left ms-1"></i></a></h5>
                <div class="col-lg-12 showalert">
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
              <div class="row gap-1">
                  <form id="addtour" class="col-lg-12" method="POST" action="<?=base_url('admin/Tours/save_record')?>">
                      <div class="row justify-content-left">
                        <div class="col-lg-6">
                          <div class="form-group w-100 mb-2">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" required maxlength="250">
                          </div>

                          <div class="form-group w-50 mb-2">
                            <label class="w-100">Duration</label>
                            <input type="text" name="price" class="w-30 d-inline form-control" required maxlength="10"> <label class="d-inline">Nights &nbsp;</label>
                            <input type="text" name="price" class="w-30 d-inline form-control" required maxlength="10"> <label class="d-inline">Days</label>
                          </div>

                          <div class="form-group w-45 mb-2">
                            <label>Starting Price</label>
                            <input type="text" name="price" class="form-control" required maxlength="10">
                          </div>

                          <div class="form-group w-50 mb-2">
                            <label>Start Location</label>
                            <input type="text" name="start_location" class="form-control" required maxlength="250">
                          </div>

                          <div class="form-group w-45 mb-2">
                            <label>Destination Location</label>
                            <input type="text" name="final_destination" class="form-control" required maxlength="250">
                          </div> 


                          <div class="form-group w-100 mb-2">
                            <label>Covered Locations</label>
                            <textarea name="covered_locations" rows="2" class="form-control" required></textarea>
                          </div>

                        </div>

                        <div class="col-lg-4 mx-2">
                          <div class="form-group w-100 mb-4 px-2">
                            <label>Tour Image</label>
                            <input type="file" onchange="loadFile(event)" class="form-control" name="tour_image" value="" />
                          </div>
                          <div  class="w-100 px-4 float-left">
                            <img style="max-width: 100%;" id="imagepreview" src="<?=base_url('assets/admin/assets/img/tour.jpg')?>" class="p-2 border shadow img-fluid" alt="Image">
                          </div>
                        </div>

                        <div class="col-lg-6">

                          <div class="form-group w-100 mb-2">
                            <label>Accomodations</label>
                            <textarea name="accomodations" rows="2" class="form-control" required></textarea>
                          </div>

                          <div class="form-group w-100 mb-2">
                            <label>Activities</label>
                            <textarea name="activities" rows="2" class="form-control" required></textarea>
                          </div>
                      </div>
                    </div>
                      
                      <div class="row justify-content-left">
                        <div class="col-lg-6">
                          <div class="w-100 form-group mb-2">
                            <div class="card">
                              <div class="card-body">
                                <h5 class="card-title text-dark">Tour Description</h5>
                                <div class="quill-editor-default" style="height:200px;overflow: auto;">
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-6">
                          <div class="w-100 form-group mb-2">
                              
                            

                          </div>
                        </div>


                      </div>

                  </form>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

  </main><!-- End #main -->
  <script type="text/javascript">

    var loadFile = function(event) {
      var output = document.getElementById('imagepreview');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };

  </script>