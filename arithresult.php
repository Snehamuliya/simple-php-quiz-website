<?php
session_start();
error_reporting(0);
//include 'conn.php';
$username=$_SESSION['user'];
if($username==true)
{
	
	
}
else
	
	{
		echo '<script>alert("please log in first to see this page!");</script>';
		echo "<script>window.location.href='login.php';</script>";
		
	}

?>
	

<!DOCTYPE html>
<html>
 
<head>
	<meta charset=UTF-8" />
	
	<title>Arithmatical result</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="style.css" />
	<style>
#myProgress {
  width: 100%;
  background-color: #ddd;
}

#myBar {
  width: 0%;
  height: 30px;
  background-color: #4CAF50;
  text-align: center;
  
  line-height: 30px;
  color: white;
}
.color{
	color:red;
	font-size:28px;
}
.color2{
	color:green;
	font-size:28px;
	font-style:bold;
}
.ans{
	color:#660000;
	font-size:23px;
	font-style:bold;
    }
#res{
	color:green;
	font-size:30px;
}
.res1{
	color:red;
	font-size:30px;
}
p {
	font-size:26px;
  }
.line_break {
    width:100%;
    padding-bottom: 3px;
    border: none;
    border-bottom: 0.5px solid #cccccc;
}
#marks
{
	color:white;
}
#rcorners6 {

  border-radius: 15px 50px;
  width: 70%;
  background-color:#666699;
  height: 200px;
  float:center;  
  padding-left:490px;
  margin-left:200px;
  padding-top:13px;
  font-color:white;
}
</style>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>
<style type="text/css">
#overlay {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: gray;
filter:alpha(opacity=20);
-moz-opacity:0.2;
-khtml-opacity: 0.2;
opacity: 0.3;
z-index: 100;
display: none;
}
.cnt223 a{
text-decoration: none;
}
.popup{
width: 100%;
margin: 0 auto;
display: none;
position: fixed;
z-index: 101;
}
.cnt223{
min-width: 600px;
width: 600px;
min-height: 150px;
margin: 100px auto;
background: #f3f3f3;
position: relative;
z-index: 103;
padding: 15px 35px;
border-radius: 5px;
box-shadow: 0 2px 5px #000;
}
.cnt223 p{
clear: both;
    color: #555555;
 
    font-size: 20px;
    font-family: sans-serif;
}
.cnt223 p a{
color: #d91900;
font-weight: bold;
}
.cnt223 .x{
float: right;
height: 35px;
left: 22px;
position: relative;
top: -25px;
width: 34px;
}
.cnt223 .x:hover{
cursor: pointer;
}
</style>
<script type='text/javascript'>
$(function(){
var overlay = $('<div id="overlay"></div>');
overlay.show();
overlay.appendTo(document.body);
$('.popup').show();
$('.close').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});

$('.x').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});
});
</script>



</head>
 
<body onload="move()">
 <?php 	include 'res navbar.php'; ?>

	<div id="page-wrap">
 
		<center><h1>Arithmatical Result </h1></center>
		
        <?php
            
			$empty=0;
            if (empty($_POST["con1"])){$answer1="not selected";$empty++;}else{$answer1 = $_POST['con1'];}
            if (empty($_POST["con2"])){$answer2="not selected";$empty++;}else{$answer2 = $_POST['con2'];}
            if (empty($_POST["con3"])){$answer3="not selected";$empty++;}else{$answer3 = $_POST['con3'];}
            if (empty($_POST["con4"])){$answer4="not selected";$empty++;}else{$answer4 = $_POST['con4'];}
            if (empty($_POST["con5"])){$answer5="not selected";$empty++;}else{$answer5 = $_POST['con5'];}
			if (empty($_POST["con6"])){$answer6="not selected";$empty++;}else{$answer6 = $_POST['con6'];}
		    if (empty($_POST["con7"])){$answer7="not selected";$empty++;}else{$answer7 = $_POST['con7'];}
		    if (empty($_POST["con8"])){$answer8="not selected";$empty++;}else{$answer8 = $_POST['con8'];}
		    if (empty($_POST["con9"])){$answer9="not selected";$empty++;}else{$answer9 = $_POST['con9'];}
		    if (empty($_POST["con10"])){$answer10="not selected";$empty++;}else{$answer10 = $_POST['con10'];}
		    if (empty($_POST["con11"])){$answer11="not selected";$empty++;}else{$answer11 = $_POST['con11'];}
		    if (empty($_POST["con12"])){$answer12="not selected";$empty++;}else{$answer12 = $_POST['con12'];}
		    if (empty($_POST["con13"])){$answer13="not selected";$empty++;}else{$answer13 = $_POST['con13'];}
		    if (empty($_POST["con14"])){$answer14="not selected";$empty++;}else{$answer14 = $_POST['con14'];}
		    if (empty($_POST["con15"])){$answer15="not selected";$empty++;}else{$answer15 = $_POST['con15'];}
		    if (empty($_POST["con16"])){$answer16="not selected";$empty++;}else{$answer16 = $_POST['con16'];}
		    if (empty($_POST["con17"])){$answer17="not selected";$empty++;}else{$answer17 = $_POST['con17'];}
		    if (empty($_POST["con18"])){$answer18="not selected";$empty++;}else{$answer18 = $_POST['con18'];}
		    if (empty($_POST["con19"])){$answer19="not selected";$empty++;}else{$answer19 = $_POST['con19'];}
		    if (empty($_POST["con20"])){$answer20="not selected";$empty++;}else{$answer20 = $_POST['con20'];}


        
            $totalCorrect = 0;
            
            if ($answer1 == "D) 40/9 Days") { $totalCorrect++; } 
            if ($answer2 == "C) 34") { $totalCorrect++; }
            if ($answer3 == "C) 12 Seconds") { $totalCorrect++; }
            if ($answer4 == "B) 39") { $totalCorrect++; }
            if ($answer5 == "A) 25%") { $totalCorrect++; }
			if ($answer6 == "A) 96.25") { $totalCorrect++; }
			if ($answer7 == "D) 48 paise") { $totalCorrect++; }
			if ($answer8 == "B) 27") { $totalCorrect++; }
			if ($answer9 == "C) 14m") { $totalCorrect++; }
			if ($answer10 == "A) 4320 words") { $totalCorrect++; }
			if ($answer11 == "A) 1 km/hr") { $totalCorrect++; }
			if ($answer12 == "B) 240 m") { $totalCorrect++; }
			if ($answer13 == "B) 33 Years") { $totalCorrect++; }
			if ($answer14 == "A) 39") { $totalCorrect++; }
			if ($answer15 == "A) 486 cm2") { $totalCorrect++; }
			if ($answer16 == "B) 9") { $totalCorrect++; }
			if ($answer17 == "B) 8/15") { $totalCorrect++; }
			if ($answer18 == "B) 42") { $totalCorrect++; }
			if ($answer19 == "C) 72") { $totalCorrect++; }
			if ($answer20 == "C) 1:2") { $totalCorrect++; }
  $attend=20-$empty;

        ?>
	
	</div>
	
	
	<div class='popup'>

<div class='cnt223'>
<p>
<?php 
if($totalCorrect==20)
{
echo '<img src="1st.gif" alt="icon" height="350px" width="440px"/>';
}
else if($totalCorrect==19)
{
echo '<img src="2nd place.gif" alt="icon2"  height="350px" width="440px"/>'; 
}
else if(($totalCorrect>=17) || ($totalCorrect==18))
{
echo '<img src="3rd.gif" alt="icon3"  height="350px" width="440px"/>'; 
}
else
{
echo '<img src="losing.gif" alt="icon4" height="350px" width="440px"/>'; 
}
	?> 
<br/>
<a href='' class='close'>Close</a>
</p>
</div>
</div>

	<p id="rcorners6">
 <?php 
  echo "<label id='marks'>Total Questions  &nbsp;&nbsp;20 </label>"."<br>";
 echo "<label id='marks'>Total correct answer &nbsp;&nbsp;$totalCorrect</label>"."<br>";
 echo "<label id='marks'>Not Attended Questions &nbsp;&nbsp;".$empty."</label>";
echo "<br><label id='marks'>Total Attended Questions &nbsp;&nbsp;".$attend."</label>";
        ?></p>  

		
	
 <div id="myProgress">
  <div id="myBar">0%</div>
</div>
<br>



<p>1. Worker a takes 8 hours to do a job. Worker b takes 10 hours to do the same job. How long should it take both a and b, working together but independently, to do the same job?</p>
<?php echo "<p class='ans'>your answer =".$answer1." correct answer= D) 40/9 Days</p>";
if($answer1=="D) 40/9 Days")
{ echo "<p class='color2'>"."correct"."</p>"; }
else { echo "<p class='color'>"."wrong"."</p>"; }?>

<a href="#demo" class="btn btn-primary" data-toggle="collapse">click me for Explanation</a>
  <div id="demo" class="collapse">
<b>Solution:</b>  
<br>a’s 1 hour’s work = 1/8 b’s 1 hour’s work = 1/10 <br> (a + b)’s 1 hour’s work = (1/8) +(1/10)=9/40 
<br>Both a and b will finish the work in <b>40/9 days</b>
  </div>
<br><hr class="line_break">



<p>2. 2, 7, 14, 23, ?, 47 Find the missing number.</p>
<?php echo "<p class='ans'>your answer =".$answer2." correct answer= C) 34 </p>";
if($answer2=="C) 34")
{ echo "<p class='color2'>"."correct"."</p>"; }
else { echo "<p class='color'>"."wrong"."</p>"; }?>

<a href="#demo1" class="btn btn-primary" data-toggle="collapse">click me for Explanation</a>
  <div id="demo1" class="collapse">
<b>Solution:</b> 
<br>The given sequence is +5, +7, +9, —<br>i.e. ==> 2+ 5 = 7, 7 + 7 = 14, 14 + 9 = 23,<br>Missing Number = 23 + 11 = <b>34</b>
  </div>
<br><hr class="line_break">




<p>3. A train 100 m long is running at the speed of 30 km/hr. Find the time taken by it to pass a man standing near the railway line.</p>

<?php echo "<p class='ans'>your answer =".$answer3." correct answer= C) 12 Seconds</p>";
if($answer3=="C) 12 Seconds")
{ echo "<p class='color2'>"."correct"."</p>"; }
else { echo "<p class='color'>"."wrong"."</p>";}?>

<a href="#demo2" class="btn btn-primary" data-toggle="collapse">click me for Explanation</a>
  <div id="demo2" class="collapse">
   <b>Solution:</b> <br>Speed of the train = (30 x 5/18) m/ sec  ==>  (25/3) m/sec.<br>Distance moved in passing the standing man = 100 m.
   <br>Required time taken = 100/(25/3) = (100 *(3/25)) sec = <b>12 sec </b>
  </div>
<br><hr class="line_break">


<p>4. A batsman makes a score of 87 runs in the 17th inning and thus increases his average by 3. Find his average after 17th innings.</p>
<?php echo "<p class='ans'>your answer =".$answer4." correct answer= B) 39</p>";
if($answer4=="B) 39")
{ echo "<p class='color2'>"."correct"."</p>"; }
else { echo "<p class='color'>"."wrong"."</p>"; }?>

<a href="#demo3" class="btn btn-primary" data-toggle="collapse">click me for Explanation</a>
  <div id="demo3" class="collapse">
<b>Solution: </b><br>Let the average after 17th inning = x.<br>Then, average after 16th inning = (x – 3).
<br>==> 16 (x – 3) + 87 = 17x or x = (87 – 48) = <b>39. </b>
  </div><br>
<hr class="line_break">



<p>5. Raman’s salary was decreased by 50% and subsequently increased by 50%. How much percent (%) does he lose?</p>
<?php echo "<p class='ans'>your answer =".$answer5." correct answer= A) 25%</p>";
if($answer5=="A) 25%")
{ echo "<p class='color2'>"."correct"."</p>"; }
else { echo "<p class='color'>"."wrong"."</p>"; }?>

<a href="#demo4" class="btn btn-primary" data-toggle="collapse">click me for Explanation</a>
  <div id="demo4" class="collapse">
<b>Solution:</b> <br>Let the original salary = Rs. 100<br>New final salary = Rs. 150 of  (50% of Rs.100)
<br>==> Rs.((150/100)*(50/100)*100) = Rs.75<br> Decrease = <b>25% </b>
  </div><br>
<hr class="line_break">



<p>6. The ratio between the speeds of two trains is 7: 8. If the second train runs 440 kms in 4 hours, then the speed of the first train is:</p>
<?php echo "<p class='ans'>your answer =".$answer6." correct answer= A) 96.25</p>";
if($answer6=="A) 96.25")
{ echo "<p class='color2'>"."correct"."</p>"; }
else { echo "<p class='color'>"."wrong"."</p>";}?>

<a href="#demo5" class="btn btn-primary" data-toggle="collapse">click me for Explanation</a>
  <div id="demo5" class="collapse">
<b>Solution: </b><br>Let the speed of two trains be 7x and 8x km/hr.<br>Then, 8x = (440/4) = 110<br>x = (110/8) = 13.75
<br>Hence, speed of first train = (7 x 13.75) km/hr = <b>96.25 km/hr</b></div><br>
<hr class="line_break">



<p>7. If a quarter kg of potato costs 60 paise, how many paise will 200 gm cost?</p>
<?php echo "<p class='ans'>your answer =".$answer7." correct answer= D) 48 paise</p>";
if($answer7=="D) 48 paise")
{echo "<p class='color2'>"."correct"."</p>"; }
else { echo "<p class='color'>"."wrong"."</p>"; }?>

<a href="#demo6" class="btn btn-primary" data-toggle="collapse">click me for Explanation</a>
  <div id="demo6" class="collapse">
<b>Solution: </b>Let the required weight be x kg.<br>Less weight, Less cost (Direct Proportion)
<br>∴ 250 : 200 :: 60 : x    ==> 250x x = (200 x 60)<br>==> x = (200 x 60)/250<br>x = <b>48 paise</b>
 </div><br>
<hr class="line_break">


<p>8. 8, 24, 12, 36, 18, 54, ? Find the missing number.</p>
<?php echo "<p class='ans'>your answer =".$answer8." correct answer= B) 27</p>";
if($answer8=="B) 27")
{ echo "<p class='color2'>"."correct"."</p>";}
else {echo "<p class='color'>"."wrong"."</p>"; }?>

<a href="#demo7" class="btn btn-primary" data-toggle="collapse">click me for Explanation</a>
  <div id="demo7" class="collapse">
<b>Solution: </b> <br>Numbers are alternatively multiplied by 3 and divided by 2.<br>So, the next number = 54 ÷ 2 = <b>27</b></b>
 </div>
<br>
<hr class="line_break">



<p>9. A wheel makes 1000 revolutions in covering a distance of 88 km. Find the radius of the wheel.</p>
<?php echo "<p class='ans'>your answer =".$answer9." correct answer= C) 14m</p>";
if($answer9=="C) 14m")
{echo "<p class='color2'>"."correct"."</p>"; }
else { echo "<p class='color'>"."wrong"."</p>"; }?>

<a href="#demo8" class="btn btn-primary" data-toggle="collapse">click me for Explanation</a>
  <div id="demo8" class="collapse">
<b>Solution: </b><br>Distance covered in one revolution =((88 x 1000)/1000)= 88m<br>2∏r = 88 <br>==> 2 x (22/7) x r = 88 <br>==>  r = 88 x (7/44) = <b>14 m</b>
 </div>
<br>
<hr class="line_break">



<p>10. How many words can be formed by using all letters of the word ‘daughter’ so that the vowels always come together?</p>
<?php echo "<p class='ans'>your answer =".$answer10." correct answer= A) 4320 words</p>";
if($answer10=="A) 4320 words")
{echo "<p class='color2'>"."correct"."</p>"; }
else { echo "<p class='color'>"."wrong"."</p>"; }?>

<a href="#demo9" class="btn btn-primary" data-toggle="collapse">click me for Explanation</a>
  <div id="demo9" class="collapse">
<b>Solution: </b><br>Given word contains 8 different letters.  When the vowels aue are always together, we may suppose them to form an entity, treated as one letter.<br>Then, the letters to be arranged are dgntr (aue).<br>Then 6 letters to be arranged in 6p6 = 6! = 720 ways.
<br>The vowels in the group (aue) may be arranged in 3! = 6 ways.<br>Required number of words = (720×6) = <b>4320.</b>
 </div>
<br>
<hr class="line_break">



<p>11. A man takes 3 hours 45 minutes to row a boat 15 km downstream of a river and 2 hours 30 minutes to cover a distance of 5 km upstream. Find the speed of the river current in km/hr.</p>
<?php echo "<p class='ans'>your answer =".$answer11." correct answer= A) 1 km/hr</p>";
if($answer11=="A) 1 km/hr")
{echo "<p class='color2'>"."correct"."</p>"; }
else { echo "<p class='color'>"."wrong"."</p>"; }?>

<a href="#demo10" class="btn btn-primary" data-toggle="collapse">click me for Explanation</a>
  <div id="demo10" class="collapse">
<b>Solution: </b><br>Rate downstream ==> (15/3 ¾)km/hr ==> (15*4/15) km/hr ==> 4 km/hr.<br>Rate upstream ==> (5/2 ½)km/hr 
<br>==> (5*2/5)km/hr ==> 2 km/hr.<br>Speed of current ==> 1/2(4-2) km/hr ==> <b>1 km/hr</b>
 </div>
<br><hr class="line_break">



<p>12. A train passes a station platform in 36 seconds and a man standing on the platform in 20 seconds. If the speed of the train is 54 km/hr, what is the length of the platform?</p>
<?php echo "<p class='ans'>your answer =".$answer12."correct answer= B) 240 m</p>";
if($answer12=="B) 240 m")
{echo "<p class='color2'>"."correct"."</p>"; }
else { echo "<p class='color'>"."wrong"."</p>"; }?>

<a href="#demo11" class="btn btn-primary" data-toggle="collapse">click me for Explanation</a>
  <div id="demo11" class="collapse">
<br><b>Explanation:</b><br>
Speed =	 (	54 x 5/18 )	 m/sec = 15 m/sec.	
<br>Length of the train = (15 x 20)m = 300 m.
<br>Let the length of the platform be x metres.
<br>Then,	(  x + 300/36  ) = 15

 <br> x + 300 = 540
 <b> x = 240 m.</b>

 </div>
<br><hr class="line_break">



<p>13. The present age of a father is 3 years more than three times the age of his son. Three years hence, father’s age will be 10 years more than twice the age of the son. Find the present age of the father.</p>
<?php echo "<p class='ans'>your answer =".$answer13." correct answer= B) 33 Years</p>";
if($answer13=="B) 33 Years")
{echo "<p class='color2'>"."correct"."</p>"; }
else { echo "<p class='color'>"."wrong"."</p>"; }?>

<a href="#demo12" class="btn btn-primary" data-toggle="collapse">click me for Explanation</a>
  <div id="demo12" class="collapse">
<b>Solution: </b><br>Let the son’s present age be x years. Then, father’s present age = (3x + 3) years<br>==> (3x + 3 + 3) = 2 (x + 3) + 10     ==>  3x + 6 = 2x + 16   ==>    x = 10.
<br>hence,  father’s present age = (3x + 3) = ((3 x 10) + 3) Years = <b>33 Years.</b>
 </div>
<br><hr class="line_break">



<p>14. Three numbers are in the ratio 3:4:5. The sum of the largest and the smallest equals the Sum of the third and 52. The smallest number is</p>
<?php echo "<p class='ans'>your answer =".$answer14." correct answer= A) 39</p>";
if($answer14=="A) 39")
{echo "<p class='color2'>"."correct"."</p>"; }
else { echo "<p class='color'>"."wrong"."</p>"; }?>

<a href="#demo13" class="btn btn-primary" data-toggle="collapse">click me for Explanation</a>
  <div id="demo13" class="collapse">
<b>Solution : </b><br>Let the numbers be x, y, z<br>: . x/3 = y/4 = z/5 = k<br>: . x = 3k, y = 4k, z = 5k
<br>: . 3k + 5k= 4k + 52<br>— > k = 13<br>: . Smallest number = <b>39</b>
 </div>
<br><hr class="line_break">



<p>15. Three solid cubes of sides 1 cm, 6 cm and 8 cm are melted to form a new Cube. Find the surface area of the cube so formed.</p>
<?php echo "<p class='ans'>your answer =".$answer15." correct answer= A) 486 cm2</p>";
if($answer15=="A) 486 cm2")
{echo "<p class='color2'>"."correct"."</p>"; }
else { echo "<p class='color'>"."wrong"."</p>"; }?>

<a href="#demo14" class="btn btn-primary" data-toggle="collapse">click me for Explanation</a>
  <div id="demo14" class="collapse">
<b>Solution : </b><br>Volume of new cube = (13 + 63 + 83) cm+ = 729 cm3.<br>Edge of new cube = 3Ö729 cm = 9 cm.
<br>\  Surface area of the new cube = (6 x 9 x 9) cm2 = <b>486 cm2.</b>"
 </div>
<br><hr class="line_break">



<p>16. The average ages of three persons is 27 years. Their ages are in the proportion of 1:3:5.What is the age in years of the youngest one among them.</p>
<?php echo "<p class='ans'>your answer =".$answer16." correct answer= B) 9</p>";
if($answer16=="B) 9")
{echo "<p class='color2'>"."correct"."</p>"; }
else { echo "<p class='color'>"."wrong"."</p>"; }?>

<a href="#demo15" class="btn btn-primary" data-toggle="collapse">click me for Explanation</a>
  <div id="demo15" class="collapse">
<b>Solution : </b><br>Let the age of three persons be x, 3x and 5x<br>— > 9x/3 = 27<br> — > <b>x = 9</b>
 </div>
<br><hr class="line_break">



<p>17. P is able to do a piece of work in 15 days and Q can do the same work in 20 days. If they can work together for 4 days, what is the fraction of work left?</p>
<?php echo "<p class='ans'>your answer =".$answer17." correct answer= B) 8/15</p>";
if($answer17=="B) 8/15")
{echo "<p class='color2'>"."correct"."</p>"; }
else { echo "<p class='color'>"."wrong"."</p>"; }?>

<a href="#demo16" class="btn btn-primary" data-toggle="collapse">click me for Explanation</a>
  <div id="demo16" class="collapse">
<b>Solution : </b><br>Amount of work P can do in 1 day = 1/15<br>Amount of work Q can do in 1 day = 1/20<br>Amount of work P and Q can do in 1 day = 1/15 + 1/20 = 7/60
<br>Amount of work P and Q can together do in 4 days = 4 × (7/60) = 7/15<br>Fraction of work left = 1 – 7/15= <b>8/15</b>
</div>
<br><hr class="line_break">



<p>18. A batsman in his 18th innings makes a score of 150 runs and thereby increasing his Average by 6. Find his average after 18th innings.</p>
<?php echo "<p class='ans'>your answer =".$answer18." correct answer= B) 42</p>";
if($answer18=="B) 42")
{echo "<p class='color2'>"."correct"."</p>"; }
else { echo "<p class='color'>"."wrong"."</p>"; }?>

<a href="#demo17" class="btn btn-primary" data-toggle="collapse">click me for Explanation</a>
  <div id="demo17" class="collapse">
<b
>Solution : </b><br>Let the average for 17 innings is x runs<br>Total runs in 17 innings = 17x<br>Total runs in 18 innings = 17x + 150<br>Average of 18 innings = 17x + 150/18
<br> 17x + 150/18 = x + 6 — > x = 42<br>Thus, average after 18 innings = <b>42</b>
 </div>
<br>
<hr class="line_break">



<p>19. Of the three numbers, second is twice the first and also thrice the third. If the average of the three numbers is 44, the largest number is</p>
<?php echo "<p class='ans'>your answer =".$answer19." correct answer= C) 72</p>";
if($answer19=="C) 72")
{echo "<p class='color2'>"."correct"."</p>"; }
else { echo "<p class='color'>"."wrong"."</p>"; }?>

<a href="#demo18" class="btn btn-primary" data-toggle="collapse">click me for Explanation</a>
  <div id="demo18" class="collapse">
<b>Solution : </b><br>Let the 3rd number be x, Then, second number = 3x<br>: . First number = 3x/2<br>: . x+3x + 3x/2 = (44*3)
<br>— > 11x/2 = 132 — > x = 24<br>Largest number — > 3x<br>— > 3*24 = <b>72</b>
 </div>
<hr class="line_break">


<p>20. A Cone and a sphere have equal radius and equal volumes. Find the ratio of the sphere of the diameter of the sphere to the height of the cone</p>
<?php echo "<p class='ans'>your answer =".$answer20." correct answer= C) 1:2</p>";
if($answer20=="C) 1:2")
{echo "<p class='color2'>"."correct"."</p>"; }
else { echo "<p class='color'>"."wrong"."</p>"; }?>

<a href="#demo19" class="btn btn-primary" data-toggle="collapse">click me for Explanation</a>
  <div id="demo19" class="collapse">
<b>Solution : </b><br> Let radius of each be R and height of the cone be H.<br>Then, (4/3) ∏ R3 = (1/3) ∏ R2H (or) R/H = ¼ (or) 2R/H = 2/4 =1/2<br>\Required ratio = <b>1:2.</b>
 </div>

<br>

<script>
var i = 0;
var bool = "<?php echo ($totalCorrect/20)*100 ?>"; 
function move() {
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar");
    var width = 1;
    var id = setInterval(frame, 10);
    function frame() {
      if (width >= bool) {
        clearInterval(id);
        i = 0;
      } else {
        width++;
        elem.style.width = width + "%";
        elem.innerHTML = width  + "%";
      }
    }
  }
}
</script>


<?php
$per="<script>document.writeln(bool);</script>";
   //echo $per;
				// Inserting data into user table.
				
					
					$test="arithmatical test";
					//echo $attend;
					date_default_timezone_set("Asia/Calcutta");
				$date=date("Y-m-d"); $time=date("h:i:s A");
					
					// Query to insert data.
					$query = "INSERT INTO result1(firstname, testname, date, time, total, not_attended, attended) VALUES('$username', '$test', '$date', '$time', '$totalCorrect', '$empty', '$attend')";
					
					// Executing query.
					$result = mysqli_query($conn, $query);
					
					// Checking if query was executed successfully.
					if($result){
						echo '<script> alert("Data added.")</script>';
					}else{
						echo '<script> alert("No data.")</script>';
					}			
				
				
				// Closing connection.
				mysqli_close($conn);
			?>	
			<br><hr>
<center><h1 style="color:red;">Our Rankers</h1><center>

	   <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                  
                                           <thead>
                                        <tr>
										<th>Id</th>
                                            <th>Name</th>
											<th>test name</th>
											<th>total Marks</th>

										
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                          <?php
				include('db.php');
	$sql ="SELECT * FROM  `result1` where testname='arithmatical test' AND total > 17 ORDER BY total DESC";
				
                         			$result=$con->query($sql);
								$i=0; 
								if ($result->num_rows > 0) 
								{
									while($row = $result->fetch_assoc()) 
									{ $i++; 
								$pid=$row['r_id'];
							
					?>

								<tr align="center"> 
				<td><?php echo $i; ?></td>	
				<td> <?php echo $row['firstname']; ?></td>
				<td> <?php echo $row['testname']; ?></td>
				<td> <?php echo $row['total']; ?></td>

				
				
		
				
			</tr>
			<?php	}}else{
						
			
									}?>
		
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->

			
</body>
 
</html>