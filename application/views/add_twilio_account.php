<?php include_once('header.php') ?>
    <main class="main">

 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

<style>
.nav-tabs {
    gap: 0px !important;
}
ul.nav.nav-tabs li.active {
    position: relative;
    / border-top: 5px solid #38d39f; /
}
/*ul.nav.nav-tabs li.active:before {
    content: '';
    background: #38d39f;
    height: 3px;
    width: 100%;
    position: absolute;
    top: 0px;
    left: 0px;
}*/
.nav-tabs li.active a {
    color: #38d39f !important;
}

ul.nav.nav-tabs li {
    border: 1px solid #ddd;
    padding: 0.375rem 0.75rem;
    margin: 0px !important;
    border-bottom: 0px !important;
}
ul.nav.nav-tabs li.active {
    border-bottom: 0px solid #80808033 !important;
    background: white;
}
.nav-tabs {
    padding-top: 0px
!important;
    gap: 0px !important;
    padding-bottom: 0px !important;
}
/* .nav-tabs li.active a {
    color: white !important;
}

.nav-tabs li.active {
    background: rgb(56, 211, 159) !important;
}

ul.nav.nav-tabs li {
    border: 1px solid rgb(56, 211, 159);
    padding: 10px;
} */
/* ul.nav.nav-tabs li.active a {
    color: white !important;
}
ul.nav.nav-tabs li.active {
    / border-bottom: 2px solid #80808033; /
    background: rgb(56, 211, 159);
    color: white !important;
    border: 0px;
    border-radius: 10px;
    padding: 0px 10px;
} */
div#section2 div#DataTables_Table_1_wrapper {
    /* padding: 0px; */
    padding-left: 20px !important;
    padding-right: 20px !important;
    overflow-x: auto;
    padding-bottom: 20px !important;
}
.add-btn-group-padding {
    text-align: end;
}
ul.nav.nav-tabs li.active {
    padding: 0.375rem 0.75rem;
    background: #38d39f !important;
    color: #fff !important;
    display: flex;
    align-items: center;
}
.nav-tabs li.active a {
    color: #fff !important;
}
td {
    text-align: center !important;
}
.nav-tabs {
    gap: 11px;
    background-color: white;
    padding-top: 4px;
    padding-bottom: 8px;
    border-bottom: 0px !important;
}
.tab-non {
    padding-top: 40px;
    border: 1px solid #ddd;
}
.padd-on {
    background: #fff;
}
div#section1 {
    padding-top: 0px !important;
    border-top: 0px !important;
}
.pad-top {
    padding: 0px !important;
    border: 0px !important;
}
.tab-content {
    margin-top: -1px;
    background: #fff;
    border: 1px solid #e1e6ef;
    border-top: 0px !important;
}
div#section2 {
    padding-top: 0px !important;
}
li.no-ad {
    left: 16px;
    position: relative;
}
li.ready {
    left: 16px;
    position: relative;
    border-right: 0px !important;
}
/*li.ready.active {
    left: 16px;
}*/
li.active {
    left: 16px;
}
.car-non {
    display: none;
}
.ad-non {
  border-top: 0px !important;
}
.dataTables_scrollHeadInner {
    width: 100% !important;
}
table#DataTables_Table_0 {
    width: 100% !important;
}
table.table.table-striped.table-bordered.datatable.table-responsive-sm.dataTable.no-footer {
    width: 100% !important;
}
div#DataTables_Table_0_wrapper {
    padding-left: 20px !important;
    padding-right: 20px !important;
    overflow-x: auto;
    padding-bottom: 20px !important;
}
.odd td {
    text-align: left;
}
a.set-number {
    color: #38d39f;
    font-size: 16px;
    text-decoration: none;
}
a.add-keys {
    color: #777e7c;
    margin-right: 5px;
    font-size: 16px;
    text-decoration: none;
    border-right: 2px solid black;
    padding-right: 10px;
    font-weight: 500;
    cursor: not-allowed;
}
</style>


      <!-- Breadcrumb -->

      <ol class="breadcrumb">

        <li class="breadcrumb-item">Home</li>

        <!--li class="breadcrumb-item"><a href="#">Admin</a></li-->

        <li class="breadcrumb-item active">Auth Key</li>

        <!-- Breadcrumb Menu-->

        <!-- <li class="breadcrumb-menu d-md-down-none">

          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">

            <a class="btn" href="#"><i class="icon-speech"></i></a>

            <a class="btn" href="index-2.html"><i class="icon-graph"></i> &nbsp;Update Twilio Details</a>

            <a class="btn" href="#"><i class="icon-settings"></i> &nbsp;Settings</a>

          </div>

        </li> -->

      </ol>

      <div class="container-fluid">
        <div class="padd-on">
        <div class="tab-non">
        <ul class="nav nav-tabs">
          <li class="active ready"><a data-toggle="tab"  style="text-decoration:none;font-size: 15px;font-weight: 600;" class="ttt" href="#section1">Add Account</a></li>
          <li class="no-ad"><a data-toggle="tab" class="ttt2"  style="text-decoration:none;font-size: 15px;font-weight: 600;" href="#section2">Add Number</a></li>
        </ul>
      </div>
        <div class="animated fadeIn">
<script>
$(document).ready(function (e) {
     $('.ttt').click();

     $('.ttt').css('color', 'black');
     // $('.ttt').click();
      // $('.ttt').css('color', 'black');
});
$('.ttt2').click(function(){
  $('.ttt').css('color', '#38d39f');
  $('.ttt2').css('color', 'black');
})
$('.ttt').click(function(){
  $('.ttt2').css('color', '#38d39f');
  $('.ttt').css('color', 'black');
})



</script>
          <div class="tab-content">
              <div id="section1" class="tab-pane fade in active">
                <div class="card">
                  <div class="card-header pad-top">

                    <!-- <i class="icon-people"></i> Update Account Details -->
                    <div class="tab-flex">

                    </div>
                    <div class="card-actions car-non">
                      <a href="https://datatables.net/">
                        <!-- <small class="text-muted">docs</small> -->
                      </a>
                    </div>
                  </div>
                  <div class="card-body ad-non">
                    <div class="row" <?php if (!$_SESSION['type'] =='super admin') {
                      echo 'style="display : none"';
                    } ?>>
      <!--                <a data-toggle="modal" href="#add_form" class="btn btn-info">Add account</a> -->
                    <div class="col-lg-12 hi">
                    <div class="add-btn-group-padding">
                    <button type="button" class="btn btn-primary btninp" data-toggle="modal" data-target="#add_form" onclick="getuser()"><i class="fa fa-plus fa-sm"></i> Add Account</button>

                    </div>

                  </div>
                  </div>

                  </div>
      <!--               <div class="table acc" style="overflow: scroll;"> -->
                    <table class="table table-striped table-bordered datatable table-responsive-sm">

                      <thead>

                        <tr>

                          <th>ID</th>

                          <th>Account Type</th>

                          <th>Account ID</th>

                          <th>Sip Connection</th>

                          <th>Service ID</th>

                          <th>Action</th>

                        </tr>

                      </thead>

                      <tbody>

                        <?php if ($data=='No') {
                          echo '<tr><td valign="top" colspan="6" class="dataTables_empty">No data available in table</td></tr>';
                        }
                        else{
                          for ($i=0; $i <sizeof($data) ; $i++) {
                            $d = $i+1;
                            echo '<tr>
                                     <td>'.$d.'</td>';
                                     ?>
                                      <td><?php echo $data[$i]['service_type'] ?> </td>

                                      <td>

                                        <?php
                                        $twilio_sid = substr($data[$i]['twilio_sid'], -6);
                                        echo '********'.$twilio_sid;

                                         ?>

                                      </td>


                                      <td><?php

                                      $twilio_token = substr($data[$i]['twilio_token'], -6);
                                      echo '********'.$twilio_token;

                                        ?>


                                      </td>

                                      <td><?php

                                        $copilet_msg_service_id = substr($data[$i]['copilet_msg_service_id'], -6);
                                    echo '********'.$copilet_msg_service_id;

                                       ?></td>



                                      <?php
                                     echo '
                                      <td>   <a class="btn btn-info action-btn edit" data-type="'.$data[$i]['service_type'].'" data-sid="'.$data[$i]['twilio_sid'].'" data-token="'.$data[$i]['twilio_token'].'" data-id="'.$data[$i]['id'].'" data-app ="'.$data[$i]['app_sid'].'"  data-service_id="'.$data[$i]['copilet_msg_service_id'].'" data-toggle="modal" href="#edit_form">

                    <i class="fa fa-edit "></i>

                  </a>

                            <a class="btn btn-danger action-btn delete" data-id='.$data[$i]['id'].' data-toggle="modal" href="#delete">

                    <i class="fa fa-trash-o "></i>



                  </a></td>

                                      </tr>';

                          }

                        }

                        ?>


      <!-- add new account -->
      <div class="modal fade" id="add_form">
       <div class="modal-dialog">
        <form class="no-margin"  method="post" action="Add_twilio_account/add" name="client_record" id="example" enctype="multipart/form-data" >
        <div class="modal-content">
            <!-- Modal Header -->
          <div class="modal-header">
          <h4 class="modal-title text-center">Add Twilio Details</h4>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
             <!-- Modal body -->
          <div class="modal-body">
           <div class="row row2">
            <div class="col-sm-12 flex-b">
              <!-- <div class="form-group">
               <label  class="control-label">User </label>
               <select class="form-control" name="user_id" id="user">
                <option value="">Select User</option>
               </select>
              </div> -->
            </div>
          </div>
           <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
               <label  class="control-label">API Type</label>
               <select class="form-control" name="service_type">
                <option value="">Select Type</option>
                <option value="plivo">Plivo</option>
                <option value="twilio">Twilio</option>
                <option value="telnyx">Telnyx</option>
                <option value="singlewire">SingleWire</option>
               </select>
              </div>
            </div>
          </div>
          <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
             <label  class="control-label">Account SID</label>
             <input type="text" placeholder="Enter Sid" required class="form-control"  name="sid" >
            </div>
          </div>
        </div>
         <div class="row">
           <div class="col-sm-12">
              <div class="form-group">
               <label for="accntoken">Sip Connection</label>
               <br>
               <input type="text"  placeholder="Enter Token" required class="form-control input-sm parsley-validated "  name="token" >
              </div>
            </div>
          </div>
         <!-- <div class="row">
           <div class="col-sm-12">
              <div class="form-group">
               <label for="accntoken">App SID</label>
               <br>
               <input type="text"  placeholder="Enter Token"  class="form-control input-sm parsley-validated "  name="app_sid" >
              </div>
            </div>
          </div> -->
           <div class="row">
           <div class="col-sm-12">
              <div class="form-group">
               <label for="copilet_msg_service_id">Service ID</label>
               <br>
               <input type="text"  placeholder="Enter service id"  class="form-control input-sm parsley-validated "  name="copilet_msg_service_id" >
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
      <!--end model add new account -->




                        <div class="modal fade" id="edit_form">

          <div class="modal-dialog">

            <form class="no-margin"  method="post"   action="Add_twilio_account/edit" name="client_record" id="example" enctype="multipart/form-data" >

            <div class="modal-content">

            <input type="hidden" id="editid" name="id">

              <!-- Modal Header -->

              <div class="modal-header">

                <h4 class="modal-title text-center">Update Twilio Details</h4>

                <button type="button" class="close" data-dismiss="modal">&times;</button>

              </div>
              <!-- Modal body -->
              <div class="modal-body">
              <div class="row">
              <div class="col-sm-12">
              <div class="form-group">
                <label  class="control-label">Account Type</label>
                <select class="form-control" id="edittype" name="service_type">
                </select>
              </div>
              </div>
              </div>
              <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label  class="control-label">Account Sid</label>
                              <input type="text" id="editsid" placeholder="Enter Sid" required class="form-control"  name="sid" >
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label for="accntoken">Sip Connection</label>
                              <br>
                                <input type="text" id="edittoken"  placeholder="Enter Token" required class="form-control input-sm parsley-validated "  name="token" >
                               </div>
                            </div>
                          </div>

                           <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label for="accntoken">Service ID</label>
                              <br>
                                <input type="text" id="edit_msg_service_id"  placeholder="Enter Service id"  class="form-control input-sm parsley-validated "  name="copilet_msg_service_id">
                               </div>
                            </div>
                          </div>

                          <div class="row">

                          <div class="col-sm-12">

                            <div class="form-group">

                              <label for="accntoken">App SID</label>

                              <br>

                                <input type="text" id="editapp_sid" placeholder="Enter Token" class="form-control input-sm parsley-validated " name="app_sid">

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







      <div class="modal fade" id="delete">

          <div class="modal-dialog">

            <form class="no-margin"  method="post"   action="Add_twilio_account/delete" name="client_record" id="example" enctype="multipart/form-data" >

            <div class="modal-content">



              <!-- Modal Header -->

          <input type="hidden" name="id" id="delid">

              <div class="modal-header">

                <h4 class="modal-title text-center">Delete Twilio Details</h4>

                <button type="button" class="close" data-dismiss="modal">&times;</button>

              </div>



              <!-- Modal body -->

              <div class="modal-body">

               <div class="row">





                          <div class="col-sm-12">







                          <label>Are you sure you want to clear database? This action can't be undone.</label>







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



                                </tbody>

                    </table>
                 <!--  </div> -->

                  </div>

              </div>
              <div id="section2" class="tab-pane fade">

                <div class="card">

                  <div class="card-header pad-top">

                    <!-- <i class="icon-people"></i> Add New Number -->
                     <!-- <div class="tab-flex">
                      <a class="add-keys" href="<?php echo base_url(); ?>Add_Account">Add Key</a>
                      <a class="set-number" href="<?php echo base_url(); ?>Add_Number">Add Number</a>
                    </div>
                 -->
                    <div class="card-actions car-non">

                      <a href="https://datatables.net/">

                        <!-- <small class="text-muted">docs</small> -->

                      </a>

                    </div>

                  </div>



                  <div class="card-body ad-non">

                    <div class="row">



                  <div class="col-lg-12">

                    <div class="add-btn-group-padding">

                    <button type="button" class="btn btn-primary btninp" data-toggle="modal" data-target="#myModal1" onclick="getuser()"><i class="fa fa-plus fa-sm"></i> Add New Number</button>

                    </div>

                  </div>

                  </div>
                </div>

                    <table class="table table-striped table-bordered datatable table-responsive-sm">

                      <thead>

                        <tr>
                          <th>ID</th>
                          <th>Account Type</th>
                          <th>Number</th>
                          <!-- <th>Sms Forward Number</th>
                          <th>Call Forward Number</th> -->
                          <th>Action</th>
                        </tr>

                      </thead>

                      <tbody>

                           <?php

                           if ($twilio_numbers=='No') {

                            echo '<tr><td valign="top" colspan="6" class="dataTables_empty">No data available in table</td></tr>';

                           }

                           else{



                            for ($i=0; $i <sizeof($twilio_numbers) ; $i++) {
                              if (!empty($twilio_numbers[$i]['is_default']))
                              {
                                $data_default = $twilio_numbers[$i]['is_default'];
                              }
                              else
                              {
                                $data_default = '';
                              }
                                $d = $i+1;
                                echo ' <tr '.$twilio_numbers[$i]['id'].'>
                          <td>'.$d.'</td>
                          <td>'.$twilio_numbers[$i]['service_type'].'</td>



                          <td>'.$twilio_numbers[$i]['number'].'</td>

                          <td>

                            <a class="btn btn-info action-btn editfg" data-id = '.$twilio_numbers[$i]['id'].'

                            data-type = '.$twilio_numbers[$i]['service_type'].' data-sid = '.$twilio_numbers[$i]['user_id'].' data-default = "'.$data_default.'" data-num = '.$twilio_numbers[$i]['number'].' data-fsmsnum = '.$twilio_numbers[$i]['msg_forward'].' data-fcallnum = '.$twilio_numbers[$i]['call_forward'].'   data-toggle="modal" href="#edit_form2"  >

                      <i class="fa fa-edit "></i> 

                    </a>

                            <a class="btn btn-danger action-btn deletefg" data-toggle="modal" data-id = '.$twilio_numbers[$i]['id'].' href="#">

                      <i class="fa fa-trash-o "></i>

                    </a>

                          </td>';

                            }

                           }

                           ?>



                          <!-- ss -->

                          <!-- <td>

                            <a class="btn btn-success" href="#">

                    <i class="fa fa-search-plus "></i>

                  </a>

                            <a class="btn btn-info" href="#">

                    <i class="fa fa-edit "></i>

                  </a>

                            <a class="btn btn-danger" href="#">

                    <i class="fa fa-trash-o "></i>



                  </a>

                          </td> -->



                    


                <!--delete data-->

                <div class="modal fade" id="delete2">



                <div class="modal-dialog">



                            <form id="deleteform" method="post">



                <div class="modal-content">





                <div class="modal-header">

                <h4 class="modal-title text-center">Remove this Number?</h4>

                <button type="button" class="close" data-dismiss="modal">×</button>

                </div>



                <div class="modal-body">



                 <div class="form-group" style="text-align: center;">

                    <input type="hidden" name="id" id="deleteid">

                    <label for="folderName">Are you sure you want to remove this Number? This action can't be undone.</label>



                  </div>



                </div>





                <div style="text-align:center;" class="modal-footer">



                       <button type="submit" class="btn btn-danger btn-sm">Confirm</button>





                <button class="btn btn-sm btn-success" data-dismiss="modal" aria-hidden="true">Close</button>

                </div>



                </div>



                              </form>



                </div>



                </div>



                      </tbody>





                    </table>

                  </div>

                </div>

              </div>
              <div id="section3" class="tab-pane fade">
                <h3>Section 3 Content</h3>
                <p>This is the content of section 3.</p>
              </div>
            </div>



          </div>

        </div>



      </div>

      <!-- /.conainer-fluid -->

    </main>







  </div>



  <div class="modal fade" id="myModal">

    <div class="modal-dialog">

      <form class="no-margin"  method="post"   action="add_twilio_account1.php" name="client_record" id="example" enctype="multipart/form-data" >

      <div class="modal-content">



        <!-- Modal Header -->

        <div class="modal-header">

          <h4 class="modal-title text-center">Add Twilio Details</h4>

          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>



        <!-- Modal body -->

        <div class="modal-body">



        <div class="row">



                    <div class="col-sm-12">



                      <div class="form-group">



                        <label  class="control-label">Account Type</label>

                        <select class="form-control" name="service_type">

            <option value="">Select Account Type</option>

            <option value="twilio">Twilio</option>



            </select>

                      </div>



                    </div>



                  </div>





         <div class="row">



                    <div class="col-sm-12">



                      <div class="form-group">



                        <label  class="control-label">Account Sid</label>

                        <input type="text" id="" placeholder="Enter Sid" required class="form-control"  name="sid">

                      </div>



                    </div>



                  </div>



                  <div class="row">



                    <div class="col-sm-12">



                      <div class="form-group">

                        <label for="accntoken">Sip Connection</label>

                        <br>

                          <input type="text" id="twilio_num1" value="" placeholder="Enter Token" onKeyUp="checkkeyword(this.value)" required class="form-control input-sm parsley-validated "  name="token">

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
  <div class="modal fade" id="myModal1">

    <div class="modal-dialog">

      <form  id="addform">

      <div class="modal-content">

              <!-- Modal Header -->

        <div class="modal-header">

          <h4 class="modal-title text-center">New Number</h4>

          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>



        <!-- Modal body -->

        <div class="modal-body">

        <div class="row" style="display : none">
      <div class="col-sm-12">
        <div class="form-group">
         <label  class="control-label">User </label>
         <select class="form-control" name="user_id" id="user">
          <option value="34" selected>admin</option>
         </select>
        </div>
      </div>
    </div>



                  <div class="row">



                    <div class="col-sm-12">



                      <div class="form-group">

                        <label for="accnumber">Number</label>

                        <br>

                      <input type="text" class="form-control" id="twilio_num1" name="num" placeholder="15417543XXX" required >

                       <span style="color:#FF0000;" id="show"></span>

                      </div>
                      <!-- <div class="form-group">

                        <label for="accnumber">Sms Forward Number</label>

                        <br>

                      <input type="text" class="form-control" id="smsforward" name="smsforward" placeholder="optional"> -->

                       <!-- <span style="color:#FF0000;" id="show"></span> -->
  <!--
                      </div>
                      <div class="form-group">

                        <label for="accnumber">Call Forward Number</label>

                        <br>

                      <input type="text" class="form-control" id="smsforward" name="callforward" placeholder="optional"> -->

                       <!-- <span style="color:#FF0000;" id="show"></span> -->

                      <!-- </div> -->


                    </div>



                  </div>







          <div class="form-group">



             <label class="control-label">Make This Number As Default:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>



            <input type="radio" name="is_default" value="yes" > Yes&nbsp;&nbsp;&nbsp;

       <input type="radio" name="is_default" value="no"> No



           <input type="hidden" placeholder="Keyword name" value=""  required class="form-control input-sm parsley-validated "  name="id">



           <span style="color:#FF0000;" id="show"></span>

            </div>

        </div>



        <!-- Modal footer -->

        <div class="modal-footer">

          <button type="submit" class="btn btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>

          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        </div>



      </div>
</div>
    </form>

    </div>


  </div>
  <div class="modal fade" id="edit_form2">



  <div class="modal-dialog">



  <form class="no-margin"  id="edit2">





  <div class="modal-content">



  <div class="modal-header">

  <h4 class="modal-title text-center">Edit Number</h4>

  <button type="button" class="close" data-dismiss="modal">×</button>

  </div>



  <div class="modal-body">



  <div class="form-group">

  <label for="name">Twilio Account</label>

  <select name="sid" id="sid" class="form-control" >

  </select>

  </div>





  <div class="form-group">



  <label class="control-label">Number</label>



  <input type="number" id="twilio_num" placeholder="Enter Number e.g 61********"   required class="form-control input-sm parsley-validated "  name="num">









  </div>
  <!-- <div class="form-group">



  <label class="control-label">Sms Forward Number</label>



  <input type="number" placeholder="Optional"  value="" class="form-control input-sm parsley-validated "  name="fsmsnum" id="fsmsnums">









  </div>
  <div class="form-group">



  <label class="control-label">Call Forward Number</label>



  <input type="number" id="fcallnums" placeholder="Optional" value=" "  class="form-control input-sm parsley-validated "  name="fcallnum">









  </div> -->

  <div class="form-group">



  <label class="control-label">Make This Number As Default:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>



  <div id="editradio">



  </div>

  <input type="hidden" name="isvalue" value="" class="issss">



  <input type="hidden" placeholder="Keyword name" id="editid2"  required class="form-control input-sm parsley-validated "  name="id">





  </div>

  </div>



  <div class="modal-footer">



  <button type="submit" class="btn btn-danger btn-sm check2">Submit</button>



  <button class="btn btn-sm btn-success" data-dismiss="modal" aria-hidden="true">Close</button>

  </div>



  </div>

  </form>

  </div>

  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



  <?php include_once('footer.php') ?>



<!-- Plugins and scripts required by this views -->

  <script src="<?php echo base_url(); ?>vendors/js/jquery.dataTables.min.js"></script>

  <script src="<?php echo base_url(); ?>vendors/js/dataTables.bootstrap4.min.js"></script>



  <!-- Custom scripts required by this view -->

 <!--  <script src="<?php echo base_url(); ?>js/views/tables.js"></script> -->




<script type="text/javascript">
$(document).ready( function () {

    $('.datatable').DataTable({

      "scrollX": true
    });
      $('.datatable').attr('style', 'border-collapse: collapse !important');
} );
</script>
<script type="text/javascript">

  $('.edit').click(function(){

    var id = $(this).attr('data-id');

    var type = $(this).attr('data-type');

    var token = $(this).attr('data-token');

    var sid = $(this).attr('data-sid');
    var app = $(this).attr('data-app')

  var copilet_msg_service_id = $(this).attr('data-service_id');


    $('#editid').val(id);

    $('#edittoken').val(token);

    $('#editsid').val(sid);
    $('#editapp_sid').val(app);

    $('#edit_msg_service_id').val(copilet_msg_service_id);

    types(token);

   });

</script>

<script type="text/javascript">



  function types(token){

    $.ajax({

              type : 'ajax',

              method : 'post',

              dataType : 'json',

              url : '<?php echo base_url(); ?>Add_twilio_account/gettype',

              success:function(r){

                console.log(r);

                var html = "";

                for (var i = 0; i < r.length; i++) {

                  if (r[i].service_type==token) {

                  html += '<option value = "'+r[i].service_type+'" selected>'+r[i].service_type+'</option>';

                }

                else{

                  html += '<option value = "'+r[i].service_type+'" >'+r[i].service_type+'</option>';

                }

              }

                $('#edittype').html(html);


              },

              error:function(xhr,status,error){

                console.log(xhr.responseText);

              }

    });

  }

</script>



<script type="text/javascript">

  <?php if (isset($_SESSION['update']) && $_SESSION['update']=='1') { ?>

    toastr.success('Account updated successfully');

    <?php unset($_SESSION['update']); } if (isset($_SESSION['update']) && $_SESSION['update']=='0'){?>

    toastr.error('Account not updated','Failed');

    <?php unset($_SESSION['update']);    } ?>

</script>

<script type="text/javascript">

  $('.delete').click(function(){

    var id = $(this).attr('data-id');

    $('#delid').val(id);

  });

</script>

<script type="text/javascript">

  <?php if (isset($_SESSION['delete']) && $_SESSION['delete']=='1') { ?>

    toastr.success('Account deleted successfully');

    <?php unset($_SESSION['delete']); } if (isset($_SESSION['delete']) && $_SESSION['delete']=='0'){?>

    toastr.error('Account not deleted','Failed');

    <?php unset($_SESSION['delete']);    } ?>

</script>
<script type="text/javascript">
  function getuser()
  {
    $.ajax({
              type : 'ajax',
              method : 'post',
              dataType : 'json',
              url : '<?php echo base_url(); ?>Add_twilio_account/getuser',
              success:function(r)
              {
                  console.log(r);
                  var html = "";
                 for (var i = 0; i < r.length; i++)
                 {
                      if (i==0) {
                      html += '<option value = " " selected>Select user</option><option value = "'+r[i].id+'" >'+r[i].user_name+'</option>';
                    }
                    else
                    {
                      html += '<option value = "'+r[i].id+'" >'+r[i].user_name+'</option>';
                    }
                }
                $('#user').html(html);
              },
          });
      }
</script>



<!-- //faguni -->
<script type="text/javascript">

  $('#addform').submit(function(evt){

    evt.preventDefault();

    var form = $(this).serialize();

    $.ajax({

            type : 'ajax',

            method : 'post',

            data : form,

            dataType : 'json',

            url : '<?php echo base_url(); ?>Add_twilio_number/addnum',

            success:function(r){

              console.log(r);

              if (r=='inserted') {
                location.reload();
              }
              else if (r=='already') {
                toastr.warning('This number is already added');
              }
              else{
                toastr.error('Failed');
              }

            },

            error:function(xhr,status,error){

              console.log(xhr.responseText);

            }

    });

  });

</script>


<script type="text/javascript">

  $('.deletefg').click(function(){

    var id = $(this).attr('data-id');

    $('#delete2').modal('show');

    $('#deleteid').val(id);

    $('#deleteform').submit(function(evt){

      evt.preventDefault();

      var form = $(this).serialize();

      $.ajax({

                type : 'ajax',

                method : 'post',

                data : form,

                dataType : 'json',

                url : '<?php echo base_url();?>Add_twilio_number/delete',

                success:function(r){

                  console.log(r);

                  if (r=='deleted') {



                    location.reload();

                  }

                  else{

                    toastr.error("Sorry This number can't deleted", 'Failed');

                  }

                },

      });

    });



  });



</script>

<script type="text/javascript">

  $('.editfg').click(function(){

    var id = $(this).attr('data-id');

    var num = $(this).attr('data-num');
    var fcallnum = $(this).attr('data-fcallnum');
    var fsmsnum = $(this).attr('data-fsmsnum');
    $("#fsmsnums").val(fsmsnum);
    $("#fcallnums").val(fcallnum);
    $('#twilio_num').val(num);

    $('#editid2').val(id);

    var sids = $(this).attr('data-sid');



   gettype(sids);

    var radio = $(this).attr('data-default');



if (radio=='yes') {

  html = '<input type="radio" name = "is_default" value="yes" checked onclick="funs(this.value)"> Yes&nbsp;&nbsp;&nbsp; <input type="radio" name="is_default" value="no" onclick="funs(this.value)"> No';

  $(".issss").val("yes");

}

else{

  html = '<input type="radio" name = "is_default" value="yes" onclick="funs(this.value)"> Yes&nbsp;&nbsp;&nbsp; <input type="radio" name="is_default" value="no" checked onclick="funs(this.value)" > No';

  $(".issss").val("no");

}

    $('#editradio').html(html);

    });



    $('#edit2').submit(function(e){

      e.preventDefault();

      var form = $("#edit2").serialize();



    $.ajax({

              type : 'ajax',

              method : 'post',

              data : form,

              dataType : 'json',

              url : '<?php echo base_url(); ?>Add_twilio_number/edit',

              success:function(r){

                console.log(r);

                if (r==true) {



                  location.reload();

                }

                else{

                  toastr.error("This number is already added",'Already');

                }

              },

              error:function(xhr,status,error){

                console.log(xhr.responseText);

              }

    });

        });





  function funs(param) {

    var is = param;

    console.log(param);

    if(is=="yes"){

      $(".issss").val("yes");

    }else {

      $(".issss").val("no");

    }



  }

</script>

<script type="text/javascript">

  function gettype(twilio_sids){
    console.log(twilio_sids);
    $.ajax({
                type : 'ajax',
                method : 'post',
                dataType : 'json',
                url : '<?php echo base_url();?>Add_twilio_number/gettype',
                success:function(r){
                  console.log(r);
                  var sid = "";
                  for (var i = 0; i < r.length; i++) {
                    if (twilio_sids==r[i].user_id) {
                   sid += '<option value="'+r[i].user_id+'" selected>'+r[i].service_type+'</option>';
                  }

                }
                $('#sid').html(sid);
                },
                error:function(xhr,status,error){
                console.log(xhr.responseText);
                }
    });
  }

</script>

<script type="text/javascript">

  <?php if (isset($_SESSION['num_added'])) {?>

    toastr.success('<?php echo $_SESSION['num_added']; ?>');

    <?php unset($_SESSION['num_added']);}



    if (isset($_SESSION['num_deleted'])) {?>

    toastr.success('<?php echo $_SESSION['num_deleted']; ?>');

    <?php unset($_SESSION['num_deleted']);}



    if (isset($_SESSION['number_edit'])) {?>

    toastr.success('<?php echo $_SESSION['number_edit']; ?>');

    <?php unset($_SESSION['number_edit']);} ?>

</script>
<script type="text/javascript">
  function getuser()
  {
    // $.ajax({
    //           type : 'ajax',
    //           method : 'post',
    //           dataType : 'json',
    //           url : '<?php echo base_url(); ?>Add_twilio_number/getuser2',
    //           success:function(r)
    //           {
    //            var html = "";
    //            for (var i = 0; i < r.length; i++)
    //            {
    //               if (i==0) {
    //                 if (r[i].id== "<?php echo $_SESSION['id'] ?>") {
    //                 html += '<option value = " ">Select user</option><option value = "'+r[i].id+'" selected>'+r[i].user_name+'</option>';
    //                 }
    //                 else{
    //               html += '<option value = "'+r[i].id+'" >'+r[i].user_name+'</option>';
    //                 }

    //             }
    //             else
    //             {
    //               html += '<option value = "'+r[i].id+'" >'+r[i].user_name+'</option>';
    //             }
    //           }

    //             $('#user').html(html);
    //           },
    // });

  }

</script>

