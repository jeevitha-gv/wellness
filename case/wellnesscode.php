<?php
include "../php/common/config.php";
if(isset($_POST['submit']))
{
     $infowellsec=$_POST['infowellsec'];
     $infowellkey=$_POST['infowellkey'];

     $sql="SELECT infowellsec, infowellkey from wellness where infowellsec='$infowellsec' and infowellkey='$infowellkey'";
     $result=mysqli_query($link,$sql);
     if($row=mysqli_fetch_assoc($result))
     {
         if($row['infowellsec']==$infowellsec && $row['infowellkey']==$infowellkey)
         {
             header("location:../case/followup.php?infowellsec=".$row['infowellsec']);
         }
     }
     else
     {
         echo "error".$sql.$link->error;
     }
}


?>


 <!DOCTYPE html>
<html lang="en" >
 <head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="/wellness/"><!--end::Base Path -->
     <meta charset="utf-8"/>

        <title>TN CoronaSpeak</title>
        <meta name="description" content="Base form control examples">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">        <!--end::Fonts -->
        <!--begin:: Global Mandatory Vendors -->
        <!--begin::Page Custom Styles(used by this page) -->
          <link href="./assets/css/demo2/pages/wizard/wizard-1.css" rel="stylesheet" type="text/css" />
                     <link href="assets/css/demo2/pages/support-center/home-2.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
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
<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Styles(used by all pages) -->
                   
                    <link href="./assets/css/demo2/style.bundle.css" rel="stylesheet" type="text/css" />

                    <!-- <link href="./assets/css/demo2/style.bundle.css" rel="stylesheet" type="text/css" /> -->
                <!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->
                <!--end::Layout Skins -->

 <link rel="shortcut icon" href="assets/media/logos/fixnix.png" />
<?php include '../siteheader.php';?>
</head>
<script type="text/javascript">
  function closeWin()
  {
    Swal.fire({
      title:'Good job!',
  text:'Your Info has been created!',
  type:'success'
  }).then(function() {
      window.location="/tncorona/intro.php";
  });
  }
</script>

  <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading"> <br><br>


<?php

$sql = "SELECT `infowellkey`,`infowellsec` from `wellness` order by id DESC limit 1";
$result = mysqli_query($link, $sql);
if (mysqli_num_rows($result) > 0) {

  while($row = mysqli_fetch_array($result))
{

?>
<div class="container">
<button type="button" class="btn btn-danger" onclick="closeWin()" style="float: right;">Close</button>
</div>
<div class="container">

          <div class="container" style="padding-left: 20%;">
         
            <div>
<!--                 <div class="" style="text-align: center;font-size: 20px;"><strong>WhistleBlower - Remember this is for future use</strong></div> -->
              <div class="modal-body">
               <div class="form-group">
                <label style="font-size: 20px;"><b>Speak Number</b></label><br>
                <span class="no" id="quantity" maxlength="14" style="border-color: #30B7B7; color:black;font-size: 36px;"><?php echo substr($row['infowellsec'], 0, 4) . "  " . substr($row['infowellsec'], 4, 4) . "  " . substr($row['infowellsec'],8,4) . "  " . substr($row['infowellsec'], 12, 4);?></span>
                <!-- <span class="no" id="quantity" maxlength="14" style="border-color: #30B7B7; color: #ffffff;font-size: 36px;"><?php echo  $row['ran'];?></span> -->
                <input type="text" id="copy" style="position: absolute;left: -1000px; top: -1000px;" value="<?php echo $row['infowellsec']; ?>">&nbsp;&nbsp;&nbsp;&nbsp;
                <button id="cpybtn" style="background: transparent; border-radius: 50px; width: 40px; height: 40px;" title="Copy to Clipboard"><i class="fa flaticon2-copy" style="color: red; font-size: 20px;"></i></button>
            </div>


             
 <div class="form-group">
              <label style="font-size: 20px;"><b>Speak code</b></label><br>
              <span id="quantity" class="no" maxlength="14" style="border-color: #30B7B7; color: black; font-size: 36px;"><?php echo substr($row['infowellkey'], 0, 4) . "  " . substr($row['infowellkey'], 4, 4) . "  " . substr($row['infowellkey'],8,4) . "  " . substr($row['infowellkey'], 12, 4);?></span>
              <input type="text" id="secCopy" style="position: absolute;left: -1000px; top: -1000px;" value="<?php echo $row['infowellkey']; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <button id="cpySec" style="background: transparent; border-radius: 50px; width: 40px; height: 40px;" title="Copy to Clipboard"><i class="fa flaticon2-copy" style="color: red; font-size: 20px;"></i></button>
             </div>

               <br>
              <input type="text" id="together" style="position: absolute; left: -1000px; top: -1000px;" value="Case Number: <?php echo $row['infowellsec']; ?>       Secret Code: <?php echo $row['infowellkey']; ?>">
              <button id="tog" style="background: transparent; border-radius: 50px; width: 100px; height: 50px; color: red; margin-left: 15%;" title="Copy together to Clipboard">Copy Together</button>

              </div>

             

           <!--    <div class="modal-footer">

                <button type="button" class="btn btn-success" onclick="window.location.href='idea/Ideain.php'">Close</button>
              </div> -->
            </div>
   
   <div>
                <div class="form-group">
                  <label style="font-size: 16px;" ><span style="color: black; font-size: 34px;">Remember this for future use</span></label>
                </div>
              </div>
            </div>
            </div>



<?php
}
}
?>

          

          
               <!--  <div class="col-sm-1"> -->
               
<script type="text/javascript">
  const myInp = document.getElementById("copy");
  const btnCopy = document.getElementById("cpybtn");
  myInp.type ='text';

  btnCopy.onclick= function() {
    myInp.select();

    document.execCommand("Copy");
  }

 

</script>
<script type="text/javascript">
  const myInp1 = document.getElementById("secCopy");
  const btnCopy1 = document.getElementById("cpySec");

  btnCopy1.onclick= function() {
    myInp1.select();

    document.execCommand("Copy");
  }

</script>
<script type="text/javascript">
  const myInp2 = document.getElementById("together");
  const btnCopy2 = document.getElementById("tog");

  btnCopy2.onclick= function() {
    myInp2.select();

    document.execCommand("Copy");
  }
</script>
<?php include '../footer.php';?>

<script>
            var KTAppOptions = {"colors":{"state":{"brand":"#2c77f4","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>
        <!-- end::Global Config -->
      <script src="../assets/js/demo3/scripts.bundle.js" type="text/javascript"></script>
      <script src="../assets/toggleButton/bootstrap-toggle.min.js"></script>
      <script type="text/javascript" src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>  
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.boot strapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
   
    <!--begin:: Global Mandatory Vendors -->
<script src="../assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
<script src="../assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
<script src="../assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
<script src="../assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
<script src="../assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
<script src="../assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
<script src="../assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
<script src="../assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>
<script src="../assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
<script src="../assets/vendors/custom/js/vendors/sweetalert2.init.js" type="text/javascript"></script>

         
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

            </body>
    <!-- end::Body -->
</html>

</body>
</html>