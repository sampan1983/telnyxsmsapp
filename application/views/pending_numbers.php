<?php include_once('header.php')?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>

		  $( document ).ready(function() {





var table = $('#dataTable').DataTable();



// Sort by columns 1 and 2 and redraw

table

    .order( [ 5, 'desc' ] )

    .draw();

 });

</script>




<style >
.btn-danger {
    color: #fff ;
    background-color: #ff5454 !important;
    border-color: #ff5454 !important;
    margin-bottom: 8px !important;
    border-radius: 5px !important;
  }
	.col-md-4.del-btn {
    text-align: end;
}
  .btn-success {
    /*color: #fff ;*/
    margin-bottom: 8px !important;
    border-radius: 5px !important;
  }

</style>

<style type="text/css">
  .btn {
    margin-bottom: 3px;
  }
</style>

    <main class="main">



      <!-- Breadcrumb -->

      <ol class="breadcrumb">

        <li class="breadcrumb-item">Home</li>

        <!--li class="breadcrumb-item"><a href="#">Admin</a></li-->

        <li class="breadcrumb-item active">Pending Message</li>

        <!-- Breadcrumb Menu-->

        <!-- <li class="breadcrumb-menu d-md-down-none">

          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">

            <a class="btn" href="#"><i class="icon-speech"></i></a>

            <a class="btn" href="index-2.html"><i class="icon-graph"></i> &nbsp;Pending Numbers</a>

            <a class="btn" href="#"><i class="icon-settings"></i> &nbsp;Settings</a>

          </div>

        </li> -->

      </ol>



      <div class="container-fluid">



        <div class="animated fadeIn">

          <div class="card">

                        <div class="card-header">

              <i class="icon-people"></i> Pending Message<!-- <span>(< ?php echo sizeof($pmsg) ?>)</span> -->

              <div class="card-actions">

                <a href="https://datatables.net/">

                  <small class="text-muted">docs</small>

                </a>

              </div>

            </div>



<div id="deleteallrecordmodal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="deleteAll" method="post">
          <div class="modal-header">
            <h4 class="modal-title">Delete Records</h4>
            <button type="button" class="close" data-dismiss="modal" area-hidden="true"></button>
          </div>
          <div class="modal-body">
            <p>Are you sure you want do delete all Records</p>
            <p class="text-warning"><small>This action cannot be undone.</small></p>
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
            <input type="submit" class="btn btn-danger" value="delete">
          </div>
        </form>
      </div>
    </div>
  </div>


  <div id="start" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="start" method="post">
          <div class="modal-header">
            <h4 class="modal-title">Resume Messages</h4>
            <button type="button" class="close" data-dismiss="modal" area-hidden="true"></button>
          </div>
          <div class="modal-body">
            <p>Are you sure you want start sending messages</p>

          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="No">
            <input type="submit" class="btn btn-primary" value="Yes">
          </div>
        </form>
      </div>
    </div>
  </div>


   <div id="stop" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="stop" method="post">
          <div class="modal-header">
            <h4 class="modal-title">Pause Messages</h4>
            <button type="button" class="close" data-dismiss="modal" area-hidden="true"></button>
          </div>
          <div class="modal-body">
            <p>Are you sure you want stop sending messages</p>

          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="No">
            <input type="submit" class="btn btn-primary" value="Yes">
          </div>
        </form>
      </div>
    </div>
  </div>



            <div class="card-body">
                               <div class="row" style="    margin-bottom: 1rem;">

                    <div class="col-md-8" >

                <a href="#start" class="btn btn-primary btninp btn-md" data-toggle="modal"><i class="fa fa-play-circle" aria-hidden="true"></i> <span style="padding: 2px; margin-top: 2px; margin-bottom: 2px;">Start</span></a>
                <a href="#stop" class="btn btn-primary btninp btn-md" data-toggle="modal"><i class="fa fa-stop-circle" aria-hidden="true"></i> <span style="padding: 2px; margin-top: 2px; margin-bottom: 2px; ">Stop</span></a>
              </div>


							<div class="col-md-4 del-btn">
								<a href="#deleteallrecordmodal" class="btn btn-danger" data-toggle="modal"><i class="fa fa-trash icon"></i> <span style="padding: 2px; margin-top: 2px; margin-bottom: 2px ;  ">Clear Records</span></a>
							</div>

               </div>

              <div style="overflow:auto">



              <table class="table table-striped table-bordered datatable table-responsive-sm" id="dataTable">

                <thead>

                  <tr>

                    <th>ID</th>

                    <th>User Number</th>

                    <th>Message</th>

                    <th>Media</th>

                    <th>Sender Number</th>

                     <th>Added on</th>

                     <th>Scheduled time</th>

                      <th>Delete</th>



                  </tr>

                </thead>

                <tbody>

                  <?php

                  // print_r($pmsg);


                  if ($pmsg=='No') {

                    echo '<tr><td valign="top" colspan="8" class="dataTables_empty">No data available in table</td></tr>';

                  }

                  else{



                     for ($i=0; $i <sizeof($pmsg) ; $i++) {
                      $t = $i+1;
                                      if ($pmsg[$i]['images']=='') {

                        $img = 'NO Media';



                      }

                      else{

                        $img = '<a href="'.$pmsg[$i]['images'].'" target="_blank">View MMS</a>';

                      }

                    echo '<tr>

                              <td>'.$t.'</td>

                              <td>'.$pmsg[$i]['sms_number'].'</td>

                              <td>'.$pmsg[$i]['message'].'</td>

                               <td>'.$img.'</td>

                              <td>'.$pmsg[$i]['twilio_num'].'</td>





                              <td>'.$pmsg[$i]['date_time'].'</td>

                              <td>'.$pmsg[$i]['scheduled_time'].'</td>

                              <td><a href = "#"  data-id = "'.$pmsg[$i]['id'].'"><i class="fa fa-trash icon"></i></a></td>

                    </tr>';

                  }

                  }



                  ?>

                                  </tbody>

              </table>

              </div>

            </div>

          </div>

        </div>



      </div>

      <!-- /.conainer-fluid -->

    </main>

  </div>



  <?php include_once('footer.php')?>


<!-- Plugins and scripts required by this views -->

  <script src="<?php echo base_url(); ?>vendors/js/jquery.dataTables.min.js"></script>

  <script src="<?php echo base_url(); ?>vendors/js/dataTables.bootstrap4.min.js"></script>



  <!-- Custom scripts required by this view -->

  <script src="<?php echo base_url(); ?>js/views/tables.js"></script>

  <script type="text/javascript">

    $('.delete').click(function(){

      var id = $(this).attr('data-id');

      $msg = confirm('Are you sure??');

      if ($msg==true) {

        $.ajax({

          type : 'ajax',

          method : 'post',

          dataType : 'json',

          url : '<?php echo base_url(); ?>Pending_numbers/delete/'+id,

          success:function(r){

            console.log(r);

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

  <?php if (isset($_SESSION['delete'])) {?>

    toastr.success('<?php echo $_SESSION['delete'];?>');

    <?php unset($_SESSION['delete']);}





    if (isset($_SESSION['delete_fail'])) {?>

    toastr.error('<?php echo $_SESSION['delete_fail'];?>');

    <?php unset($_SESSION['delete_fail']);} ?>

</script>
