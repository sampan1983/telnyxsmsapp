<?php
$weekdata = json_decode($weeklyreport);
?>

<?php include('header.php'); ?>

<style>

/*calender*/
.table-cont .header > span.gd{
      pointer-events: none;
}
.table-cont .header {
    padding-top: 2px;
    padding-bottom: 2px;
}
.table-cont{
    text-align: center;
    background-color: #fff;
    margin: 0px auto 0px;
       border: 1px solid #ccc;
    position: relative;
    height: 335px;
}
.table-cont:before,.table-cont:after{
    content: '';
    z-index: -1;
    position: absolute;
    height: 5%;
    width: 20%;
    bottom: 20px;
    left: 6px;
    transform: rotate(-5deg);
    background: #777;
}
.table-cont:after{
    left: auto;
    right: 6px;
    transform: rotate(5deg);
}
.table-cont .header > span {
    padding: 2px 18px;
    color: #14bf89;
    font-size: 24px;
    display: inline-block;
    text-transform: uppercase;
    min-width: 350px;
    font-weight: bolder;
    cursor: pointer;
}
.table-cont .header{
    box-shadow: 0 5px 20px -9px #ccc
    margin-bottom: 10px;
    position: relative;
}
/*.table-cont .header:before{
    content: '';
    background: url(http://creatorvisions.com/img/calendar-spiral.png) top repeat-x;
    position: absolute;;
    width: 100%;
    height: 23px;
    top: -23px;
    left: 0;
}*/
.prev , .next{
    border: none;
    height: 50px;
    background: transparent;
}
.prev:focus,.next:focus{
    outline: none;
}
.prev:before{
    content: '';
    border: solid 9px;
    border-color: transparent #000 transparent transparent;
    display: inline-block;
}
.next:after{
    content: '';
    border: solid 9px;
    border-color: transparent transparent transparent #000;
    display: inline-block;
}
.table-calender table{
    margin-bottom: 0 !important;
}
.table-calender tbody tr td{
    border:none !important;
    padding: 6px !important;
    font-size: 14px;
    text-align: center;
    cursor: pointer;
    color: #aaa;
    width: 14%;
    margin: 0 -2px;
}
.table-calender tbody tr td.nil{
    color: #eee;
}
.table-calender tbody tr td.nil:hover{
    color: #eee;
    background-color: #fff;
}
.table-calender tbody tr td:hover{
    color: #fff;
    background-color: #ccc;
    transition: all .5s;
}
.table-calender thead tr td{
    width: 14%;
    margin: 0 -2px;
    color: #a0a2a2;
    text-align: center;
    border-bottom: solid #ccc;
    padding-bottom:10px !important;
}
.high{
    box-shadow: inset 0 0 20px -3px #ccc;
    color: #1ab5eb;
    font-weight: bold
}
.table-calender table,thead,tbody,th,tr,td{
    display: inline-block;
}
.table-calender table,thead,tbody,th,tr{
    width: 100%;
}
.go-to{
    text-align: center;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
    height: 100%;
    width: 100%;
    background: rgba(0,0,0,0.7);
    display: none;
    padding: 5%;
    transition: cubic-bezier(.87,-.41,.19,1.44) all .5s;
}
.hide{
    display: block !important;
}
.sel-year,.sel-month,.sel-date,.go{
    width: 250px;
    height: 65px;
    text-align: center;
    border: none;
    font-size: 30px;
    text-transform: uppercase;
    padding: 0 30px;
}
.sel-year{

}
.sel-month{
    width: 150px;
}
.sel-date{
    width: 120px;
}
.go{
    background: #1ab5eb;
    color: #fff;
    font-weight: bolder;
}
p.close{
    font-size: 30px;
    font-weight: bolder;
    color: #fff;
    background: #1ab5eb;
    width: 50px;
    height: 50px;
    line-height: 50px;
    position: absolute;
    top:15px;
    right: 15px;
    border-radius: 50%;
    opacity: 1;
    transition: cubic-bezier(.87,-.41,.19,1.44) all .5s;
}
p.close:hover{
    opacity: 1;
    width: 40px;
    height: 40px;
    line-height: 40px;
    right: 25px;
    top:25px;
    background: #fff;
}
.disab:hover{
    color: #fff;
}
.col-sm-12 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
    height: 330px;
}
rect {
    width: 100%;
}
/*calender*/

.calender-space1{
  padding-bottom: 22px;
}
.calender-month{
  padding-left: 0px;
  padding-right: 0px;
}
div#curve_chart div {
    margin-left: -15px;
    margin-top: -10px;
}
div#curve_chart {
    overflow: hidden;
  }
  
  h4.card-title.title2 {
      margin-left: 12px;
  }
</style>

<!DOCTYPE html>
<html>

    <main class="main">









      <!-- Breadcrumb -->



      <ol class="breadcrumb">



        <li class="breadcrumb-item">Home</li>



        <!--li class="breadcrumb-item"><a href="#">Admin</a></li-->



        <li class="breadcrumb-item active">Dashboard</li>



        <!-- Breadcrumb Menu-->







      </ol>







      <div class="container-fluid">







        <div class="animated fadeIn">



          <div class="row">



            <!--div class="col-sm-6 col-lg-3">



              <div class="card postion-for-contant">



                <div class="card-body p-0 clearfix">



                  <i class="fa fa-user bg-primary p-4 px-5 font-2xl mr-3 float-left"></i>



                  <div class="h2 mb-0 pt-3 text-center">0</div>



                  <div class="text-muted text-uppercase font-weight-bold font-xs text-center leads">Total Leads </div>



                </div>



              </div>



            </div-->



            <!--/.col-->







           <div class="col-sm-6 col-lg-3 flexsss">

<a href="<?php echo base_url();?>Clients">

              <div class="card postion-for-contant">


<div class="flexss">
                <div class="card-body p-0 clearfix flexs card-dis">

                  <i class="fa fa-mobile  moblie-padding-dash on-mobile font-2xl float-left"></i>
                 <div class="contact-info">
                 <div class="text-muted text-uppercase font-weight-bold font-xs text-center leads1">Total Contacts</div>

                  <div class="h2 mb-0 pt-3 text-center"><?php if ($data=='No') {

                    echo '0';

                  }

                  else{ echo sizeof($data);} ?>
                  <div class="text-center current">contact</div></div>
                </div>
</div>
</div>





              </div>

</a>

            </div>



            <!--/.col-->







            <div class="col-sm-6 col-lg-3 flexsss">

<a href="<?php echo base_url(); ?>Received_messages_new">

              <div class="card postion-for-contant">


<div class="flexss">
                <div class="card-body p-0 clearfix card-dis ">
                <i class="icon-envelope moblie-padding-dash font-2xl float-left"></i>
                <div class="contact-info">
                   <div class="text-muted text-uppercase font-weight-bold font-xs text-center leads1">Received SMS</div>
                <div class="h2 mb-0 pt-3 text-center"><?php echo count($Received_messages_new); ?><br> <div class="text-center current">Current Day</div></div>
              </div>
</div>
</div>



              </div>

</a>

            </div>



            <!--/.col-->



<?php

$total_message_report = $sent_msg_log+$failed_numbers+$pending_numbers;



if ($total_message_report==0) {

    $total_message_report = 1;

}

    $total_message_delivered_percentage = ($sent_msg_log/$total_message_report)*100;

    $total_message_failed_percentage = ($failed_numbers/$total_message_report)*100;

    $total_message_pending_percentage = ($pending_numbers/$total_message_report)*100;



?>





            <div class="col-sm-6 col-lg-3 flexsss">

<a href="<?php echo base_url(); ?>Sent_messages">

              <div class="card postion-for-contant">


<div class="flexss">
                <div class="card-body p-0 clearfix card-dis ">
                 <i class="fa fa-bell moblie-padding-dash font-2xl float-left"></i>
                  <div class="contact-info">
                    <div class="text-muted text-uppercase font-weight-bold font-xs text-center leads4">Sent SMS</div>
                  <div class="h2 mb-0 pt-3 text-center"><?php echo ($sent_msg_log); ?> <br> <div class="text-center current">Current Day</div></div>
                   </div>
                  </div>
</div>

              </div>

</a>

            </div>



            <div class="col-sm-6 col-lg-3 flexsss">

<a href="<?php echo base_url(); ?>Contacts">

              <div class="card postion-for-contant">

<div class="flexss">

                <div class="card-body p-0 clearfix card-dis ">
                 <i class="icon-user-follow moblie-padding-dash  font-2xl float-left"></i>
                  <div class="contact-info">
                   <div class="text-muted text-uppercase font-weight-bold font-xs text-center leads4">Sent SMS</div>
                  <div class="h2 mb-0 pt-3 text-center"><?php echo '0'; ?><br><div class="text-center current">Client</div></div>

</div>
</div>


              </div>

</a>

            </div>

            <!--/.col-->



          </div>










            <!--/.col-->



          </div>











          <!--/.row-->



          <div class="row">



            <div class="col-lg-4">



              <div class="card smss">



                <div class="card-body calender-space calender-space1">



                  <div class="row">



                    <!--div class="col-sm-8">



                      <h4 class="card-title">Traffic</h4>



                      <p class="text-muted">Graph representation of Message </p>



                      <br>



                      <div class="chart-wrapper" style="height:250px;margin-top:20px;">



                        <canvas id="main-chart" height="250"></canvas>



                      </div>



                    </div-->






                    <div class="col-sm-12">



                      <h4 class="card-title">CURRENT DAY SMS REPORT</h4>



                     <!--  <p class="text-muted">Status Of Current Day</p> -->



                     <hr>



                      <br>

<a href="<?php echo base_url(); ?>Sent_messages" style="color:black">

                      <div>Delivered(<?php echo ($sent_msg_log);?>)</div>



                      <div class="">



                       <?php echo round($total_message_delivered_percentage,2);?>%



                      </div>

</a>

                      <div class="progress progress-sm mt-2 mb-3">



                        <div class="progress-bar bg-success" style="width: <?php echo $total_message_delivered_percentage;?>%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>



                      </div>

</a>

<a href="<?php echo base_url(); ?>Failed_numbers"style="color:black">

                      <div>Failed Messages(<?php echo ($failed_numbers); ?>)</div>



                      <div class="">



                        <?php echo round($total_message_failed_percentage,2);?>%



                      </div>



                      <div class="progress progress-sm mt-2 mb-3">



                        <div class="progress-bar bg-info" style="width: <?php echo round($total_message_failed_percentage,2);?>%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>



                      </div>

</a>



<a href="<?php echo base_url(); ?>Pending_numbers"style="color:black">

                      <div>Pending Messages(<?php echo($pending_numbers);?>)</div>



                      <div class="">



                        <?php echo round($total_message_pending_percentage,2);?>%



                      </div>



                    <div class="progress progress-sm mt-2 mb-3">



                        <div class="progress-bar bg-warning" style="width: <?php echo round($total_message_pending_percentage,2);?>%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>



                      </div>

</a>



</div>










                  </div>





                </div>



              </div>



              <!--/.card-->



            </div>


<!-- ---------------------------------------------------------------- -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

            <div class="col-lg-8">

              <div class="card smss">
                <div class="card-body calender-space">
                  <div class="row">
                    <div class="col-sm-12 calender-month">

                      <h4 class="card-title title2">Weekly Report </h4>
                     <hr>
<div id="curve_chart"  style="height: 300px;" >

</div>



<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Week', 'Delivered', 'Failed','Received'],
        ['Sun',  <?php print_r($weekdata[0]->Sun); ?>, <?php print_r($weekdata[1]->Sun); ?>, <?php print_r($weekdata[2]->Sun); ?>],
        ['Mon',  <?php print_r($weekdata[0]->Mon); ?>, <?php print_r($weekdata[1]->Mon); ?>, <?php print_r($weekdata[2]->Mon); ?>],
        ['Tues',  <?php print_r($weekdata[0]->Tue); ?>, <?php print_r($weekdata[1]->Tue); ?>, <?php print_r($weekdata[2]->Tue); ?>],
        ['Wed',  <?php print_r($weekdata[0]->Wed); ?>, <?php print_r($weekdata[1]->Wed); ?>, <?php print_r($weekdata[2]->Wed); ?>],
        ['Thur',  <?php print_r($weekdata[0]->Thu); ?>, <?php print_r($weekdata[1]->Thu); ?>, <?php print_r($weekdata[2]->Thu); ?>],
        ['Fri',  <?php print_r($weekdata[0]->Fri); ?>, <?php print_r($weekdata[1]->Fri); ?>, <?php print_r($weekdata[2]->Fri); ?>],
        ['Sat',  <?php print_r($weekdata[0]->Sat); ?>, <?php print_r($weekdata[1]->Sat); ?>, <?php print_r($weekdata[2]->Sat); ?>]
      ]);

      var options = {
        title: 'Messages Weekly Status',
        curveType: 'function',
        legend: { position: 'bottom' }
      };

      var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

      chart.draw(data, options);
    }

</script>



                      </div>

                  </div>

                </div>

              </div>
            </div>

<!-- <div class="col-lg-6">
  <div class="table-cont">
    <div class="header">
      <button class="prev"></button>
      <span class="gd"></span>
      <button class="next"></button>
    </div>
    <table class="table table-calender">
      <thead>
        <tr>
          <td>SUN</td>
          <td>MON</td>
          <td>TUE</td>
          <td>WED</td>
          <td>THU</td>
          <td>FRI</td>
          <td>SAT</td>
        </tr>
      </thead>
      <tbody>
        <tr class="row-1">
          <td class="b-0">&nbsp;</td>
          <td class="b-1">&nbsp;</td>
          <td class="b-2">&nbsp;</td>
          <td class="b-3">&nbsp;&nbsp;</td>
          <td class="b-4">&nbsp;</td>
          <td class="b-5">&nbsp;</td>
          <td class="b-6">&nbsp;</td>
          <td class="b-7">&nbsp;</td>
          <td class="b-8">&nbsp;</td>
          <td class="b-9">&nbsp;</td>
          <td class="b-10">&nbsp;</td>
          <td class="b-11">&nbsp;</td>
          <td class="b-12">&nbsp;</td>
          <td class="b-13">&nbsp;</td>
          <td class="b-14">&nbsp;</td>
          <td class="b-15">&nbsp;</td>
          <td class="b-16">&nbsp;</td>
          <td class="b-17">&nbsp;</td>
          <td class="b-18">&nbsp;</td>
          <td class="b-19">&nbsp;</td>
          <td class="b-20">&nbsp;</td>
          <td class="b-21">&nbsp;</td>
          <td class="b-22">&nbsp;</td>
          <td class="b-23">&nbsp;</td>
          <td class="b-24">&nbsp;</td>
          <td class="b-25">&nbsp;</td>
          <td class="b-26">&nbsp;</td>
          <td class="b-27">&nbsp;</td>
          <td class="b-28">&nbsp;</td>
          <td class="b-29">&nbsp;</td>
          <td class="b-30">&nbsp;</td>
          <td class="b-31">&nbsp;</td>
          <td class="b-32">&nbsp;</td>
          <td class="b-33">&nbsp;</td>
          <td class="b-34">&nbsp;</td>
          <td class="b-35">&nbsp;</td>
          <td class="b-36">&nbsp;</td>
          <td class="b-37">&nbsp;</td>
          <td class="b-38">&nbsp;</td>
          <td class="b-39">&nbsp;</td>
          <td class="b-40">&nbsp;</td>
          <td class="b-41">&nbsp;</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="go-to">
    <input class="sel-year" placeholder="yyyy"></input>
    <select class="sel-month">
      <option value="0">Jan</option>
      <option value="1">Feb</option>
      <option value="2">Mar</option>
      <option value="3">Apr</option>
      <option value="4">May</option>
      <option value="5">Jun</option>
      <option value="6">Jul</option>
      <option value="7">Aug</option>
      <option value="8">Sep</option>
      <option value="9">Oct</option>
      <option value="10">Nov</option>
      <option value="11">Dec</option>
    </select>
    <select class="sel-date">
    </select>
    <button class="go">GO</button>
    <p class="close">X</p>
  </div>
  <p class="d1"></p>
  <p class="d2"></p>
  <p class="d3"></p>
  <p class="d4"></p>
            </div> -->
          </div>
        </div>


                    </div>

            <!--/.col-->







            <!--/.col-->



          </div>



          <!--/.row-->

<script type="text/javascript">
  $(document).ready(function(){
      var stuff = new Date();
      var day = stuff.getDay();
      var date = stuff.getDate();
      var month = stuff.getMonth();
      var year = stuff.getFullYear();
      var v = date%7;
      var fom;
      var setday;
      var i=month;
      var monthname = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
      var nod = [31,28,31,30,31,30,31,31,30,31,30,31];
      var chep = ['Sunday', 'Monday', 'Tuesday', 'Wednessday', 'Thursday', 'Friday', 'Saturday']

      /*-------------------------------------------------------------*/

      $('.header > span').text(monthname[i] + ' - ' + year);

      /*-------------------------------------------------------------*/

      var sampday = day;
      if (sampday<v && sampday!=0){
        fom = (8+sampday) - v;
      }
      else if (sampday>v && sampday!=0){
        fom = (sampday-v)+1;
      }
      else{
        fom=(8-v)%7;
      };

      var cfom = fom;

      /*-------------------------------------------------------------*/


      var setday=1;
      if (year%4==0) {
        nod[1]=29;
      }
      else{
        nod[1]=28;
      };
      for (fom; fom <= ((cfom-1)+nod[month]); fom++){
        $('tr.row-1'+ ' ' + 'td.b-' + fom).text(setday);
        setday++;
      }

      /*-------------------------------------------------------------*/

      $('.next').click(function (){
        // feb month in leap year
        if (year%4==0) {
          nod[1]=29;
        }
        else{
          nod[1]=28;
        };
        // first of month
        fom = (cfom + (nod[month])%7)%7;
        // month
        if (month<11) {
          month++;
        }
        else{
          month = 0;
        };

        cfom = fom;
        setday=1;
        //  year

        if (i<11) {
          i++;
        }
        else{
          i=0;
          year++;
        };

        $('.header > span').text(monthname[i] + ' - ' + year);
        for (setday; setday <= nod[month]; setday++){
          $('tr.row-1'+ ' ' + 'td.b-' + fom).text(setday);
          fom++;
        }
        $('td.b-' + (fom-1)).nextAll().html('&nbsp;');
        fom = nod[month]+1;
        $('td.b-' + cfom).prevAll().html('&nbsp;');

        $("td").removeClass("high");
      });

      /*-------------------------------------------------------------*/

      $('.prev').click(function (){
        // feb month in leap year
        if (year%4==0) {
          nod[1]=29;
        }
        else{
          nod[1]=28;
        };
        setday=1;

        //month
        if (month!=0) {
          month--;
        }
        else{
          month = 11;
        }

        // first of month
        var edate;
        var eday;
        var n;
        edate = nod[month];

        if (cfom!=0) {
          eday = cfom-1;
        }
        else{
          eday = 6;
        }
        n = edate%7;
        if (eday>=n && eday!=0) {
          fom=eday-(n-1);
        }
        else if (eday<n && eday!=0) {
          fom=n-(eday+1);
          if (n==3 && eday==1) {
            fom=6;
          }
        }
        else{
          fom=(8-n)%7;
        }
        cfom=fom;

        if (i>0) {
          i--;
        }
        else{
          i=11;
          year--;
        }
        $('.header > span').text(monthname[i] + ' - ' + year);
        for (fom; fom <= ((cfom-1)+nod[month]); fom++){
          $('tr.row-1'+ ' ' + 'td.b-' + fom).text(setday);
          setday++;
        }

        $('td.b-' + cfom).prevAll().html('&nbsp;');
        $('td.b-' + (fom-1)).nextAll().html('&nbsp;');
        fom = nod[month]+1;
        $("td").removeClass("high");
      });

      /*-------------------------------------------------------------*/

      //$("td:contains('" + date + "')").addClass("high");
      $("td:contains('" + date + "')").filter(function() {return $(this).text() == date;}).addClass('high')
      $('td').click(function(){
        $(this).addClass('high').siblings().removeClass('high');
      });


      /*-------------------------------------------------------------*/

      $(".gd").click(function() {
        $(".go-to").addClass('hide');
      });
      $(".close").click(function() {
        $(".go-to").removeClass('hide');
      });

      /*-------------------------------------------------------------*/
      var gomonth;
      var godate;
      $(".sel-month").mouseleave(function() {
        gomonth = $( '.sel-month' ).val();
        if ($('.sel-date').children().length == 0){
          $('.sel-date').children().remove();
          for (var s = 1; s <= nod[gomonth]; s++) {
            $('.sel-date').append('<option value=' + s + '>' + s + '</option>');
          }
        }
      });
      $(".sel-date").mouseleave(function() {
        godate = $('.sel-date').val();
      });

      $(".go").click(function() {
        year = $('.sel-year').val();
        month = gomonth;
        date = godate;
        var newdate = new Date(year,month,date);
        var newday = newdate.getDay();
        $(".go-to").removeClass('hide');
        var sampday = newday;
        v=godate%7;
        if (sampday>=v && sampday!=0) {
          fom=sampday-(v-1);
        }
        else if (sampday<v && sampday!=0) {
          fom=v-(sampday+1);
          if (v==3 && sampday==1) {
            fom=6;
          }
        }
        else{
          fom=(8-v)%7;
        }

        var cfom = fom;
        i=gomonth;
        var setday=1;
        if (year%4==0) {
          nod[1]=29;
        }
        else{
          nod[1]=28;
        }
        for (fom; fom <= ((cfom-1)+nod[month]); fom++){
          $('tr.row-1'+ ' ' + 'td.b-' + fom).text(setday);
          setday++;
        }

        $('td.b-' + cfom).prevAll().html('&nbsp;');
        $('td.b-' + (fom-1)).nextAll().html('&nbsp;');
        $('.header > span').text(monthname[i] + ' - ' + year);
        $.expr[':'].textEquals = $.expr.createPseudo(function(arg) {
          return function( elem ) {
            return $(elem).text().match("^" + arg + "$");
          };
        });

        $("td").removeClass("high");
        $("td:textEquals('" + godate + "')").addClass("high");
        $('.d1').text(cfom);
        $('.d2').text(fom);
      });
    });
</script>













          <!--/.row-->



      <!--   </div> -->




       <!-- <div class="row charts">
            <div class="col-lg-9">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-8">
                      <h4 class="card-title">Traffic</h4>
                      <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      <br>
                      <div class="chart-wrapper" style="height:250px;margin-top:20px;"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                        <canvas id="main-chart" height="312" width="702" class="chartjs-render-monitor" style="display: block; height: 250px; width: 562px;"></canvas>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <h4 class="card-title">Details</h4>
                      <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                      <br>
                      <div>Visits (40% - 29.703 Users)</div>
                      <div class="progress progress-sm mt-2 mb-3">
                        <div class="progress-bar bg-success" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>

                      <div>Unique (20% - 24.093 Unique Users)</div>
                      <div class="progress progress-sm mt-2 mb-3">
                        <div class="progress-bar bg-info" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>

                      <div>Pageviews (60% - 78.706 Views)</div>
                      <div class="progress progress-sm mt-2 mb-3">
                        <div class="progress-bar bg-warning" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div>New Users (80% - 22.123 Users)</div>
                      <div class="progress progress-sm mt-2 mb-3">
                        <div class="progress-bar bg-danger" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>

                      <div>Bounce Rate (40.15%)</div>
                      <div class="progress progress-sm mt-2 mb-3">
                        <div class="progress-bar bg-success" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
              <!--/.card-->
            <!-- </div> -->
            <!--/.col-->

            <!--/.col-->
         <!--  </div> -->





          <!--  <div class="row">
            <div class="col-md-6">
              <div class="row">
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="h1 text-muted text-right mb-4">
                        <i class="icon-people"></i>
                      </div>
                      <div class="h4 mb-0">87.500</div>
                      <small class="text-muted text-uppercase font-weight-bold">Visitors</small>
                      <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.col -->
                <!-- <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="h1 text-muted text-right mb-4">
                        <i class="icon-user-follow"></i>
                      </div>
                      <div class="h4 mb-0">385</div>
                      <small class="text-muted text-uppercase font-weight-bold">New Clients</small>
                      <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
                /.col
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="h1 text-muted text-right mb-4">
                        <i class="icon-basket-loaded"></i>
                      </div>
                      <div class="h4 mb-0">1238</div>
                      <small class="text-muted text-uppercase font-weight-bold">Products sold</small>
                      <div class="progress progress-xs mt-3 mb-0">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div> -->
                <!-- </div> -->
                <!--/.col
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <div class="card-title text-center h6 mt-3">
                        Revenue
                      </div>
                      <div class="gaugejs-wrap">
                        <canvas id="gauge1" class="gaugejs" height="148" width="297" style="width: 238px; height: 119px;"></canvas>
                      </div>
                    </div>
                    <div class="card-footer">
                      <strong>$11.234,00</strong>
                      <span class="float-right"><i class="fa fa-arrow-circle-o-up text-success"></i> 15%</span>
                    </div>
                  </div>
                </div>
                <!--/.col-->
                <!-- <div class="col-md-6">
                  <div class="card">
                    <div class="card-body">
                      <div class="card-title text-center h6 mt-3">
                        Profit
                      </div>
                      <div class="gaugejs-wrap">
                        <canvas id="gauge2" class="gaugejs" height="148" width="297" style="width: 238px; height: 119px;"></canvas>
                      </div>
                    </div>
                    <div class="card-footer">
                      <strong>$3.733,00</strong>
                      <span class="float-right"><i class="fa fa-arrow-circle-o-down text-danger"></i> -25%</span>
                    </div>
                  </div>
                </div> -->
                <!--/.col-->
              <!-- </div> -->
              <!--/.row-->
            <!-- </div> -->
            <!--/.col-->
            <!-- <div class="col-md-6">
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      Demographic
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6 text-info text-right">
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>
                          <i class="fa fa-male" style="width:12px;"></i>

                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-male" style="width:12px;opacity: 0.25"></i>

                        </div>
                        <!--/col-->
                       <!--  <div class="col-md-6 text-warning">
                          <i class="fa fa-female" style="width:12px;"></i>

                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                          <i class="fa fa-female" style="width:12px;opacity: 0.25"></i>
                        </div> -->
                        <!--/.col-->
                      <!-- </div> -->
                      <!--/.row-->
                    <!-- </div>
                  </div>
                </div> -->
                <!--/.col-->
               <!--  <div class="col-sm-6">
                  <div class="card">
                    <div class="card-header text-white bg-info">
                      <div class="font-weight-bold">
                        <span>SALE</span>
                        <span class="float-right">$1.890,65</span>
                      </div>
                      <div>
                        <span>
                          <small>Today 6:43 AM</small>
                        </span>
                        <span class="float-right">
                          <small>+432,50 (15,78%)</small>
                        </span>
                      </div>
                      <div class="chart-wrapper" style="height:38px;"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                        <canvas class="chart-7 chart chart-line chartjs-render-monitor" height="47" width="297" style="display: block; height: 38px; width: 238px;"></canvas>
                      </div>
                      <div class="chart-wrapper" style="height:38px;"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                        <canvas class="chart-8 chart chart-bar chartjs-render-monitor" height="47" width="297" style="display: block; height: 38px; width: 238px;"></canvas>
                      </div>
                    </div>
                    <div class="card-body py-3 px-4">
                      <div class="row">
                        <div class="col-5">
                          <strong>+$780,98</strong>
                          <br>
                          <span class="text-muted">
                            <small>Weekly change</small>
                          </span>
                        </div>
                        <div class="col-7 p-0">
                          <div class="chart-wrapper" style="height:44px;"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                            <canvas class="chart-9 chart chart-bar chartjs-render-monitor" height="55" style="margin-top: -4px; display: block; height: 44px; width: 152px;" width="190"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body py-0 px-4 b-t-1">
                      <div class="row">
                        <div class="col-6 b-r-1 py-3">
                          <div class="font-weight-bold">9.127</div>
                          <div class="text-muted">
                            <small>Deals</small>
                          </div>
                        </div>
                        <div class="col-6 py-3 text-right">
                          <div class="font-weight-bold">$189.783,87</div>
                          <div class="text-muted">
                            <small>Total Income</small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-header text-white bg-success">
                      <div class="font-weight-bold">
                        <span>SALE</span>
                        <span class="float-right">$1.890,65</span>
                      </div>
                      <div>
                        <span>
                          <small>Today 6:43 AM</small>
                        </span>
                        <span class="float-right">
                          <small>+432,50 (15,78%)</small>
                        </span>
                      </div>
                      <div class="chart-wrapper" style="height:38px;"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                        <canvas class="chart-7-2 chart chart-line chartjs-render-monitor" height="47" width="297" style="display: block; height: 38px; width: 238px;"></canvas>
                      </div>
                      <div class="chart-wrapper" style="height:38px;"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                        <canvas class="chart-8-2 chart chart-bar chartjs-render-monitor" height="47" width="297" style="display: block; height: 38px; width: 238px;"></canvas>
                      </div>
                    </div>
                    <div class="card-body py-3 px-4">
                      <div class="row">
                        <div class="col-5">
                          <strong>+$780,98</strong>
                          <br>
                          <span class="text-muted">
                            <small>Weekly change</small>
                          </span>
                        </div>
                        <div class="col-7 p-0">
                          <div class="chart-wrapper" style="height:44px;"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                            <canvas class="chart-9-2 chart chart-bar chartjs-render-monitor" height="55" style="margin-top: -4px; display: block; height: 44px; width: 152px;" width="190"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body py-0 px-4 b-t-1">
                      <div class="row">
                        <div class="col-6 b-r-1 py-3">
                          <div class="font-weight-bold">9.127</div>
                          <div class="text-muted">
                            <small>Deals</small>
                          </div>
                        </div>
                        <div class="col-6 py-3 text-right">
                          <div class="font-weight-bold">$189.783,87</div>
                          <div class="text-muted">
                            <small>Total Income</small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
              <!--/.row-->
            <!-- </div> -->
            <!--/.col-->
          <!-- </div> -->




         <!--  <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-5">
                      <h3 class="card-title clearfix mb-0">Traffic &amp; Sales</h3>
                    </div>
                    <div class="col-sm-7">
                      <button type="button" class="btn btn-outline-primary float-right ml-3"><i class="icon-cloud-download"></i> &nbsp; Download</button>
                      <fieldset class="form-group float-right">
                        <div class="input-group float-right" style="width:240px;">
                          <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                          <input name="daterange" class="form-control date-picker" type="text">
                        </div>
                      </fieldset>
                    </div>
                  </div>
                  <hr class="m-0">
                  <div class="row">
                    <div class="col-sm-12 col-lg-4">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="callout callout-info">
                            <small class="text-muted">New Clients</small>
                            <br>
                            <strong class="h4">9,123</strong>
                            <div class="chart-wrapper"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                              <canvas id="sparkline-chart-1" width="103" height="30" class="chartjs-render-monitor" style="display: block; height: 24px; width: 83px;"></canvas>
                            </div>
                          </div>
                        </div>
                        <--/.col-->
                        <!-- <div class="col-sm-6">
                          <div class="callout callout-danger">
                            <small class="text-muted">Recuring Clients</small>
                            <br>
                            <strong class="h4">22,643</strong>
                            <div class="chart-wrapper"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                              <canvas id="sparkline-chart-2" width="103" height="30" class="chartjs-render-monitor" style="display: block; height: 24px; width: 83px;"></canvas>
                            </div>
                          </div>
                        </div> -->
                        <!--/.col-->
                      <!-- </div> -->
                      <!--/.row-->
                      <!-- <hr class="mt-0">
                      <ul class="horizontal-bars">
                        <li>
                          <div class="title">
                            Monday
                          </div>
                          <div class="bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 34%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="title">
                            Tuesday
                          </div>
                          <div class="bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="title">
                            Wednesday
                          </div>
                          <div class="bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="title">
                            Thursday
                          </div>
                          <div class="bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 91%" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="title">
                            Friday
                          </div>
                          <div class="bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="title">
                            Saturday
                          </div>
                          <div class="bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 53%" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="title">
                            Sunday
                          </div>
                          <div class="bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 9%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 69%" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                        <li class="legend">
                          <span class="badge badge-pill badge-info"></span>
                          <small>New clients</small> &nbsp;
                          <span class="badge badge-pill badge-danger"></span>
                          <small>Recurring clients</small>
                        </li>
                      </ul>
                    </div> -->
                    <!--/.col-->
                   <!--  <div class="col-sm-6 col-lg-4">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="callout callout-warning">
                            <small class="text-muted">Pageviews</small>
                            <br>
                            <strong class="h4">78,623</strong>
                            <div class="chart-wrapper"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                              <canvas id="sparkline-chart-3" width="103" height="30" class="chartjs-render-monitor" style="display: block; height: 24px; width: 83px;"></canvas>
                            </div>
                          </div>
                        </div> -->
                        <!--/.col-->
                        <!-- <div class="col-sm-6">
                          <div class="callout callout-success">
                            <small class="text-muted">Organic</small>
                            <br>
                            <strong class="h4">49,123</strong>
                            <div class="chart-wrapper"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                              <canvas id="sparkline-chart-4" width="103" height="30" class="chartjs-render-monitor" style="display: block; height: 24px; width: 83px;"></canvas>
                            </div>
                          </div>
                        </div> -->
                        <!--/.col-->
                      <!-- </div> -->
                      <!--/.row-->
                      <!-- <hr class="mt-0">
                      <ul class="horizontal-bars type-2">
                        <li>
                          <i class="icon-user"></i>
                          <span class="title">Male</span>
                          <span class="value">43%</span>
                          <div class="bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <i class="icon-user-female"></i>
                          <span class="title">Female</span>
                          <span class="value">37%</span>
                          <div class="bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                          <i class="icon-globe"></i>
                          <span class="title">Organic Search</span>
                          <span class="value">191,235
                            <span class="text-muted small">(56%)</span>
                          </span>
                          <div class="bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <i class="icon-social-facebook"></i>
                          <span class="title">Facebook</span>
                          <span class="value">51,223
                            <span class="text-muted small">(15%)</span>
                          </span>
                          <div class="bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <i class="icon-social-twitter"></i>
                          <span class="title">Twitter</span>
                          <span class="value">37,564
                            <span class="text-muted small">(11%)</span>
                          </span>
                          <div class="bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 11%" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <i class="icon-social-linkedin"></i>
                          <span class="title">LinkedIn</span>
                          <span class="value">27,319
                            <span class="text-muted small">(8%)</span>
                          </span>
                          <div class="bars">
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 8%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                        <li class="divider text-center">
                          <button type="button" class="btn btn-sm btn-link text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="show more"><i class="icon-options"></i></button>
                        </li>
                      </ul>
                    </div> -->
                    <!--/.col-->
                    <!-- <div class="col-sm-6 col-lg-4">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="callout">
                            <small class="text-muted">CTR</small>
                            <br>
                            <strong class="h4">23%</strong>
                            <div class="chart-wrapper"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                              <canvas id="sparkline-chart-5" width="103" height="30" class="chartjs-render-monitor" style="display: block; height: 24px; width: 83px;"></canvas>
                            </div>
                          </div>
                        </div> -->
                        <!--/.col-->
                       <!--  <div class="col-sm-6">
                          <div class="callout callout-primary">
                            <small class="text-muted">Bounce Rate</small>
                            <br>
                            <strong class="h4">5%</strong>
                            <div class="chart-wrapper"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                              <canvas id="sparkline-chart-6" width="103" height="30" class="chartjs-render-monitor" style="display: block; height: 24px; width: 83px;"></canvas>
                            </div>
                          </div>
                        </div> -->
                        <!--/.col-->
                      <!-- </div> -->
                      <!--/.row-->
                      <!-- <hr class="mt-0">
                      <ul class="icons-list">
                        <li>
                          <i class="icon-screen-desktop bg-primary"></i>
                          <div class="desc">
                            <div class="title">iMac 4k</div>
                            <small>Lorem ipsum dolor sit amet</small>
                          </div>
                          <div class="value">
                            <div class="small text-muted">Sold this week</div>
                            <strong>1.924</strong>
                          </div>
                          <div class="actions">
                            <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>
                          </div>
                        </li>
                        <li>
                          <i class="icon-screen-smartphone bg-info"></i>
                          <div class="desc">
                            <div class="title">Samsung Galaxy Edge</div>
                            <small>Lorem ipsum dolor sit amet</small>
                          </div>
                          <div class="value">
                            <div class="small text-muted">Sold this week</div>
                            <strong>1.224</strong>
                          </div>
                          <div class="actions">
                            <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>
                          </div>
                        </li>
                        <li>
                          <i class="icon-screen-smartphone bg-warning"></i>
                          <div class="desc">
                            <div class="title">iPhone 6S</div>
                            <small>Lorem ipsum dolor sit amet</small>
                          </div>
                          <div class="value">
                            <div class="small text-muted">Sold this week</div>
                            <strong>1.163</strong>
                          </div>
                          <div class="actions">
                            <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>
                          </div>
                        </li>
                        <li>
                          <i class="icon-user bg-danger"></i>
                          <div class="desc">
                            <div class="title">Premium accounts</div>
                            <small>Lorem ipsum dolor sit amet</small>
                          </div>
                          <div class="value">
                            <div class="small text-muted">Sold this week</div>
                            <strong>928</strong>
                          </div>
                          <div class="actions">
                            <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>
                          </div>
                        </li>
                        <li>
                          <i class="icon-social-spotify bg-success"></i>
                          <div class="desc">
                            <div class="title">Spotify Subscriptions</div>
                            <small>Lorem ipsum dolor sit amet</small>
                          </div>
                          <div class="value">
                            <div class="small text-muted">Sold this week</div>
                            <strong>893</strong>
                          </div>
                          <div class="actions">
                            <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>
                          </div>
                        </li>
                        <li>
                          <i class="icon-cloud-download bg-danger"></i>
                          <div class="desc">
                            <div class="title">Ebook</div>
                            <small>Lorem ipsum dolor sit amet</small>
                          </div>
                          <div class="value">
                            <div class="small text-muted">Downloads</div>
                            <strong>121.924</strong>
                          </div>
                          <div class="actions">
                            <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>
                          </div>
                        </li>
                        <li>
                          <i class="icon-camera bg-warning"></i>
                          <div class="desc">
                            <div class="title">Photos</div>
                            <small>Lorem ipsum dolor sit amet</small>
                          </div>
                          <div class="value">
                            <div class="small text-muted">Uploaded</div>
                            <strong>12.125</strong>
                          </div>
                          <div class="actions">
                            <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>
                          </div>
                        </li>
                        <li class="divider text-center">
                          <button type="button" class="btn btn-sm btn-link text-muted" data-toggle="tooltip" data-placement="top" title="show more"><i class="icon-options"></i></button>
                        </li>
                      </ul>
                    </div> -->
                    <!--/.col-->
                  <!-- </div> -->

                  <!--/.row-->
                  <!-- <br>
                  <table class="table table-responsive-sm table-hover table-outline mb-0">
                    <thead class="thead-light">
                      <tr>
                        <th class="text-center"><i class="icon-people"></i></th>
                        <th>User</th>
                        <th class="text-center">Country</th>
                        <th>Usage</th>
                        <th class="text-center">Payment Method</th>
                        <th>Activity</th>
                        <th class="text-center">Satisfaction</th>
                        <th class="text-center"><i class="icon-settings"></i></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">
                          <div class="avatar">
                            <img src="img/avatars/1.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-success"></span>
                          </div>
                        </td>
                        <td>
                          <div>Yiorgos Avraamu</div>
                          <div class="small text-muted">
                            <span>New</span> | Registered: Jan 1, 2015
                          </div>
                        </td>
                        <td class="text-center">
                          <img src="img/flags/USA.png" alt="USA" style="height:24px;">
                        </td>
                        <td>
                          <div class="clearfix">
                            <div class="float-left">
                              <strong>50%</strong>
                            </div>
                            <div class="float-right">
                              <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                            </div>
                          </div>
                          <div class="progress progress-xs">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-center">
                          <i class="fa fa-cc-mastercard" style="font-size:24px"></i>
                        </td>
                        <td>
                          <div class="small text-muted">Last login</div>
                          <strong>10 sec ago</strong>
                        </td>
                        <td class="text-center">
                          <div class="gaugejs-wrap sparkline" style="width:34px;height:34px">
                            <canvas id="gauge-1" width="42" height="42" style="width: 34px; height: 34px;"></canvas>
                            <span class="value">48%</span>
                          </div>
                        </td>
                        <td class="text-center">
                          <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <div class="avatar">
                            <img src="img/avatars/2.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-danger"></span>
                          </div>
                        </td>
                        <td>
                          <div>Avram Tarasios</div>
                          <div class="small text-muted">

                            <span>Recurring</span> | Registered: Jan 1, 2015
                          </div>
                        </td>
                        <td class="text-center">
                          <img src="img/flags/Brazil.png" alt="Brazil" style="height:24px;">
                        </td>
                        <td>
                          <div class="clearfix">
                            <div class="float-left">
                              <strong>10%</strong>
                            </div>
                            <div class="float-right">
                              <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                            </div>
                          </div>
                          <div class="progress progress-xs">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-center">
                          <i class="fa fa-cc-visa" style="font-size:24px"></i>
                        </td>
                        <td>
                          <div class="small text-muted">Last login</div>
                          <strong>5 minutes ago</strong>
                        </td>
                        <td class="text-center">
                          <div class="gaugejs-wrap sparkline" style="width:34px;height:34px">
                            <canvas id="gauge-2" width="42" height="42" style="width: 34px; height: 34px;"></canvas>
                            <span class="value">61%</span>
                          </div>
                        </td>
                        <td class="text-center">
                          <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <div class="avatar">
                            <img src="img/avatars/3.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-warning"></span>
                          </div>
                        </td>
                        <td>
                          <div>Quintin Ed</div>
                          <div class="small text-muted">
                            <span>New</span> | Registered: Jan 1, 2015
                          </div>
                        </td>
                        <td class="text-center">
                          <img src="img/flags/India.png" alt="India" style="height:24px;">
                        </td>
                        <td>
                          <div class="clearfix">
                            <div class="float-left">
                              <strong>74%</strong>
                            </div>
                            <div class="float-right">
                              <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                            </div>
                          </div>
                          <div class="progress progress-xs">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 74%" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-center">
                          <i class="fa fa-cc-stripe" style="font-size:24px"></i>
                        </td>
                        <td>
                          <div class="small text-muted">Last login</div>
                          <strong>1 hour ago</strong>
                        </td>
                        <td class="text-center">
                          <div class="gaugejs-wrap sparkline" style="width:34px;height:34px">
                            <canvas id="gauge-3" width="42" height="42" style="width: 34px; height: 34px;"></canvas>
                            <span class="value">33%</span>
                          </div>
                        </td>
                        <td class="text-center">
                          <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <div class="avatar">
                            <img src="img/avatars/4.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-light"></span>
                          </div>
                        </td>
                        <td>
                          <div>Enéas Kwadwo</div>
                          <div class="small text-muted">
                            <span>New</span> | Registered: Jan 1, 2015
                          </div>
                        </td>
                        <td class="text-center">
                          <img src="img/flags/France.png" alt="France" style="height:24px;">
                        </td>
                        <td>
                          <div class="clearfix">
                            <div class="float-left">
                              <strong>98%</strong>
                            </div>
                            <div class="float-right">
                              <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                            </div>
                          </div>
                          <div class="progress progress-xs">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-center">
                          <i class="fa fa-paypal" style="font-size:24px"></i>
                        </td>
                        <td>
                          <div class="small text-muted">Last login</div>
                          <strong>Last month</strong>
                        </td>
                        <td class="text-center">
                          <div class="gaugejs-wrap sparkline" style="width:34px;height:34px">
                            <canvas id="gauge-4" width="42" height="42" style="width: 34px; height: 34px;"></canvas>
                            <span class="value">23%</span>
                          </div>
                        </td>
                        <td class="text-center">
                          <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <div class="avatar">
                            <img src="img/avatars/5.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-success"></span>
                          </div>
                        </td>
                        <td>
                          <div>Agapetus Tadeáš</div>
                          <div class="small text-muted">
                            <span>New</span> | Registered: Jan 1, 2015
                          </div>
                        </td>
                        <td class="text-center">
                          <img src="img/flags/Spain.png" alt="Spain" style="height:24px;">
                        </td>
                        <td>
                          <div class="clearfix">
                            <div class="float-left">
                              <strong>22%</strong>
                            </div>
                            <div class="float-right">
                              <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                            </div>
                          </div>
                          <div class="progress progress-xs">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-center">
                          <i class="fa fa-google-wallet" style="font-size:24px"></i>
                        </td>
                        <td>
                          <div class="small text-muted">Last login</div>
                          <strong>Last week</strong>
                        </td>
                        <td class="text-center">
                          <div class="gaugejs-wrap sparkline" style="width:34px;height:34px">
                            <canvas id="gauge-5" width="42" height="42" style="width: 34px; height: 34px;"></canvas>
                            <span class="value">78%</span>
                          </div>
                        </td>
                        <td class="text-center">
                          <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <div class="avatar">
                            <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-danger"></span>
                          </div>
                        </td>
                        <td>
                          <div>Friderik Dávid</div>
                          <div class="small text-muted">
                            <span>New</span> | Registered: Jan 1, 2015
                          </div>
                        </td>
                        <td class="text-center">
                          <img src="img/flags/Poland.png" alt="Poland" style="height:24px;">
                        </td>
                        <td>
                          <div class="clearfix">
                            <div class="float-left">
                              <strong>43%</strong>
                            </div>
                            <div class="float-right">
                              <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                            </div>
                          </div>
                          <div class="progress progress-xs">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td class="text-center">
                          <i class="fa fa-cc-amex" style="font-size:24px"></i>
                        </td>
                        <td>
                          <div class="small text-muted">Last login</div>
                          <strong>Yesterday</strong>
                        </td>
                        <td class="text-center">
                          <div class="gaugejs-wrap sparkline" style="width:34px;height:34px">
                            <canvas id="gauge-6" width="42" height="42" style="width: 34px; height: 34px;"></canvas>
                            <span class="value">11%</span>
                          </div>
                        </td>
                        <td class="text-center">
                          <button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i></button>
                        </td>
                      </tr>
                    </tbody>
                  </table> -->
                </div>
              </div>
            </div>
            <!--/.col-->
          </div>











      </div>



      <!-- /.conainer-fluid -->



    </main>











  </div>











<?php include('footer.php'); ?>

<script type="text/javascript">

<?php if (isset($_SESSION['welcm']) && $_SESSION['welcm']=='1') {?>

  toastr.success('Welcome <?php echo $_SESSION['user']; ?>');

  <?php unset($_SESSION['welcm']);} ?>

</script>
