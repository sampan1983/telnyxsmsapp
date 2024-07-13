<?php include_once('header.php') ?>
 <!-- Main content -->
<style type="text/css">
    form#formValidate2 .form-group input[type="radio"] {
    margin: 0px 5px 12px;}
    button.btn.btn-primary.btn-md.btn-sty {
    color: #111;
    background-color: #79c447;
    border-color: #79c447;
}
:focus-visible {
    outline:none;
}
select.form-control {
    width: 100% !important;
}
.form-control:focus {
    box-shadow: unset !important;
}
label.fa.fa-link {
    margin-left: 11px;
}
.controls2 {
  border: 1px solid #e6e6e6;
    border-radius: 4px;
}
.input-prepend.input-group {
    display: unset !important;
}
textarea#examplename {
    width: 100%;
    border: unset;
    -webkit-appearance: none;
    resize: none;
}
textarea#temptext {
    width: 100%;
    border: unset;
    -webkit-appearance: none;
    resize: none;
}
div#all_contacs {
    background-color: #c9c6c647;
    padding-top: 9px;
    padding-left: 9px;
    padding-bottom: 9px;
    height: 65px;
    overflow-y: auto;
    border: 1px;
    border: solid;
    border-color: #00000036;
}
.input-group {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: stretch;
    align-items: stretch;
    width: 100%;
    gap: 19px;
}
</style>
 <script type="text/javascript"

      src="//static.twilio.com/libs/twiliojs/1.2/twilio.min.js"></script>



      <script>


function change_message_type(elem){
  if(elem == 'custom'){
    $('.persolised_msg').show()
    document.getElementById('custome_messgae').style.display='block';
    document.getElementById('template_message').style.display='none';
  }
  if(elem == 'template'){
    $('.persolised_msg').hide()
    document.getElementById('custome_messgae').style.display='none';
    document.getElementById('template_message').style.display='block';
  }
}

</script>

<script>

function select_schedule(elem)

{

  if(elem == 'scheduled')

  {

    document.getElementById('scheduled-dv').style.display='block';

  }

  else{

    document.getElementById('scheduled-dv').style.display='none';

  }

}

</script>

<script type="text/javascript">



  var _gaq = _gaq || [];

  _gaq.push(['_setAccount', 'UA-36251023-1']);

  _gaq.push(['_setDomainName', 'jqueryscript.net']);

  _gaq.push(['_trackPageview']);



  (function() {

    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

  })();



</script>



   <!--  <link href="http://static0.twilio.com/bundles/quickstart/client.css"

      type="text/css" rel="stylesheet" /> -->

  <!--   <script type="text/javascript">

 //Twilio.Device.setup('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzY29wZSI6InNjb3BlOmNsaWVudDpvdXRnb2luZz9hcHBTaWQ9JmFwcFBhcmFtcz0mY2xpZW50TmFtZT10d2lsaW9fY2FsbCBzY29wZTpjbGllbnQ6aW5jb21pbmc_Y2xpZW50TmFtZT10d2lsaW9fY2FsbCIsImlzcyI6InNpZCIsImV4cCI6MTU3NTYzNjU0MX0.mcoR7gIQJ_uLMmMgCoXo5ut8TiMRBO4LnFAvpNlEEEU', {'debug':true});



      Twilio.Device.setup("eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzY29wZSI6InNjb3BlOmNsaWVudDpvdXRnb2luZz9hcHBTaWQ9JmFwcFBhcmFtcz0mY2xpZW50TmFtZT10d2lsaW9fY2FsbCBzY29wZTpjbGllbnQ6aW5jb21pbmc_Y2xpZW50TmFtZT10d2lsaW9fY2FsbCIsImlzcyI6InNpZCIsImV4cCI6MTU3NTYzNjU0MX0.mcoR7gIQJ_uLMmMgCoXo5ut8TiMRBO4LnFAvpNlEEEU");



      Twilio.Device.ready(function (device) {

        $("#log").text("Ready");

      });



      Twilio.Device.error(function (error) {

        $("#log").text("Error: " + error.message);

      });

alert(error.message);

      Twilio.Device.connect(function (conn) {

        $("#log").text("Successfully established call");

      });



      Twilio.Device.disconnect(function (conn) {

        $("#log").text("Call ended");

      });



      Twilio.Device.incoming(function (conn) {

        $("#log").text("Incoming connection from " + conn.parameters.From);

        // accept the incoming connection and start two-way audio

        conn.accept();

      });



      function call(param) {

 var phone_number = $("#number"+param).val();



        var caller_id = $("#caller_id"+param).val();



        var myparam = phone_number + "#"+ caller_id;

        if(caller_id == '')

        {

        alert('Please Select Caller ID');

        }

        else

        {

        params = {"PhoneNumber": myparam};

        Twilio.Device.connect(params);

        }

      }



      function hangup() {

        Twilio.Device.disconnectAll();

      }

    </script> -->

<!-- Main content -->

<head>

<style>

    #call_button { background-color: #0c8d43!important;

    border-color: #0c8d43!important;

    color: #fff!important;

    background: green!important;

    padding: 6px!important;

    margin-top: 0!important;

        font-size: 28px;

font-weight: 500;

    }



  .datatable{ border-collapse: collapse !important}

   #hangup_button {   background-color: #0c8d43 !important;

    border-color: #e41010!important;

    color: #fff!important;

    background: #e41010!important;

    padding: 6px!important;

    margin-top: 0!important;

    font-size: 28px;

font-weight: 500;



}

button.call::before {

    background-position: 0 -48px;

    display: none;

}

button.hangup::before {

    background-position: 0 -131px;

    display: none;

}

body {

    text-align: left;

    background:none;

}

.flex-all {
    display: flex;
    gap: 2%;
    align-items: flex-start;
}
.form-actions {
    text-align: end;
}
.msg-form textarea#examplename {
    height: 120px;
}
.flex-form {
    width: 100%;
}
.flex-msg {
    width: 100%;
}
.form-group {
    margin-bottom: 1rem;
    width: 100%;
}
form#formValidate2 .form-group input[type="radio"] {
    margin: 0px 5px 0px !important;
    position: relative;
    top: 3px;
}
.form-actions {
    text-align: center;
    margin-top: 30px;
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- <script>

      $( document ).ready(function() {





var table = $('#dataTable').DataTable();



// Sort by columns 1 and 2 and redraw

table

    .order( [ 7, 'desc' ] )

    .draw();

 });

</script> -->

<script>

      $( document ).ready(function() {





var table = $('#dataTable').DataTable();



// Sort by columns 1 and 2 and redraw

table

    .order( [ 4, 'desc' ] )

    .draw();

 });

</script>

    <main class="main">







    <!-- Breadcrumb -->



      <ol class="breadcrumb">



        <li class="breadcrumb-item">Home</li>



        <!--li class="breadcrumb-item"><a href="#">Message Center</a></li-->



        <li class="breadcrumb-item active">Bulk SMS</li>



        <!-- Breadcrumb Menu-->



        <!-- <li class="breadcrumb-menu d-md-down-none">



          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">



            <a class="btn" href="#"><i class="icon-speech"></i></a>



            <a class="btn" href="index-2.html"><i class="icon-graph"></i> &nbsp;Dashboard</a>



            <a class="btn" href="#"><i class="icon-settings"></i> &nbsp;Settings</a>



          </div>



        </li> -->



      </ol>







      <div class="container-fluid">







        <div class="animated fadeIn">


          <div class="row">


            <div class="col-lg-12">


              <div class="card">



                <div class="card-header">



                  <i class="fa fa-edit"></i>Send SMS


                  <!-- <div class="card-actions">



                    <a href="#" class="btn-setting"><i class="icon-settings"></i></a>



                    <a href="#" class="btn-minimize"><i class="icon-arrow-up"></i></a>



                    <a href="#" class="btn-close"><i class="icon-close"></i></a>



                  </div> -->



                </div>



                <div class="card-body col-lg-12">



                  <form class="form-horizontal" id="formValidate2"    enctype="multipart/form-data" >
<div class="flex-all">
<div class="flex-form">

                    <div class="form-group">



                      <label class="col-form-label" for="prependedInput">Upload Type</label>



                      <div class="controls">



                        <div class="input-prepend input-group">



                  <select name="msg_type" class="form-control" onChange="show(this.value);">



                            <option  value="">Select</option>



                            <option value="group">Group </option>



                            <option value="file">Upload File</option>

                            <option value="clients">Contacts</option>







                          </select>





                      </div>







                      </div>



                    </div>



          <!--div class="form-group">



                      <label class="col-form-label" for="appendedInput">Select Country</label>



                      <div class="controls">



                        <div class="input-group">

          <select id="select2-1" class="form-control select2-single select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="country_code" onchange="" required>







          <option value="">Select</option>





         </select>







                     </div>







                      </div>



                    </div-->







          <div class="form-group">


                      <label class="col-form-label" for="appendedInput">Schedule SMS</label>



                      <div class="controls">



                        <div class="input-group">



          <select id="select2-1" class="form-control select2-single select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="sending_type" onchange="select_schedule(this.value)" required>







          <option value="">Select</option>







    <option value="send_now">  Send Now</option>

    <option value="scheduled">Make A Schedule</option>



         </select>







                     </div>







                      </div>



                    </div>


<div class="flex-form">
          <div class="form-group" id="scheduled-dv" style="display:none">

          <div style="width:50%;float:left;padding-right:5px">



                      <label class="col-form-label" for="appendedInput">Date </label>



                      <div class="controls" >





                   <input type='date' class="form-control" id='datetimepicker3' name="scheduled"/>









                      </div>

</div>

<div style="width:50%;float:right;padding-left:5px">

                      <label class="col-form-label" for="appendedInput">Time </label>

                      <div class="controls" >


                        <input type='time' class="form-control" id='datetimepicker3' name="time"/>

                      </div>

</div>

                    </div>



<input type="hidden" name="service_type" value="twilio">

                    <div class="form-group twil-cop">



                      <label class="col-form-label" for="appendedInput">


                                                Auto Sender ID
                                              <input type="radio" name="sender_type" value="cp" onclick="twilionum('cp')" checked>
                                              Manual Sender ID
                                              <input type="radio" name="sender_type" value="num" onclick="twilionum('num')" >

                      </label>


                      <div class="controls">



                        <div class="input-group">



                          <select id="sl2" class="form-control select2-single select2-hidden-accessible" tabindex="-1" aria-hidden="true"  name="twilio_number" required>



         </select>







                     </div>







                      </div>



                    </div>


  <div id="leads_wrap" style="display:none">

          <label class="col-form-label" for="prependedInput">Select Leads</label><div class="form-control" style=" padding: 7px 7px 7px 17px;" onclick="showCheckboxes()">Select<img src="<?php echo base_url(); ?>dropdown.png" style="float:right;float: right;    height: 15px;    width: 6px;    margin-top: 4px;    "></div>

          <div class="form-group" style="display:none;max-height:250px;overflow:auto" id="leads_holder">

          <input type="checkbox" name="leads_name[]" value="select_all" id="select_all" onclick="selector123()">&nbsp;Select All<br>

</div></div>



<div id="clients_wrap" style="display:none">

          <label class="col-form-label" for="prependedInput">Select Contacts</label><div class="form-control" style=" padding: 7px 7px 7px 17px;" onclick="showCheckboxes_clients()">Select<img src="<?php echo base_url(); ?>dropdown.png" style="float:right;float: right;    height: 15px;    width: 6px;    margin-top: 4px;    "></div>

          <div class="form-group" style="display: none;margin-left: 8px;max-height: 250px;overflow: auto;margin-top: 6px;" id="clients_holder">

            <input type="radio" name="check_CNT" value="single_CHK" checked="checked" onclick="check_check('s')"> Select Contacts
           &nbsp <input type="radio" name="check_CNT"  value="multi_CHK" onclick="check_check('m')"> Select All

 </br>

      <!--     <input type="checkbox" name="all_contacts" value="select_all_clients" id="select_all_clients" onclick="selector1234()" >&nbsp;Select All <br> -->

      <div id="all_contacs">

          <?php

          if ($clientdata =='No') {

            echo "";
          }
          else{

          for($i = 0; $i<sizeof($clientdata); $i++){

           echo '<input type="checkbox" name="clients_name[]" class="checkboxes" onclick="single_select_clients(this)" value="'.$clientdata[$i]['sender'].'">&nbsp;'.$clientdata[$i]['first_name'].'  '.$clientdata[$i]['last_name'].' - '.$clientdata[$i]['sender'].'<br>';

          }

        }

          ?>
        </div>

</div></div>



                     <div class="row" id="first_box" style=" display:none;">



            <div class="col-md-12">



<div class="form-group">



<label class="control-label">Select a Group</label>



 <select name="group_name"  class="form-control ">



<option value="">Select</option>

<?php

if ($getgroup=='No') {

  echo "";

}

else{

  for($i=0;$i<sizeof($getgroup);$i++){

      echo '<option value="'.$getgroup[$i]['id'].'">'.$getgroup[$i]['name'].'</option>';

  }

}

?>





 </select>



</div>



</div>







</div>











<div class="row" id="second_box" style=" display:none;">



           <div class="col-md-12">



<div class="form-group">



            <label class="control-label">Upload File</label>



            <div class="upload-file">



                    <input style="cursor:pointer;" type="file" id="upload-demo" name="filex" class="upload-demo" accept=".xlsx,.csv,.txt">

<a href="<?php echo base_url(); ?>upload/sample_bulk_new.xlsx"><button type="button" value="Export Data" class="btn btn-primary btn-md btn-sty"><i class="fa fa-download" aria-hidden="true"></i>  Download Sample</button></a>

                    <label data-title="Select file" for="upload-demo">



                     <span data-title="No file selected..."></span>



                    </label>



                  </div>



            <input type="hidden" id="dtp_input1" value="" /><br/>



           </div>



</div>



</div>

<div style="display:none;" class="form-group">



<label class="col-form-label">Upload Image



     <span class="required">  </span>



    </label>



<div class="controls">



<input type="file" id="myimage" class="form-control" name="file[]" accept="image/*" />



<span class="help-block"> You can send an image also.</span>



       </div>



     </div>
</div>
</div>

<div class="flex-msg">

                   <div class="form-group emoji-contant-align">

                      <label class="col-form-label" for="appendedPrependedInput">Message</label>

                      <div class="controls">

                        <div class="input-prepend input-group">

                         <select class="form-control" name="message_type" onchange="change_message_type(this.value)" >

                          <option value="custom">Custom message</option>

                          <option value="template">Template message</option>

                        </select>

                        </div>

                      </div>

                    </div>
                   <!-- <div class="form-group persolised_msg">

                      <label class="col-form-label" for="appendedPrependedInput">Personalised</label>

                      <div class="controls">

                        <div class="input-prepend input-group">
                          <button type="button"class="btn btn-primary ssfirstname" name="button">First Name</button>
                          <button type="button"class="btn btn-primary sslastname" name="button">Last Name</button>
                        </div>

                      </div>

                    </div> -->


<div class="msg-form">
                    <div class="form-group emoji-contant-align" id="custome_messgae">
                      <label class="col-form-label" for="appendedPrependedInput">Message</label>
                      <div class="controls controls2">
<style media="screen">
/* select {
font-family: 'FontAwesome', 'Second Font name'
} */
select.trtt1 {
    border: none;
    -webkit-appearance: none;
    width: auto;
    font-family: system-ui;
    color: #000000ab;
    font-size: 14px;
    padding: 10px;
    cursor: pointer;
    padding-left: 0;
    padding-right: 0;
}
.tabbbb {
    display: flex;
    align-items: center;
    gap: 15px;
}
i.fa.fa-edit {
    position: relative;
    font-size: 16px;
}
label.fa.fa-image {
  border: none;
  color: #000000ab;
  font-size: 16px;
  padding: 10px;
  cursor: pointer;
  margin-right: 6px;
  margin-left: 6px;
  cursor: pointer;
  display: flex;
  gap: 5px;
  padding: 0 !important;
  margin: 0 !important;
}

label.fa.fa-link {
    border: none;
    color: #000000ab;
    font-size: 16px;
    padding: 0px !important;
    cursor: pointer;
    margin-right: 0;
    margin-left: 0;
    display: flex;
    gap: 5px;
    margin: 0;
}
p.mytabs {
    font-family: system-ui;
    font-size: 14px;
    margin-bottom: 0 !important;
}
label.fa.fa-image {
    cursor: pointer;
}
textarea#examplename {
    border-top: 1px solid #00000024;
}
textarea#temptext {
      border-top: 1px solid #00000024;
}
</style>


                        <div class="input-prepend input-group">
                          <div class="tabbbb">
                          <i class="fa fa-edit">
                          <select title="Insert Placeholder in Your Message" class="trtt1" id="terrtt" name="">
                            <option value="">Placeholder </option>

                            <option value="{{firstname}}"><button type="button"class="btn btn-primary ssfirstname" name="button"> (First Name) </button></option>
                            <option value="{{lastname}}"><button type="button"class="btn btn-primary sslastname" name="button"> (Last Name) </button></option>
                            <option value="{{phone}}"><button type="button"class="btn btn-primary sscustom1" name="button"> (Phone number) </button></option>
                            <option value="{{jobtitle}}"><button type="button"class="btn btn-primary sscustom2" name="button"> (Job title) </button></option>

                          </select></i>
                          <label class="fa fa-image" aria-hidden="true" for="myimage"> <p class="mytabs">Image</p> </label>

                          <label class="fa fa-link" data-toggle="modal" data-target="#add_short_code"> <p class="mytabs">Short Link</p> </label>


                          </div>
                         <textarea id="examplename" onkeyup="get_counts(this.value)" name="mymessage" data-control="exname-control" rows="9" class="form-control" maxlength="1024"  placeholder="Write your Message Here!"></textarea>
                     <br>


                      </div>
                      </div><span class="counter-holder">Charater(s) Count : 0<span>

                    </div>

                    <script>
                    $('#terrtt').change(function(tt){
                      var MyValue = $('#terrtt').find(":selected").val();
                      $('#terrtt').prop('selectedIndex', 0);
                       const element = $('#examplename');
                        const caretPos = element[0].selectionStart;
                        const textAreaTxt = element.val();
                        const txtToAdd = MyValue;
                        element.val(textAreaTxt.substring(0, caretPos) + txtToAdd + textAreaTxt.substring(caretPos) );
                    })
                    </script>

          <div id="template_message" style="display:none">



          <div class="form-group emoji-contant-align" id="template_message">

                      <label class="col-form-label" for="appendedPrependedInput">Select Template</label>

                      <div class="controls">

                       <select class="form-control" name="select_template" id="temp1"  >

                        <option value="custom">Select</option>

             <?php

             if ($tapp_template_msg=="") {

               echo "";

             }

             else{

             for($i=0;$i<sizeof($tapp_template_msg);$i++)

             {

              echo '<option value = '.$tapp_template_msg[$i]['id'].'>'.$tapp_template_msg[$i]['title'].'</option>';

             }

           }

             ?>

                         </select>

                      </div>

                    </div>





<div class="form-group" id="tmp_img"><input type="hidden" name=tmp_img ></div>


           <div class="form-group emoji-contant-align" id="showtemplate">

                      <label class="col-form-label" for="appendedPrependedInput">Message </label>

                      <div class="controls controls2">

                        <div class="input-prepend input-group">
                          <div class="tabbbb">
                          <i class="fa fa-edit">
                          <select title="Insert Placeholder" class="trtt1" id="tamplate_terrtt" name="">
                            <option value=""> Placeholder </option>

                            <option value="{{firstname}}"><button type="button"class="btn btn-primary ssfirstname" name="button"> (First Name) </button></option>
                            <option value="{{lastname}}"><button type="button"class="btn btn-primary sslastname" name="button"> (Last Name) </button></option>
                            <option value="{{custom1}}"><button type="button"class="btn btn-primary sscustom1" name="button"> (Custom 1) </button></option>
                            <option value="{{custom2}}"><button type="button"class="btn btn-primary sscustom2" name="button"> (Custom 2) </button></option>
                          </select></i>
                          <label class="fa fa-image" aria-hidden="true" for="myimage"> Image</label>
                            <label class="fa fa-link" data-toggle="modal" data-target="#T_add_short_code"> Short Code</label>

                            </div>

                         <textarea name="message" id="temptext" data-control="exname-control" rows="9" class="form-control" placeholder="Write your Message Here!" value = "" maxlength="1024"   onkeyup="get_counts(this.value)"></textarea>
                         <br>

                       </div>

                      </div>
                      <span class="counter-holder1">Charater(s) Count : 0</span>

                    </div>



                    </div>



                    <script>
                    $('#tamplate_terrtt').change(function(tt){
                      var MyValue = $('#tamplate_terrtt').find(":selected").val();

                       const element = $('#temptext');
                        const caretPos = element[0].selectionStart;
                        const textAreaTxt = element.val();
                        const txtToAdd = MyValue;
                        element.val(textAreaTxt.substring(0, caretPos) + txtToAdd + textAreaTxt.substring(caretPos) );
                    })
                    </script>




</div>

</div>
                </div>

                <div class="form-actions">

                  <button type="submit" id="send_btn" class="btn btn-primary"> <i class="fa fa-send"></i> Send Now</button>
                  <button type="reset" class="btn btn-secondary">Cancel</button>

                </div>
              </form>

              </div>


            </div>



            <!--/.col



          </div>







          <!/.row-->















        </div>







      </div>



      <!-- /.conainer-fluid -->



      <!-- /.conainer-fluid -->



    </main>







    <!--  -->







  </div>



  <div class="modal fade" id="add_short_code">


  <div class="modal-dialog">

     <form class="no-margin" id="shortCode" data-validate="parsley" method="post" name="client_record" enctype="multipart/form-data" >
  <div class="modal-content">

  <div class="modal-header">


  <h4 class="modal-title text-center">Short Code</h4>

  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

  </div>


  <div class="modal-body">
  <div class="form-group">

  <label class="control-label">URL</label>

  <input type="text" placeholder="Short Code" value="" required class="form-control my_Url"  name="Url">

  </div>

  </div>

  <div class="modal-footer">

      <button type="submit"class="btn btn-sm btn-success shortCode" data-dismiss="modal" aria-hidden="true">Add</button>

  <button  class="btn btn-danger btn-sm check" data-dismiss="modal" aria-hidden="true">Close</button>

  </div>

    </div>
    </form>

  </div>

</div>


<div class="modal fade" id="T_add_short_code">


<div class="modal-dialog">

   <form class="no-margin" id="" data-validate="parsley" method="post" name="client_record" enctype="multipart/form-data" >
<div class="modal-content">

<div class="modal-header">


<h4 class="modal-title text-center">Short Code</h4>

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

</div>


<div class="modal-body">
<div class="form-group">

<label class="control-label">URL</label>

<input type="text" placeholder="Short Code" value="" required class="form-control tem_my_Url"  name="Url">

</div>

</div>

<div class="modal-footer">

    <button type="submit"class="btn btn-sm btn-success T_shortCode" data-dismiss="modal" aria-hidden="true">Add</button>

<button  class="btn btn-danger btn-sm check" data-dismiss="modal" aria-hidden="true">Close</button>

</div>

  </div>
  </form>

</div>

</div>





  <?php include_once('footer.php') ?>

<script>
  $('.shortCode').click(function(e){
    e.preventDefault();
    var MyValue = $('.my_Url').val();
  var tt = MyValue.match(/(http(s)?:\/\/.)?(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)/g);
if (tt == null) {
  alert("Invalid URL");
}else{
  const element = $('#examplename');
  const caretPos = element[0].selectionStart;
  const textAreaTxt = element.val();
  const txtToAdd = MyValue;
  element.val(textAreaTxt.substring(0, caretPos) + txtToAdd + textAreaTxt.substring(caretPos));
}
})
</script>
<script>
  $('.T_shortCode').click(function(e){
    e.preventDefault();
    var MyValue = $('.tem_my_Url').val();
  var tt = MyValue.match(/(http(s)?:\/\/.)?(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)/g);
if (tt == null) {
  alert("Invalid URL");
}else{
  const element = $('#temptext');
  const caretPos = element[0].selectionStart;
  const textAreaTxt = element.val();
  const txtToAdd = MyValue;
  element.val(textAreaTxt.substring(0, caretPos) + txtToAdd + textAreaTxt.substring(caretPos));
}
})
</script>



<!-- Plugins and scripts required by this views -->



  <script src="<?php echo base_url(); ?>vendors/js/jquery.dataTables.min.js"></script>



  <script src="<?php echo base_url(); ?>vendors/js/dataTables.bootstrap4.min.js"></script>


  <!-- Custom scripts required by this view -->

                      <script>

                      $('.firstname').click(function(){

                        const element = $('#temptext');
                          const caretPos = element[0].selectionStart;
                          const textAreaTxt = element.val();
                          const txtToAdd = "{{FirstName}}";
                          element.val(textAreaTxt.substring(0, caretPos) + txtToAdd + textAreaTxt.substring(caretPos) );
                      })
                      $('.lastname').click(function(){

                        const element = $('#temptext');
                          const caretPos = element[0].selectionStart;
                          const textAreaTxt = element.val();
                          const txtToAdd = "{{LastName}}";

                          element.val(textAreaTxt.substring(0, caretPos) + txtToAdd + textAreaTxt.substring(caretPos) );
                          // $('.Template_message').text("{{lname}}");
                      })
                      </script>

                      <script>

                      $('.ssfirstname').click(function(){

                        const element = $('#examplename');
                          const caretPos = element[0].selectionStart;
                          const textAreaTxt = element.val();
                          const txtToAdd = "{{FirstName}}";
                          element.val(textAreaTxt.substring(0, caretPos) + txtToAdd + textAreaTxt.substring(caretPos) );
                      })
                      $('.sslastname').click(function(){

                        const element = $('#examplename');
                          const caretPos = element[0].selectionStart;
                          const textAreaTxt = element.val();
                          const txtToAdd = "{{LastName}}";

                          element.val(textAreaTxt.substring(0, caretPos) + txtToAdd + textAreaTxt.substring(caretPos) );
                          // $('.Template_message').text("{{lname}}");
                      })
                      </script>
  <script src="<?php echo base_url(); ?>js/views/tables.js"></script>

  <script>



  function show(str)



    {
    if(str=='file')



    {



    $("#second_box").show();



    $("#scheduled_btn").hide();



    $("#send_btn").show();



    $("#first_box").hide();

    $("#clients_wrap").hide();

    $("#leads_wrap").hide();



    }

  else if(str=='leads')

  {

    $("#second_box").hide();



    $("#scheduled_btn").hide();



    $("#send_btn").show();



    $("#first_box").hide();

    $("#clients_wrap").hide();

    $("#leads_wrap").show();

  }

  else if(str=='clients')

  {

    $("#second_box").hide();



    $("#scheduled_btn").hide();



    $("#send_btn").show();



    $("#first_box").hide();

    $("#clients_wrap").show();

    $("#leads_wrap").hide();

  }

    else



    {



    $("#second_box").hide();



    $("#scheduled_btn").hide();



    $("#send_btn").show();



    $("#first_box").show();

$("#clients_wrap").hide();

    $("#leads_wrap").hide();

    }



  }





function showCheckboxes_clients()

       {



       var expanded = false;

       var checkboxes = document.getElementById("clients_holder");

       if (!expanded) {

       checkboxes.style.display = "block";

       expanded = true;

       }

       else

         {

       checkboxes.style.display = "none";

       expanded = false;

       }

       /* if(checkboxes.style.display === 'none' )  {   checkboxes.style.display = "block";  }  else{    checkboxes.style.display = "none";  } */

       }











        function showCheckboxes()
       {

       var expanded1 = false;

       var checkboxes = document.getElementById("leads_holder");

       if (!expanded1) {

       checkboxes.style.display = "block";

       expanded1 = true;

       }

       else

         {

       checkboxes.style.display = "none";

       expanded1 = false;

       }

       /* if(checkboxes.style.display === 'none' )  {   checkboxes.style.display = "block";  }  else{    checkboxes.style.display = "none";  } */

       }











         function single_select(elem)

   {

   if(elem.checked == true) {

     }

     else {

       document.getElementById("select_all").checked = false;

       }

       }





         function single_select_clients(elem)

   {

   if(elem.checked == true) {

     }

     else {

       document.getElementById("select_all_clients").checked = false;

       }

       }
       function selector1234()

{

  var total_freelancer = $('input:checkbox.checkboxes').length;



var total_freelancer1 = $('input:checkbox.checkboxes');

// console.log(total_freelancer1[i]);

var i = 0;for(i=0; i<total_freelancer;i++)

{ if(document.getElementById("select_all_clients").checked == true){



total_freelancer1[i].checked = true;



}

else

{

total_freelancer1[i].checked = false;

}

   }

   }





     function get_counts(val)

   {

     var lengthhh = val.length;

     // var left_length = 160 - lengthhh;
     var left_length = lengthhh;

     $('.counter-holder').html("Charater(s) Count : <b>"+ left_length +"</b> ");

     $('.counter-holder1').html("Charater(s) Count : <b>"+ left_length +"</b> ");
     //
     // $('.counter-holder').html("You've <b>"+ left_length +"</b> charater(s) left");
     //
     // $('.counter-holder1').html("You've <b>"+ left_length +"</b> charater(s) left");

   }




   function selector123()

{

  var total_freelancer = $('input:checkbox.checkboxes').length;

  alert(total_freelancer);

var total_freelancer1 = $('input:checkbox.checkboxes');

var i = 0;for(i=0; i<=total_freelancer;i++)

{ if(document.getElementById("select_all").checked == true)

{

total_freelancer1[i].checked = true;

}

else

{

total_freelancer1[i].checked = false;

}

   }

   }

</script>



<script type="text/javascript">



   $(document).ready(function() {



              /*  $('#datetimepicker1').datetimepicker();*/



      $("#demo1").emojioneArea({



       container: "#container",



       hideSource: false,



       useSprite: false



      });



    });





</script>



 <script>







    $(function() {



      // Initializes and creates emoji set from sprite sheet



      window.emojiPicker = new EmojiPicker({



        emojiable_selector: '[data-emojiable=true]',



        assetsPath: 'lib/img/',



        popupButtonClasses: 'fa fa-smile-o'



      });

      window.emojiPicker.discover();

    });

  </script>



<script type="text/javascript">
   $('#checkAll').click(function () {
     $('input:checkbox').prop('checked', this.checked);
 });

</script>











<script>

function select_n(str) {



    if (str.length == 0) {

        document.getElementById("sl").innerHTML = "";

        return;

    } else {

        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function() {

            if (this.readyState == 4 && this.status == 200) {

                document.getElementById("sl").innerHTML = this.responseText;

            }

        };

        xmlhttp.open("GET", "getn.php?q=" + str, true);

        xmlhttp.send();

    }

}

</script>

<script type="text/javascript">



      //////////send msg submit

  $('#formValidate2').submit(function(evt){

      evt.preventDefault();

      var form = new FormData(this);

    $('#send_btn').attr('disabled',true);
    console.log(form);
      $.ajax({

                type : 'ajax',

                method : 'post',

                data : form,

                dataType : 'json',

                url : '<?php echo base_url() ?>Bulk_sms/get_bulk_msg',

                      enctype : 'multiple/form-data',

                     cache : false,

                     contentType : false,

                        processData : false,

                success:function(r)
                {
                  if (r=='invalid upload type')
                  {
                    toastr.warning('Please select upload type');
                  }
                  else if(r=='group_fail')
                  {
                    toastr.warning('Please select a group');
                  }
                  else if (r=='no contact')
                  {
                    toastr.warning('Please select contact number');
                  }
                  else if(r=='Invalid file_format')
                  {
                   toastr.warning('This file format is not supported','Invalid file format');
                  }
                  else
                  {
                    console.log(r);
                  location.reload();
                   }
                   location.reload();
                },

                error:function(xhr,status,error){

                  console.log(xhr.responseText);
                   location.reload();
                }

      });

  });

</script>



<script type="text/javascript">

  $('#temp1').change(function(){
    var id = $(this).val();
   $.ajax({
              type : 'ajax',
              method : 'post',
              dataType : 'json',
              url : '<?php echo base_url(); ?>Bulk_sms/getdatamsg/'+id,
              success:function(r){
                console.log(r);
                console.log(r[0].media+'in');
                if (r==null) {
                  html = r;
                }
                else{
                html = r[0].message;
                if (r[0].media) {
                  console.log(r[0].media);
                  MMS = 'MMS<br><a href='+r[0].media+' target=_blank><i class="fa fa-file-image-o" aria-hidden="true"></i></a><input type="hidden" name=tmp_img value='+r[0].media+'>';
                }
                else{
                  console.log('null');
                    MMS = '<input type="hidden" name=tmp_img >';
                }
                $('#tmp_img').html(MMS);
                  }

                $('#temptext').val(html);
              },
              error:function(xhr,status,error){
                console.log(xhr.responseText);
              }
   });
  });

</script>




<script type="text/javascript">

  <?php if (isset($_SESSION['invalid']) && $_SESSION['invalid']=='invalid process') {?>



 toastr.error('<?php echo $_SESSION['invalid']; ?>')



  <?php unset($_SESSION['invalid']);}

  if (isset($_SESSION['clients_fail'])) { ?>



    toastr.error('<?php echo $_SESSION['clients_fail']; ?>');



  <?php unset($_SESSION['clients_fail']); }

  if (isset($_SESSION['clients'])) { ?>



    toastr.success('<?php echo $_SESSION['clients']; ?>');



    <?php unset($_SESSION['clients']);}



    if (isset($_SESSION['imported']) && $_SESSION['imported']=='imported') {?>



      toastr.success('Congrats! Number imported Successfully');



    <?php unset($_SESSION['imported']);}



    if (isset($_SESSION['group']) && $_SESSION['group']=='Group') {?>



      toastr.success('Group number imported Successfully');



      <?php unset($_SESSION['group']);}





      if (isset($_SESSION['group_fail'])) {?>

        toastr.error('<?php echo $_SESSION['group_fail'] ;?>');

        <?php unset($_SESSION['group_fail']);}



        if (isset($_SESSION['file_error'])) {?>

        toastr.error('<?php $_SESSION['file_error'];?>');



        <?php unset($_SESSION['file_error']);} if (isset($_SESSION['already_filex'])) {?>

          toastr.error('<?php echo $_SESSION['already_filex']; ?>');

          <?php unset($_SESSION['already_filex']); }



          if (isset($_SESSION['fail'])) {?>

            toastr.error('<?php echo $_SESSION['fail'] ?>','Failed');

            <?php unset($_SESSION['fail']); }

            if (isset($_SESSION['file_size_error'])) {?>

              toastr.error('<?php echo $_SESSION['file_size_error']; ?>');

              <?php unset($_SESSION['file_size_error']);}?>

</script>

<script type="text/javascript">

  twilionum('cp');

  function twilionum(val){

    if(val=='cp')
    {


    $.ajax({

          type : 'ajax',

          method : 'post',

          dataType : 'json',

          url : '<?php echo base_url(); ?>Single_message/gettwilionum',

          success:function(r)
          {
            console.log(r);
            var html = "";
            if (r)
            {
              for (var i = 0; i < r.length; i++)
              {
                if (r[i].is_default == 'yes')
                {
                 html += '<option value = '+r[i].number+'  selected>'+r[i].number+'</option>';
              }
              else
              {
                html += '<option value = '+r[i].number+'>'+r[i].number+'</option>';
              }
              var copilot = '<option value = "'+r[i].copilet_msg_service_id+'"  selected>'+r[i].copilet_msg_service_id+'</option>';
              }
          }
          else
          {
            html += '<option value = ""  selected>Twilio Number Not found</option>';
            var copilot = '<option value = ""  selected>Twilio Number Not found</option>';
          }

            $('#sl2').html(copilot);

          },

          error:function(xhr,status,error){

                // console.log(xhr.responseText);



              }

    });

}
else if(val=='num')
{

    $.ajax({

          type : 'ajax',

          method : 'post',

          dataType : 'json',

          url : '<?php echo base_url(); ?>Single_message/gettwilionum',

          success:function(r)
          {
            console.log(r);
            var html = "";
            if (r)
            {

                html1='<option value =""  selected>Select Number</option>';
              for (var i = 0; i < r.length; i++)
              {
                // if (r[i].is_default == 'yes')
                // {
                 // html += '<option value = '+r[i].number+'  selected>'+r[i].number+'</option>';
              // }
              // else
              // {
                html += '<option value = '+r[i].number+'>'+r[i].number+'</option>';
              // }
              // var copilot = '<option value = "'+r[i].number+'"  selected>Copilot</option>';
              }
          }
          else
          {
            html += '<option value = ""  selected>Twilio Number Not found</option>';
            var html = '<option value = ""  selected>Twilio Number Not found</option>';
          }

            $('#sl2').html(html1+html);

          },

          error:function(xhr,status,error){

                // console.log(xhr.responseText);



              }

    });
}

  }

</script>
<script type="text/javascript">
  function check_check(div)
  {

    if(div=='s')
    {
      $("#all_contacs").show();
    }else
    {
      $("#all_contacs").hide();

    }

  }
</script>
