
        $(document).ready(function(){
             });

         function getdata(){
var wellnessdetails = {
'dist': $('#dist').val(),
'udetails': $('input[name=udetails]:checked').val(),
'name': $('#name').val(),
'email': $('#email').val(),
'phone': $('#phone').val(),
'address': $('#address').val(),
'family': $('input[name=family]:checked').val(),
'category': $('#kt_select2_3').val(),
'quitetrivial': $('#kt_slider_1').val(),
'dryness': $('#kt_slider_2').val(),
'positivefeeling': $('#kt_slider_3').val(),
'breathing': $('#kt_slider_4').val(),
'getgoing': $('#kt_slider_5').val(),
'situations': $('#kt_slider_6').val(),
'shakiness': $('#kt_slider_7').val(),
'relax': $('#kt_slider_8').val(),
'anxious': $('#kt_slider_9').val(),
'forward': $('#kt_slider_10').val(),
'upset': $('#kt_slider_11').val(),
'nervous': $('#kt_slider_12').val(),
'saddepressed': $('#kt_slider_13').val(),
'impatient': $('#kt_slider_14').val(),
'faintness': $('#kt_slider_15').val(),
'lostinterest': $('#kt_slider_16').val(),
'worthperson': $('#kt_slider_17').val(),
'touchy': $('#kt_slider_18').val(),
'noticeably': $('#kt_slider_19').val(),
'goodreason': $('#kt_slider_20').val(),
'worthwhile': $('#kt_slider_21').val(),
'winddown': $('#kt_slider_22').val(),
'swallowing': $('#kt_slider_23').val(),
'enjoyment': $('#kt_slider_24').val(),
'physicalexertion': $('#kt_slider_25').val(),
'feltdown': $('#kt_slider_26').val(),
'irritable': $('#kt_slider_27').val(),
'closepanic': $('#kt_slider_28').val(),
'somethingupset': $('#kt_slider_29').val(),
'trivial': $('#kt_slider_30').val(),
'enthusiastic': $('#kt_slider_31').val(),
'interruptions': $('#kt_slider_32').val(),
'nervoustension': $('#kt_slider_33').val(),
'prettyworthless': $('#kt_slider_34').val(),
'intolerant': $('#kt_slider_35').val(),
'terrified': $('#kt_slider_36').val(),
'hopefulabout': $('#kt_slider_37').val(),
'meaningless': $('#kt_slider_38').val(),
'agitated': $('#kt_slider_39').val(),
'panic': $('#kt_slider_40').val(),
'trembling': $('#kt_slider_41').val(),
'difficultwork': $('#kt_slider_42').val(),
'infowellkey': $('#infowellke').val(),
'infowellsec': $('#infowellsec').val(),
'status': 'created'
}
return wellnessdetails;
}


         function myfunction()
         {
            debugger
            var wellnessdetails = getdata();
            $.ajax({
                    type:'POST',
                    url:'/wellness/php/case/wellnessmanagement.php',
                   
                    data:wellnessdetails
                 
                }).done(function (data) {
               Swal.fire({
              title: "Plan Created",
              text: "Your Plan Has Been Created",
              type: "success",
               confirmButtonColor: '#3085d6',
               confirmButtonText:'OK',
               timer: 2500
            });
                window.location="/wellness/case/wellnesscode.php";
 
    });
         }
        
       