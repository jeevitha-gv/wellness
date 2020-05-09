<?php 
require '../siteheader.php';
 ?>


<?php
include "../php/common/config.php";

  $infowellsec = $_GET['infowellsec'];
    $query = "SELECT * FROM `wellness` WHERE infowellsec='$infowellsec'";
    $result = mysqli_query($link, $query);


  //      $query1 = "SELECT * FROM `case` WHERE ran='$ran'";
  // $result1=mysqli_query($link,$query1);
       $query2 = "SELECT * FROM `wellness` WHERE infowellsec='$infowellsec' order by id desc";
  $result2=mysqli_query($link,$query2);
?>

<!DOCTYPE html>  
<html lang="en" >
    <!-- begin::Head -->
    <head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="/wellness/"><!--end::Base Path -->
               <meta charset="utf-8"/>

        <title>Case | FollowUp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="https://momentjs.com/downloads/moment.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">        <!--end::Fonts -->

 <link href="./assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />

<link href="./assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

<link href="./assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/quill/dist/quill.snow.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/dual-listbox/dist/dual-listbox.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />


  <link rel="stylesheet" type="text/css" href="assets/DataTables/datatables.min.css" />
    <script type="text/javascript" src="assets/DataTables/datatables.min.js"></script>
    <!-- <script type="text/javascript" src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>  -->
     
    <!-- <script type="text/javascript" src="assets/DataTables/DataTables-1.10.12/js/jquery.dataTables.min.js"></script> -->
   <!--      <script type="text/javascript" src="../../assets/DataTables/Buttons-1.2.1/js/dataTables.buttons.min.js"></script>
           <script type="text/javascript" src="../../assets/DataTables/Buttons-1.2.1/js/buttons.flash.min.js"></script>
        <script type="text/javascript" src="../../assets/DataTables/pdfmake.min.js"></script>
        <script type="text/javascript" src="../../assets/DataTables/pdfmake-0.1.18/build/vfs_fonts.js"></script>
        <script type="text/javascript" src="../../assets/DataTables/Buttons-1.2.1/js/buttons.html5.min.js"></script>
        <script type="text/javascript" src="../../assets/DataTables/Buttons-1.2.1/js/buttons.print.min.js"></script>
        <script type="text/javascript" src="//cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>   -->
 
   <link href="./assets/css/demo3/style.bundle.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="./assets/media/company-logos/virus.png" />
           
        <!-- <link rel="shortcut icon" href="./assets/media/logos/fixnix.png" /> -->
    </head>
 <style type="text/css">
   label {
    color: #ffffff;
   }
 </style>
  <?php
   include '../siteheader2.php';
?>
    <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

       
    <!-- begin:: Page -->


<div class="kt-grid kt-grid--hor kt-grid--root">
<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper"  style="margin-top:-10%;">

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

<!--begin: Datatable -->


<form method="post">
<!--   <div class="container" style="margin-left: 300px;" >
      <div class="row form-group">
      <div class="col-md-5">
        <input type="text" name="ran" id="ran" class="form-control" placeholder="Enter the Idea/Tip Number" tyle="background: transparent;color: white;">
       
      </div>
      <div class="col-md-2">
        <input type="submit" id="search" name="search"  style="background-color:#3e8e9d;" class="btn btn-danger" value="View Tip Details" style="">
      </div>
    </div><br><hr>
</div> -->
</form>



  <div class="container" id="data" style="border:0px solid #C3C8C6;"  ><br>
              <?php
   if($rows2=mysqli_fetch_assoc($result2)) {
     # code...
  ?>
     <div class="row form-group">
             <label  class="col-md-10" style="color: black;">Case Update:</label>
                <div class="col-md-12 " >
              <textarea type="text" id="WBUpdate" rows="8" class="form-control" placeholder=""  style="background: transparent; color:black;"disabled=""><?php echo $rows2['WBU'];?></textarea>
            </div>
          </div>
          <?php
        }
          ?>
                <?php
   if($rows=mysqli_fetch_assoc($result)) {
     # code...
  ?>
       
          <div class="row">
           <div class="container">
<a data-toggle="collapse" data-target="#demo" style="font-size: 16px;"><button class="flaticon2-arrow" style="border-radius: 25px; background-color: #86346C; color: #ffffff;">  History</button></a>
</div>
</div><br>


<div id="demo" class="collapse">

      <div class="row form-group">
        <div class="col-md-6">
          <label style="color: black;">District</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" id="company" name="company" class="form-control"value="<?php echo $rows['dist']; ?>"disabled style="background: transparent;">
        </div>
        <div class="col-md-6">
          <label style="color: black;"></label><br>
           <input type="text" id="category" name="category" class="form-control"value="<?php echo $rows['zipcode']; ?>"disabled style=";background: transparent;">
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>
 <div class="row form-group">
        <div class="col-md-6">
     <label style="color: black;">1. I found myself getting upset by quite trivial things ?</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" class="form-control"value="<?php echo $rows['quitetrivial']; ?>"disabled style="background: transparent;">
        </div>
        <div class="col-md-6">
          <label style="color: black;">2. I was aware of dryness of my mouth ?</label><br>
           <input type="text"  class="form-control"value="<?php echo $rows['dryness']; ?>"disabled style=";background: transparent;">
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>
 

 <div class="row form-group">
        <div class="col-md-6">
          <label style="color: black;">3.I couldn't seem to experience any positive feeling at all ?</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" class="form-control"value="<?php echo $rows['positivefeeling']; ?>"disabled style="background: transparent;">
        </div>
        <div class="col-md-6">
          <label style="color: black;">4. I experienced breathing difficulty (eg, excessively rapid breathing, breathlessness in the absence of physical exertion) ?</label><br>
           <input type="text"  class="form-control"value="<?php echo $rows['breathing']; ?>"disabled style=";background: transparent;">
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>
       <div class="row form-group">
        <div class="col-md-6">
          <label style="color: black;">5. I just couldn't seem to get going ?</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" class="form-control"value="<?php echo $rows['getgoing']; ?>"disabled style="background: transparent;">
        </div>
        <div class="col-md-6">
          <label style="color: black;">6. I tended to over-react to situations ?</label><br>
           <input type="text"  class="form-control"value="<?php echo $rows['situations']; ?>"disabled style=";background: transparent;">
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>

  <div class="row form-group">
        <div class="col-md-6">
          <label style="color: black;">7. I had a feeling of shakiness (eg, legs going to give way) ?</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" class="form-control"value="<?php echo $rows['shakiness']; ?>"disabled style="background: transparent;">
        </div>
        <div class="col-md-6">
          <label style="color: black;">8. I found it difficult to relax ?</label><br>
           <input type="text"  class="form-control"value="<?php echo $rows['relax']; ?>"disabled style=";background: transparent;">
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>

  <div class="row form-group">
        <div class="col-md-6">
          <label style="color: black;">9. I found myself in situations that made me so anxious I was most relieved when they ended ?</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" class="form-control"value="<?php echo $rows['anxious']; ?>"disabled style="background: transparent;">
        </div>
        <div class="col-md-6">
          <label style="color: black;">10. DI felt that I had nothing to look forward to ?</label><br>
           <input type="text"  class="form-control"value="<?php echo $rows['forward']; ?>"disabled style=";background: transparent;">
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>

  <div class="row form-group">
        <div class="col-md-6">
          <label style="color: black;">11.  I found myself getting upset rather easily ?</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" class="form-control"value="<?php echo $rows['upset']; ?>"disabled style="background: transparent;">
        </div>
        <div class="col-md-6">
          <label style="color: black;">12. I felt that I was using a lot of nervous energy ?</label><br>
           <input type="text"  class="form-control"value="<?php echo $rows['nervous']; ?>"disabled style=";background: transparent;">
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>

  <div class="row form-group">
        <div class="col-md-6">
          <label style="color: black;">13. I felt sad and depressed ?</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" class="form-control" value="<?php echo $rows['saddepressed']; ?>"disabled style="background: transparent;">
        </div>
        <div class="col-md-6">
          <label style="color: black;">14. I found myself getting impatient when I was delayed in any way (eg, lifts, traffic lights, being kept waiting) ?</label><br>
           <input type="text"  class="form-control"value="<?php echo $rows['impatient']; ?>"disabled style=";background: transparent;">
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>
  <div class="row form-group">
        <div class="col-md-6">
          <label style="color: black;">15. I had a feeling of faintness ?</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" class="form-control" value="<?php echo $rows['faintness']; ?>"disabled style="background: transparent;">
        </div>
        <div class="col-md-6">
          <label style="color: black;">16. I felt that I had lost interest in just about everything ?</label><br>
           <input type="text"  class="form-control"value="<?php echo $rows['lostinterest']; ?>"disabled style=";background: transparent;">
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-6">
          <label style="color: black;">17. I felt I wasn't worth much as a person ?</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" class="form-control" value="<?php echo $rows['worthperson']; ?>"disabled style="background: transparent;">
        </div>
        <div class="col-md-6">
          <label style="color: black;">18.  I felt that I was rather touchy ?</label><br>
           <input type="text"  class="form-control"value="<?php echo $rows['touchy']; ?>"disabled style=";background: transparent;">
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-6">
          <label style="color: black;">19.I perspired noticeably (eg, hands sweaty) in the absence of high temperatures or physical exertion ?</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" class="form-control" value="<?php echo $rows['noticeably']; ?>"disabled style="background: transparent;">
        </div>
        <div class="col-md-6">
          <label style="color: black;">20.  I felt scared without any good reason ?</label><br>
           <input type="text"  class="form-control"value="<?php echo $rows['goodreason']; ?>"disabled style=";background: transparent;">
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>


       <div class="row form-group">
        <div class="col-md-6">
          <label style="color: black;">21.  I felt that life wasn't worthwhile ?</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" class="form-control"value="<?php echo $rows['worthwhile']; ?>"disabled style="background: transparent;">
        </div>
        <div class="col-md-6">
          <label style="color: black;">22. I found it hard to wind down ?</label><br>
           <input type="text"  class="form-control"value="<?php echo $rows['winddown']; ?>"disabled style=";background: transparent;">
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-6">
          <label style="color: black;">23. I had difficulty in swallowing ?</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" class="form-control"value="<?php echo $rows['swallowing']; ?>"disabled style="background: transparent;">
        </div>
        <div class="col-md-6">
          <label style="color: black;">24.I couldn't seem to get any enjoyment out of the things I did ?</label><br>
           <input type="text"  class="form-control"value="<?php echo $rows['enjoyment']; ?>"disabled style=";background: transparent;">
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-6">
          <label style="color: black;">25. I was aware of the action of my heart in the absence of physical exertion (eg, sense of heart rate increase, heart missing a beat) ?</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" class="form-control"value="<?php echo $rows['physicalexertion']; ?>"disabled style="background: transparent;">
        </div>
        <div class="col-md-6">
          <label style="color: black;">26. I felt down-hearted and blue ?</label><br>
           <input type="text"  class="form-control"value="<?php echo $rows['feltdown']; ?>"disabled style=";background: transparent;">
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>


      <div class="row form-group">
        <div class="col-md-6">
          <label style="color: black;">27. I found that I was very irritable ?</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" class="form-control"value="<?php echo $rows['irritable']; ?>"disabled style="background: transparent;">
        </div>
        <div class="col-md-6">
          <label style="color: black;">28.I felt I was close to panic ?</label><br>
           <input type="text"  class="form-control"value="<?php echo $rows['closepanic']; ?>"disabled style=";background: transparent;">
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>

  <div class="row form-group">
        <div class="col-md-6">
          <label style="color: black;">29.  I found it hard to calm down after something upset me ?</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" class="form-control"value="<?php echo $rows['somethingupset']; ?>"disabled style="background: transparent;">
        </div>



        <div class="col-md-6">
          <label style="color: black;">30. I feared that I would be "thrown" by some trivial but unfamiliar task ?</label><br>
           <input type="text"  class="form-control"value="<?php echo $rows['trivial']; ?>"disabled style=";background: transparent;">
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-6">
          <label style="color: black;">31. I was unable to become enthusiastic about anything ?</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" class="form-control"value="<?php echo $rows['enthusiastic']; ?>"disabled style="background: transparent;">
        </div>
        <div class="col-md-6">
          <label style="color: black;">32.I found it difficult to tolerate interruptions to what I was doing ?</label><br>
           <input type="text"  class="form-control"value="<?php echo $rows['interruptions']; ?>"disabled style=";background: transparent;">
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>

  <div class="row form-group">
        <div class="col-md-6">
          <label style="color: black;">33. I was in a state of nervous tension ?</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" class="form-control" value="<?php echo $rows['nervoustension']; ?>"disabled style="background: transparent;">
        </div>
        <div class="col-md-6">
          <label style="color: black;">34.  I felt I was pretty worthless ?</label><br>
           <input type="text"  class="form-control"value="<?php echo $rows['prettyworthless']; ?>"disabled style=";background: transparent;">
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>
  <div class="row form-group">
        <div class="col-md-6">
          <label style="color: black;">35. I was intolerant of anything that kept me from getting on with what I was doing ?</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" class="form-control" value="<?php echo $rows['intolerant']; ?>"disabled style="background: transparent;">
        </div>
        <div class="col-md-6">
          <label style="color: black;">36. I felt terrified ?</label><br>
           <input type="text"  class="form-control"value="<?php echo $rows['terrified']; ?>"disabled style=";background: transparent;">
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>
       <div class="row form-group">
        <div class="col-md-6">
          <label style="color: black;">37. I could see nothing in the future to be hopeful about ?</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" class="form-control" value="<?php echo $rows['hopefulabout']; ?>"disabled style="background: transparent;">
        </div>
        <div class="col-md-6">
          <label style="color: black;">38. I felt that life was meaningless ?</label><br>
           <input type="text"  class="form-control"value="<?php echo $rows['meaningless']; ?>"disabled style=";background: transparent;">
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>



      <div class="row form-group">
        <div class="col-md-6">
          <label style="color: black;">39. I found myself getting agitated   ?</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" class="form-control" value="<?php echo $rows['agitated']; ?>"disabled style="background: transparent;">
        </div>
        <div class="col-md-6">
          <label style="color: black;">40. I was worried about situations in which I might panic and make a fool of myself ?</label><br>
           <input type="text"  class="form-control"value="<?php echo $rows['panic']; ?>"disabled style=";background: transparent;">
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>
             <div class="row form-group">
        <div class="col-md-6">
          <label style="color: black;">41. I experienced trembling (eg, in the hands) ?</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" class="form-control" value="<?php echo $rows['trembling']; ?>"disabled style="background: transparent;">
        </div>
        <div class="col-md-6">
          <label style="color: black;">42. I found it difficult to work up the initiative to do things ?</label><br>
           <input type="text"  class="form-control"value="<?php echo $rows['difficultwork']; ?>"disabled style=";background: transparent;">
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>








         <div class="panel-body" style="border: 1px solid #e2e5ec; border-color: #A1E6EA;">

    <div class="row form-group" class="container hide" id="authknowsarea">
          <div class="col-md-6">
          <label style="color: black;">Name</label><br>
            <input type="text" id="nameauth" name="name" class="form-control"value="<?php echo $rows['name']; ?>"disabled style=";background: transparent;">
           </div>
          <div class="col-md-6">
          <label style="color: black;">Email ID</label><br>
         <input type="text" id="emailauth" name="email" class="form-control"value="<?php echo $rows['email']; ?>"disabled style=";background: transparent;">
           </div>
         

   </div>

   <div class="row form-group">
     <div class="col-md-6">
          <label style="color: black;">Phone No.</label><br>
          <!-- <span id="PhoneAuth" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
           <input type="text" id="phoneauth" name="phone" class="form-control"value="<?php echo $rows['phone']; ?>"disabled style=";background: transparent;" >
         </div>
       
   </div>
 </div>
          <br>
        <!--     <div class="row form-group">
   
          <label class="col-md-10" style="color: black;">Details</label>
          <div class="col-md-12">
                 <textarea type="text" id="incidentinfo" rows="8" name="incidentinfo" class="form-control" value="<?php// echo $rows['Description']; ?>"disabled style=";background: transparent;"><?php //echo $rows['Description']; ?></textarea>
         </div>
      </div> -->
        <br>
<!--      <div class="">

     <label class="" style="font-size: 14px; color: black;"><strong>Artifacts</strong></label>
 <div class="panel-body"style="border: 1px solid #e2e5ec;border-color:#A1E6EA">
<div id="" class="">
<div class="row">
  <div class="input-group" style="margin: 20px;">
<a href="./documents/<?php //echo $rows['Artifacts']; ?>" style="font-size: 16px;"><?php //echo $rows['Artifact'];?></a>
    </div>
  </div>
</div>
</div>
</div> -->
<br>
   
    <div class="form-group">
  <label style="font-size: 14px; color: black;"><b>Management Update- <?php echo $count;?></b></label>
   
  <div style="min-height: 200px; max-height: 100px;border:1px solid #C3C8C6;">
        <?php echo $rows['Synopsis'];?>
      </div>
   </div><br>

    <div class="form-group">
  <label style="font-size: 14px;color: black;"><b>Reinvestigate Update- <?php echo $count;?></b></label>
   
  <div style="min-height: 200px; max-height: 100px;border:1px solid #C3C8C6;">
        <?php echo $rows['reinvestigate'];?>
      </div>
   </div><br>
 <?php

}
?>

      </div>
 
      <br>
           
  </div>
</div>
</div>
</div>
</div>
</div>

<?php 
include '../footer.php';
 ?>

</body>
</html>


<!--   <div class="container">
  <div class="row">
   <div class="col-md-11">
  <button class="collapsible btn btn-success">Interaction</button>

  <div id="" class="collapse"><br>
    <h5 style="color: #fff;">Chat History</h5>
  <div style="min-height: 200px; width: 1119px; max-height: 100px; overflow: auto;border:1px solid #C3C8C6;">
        <div class="conversations"></div>
     
      </div>
   </div>
</div>
<div class="col-md-1">
    <div class="img" style="float: right;">
       
          <a href="" data-toggle="modal" data-target="#myModal"><i class='fa fa-comments' style="color:  red; font-size: 38px;" title="Review"></i></a>
            </div>
</div>
</div>
</div>
 -->


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
<!-- <script type="text/javascript">
  function messagesent(){
  setInterval(()=>{
    var tip = $("input").val();
    if(tip){
      clickt()
    }
  },1000)
</script> -->
