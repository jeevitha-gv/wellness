<?php
$conn = new mysqli('localhost', 'root', 'password', 'database');
$dist=$_POST['dist'];
$udetails=$_POST['udetails'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$family = $_POST['family'];
$category=implode('',$_POST['category']);
$quitetrivial=$_POST['quitetrivial'];
$dryness=$_POST['dryness'];
$positivefeeling=$_POST['positivefeeling'];
$breathing=$_POST['breathing'];
$getgoing=$_POST['getgoing'];
$situations=$_POST['situations'];
$shakiness=$_POST['shakiness'];
$relax=$_POST['relax'];
$anxious=$_POST['anxious'];
$forward=$_POST['forward'];
$upset=$_POST['upset'];
$nervous=$_POST['nervous'];
$saddepressed=$_POST['saddepressed'];
$impatient=$_POST['impatient'];
$faintness=$_POST['faintness'];
$lostinterest=$_POST['lostinterest'];
$worthperson=$_POST['worthperson'];
$touchy=$_POST['touchy'];
$noticeably=$_POST['noticeably'];
$goodreason=$_POST['goodreason'];
$worthwhile=$_POST['worthwhile'];
$winddown=$_POST['winddown'];
$swallowing=$_POST['swallowing'];
$enjoyment=$_POST['enjoyment'];
$physicalexertion=$_POST['physicalexertion'];
$feltdown=$_POST['feltdown'];
$irritable=$_POST['irritable'];
$closepanic=$_POST['closepanic'];
$somethingupset=$_POST['somethingupset'];
$trivial=$_POST['trivial'];
$enthusiastic=$_POST['enthusiastic'];
$interruptions=$_POST['interruptions'];
$nervoustension=$_POST['nervoustension'];
$prettyworthless=$_POST['prettyworthless'];
$intolerant=$_POST['intolerant'];
$terrified=$_POST['terrified'];
$hopefulabout=$_POST['hopefulabout'];
$meaningless=$_POST['meaningless'];
$agitated=$_POST['agitated'];
$panic=$_POST['panic'];
$trembling=$_POST['trembling'];
$difficultwork=$_POST['difficultwork'];
$infowellkey=$_POST['infowellkey'];
$infowellsec=$_POST['infowellsec'];

$status="created";
if($worthwhile1<=2||$winddown<=2||$swallowing<=2||$enjoyment<=2||$physicalexertion<=2||$feltdown<=2||$irritable<=2||$closepanic<=2||$somethingupset<=2||$trivial<=2||$enthusiastic<=2||$interruptions<=2||$nervoustension<=2||$prettyworthless<=2||$intolerant<=2||$terrified<=2||$hopefulabout<=2||$meaningless<=2||$agitated<=2||$panic<=2||$trembling<=2||$difficultwork<=2)
{
  $risk="Low";
$sql="INSERT INTO wellness(dist,udetails,name,email,phone,address,family,category,quitetrivial,dryness,positivefeeling,breathing,getgoing,situations,shakiness,relax,anxious,forward,upset,nervous,saddepressed,impatient,faintness,lostinterest,worthperson,touchy,noticeably,goodreason,worthwhile,winddown,swallowing,enjoyment,physicalexertion,feltdown,irritable,closepanic,somethingupset,trivial,enthusiastic,interruptions,nervoustension,prettyworthless,intolerant,terrified,hopefulabout,meaningless,agitated,panic,trembling,difficultwork,infowellkey,infowellsec,risk,status)
values('$dist','$udetails','$name','$email','$phone','$address','$family','$category','$quitetrivial','$dryness','$positivefeeling','$breathing','$getgoing','$situations','$shakiness','$relax','$anxious','$forward','$upset','$nervous','$saddepressed','$impatient','$faintness','$lostinterest','$worthperson','$touchy','$noticeably','$goodreason','$worthwhile','$winddown','$swallowing','$enjoyment','$physicalexertion','$feltdown','$irritable','$closepanic','$somethingupset','$trivial','$enthusiastic','$interruptions','$nervoustension','$prettyworthless','$intolerant','$terrified','$hopefulabout','$meaningless','$agitated','$panic','$trembling','$difficultwork','$infowellkey','$infowellsec','$risk','$status')";
if ($conn->query($sql) === TRUE) {
    // echo "data inserted";
}
}
if(($worthwhile1>=3 && $worthwhile1<=6)|| ($winddown>=3 && $winddown<=6)|| ($swallowing>=3 && $swallowing<=6)||($enjoyment>=3 && $enjoyment<=6)||($physicalexertion>=3 && $physicalexertion<=6)||($feltdown>=3 && $feltdown<=6)||($irritable>=3 && $irritable<=6)||($closepanic>=3 && $closepanic<=6)||($somethingupset>=3 && $somethingupset<=6)||($trivial>=3 && $trivial<=6)||($enthusiastic>=3 && $enthusiastic<=6)||($interruptions>=3 && $interruptions<=6)||($nervoustension>=3 && $nervoustension<=6)||($prettyworthless>=3 && $prettyworthless<=6)||($intolerant>=3 && $intolerant<=6)||($terrified>=3 && $terrified<=6)||($hopefulabout>=3 && $hopefulabout<=6)||($meaningless>=3 && $meaningless<=6)||($agitated>=3 && $agitated<=6)||($panic>=3 && $panic<=6)||($trembling>=3 && $trembling<=6)||($difficultwork>=3 && $difficultwork<=6))
{
  $risk="Medium";
$sql="INSERT INTO wellness(dist,udetails,name,email,phone,address,family,category,quitetrivial,dryness,positivefeeling,breathing,getgoing,situations,shakiness,relax,anxious,forward,upset,nervous,saddepressed,impatient,faintness,lostinterest,worthperson,touchy,noticeably,goodreason,worthwhile,winddown,swallowing,enjoyment,physicalexertion,feltdown,irritable,closepanic,somethingupset,trivial,enthusiastic,interruptions,nervoustension,prettyworthless,intolerant,terrified,hopefulabout,meaningless,agitated,panic,trembling,difficultwork,infowellkey,infowellsec,risk,status)
values('$dist','$udetails','$name','$email','$phone','$address','$family','$category','$quitetrivial','$dryness','$positivefeeling','$breathing','$getgoing','$situations','$shakiness','$relax','$anxious','$forward','$upset','$nervous','$saddepressed','$impatient','$faintness','$lostinterest','$worthperson','$touchy','$noticeably','$goodreason','$worthwhile','$winddown','$swallowing','$enjoyment','$physicalexertion','$feltdown','$irritable','$closepanic','$somethingupset','$trivial','$enthusiastic','$interruptions','$nervoustension','$prettyworthless','$intolerant','$terrified','$hopefulabout','$meaningless','$agitated','$panic','$trembling','$difficultwork','$infowellkey','$infowellsec','$risk','$status')";
if ($conn->query($sql) === TRUE) {
    // echo "data inserted";
}
}
if($worthwhile1>6||$winddown>6||$swallowing>6||$enjoyment>6||$physicalexertion>6||$feltdown>6||$irritable>6||$closepanic>6||$somethingupset>6||$trivial>6||$enthusiastic>6||$interruptions>6||$nervoustension>6||$prettyworthless>6||$intolerant>6||$terrified>6||$hopefulabout>6||$meaningless>6||$agitated>6||$panic>6||$trembling>6||$difficultwork>6)
{
  $risk="High";
$sql="INSERT INTO wellness(dist,udetails,name,email,phone,address,family,category,quitetrivial,dryness,positivefeeling,breathing,getgoing,situations,shakiness,relax,anxious,forward,upset,nervous,saddepressed,impatient,faintness,lostinterest,worthperson,touchy,noticeably,goodreason,worthwhile,winddown,swallowing,enjoyment,physicalexertion,feltdown,irritable,closepanic,somethingupset,trivial,enthusiastic,interruptions,nervoustension,prettyworthless,intolerant,terrified,hopefulabout,meaningless,agitated,panic,trembling,difficultwork,infowellkey,infowellsec,risk,status)
values('$dist','$udetails','$name','$email','$phone','$address','$family','$category','$quitetrivial','$dryness','$positivefeeling','$breathing','$getgoing','$situations','$shakiness','$relax','$anxious','$forward','$upset','$nervous','$saddepressed','$impatient','$faintness','$lostinterest','$worthperson','$touchy','$noticeably','$goodreason','$worthwhile','$winddown','$swallowing','$enjoyment','$physicalexertion','$feltdown','$irritable','$closepanic','$somethingupset','$trivial','$enthusiastic','$interruptions','$nervoustension','$prettyworthless','$intolerant','$terrified','$hopefulabout','$meaningless','$agitated','$panic','$trembling','$difficultwork','$infowellkey','$infowellsec','$risk','$status')";
if ($conn->query($sql) === TRUE) {
    // echo "data inserted";
}
}
else 
{
    // echo "failed";
}
?>