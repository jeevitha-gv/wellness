<?php
    include "../php/common/config.php";
    session_start();
      $infowellsec = $_GET['id'];
    $query = "SELECT * FROM `wellness` WHERE (status='created' and risk='Low') and infowellsec='$infowellsec' or (status='Reported' and risk='Low') and infowellsec='$infowellsec'";
  $result=mysqli_query($link,$query);
     $query1 = "SELECT * FROM `wellness` WHERE (status='created' and risk='Low') and infowellsec='$infowellsec' or (status='Reported' and risk='Low') and infowellsec='$infowellsec'";
  $result2 = mysqli_query($link,$query2);
   if(isset($_POST['submit']))
    {
     
     $id = $_POST['id'];
     $infowellsec = $_POST['infowellsec'];
     $Synopsis=$_POST['Synopsis'];
     $WBU=$_POST['WBU'];
     $genuine=$_POST['genuine'];

     $status="Reported";

  $sql1="UPDATE `wellness` SET Synopsis='$Synopsis',WBU='$WBU',status='$status',genuine='$genuine' WHERE id=$id";
       if(mysqli_query($link,$sql1))
       {
          header("Location:clinicview.php");
         
        }
       else
       {
           header("Location:clinicview.php");
       }
    }
 
?>
<!DOCTYPE html>
<html>
<head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="/wellness/"><!--end::Base Path -->
        <meta charset="utf-8"/>

        <title></title>
        <meta name="description" content="Base form control examples">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <!--begin::Fonts -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">        <!--end::Fonts -->
        <!--begin:: Global Mandatory Vendors -->
<link href="assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<link href="assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
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
<div class="kt-portlet__head kt-portlet__head--lg" style="background-color:#034EA2;">
<div class="kt-portlet__head-label">
<span class="kt-portlet__head-icon">
<i class="kt-font-brand flaticon2-line-chart"></i>
</span>
<h3 class="kt-portlet__head-title" style="color: white;">
Case - <?php echo $_GET['id'];?>
</h3>
</div>        
</div>
<form action="" method="post">


<div class="container">
     <!-- <label class="" style="font-size: 14px;"><strong>People Involved:</strong></label> -->
 

<div id="people1" class="">
<br>
<div class="row">
  <div class="input-group">
     <?php
   if ($rows=mysqli_fetch_assoc($result)) {
     # code...
?>
 
    <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
    <input type="hidden" name="ran" value="<?php echo $rows['infowellsec']; ?>">
    <input type="hidden" name="category" value="<?php echo $rows['category']; ?>">
    <input type="hidden" name="countries" value="<?php echo $rows['dist']; ?>">

    <input type="hidden" name="description" value="<?php echo $rows['Description']; ?>">


       </div>

   </div>
   <br>
   <br>
   <div class="form-group row">
            <label for="example-month-input" class="col-2 col-form-label" style="font-size: 15px;">Genuine: </label>
            <div class="col-10">
             
              <label class="kt-radio kt-radio--solid kt-radio--primary" style="color: black;">
         <input type="radio" name="genuine" value="Anonymous" id="Anonymous" checked="checked">Yes
         <span style="background-color: #afd135;"></span>
       </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <label class="kt-radio kt-radio--solid kt-radio--danger" style="color: black;">
             <input type="radio" name="genuine" value="disclose" id="disclose">No

             <span style="background-color: #034ea2;"></span>
           </label>
            </div>  
          </div>
</div>
</div>
<br>

<div class="container">
<div class="form-group">
  <label style="font-size: 15px;">Psychiatrist Synopsis :</label>
      <div class="">
   <textarea type="text" class="form-control" name="Synopsis" id="Synopsis" placeholder=""  style="height: 150px; border-color:#034EA2"> </textarea>
   <span id="apdate" style="color: red;"></span>
</div>
   </div>

   <div class="form-group">
  <label style="font-size: 15px;">Update to Patient:</label>
      <div class="">
   <textarea type="text" class="form-control" name="WBU" id="WBU" placeholder="Give WhistleBlower on update"  style="height: 150px; border-color:#034EA2"> </textarea>
   <span id="apdate" style="color: red;"></span>
</div>
   </div>

</div>

<div class="container" >
 
  <input type="submit" name="submit" class="btn btn" style="float: right;background-color: #afd135;color: white;" onclick="alert()" >

</div>
<div class="container">
<div class="row">

</div>

</div>
<div class="container">
  <a data-toggle="collapse" data-target="#data" style="font-size: 16px;"><button class="flaticon2-arrow" style="border-radius: 25px; background-color: #034ea2; color: #ffffff;margin-top: -8%;">  History</button></a>
</div><br>
</form>

<script type="text/javascript">
  function alert(){
    Swal.fire("Thanks for the intake analysis !");
  }


</script>
 


<div class="container collapse" id="data"><br>
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
          <label style="color: black;">3.  I couldn't seem to experience any positive feeling at all ?</label><br>
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
          <label style="color: black;">10. I felt that I had nothing to look forward to ?</label><br>
           <input type="text"  class="form-control"value="<?php echo $rows['forward']; ?>"disabled style=";background: transparent;">
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-6">
          <label style="color: black;">11. I found myself getting upset rather easily ??</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" class="form-control"value="<?php echo $rows['upset']; ?>"disabled style="background: transparent;">
        </div>
        <div class="col-md-6">
          <label style="color: black;">12.I felt that I was using a lot of nervous energy ?</label><br>
           <input type="text"  class="form-control"value="<?php echo $rows['nervous']; ?>"disabled style=";background: transparent;">
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>

  <div class="row form-group">
        <div class="col-md-6">
          <label style="color: black;">13.  I felt sad and depressed ?</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" class="form-control" value="<?php echo $rows['saddepressed']; ?>"disabled style="background: transparent;">
        </div>
        <div class="col-md-6">
          <label style="color: black;">14.  I found myself getting impatient when I was delayed in any way (eg, lifts, traffic lights, being kept waiting) ?</label><br>
           <input type="text"  class="form-control"value="<?php echo $rows['impatient']; ?>"disabled style=";background: transparent;">
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>


  <div class="row form-group">
        <div class="col-md-6">
          <label style="color: black;">15.I had a feeling of faintness ?</label><br>
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
          <label style="color: black;">17.I felt I wasn't worth much as a person ?</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" class="form-control" value="<?php echo $rows['worthperson']; ?>"disabled style="background: transparent;">
        </div>
        <div class="col-md-6">
          <label style="color: black;">18. I felt that I was rather touchy ?</label><br>
           <input type="text"  class="form-control"value="<?php echo $rows['touchy']; ?>"disabled style=";background: transparent;">
         <!--  <span id="category" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
        </div>
      </div>


      <div class="row form-group">
        <div class="col-md-6">
          <label style="color: black;">19. I perspired noticeably (eg, hands sweaty) in the absence of high temperatures or physical exertion ?</label><br>
        <!--   <span id="companyName" class="form-control"  style="background: transparent;color: white;"></span> -->
             <input type="text" class="form-control" value="<?php echo $rows['noticeably']; ?>"disabled style="background: transparent;">
        </div>
        <div class="col-md-6">
          <label style="color: black;">20. I felt scared without any good reason ?</label><br>
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

      









      <div class="panel-body" style="border: 1px solid #e2e5ec; border-color: #034EA2; padding: 2%;">

    <div class="row form-group" class="container hide" id="authknowsarea">
          <div class="col-md-6">
          <label style="color: black;">Name</label><br>
            <input type="text" id="nameauth" name="nameauth" class="form-control"value="<?php echo $rows['name']; ?>"disabled style=";background: transparent;">
           </div>
          <div class="col-md-6">
          <label style="color: black;">Email ID</label><br>
         <input type="text" id="emailauth" name="emailauth" class="form-control"value="<?php echo $rows['email']; ?>"disabled style=";background: transparent;">
           </div>
         

   </div>

   <div class="row form-group">
     <div class="col-md-6">
          <label style="color: black;">Phone No.</label><br>
          <!-- <span id="PhoneAuth" class="form-control"  style="background: transparent; color: #ffffff;"></span> -->
           <input type="text" id="phoneauth" name="phoneauth" class="form-control"value="<?php echo $rows['phone']; ?>"disabled style=";background: transparent;" >
         </div>
       
   </div>
 </div>
          <br>

  <!--         <div class="row form-group">
   
          <label class="col-md-10" style="color: black;">Details</label>
          <div class="col-md-12">
                 <textarea type="text" id="incidentinfo" rows="8" name="incidentinfo" class="form-control" value="<?php //echo $rows['Description']; ?>"disabled style=";background: transparent;"><?php// echo $rows['Description']; ?></textarea>
         </div>
      </div> -->
        <br>

<br>
   
    <div class="form-group">
  <label style="font-size: 14px;  background-color: #AFD135;"><b>Psychiatrist Analysis - <?php echo $count;?></b></label>
   
  <div style="min-height: 200px; max-height: 100px;border:1px solid #C3C8C6;">
        <?php echo $rows['WBU'];?>
      </div>
   </div><br>

 
       
     
<br>
   <?php }
    ?>
     

      </div>


      
 

</div>


 <br>

<br>
</div>



<div class="container">
                                  <!--Edit image png section-->

           <!-- <div class="">
        <div class="">
           <a href=""><img src="edit.png"style="height: 35px;width: 35px; margin-left: 1210px; margin-top: -140px"></a>
       </div></div>-->  

   



  <div class="form-group">

       <br>

  <!-- Button to Open the Modal -->
   <!-- The Modal -->

  <div class="modal" id="update">
   <div class="modal-dialog">
     <div class="modal-content">
     
   
       <!-- Modal body -->
       <div class="modal-body">
        <h3 class="modal-title">Succssfully Updated!</h3>
       </div>
     
     </div>
   </div>
 </div>


</div>

<br><br>
</div>

   <div class="modal fade" id="myModal" role="dialog">
   <div class="modal-dialog">
   
     <!-- Modal content-->
     <div class="modal-content">
       <div class="modal-header">
         <h4 class="modal-title">Live Conversation</h4>
         <button type="button" class="close" data-dismiss="modal" ></button>
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
</div>


<br><br>

</body>

</html>
<?php
include "../case/sidemenu2.php";
 ?>

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

<script>

            var KTAppOptions = {"colors":{"state":{"brand":"#2c77f4","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>
     
<script src="assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>

         
      <script src="assets/js/demo3/scripts.bundle.js" type="text/javascript"></script>
      <script src="assets/toggleButton/bootstrap-toggle.min.js"></script>
      <script type="text/javascript" src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>  
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
     <script type="text/javascript">
var getUrl=window.location.search.slice(1);
getUrl=getUrl.replace(/=/g,'":"');
   getUrl=getUrl.replace(/&/g,'":"');
 getUrl='{"'+getUrl+'"}';
 var obj=JSON.parse(getUrl);
 console.log(obj.id);
 document.getElementById("id").value=obj.id;
  document.getElementById("ideatip").value=obj.id;
</script>
