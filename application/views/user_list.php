<?php include_once('header.php') ?>


<style>
  div#DataTables_Table_0_wrapper {
    padding: 0px !important;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    	body{
        overflow: auto;
    background:#eee;
}
.breadcrumb {
     background-color: unset !important;

}
.widget-author {
  margin-bottom: 58px;
}
.author-card {
    position: relative;
    padding: 17px !important;
}
.author-card .author-card-cover {
  position: relative;
  width: 100%;
  height: 100px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.author-card .author-card-cover::after {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  content: '';
  opacity: 0.5;
}
.author-card .author-card-cover > .btn {
  position: absolute;
  top: 12px;
  right: 12px;
  padding: 0 10px;
}
.author-card .author-card-profile {
    display: table;
    position: relative;
    margin-top: -22px;
    padding-right: 15px;
    padding-bottom: 16px;
    padding-left: 20px;
    z-index: 5;
    width: 75%;
    margin: AUTO;
}
.author-card .author-card-profile .author-card-avatar, .author-card .author-card-profile .author-card-details {
  display: table-cell;
  vertical-align: middle;
}
.author-card .author-card-profile .author-card-avatar {
    width: 85px;
    border-radius: 50%;
    overflow: hidden;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 2px 11px;
}
.author-card .author-card-profile .author-card-avatar > img {
  display: block;
  width: 100%;
}
.author-card .author-card-profile .author-card-details {
  padding-top: 20px;
  padding-left: 15px;
}
.author-card .author-card-profile .author-card-name {
  margin-bottom: 2px;
  font-size: 14px;
  font-weight: bold;
}
.author-card .author-card-profile .author-card-position {
  display: block;
  color: #8c8c8c;
  font-size: 12px;
  font-weight: 600;
}
.author-card .author-card-info {
  margin-bottom: 0;
  padding: 0 25px;
  font-size: 13px;
}
.author-card .author-card-social-bar-wrap {
  position: absolute;
  bottom: -18px;
  left: 0;
  width: 100%;
}
.author-card .author-card-social-bar-wrap .author-card-social-bar {
  display: table;
  margin: auto;
  background-color: #fff;
  box-shadow: 0 12px 20px 1px rgba(64, 64, 64, .11);
}
.btn-style-1.btn-white {
    background-color: #fff;
}
.list-group-item i {
    display: inline-block;
    margin-top: -1px;
    margin-right: 8px;
    font-size: 1.2em;
    vertical-align: middle;
}
.mr-1, .mx-1 {
    margin-right: .25rem !important;
}

.list-group-item.active:not(.disabled) {
    border-color: #e7e7e7;
    background: #fff;
    color: #ac32e4;
    cursor: default;
    pointer-events: none;
}
.list-group-flush:last-child .list-group-item:last-child {
    border-bottom: 0;
}

.list-group-flush .list-group-item {
    border-right: 0 !important;
    border-left: 0 !important;
}

.list-group-flush .list-group-item {
    border-right: 0;
    border-left: 0;
    border-radius: 0;
}
.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
}
.list-group-item:last-child {
    margin-bottom: 0;
    border-bottom-right-radius: .25rem;
    border-bottom-left-radius: .25rem;
}
a.list-group-item, .list-group-item-action {
    color: #404040;
    font-weight: 600;
}
.list-group-item {
    padding-top: 16px;
    padding-bottom: 16px;
    -webkit-transition: all .3s;
    transition: all .3s;
    border: 1px solid #e7e7e7 !important;
    border-radius: 0 !important;
    color: #404040;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: .08em;
    text-transform: uppercase;
    text-decoration: none;
}
.list-group-item {
    position: relative;
    display: block;
    padding: .75rem 1.25rem;
    margin-bottom: -1px;
    background-color: #fff;
    border: 1px solid rgba(0,0,0,0.125);
}
.list-group-item.active:not(.disabled)::before {
    background-color: #ac32e4;
}

.list-group-item::before {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    width: 3px;
    height: 100%;
    background-color: transparent;
    content: '';
}
.h4, h4 {
    font-size: 1.5rem;
    margin-top: 0px !important;
    margin-bottom: 15px !important;
}
a.list-group-item.acct {
    background-color: #38d39f;
    color: white;
}
.h6, h6 {
    font-size: 1rem;
    width: 100%;
    text-align: center;
}
.profile-txt {
    display: flex;
    border: 1px solid #ddd;
    padding: 20px;
}
.classtogglepb5 {
  min-width: 100%;
  max-width: 100%;
}

@media (min-width: 240px) and (max-width: 479px) {

  .ellip-menu {
    width: 100% !important;
    right: 0px !important;
}
.profile-txt {
    display: block !important;
}
}


@media (min-width: 480px) and (max-width: 767px) {

  .ellip-menu {
    width: 100% !important;
    right: 0px !important;
}
.profile-txt {
    display: block !important;
}
}
    </style>


 <main class="main">
   <!-- Breadcrumb -->
   <ol class="breadcrumb">
     <li class="breadcrumb-item">Home</li>
     <li class="breadcrumb-item active">Profile</li>
      </ol>
      <div class="container-fluid">
        <div class="animated fadeIn">
          <div class="card">
            <div class="card-header">
              <i class="icon-people"></i> Profile
            </div>
            <div class="card-body">



<div class="section">


</head>
<body>
<div class="container">
<div class="row">
<div class="profile-txt">
<div class="col-lg-3 pb-5 classtogglepb5">

<div class="author-card pb-3">
<div class="author-card-profile">
<div class="author-card-avatar"><img src="<?php echo base_url()."img/avatars/".$data[0]['profile_image']; ?>" alt="Daniel Adams">

</div>


</div>
<h6><?php echo $data[0]['user_name'] ?></h6>
</div>
<div class="wizard">
<nav class="list-group list-group-flush">
<a id="button-show-and-hide" class="list-group-item acct" href="#">
<div class="d-flex justify-content-between align-items-center">
<div><i class="fe-icon-shopping-bag mr-1 text-muted"></i>
<div class="d-inline-block font-weight-medium text-uppercase">Account Setting</div>
</div>
</div>
</a>
<a class="list-group-item pwd" href="#">
<div class="d-flex justify-content-between align-items-center">
<div><i class="fe-icon-shopping-bag mr-1 text-muted"></i>
<div class="d-inline-block font-weight-medium text-uppercase">Password</div>
</div>
</div>
</a>
</nav>
</div>
</div>
<script>

  $("#button-show-and-hide").click(function(){
  $(".ellip-menu").show();
  $(".pb-5").removeClass("classtogglepb5");
});
</script>
<div class="col-lg-9 pb-5 profile_section ellip-menu" >
<h4>  Account Settings</h4>
<form class="row" action="<?php echo base_url(); ?>/user_list/edit_new" method="post" enctype="multipart/form-data">

<div class="col-md-6">
<div class="form-group">
<label for="account-fn">User Name</label>
<input class="form-control" type="hidden" name="id"  value="<?php echo $data[0]['id'] ?>" >
<!-- <input class="form-control" type="hidden" name="profileimage"  value="" > -->
<input class="form-control" type="text" name="user_name" id="account-fn" value="<?php echo $data[0]['user_name'] ?>" required>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="account-ln">Email</label>
<input class="form-control" type="text" name="email" id="account-ln" value="<?php echo $data[0]['email'] ?>" required>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="account-email">User Type</label>
<input class="form-control" type="email" name="" id="account-email" value="<?php echo $data[0]['type'] ?>" disabled>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="account-phone">Phone Number</label>
<input class="form-control" type="text" name="" id="account-phone" value="<?php echo $data[0]['twilio_number'] ?>" >
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<label for="account-phone">Profile Image</label>
<input class="form-control" type="file" name="file" id="account-image" value="" >
</div>
</div>
<div class="col-12">
<!-- <hr class="mt-2 mb-3"> -->
<div class="d-flex flex-wrap justify-content-between align-items-center">
<button class="btn btn-style-1 btn-primary" type="submit" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Success!" data-toast-message="Your profile updated successfuly.">Update Profile</button>
</div>
</div>
</form>
</div>

<div class="col-lg-9 pb-5 password_section " style="display:none;">
  <h4>  Password Reset</h4>
<form class="row" action="<?php echo base_url(); ?>/user_list/edit_new_password" method="post" >
  <div class="col-md-12">
  <div class="form-group">
  <label for="account-pass">Old Password</label>
  <input class="form-control" type="password" value="**********" onclick="clear()"  id="account-pass33">
  </div>
  </div>
<div class="col-md-6">
<div class="form-group">
  <input type="hidden" name="id" value="<?php $data[0]['id'] ?>">
<label for="account-pass">New Password</label>
<input class="form-control" type="password" name="password" placeholder="Enter New Password" value=""   id="account-pass">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="account-confirm-pass">Confirm Password</label>
<input class="form-control" type="password"  placeholder="Confirm New Password" value="" id="account-confirm-pass">

</div>
</div>

<div class="col-12">
<!-- <hr class="mt-2 mb-3"> -->
<div class="d-flex flex-wrap justify-content-between align-items-center">
  <span class="trttt1" style="color:red;"></span>
  <span class="trttt2" style="color:green;"></span>
<button class="btn btn-style-1 btn-primary" type="submit" data-toast data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Success!" data-toast-message="Your profile updated successfuly.">Update Password</button>
</div>
</div>
</form>
</div>


</div>
</div>
</div>

<script>
  $('#account-confirm-pass').keyup(function(){
      var tt1 = $("#account-confirm-pass").val()
      var tt2 = $("#account-pass").val()
      if (tt1 == tt2) {
        $(".trttt2").html("Confirm Password Matched!");
        $(".trttt1").hide();
      }else if (tt1 != tt2){
        $(".trttt1").html("Confirm Password Not Matched!");
      }else {
        $(".trttt1").hide();
      }
  })
</script>
</script>
</body>
</html>
</div>

            </div>

          </div>

        </div>

      </div>


    </main>

  </div>






<script>

    $('#button-show-and-hide').click();

  $('.pwd').click(function(){
    $('.password_section').show();
    $('.profile_section').hide();
$(".acct").css({ 'background-color' : 'white', 'color' : 'black' });
$(".pwd").css({ 'background-color' : '#38d39f', 'color' : 'white' });
  })

    $('.acct').click(function(){
      $('.password_section').hide();
      $('.profile_section').show();

  $(".pwd").css({ 'background-color' : 'white', 'color' : 'black' });
  $(".acct").css({ 'background-color' : '#38d39f', 'color' : 'white' });
    })
</script>


<?php include_once('footer.php') ?>
<!-- Plugins and scripts required by this views -->



  <script src="<?php echo base_url(); ?>vendors/js/jquery.dataTables.min.js"></script>

  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">

  <script src="<?php echo base_url(); ?>vendors/js/dataTables.bootstrap4.min.js"></script>







  <!-- Custom scripts required by this view -->



  <script src="<?php echo base_url(); ?>js/views/tables.js"></script>



<script type="text/javascript">

    function Validate() {

        var password = document.getElementById("pass1").value;

        var confirmPassword = document.getElementById("pass2").value;

        if (password != confirmPassword) {

            alert("Passwords do not match.");

            return false;

        }

        return true;

    }

</script>

<script type="text/javascript">

  $('.edit').click(function(){

    var id = $(this).attr('data-id');

    $('#editid').val(id);

    var user = $(this).attr('data-user');

    $('#edituser').val(user);

    var email = $(this).attr('data-email');

    $('.editemail').val(email);



    var img = $(this).attr('data-pic');

    $('#editimg').val(img);





  });

</script>

<script type="text/javascript">

  $('#editform').submit(function(evt){

    evt.preventDefault();

    var form = new FormData(this);



      $.ajax({
                type : 'ajax',
                method : 'post',
                data : form,
                dataType : 'json',
                url : '<?php echo base_url() ?>User_list/edit',
                enctype : 'multiple/form-data',
                cache : false,
                contentType : false,
                processData : false,
                success:function(r){
                console.log(r);
                if (r=='updated') {
                location.reload();
                 }
                else if (r=='already') {
                toastr.warning('This email is already in added','Already');
                  }
                else{
                 toastr.error('not updated','Failed');
                 }
                },
                error:function(xhr,status,error){
                 console.log(xhr.responseText);
                    }
          });

    });

</script>

<script type="text/javascript">

  $('.delete').click(function(){

      var id = $(this).attr('data-id');

      $('#deleteid').val(id);

  });

</script>



<script type="text/javascript">

  <?php if (isset($_SESSION['true'])&&$_SESSION['true']=="200") {?>
    toastr.success('Account deleted');
  <?php unset($_SESSION['true']); } if (isset($_SESSION['true'])&&$_SESSION['true']=="199" ) {?>

    toastr.error('Account could not delete','Failed');

    <?php unset($_SESSION['true']);} if(isset($_SESSION['user_updated'])){?>

      toastr.success('<?php echo $_SESSION['user_updated']; ?>');

      <?php unset($_SESSION['user_updated']);} if(isset($_SESSION['added'])){?>

      toastr.success('<?php echo $_SESSION['added']; ?>');

      <?php unset($_SESSION['added']);} if(isset($_SESSION['already'])){?>

      toastr.success('<?php echo $_SESSION['already']; ?>');

      <?php unset($_SESSION['already']);} ?>
</script>
