<?php include 'header.php';?>
<!DOCTYPE html>
<html>
  <head>
    <title>Telnyx WebRTC Call Demo</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Cross Browser WebRTC Adapter -->
    <script
      type="text/javascript"
      src="https://webrtc.github.io/adapter/adapter-latest.js"
    ></script>

    <!-- Include the Telnyx WEBRTC JS SDK -->
    <script
      type="text/javascript"
      src="https://unpkg.com/@telnyx/webrtc"
    ></script>

    <!-- <script
    type="text/javascript"
    src="../../lib/bundle.js"
  ></script> -->

    <!-- To style up the demo a little -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="./styles.css" />
    <link rel="shortcut icon" href="./favicon.ico" />




<style type="text/css">











.height {

    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;

    height: 360px;

    border-radius: 0px;

}

button#startCall {
    background: #0c8d43 !important;
    max-width: 100% !important;
    opacity: 1 !important;
    border-radius: 4px !important;
    display: flex;
    justify-content: center;
    align-items: baseline;
    gap: 4px;
    width: 100% !important;
}

.call-back {

    background: #0c8d43 !important;

    border-radius: 4px !important;

}

button#disstartCall {

    background: #e41010!important;

    max-width: 100% !important;

    border-radius: 4px !important;

    display: flex;

    justify-content: center;

    align-items: baseline;

    gap: 4px;

}

.call-back h1 {

    font-size: 20px;

    text-shadow: none !important;
    margin-bottom: 0px !important;

}

.hang-back h1 {

    font-size: 20px;

    text-shadow: none !important;
    margin-bottom: 0px !important;

}

.hang-back {

    background: #e41010!important;

     border-radius: 4px !important;

}

.plus-icon {

    text-align: center;

    position: absolute;

    margin-top: -14px;

    margin-left: 64px;

    height: auto;

    width: 4%;

}

.plus-icon img {

    width: 100%;

}

.remove-icon img {

    width: 100%;

}

.row.justify-content-center {

    margin: 0px !important;

}

.col-sm-5.pad {

    padding: 0px !important;

}

.calls-design {

    padding-left: 15px;

    padding-right: 15px;

}

.plus-icon i {

    color: #5A5A5A;

    font-size: 12px;

}

.remove-icon i {

    color: #5A5A5A;

}

.remove-icon {

    text-align: end;

    position: absolute;

    top: 22px;

    right: 25px;

    width: 5%;

    cursor: pointer;

}

.call-icon {

    background: #0c8d43 !important;

    width: 44px;

    margin: auto;

    padding: 13px;

    text-align: center;

    border-radius: 50%;

    height: 44px;

    cursor: pointer;

}

.call-icon i {

    color: #fff;

    font-size: 20px !important;

}

input#number {

    font-size: 16px !important;

}

.flex-calls {

    display: flex;

    align-items: center;

    gap: 10px;

}

select#caller_id {

    width: 50% !important;

}

select#tonumber {

    width: 100%;

}

.flex-calls .col-sm-5 {

    max-width: 50% !important;

    flex: 0 0 50% !important;

    padding: 0px !important;

}





   #dialer_table {

            width: 100%;

            font-size: 1.5em;

        }



        #dialer_table tr td {

            text-align: center;

            height: 50px;

            width: 33%;

        }



        #dialer_table #number {

            border-bottom: 1px solid #20a8d8;

            border-top: none;

    border-bottom: 1px solid #20a8d8;

    border-left: none;

    border-right: none;

    outline: none;

    text-align: center;

        }



        #dialer_table #number input {

            width: 100%;

            border: none;

            font-size: 1.6em;

        }

        .form-control:focus {



    box-shadow: none !important;

}



        /* Remove arrows from type number input : Chrome, Safari, Edge, Opera */

        #dialer_table #number input::-webkit-outer-spin-button,

        #dialer_table #number input::-webkit-inner-spin-button {

            -webkit-appearance: none;

            margin: 0;

        }



        /* Remove arrows from type number input : Firefox */

        #dialer_table #number input[type=number] {

            -moz-appearance: textfield;

        }



        #dialer_table #number input::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */

            color: #cccccc;

            opacity: 1; /* Firefox */

        }



        #dialer_table #number input:-ms-input-placeholder { /* Internet Explorer 10-11 */

            color: #cccccc;

        }



        #dialer_table #number input::-ms-input-placeholder { /* Microsoft Edge */

            color: #cccccc;

        }



        #dialer_table #dialer_call_btn_td {

            color: #ffffff;

            background-color: green;

            border: none;

            cursor: pointer;

            width: 100%;

            text-decoration: none;

            padding: 5px 32px;

            text-align: center;

            display: inline-block;

            margin: 10px 2px 4px 2px;

            transition: all 300ms ease;

            -moz-transition: all 300ms ease;

            --webkit-transition: all 300ms ease;

        }



        #dialer_table #dialer_call_btn_td:hover {

            background-color: #009d00;

        }



        #dialer_table .dialer_num_tr td {

            -webkit-touch-callout: none; /* iOS Safari */

            -webkit-user-select: none; /* Safari */

            -khtml-user-select: none; /* Konqueror HTML */

            -moz-user-select: none; /* Old versions of Firefox */

            -ms-user-select: none; /* Internet Explorer/Edge */

            user-select: none; /* Non-prefixed version, currently supported by Chrome, Edge, Opera and Firefox */

        }



        #dialer_table .dialer_num_tr td:nth-child(1) {

            border-right: 1px solid #fafafa;

        }



        #dialer_table .dialer_num_tr td:nth-child(3) {

            border-left: 1px solid #fafafa;

        }



        #dialer_table .dialer_num_tr:nth-child(1) td,

        #dialer_table .dialer_num_tr:nth-child(2) td,

        #dialer_table .dialer_num_tr:nth-child(3) td,

        #dialer_table .dialer_num_tr:nth-child(4) td {

            border-bottom: 1px solid #fafafa;

        }



        #dialer_table .dialer_num_tr .dialer_num {

            color: #0B559F;

            cursor: pointer;

        }



        #dialer_table .dialer_num_tr .dialer_num:hover {

            background-color: #fafafa;

        }



        #dialer_table .dialer_num_tr:nth-child(0) td {

            border-top: 1px solid #fafafa;

        }



        #dialer_table .dialer_del_td img {

            cursor: pointer;

        }





        @media (min-width: 240px) and (max-width: 480px){

             /*  */

             #number_out input#phoneNumber {

    font-size: 12px !important;

}

.remove-icon {

    right: 20px !important;

}

             /*  */



          select#caller_id {

    width: 100% !important;

    margin-bottom: 10px;

}

input#number {

    font-size: 12px !important;

}

.remove-icon {

    width: 7%;

}

.flex-calls .col-sm-5 {

    max-width: 100% !important;

    padding: 0px !important;

}

.flex-calls {

    display: block;

}

select#tonumber {

    width: 100%;

}

.hangup {

    margin-left: 0px;

}

.call-back {

    margin-bottom: 5px;

}

button#startCall {

    margin-bottom: 0px !important;

}

.plus-icon {

    margin-top: -12px;

    margin-left: 32px;

    height: auto;

}

.height {

    height: auto;

}

}





 @media (min-width: 375px) and (max-width: 425px){



.plus-icon {

    margin-top: -12px;

    margin-left: 41px;

    height: auto;

}

}





 @media (min-width: 425px) and (max-width: 480px){



.plus-icon {

    margin-top: -12px;

    margin-left: 50px;

    height: auto;

}

.remove-icon {

    right: 25px !important;

}

#number_out input#phoneNumber {

    font-size: 18px !important;

}

}





        

        

       @media (min-width: 481px) and (max-width: 767px){

        #number_out input#phoneNumber {

    font-size: 1.3rem !important;

}



          select#caller_id {

    width: 100% !important;

    margin-bottom: 10px;

}

.height {

    height: auto;

}

.call-back {

    margin-bottom: 10px;

}

.plus-icon {

    margin-left: 50px;

}

.flex-calls .col-sm-5 {

    max-width: 100% !important;

    padding: 0px !important;

}

.flex-calls {

    display: block;

}

select#tonumber {

    width: 100%;

}

.hangup {

    margin-left: 0px;

}

button#startCall {

    margin-bottom: 0px;

}

input#number {

    font-size: 12px !important;

}

}







         @media (min-width: 768px) and (max-width: 1000px){

            /*  */

            #number_out input#phoneNumber {

    font-size: 13px !important;

}

.remove-icon {

    right: 25px !important;

    width: 7% !important;

}

            /*  */



          select#caller_id {

    width: 100% !important;

    margin-bottom: 10px;

}

.flex-calls .col-sm-5 {

    max-width: 100% !important;

    padding: 0px !important;

}

.flex-calls {

    display: block;

}

select#tonumber {

    width: 100%;

}

.hangup {

    margin-left: 0px;

}

.plus-icon {

    margin-top: -12px;

    margin-left: 32px;

}

}



 @media (min-width: 1001px) and (max-width: 1100px){

    /*  */

    #number_out input#phoneNumber {

    font-size: 14px !important;

}

.remove-icon {

    width: 7% !important;

}

.flex-calls {

    gap: 7px !important;

}

    /*  */



.plus-icon {

    margin-top: -14px;

    margin-left: 32px;

    width: 5%;

}

.call-back #startCall {

    font-size: 14px !important;

}

.hang-back #disstartCall {

    font-size: 14px !important;

}

}





</style>



<style>





  @media(min-width: 768px) and (max-width: 999px){

    .row.justify-content-center .col-sm-5 {

    flex: 0 0 39.66667%;

    max-width: 39.66667%;

}

input#number {

    font-size: 12px !important;

}

 .call-back #startCall {

    border-color: #0c8d43!important;

    color: #fff!important;

    padding: 6px!important;

    margin-top: 0!important;

    font-size: 14px !important;

    font-weight: 400;

}

.hang-back #disstartCall {

    color: #fff!important;

    padding: 6px!important;

    margin-top: 0!important;

    font-size: 14px !important;

    font-weight: 400;

}

}  





    #startCall { 







    border-color: #0c8d43!important;







    color: #fff!important;













    padding: 10px!important;







    margin-top: 0!important;







        





font-weight: 400;







    }

    .card-body {

        background: #00000012;

    }









   #disstartCall {  







    border-color: #e41010!important;







    color: #fff!important;







    padding: 6px 6px 0px 6px!important;







    margin-top: 0!important;











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







</style>













  </head>
  <body>
<main class="main">


  <ol class="breadcrumb">

    <li class="breadcrumb-item">Home</li>


    <li class="breadcrumb-item active">Outgoing Calls</li>


  </ol>

  <div class="container-fluid">

<div class="animated fadeIn">



 <div class="card">


        <div class="card-header"> <i class="icon-people"></i> Outgoing Calls</div>


              <div class="card-body">

                 <div class="text-center mt-3 text-muted">
                  <small
                    >Status:
                    <span id="connectStatus">Not Connected</span></small>
                </div>

               

 <div class="row justify-content-center">







  <div class=" col-sm-5 pad">



    <div class="flex-calls">



  <select name="caller_id" class="form-control" id="caller_id">



  <?php if ($data=='No') 



  {



    echo '<option value="">Select Caller ID</option>';



  } 



  else



  {



   for ($i=0; $i <sizeof($data) ; $i++)



   { 



    if ($i==0) 



    {



     echo '<option value="">Select Caller ID</option><option value="'.$data[$i]['number'].'">'.$data[$i]['number'].'</option>';



     }



    else



    {



     echo '<option value="'.$data[$i]['number'].'">'.$data[$i]['number'].'</option>';



    }



   }



  }



    ?>



  </select>





<div class=" col-sm-5">



  <select name="tonumber" class="form-control" id="tonumber" onchange="get_tonum()">



  <option value="">Select Contact</option>



<?php 



foreach ($contact_data as $key) { ?>



 <option value="<?php echo $key->sender; ?>"><?php echo $key->first_name;?> - <?php echo $key->sender; ?></option> 



<?php } ?>







</select>







              







              </div>







  </div>



</div>



 </div>



          <div class="row justify-content-center">















            <div class=" col-sm-5 pad">




        <div class="modal-content height">



            <div class="modal-body"> <table id="dialer_table">

                    <tr>

                        <td id="number_out" colspan="3">



                 


  <input  type="text"  class="form-control" id="number" placeholder="Enter SIP or Number to Dial" onchange="saveInLocalStorage(event)"   />

                          <div class="remove-icon">

                      <img alt="delete" src="data:image/svg+xml;base64,PHN2ZyBhcmlhLWhpZGRlbj0idHJ1ZSIgZm9jdXNhYmxlPSJmYWxzZSIgZGF0YS1wcmVmaXg9ImZhciIgZGF0YS1pY29uPSJiYWNrc3BhY2UiIHJvbGU9ImltZyIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgNjQwIDUxMiIgY2xhc3M9InN2Zy1pbmxpbmUtLWZhIGZhLWJhY2tzcGFjZSBmYS13LTIwIGZhLTd4Ij48cGF0aCBmaWxsPSIjREMxQTU5IiBkPSJNNDY5LjY1IDE4MS42NWwtMTEuMzEtMTEuMzFjLTYuMjUtNi4yNS0xNi4zOC02LjI1LTIyLjYzIDBMMzg0IDIyMi4wNmwtNTEuNzItNTEuNzJjLTYuMjUtNi4yNS0xNi4zOC02LjI1LTIyLjYzIDBsLTExLjMxIDExLjMxYy02LjI1IDYuMjUtNi4yNSAxNi4zOCAwIDIyLjYzTDM1MC4wNiAyNTZsLTUxLjcyIDUxLjcyYy02LjI1IDYuMjUtNi4yNSAxNi4zOCAwIDIyLjYzbDExLjMxIDExLjMxYzYuMjUgNi4yNSAxNi4zOCA2LjI1IDIyLjYzIDBMMzg0IDI4OS45NGw1MS43MiA1MS43MmM2LjI1IDYuMjUgMTYuMzggNi4yNSAyMi42MyAwbDExLjMxLTExLjMxYzYuMjUtNi4yNSA2LjI1LTE2LjM4IDAtMjIuNjNMNDE3Ljk0IDI1Nmw1MS43Mi01MS43MmM2LjI0LTYuMjUgNi4yNC0xNi4zOC0uMDEtMjIuNjN6TTU3NiA2NEgyMDUuMjZDMTg4LjI4IDY0IDE3MiA3MC43NCAxNjAgODIuNzRMOS4zNyAyMzMuMzdjLTEyLjUgMTIuNS0xMi41IDMyLjc2IDAgNDUuMjVMMTYwIDQyOS4yNWMxMiAxMiAyOC4yOCAxOC43NSA0NS4yNSAxOC43NUg1NzZjMzUuMzUgMCA2NC0yOC42NSA2NC02NFYxMjhjMC0zNS4zNS0yOC42NS02NC02NC02NHptMTYgMzIwYzAgOC44Mi03LjE4IDE2LTE2IDE2SDIwNS4yNmMtNC4yNyAwLTguMjktMS42Ni0xMS4zMS00LjY5TDU0LjYzIDI1NmwxMzkuMzEtMTM5LjMxYzMuMDItMy4wMiA3LjA0LTQuNjkgMTEuMzEtNC42OUg1NzZjOC44MiAwIDE2IDcuMTggMTYgMTZ2MjU2eiIgY2xhc3M9IiI+PC9wYXRoPjwvc3ZnPg==" width="25px" title="Delete" onclick="removeLastDigit()">

                    </div></td>



                    <script type="text/javascript">

                        function removeLastDigit() {

  var numberInput = document.getElementById('number');

  var numberValue = numberInput.value;



  if (numberValue.length > 0) {

    numberValue = numberValue.slice(0, -1); // Remove the last character

    numberInput.value = numberValue;

  }

}





                    </script>

                    </tr>

                    <tr class="dialer_num_tr">

                        <td class="dialer_num" onclick="dialerClick('dial', '1')">1</td>

                        <td class="dialer_num" onclick="dialerClick('dial', '2')">2</td>

                        <td class="dialer_num" onclick="dialerClick('dial', '3')">3</td>

                    </tr>

                    <tr class="dialer_num_tr">

                        <td class="dialer_num" onclick="dialerClick('dial', '4')">4</td>

                        <td class="dialer_num" onclick="dialerClick('dial', '5')">5</td>

                        <td class="dialer_num" onclick="dialerClick('dial', '6')">6</td>

                    </tr>

                    <tr class="dialer_num_tr">

                        <td class="dialer_num" onclick="dialerClick('dial', '7')">7</td>

                        <td class="dialer_num" onclick="dialerClick('dial', '8')">8</td>

                        <td class="dialer_num" onclick="dialerClick('dial', '9')">9</td>

                    </tr>

                   <tr class="dialer_num_tr">

                        <td class="dialer_num" onclick="dialerClick('dial', '*')">*</td>

                        <td class="dialer_num" onclick="dialerClick('dial', '0')">0</td>

                        <td class="dialer_num" onclick="dialerClick('dial', '#')">#</td>

                    </tr>



                      



                </table>

                  <br>

                  <div class="row calls-design">

                    <div class="col-sm-6">

                    <div class="call-back">

<button id="startCall" class="btn btn-primary px-5 mt-4" onClick="makeCall()" disabled="true" ><i class="fa fa-phone"></i><h1>Call</h1></button>   

            </div>

                  </div>


                  <div class="col-sm-6">

                    <div class="hang-back">



<button  id="hangupCall" class="hangup btn  px-5 mt-4"  onClick="hangup()" disabled="true"><i class="fa fa-headphones"></i><h1>Hangup</h1></button>




            </div>

                  </div>

            </div>

<div id="log12"  > </div>





        </div>









              </div>















            </div>















         















          </div>




<div style="display: none;">

                <div class="telnyx-labels">Call Options:</div>
                <div class="form-check">
                  <input
                    type="checkbox"
                    id="audio"
                    value="1"
                    onchange="saveInLocalStorage(event)"
                  />
                  <label class="form-check-label telnyx-labels" for="audio">
                    Include Audio
                  </label>
                </div>
                <div class="form-check">
                  <input
                    type="checkbox"
                    id="video"
                    value="0"
                    onchange="saveInLocalStorage(event)"
                  />
                  <label class="form-check-label telnyx-labels" for="video">
                    Include Video
                  </label>
                </div>

</div>


<!-- ///others -->

<!-- //crendentials -->

  <div id="credentials" class="row w-100 utils-margin-top-bg"style="display: none;">
          
                <h5>Connect</h5>
                <div class="form-group">
                  <label class="telnyx-labels" for="username">Username</label>
                  <input
                    type="text"
                    class="form-control"
                    id="username"
                    placeholder="Enter your username"
                    onchange="saveInLocalStorage(event)"
                  />
                </div>
                <div class="form-group">
                  <label class="telnyx-labels" for="password">Password</label>
                  <input
                    type="password"
                    class="form-control"
                    id="password"
                    placeholder="Enter your password"
                    onchange="saveInLocalStorage(event)"
                  />
                </div>
                <div class="telnyx-labels">Environment Options:</div>
                <div class="form-check">
                  <input type="checkbox" id="env" value="1" />
                  <label class="form-check-label telnyx-labels" for="env">
                    Production
                  </label>
                </div>

                <button
                  id="btnConnect"
                  class="btn btn-block btn-success"
                  style="margin-top: 20px;"
                  onclick="connect()"
                >
                  Connect
                </button>
                <button
                  id="btnDisconnect"
                  class="btn btn-block btn-danger d-none"
                  onclick="disconnect()"
                >
                  Disconnect
                </button>

          
</div>


      <div id="videos_faces" class="row py-3 utils-margin-top-bg" style="display:none;">
        
            <h5>Local Video</h5>
            <video
              id="localVideo"
              autoplay="true"
              playsinline="true"
              class="w-100"
              style="
                background-color: #000;
                border: 1px solid #ccc;
                border-radius: 5px;
                max-height: 300px;
              "
            ></video>
          
            <h5>Remote Video</h5>
            <video
              id="remoteVideo"
              autoplay="true"
              playsinline="true"
              class="w-100"
              style="
                background-color: #000;
                border: 1px solid #ccc;
                border-radius: 5px;
                max-height: 300px;
              "
            ></video>
         
      </div>
























</div>
            </div>










</div>
</div>
</main>










      

          








    <script type="text/javascript">
      var client;
      var currentCall = null;

      var username = 'office76324';
      var password = 'pDf6zUMT';
      var number = localStorage.getItem('telnyx.example.number') || '';
      var audio = localStorage.getItem('telnyx.example.audio') || '1';
      var video = localStorage.getItem('telnyx.example.video') || '0';

      /**
       * On document ready auto-fill the input values from the localStorage.
       */
      ready(function () {
        document.getElementById('username').value = username;
        document.getElementById('password').value = password;
        document.getElementById('number').value = number;
        document.getElementById('audio').checked = audio === '1';
        document.getElementById('video').checked = video === '0';
        document.getElementById('env').checked = '1';


 document.getElementById('video').checked = video === '0';
 $('#video').prop('checked', false);

        connect();
      });

      function detachListeners(client){
        if(client) {
          client.off('telnyx.error');
          client.off('telnyx.ready');
          client.off('telnyx.notification');
          client.off('telnyx.socket.close');
        }
      }
      /**
       * Connect with TelnyxWebRTC.TelnyxRTC creating a client and attaching all the event handler.
       */
      function connect() {
        const env = document.getElementById('env').checked
          ? 'production'
          : 'development';

        client = new TelnyxWebRTC.TelnyxRTC({
          env: env,
          login: document.getElementById('username').value,
          password: document.getElementById('password').value,
          ringtoneFile: './sounds/incoming_call.mp3',
          // iceServers: [{ urls: ['stun:stun.l.google.com:19302'] }],
          // ringbackFile: './sounds/ringback_tone.mp3',
        });

        client.remoteElement = 'remoteVideo';
        client.localElement = 'localVideo';

        if (document.getElementById('audio').checked) {
          client.enableMicrophone();
        } else {
          client.disableMicrophone();
        }
        if (document.getElementById('video').checked) {
          client.enableWebcam();
        } else {
          client.disableWebcam();
        }

        client.on('telnyx.ready', function () {
          btnConnect.classList.add('d-none');
          btnDisconnect.classList.remove('d-none');
          connectStatus.innerHTML = 'Connected';

          startCall.disabled = false;
        });

        // Update UI on socket close
        client.on('telnyx.socket.close', function () {
          btnConnect.classList.remove('d-none');
          btnDisconnect.classList.add('d-none');
          connectStatus.innerHTML = 'Disconnected';
          client.disconnect();
          detachListeners(client);
        });

        // Handle error...
        client.on('telnyx.error', function (error) {
          console.error('telnyx error:', error);
          alert(error.message)
          btnConnect.classList.remove('d-none');
          btnDisconnect.classList.add('d-none');
          connectStatus.innerHTML = 'Disconnected';
          client.disconnect();
          detachListeners(client);
        });

        client.on('telnyx.notification', handleNotification);

        connectStatus.innerHTML = 'Connecting...';
        client.connect();
      }

      function disconnect() {
        connectStatus.innerHTML = 'Disconnecting...';
        client.disconnect();
      }

      /**
       * Handle notification from the client.
       */
      function handleNotification(notification) {
        switch (notification.type) {
          case 'callUpdate':
            handleCallUpdate(notification.call);
            break;
          case 'userMediaError':
            console.log(
              'Permission denied or invalid audio/video params on `getUserMedia`'
            );
            break;
        }
      }

      /**
       * Update the UI when the call's state change
       */
      function handleCallUpdate(call) {
        currentCall = call;
        switch (call.state) {
          case 'new': // Setup the UI
            break;
          case 'trying': // You are trying to call someone and he's ringing now
            break;
          case 'recovering': // Call is recovering from a previous session
            if (confirm('Recover the previous call?')) {
              currentCall.answer();
            } else {
              currentCall.hangup();
            }
            break;
          case 'ringing': // Someone is calling you
            //used to avoid alert block audio play, I delayed to audio play first.
            setTimeout(function () {
              if (confirm('Pick up the call?')) {
                currentCall.answer();
              } else {
                currentCall.hangup();
              }
            }, 1000);
            break;
          case 'active': // Call has become active
            startCall.classList.add('d-none');
            hangupCall.classList.remove('d-none');
            hangupCall.disabled = false;
            break;
          case 'hangup': // Call is over
            startCall.classList.remove('d-none');
            hangupCall.classList.add('d-none');
            hangupCall.disabled = true;
            break;
          case 'destroy': // Call has been destroyed
            currentCall = null;
            break;
        }
      }

      /**
       * Make a new outbound call
       */
      function makeCall() {

if(document.getElementById('caller_id').value=='')
{
  alert("Please select caller id first!");
  location.reload();
}

if(document.getElementById('number').value=='')
{
  alert("Destination Number is required");
  location.reload();
}

        const params = {
          callerName: 'Nick',
          callerNumber: document.getElementById('caller_id').value,
          destinationNumber: document.getElementById('number').value, // required!
          audio: document.getElementById('audio').checked,
          video: document.getElementById('video').checked
            ? { aspectRatio: 16 / 9 }
            : false,
        };

        currentCall = client.newCall(params);
      }

      /**
       * Hangup the currentCall if present
       */
      function hangup() {
        if (currentCall) {
          currentCall.hangup();
          location.reload();
        }
      }

      function saveInLocalStorage(e) {
        var key = e.target.name || e.target.id;
        localStorage.setItem('telnyx.example.' + key, e.target.value);
      }

      // jQuery document.ready equivalent
      function ready(callback) {
        if (document.readyState != 'loading') {
          callback();
        } else if (document.addEventListener) {
          document.addEventListener('DOMContentLoaded', callback);
        } else {
          document.attachEvent('onreadystatechange', function () {
            if (document.readyState != 'loading') {
              callback();
            }
          });
        }
      }
    </script>
  </body>
</html>

<?php include 'footer.php'; ?>



<script>







function check_blacklist(elem) {















  var xhttp = new XMLHttpRequest();















  xhttp.onreadystatechange = function() {







    if (this.readyState == 4 && this.status == 200) {







      document.getElementById("log12").innerHTML =







      this.responseText;







      if(this.responseText == 'Ready')







    {







      $('#startCall').prop('disabled', false);



      $('#log12').css('background-color','green');







      //document.getElementById('startCall').disabled='false';







    }







    else{







      $('#startCall').prop('disabled', true);







      $('#log12').css('background-color','red');







      //document.getElementById('startCall').disabled='true';







    }







    }







  };







  if (elem=='') {







      $('#startCall').prop('disabled', true);







      $('#log12').css('background-color','#20a8d8'); 







      document.getElementById("log12").innerHTML = 'Ready';  







  //     xhttp.open("GET", 'Outgoing_calls/blackList/'+elem, true);







  // xhttp.send();







  }







  else{















  xhttp.open("GET", 'Outgoing_calls/blackList/'+elem, true);







  xhttp.send();







}







}



function get_tonum() {



  var to_number = $("#tonumber").val();



  $("#number").val(to_number);



}



</script>




<script type="text/javascript">

     function dialerClick(type, value) {

        let input = $('#number_out input');

        let input_val = $('#number_out input').val();

        if (type == 'dial') {

            input.val(input_val + value);

        } else if (type == 'delete') {

            input.val(input_val.substring(0, input_val.length - 1));

        } else if (type == 'clear') {

            input.val("");

        }

                 var connection = Twilio.Device.activeConnection();

                    connection.sendDigits(value);

    }

</script>