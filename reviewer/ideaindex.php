<?php
     include "../php/common/config.php";
     $tipno = $_GET['id'];
    $query = "SELECT * FROM `case` WHERE ran='$tipno'";
    $result = mysqli_query($link,$query);
    $query1 = "SELECT * FROM `case` WHERE ran='$tipno' order by id desc";
    $result1 = mysqli_query($link,$query1);
     $query2 = "SELECT * FROM `case` WHERE ran='$tipno'";
    $result2 = mysqli_query($link,$query2);
       if(isset($_POST['submit']))
    {
      $id=$_POST['id'];
    
        $resolution=$_POST['resolution'];
 
        $reinvestigate=$_POST['reinvestigate'];
        if($resolution==true)
        {
        $status="permanentlyclosed";
      }
      else if($reinvestigate==true){
        $status="reanalyze";

      }
        $sql="UPDATE `case` SET resolution='$resolution',reinvestigate='$reinvestigate',status='$status' WHERE id=$id";
        if(mysqli_query($link,$sql))
        {
         header("Location:ideaview.php"); 
        }
       
    }
?>

<!DOCTYPE html>
<html>
<head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="/wellness/"><!--end::Base Path -->
        <meta charset="utf-8"/>

        <title>Reviewer</title>
        <meta name="description" content="Base form control examples">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">        <!--end::Fonts -->
        <!--begin:: Global Mandatory Vendors -->
<link href="assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<link href="assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-datetipnogepicker/datetipnogepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/ion-tipnogeslider/css/ion.tipnogeSlider.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/quill/dist/quill.snow.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/dual-listbox/dist/dual-listbox.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
<link href="assets/toggleButton/bootstrap-toggle.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="assets/jquery-ui-1.11.4/jquery-ui.css"/>
 <link href="assets/css/demo3/style.bundle.css" rel="stylesheet" type="text/css" />
 <link rel="shortcut icon" href=" ./assets/media/company-logos/whistle.png" />

<style>
 
  .hide{
    display: none;
  }
  .investigator {
    color: #000;
  }
  .blower{
    color: #8ac6d1;
  }
  .message{
    font-size: 11px;
  }
  .labelt{
    font-size: 13px;
  }


  .collapsible {
   
  cursor: pointer;
 
  /*width: 9%;*/
  /*border: none;*/
  text-align: right;
  outline: none;
  font-size: 15px;
  background: #FAFAFA;

}


.content {
  display: none;
  overflow: hidden;
 
}
</style>

</head>
<?php
include 'siteHeader2.php';
?>
<body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading" >
<div class="kt-grid kt-grid--hor kt-grid--root">
<div class="kt-grid__item kt-grid__item--fluid">

<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper" style="margin-top:-13%;">

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item">

<div class="kt-portlet">
<div class="kt-portlet__head kt-portlet__head--lg" style="background-color:#2a5aa8;">
<div class="kt-portlet__head-label">
<span class="kt-portlet__head-icon">
<i class="kt-font-btipnod flaticon2-line-chart"></i>
</span>
<h3 class="kt-portlet__head-title" style="color: white;">
Info- <?php echo substr($_GET['id'], 0, 4) . "  " . substr($_GET['id'], 4, 4) . "  " . substr($_GET['id'],8,4) . "  " . substr($_GET['id'], 12, 4); ?>
</h3>
</div>        
</div>



<form method="post" action="">
<br><br>
 
<br>
<br>
<?php
if($rows1=mysqli_fetch_assoc($result1)) {
?>

<div class="container">
<label style="font-size: 14px;"><strong>Case Update</strong></label>
<div class="">
  <input type="hidden" name="id" value="<?php echo $rows1['id'];?>">
<textarea type="text" class="form-control" style="height: 150px;" disabled><?php echo $rows1['Synopsis'];?></textarea>

</div>
</div>


<?php
}
?>
<br>
  <div class="container">
  <label class="kt-radio kt-radio--solid kt-radio--success">
  <input type="radio" name="radio1" value="1"/>Resolution<span></span></label>&nbsp;&nbsp;&nbsp;
  <label class="kt-radio kt-radio--solid kt-radio--danger">
<input type="radio" name="radio1" value="2"/>Re-Analyze<span></span></label>
<br>

    <!-- <label style="font-size: 14px;"><strong>Resolution </strong></label> -->
<div class="rad ra1" style="display: none">
<!--  <span id="resolution" class="form-control" style="font-size: 13px;height: 150px;"></span> -->
<textarea id="resolution" name="resolution" class="form-control" style="font-size: 13px;height: 150px; border-color: #A1E6EA;" placeholder="Resolution"></textarea>
        </div>


    <!-- <label style="font-size: 14px;"><strong>Re-Investigate </strong></label> -->
<div class="rad ra2" style="display: none;">

<!--  <span id="resolution" class="form-control" style="font-size: 13px;height: 150px;"></span> -->

<textarea name="reinvestigate" class="form-control" style="font-size: 13px;height: 150px;border-color: #A1E6EA;" placeholder="Re-Analyze"></textarea>
<!-- <span id="reinvestigation" class="form-control" style="font-size: 13px;height: 150px;"></span>
 -->        </div>

</div>
<br>


 <script type="text/javascript">
    jQuery(document).ready(function() {
      jQuery('#toggle').on('click', function(event) {
        jQuery('#toggleData').toggle('show');
      });
    });
  </script>
  <script type="text/javascript">
  function alert()
  {
            Swal.fire({
              title: "Reviewed",
              text: "whistle Has Been Reviewed",
              type: "success",
              closeOnConfirm: false,
              showLoaderOnConfirm: true
            }, function () {
              setTimeout(function () {
                 window.location="/coronaspeak/`case`/Report.php";
              }, 5000);
            });
            

}
</script> 

  <div class="container">
<button type="button" id="toggle" class="flaticon2-arrow" style="border-radius: 25px; background-color: #86346C; color: #ffffff; font-size: 16px;margin-top: 8%;">  History</button>
<input type="submit" name="submit" value="Review" class="btn btn-danger" style="float: right;" data-toggle="modal" data-target="#update" onclick="alert()">
</div>

<div id="toggleData" class="collapse">
<div>
<div class="container" id="data"><br>
<!-- <div class="container hide" id="data" style="border:1px solid #C3C8C6; margin-left: -18px; height: 90px;"> -->
<?php
if ($rows=mysqli_fetch_assoc($result)) {
?>

  <div class="container">
  <div class="row form-group">
<div class="col-md-6">
<label><i class=" fa fa-podcast" style="color: red;"></i><strong>Category</strong></label><br>

<input type="text" name="email" class="form-control" disabled value="<?php echo $rows['category'];?>">

</div>

<div class="col-md-6">
<label><strong>Country</strong></label><br>
 <input type="text" name="email" class="form-control" disabled value="<?php echo $rows['countries'];?>"></div>
</div>
</div>
<!-- <div class="container">
  <label>Category :</label>
<input type="text" name="email" class="form-control" disabled value="<?php echo $rows['category'];?>">
</div>

<div class="container">
  <label>Description :</label>
  <input type="text" name="email" class="form-control" disabled value="<?php echo $rows['Description'];?>">
</div>
<br> -->


<div class="container">
     <label class="" style="font-size: 14px;"><strong>Details :</strong></label>
 
<div class="panel-body"style="border: 1px solid #e2e5ec;border-color:#A1E6EA">
<div id="people1" class="">
<br>
<div class="row">
  <div class="input-group" style="margin:20px;">
   <div class="col-md-4 input_val">
     <label>Full Name :</label>
  <input type="text" name="email" class="form-control" disabled value="<?php echo $rows['name'];?>">
   </div>
   <div class="col-md-4 input_val">
     <label>Email :</label>
     <!--<input type="text" placeholder="Designation" class="form-control" style="border-color: #216582;">-->
    <input type="text" name="email" class="form-control" disabled value="<?php echo $rows['email'];?>">
   </div>
   <div class="col-md-4 input_val">
     <label>Phone No :</label>
    <!-- <input type="text" placeholder="Department" class="form-control" style="border-color: #216582;">-->
  <input type="text" name="email" class="form-control" disabled value="<?php echo $rows['phone'];?>">   </div>
 
<!-- <div class="input-group after-add-more col-md-1">
           <button class="btn add-more" type="button" title="Add Row"><i style="color:green;font-size:20px;" class="fa flaticon-plus"></i></button>
       </div> -->

       </div> 
   </div>
   <br><br>
</div>
</div>
<br>
</div>
<br>

   
   <!--<div class="container hide" id="data" style="border:1px solid #C3C8C6; margin-left: -18px; height: 90px;">-->

 



</div>
</div>

<div class="container">

<div class="control-group">
   
</div>

<div class="container"><br>
</div>


  <div class="form-group">
    
      <script type="text/javascript">

        $(document).ready(function() {
              $("input[name$='radio1']").click(function() {
                  var test = $(this).val();

                  $("div.rad").hide();
                  $(".ra" + test).show();
              });
          });


       </script>

  <!-- Button to Open the Modal -->
   <!-- The Modal -->
 <div class="modal" id="update">
   <div class="modal-dialog">
     <div class="modal-content">
     
       <!-- Modal Header -->
       <div class="modal-header">
         
         <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>
       
       <!-- Modal body -->
       <div class="modal-body">
        <h3 class="modal-title">Succssfully Updated!</h3>
       </div>
       
       <!-- Modal footer -->
       <div class="modal-footer">
         <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
       </div>
       
     </div>
   </div>
 </div>


 
</div>
</div>
<div class="container">
<div class="form-group">
  <label style="font-size: 14px;  background-color: coral;">Artifacts</label>
  <div style="min-height: 200px; max-height: 100px;border:1px solid #C3C8C6;">
        <a href="./documents/<?php echo $rows['Artifacts']; ?>" style="font-size: 16px;"><?php echo $rows['Artifacts'];?></a>
      </div>
   </div>
 </div>
 <?php
}
?>
<BR>

   <?php
   $count=1;
   while($rows2=mysqli_fetch_assoc($result2)){
    ?>
    <div class="container">
   <div class="form-group">
  <label style="font-size: 14px;  background-color: #f71462;color: white;"><b>Management Synopsis - <?php echo $count;?></b></label>
   
  <div style="min-height: 200px; max-height: 100px;border:1px solid #C3C8C6;">
       <?php echo $rows2['Synopsis'];?>
      </div>
   </div><br>
    <div class="form-group">
  <label style="font-size: 14px;  background-color: #f71462;color: white;"><b>Updated to `case` - <?php echo $count;?></b></label>
   
  <div style="min-height: 200px; max-height: 100px;border:1px solid #C3C8C6;">
        <?php echo $rows2['WBU'];?>
      </div>
   </div>
 </div><br>
 <?php 
 $count++;
} 
?>

</div>
 

<br>
<div class="container">
  <div class="row">

<div class="col-md-1">
  
</div>
</div>
</div>
</form>
<br><br>
</div>

   <div class="modal fade" id="myModal" role="dialog">
   <div class="modal-dialog">
   
     <!-- Modal content-->
     <div class="modal-content">
       <div class="modal-header">
         <h4 class="modal-title">Live Conversation</h4>
         <button type="button" class="close" data-dismiss="modal"></button>
       </div>
       <div class="modal-body" style="min-height: 300px; max-height: 300px; overflow: auto;">
        <div class="conversations"></div>
         
       </div>

       <div class="modal-footer" >
        <div class="col-md-9">
<input type="text" id="query" name="" class="form-control" placeholder="Provide more info...">
</div>
<div class="col-md-3"><input type="button" onclick="messagesent()" name="" class="btn btn-primary" value="Send Message" style="background-color: #2E9461;"></div>
       </div>
     </div>
 </div>
</div>
   
</div>
</div>
</div>
</div>

</div>
</div>



<br><br>

</body>

</html>
<?php
include "sidemenu.php";
 ?>
<script type="text/javascript">
  jQuery(document).ready(function() {
    jQuery('#intro').on('click', function(event) {
      jQuery('#demo').toggle('show');
    });
  });
</script>
<script>
        function addRow(){
          var table = document.getElementById('myTable');
          //var row = document.getElementById("myTable");
          var x = table.insertRow(1);
          var e =table.rows.length-1;
          var l =table.rows[e].cells.length;
          //x.innerHTML = "&nbsp;";
          for (var c =0,  m=l; c < m; c++) {
            table.rows[1].insertCell(c);
            table.rows[1].cells[c].innerHTML  = "<input type='text' class='form-control'>";
            }
          }
</script>

<script type="text/javascript">


    $(document).ready(function() {


      $(".add-more").click(function(){
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });


      $("body").on("click",".remove",function(){
          $(this).parents(".control-group").remove();
      });


    });


</script>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;


for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>


<script>
$(document).ready(function(){
  $("#peoples").hide();

$("input[type='radio']").change(function(){
if($(this).val()=="peos")
{
$("#peoples").hide();
$("#people").show();
}
if($(this).val()=="peo")
{
$("#peoples").show();
$("#people").hide();
}
});
});
</script>

<!-- <script>
$(document).ready(function(){
  $("#authknowsarea").hide();
$("input[type='text']").change(function(){
if($(this).val()=="NO")
{
$("#authknowarea").hide();
}
if($(this).val()=="YES")
{
$("#authknowsarea").show();
}
});
});
</script> -->


                                                  <!-- update part-->


<script>
            var KTAppOptions = {"colors":{"state":{"btipnod":"#2c77f4","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>
        <!-- end::Global Config -->

    <!--begin:: Global Mandatory Vendors -->
<script src="assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
<script src="assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
<script src="assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
<script src="assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>
<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<script src="assets/vendors/custom/jquery-ui/jquery-ui.bundle.min.js" type="text/javascript"></script>
<link href="assets/vendors/custom/jquery-ui/jquery-ui.bundle.min.css">
<script src="assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-datetipnogepicker/datetipnogepicker.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
<script src="assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
<script src="assets/vendors/custom/js/vendors/bootstrap-switch.init.js" type="text/javascript"></script>
<script src="assets/vendors/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
<script src="assets/vendors/general/ion-tipnogeslider/js/ion.tipnogeSlider.js" type="text/javascript"></script>
<script src="assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
<script src="assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
<script src="assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
<script src="assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
<script src="assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
<script src="assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
<script src="assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
<script src="assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
<script src="assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
<script src="assets/vendors/custom/js/vendors/dropzone.init.js" type="text/javascript"></script>
<script src="assets/vendors/general/quill/dist/quill.js" type="text/javascript"></script>
<script src="assets/vendors/general/@yaireo/tagify/dist/tagify.polyfills.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/@yaireo/tagify/dist/tagify.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
<script src="assets/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<script src="assets/vendors/custom/js/vendors/bootstrap-markdown.init.js" type="text/javascript"></script>
<script src="assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
<script src="assets/vendors/custom/js/vendors/bootstrap-notify.init.js" type="text/javascript"></script>
<script src="assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
<script src="assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
<script src="assets/vendors/custom/js/vendors/jquery-validation.init.js" type="text/javascript"></script>
<script src="assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/dual-listbox/dist/dual-listbox.js" type="text/javascript"></script>
<script src="assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
<script src="assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
<script src="assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
<script src="assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
<script src="assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
<script src="assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
<script src="assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
<script src="assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
<script src="assets/vendors/custom/js/vendors/sweetalert2.init.js" type="text/javascript"></script>
<script src="assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
<script src="assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
<script src="assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
<script src="assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>
<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Bundle(used by all pages) -->
         
      <script src="assets/js/demo3/scripts.bundle.js" type="text/javascript"></script>
      <script src="assets/toggleButton/bootstrap-toggle.min.js"></script>
      <script type="text/javascript" src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>  
     
      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <!-- end::Body -->
<script type="text/javascript">
var getUrl=window.location.search.slice(1);
getUrl=getUrl.replace(/=/g,'":"');
   getUrl=getUrl.replace(/&/g,'":"');
 getUrl='{"'+getUrl+'"}';
 var obj=JSON.parse(getUrl);
 console.log(obj.id);
 document.getElementById("tipno").value=obj.id;
</script>
