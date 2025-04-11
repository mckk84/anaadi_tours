  <main id="main" class="main">

    <section class="section dashboard">
        
        <div class="col-lg-12 p-0">
          <div class="row">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Gallery <button type="button" class="new-category btn btn-md btn-primary float-right">Add <i class="bi bi-plus-circle ms-1"></i></button></h5>
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
                      <th scope="col">Image</th>
                      <th scope="col">Added By</th>
                      <th scope="col">Added On</th>
                      <?php if( isset($user['user_type']) && $user['user_type'] == 'Admin' ){?>
                      <th scope="col">Action</th>
                      <?php } ?>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($records as $index => $row) {?>
                    <tr>
                      <th scope="row"><?=$row['id']?></th>
                      <td><img style="max-width: 150px;" class="img-fluid mx-auto p-1 border rounded" src="<?=base_url('assets/images/gallery/'.$row['image'])?>"></td>
                      <td><?=$row['created_by']?></td>
                      <td><?=date("d-m-Y h:m A", strtotime($row['created_date']))?></td>
                      <?php if( isset($user['user_type']) && $user['user_type'] == 'Admin' ){?>
                      <td><div class="d-flex justify-content-center">
                        <a title="Delete Record" href="javascript:void(0)" record-data="<?=$row['id']?>" class="delete-record fs-6 text-danger float-right mx-2"><i class="bi bi-trash-fill"></i></a>
                      </div></td>
                      <?php } ?>
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
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form id="addcategory" action="<?=base_url('admin/Gallery/save_record')?>" method="POST">
          <input type="hidden" name="record_id" value="">
          <div class="modal-header">
            <h5 class="modal-title">Add Image</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row text-center">
              <div class="col-md-10">
                <div class="col-md-12 mx-auto">
                  <label for="validationDefault05" class="form-label">Image</label>
                  <input type="file" class="form-control" onchange="loadFile(event)" name="image" id="validationDefault05" value="" required>
                  <span class="p-1 small text-danger">Size less than 2MB. Min Resolution 800x500.</span>
                </div>
              </div>
              <div class="col-md-3">
                <div class="w-100 px-2 mb-2 float-left">
                    <img class="img-fluid border p-1 rounded" id="imagepreview" src="" />
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
      var height = this.naturalHeight;
      var width = this.naturalWidth;
      console.log(width+"x"+height);
      if (height < 500 || width < 800) {
        alert("Image dimension should be greater or equal to 1280X720");
        output.src = "";
        $("#addcategory input[name='image']").val("");
        return false;
      }
      URL.revokeObjectURL(output.src) // free memory
    }      
  };

  $(document).ready(function(){

    var module_url = '<?=base_url('/admin/Gallery')?>';

    //edit customer
    $(".new-category").click(function (event) {
        event.preventDefault(); // Prevent default form submission
        $("#add-category").modal('show');        
    });

    // submit booking
    $("#submitcategory").click(function (event) {
        event.preventDefault(); // Prevent default form submission
        
        let mbody = $("#addcategory .modal-body");
        
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
  