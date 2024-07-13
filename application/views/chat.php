
<?php include_once('header.php') ?>
<html>
	<head>
		<title>Chat</title>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include Bootstrap JS and CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
<style type="text/css">
		body,html{
/*			height: 100%;
			margin: 0;
			background: #7F7FD5;
	       background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
	        background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);*/
		}

.h6, h6 {
    font-size: 14px;
    text-overflow: ellipsis;
    overflow: hidden;
}
textarea#example1 {
    width: 25px;
    height: 39px !important;
}
.d-flex.justify-content-end.mb-4 {
    gap: 10px;
    font-size: 14px;
}
.msg_cotainer {
    margin-top: auto;
    margin-bottom: auto;
    margin-left: 10px;
    border-radius: 4px;
    background-color: #2c3334;
    padding: 10px;
    position: relative;
    color: #fff;
    font-size: 14px;
}
li.li_reciever.active {
    background: #ada4a4 !important;
}
.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    margin-bottom: 2px;
    font-family: inherit;
    font-weight: 500;
    line-height: 1.2;
    color: inherit;
}
		.contacts li {
    background: #bfc8cb !important;
    width: 100% !important;
    padding: 5px 10px;
    margin-bottom: 15px !important;
}

		img.imguser {
    border-radius: 20px;
}
i.fa.fa-trash-o {
    font: normal normal normal 14px/1 FontAwesome;
}
.card-footer .input-group {
    display: flex;
    align-items: center;
    gap: 10px;
}
.card-footer .input-group-append {
    margin-left: -1px;
    width: 100%;
    display: contents;
}
.d-flex.bd-highlight {
    display: flex;
    gap: 0px;
    justify-content: space-between;
}
.card-header a.btn.btn-danger {
    background: #2c3334 !important;
    border: none !important;
}
.contacts_card .input-group {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.card-header {
    padding-left: 10px;
    padding-right: 10px;
}


.card-header {
    padding: 0.75rem 1.25rem;
    margin-bottom: 0;
    background-color: #4b5158  !important;
    color: #fff;
    border-bottom: 1px solid #e1e6ef;
}
.active {
    background-color: #4b5158 !important;
}

.card-footer {

    background-color: #4b5158  !important;
    color: #fff;
    
}
.user_info {
    margin-top: auto;
    margin-bottom: auto;
    margin-left: 0px !important;
}
.delete_chat {
    position: relative;
    top: 15px;
}
button.btn.btn-primary.glow.send.d-lg-flex {
    /*position: absolute;*/
    background: unset;
    border: unset !important;
    right: 5px;
    /*top: 55px;*/
}
.chatimg {
    display: grid;
    gap: 10px;
    background: #38d39f;
    padding: 10px;
    border-radius: 4px;
}
select#terrtt {
    background: #e6e6e6;
    padding: 5px 15px;
    padding-left: 5px;
    border-radius: 4px;
    margin-left: 10px;
}
.tabbbb {
    display: flex;
    gap: 10px;
    align-items: center;
    margin-bottom: 10px;
}


.input-group {
    display: grid;
}
		.chat{
			margin-top: auto;
			margin-bottom: auto;
		}
		.card{
			height: 500px;
			border-radius: 7px !important;
			background-color: #fff;
		}

.row.justify-content-center.h-100 {
    width: 100%;
    margin: auto;
    margin-left: 10% !important;
    margin-top: 30px;
    margin-bottom: 30px;
}
.col-md-8.col-xl-6.chat {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
    width: 51%;
    max-width: 51%;
    min-width: 54%;
}
.sidebar-hidden .row.justify-content-center.h-100 {
    width: 100%;
    margin: 0 !important;
    justify-content: flex-start !important;
}
.col-md-4.col-xl-3.chat {
    width: 28%;
    min-width: 28%;
    margin-top: 0 !important;
    margin-bottom: 0 !important;
}
.col-md-8.col-xl-6.chat {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
}

.chat-start {
    height: 500px !important;
}
.sidebar-hidden .row.justify-content-center.h-100 {
    margin-top: 30px !important;
}

.sidebar-hidden .col-md-8.col-xl-6.chat {
    width: 72%;
    min-width: 72%;
}




.chat-start{
			height: 500px;
			border-radius: 7px !important;
			background-color: rgba(0,0,0,0.4) !important;
		}

		.chat-start-icon {
    border-radius: 50%;
    background-color: #fff;
    font-size: 48px;
}
.chat-start {
    height: calc(var(--vh, 1vh) * 100 - 6rem);
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    background-color: #bfc8cb !important;
}

		.contacts_body{
			padding:  0.75rem 0 !important;
			overflow-y: auto;
			white-space: nowrap;
		}
		.msg_card_body{
			overflow-y: auto;
		}
		.card-header{
			border-radius: 15px 15px 0 0 !important;
			border-bottom: 0 !important;
		}
	 .card-footer{
		border-radius: 0 0 15px 15px !important;
			border-top: 0 !important;
	}
		.container{
			align-content: center;
		}
		.search{
			border-radius: 15px 0 0 15px !important;
			background-color: rgba(0,0,0,0.3) !important;
			border:0 !important;
			color:white !important;
		}
		.search:focus{
		     box-shadow:none !important;
           outline:0px !important;
		}
		.type_msg{
			background-color: rgba(0,0,0,0.3) !important;
			border:0 !important;
			color:white !important;
			height: 60px !important;
			overflow-y: auto;
		}
			.type_msg:focus{
		     box-shadow:none !important;
           outline:0px !important;
		}
		.attach_btn{
	border-radius: 15px 0 0 15px !important;
	background-color: rgba(0,0,0,0.3) !important;
			border:0 !important;
			color: white !important;
			cursor: pointer;
		}
		.send_btn{
	border-radius: 0 15px 15px 0 !important;
	background-color: rgba(0,0,0,0.3) !important;
			border:0 !important;
			color: white !important;
			cursor: pointer;
		}
		.search_btn{
			border-radius: 0 15px 15px 0 !important;
			background-color: rgba(0,0,0,0.3) !important;
			border:0 !important;
			color: white !important;
			cursor: pointer;
		}
		.contacts{
			list-style: none;
			padding: 0;
		}
		.contacts li{
			width: 100% !important;
			padding: 5px 10px;
			margin-bottom: 15px !important;
		}
	.active{
			background-color: rgba(0,0,0,0.3);
	}
		.user_img{
			height: 45px;
			width: 45px;
			border:1.5px solid #f5f6fa;
		
		}
		.user_img_msg{
			height: 40px;
			width: 40px;
			border:1.5px solid #f5f6fa;
		
		}
	.img_cont {
    position: relative;
    height: 20px;
    width: 80px;
    display: flex;
    align-items: center;
}
	.img_cont_msg{
			height: 40px;
			width: 40px;
	}
	.contacts_body .img_cont {
    height: 60px;
    display: flex;
    align-items: end;
}
.card-footer {
    border-radius: 4px !important;
}
.card-header {
    border-radius: 4px !important;
}
	.online_icon{
		position: absolute;
		height: 15px;
		width:15px;
		background-color: #4cd137;
		border-radius: 50%;
		bottom: 0.2em;
		right: 0.4em;
		border:1.5px solid white;
	}
	.offline{
		background-color: #c23616 !important;
	}
	.user_info{
		margin-top: auto;
		margin-bottom: auto;
		margin-left: 15px;
	}
	.user_info span {
    font-size: 15px;
    color: white;
}
	.user_info p{
	font-size: 10px;
	color: rgba(255,255,255,0.6);
	}
.bold {
   
    font-weight: bold;
    background-color: #ffffcc;
}
.user_info {
    width: 180px;
}
	.video_cam{
		margin-left: 50px;
		margin-top: 5px;
	}
	.video_cam span{
		color: white;
		font-size: 20px;
		cursor: pointer;
		margin-right: 20px;
	}
	.msg_cotainer{
		margin-top: auto;
		margin-bottom: auto;
		margin-left: 10px;
		border-radius: 4px;
		background-color: #2c3334;
		padding: 10px;
		position: relative;
		color: #fff;
	}
.msg_cotainer_send {
    margin-top: auto;
    margin-bottom: auto;
    margin-right: 0px;
    border-radius: 25px;
    background-color: #38d39f;
    padding: 10px;
    position: relative;
  
}
.msg_head .d-flex.bd-highlight {
    justify-content: flex-start;
    align-items: center;
    gap: 20px;
}
.chatimg .msg_cotainer_send {
    padding: 0;
    text-align: left;
}
.d-flex.justify-content-end.mb-4 {
    gap: 10px;
}
img.chatmedia {
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}
	.msg_time{
		position: absolute;
		left: 0;
		bottom: -15px;
		color: rgba(255,255,255,0.5);
		font-size: 10px;
	}
	.msg_time_send{
		position: absolute;
		right:0;
		bottom: -27px;
		color: rgba(255,255,255,0.5);
		font-size: 10px;
	}
	.msg_head{
		position: relative;
	}
	#action_menu_btn{
		position: absolute;
		right: 10px;
		top: 10px;
		color: white;
		cursor: pointer;
		font-size: 20px;
	}
	.action_menu{
		z-index: 1;
		position: absolute;
		padding: 15px 0;
		background-color: rgba(0,0,0,0.5);
		color: white;
		border-radius: 15px;
		top: 30px;
		right: 15px;
		display: none;
	}
	.action_menu ul{
		list-style: none;
		padding: 0;
	margin: 0;
	}
	.action_menu ul li{
		width: 100%;
		padding: 10px 15px;
		margin-bottom: 5px;
	}
	.action_menu ul li i{
		padding-right: 10px;
	
	}
	.action_menu ul li:hover{
		cursor: pointer;
		background-color: rgba(0,0,0,0.2);
	}
	@media(max-width: 576px){
	.contacts_card{
		margin-bottom: 15px !important;
	}
	}



	.msg_time {
    /* background: #2c3334; */
    position: absolute;
    left: 0;
    bottom: -15px;
    color: #2c3334;
    font-size: 10px;
}


.msg_time_send {
    position: absolute;
    right: 0;
    bottom: -27px;
    color: #2c3334;
    font-size: 10px;
}
.contacts li.li_reciever.bold {
    /* background: #8cccbf !important; */
    font-size: 26px;
    font-weight: 900;
    line-height: 18px;
}
select#selected_option {
    border: 1px solid lightgrey;
    border-radius: 4px;
    width: 100%;
    height: 38px;
    color: gray;
}

button.btn.btn-primary2 {
    border: none #2c3334;
    background-color: #2c3334;
    color: white;
    margin-left: 23%;
    margin-top: -21%;
    width: 30%;
    height: 36px;
    justify-items: center;
    font-size: 12px;
    line-height: 5px;
    font-weight: 500;
}
</style>


	</head>
	<!--Coded With Love By Mutiullah Samim-->
	<body>


<div id="deleteallrecordmodal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="deleteAll_chat" method="post">
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









		<div class="container-fluid h-100">
			<div class="row justify-content-center h-100">
				<div class="col-md-4 col-xl-3 chat"><div class="card mb-sm-3 mb-md-0 contacts_card">
					<div class="card-header">
						<div class="input-group">
							CHATS


							<a href="#deleteallrecordmodal" class="btn btn-danger" data-toggle="modal"> Clear All&nbsp;<i class="fa fa-trash icon"></i></a>



						<!-- 	<input type="text" placeholder="Search..." name="" class="form-control search">
							<div class="input-group-prepend">
								<span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
							</div> -->
						</div>



<!-- <div class="group_info">
  <button type="button" class="btn btn-primary2" data-toggle="modal" data-target="#groupModal">
    Select Group
  </button>
</div>

 Modal 
<div class="modal fade" id="groupModal" tabindex="-1" role="dialog" aria-labelledby="groupModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="groupModalLabel">Select a Group</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form action="insertGroup" method="post">
      <div class="modal-body">
       
          <input type="hidden" name="sender_number" id="sender_number">
           <input type="text" name="first_name" placeholder="First Name" class="form-control mb-3">
          <input type="text" name="last_name" placeholder="Last Name" class="form-control mb-3">
          <select name="selected_option" id="selected_option">
            <?php foreach ($getgroup as $item): ?>
              <option value="<?php echo $item['id']; ?>"><?php echo $item['name']; ?></option>
            <?php endforeach; ?>
          </select>
          
        
      </div>
      <div class="modal-footer">
      	<button type="submit" class="btn btn-primary" >Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
  </form>
    </div>
  </div>
</div> -->





					</div>
					<div class="card-body contacts_body">
						<ui class="contacts">

  <?php
                  if ($new_recieve=='No') {
                    echo 'No Messages Recieved';
                  }
                  else{
                    for ($i=0; $i <sizeof($new_recieve); $i++) {  ?>

 <?php if($new_recieve[$i]['read_status']=='0'){ $bold='bold';}else{ $bold='';} ?>

						<li  onclick="openchat('<?php echo $new_recieve[$i]['sender'].'/'.$new_recieve[$i]['twilio_num'] ?>',event)" class="li_reciever <?php echo $bold ?>" >
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="https://app.smsandvoice.com/public/app-assets/images/chat_images.png" class="rounded-circle user_img">
									<span class="online_icon"></span>
								</div>
								<div class="user_info">


									<span class="name"><?php if($new_recieve[$i]['name']!=''){

										echo $new_recieve[$i]['name'];
									}else{
										echo $new_recieve[$i]['sender'];
									}  ?></span>


									<h6><?php echo $new_recieve[$i]['body'] ?></h6>
									<p><?php echo $new_recieve[$i]['date_time'] ?></p>
								</div>

<div class="delete_chat">

<a href="#" class="btn btn-danger delete" data-id="3505" onclick="det(<?php echo $new_recieve[$i]['sender']; ?>)"><i class="fa fa-trash-o"></i></a>

</div>

							</div>
						</li>



					<?php } 

				}

				?> 



						
						</ui>
					</div>
					<div class="card-footer"></div>
				</div></div>
				<div class="col-md-8 col-xl-6 chat">



<div class="chat-start">
<span
class="fa fa-comments chat-sidebar-toggle chat-start-icon font-large-3 p-3 mb-1"></span><h4 class="d-none d-lg-block py-50 text-bold-500">Select a contact to start a chat!</h4>
<button
class="btn btn-light-primary chat-start-text chat-sidebar-toggle d-block d-lg-none py-50 px-1">Start
Conversation!</button></div>


					<div class="card" style="display:none;">
						<div class="card-header msg_head">
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="https://app.smsandvoice.com/public/app-assets/images/chat_images.png" class="rounded-circle user_img">
									<span class="online_icon"></span>
								</div>
								<div class="user_info">
									<span id="top_name"></span>
									<p></p>
								</div>
								<div class="video_cam">
									<!-- <span><i class="fas fa-video"></i></span>
									<span><i class="fas fa-phone"></i></span> -->
								</div>
                               

<!-- <div class="group_info">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#groupModal">
    Select Group
  </button>
</div>

Modal 
<div class="modal fade" id="groupModal" tabindex="-1" role="dialog" aria-labelledby="groupModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="groupModalLabel">Select a Group</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form action="insertGroup" method="post">
      <div class="modal-body">
       
          <input type="hidden" name="sender_number" id="sender_number">
           <input type="text" name="first_name" placeholder="First Name" class="form-control mb-3">
          <input type="text" name="last_name" placeholder="Last Name" class="form-control mb-3">
          <select name="selected_option" id="selected_option">
            <?php foreach ($getgroup as $item): ?>
              <option value="<?php echo $item['id']; ?>"><?php echo $item['name']; ?></option>
            <?php endforeach; ?>
          </select>
          
        
      </div>
      <div class="modal-footer">
      	<button type="submit" class="btn btn-primary" >Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
  </form>
    </div>
  </div>
</div>
 -->

<!-- 
<script>
  $(document).ready(function () {
    var selectedGroupID = null;

    // Handle group selection
    $('#groupList').on('click', '.selectGroupBtn', function () {
      selectedGroupID = $(this).data('group-id');
      var selectedGroupName = $(this).text();
      $('#selected_option').val(selectedGroupName);
    });

    // Code to save selectedGroupID to your model or perform further actions
    $('#saveButton').click(function () {
      if (selectedGroupID !== null) {
        // Send selectedGroupID to your model or perform the desired action
        // For example: $.post('your_endpoint.php', { group_id: selectedGroupID }, function(response) { });
        alert('Selected Group ID: ' + selectedGroupID);
      } else {
        alert('Please select a group.');
      }
    });
  });
</script> -->




                               

							</div>
							<!-- <span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span> -->
							<div class="action_menu">
								<ul>
									<li><i class="fas fa-user-circle"></i> View profile</li>
									<li><i class="fas fa-users"></i> Add to close friends</li>
									<li><i class="fas fa-plus"></i> Add to group</li>
									<li><i class="fas fa-ban"></i> Block</li>
								</ul>
							</div>
						</div>
						<div class="card-body msg_card_body">



		



							</div>

						<div class="card-footer">


							<form class="d-flex align-items-center"  id="send_chat_form">
							<div class="input-group">

<input type="hidden" name="sender_number" id="sender_number">

<input type="hidden" name="twilio_number" id="twilio_number">

								<div class="input-group-append">



									<!-- <span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span> -->
								</div>


								                          <div class="tabbbb">
<i id="cam" class="fa fa-link" onclick="$('#myImage').click();" aria-hidden="true"></i>

<input type="file" name="file" id="myImage" onchange="if($('#myImage').val()!='')
{
  $('#cam').css('color', 'green');
}"     style="display: none;">



                          <!-- <i class="fa fa-edit"> -->
                       <!--    <select title="Insert Placeholder in Your Message" class="trtt1" id="terrtt" name="">
                            <option value="">Personlize</option>

                            <option value="{{firstname}}"><button type="button"class="btn btn-primary ssfirstname" name="button"> (First Name) </button></option>
                            <option value="{{lastname}}"><button type="button"class="btn btn-primary sslastname" name="button"> (Last Name) </button></option>
                            <option value="{{phonenumber}}"><button type="button"class="btn btn-primary sscustom1" name="button"> (Phone Number) </button></option>
                            <option value="{{jobtitle}}"><button type="button"class="btn btn-primary sscustom2" name="button"> (JobTitle) </button></option>

                          </select> -->

                      <!-- </i> -->
                          

                          </div>
								
								<div class="input-group-append">
									<!-- <span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span> -->
<textarea name="main_chat" class="form-control type_msg"  id="example1"  placeholder="Type your message..."></textarea>

     <button type="submit" class="btn btn-primary glow send d-lg-flex"><i class="fa fa-paper-plane" aria-hidden="true"></i>
            <span class="d-none d-lg-block mx-50"></span></button>

								</div>
							</div>

</form>

						</div>




						</div>

					</div>
				</div>
			</div>
		</div>
	</body>



                    <script>
                    $('#terrtt').change(function(tt){
                      var MyValue = $('#terrtt').find(":selected").val();
                      $('#terrtt').prop('selectedIndex', 0);
                       const element = $('#example1');
                        const caretPos = element[0].selectionStart;
                        const textAreaTxt = element.val();
                        const txtToAdd = MyValue;
                        element.val(textAreaTxt.substring(0, caretPos) + txtToAdd + textAreaTxt.substring(caretPos) );
                    })
                    </script>



<?php include_once('footer.php') ?>




<script type="text/javascript">
		$(document).ready(function(){
$('#action_menu_btn').click(function(){
	$('.action_menu').toggle();
});
	});



function openchat(numBrs,e)
{

$('li').removeClass('active');
  $(e.target).closest('li').removeClass('bold').addClass('active');

   var element = e.currentTarget;
    
    // Get the text value of the <span> element with class "name" within the clicked <li>
    var name = $(element).find(".name").text();




const numbers = numBrs.split("/");

const sender = numbers[0];
const twilio_num = numbers[1];


const topname= name + ' - '+ sender ;

// alert(isNaN(name));

if(isNaN(name)){

 $('#top_name').html(topname);

}
else
{
 $('#top_name').html(sender);
}




     $('.chat-start').hide();
     $('.card').show();

    
     $('#sender_number').val(sender);
     $('#twilio_number').val(twilio_num);



     //for chat

   $.ajax({
    // Headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
    type: 'ajax',
    method: 'post',
    data: {
     'number': sender
    },
    url: 'get_num_chat',
    success: function(res) {
        // console.log(res);

 // $(".chat-content").html(res);
 $(".msg_card_body").html(res);

     
    },
    error: function(err) {
     console.log(err);

    }
   });



}







</script>


<script type="text/javascript">
$("#send_chat_form").submit(function(e)
  {
    
   e.preventDefault();
  // var form_data=$(this).serialize();

   var formData = new FormData(this); // Create a new FormData object
    formData.append('file', $('#myImage')[0].files[0]); // Append the selected image file to the FormData object

   var number=$("#sender_number").val();
   var msg=$("#example1").val();


   var ifselectTwilioNmbr=$("#twilio_number").val();


   var result='<li onclick="click_chat('+number+')" class="rrrr">'+
                '<div class="d-flex align-items-center">'+
                    '<div class="avatar avatar-busy m-0 mr-50">'+
                    '<img src="https://app.smsandvoice.com/public/app-assets/images/logo/default.png" height="36" width="36" alt="sidebar user image">'+
                        
                    '</div>'+
                    '<div class="chat-sidebar-name pl-1">'+
                        '<h6 class="mb-0">'+number+'</h6>'+
                        '<span class="text-muted">'+msg+'</span>'+
                    '</div>'+
                '</div>'+
            '</li>';
         $('.rrrr').addClass('active');
         $('.li_reciever').removeClass('active');
         $('.li_reciever').each(function(){
            $(this).removeClass('active')
          
         });




        var type = "POST";
        var ajaxurl = 'send_chat_msg';
        $.ajax({

            type: type,

            url: ajaxurl,

             data:formData,
 processData: false, // Prevent jQuery from processing the data
      contentType: false, // Prevent jQuery from automatically setting the content type

            // dataType: 'json',

            success: function (data) {

            
                if(data=='new')
                {
                 $('.contacts').prepend(result);
                   openchat(number,e);

                   $("#example1").val('');

                }
                else if(data=='blacklist Number')
                {
                   $("#example1").val('');
                  alert("Number Is Blacklist");
                }
                else if(data=='send')
                {
                   openchat(number,e);
                   $("#example1").val('');
                }
                // else if(data=='no default number set')
                // {
                //   alert("No Deafault Number Set !");
                // }
                 openchat(number,e);
                   $("#example1").val('');

              console.log(data);

            },

            error: function (data) {


                   // click_chat(number);
                   $("#example1").val('');
            }

        });

    



  });



</script>

<script type="text/javascript">
	$('.delete').on('click',function () {
  var sender= $(this).attr('data-num');
 




});
</script>

<script type="text/javascript">

  function det(ids){

    var id = ids;

    var msg = confirm('Are you sure??');

    if (msg==true) {
// alert(id);
      $.ajax({

                type : 'ajax',

                method : 'post',

                dataType : 'json',

                url : 'http://103.173.215.7/telnyx_chatbot/Received_messages_new/delete/'+id,

                success:function(r){

                  console.log(r);

                  if (r=='deleted') {



                    // location.reload();

                  }

                  else{

                    toastr.error('Message Not deleted','failed');

                  }

                },

                error:function(xhr,status,error){

                  console.log(xhr.responseText);

                }

      });

    }

  }

</script>
<script type="text/javascript">
    
<?php if(isset($_SESSION['success']))
{?>
   
toastr.success('<?php echo $_SESSION['success']; ?> ');

<?php  unset($_SESSION['success']); } ?>

<?php if(isset($_SESSION['error']))
{?>
   
toastr.error('<?php echo $_SESSION['error']; ?> ');

<?php  unset($_SESSION['error']); } ?>

</script>
