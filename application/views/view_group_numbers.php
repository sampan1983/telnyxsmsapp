<?php include_once('header.php') ?>



<style>
button.btn.btn-Danger {
    background: #fd2626;
    color: white;
}
.form-group {
    margin-bottom: 1rem;
    border: 1px solid #e1e6ef;
    padding: 10px 5px;
}
button.btn.btn-primary.btn-md.btn-sty {
    width: 100%;
    background: transparent !important;
    border: none !important;
    color: #000 !important;
    text-align: left !important;
}
.pad-size {
    background: transparent;
    border: 0px;
    color: #000;
    font-size: 16px;
    position: absolute;
    right: 15px;
    margin-top: -5px;
}
.elli-menu {
    display: grid;
    row-gap: 5px;
    background: #fff;
    padding: 5px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    border-radius: 6px;
}
.sky-color {
    background: transparent !important;
    border: 0px !important;
    text-align: left !important;
    color: #000 !important;
}
.col-md-4.ellip-menu {
    position: absolute;
    right: 38px;
    z-index: 99;
    padding: 0px !important;
    width: 150px;
}
.aosdmai {
    position: absolute;
    right: 2%;
    top: 22%;
}
.col-md-4.ellip-menu {
    padding-right: 24px;
}
i#button-show-and-hide {
    font-size: 20px;
    cursor: pointer;
}
.elli-menu i {
    font-size: 16px;
}
</style>


<main class="main">
      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <!--li class="breadcrumb-item"><a href="#">Admin</a></li-->
        <li class="breadcrumb-item active">Group Numbers</li>
      </ol>
      <div class="container-fluid">
        <div class="animated fadeIn">
          <div class="card">
            <div class="card-header">
              <i class="icon-people"></i> Group Numbers
              <div class="card-actions">
                <a href="https://datatables.net/">
                  <small class="text-muted"></small>
                </a>
              </div>
            </div>
            <div class="card-body">

              <div class="row">



            <div class="col-md-8">

               <div class="add-btn-group-padding">
                 <button type="button" class="btn btn-primary btn-md"  data-toggle="modal" data-target="#form1"><i class="fa fa-plus fa-sm"></i> Add Number</button>

<!--
              <button type="button" class="btn btn-Danger"  data-toggle="modal" data-target="#delete"><i class="fa fa-trash fa-sm"></i> Clear Record</button> -->


        <!-- <a href="<?php echo base_url(); ?>sample.xlsx" download class="btn btn-primary btn-md"  ><i class="fa fa-plus fa-sm"></i> Download Sample</a> -->

              </div>

            </div>
             <div class="col-md-4 ellip-menu" style="display: none;" >


<div class="elli-menu">
<a href="View_group_number/export/<?php if($group_data=='No'){ echo""; }else{  echo $group_data[0]['fk_group_data']; }?>"><button type="button" value="Export Data" class="btn btn-primary btn-md btn-sty" style="float:right"> <i class="fa fa-file-excel-o" aria-hidden="true"></i> Export Data</button></a>
<button type="button" class="btn btn-primary btn-md btn-sty"  data-toggle="modal" data-target="#form"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Import Data</button>
<button type="button" class="btn btn-primary btn-md btn-sty"  data-toggle="modal" data-target="#delete"><i class="fa fa-trash fa-sm"></i> Clear Record</button>

</div>





                  </div>
                  <div class="aosdmai">
                  <i id="button-show-and-hide" class="fa fa-ellipsis-v"></i>
<script>

  $("#button-show-and-hide").click(function(){
  $(".ellip-menu").toggle();
});
</script>
</div>

            </div>

              <table class="table table-striped table-bordered datatable table-responsive-add" id="dataTable">

                <thead>

                  <tr>

                    <th>S.No.</th>

                    <th>Group</th>
                    <th>Full Name</th>
                    <th>Number</th>
                    <th>Date</th>

                    <th>Action</th>

                  </tr>

                </thead>

                <tbody>





                  <?php

                  if ($group_data=='No') {

                  echo  '<tr><td valign="top" colspan="6" class="dataTables_empty">No data available in table</td></tr>';

                  }

                  else{



                    for ($i=0; $i <sizeof($group_data) ; $i++) {

                      $d=$i+1;

                      echo "<tr ".$group_data[$i]['id'].">

                            <td>".$d."</td>

                          <td>".$group_data[$i]['group_name']."</td>
                          <td>".$group_data[$i]['first_name']."</td>

                            <td>".$group_data[$i]['number']."</td>

                            <td>";

                            echo date("Y/m/d", strtotime($group_data[$i]['date_time']));



                              echo   "</td>

                            <td>";
                            ?>


                              <a href ="#" class="btn btn-danger edit"  data-toggle="modal" data-target="#edit" data-id="<?php echo $group_data[$i]['id'] ?>" data-name="<?php echo $group_data[$i]['first_name'] ?>" data-number="<?php  echo $group_data[$i]['number'] ?>" >
                                <i class="fa fa-edit"> </i>
                              </a>


                              <?php

                            echo "<a href = '#' class='btn btn-danger delete'  data-id='".$group_data[$i]['id']."'><i class='fa fa-trash-o ''></i></a></td>

                      </tr>";

                    }

                  }



                  ?>

                </tbody>

              </table>

            </div>

          </div>

        </div>



      </div>

      <!-- .container-fluid -->

    </main>




<script>
  $('.edit').click(function(){
    $('.fk_group_id').val($(this).attr('data-id'));
    $('.group_name').val($(this).attr('data-name'));
    $('.group_number').val($(this).attr('data-number'));

  })
</script>


  </div>



<?php include_once('footer.php') ?>
<!--Add group data Model-->

  <div class="modal fade" id="form">

    <div class="modal-dialog">

      <!--in form "onSubmit="return validation1()""  -->

<form  method="post"  action="View_group_number/getgroup/" name="client_record" id="example" enctype="multipart/form-data">

      <div class="modal-content">



        <!-- Modal Header -->

        <div class="modal-header">

          <h4 class="modal-title text-center">Add Group Number</h4>

          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>



        <!-- Modal body -->

        <div class="modal-body">

<!--          <div class="row">



                    <div class="col-sm-12">



                      <div class="form-group">

                        <label for="name">Group Name</label>

                        <input type="text" class="form-control" id="name" name="group_name" placeholder="Enter Group Name" required>

                      </div>



                    </div>



                  </div> -->



                  <div class="row">



                    <div class="col-sm-12">

                      <input type="hidden" name="fk_group_data" value="<?php echo $_SESSION['group_id']; ?>">

                      <div class="form-group">

<!--                         <label for="ccnumber">Number</label> -->

                      <!--   <br> -->

                       <input type="file" id="upload-demo" name="file" required accept=".xlsx,.csv" ><a href="<?php echo base_url(); ?>sample.xlsx" download class="btn btn-primary btn-md pad-size"  ><i class="fa fa-download"></i> Download Sample</a>

                      </div>



                    </div>



                  </div>

        </div>



        <!-- Modal footer -->

        <div class="modal-footer">

          <button type="submit" class="btn btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>

          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        </div>



      </div>



    </form>

    </div>

  </div>

  <!--close -->

  <div class="modal fade" id="form1">

    <div class="modal-dialog">

  <form  method="post" onSubmit="return validation1()"  action="View_group_number/singlegetgroup" name="client_record" id="example" enctype="multipart/form-data">

      <div class="modal-content">

        <div class="modal-header">

          <h4 class="modal-title text-center">Add Number</h4>

          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>

        <div class="modal-body">

         <div class="row">

                    <div class="col-sm-12">

                      <div class="form-group">
                        <input type="hidden" name="fk_group_id" value="<?php echo $_SESSION['group_id']; ?>">
                        <label for="name">Full Name</label>

                        <input type="text" class="form-control" id="name" name="group_name" placeholder="Enter Name" required>

                        <label for="name">Number</label>

                        <input type="number" class="form-control" id="name" name="group_number" placeholder="Enter Number" required>

                      </div>


                    </div>



                  </div>



        </div>



        <div class="modal-footer">

          <button type="submit" class="btn btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>

          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        </div>



      </div>



    </form>

    </div>

  </div>

  <div class="modal fade" id="delete">
    <div class="modal-dialog">

  <form  method="post" onSubmit="return validation1()"  action="View_group_number/Delete_all" name="client_record" id="example" enctype="multipart/form-data">

      <div class="modal-content">

        <div class="modal-header">

          <h4 class="modal-title text-center">Clear All</h4>
          <input type="hidden" name="id" value="<?php echo $_SESSION['group_id']; ?>">
          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>

        <div class="modal-body">

         <div class="row">

                    <div class="col-sm-12">
                      <h3>Are you Sure?</h3>
                      <p>Are you sure, you want to clear all data. This cannot be undone.</p>

                    </div>

                  </div>

        </div>
        <div class="modal-footer">

          <button type="submit" class="btn btn-primary"><i class="fa fa-dot-circle-o"></i> Confirm</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        </div>
      </div>
    </form>
    </div>
  </div>

    <div class="modal fade" id="edit">
    <div class="modal-dialog">
    <form  method="post" action="View_group_number/edit_group_number" name="client_record"  enctype="multipart/form-data">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title text-center">Edit Number</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">

           <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <input class="fk_group_id" type="hidden" name="fk_group_id" value="<?php echo $_SESSION['group_id']; ?>">
                          <label for="name">Full Name</label>
                          <input type="text" class="form-control group_name" id="name" name="group_name" placeholder="Enter Name" required>
                          <label for="name">Number</label>
                          <input type="number" class="form-control group_number" id="name" name="group_number" placeholder="Enter Number" required>
                        </div>
                      </div>
                    </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>

        </div>
      </form>

      </div>

    </div>

<!-- Plugins and scripts required by this views -->

  <script src="<?php echo base_url(); ?>vendors/js/jquery.dataTables.min.js"></script>

  <script src="<?php echo base_url(); ?>vendors/js/dataTables.bootstrap4.min.js"></script>



  <!-- Custom scripts required by this view -->

  <script src="<?php echo base_url(); ?>js/views/tables.js"></script>

<script type="text/javascript">

  <?php if (isset($_SESSION['group'])&& $_SESSION['group']=='0') {?>

    toastr.success('Number added successfully');

    <?php unset($_SESSION['group']);} if (isset($_SESSION['group'])&& $_SESSION['group']=='1') {?>

      toastr.error('Sorry there is an error in file data');

      <?php unset($_SESSION['group']); }



       if (isset($_SESSION['group_data_already'])) {?>

        toastr.error('This number is already added in this group');

        <?php unset($_SESSION['group_data_already']); } ?>





</script>

<script type="text/javascript">

  $('.delete').click(function(){

      var id = $(this).attr('data-id');

      $msg = confirm('Are you sure???');

      if ($msg==true) {

        $.ajax({

                type : 'ajax',

                method : 'post',

                dataType : 'json',

                url : '<?php echo base_url(); ?>View_group_number/delete/'+id,

                success:function(r){



                  location.reload();

                },

                error:function(xhr,status,error){

                  console.log(xhr.responseText);

                }

        });

      }

  });

</script>

<script type="text/javascript">

  <?php if (isset($_SESSION['groupdatadelete'])) {?>

    toastr.success('<?php echo $_SESSION['groupdatadelete'];?>','Removed');

    <?php unset($_SESSION['groupdatadelete']);} if (isset($_SESSION['groupdatadelete_fail'])) {?>

      toastr.error("<?php echo $_SESSION['groupdatadelete_fail'];?>",'Failed');

      <?php unset($_SESSION['groupdatadelete_fail']); } ?>

</script>
