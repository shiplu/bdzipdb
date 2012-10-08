<?php include_once("code_finder.php"); code_finder(post_code,outline); ?>
		<script type="text/javascript">
        $(document).ready(function() {
        $('#credit').show();
        });
        </script>
District : <input type="text" id="district" /> <br>
Thana : <input type="text" id="thana" /> <br>
Post Office: <input type="text" id="post" /> <br>
Post Code: <input type="text" id="post_code" />


<div style="position:fixed; top:1px; right:5px"><a href="javascript: window.history.go(-1)">Home</a> | <a href="https://github.com/Akhaura-Info-Foundation/code_finder" target="_blank">Download</a></div>



<div style="margin-top:50px; font-size:12px" align="center">
<p>To use this view include and call the function code_finder with "post_code" and "outline".</p>
<p><span style="font-style:italic">code_finder.php</span> : This file content postal code inner database and other functions.</p>
<p><span style="font-style:italic">code_finder()</span> : Here it is, the function call to exicute values from code_finder.php</p>
<p><span style="font-style:italic">post_code</span> : This function call varies type of searching postal code wise or post office. Now postal code has selected</p>
<p><span style="font-style:italic">outline</span> : Displaying the result generated from code_finder.php. outline equal shows result on your input flieds. </p>
<p>You have to declare &quot;id&quot; on your input flieds &quot;district&quot; for district, &quot;thana&quot; for thana, &quot;post&quot; for post offce and &quot;post_code&quot; for postal code.</p>

<div style="font-weight:bold; font-style:italic">
<span style="color:#ff003a"><</span> <span style="color:#ff003a; margin-left:-5px">?php</span> <span style="color:#006600">include_once</span><span style="color:#903aff">
(</span><span style="color:#cc0000">"code_finder.php"</span><span style="color:#903aff">)</span><span>;</span> code_finder<span style="color:#903aff">(</span>post_code,outline<span style="color:#903aff">)</span>; <span style="color:#ff003a">?></span></div>

<div align="center" style="padding:5px; font-weight:bold"><span style="color:#ff9900">&lt;input type=</span><span style="color:#3a00ff">&quot;text&quot;</span> <span style="color:#ff9900">id=</span><span style="color:#3a00ff">&quot;district&quot;</span> <span style="color:#ff9900">/&gt;</span></div>
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