<?php
 include '../php/common/config.php';
 session_start();
  if(isset($_POST['admin']))
  {
   $email=$_POST['email'];
    $password=$_POST['password'];
      $sql="SELECT email,password FROM user Where email= '" . $email. "' and password= '" . $password. "'";
     $result=mysqli_query($link,$sql);
            if($rows=mysqli_fetch_assoc($result))
             { 
               $_SESSION['email']=$email;
           $_SESSION['password']=$password;  
            $_SESSION['last_name']=$name;   
              $password == 'wellness';
                
              
               if($_SESSION['email']=='wellness@nixwhistle.com'&& $rows['password'] == 'wellness')
               {
               
                 // echo "Sucessfully";
                header("location:/wellness/case/dashboard.php");
               // break;
               }
        

               if($_SESSION['email']=='clinic' && $_SESSION['password'] == 'wellness')
               {
               
                 // echo "Sucessfully";
                header("location:/wellness/case/clinicview.php");
               // break;
               }
               if($_SESSION['email']=='testing' && $_SESSION['password'] == 'wellness')
               {
               
                 // echo "Sucessfully";
                header("location:/wellness/case/testingview.php");
               // break;
               }
                 if($_SESSION['email']=='hospital' && $_SESSION['password'] == 'wellness')
               {
               
                 // echo "Sucessfully";
                header("location:/wellness/case/hospitalview.php");
               // break;
               }
           else if($rows['email']=='idea_analyst@nixwhistle.co'&& $rows['password']=='analyst')
               {
                 // echo "Sucessfully";
                header("location:/wellness/idea/view.php");
               }
            else if($rows['email']=='investigator@nixwhistle.co'&& $rows['password']=='investigator')
               {
                 // echo "Sucessfully";
                header("location:/wellness/investigator/view.php");
               }
               else if($rows['email']=='reviewer@nixwhistle.co'&& $rows['password']=='reviewer')
               {
                 // echo "Sucessfully";
                header("location:/wellness/reviewer/reviewerview.php");
               }
             }
             else
               {
                // echo "Error: " . $sql . "<br>" . $link->error;
                // alert("incorrect username and password");
               }
  }
?>
<!DOCTYPE html>
<html>
 <head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="/wellness/">
        <meta charset="utf-8"/>

        <title>Wellness Speak</title>
        <meta name="description" content="Base form control examples">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">        <!--end::Fonts -->
        <!--begin:: Global Mandatory Vendors -->
        <!--begin::Page Custom Styles(used by this page) -->
                             <link href="./assets/css/demo2/pages/wizard/wizard-1.css" rel="stylesheet" type="text/css" />
                     <link href="./assets/css/demo2/pages/wizard/wizard-3.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                    <link href="./assets/css/demo2/style.bundle.css" rel="stylesheet" type="text/css" />
                <!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->
                <!--end::Layout Skins -->

 <link rel="shortcut icon" href="assets/media/logos/fixnix.png" />

</head>
<style>
.zoom {

  transition: transform .2s; /* Animation */

}

.zoom:hover {
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
#disc
{

 box-shadow:  1px 1px 2px #D9D7D6, 0 0 25px #D9D7D6, 0 0 5px #D9D7D6;
}
#content
{

 box-shadow:  1px 1px 2px #D9D7D6, 0 0 25px #D9D7D6, 0 0 5px #D9D7D6;
}
.kt-font-transform-u
{

    font-size: 16px;
    color: white;
    text-align: center;
    padding: 15px;
    width: 240px;
    display: inline-block;
    border-radius: 18px;
    font-weight: 600;
    cursor: pointer;
    margin-right: 15px;

}
</style>

<style type="text/css">
  .nav-item:hover{
    border-bottom:3px solid #024da0;


  }
   .nav-item
   {
    border:2px solid transparent;
   }
</style>
<?php include '../siteheader.php'; ?>

 <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading" style="background-color: white;">

    <!-- begin:: Page -->
    <br>
<br>
 <div class="kt-container  kt-grid__item kt-grid__item--fluid" >
        <div class="row">
    <div class="col">
        <div class="zoom">
        <div class="alert alert-light alert-elevate fade show" role="alert" id="disc">
            <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
            <div class="alert-text">
            We are here to help.
First off, this is a secure consulting room and your identity is protected. We use the latest technology of Block Chain to provide this completely anonymous way of communicating. Neither your name, nor your telephone number is captured unless you voluntarily provide it. Please save the Speak number and key and should you need to visit us again, you may use them to log in to view your previous report with us.  There will be no trace of your contact with us other than this speak number. Should you choose to use the “Chat to a Wellness Expert” facility, it will connect to our telegram group from where a realtime counsellor team  will be available on call.  How may we help you?
            </div>
        </div>
    </div>
    </div>
</div>
</div>


 <div class="kt-container  kt-grid__item kt-grid__item--fluid" id="content">
                                         <div class="kt-portlet">
           <!--  <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                    TITLE
                    </h3>
                </div>
            </div> -->
            <div class="kt-portlet__body">
                <ul class="nav nav-tabs nav-justified" role="tablist">
                    <li class="nav-item" >
                        <a class="" data-toggle="tab" href="#kt_tabs_1_4">

                             <i class="fa flaticon-customer" style="font-size: 50px; color: #034ea2;"></i>  <label style="font-size:18px;font-weight: 500;color: black;">Emotinal Wellness</label>

                        </a>
                    </li>
               <!--
                    <li class="nav-item">
                        <a class="" data-toggle="tab" href="#kt_tabs_1_3">
                            <i class="flaticon-presentation" style="font-size: 50px; color: #afd135;"></i>  <label style="font-size:18px;font-weight: 500;color: black;">INFO</label>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="" data-toggle="tab" href="#kt_tabs_1_4">
                            <i class="fa flaticon-customer" style="font-size: 50px; color: #034ea2;"></i>  <label style="font-size:18px;font-weight: 500;color: black;">Emotinal Wellness</label>
                        </a>
                    </li> -->
                 
                </ul>
                <div class="tab-content">
                    

 
<div class="tab-pane active" id="kt_tabs_1_4" role="tabpanel">
    <div class="kt-container  kt-grid__item kt-grid__item--fluid">
    <div class="kt-portlet">
  <div class="kt-portlet__body kt-portlet__body--fit">
    <div class="kt-grid kt-wizard-v3 kt-wizard-v3--white" id="kt_wizard_v3" data-ktwizard-state="step-first">
      <div class="kt-grid__item">
        <!--begin: Form Wizard Nav -->
        <div class="kt-wizard-v3__nav">
          <div class="kt-wizard-v3__nav-items">
            <!--doc: Replace A tag with SPAN tag to disable the step link click -->
            <a class="kt-wizard-v3__nav-item" data-ktwizard-type="step" data-ktwizard-state="current" onclick="showvalue1()">
              <div class="kt-wizard-v3__nav-body">
                <div class="kt-wizard-v3__nav-label">
                  <span>1</span> Anxiety
                </div>
                <div class="kt-wizard-v3__nav-bar"></div>
              </div>
            </a>
            <a class="kt-wizard-v3__nav-item" data-ktwizard-type="step" onclick="showvalue1()">
              <div class="kt-wizard-v3__nav-body">
                <div class="kt-wizard-v3__nav-label">
                  <span>2</span> Depression
                </div>
                <div class="kt-wizard-v3__nav-bar"></div>
              </div>
            </a>
            <a class="kt-wizard-v3__nav-item" data-ktwizard-type="step" onclick="showvalue1()">
              <div class="kt-wizard-v3__nav-body">
                <div class="kt-wizard-v3__nav-label">
                  <span>3</span> Stress
                </div>
                <div class="kt-wizard-v3__nav-bar"></div>
              </div>
            </a>
            <a class="kt-wizard-v3__nav-item" data-ktwizard-type="step" onclick="showvalue1()">
              <div class="kt-wizard-v3__nav-body">
                <div class="kt-wizard-v3__nav-label">
                  <span>4</span> Self Esteem
                </div>
                <div class="kt-wizard-v3__nav-bar"></div>
              </div>
            </a>
            <a class="kt-wizard-v3__nav-item" data-ktwizard-type="step" onclick="showvalue1()">
              <div class="kt-wizard-v3__nav-body">
                <div class="kt-wizard-v3__nav-label">
                  <span>5</span> Review
                </div>
                <div class="kt-wizard-v3__nav-bar"></div>
              </div>
            </a>
          </div>
        </div>
        <!--end: Form Wizard Nav -->

      </div>
      <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v3__wrapper">
        <!--begin: Form Wizard Form-->
        <form class="kt-form" id="kt_form">
          <!--begin: Form Wizard Step 1-->
          <div class="kt-wizard-v3__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
              <div class="kt-form__section kt-form__section--first">
              <div class="kt-wizard-v1__form">

       
       <input type="hidden" name="infowellkey" id="infowellke">
          <input type="hidden" name="infowellsec" id="infowellsec">


                <div class="row">
                  <div class="col-md-12">

                <div name="Description" style="display: ;">
            <p style="font-size: 20px; font-weight: 500">District :</p>
            <div>
                <div id="searchbox2">
           
<select id="dist" name="dist" class="form-control"  style="border-color:#B8B8BB;background:transparent;">
   
       <option>Select your District</option>
         <option value='Chennai'  data-title="Chennai">Chennai</option>
         <option value='Ariyalur'  data-title="Ariyalur">Ariyalur</option>
         <option value='Chengalpattu'  data-title="Chengalpattu">Chengalpattu</option>
         <option value='Coimbatore'  data-title="Coimbatore">Coimbatore</option>
         <option value='Cuddalore'  data-title="Cuddalore">Cuddalore</option>
         <option value='Dharmapuri'  data-title="Dharmapuri">Dharmapuri</option>
         <option value='Dindigul'  data-title="Dindigul">Dindigul</option>
         <option value='Erode'  data-title="Erode">Erode</option>
         <option value='Kallakurichi'  data-title="Kallakurichi">Kallakurichi</option>
         <option value='Kanchipuram'  data-title="Kanchipuram">Kanchipuram</option>
         <option value='Kanniyakumari'  data-title="Kanniyakumari">Kanniyakumari</option>
         <option value='Karur'  data-title="Karur">Karur</option>
         <option value='Krishnagiri'  data-title="Krishnagiri">Krishnagiri</option>
         <option value='Madurai'  data-title="Madurai">Madurai</option>
         <option value='Mayiladuthurai'  data-title="Mayiladuthurai">Mayiladuthurai</option>
         <option value='Nagapattinam'  data-title="Nagapattinam">Nagapattinam</option>
         <option value='Namakkal'  data-title="Namakkal">Namakkal</option>
         <option value='Nilgiris'  data-title="Nilgiris">Nilgiris</option>
         <option value='Perambalur'  data-title="Perambalur">Perambalur</option>
         <option value='Pudukkottai'  data-title="Pudukkottai">Pudukkottai</option>
         <option value='Ramanathapuram'  data-title="Ramanathapuram">Ramanathapuram</option>
         <option value='Ranipet'  data-title="Ranipet">Ranipet</option>
         <option value='Salem'  data-title="Salem">Salem</option>
         <option value='Sivagangai'  data-title="Sivagangai">Sivagangai</option>
         <option value='Tenkasi'  data-title="Tenkasi">Tenkasi</option>
         <option value='Thanjavur'  data-title="Thanjavur">Thanjavur</option>
         <option value='Theni'  data-title="Theni">Theni</option>
         <option value='Thoothukudi'  data-title="Thoothukudi">Thoothukudi</option>
         <option value='Tiruchirappalli'  data-title="Tiruchirappalli">Tiruchirappalli</option>
         <option value='Tirunelveli'  data-title="Tirunelveli">Tirunelveli</option>
         <option value='Tirupattur'  data-title="Tirupattur">Tirupattur</option>
         <option value='Tiruppur'  data-title="Tiruppur">Tiruppur</option>
         <option value='Tiruvallur'  data-title="Tiruvallur">Tiruvallur</option>
         <option value='Tiruvannamalai'  data-title="Tiruvannamalai">Tiruvannamalai</option>
         <option value='Tiruvarur'  data-title="Tiruvarur">Tiruvarur</option>
         <option value='Vellore'  data-title="Vellore">Vellore</option>
         <option value='Viluppuram'  data-title="Viluppuram">Viluppuram</option>
         <option value='Virudhunagar'  data-title="Virudhunagar">Virudhunagar</option>

</select>
         
        </div>
      </div>
    </div>
  </div>

</div>


                                        <div class="form-group">
                                      <div class="kt-section__content">
                        <label data-toggle="kt-popover" title="tooltip title" data-content="And here's some amazing content. It's very engaging. Right?" class="kt-heading kt-heading--md" style="font-size: 20px; font-weight: 500">Your Details:</label>
                    </div>  
                     <div class="form-group ">
             
              <label class="kt-radio kt-radio--solid kt-radio--info" style="color: black;font-size: 14px;background-color: ">
         <input type="radio" name="udetails" value="Anonymouss" id="Anonymous" checked="checked">Keen to be Anonymous
         <span></span>
       </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black; font-size: 14px;">
             <input type="radio" name="udetails" value="disclosee" id="disclose"> Keen to disclose

             <span></span>
           </label>


      </div>
     </div>
     <div id="detail">
            <div class="row">
         <div class="col-md-4 ">
           <input type="text" placeholder="FullName" id="name" name="name" class="form-control">&nbsp;
        </div>
      <div class="col-md-4">
        <input type="text" placeholder="Age" id="email" name="email" class="form-control">&nbsp;
      </div>
      <div class="col-md-4">
        <input type="text" placeholder="Phone" id="phone" name="phone" class="form-control" >
      </div>


  </div>
  <div class="row">
     <div class="col-md-12">
        <input type="text" placeholder="Address" id="address" name="address" class="form-control" >
      </div>
  </div>

</div>


<br>
  <div class="form-group">

                  <p style="font-size: 20px; font-weight: 500"> How many people living in your home?</p>
                  <div class="row">
                    <div class="col-md-2">
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="yourself" name="family" value="For yourself">
                    <label for="yourself">one</label><span></span> </label>
                  </div>
                  <div class="col-md-2">
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="parent" name="family" value="Parent">
                    <label for="parent">Two</label><span></span></label>
                  </div>
                  <div class="col-md-2">
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="spouce" name="family" value="Spouce">
                    <label for="spouce">Three</label><span></span></label>
                  </div>
                  <div class="col-md-2">
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="Child" name="family" value="Child">
                    <label for="Child">Four</label><span></span></label>
                  </div>
                  <div class="col-md-2">
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="someone_else" name="family" value="Someone else">
                    <label for="someone_else">Five</label><span></span></label>
                  </div>
                  </div>
                </div>
<br>

                <div id="div0" name="Description" style="display: ;">
            <p style="font-size: 20px; font-weight: 500">Category :</p>
            <div>
                <div id="searchbox2">
           
<select class="form-control kt-select2" id="kt_select2_3" name="category" multiple="multiple" style="width: 100%; height:60px;" placeholder="select">
        <option value="DEPRESSSION" selected>DEPRESSSION</option>
        <option value="ANXIETY">ANXIETY</option>
        <option value="STRESS">STRESS</option>
        <option value="ADHD">ADHD</option>
        <option value="ALCOHOL/DRUGUSE">ALCOHOL/DRUG USE</option>
        <option value="BIPOLAR">BIPOLAR</option>
        <option value="BORDERLINE">BORDERLINE(BPD)</option>
        <option value="BREAKUP">BREAK UPS</option>
        <option value="BULLYING">BULLYING</option>
        <option value="CANCER">CANCER</option>
        <option value="CHRONICPAIN">CHRONIC PAIN</option>
        <option value="DIABETES">DIABETES</option>
        <option value="DISABILITIES">DISABILITIES</option>
        <option value="DOMESTICVIOLENCE">DOMESTIC VIOLENCE</option>
        <option value="EATINGDISORDERS">EATING DISORDERS</option>
        <option value="EXERCISEMOTIVATION">EXERCISE MOTIVATION</option>
        <option value="FORGIVENESS">FORGIVENESS</option>
        <option value="GENERALMENTALHEALTH">GENERAL MENTAL HEALTH</option>
        <option value="GETTINGUNSTUCK">GETTING UNSTUCK</option>
        <option value="GRIEF">GRIEF</option>
        <option value="LGBTQ+">LGBTQ+</option>
        <option value="LONELINESS">LONELINESS</option>
        <option value="MANAGINGEMOTIONS">MANAGING EMOTIONS</option>
        <option value="MENSANDWOMENSISSUES">MENS AND WOMENS ISSUES</option>
        <option value="OBSESSIVECOMPLSIVEDISORDER">OBSESSIVE COMPULSIVE DISORDER(OCD)</option>
        <option value="PANICATTACKS">PANIC ATTACKS</option>
        <option value="PARENTING">PARENTING</option>
        <option value="PERINATALMOODDISORDER">PERINATAL MOOD DISORDER</option>
        <option value="PTSD/TRAUMA">PTSD/TRAUMA</option>
        <option value="RECOVERY">RECOVERY</option>
        <option value="RELATIONSHIPSTRESS">RELATIONSHIP STRESS</option>
        <option value="SELFESTEEM">SELF ESTEEM</option>
        <option value="SELFHARM">SELF HARM</option>
        <option value="SLEEPINGWELL">SLEEPING WELL</option>
        <option value="SLEEPLESSNESS">SLEEPLESSNESS</option>
        <option value="SOCIALANXIETY">SOCIAL ANXIETY</option>
        <option value="SPIRITUALITY">SPIRITUALITY</option>
        <option value="STUDENTLIFT">STUDENT LIFT</option>
        <option value="WEIGHTMANAGEMENT">WEIGHT MANAGEMENT</option>
        <option value="WORKSTRESS">WORK STRESS</option>


</select>
         
        </div>
      </div>
    </div>
    <br>


                <div class="form-group">
                                      <div class="kt-section__content">
                        <label data-toggle="kt-popover" title="tooltip title" data-content="And here's some amazing content. It's very engaging. Right?" class="kt-heading kt-heading--md" style="font-size: 20px; font-weight: 500"><strong>Hobbies:<strong></label>
                    </div>  
                     <div class="form-group row ">
             
              <label class="kt-radio kt-radio--solid kt-radio--info" style="color: black;font-size: 14px;background-color: ">General
       </label>
         &nbsp; &nbsp;  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
       <div class="col-md-4">
         
 <select id="general" name="general" class="form-control">
   <option value="Indoor">Indoor</option>
   <option value="Outdoor">Outdoor</option>
 </select>
       </div>
     </div>
  <div class="form-group row ">
            <label class="kt-radio kt-radio--solid kt-radio--info" style="color: black;font-size: 14px;background-color: ">Collection
       </label>
       &nbsp; &nbsp;  &nbsp; &nbsp;
             <div class="col-md-4">
         
 <select id="collection" name="collection" class="form-control">
   <option value="Indoor">Indoor</option>
   <option value="Outdoor">Outdoor</option>
 </select>
       </div>
 </div>
   <div class="form-group row ">
            <label class="kt-radio kt-radio--solid kt-radio--info" style="color: black;font-size: 14px;background-color: ">Competitive
       </label>&nbsp; &nbsp; 
                    <div class="col-md-4">
 <select id="competitive" name="competitive" class="form-control">
   <option value="Indoor">Indoor</option>
   <option value="Outdoor">Outdoor</option>
 </select>
       </div>
     </div>
  <div class="form-group row ">

            <label class="kt-radio kt-radio--solid kt-radio--info" style="color: black;font-size: 14px;background-color: ">Observation

       </label> &nbsp; &nbsp;
             <div class="col-md-4">
 <select id="observation" name="observation" class="form-control">
   <option value="Indoor">Indoor</option>
   <option value="Outdoor">Outdoor</option>
 </select>
       </div>
        


      </div>
     </div>


               <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">1. I found myself getting upset by quite trivial things ?</p>

                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_1" name="quitetrivial" />
                    </div>
                 <!-- <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="quitetrivial" name="quitetrivial" value="Not at all">
                    <label for="quitetrivial">Not at all</label><span></span> </label><br>

                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="quitetrivials" name="quitetrivial" value="All the time">
                    <label for="quitetrivial">All the time</label><span></span></label><br> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">2. I was aware of dryness of my mouth ?</p>
                    <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_2" name="dryness" />
                    </div>
                    <!-- <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="dryness" name="dryness" value="Not at all">
                    <label for="dryness">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="drynesss" name="dryness" value="All the time">
                    <label for="dryness">All the time</label><span></span></label><br> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">3. I couldn't seem to experience any positive feeling at all ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_3" name="positivefeeling" />
                    </div>
                 <!-- <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="positivefeeling" name="positivefeeling" value="Not at all">
                    <label for="positivefeeling">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="positivefeelings" name="positivefeeling" value="All the time">
                    <label for="positivefeeling">All the time</label><span></span></label><br> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">4. I experienced breathing difficulty (eg, excessively rapid breathing, breathlessness in the absence of physical exertion) ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_4" name="breathing" />
                    </div>
                   <!--  <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="breathing" name="breathing" value="Not at all">
                    <label for="breathing">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="breathings" name="breathing" value="All the time">
                    <label for="breathing">All the time</label><span></span></label><br> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">5. I just couldn't seem to get going ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_5" name="getgoing" />
                    </div>
                 <!-- <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="getgoing" name="getgoing" value="Not at all">
                    <label for="getgoing">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="getgoings" name="getgoing" value="All the time">
                    <label for="getgoing">All the time</label><span></span></label><br> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">6. I tended to over-react to situations ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_6" name="situations" />
                    </div>
                    <!-- <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="situations" name="situations" value="Not at all">
                    <label for="situations">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="situationss" name="situations" value="All the time">
                    <label for="situations">All the time</label><span></span></label><br>
 -->                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">7. I had a feeling of shakiness (eg, legs going to give way) ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_7" name="shakiness" />
                    </div>
                 <!-- <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="shakiness" name="shakiness" value="Not at all">
                    <label for="shakiness">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="shakinesss" name="shakiness" value="All the time">
                    <label for="shakiness">All the time</label><span></span></label><br> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">8. I found it difficult to relax ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_8" name="relax" />
                    </div>
                    <!-- <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="relax" name="relax" value="Not at all">
                    <label for="relax">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="relaxs" name="relax" value="All the time">
                    <label for="relax">All the time</label><span></span></label><br> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">9. I found myself in situations that made me so anxious I was most relieved when they ended ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_9" name="anxious" />
                    </div>
                 <!-- <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="anxious" name="anxious" value="Not at all">
                    <label for="anxious">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="anxiouss" name="anxious" value="All the time">
                    <label for="anxious">All the time</label><span></span></label><br> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">10. I felt that I had nothing to look forward to ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_10" name="forward" />
                    </div>
                    <!-- <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="forward" name="forward" value="Not at all">
                    <label for="forward">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="forwards" name="forward" value="All the time">
                    <label for="forward">All the time</label><span></span></label><br> -->
                </div>
               
               
             
              </div>
            </div>
          </div>
          <!--end: Form Wizard Step 1-->

          <!--begin: Form Wizard Step 2-->
          <div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
              <div class="kt-form__section kt-form__section--first">
              <div class="kt-wizard-v1__form">
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">11. I found myself getting upset rather easily ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_11" name="upset" />
                    </div>
                    <!-- <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="upset" name="upset" value="Not at all">
                    <label for="upset">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="upsets" name="upset" value="All the time">
                    <label for="upset">All the time</label><span></span></label><br> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">12. I felt that I was using a lot of nervous energy ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_12" name="nervous" />
                    </div>
                    <!-- <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="nervous" name="nervous" value="Not at all">
                    <label for="nervous">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="nervouss" name="nervous" value="All the time">
                    <label for="nervous">All the time</label><span></span></label><br> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">13. I felt sad and depressed ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_13" name="saddepressed" />
                    </div>
                 <!-- <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="saddepressed" name="saddepressed" value="Not at all">
                    <label for="saddepressed">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="saddepresseds" name="saddepressed" value="All the time">
                    <label for="saddepressed">All the time</label><span></span></label><br> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">14. I found myself getting impatient when I was delayed in any way (eg, lifts, traffic lights, being kept waiting) ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_14" name="impatient" />
                    </div>
                   <!--  <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="impatient" name="impatient" value="Not at all">
                    <label for="impatient">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="impatients" name="impatient" value="All the time">
                    <label for="impatient">All the time</label><span></span></label><br> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">15. I had a feeling of faintness ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_15" name="faintness" />
                    </div>
                <!--  <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="faintness" name="faintness" value="Not at all">
                    <label for="faintness">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="faintnesss" name="faintness" value="All the time">
                    <label for="faintness">All the time</label><span></span></label><br> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">16. I felt that I had lost interest in just about everything ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_16" name="lostinterest" />
                    </div>
                   <!--  <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="lostinterest" name="lostinterest" value="Not at all">
                    <label for="lostinterest">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="lostinterests" name="lostinterest" value="All the time">
                    <label for="lostinterest">All the time</label><span></span></label><br> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">17. I felt I wasn't worth much as a person ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_17" name="worthperson" />
                    </div>
                <!--  <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="worthperson" name="worthperson" value="Not at all">
                    <label for="worthperson">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="worthpersons" name="worthperson" value="All the time">
                    <label for="worthperson">All the time</label><span></span></label><br> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">18. I felt that I was rather touchy ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_18" name="touchy" />
                    </div>
                   <!--  <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="touchy" name="touchy" value="Not at all">
                    <label for="touchy">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="touchys" name="touchy" value="All the time">
                    <label for="touchy">All the time</label><span></span></label><br> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">19. I perspired noticeably (eg, hands sweaty) in the absence of high temperatures or physical exertion ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_19" name="noticeably" />
                    </div>
                 <!-- <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="noticeably" name="noticeably" value="Not at all">
                    <label for="noticeably">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="noticeablys" name="noticeably" value="All the time">
                    <label for="noticeably">All the time</label><span></span></label><br> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">20. I felt scared without any good reason ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_20" name="goodreason" />
                    </div>
                    <!-- <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="goodreason" name="goodreason" value="Not at all">
                    <label for="goodreason">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="goodreasons" name="goodreason" value="All the time">
                    <label for="goodreason">All the time</label><span></span></label><br> -->
                </div>
               
              </div>
            </div>
          </div>
          <!--end: Form Wizard Step 2-->

          <!--begin: Form Wizard Step 3-->
          <div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
              <div class="kt-form__section kt-form__section--first">
              <div class="kt-wizard-v1__form">
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">21. I felt that life wasn't worthwhile ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_21" name="worthwhile" />
                    </div>
                 <!-- <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="worthwhile" name="worthwhile" value="Not at all">
                    <label for="worthwhile">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="worthwhiles" name="worthwhile" value="All the time">
                    <label for="worthwhile">All the time</label><span></span></label><br> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">22. I found it hard to wind down ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_22" name="winddown" />
                    </div>
                    <!-- <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="winddown" name="winddown" value="Not at all">
                    <label for="winddown">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="winddowns" name="winddown" value="All the time">
                    <label for="winddown">All the time</label><span></span></label><br> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">23. I had difficulty in swallowing ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_23" name="swallowing" />
                    </div>
                <!--  <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="swallowing" name="swallowing" value="Not at all">
                    <label for="swallowing">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="swallowings" name="swallowing" value="All the time">
                    <label for="swallowing">All the time</label><span></span></label><br> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">24. I couldn't seem to get any enjoyment out of the things I did ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_24" name="enjoyment" />
                    </div>
                   <!--  <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="enjoyment" name="enjoyment" value="Not at all">
                    <label for="enjoyment">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="enjoyments" name="enjoyment" value="All the time">
                    <label for="enjoyment">All the time</label><span></span></label><br> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">25. I was aware of the action of my heart in the absence of physical exertion (eg, sense of heart rate increase, heart missing a beat) ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_25" name="physicalexertion" />
                    </div>
                 <!-- <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="physicalexertion" name="physicalexertion" value="Not at all">
                    <label for="physicalexertion">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="physicalexertions" name="physicalexertion" value="All the time">
                    <label for="physicalexertion">All the time</label><span></span></label><br> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">26. I felt down-hearted and blue ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_26" name="feltdown" />
                    </div>
                    <!-- <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="feltdown" name="feltdown" value="Not at all">
                    <label for="feltdown">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="feltdowns" name="feltdown" value="All the time">
                    <label for="feltdown">All the time</label><span></span></label><br> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">27. I found that I was very irritable ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_27" name="irritable" />
                    </div>
                <!--  <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="irritable" name="irritable" value="Not at all">
                    <label for="irritable">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="irritables" name="irritable" value="All the time">
                    <label for="irritable">All the time</label><span></span></label><br> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">28. I felt I was close to panic ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_28" name="closepanic" />
                    </div>
                    <!-- <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="closepanic" name="closepanic" value="Not at all">
                    <label for="closepanic">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="closepanics" name="closepanic" value="All the time">
                    <label for="closepanic">All the time</label><span></span></label><br> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">29. I found it hard to calm down after something upset me ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_29" name="somethingupset" />
                    </div>
                 <!-- <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="somethingupset" name="somethingupset" value="Not at all">
                    <label for="somethingupset">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="somethingupsets" name="somethingupset" value="All the time">
                    <label for="somethingupset">All the time</label><span></span></label><br> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">30. I feared that I would be "thrown" by some trivial but unfamiliar task ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_30" name="trivial" />
                    </div>
                    <!-- <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="trivial" name="trivial" value="Not at all">
                    <label for="trivial">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="trivials" name="trivial" value="All the time">
                    <label for="trivial">All the time</label><span></span></label><br> -->
                </div>
               
               
              </div>
            </div>
          </div>
          <!--end: Form Wizard Step 3-->

          <!--begin: Form Wizard Step 4-->
          <div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
<!--             <div class="kt-heading kt-heading--md">Setup Your Delivery Location</div>
 -->            <div class="kt-form__section kt-form__section--first">
              <div class="kt-wizard-v1__form">
                  <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">31. I was unable to become enthusiastic about anything ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_31" name="enthusiastic" />
                    </div>
                 <!-- <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="enthusiastic" name="enthusiastic" value="Not at all">
                    <label for="enthusiastic">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="enthusiastics" name="enthusiastic" value="All the time">
                    <label for="enthusiastic">All the time</label><span></span></label><br> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">32. I found it difficult to tolerate interruptions to what I was doing ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_32" name="interruptions" />
                    </div>
                   <!--  <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="interruptions" name="interruptions" value="Not at all">
                    <label for="interruptions">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="interruptionss" name="interruptions" value="All the time">
                    <label for="interruptions">All the time</label><span></span></label><br> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">33. I was in a state of nervous tension ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_33" name="nervoustension" />
                    </div>
                 <!-- <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="nervoustension" name="nervoustension" value="Not at all">
                    <label for="nervoustension">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="nervoustensions" name="nervoustension" value="All the time">
                    <label for="nervoustension">All the time</label><span></span></label><br> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">34. I felt I was pretty worthless ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_34" name="prettyworthless" />
                    </div>
                    <!-- <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="prettyworthless" name="prettyworthless" value="Not at all">
                    <label for="prettyworthless">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="prettyworthlesss" name="prettyworthless" value="All the time">
                    <label for="prettyworthless">All the time</label><span></span></label><br> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">35. I was intolerant of anything that kept me from getting on with what I was doing ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_35" name="intolerant" />
                    </div>
                 <!-- <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="intolerant" name="intolerant" value="Not at all">
                    <label for="intolerant">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="intolerants" name="intolerant" value="All the time">
                    <label for="intolerant">All the time</label><span></span></label><br> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">36. I felt terrified ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_36" name="terrified" />
                    </div>
                    <!-- <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="terrified" name="terrified" value="Not at all">
                    <label for="terrified">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="terrifieds" name="terrified" value="All the time">
                    <label for="terrified">All the time</label><span></span></label><br> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">37. I could see nothing in the future to be hopeful about ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_37" name="hopefulabout" />
                    </div>
                 <!-- <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="hopefulabout" name="hopefulabout" value="Not at all">
                    <label for="hopefulabout">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="hopefulabouts" name="hopefulabout" value="All the time">
                    <label for="hopefulabout">All the time</label><span></span></label><br> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">38. I felt that life was meaningless ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_38" name="meaningless" />
                    </div>
                   <!--  <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="meaningless" name="meaningless" value="Not at all">
                    <label for="meaningless">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="meaninglesss" name="meaningless" value="All the time">
                    <label for="meaningless">All the time</label><span></span></label><br> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">39. I found myself getting agitated   ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_39" name="agitated" />
                    </div>
                 <!-- <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="agitated" name="agitated" value="Not at all">
                    <label for="agitated">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="agitateds" name="agitated" value="All the time">
                    <label for="agitated">All the time</label><span></span></label><br> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">40. I was worried about situations in which I might panic and make a fool of myself ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_40" name="panic" />
                    </div>
                    <!-- <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="panic" name="panic" value="Not at all">
                    <label for="panic">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="panics" name="panic" value="All the time">
                    <label for="panic">All the time</label><span></span></label><br> -->
                </div>
                <div class="form-group">
                 
                  <p style="font-size: 20px; font-weight: 500">41. I experienced trembling (eg, in the hands) ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_41" name="trembling" />
                    </div>
                   <!--  <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="trembling" name="trembling" value="Not at all">
                    <label for="trembling">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="tremblings" name="trembling" value="All the time">
                    <label for="trembling">All the time</label><span></span></label><br> -->
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">42. I found it difficult to work up the initiative to do things ?</p>
                  <div class="kt-ion-range-slider">
                      <input type="hidden" id="kt_slider_42" name="difficultwork" />
                    </div>
                   <!--  <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="difficultwork" name="difficultwork" value="Not at all">
                    <label for="difficultwork">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="difficultworks" name="difficultwork" value="All the time">
                    <label for="difficultwork">All the time</label><span></span></label><br> -->
                </div>
<!--
                <div id="div0" name="Description" style="display: ;">
            <p style="font-size: 20px; font-weight: 500">Category :</p>
            <div>
                <div id="searchbox2">
           
<select class="form-control kt-select2" id="kt_select2_3" name="param" multiple="multiple" style="width: 100%;" placeholder="select">
        <option value="DEPRESSSION" selected>DEPRESSSION</option>
        <option value="ANXIETY">ANXIETY</option>
        <option value="STRESS">STRESS</option>
        <option value="ADHD">ADHD</option>
        <option value="ALCOHOL/DRUGUSE">ALCOHOL/DRUG USE</option>
        <option value="BIPOLAR">BIPOLAR</option>
        <option value="BORDERLINE">BORDERLINE(BPD)</option>
        <option value="BREAKUP">BREAK UPS</option>
        <option value="BULLYING">BULLYING</option>
        <option value="CANCER">CANCER</option>
        <option value="CHRONICPAIN">CHRONIC PAIN</option>
        <option value="DIABETES">DIABETES</option>
        <option value="DISABILITIES">DISABILITIES</option>
        <option value="DOMESTICVIOLENCE">DOMESTIC VIOLENCE</option>
        <option value="EATINGDISORDERS">EATING DISORDERS</option>
        <option value="EXERCISEMOTIVATION">EXERCISE MOTIVATION</option>
        <option value="FORGIVENESS">FORGIVENESS</option>
        <option value="GENERALMENTALHEALTH">GENERAL MENTAL HEALTH</option>
        <option value="GETTINGUNSTUCK">GETTING UNSTUCK</option>
        <option value="GRIEF">GRIEF</option>
        <option value="LGBTQ+">LGBTQ+</option>
        <option value="LONELINESS">LONELINESS</option>
        <option value="MANAGINGEMOTIONS">MANAGING EMOTIONS</option>
        <option value="MENSANDWOMENSISSUES">MENS AND WOMENS ISSUES</option>
        <option value="OBSESSIVECOMPLSIVEDISORDER">OBSESSIVE COMPULSIVE DISORDER(OCD)</option>
        <option value="PANICATTACKS">PANIC ATTACKS</option>
        <option value="PARENTING">PARENTING</option>
        <option value="PERINATALMOODDISORDER">PERINATAL MOOD DISORDER</option>
        <option value="PTSD/TRAUMA">PTSD/TRAUMA</option>
        <option value="RECOVERY">RECOVERY</option>
        <option value="RELATIONSHIPSTRESS">RELATIONSHIP STRESS</option>
        <option value="SELFESTEEM">SELF ESTEEM</option>
        <option value="SELFHARM">SELF HARM</option>
        <option value="SLEEPINGWELL">SLEEPING WELL</option>
        <option value="SLEEPLESSNESS">SLEEPLESSNESS</option>
        <option value="SOCIALANXIETY">SOCIAL ANXIETY</option>
        <option value="SPIRITUALITY">SPIRITUALITY</option>
        <option value="STUDENTLIFT">STUDENT LIFT</option>
        <option value="WEIGHTMANAGEMENT">WEIGHT MANAGEMENT</option>
        <option value="WORKSTRESS">WORK STRESS</option>
</select>
         
        </div>
      </div>
    </div> -->
             
              </div>
            </div>
          </div>
          <!--end: Form Wizard Step 4-->

          <!--begin: Form Wizard Step 5-->
          <div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
            <div class="kt-heading kt-heading--md">Review your Details and Submit</div>
              <div class="kt-form__section kt-form__section--first">
              <div class="kt-wizard-v1__review">
                <div class="kt-wizard-v1__review-item">
                  <div class="kt-wizard-v1__review-title" style="font-size: 16px;">
                    Anxiety
                  </div><br>
                  <div class="kt-wizard-v1__review-content">
                    <label><b>1. I found myself getting upset by quite trivial things :  </b></label><p id="res1"></p>
                    <label><b>2. I was aware of dryness of my mouth :  </b></label><p id="res2"></p>
                    <label><b>3. I couldn't seem to experience any positive feeling at all :  </b></label><p id="res3"></p>
                    <label><b>4. I experienced breathing difficulty :  </b></label><p id="res4"></p>
                    <label><b>5. I just couldn't seem to get going :  </b></label><p id="res5"></p>
                    <label><b>6. I tended to over-react to situations :  </b></label><p id="res6"></p>
                    <label><b>7. I had a feeling of shakiness :  </b></label><p id="res7"></p>
                    <label><b>8. I found it difficult to relax :  </b></label><p id="res8"></p>
                    <label><b>9. I found myself in situations that made me so anxious I was most relieved when they ended :  </b></label><p id="res9"></p>
                    <label><b>10. I felt that I had nothing to look forward to :  </b></label><p id="res10"></p>
                  </div>
                </div>
                <div class="kt-wizard-v1__review-item">
                  <div class="kt-wizard-v1__review-title" style="font-size: 16px;">
                    Depression
                  </div><br>
                  <div class="kt-wizard-v1__review-content">
                    <label><b>11. I found myself getting upset rather easily :  </b></label><p id="res11"></p>
                    <label><b>12. I felt that I was using a lot of nervous energy :  </b></label><p id="res12"></p>
                    <label><b>13. I felt sad and depressed :  </b></label><p id="res13"></p>
                    <label><b>14. I found myself getting impatient when I was delayed in any way  :  </b></label><p id="res14"></p>
                    <label><b>15. I had a feeling of faintness :  </b></label><p id="res15"></p>
                     <label><b>16. I felt that I had lost interest in just about everything :  </b></label><p id="res16"></p>
                    <label><b>17. I felt I wasn't worth much as a person :  </b></label><p id="res17"></p>
                    <label><b>18. I felt that I was rather touchy :  </b></label><p id="res18"></p>
                    <label><b>19. I perspired noticeably (eg, hands sweaty) in the absence of high temperatures or physical exertion :  </b></label><p id="res19"></p>
                    <label><b>20. I felt scared without any good reason :  </b></label><p id="res20"></p>
                   
                  </div>
                </div>
                <div class="kt-wizard-v1__review-item">
                  <div class="kt-wizard-v1__review-title" style="font-size: 16px;">
                    Stress
                  </div><br>
                  <div class="kt-wizard-v1__review-content">
                    <label><b>21. I felt that life wasn't worthwhile :  </b></label><p id="res21"></p>
                    <label><b>22. I found it hard to wind down :  </b></label><p id="res22"></p>
                    <label><b>23. I had difficulty in swallowing :  </b></label><p id="res23"></p>
                    <label><b>24. I couldn't seem to get any enjoyment out of the things I did :  </b></label><p id="res24"></p>
                    <label><b>25. I was aware of the action of my heart in the absence of physical exertion :  </b></label><p id="res25"></p>
                     <label><b>26. I felt down-hearted and blue :  </b></label><p id="res26"></p>
                    <label><b>27. I found that I was very irritable :  </b></label><p id="res27"></p>
                    <label><b>28. I felt I was close to panic :  </b></label><p id="res28"></p>
                    <label><b>29. I found it hard to calm down after something upset me :  </b></label><p id="res29"></p>
                    <label><b>30. I feared that I would be "thrown" by some trivial but unfamiliar task :  </b></label><p id="res30"></p>
                  </div>
                </div>
                <div class="kt-wizard-v1__review-item">
                  <div class="kt-wizard-v1__review-title" style="font-size: 16px;">
                   Self Esteem
                  </div><br>
                  <div class="kt-wizard-v1__review-content">
                   <label><b>31. I was unable to become enthusiastic about anything :  </b></label><p id="res31"></p>
                    <label><b>32. I found it difficult to tolerate interruptions to what I was doing :  </b></label><p id="res32"></p>
                    <label><b>33. I was in a state of nervous tension :  </b></label><p id="res33"></p>
                    <label><b>34. I felt I was pretty worthless :  </b></label><p id="res34"></p>
                    <label><b>35. I was intolerant of anything that kept me from getting on with what I was doing :  </b></label><p id="res35"></p>
                    <label><b>36. I felt terrified :  </b></label><p id="res36"></p>
                    <label><b>37. I could see nothing in the future to be hopeful about :  </b></label><p id="res37"></p>
                    <label><b>38. I felt that life was meaningless :  </b></label><p id="res38"></p>
                    <label><b>39. I found myself getting agitated :  </b></label><p id="res39"></p>
                    <label><b>40. I was worried about situations in which I might panic and make a fool of myself :  </b></label><p id="res40"></p>
                    <label><b>41. I experienced trembling  :  </b></label><p id="res41"></p>
                    <label><b>42. I found it difficult to work up the initiative to do things :  </b></label><p id="res42"></p>
                    <!-- <label><b>43. Category : </b></label><p id="res43"></p> -->

                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--end: Form Wizard Step 5-->

          <!--begin: Form Actions -->
          <div class="kt-form__actions">
            <button class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
              Previous
            </button>
         
                 <button type="button" name="sub"  class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit" style="background-color:#afd135;border:2px solid #afd135;" onclick="myfunction()">Submit</button>
            <button class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next" onclick="showvalue1()">
              Next Step
            </button>
          </div>
          <!--end: Form Actions -->
        </form>
       
        <!--end: Form Wizard Form-->
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
 

 <script>
            var KTAppOptions = {"colors":{"state":{"brand":"#2c77f4","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>
     
<script src="./assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
<script src="./assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
<script src="./assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
<script src="./assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>
<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<script src="./assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-switch.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
<script src="./assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
<script src="./assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
<script src="./assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
<script src="./assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
<script src="./assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
<script src="./assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
<script src="./assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
<script src="./assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
<script src="./assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
<script src="./assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/dropzone.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/quill/dist/quill.js" type="text/javascript"></script>
<script src="./assets/vendors/general/@yaireo/tagify/dist/tagify.polyfills.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/@yaireo/tagify/dist/tagify.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
<script src="./assets/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-markdown.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-notify.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/jquery-validation.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/dual-listbox/dist/dual-listbox.js" type="text/javascript"></script>
<script src="./assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
<script src="./assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
<script src="./assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
<script src="./assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
<script src="./assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/sweetalert2.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
<script src="./assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>
<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Bundle(used by all pages) -->
               
             <script src="./assets/js/demo2/scripts.bundle.js" type="text/javascript"></script>
             <script type="text/javascript" src="./assets/js/demo2/scriptresult.js"></script>
        <!--end::Global Theme Bundle -->

       
                    <!--begin::Page Scripts(used by this page) -->
                            <script src="./assets/js/demo2/pages/wizard/wizard-1.js" type="text/javascript"></script>
                            <script src="./assets/js/demo2/pages/wizard/wizard-3.js" type="text/javascript"></script>
                            <script src="./assets/js/demo2/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>
                            <script src="./assets/js/demo2/pages/crud/forms/widgets/ion-range-slider.js" type="text/javascript"></script>
                              <script src="js/case/wellnessmanagement.js"></script>
    <!-- end::Body -->
</body>
</html>

<script>
$(document).ready(function(){
  $("#details").hide();
$("input[type='radio']").change(function(){
if($(this).val()=="Anonymous")
{
$("#details").hide();
}
if($(this).val()=="disclose")
{
$("#details").show();
}
});
});
</script>
<script>
$(document).ready(function(){
  $("#detail").hide();
$("input[type='radio']").change(function(){
if($(this).val()=="Anonymouss")
{
$("#detail").hide();
}
if($(this).val()=="disclosee")
{
$("#detail").show();
}
});
});
</script>
<script>
$(document).ready(function(){
  $("#details1").hide();
$("input[type='radio']").change(function(){
if($(this).val()=="Anonymous1")
{
$("#details1").hide();
}
if($(this).val()=="disclose1")
{
$("#details1").show();
}
});
});
</script>

<script type="text/javascript">
  $(document).ready(function(){
  var x = Math.floor((Math.random() * 10000000) + 1000080000000000);
  document.getElementById("infowellsec").value=x;
  var result ='';
   var characters='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
   var charactersLength = characters.length;
   for ( var i = 0; i < 10; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   document.getElementById("infowellke").value=result;

});
</script>

<?php include '../footer.php'; ?>

<script type="text/javascript">
  function showvalue1() {
  var kt_slider_1 = document.getElementById('kt_slider_1').value;
  document.getElementById('res1').innerHTML = kt_slider_1;
  var kt_slider_2 = document.getElementById('kt_slider_2').value;
  document.getElementById('res2').innerHTML = kt_slider_2;
  var kt_slider_3 = document.getElementById('kt_slider_3').value;
  document.getElementById('res3').innerHTML = kt_slider_3;
  var kt_slider_4 = document.getElementById('kt_slider_4').value;
  document.getElementById('res4').innerHTML = kt_slider_4;
  var kt_slider_5 = document.getElementById('kt_slider_5').value;
  document.getElementById('res5').innerHTML = kt_slider_5;
  var kt_slider_6 = document.getElementById('kt_slider_6').value;
  document.getElementById('res6').innerHTML = kt_slider_6;
  var kt_slider_7 = document.getElementById('kt_slider_7').value;
  document.getElementById('res7').innerHTML = kt_slider_7;
  var kt_slider_8 = document.getElementById('kt_slider_8').value;
  document.getElementById('res8').innerHTML = kt_slider_8;
  var kt_slider_9 = document.getElementById('kt_slider_9').value;
  document.getElementById('res9').innerHTML = kt_slider_9;
  var kt_slider_10 = document.getElementById('kt_slider_10').value;
  document.getElementById('res10').innerHTML = kt_slider_10;
  var kt_slider_11 = document.getElementById('kt_slider_11').value;
  document.getElementById('res11').innerHTML = kt_slider_11;
  var kt_slider_12 = document.getElementById('kt_slider_12').value;
  document.getElementById('res12').innerHTML = kt_slider_12;
  var kt_slider_13 = document.getElementById('kt_slider_13').value;
  document.getElementById('res13').innerHTML = kt_slider_13;
  var kt_slider_14 = document.getElementById('kt_slider_14').value;
  document.getElementById('res14').innerHTML = kt_slider_14;
  var kt_slider_15 = document.getElementById('kt_slider_15').value;
  document.getElementById('res15').innerHTML = kt_slider_15;
  var kt_slider_16 = document.getElementById('kt_slider_16').value;
  document.getElementById('res16').innerHTML = kt_slider_16;
  var kt_slider_17 = document.getElementById('kt_slider_17').value;
  document.getElementById('res17').innerHTML = kt_slider_17;
  var kt_slider_18 = document.getElementById('kt_slider_18').value;
  document.getElementById('res18').innerHTML = kt_slider_18;
  var kt_slider_19 = document.getElementById('kt_slider_19').value;
  document.getElementById('res19').innerHTML = kt_slider_19;
  var kt_slider_20 = document.getElementById('kt_slider_20').value;
  document.getElementById('res20').innerHTML = kt_slider_20;
  var kt_slider_21 = document.getElementById('kt_slider_21').value;
  document.getElementById('res21').innerHTML = kt_slider_21;
  var kt_slider_22 = document.getElementById('kt_slider_22').value;
  document.getElementById('res22').innerHTML = kt_slider_22;
  var kt_slider_23 = document.getElementById('kt_slider_23').value;
  document.getElementById('res23').innerHTML = kt_slider_23;
  var kt_slider_24 = document.getElementById('kt_slider_24').value;
  document.getElementById('res24').innerHTML = kt_slider_24;
  var kt_slider_25 = document.getElementById('kt_slider_25').value;
  document.getElementById('res25').innerHTML = kt_slider_25;
  var kt_slider_26 = document.getElementById('kt_slider_26').value;
  document.getElementById('res26').innerHTML = kt_slider_26;
  var kt_slider_27 = document.getElementById('kt_slider_27').value;
  document.getElementById('res27').innerHTML = kt_slider_27;
  var kt_slider_28 = document.getElementById('kt_slider_28').value;
  document.getElementById('res28').innerHTML = kt_slider_28;
  var kt_slider_29 = document.getElementById('kt_slider_29').value;
  document.getElementById('res29').innerHTML = kt_slider_29;
  var kt_slider_30 = document.getElementById('kt_slider_30').value;
  document.getElementById('res30').innerHTML = kt_slider_30;
  var kt_slider_31 = document.getElementById('kt_slider_31').value;
  document.getElementById('res31').innerHTML = kt_slider_31;
  var kt_slider_32 = document.getElementById('kt_slider_32').value;
  document.getElementById('res32').innerHTML = kt_slider_32;
  var kt_slider_33 = document.getElementById('kt_slider_33').value;
  document.getElementById('res33').innerHTML = kt_slider_33;
  var kt_slider_34 = document.getElementById('kt_slider_34').value;
  document.getElementById('res34').innerHTML = kt_slider_34;
  var kt_slider_35 = document.getElementById('kt_slider_35').value;
  document.getElementById('res35').innerHTML = kt_slider_35;
  var kt_slider_36 = document.getElementById('kt_slider_36').value;
  document.getElementById('res36').innerHTML = kt_slider_36;
  var kt_slider_37 = document.getElementById('kt_slider_37').value;
  document.getElementById('res37').innerHTML = kt_slider_37;
  var kt_slider_38 = document.getElementById('kt_slider_38').value;
  document.getElementById('res38').innerHTML = kt_slider_38;
  var kt_slider_39 = document.getElementById('kt_slider_39').value;
  document.getElementById('res39').innerHTML = kt_slider_39;
  var kt_slider_40 = document.getElementById('kt_slider_40').value;
  document.getElementById('res40').innerHTML = kt_slider_40;
  var kt_slider_41 = document.getElementById('kt_slider_41').value;
  document.getElementById('res41').innerHTML = kt_slider_41;
  var kt_slider_42 = document.getElementById('kt_slider_42').value;
  document.getElementById('res42').innerHTML = kt_slider_42;

}
</script>

<script type="text/javascript">
    function login(){
                debugger
                 $.ajax({
                        dataType: "json",
                        type: "POST",
                        url: "/wellness/header.php"
                         });
              window.location="/wellness/case/dashboard.php";
            }
</script>

<!-- new -->