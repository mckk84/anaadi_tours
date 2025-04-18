  <main id="main" class="main">

    <section class="section dashboard">
        
        <div class="col-lg-12 p-0">
          <div class="row">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Testimonial <button type="button" class="new-category btn btn-md btn-primary float-right">Add <i class="bi bi-plus-circle ms-1"></i></button></h5>
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

              <?php if( count($records) > 0 ) { ?>

                <table class="table datatable table-hover table-sm">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Customer Name</th>
                      <th scope="col">Sub Title</th>
                      <th scope="col">Testimonial</th>
                      <th scope="col">Image</th>
                      <th scope="col">Added By</th>
                      <th scope="col">Added On</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($records as $index => $row) {?>
                    <tr>
                      <th scope="row"><?=$row['id']?></th>
                      <td><?=$row['name']?></td>
                      <td><?=$row['sub_title']?></td>
                      <td><?=substr($row['testimonial'], 0, 100)?>..</td>
                      <td><img class="img-fluid" style="width:100px;" src="<?=base_url('assets/images/testimonial/'.$row['image'])?>"></td>
                      <td><?=$row['created_by']?></td>
                      <td><?=date("d-m-Y h:m A", strtotime($row['created_date']))?></td>
                      <td><div class="d-flex justify-content-center">
                        <?php if( isset($user['user_type']) && $user['user_type'] == 'Admin' ){?>
                        <a title="Edit Record" href="javascript:void(0)" record-data="<?=$row['id']?>" class="edit-record fs-6 text-warning float-right mx-2"><i class="bi bi-pencil-fill"></i></a>
                        <a title="Delete Record" href="javascript:void(0)" record-data="<?=$row['id']?>" class="delete-record fs-6 text-danger float-right mx-2"><i class="bi bi-trash-fill"></i></a>
                        <?php } else { ?>
                          <a title="Edit Record" href="javascript:void(0)" record-data="<?=$row['id']?>" class="edit-record fs-6 text-warning float-right mx-2"><i class="bi bi-pencil-fill"></i></a>
                        <?php } ?>
                      </div></td>
                    </tr>
                     <?php } ?>
                  </tbody>
                </table>  

              <?php } ?>
            </div>

          </div>
        </div>

      </div>
    </section>

  </main><!-- End #main -->

<div class="modal fade" id="add-category" tabindex="-1" data-bs-backdrop="false">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <form id="addcategory" action="<?=base_url('admin/Testimonial/save_record')?>" method="POST">
          <input type="hidden" name="record_id" value="">
          <div class="modal-header">
            <h5 class="modal-title">Add Testimonial</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-8">
                <div class="col-md-12 mx-auto mb-2">
                  <label for="validationDefault02" class="form-label">Customer Name</label>
                  <input type="text" maxlength="200" autocomplete="off" class="form-control" name="name" id="validationDefault02" value="" required>
                </div>
                <div class="col-md-12 mx-auto mb-2">
                  <label for="validationDefault02" class="form-label">Sub Title</label>
                  <input type="text" maxlength="250" autocomplete="off" class="form-control" name="sub_title" id="validationDefault02" value="" required>
                </div>
                <div class="col-md-12 mx-auto">
                  <label for="validationDefault05" class="form-label">Testimonial</label>
                  <textarea class="form-control" name="testimonial" rows="5"></textarea>
                </div>
                <div class="col-md-12 mx-auto">
                  <label for="validationDefault05" class="form-label">Image</label>
                  <input type="file" class="form-control" onchange="loadFile(event)" name="image" id="validationDefault05" value="" required>
                </div>
              </div>
              <div class="col-md-3">
                <div class="w-100 px-2 mb-2 float-left">
                    <img class="img-fluid" id="imagepreview" src="" />
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
              <button class="btn btn-primary" id="submitcategory" type="button">Submit</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          </div>
      </form>
    </div>
  </div>
</div><!-- End Disabled Backdrop Modal-->

<script type="text/javascript">

  var loadFile = function(event) 
  {
    var output = document.getElementById("imagepreview");
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }      
  };

  $(document).ready(function(){

    var module_url = '<?=base_url('/admin/Testimonial')?>';

    //edit customer
    $(".new-category").click(function (event) {
        event.preventDefault(); // Prevent default form submission
        $("#add-category").modal('show');        
    });

    //edit customer
    $(".edit-record").click(function (event) {
        event.preventDefault(); // Prevent default form submission

        let id = $(this).attr('record-data');
        let url = module_url+"/getRecord?id="+id;
        $.ajax({
            type: "GET",
            url: url,
            success: function (data) {
                var d = JSON.parse(data);
                if( d.error == 0 )
                {
                  $('#add-category').modal('show');    
                  $('#add-category input[name="record_id"]').val(d.record.id);
                  $('#add-category input[name="name"]').val(d.record.name);
                  $('#add-category input[name="sub_title"]').val(d.record.sub_title);
                  $('#add-category textarea[name="testimonial"]').val(d.record.testimonial);
                  $('#add-category #imagepreview').attr('src', "<?=base_url('assets/images/testimonial/')?>"+d.record.image);
                }
                else
                {
                  $(".showalert").html('<div class="alert alert-danger">'+d.error_message+'</div>');
                }
            },
            error: function (data) {
                $(".showalert").html('<div class="alert alert-danger">Error Occured</div>');
            }
        });
    });

    // submit booking
    $("#submitcategory").click(function (event) {
        event.preventDefault(); // Prevent default form submission
        
        let mbody = $("#addcategory .modal-body");
        
        var name = $("#addcategory input[name='name']").val().trim();
        if( name == "" )
        {
          $("#addcategory input[name='name']").focus();
          return false;
        }

        var sub_title = $("#addcategory input[name='sub_title']").val().trim();
        if( sub_title == "" )
        {
          $("#addcategory input[name='sub_title']").focus();
          return false;
        }

        var testimonial = $("#addcategory textarea[name='testimonial']").val().trim();
        if( sub_title == "" )
        {
          $("#addcategory textarea[name='testimonial']").focus();
          return false;
        }

        let form = $("#addcategory")[0];
        var formData = new FormData(form);
        let url = $("#addcategory").attr('action');
        
        $(this).prop('disabled', true);
        $(this).html("<span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span> Please wait..");
        
        mbody.find(".alert").each(function(){
            $(this).remove();
        });

        $.ajax({
            type: "POST",
            url: url,
            data: formData, 
            contentType: false,       
            cache: false,             
            processData:false, 
            success: function (data) {
                var d = JSON.parse(data);
                if( d.error == 1 )
                {
                    mbody.append("<div class='alert alert-danger mt-1 mb-0'>"+d.error_message+"</div>");
                    $("#submitcategory").prop('disabled', false);
                    $("#submitcategory").html("Submit");
                }
                else
                {
                    mbody.append("<div class='alert alert-success mt-1 mb-0'>"+d.success_message+"</div>");
                    $("#submitcategory").html("Success");
                    $("#add-category").modal('hide');   
                    setTimeout(function(){
                        window.location.reload();
                    }, 2000);
                }
            },
            error: function (data) {
                mbody.append("<div class='alert alert-danger mt-1 mb-0'>Error Occured. Try again later.</div>");
                $("#submitcategory").prop('disabled', false);
                $("#submitcategory").html("Submit");
            }
        });
    });

    //delete manaufacturer
    $(".delete-record").click(function (event) {
        event.preventDefault(); // Prevent default form submission

        var result = confirm("Are you sure to delete?");
        if (result==false) {
           return true;
        }     

        let id = $(this).attr('record-data');
            let url = module_url+"/deleteRecord/"+id;
            
            $.ajax({
            url: url,
            method: 'DELETE',
            contentType: 'application/json',
            success: function(data) {
                var d = JSON.parse(data);
                    //console.log(d);
                    if( d.error == 1 )
                    {
                      $(".showalert").append("<div class='alert alert-danger mt-1 mb-0'>"+d.error_message+"</div>");
                    }
                    else
                    {
                      $(".showalert").append("<div class='alert alert-success mt-1 mb-0'>"+d.success_message+"</div>");
                      setTimeout(function(){
                        window.location.reload();
                      }, 500);
                    }
            },
            error: function(request,msg,error) {
                console.log(error);
            }
        });
    });

  });

</script>
  