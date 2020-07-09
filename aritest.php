<?php
session_start();
error_reporting(0);
include('db.php');
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
	
	<html>

<head>
	<meta charset=UTF-8" />
	
	<title></title>
	
<link rel="stylesheet" type="text/css" href="mystyle.css">
	<style>
 #que {
	    
		border:1px solid;
		font-family:Constantia;
	   font-size:23px;
        height:160px;		
	}
.line_break {
    width:100%;
    padding-bottom: 3px;
    border: none;
    border-bottom: 0.5px solid #cccccc;
}
#varbalquiz
{
	font-family:Constantia;
}
p{
	color: navy;
	font-size:25px;
	}
label{
	font-size:19px;
}
.submitbtn
{
	color:white;
	background-color:green;
	font-size:25px;
}
	</style>
</head>

<body>
  <?php include 'res navbar.php'; ?>

 <?php include("30Arith.php");?>

	<div class="container-fluid">
 
	<h1>Blood relation</h1>
		 <div id="varbalquiz">
	<form action="arithresult.php" method="post" id="quiz">
		
				 <p>1) Worker a takes 8 hours to do a job. Worker b takes 10 hours to do the same job.<br> How long should it take both a and b, working together but independently, to do the same job?</p>
				  <input type="radio" name="con1" id="private" value="A) 30/6 Days"><label for="private">  &nbsp;&nbsp;A) 30/6 Days</label>&nbsp;&nbsp;&nbsp;&nbsp;
				  <input type="radio" name="con1" id="per" value="B) 30/9 Days"><label for="per">  &nbsp;&nbsp;B) 30/9 Days"</label>&nbsp;&nbsp;&nbsp;&nbsp;
				  <input type="radio" name="con1" id="print" value="C) 40/10 Days"><label for="print">  &nbsp;&nbsp;C) 40/10 Days</label>&nbsp;&nbsp;&nbsp;&nbsp;
				  <input type="radio" name="con1" id="print2" value="D) 40/9 Days"><label for="print2">  &nbsp;&nbsp;D) 40/9 Days</label>&nbsp;&nbsp;&nbsp;&nbsp;

						  <br><Br><hr class="line_break">

				  <p>2) 2, 7, 14, 23, ?, 47 Find the missing number.</p>
					  <input type="radio" name="con2" id=";" value="A) 27"><label for=";">&nbsp;&nbsp;A) 27</label>&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="radio" name="con2" id="New" value="B) 36"><label for="New">&nbsp;&nbsp;B) 36</label>&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="radio" name="con2" id="." value="C) 34"><label for=".">&nbsp;&nbsp;C) 34</label>&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="radio" name="con2" id="$" value="D) 32"><label for="$">&nbsp;&nbsp;D) 32</label>&nbsp;&nbsp;&nbsp;&nbsp;

						  <br><Br><hr class="line_break">

				 <p>3) A train 100 m long is running at the speed of 30 km/hr. Find the time taken by it to pass a man standing near the railway line.</p>
					  <input type="radio" name="con3" id="v1" value="A) 16 Seconds"><label for="v1">&nbsp;&nbsp;A) 16 Seconds </label>&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="radio" name="con3" id="v2" value="B) 15 Seconds"><label for="v2">&nbsp;&nbsp;B) 15 Seconds</label>&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="radio" name="con3" id="v3" value="C) 12 Seconds"><label for="v3">&nbsp;&nbsp;C) 12 Seconds</label>&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="radio" name="con3" id="v4" value="D) 14 Seconds"><label for="v4">&nbsp;&nbsp;D)14 Seconds</label>&nbsp;&nbsp;&nbsp;&nbsp;

						  <br><Br><hr class="line_break">

				  <p>4) A batsman makes a score of 87 runs in the 17th inning and thus increases his average by 3. Find his average after 17th innings.</p>
					  <input type="radio" name="con4" id="request" value=" A) 30"><label for="request">&nbsp;&nbsp;A) 30</label>&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="radio" name="con4" id="form" value="B) 39"><label for="form">&nbsp;&nbsp;B) 39</label>&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="radio" name="con4" id="get" value="C) 48"><label for="get">&nbsp;&nbsp;C) 48</label>&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="radio" name="con4" id="get4" value="D) 53"><label for="get4">&nbsp;&nbsp;D) 53</label>&nbsp;&nbsp;&nbsp;&nbsp;


						  <br><Br><hr class="line_break">
						  

				 <p>5) Raman’s salary was decreased by 50% and subsequently increased by 50%.  How much percent (%) does he lose?</p>
					  <input type="radio" name="con5" id="s1" value="A) 25%"><label for="s1">&nbsp;&nbsp;A) 25%</label>&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="radio" name="con5" id="s2" value="B) 30%"><label for="s2">&nbsp;&nbsp;B) 30%</label>&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="radio" name="con5" id="s3" value="C) 15%"><label for="s3">&nbsp;&nbsp;C) 15%</label>&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="radio" name="con5" id="s4" value="D) 35%"><label for="s4">&nbsp;&nbsp;D) 35%</label>&nbsp;&nbsp;&nbsp;&nbsp;

						  <br><Br><hr class="line_break">

				 <p>6) The ratio between the speeds of two trains is 7: 8. If the second train runs 440 kms in 4 hours, then the speed of the first train is:</p>
					  <input type="radio" name="con6" id="y" value="A) 96.25"><label for="y">&nbsp;&nbsp;A) 96.25</label>&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="radio" name="con6" id="n" value="B) 96.75"><label for="n">&nbsp;&nbsp;B) 96.75</label>&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="radio" name="con6" id="e" value="C) 98.25"><label for="e">&nbsp;&nbsp;C) 98.25</label>&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="radio" name="con6" id="fw" value="D) 98.75"><label for="fw">&nbsp;&nbsp;D) 98.75</label>&nbsp;&nbsp;&nbsp;&nbsp;


						  <br><Br><hr class="line_break">

				 <p>7) If a quarter kg of potato costs 60 paise, how many paise will 200 gm cost?</p>
					  <input type="radio" name="con7" id="t" value="A) 38 paise"><label for="t">&nbsp;&nbsp;A) 38 paise </label>&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="radio" name="con7" id="f" value="B) 46 paise"><label for="f">&nbsp;&nbsp;B) 46 paise</label>&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="radio" name="con7" id="u" value="C) 51 paise"><label for="u">&nbsp;&nbsp;C) 51 paise</label>&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="radio" name="con7" id="h" value="D) 48 paise"><label for="h">&nbsp;&nbsp;D) 48 paise</label>&nbsp;&nbsp;&nbsp;&nbsp;

						  <br><Br><hr class="line_break">

				  <p>8) 8, 24, 12, 36, 18, 54, ?  Find the missing number.</p>
					  <input type="radio" name="con8" id="t1" value="A) 75"><label for="t1">&nbsp;&nbsp;A) 75</label>&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="radio" name="con8" id="t2" value="B) 27"><label for="t2">&nbsp;&nbsp;B) 27</label>&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="radio" name="con8" id="t3" value="C) 38"><label for="t3">&nbsp;&nbsp;C) 38</label>&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="radio" name="con8" id="t4" value="D) 37"><label for="t4">&nbsp;&nbsp;D) 37</label>&nbsp;&nbsp;&nbsp;&nbsp;

						  <br><Br><hr class="line_break">


				   <p>9) A wheel makes 1000 revolutions in covering a distance of 88 km. Find the radius of the wheel.</p>
					  <input type="radio" name="con9" id="f1" value="A) 12m"><label for="f1">&nbsp;&nbsp;A) 12m</label>&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="radio" name="con9" id="f2" value="B) 88m"><label for="f2">&nbsp;&nbsp;B) 88m</label>&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="radio" name="con9" id="f3" value="C) 14m"><label for="f3">&nbsp;&nbsp;C) 14m</label>&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="radio" name="con9" id="f4" value="D) 18m"><label for="f4">&nbsp;&nbsp;D) 18m</label>&nbsp;&nbsp;&nbsp;&nbsp;

						  <br><Br><hr class="line_break">

				   <p>10) How many words can be formed by using all letters of the word ‘daughter’ so that the vowels always come together?</p>
					  <input type="radio" name="con10" id="r1" value="A) 4320 words"><label for="r1">&nbsp;A) 4320 words </label>&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="radio" name="con10" id="r2" value="B) 4220 words"><label for="r2">&nbsp;B) 4220 words</label>&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="radio" name="con10" id="r3" value="C) 4120 words"><label for="r3">&nbsp;C) 4120 words</label>&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="radio" name="con10" id="r4" value="D) 4020 words"><label for="r4">&nbsp;D) 4020 words</label>&nbsp;&nbsp;&nbsp;&nbsp;

						  <br><Br><hr class="line_break">

				  <p>11) A man takes 3 hours 45 minutes to row a boat 15 km downstream of a river and 2 hours 30 minutes to cover a distance of 5 km upstream. Find the speed of the river current in km/hr.</p>
					  <input type="radio" name="con11" id="c1" value="A) 1 km/hr"><label for="c1">&nbsp;A) 1 km/hr</label>&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="radio" name="con11" id="c2" value="B) 2 km/hr"><label for="c2">&nbsp;B) 2 km/hr</label>&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="radio" name="con11" id="c3" value="C) 4 km/hr"><label for="c3">&nbsp;C) 4 km/hr</label>&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="radio" name="con11" id="c4" value="D) 5 km/hr"><label for="c4">&nbsp;D) 5 km/hr</label>&nbsp;&nbsp;&nbsp;&nbsp;

						  <br><Br><hr class="line_break">
						  
				  <p>12) A train passes a station platform in 36 seconds and a man standing on the platform in 20 seconds. If the speed of the train is 54 km/hr, what is the length of the platform?</p>
					  <input type="radio" name="con12" id="a1" value="A) 120 m"><label for="a1">A) 120 m</label>&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="radio" name="con12" id="a2" value="B) 240 m"><label for="a2">B) 240 m</label>&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="radio" name="con12" id="a3" value="C) 300 m"><label for="a3">C) 300 m</label>&nbsp;&nbsp;&nbsp;&nbsp;
					  <input type="radio" name="con12" id="a4" value="D) None of these"><label for="a4">D) None of these</label>&nbsp;&nbsp;&nbsp;&nbsp;
										
						  <br><Br><hr class="line_break">
						  
					  <p>13) The present age of a father is 3 years more than three times the age of his son. Three years hence, father’s age will be 10 years more than twice the age of the son. Find the present age of the father.</p>
						  <input type="radio" name="con13" id="b1" value="A) 36 Years"><label for="b1">A) 36 Years </label>&nbsp;&nbsp;&nbsp;&nbsp;
						  <input type="radio" name="con13" id="b2" value="B) 33 Years"><label for="b2">B) 33 Years</label>&nbsp;&nbsp;&nbsp;&nbsp;
						  <input type="radio" name="con13" id="b3" value="C) 32 Years"><label for="b3">C) 32 Years</label>&nbsp;&nbsp;&nbsp;&nbsp;
						  <input type="radio" name="con13" id="b4" value="D) 34 Years"><label for="b4">D) 34 Years</label>&nbsp;&nbsp;&nbsp;&nbsp;
					   
						  <br><Br><hr class="line_break">
						  
					  <p>14) Three numbers are in the ratio 3:4:5. The sum of the largest and the smallest equals the Sum of the third and 52. The smallest number is</p>
						  <input type="radio" name="con14" id="d1" value="A) 39"><label for="d1">A) 39 </label>&nbsp;&nbsp;&nbsp;&nbsp;
						  <input type="radio" name="con14" id="d2" value="B) 40"><label for="d2">B) 40</label>&nbsp;&nbsp;&nbsp;&nbsp;
						  <input type="radio" name="con14" id="d3" value="C) 41"><label for="d3">C) 41</label>&nbsp;&nbsp;&nbsp;&nbsp;
						  <input type="radio" name="con14" id="d4" value="D) 42"><label for="d4">D) 42</label>&nbsp;&nbsp;&nbsp;&nbsp;
					   
						  <br><Br><hr class="line_break">

					  <p>15) Three solid cubes of sides 1 cm, 6 cm and 8 cm are melted to form a new Cube. Find the surface area of the cube so formed.</p>
						  <input type="radio" name="con15" id="g1" value="A) 486 cm2"><label for="g1">A) 486 cm2</label>&nbsp;&nbsp;&nbsp;&nbsp;
						  <input type="radio" name="con15" id="g2" value="B) 476 cm2"><label for="g2">B) 476 cm2</label>&nbsp;&nbsp;&nbsp;&nbsp;
						  <input type="radio" name="con15" id="g3" value="C) 466 cm2"><label for="g3">C) 466 cm2</label>&nbsp;&nbsp;&nbsp;&nbsp;
						  <input type="radio" name="con15" id="g4" value="C) 456 cm2"><label for="g4">D) 456 cm2</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        
						  <br><Br><hr class="line_break">
						
					  <p>16) The average ages of three persons is 27 years. Their ages are in the proportion of 1:3:5.What is the age in years of the youngest one among them.</p>
						  <input type="radio" name="con16" id="h1" value="A) 10"><label for="h1">A) 10 </label>&nbsp;&nbsp;&nbsp;&nbsp;
						  <input type="radio" name="con16" id="h2" value="B) 9"><label for="h2">B) 9</label>&nbsp;&nbsp;&nbsp;&nbsp;
						  <input type="radio" name="con16" id="h3" value="C) 11"><label for="h3">C) 11</label>&nbsp;&nbsp;&nbsp;&nbsp;
						  <input type="radio" name="con16" id="h4" value="D) 12"><label for="h4">D) 12</label>&nbsp;&nbsp;&nbsp;&nbsp;
                       
					    
					  <br><Br><hr class="line_break">
						
					  <p>17) P is able to do a piece of work in 15 days and Q can do the same work in 20 days. If they can work together for 4 days, what is the fraction of work left?</p>
						  <input type="radio" name="con17" id="i1" value="A) 7/15"><label for="i1">A) 7/15 </label>&nbsp;&nbsp;&nbsp;&nbsp;
						  <input type="radio" name="con17" id="i2" value="B) 8/15"><label for="i2">B) 8/15</label>&nbsp;&nbsp;&nbsp;&nbsp;
						  <input type="radio" name="con17" id="i3" value="C) 11/15"><label for="i3">C) 11/15</label>&nbsp;&nbsp;&nbsp;&nbsp;
 						  <input type="radio" name="con17" id="i4" value="D) 14/15"><label for="i4">D) 14/15</label>&nbsp;&nbsp;&nbsp;&nbsp;
                      
					    <br><Br><hr class="line_break">
						
				    <p>18) A batsman in his 18th innings makes a score of 150 runs and thereby increasing his Average by 6. Find his average after 18th innings.</p>
			         	  <input type="radio" name="con18" id="j1" value="A) 45"><label for="j1">A) 45</label>&nbsp;&nbsp;&nbsp;&nbsp;
						  <input type="radio" name="con18" id="j2" value="B) 42"><label for="j2">B) 42</label>&nbsp;&nbsp;&nbsp;&nbsp;
						  <input type="radio" name="con18" id="j3" value="C) 39"><label for="j3">C) 39</label>&nbsp;&nbsp;&nbsp;&nbsp;
						  <input type="radio" name="con18" id="j4" value="D) 40"><label for="j4">D) 40</label>&nbsp;&nbsp;&nbsp;&nbsp;
                       
					     <br><Br><hr class="line_break">
						 
					<p>19) Of the three numbers, second is twice the first and also thrice the third. If the average of the three numbers is 44, the largest number is</p>
						  <input type="radio" name="con19" id="k1" value="A) 24"><label for="k1">A) 24 </label>&nbsp;&nbsp;&nbsp;&nbsp;
						  <input type="radio" name="con19" id="k2" value="B) 36"><label for="k2">B) 36</label>&nbsp;&nbsp;&nbsp;&nbsp;
						  <input type="radio" name="con19" id="k3" value="C) 72"><label for="k3">C) 72</label>&nbsp;&nbsp;&nbsp;&nbsp;
						  <input type="radio" name="con19" id="k4" value="D) 108"><label for="k4">D) 108</label>&nbsp;&nbsp;&nbsp;&nbsp;
						
						 <br><Br><hr class="line_break">
					
				    <p>20) A Cone and a sphere have equal radius and equal volumes. Find the ratio of the sphere of the diameter of the sphere to the height of the cone</p>
						<input type="radio" name="con20" id="l1" value="A) 1:3"><label for="l1">A) 1:3</label>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="con20" id="l2" value="B) 2:4"><label for="l2">B) 2:4</label>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="con20" id="l3" value="C) 1:2"><label for="l3">C) 1:2</label>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="con20" id="l4" value="D) 2:8"><label for="l4">D) 2:8</label>&nbsp;&nbsp;&nbsp;&nbsp;
						 
						 <br><Br><hr class="line_break">
						 
					 
					<br>
                  <br>  
                <br>
            
            <input type="submit" value="Submit" class="submitbtn" />
		
		</form>
		</div>
	 </div>
	</div>

  
</body>
 
</html>


