<?php include_once("code_finder.php"); ?>
<style type="text/css">
p{font-family:Verdana, Geneva, sans-serif; font-size:12px;}
</style>

        
<table width="800" border="0" align="center" cellpadding="10" cellspacing="10">
  <tr>
    <td><img src="banner.png" width="800" height="300" alt="Banner" /></td>
  </tr>
  
  <tr>
    <td style="border-bottom:#CDCDCD solid 1px; border-top:#CDCDCD solid 1px; font-family:Verdana, Geneva, sans-serif; font-size:12px; font-weight:normal">
    <h3>Usable only for Bangladesh</h3>
     Code_finder is a standalone php script  written by Akram Hasan Sharkar and Sazzad Hossain Sharkar.<br />
     It has inner database of Bangladeshi  Postal Code with District, Thana, Post Office and and Post Code.<br />
     This easy to use script works on single  call and line of code. Anyone use this script for their standalone website or  any kind of CMS. No need extra coding or programming skill to work with this  script.<br />
     Easy customizable and fully flexible calls  and output. You can apply your own style if you want to implement it with your  exist input fields.<br /><br />
      <b>Basic usage:</b> <br />
        code_finder.php : This file content postal  code inner database and other functions.<br />
      code_finder() : Here it is, the function  call to exicute values from code_finder.php.<br />
      post_code / post : This function call  varies type of searching postal code wise or post office. &ldquo;post_code&rdquo; will  search by postal code and show field for postal code. And &ldquo;post&rdquo; will search by  post office name.<br />
      inline / outline : Displaying the result  generated from code_finder.php. inline equal shows as inner format and outline  will write information on your exist field, You have to declare &quot;id&quot;  on your input flieds &quot;district&quot; for district, &quot;thana&quot; for  thana, &quot;post&quot; for post offce and &quot;post_code&quot; for postal  code.<br /><br />


<div style="font-weight:bold; font-style:italic">
<span style="color:#ff003a"><</span> <span style="color:#ff003a; margin-left:-5px">?php</span> <span style="color:#006600">include_once</span><span style="color:#903aff">
(</span><span style="color:#cc0000">"code_finder.php"</span><span style="color:#903aff">)</span><span>;</span> code_finder<span style="color:#903aff">(</span>post_code,inline<span style="color:#903aff">)</span>; <span style="color:#ff003a">?></span></div> <br />

      This php call will include code_finder.php  and code_finder() function will work as postal code search with inline field.<br />
      This Multi-functional script work slow for  faster output use any mini version you want. Mini version no need function call  or searching methods.<br /><br />

      <b>Platform used:<br />
        1. PHP<br />
        2. Curl<br />
        3. Json<br />
        4. jQuery<br />
        5. jQuery  UI<br />
    	6. XML</b>
    
    </td>
  </tr>

  
  <tr>
    <td>
 
<div> 
<h5>Multi-functional script (work slow), for faster output use mini.</h5>      
<p>Post Code Inline (Built in input) <a href="demo1.php">Demo</a></p>
<p>Post Code Outline (User input) <a href="demo2.php">Demo</a></p>
<p>Post Office Inline (Built in input) <a href="demo3.php">Demo</a></p>
<p>Post Office Outline (User input) <a href="demo4.php">Demo</a></p>
</div>

<div>
<h5>Mini versions</h5>      
<p>Post Code Inline (Built in input) <a href="mini1/">Demo</a></p>
<p>Post Code Outline (User input) <a href="mini2/">Demo</a></p>
<p>Post Office Inline (Built in input) <a href="mini3/">Demo</a></p>
<p>Post Office Outline (User input) <a href="mini4/">Demo</a></p>
</div>

<div>
<h5>Blog or HTML users?</h5>
<p>Post Code Inline (Built in input) <a href="js1/">Demo</a></p>
<p>Post Code Outline (User input) <a href="js2/">Demo</a></p>
<p>Post Office Inline (Built in input) <a href="js3/">Demo</a></p>
<p>Post Office Outline (User input) <a href="js4/">Demo</a></p>
</div>



<style type="text/css">
.testimonial {
    margin: 0;
    background: #B7EDFF;
    padding: 10px 50px;
    position: relative;
    font-family: Georgia, serif;
    color: #666;
    border-radius: 5px;
    font-style: italic;
    text-shadow: 0 1px 0 #ECFBFF;
    background-image: linear-gradient(#CEF3FF, #B7EDFF);
	width:650px;
}

.testimonial:before, .testimonial:after {
    content: "\201C";
    position: absolute;
    font-size: 80px;
    line-height: 1;
    color: #999;
    font-style: normal;
}

.testimonial:before {
    top: 0;
    left: 10px;
}
.testimonial:after {
    content: "\201D";
    right: 10px;
    bottom: -0.5em;
}
.arrow-down {
    width: 0;
    height: 0;
    border-left: 15px solid transparent;
    border-right: 15px solid transparent;
    border-top: 15px solid #B7EDFF;
    margin: 0 0 0 25px;
}
.testimonial-author {
    margin: 0 0 0 25px;
    font-family: Arial, Helvetica, sans-serif;
    color: #999;
}
.testimonial-author span {
    font-size: 12px;
    color: #666;
}
</style>
<div align="center" style="margin-top:20px">
<blockquote class="testimonial">
  <p>If you like our script, please donate a piece of bread to any poor near you.</p>
</blockquote>
<div class="arrow-down"></div>
<p class="testimonial-author" align="center">Akram Hasan Sharkar | <span><a href="http://www.akhaura.info" style="text-decoration:none">Akhaura Info Foundation</a></span></p>
</div>   
    
    
    </td>
  </tr>
</table>
