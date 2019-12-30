<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Academic Torrents</title>

	<meta charset="utf-8">
	<meta property="og:site_name" content="Academic Torrents" />
	<meta property="og:locale" content="en_US" />  
	<meta property="og:type" content="article" />
	<meta property="og:image" content="http://academictorrents.com/res/img/logo--1200x630.jpg" />
      
<!-- 	<link href="/res/jquery/jquery-ui.min.css" rel="stylesheet"> -->
<!-- 	<script src="/res/jquery/jquery-2.1.0.min.js"></script> -->
<!-- 	<script src="/res/jquery/jquery-ui.min.js"></script> -->
<!-- 	<script src="/res/jquery/jquery-ui-i18n.min.js"></script> -->


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<!-- Bootstrap core CSS -->
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
<!-- 	<link href="/res/bootstrap3.2/bootstrap.min.css" rel="stylesheet"> -->
<!-- 	<link href="/res/bootstrap3.2/bootstrap-theme.min.css" rel="stylesheet"> -->
<!-- 	<script src="/res/bootstrap3.2/bootstrap.min.js"></script> -->
	
<script>
// Removing this code will be considered a violation of our policies
$(function(){

	if (window.CloudflareApps || location.hostname != atob("YWNhZGVtaWN0b3JyZW50cy5jb20=")){
		console.log("Site is not authentic")
		$("#notlivewarning").show();
		$("#notlivewarninglink").attr("href",atob("aHR0cDovL2FjYWRlbWljdG9ycmVudHMuY29t"));
		$("#login-checking-text").text("Please visit live version of the site to log in");
		
	}else{

		$("#login-checking").hide();
		$("#login-form").show();
	}
});
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46214407-1', 'academictorrents.com');
  ga('send', 'pageview');
</script>
	
</head>
<body data-spy="scroll" data-target="#scroll-content">

<div id="notlivewarning" style="margin-bottom:0px;display:none;" class="alert alert-danger" role="alert">
<center><a id="notlivewarninglink" style="color:black;font-size:15pt">This is a cached version of the website. Click here to view the live site.</span></center>
</div>


<nav class="navbar navbar-default navbar-inverse" role="navigation" style="margin:0px">

<div class="navbar-header">
  <a class="navbar-brand" href="http://academictorrents.com/">Academic Torrents</a>
</div>

<ul class="nav navbar-nav" style="margin:0px;">
<!--  <li>
<a class="" href='index.php'><span class="glyphicon glyphicon-home"></span> Home</a>
-->
<li>

<a class="dropdown-toggle" href='#' data-toggle="dropdown"><span class="glyphicon glyphicon-search"></span> Browse <b class="caret"></b></a>
        <ul class="dropdown-menu">
        
          <li><a href="/browse.php?cat=6" role="button"><span class="glyphicon glyphicon-th-list"></span> Datasets</a></li>
          <li><a href="/browse.php?cat=5" role="button"><span class="glyphicon glyphicon-book"></span> Papers</a></li>
          <li><a href="/browse.php?cat=7" role="button"><span class="glyphicon glyphicon-facetime-video"></span> Courses</a></li>
          <li><a href="/collections.php" role="button"><span class="glyphicon glyphicon-briefcase"></span> Collections</a></li>
        </ul>
<li>
<a class="" href='/upload.php'><span class="glyphicon glyphicon-cloud-upload"></span> Upload</a>

<li>
<a class="" href='/about.php'><span class="glyphicon glyphicon-globe"></span> About</a>

<li>
<a class="" href='/give'><span class="glyphicon glyphicon-heart" style="color:red"></span> Donate</a>


<li>
<a class="" href='/login.php'><span class="glyphicon glyphicon-user"></span> Login</a>


</ul>


<form class="navbar-form navbar-right" role="search" style="margin-right:0px;margin-left:0px;"  method="get" action="/browse.php">

  <div class="form-group text-right">
    <input type="text" class="form-control" placeholder="paper, author, or dataset" name="search" style="min-width: 200px;" />

  	<button type="submit" class="btn btn-primary">Search</button>

  </div>

</form>

</nav>




<div class="row">
<div class="col-sm-7">
<center>
<p>
<form method="get" action="browse.php" >

<div class="input-group">
<input class="form-control" type="text" name="search" placeholder="Search here" style="width:200px" value="">

<div class="btn-group" >
<button type='button' class='btn btn-default'><a href=browse.php?cat=5>Paper</a> <input name=c5 type="checkbox" value=1></button>
<button type='button' class='btn btn-default'><a href=browse.php?cat=6>Dataset</a> <input name=c6 type="checkbox" value=1></button>
<button type='button' class='btn btn-default'><a href=browse.php?cat=7>Course</a> <input name=c7 type="checkbox" value=1></button>
<!-- <button type='button' class='btn btn-default'><a href=browse.php?all=1>Everything</a></button> -->
<button style="padding-left: 10px;" type='submit' class="btn btn-info">Go</button>
</div>

</div>
</form>
</p>
</center>
</div>
<div class="col-sm-5">
<center>
<!--<div class="" >
     <script type="text/javascript">
       	amzn_assoc_ad_type = "banner";
	amzn_assoc_marketplace = "amazon";
	amzn_assoc_region = "US";
	amzn_assoc_placement = "assoc_banner_placement_default";
	amzn_assoc_banner_type = "ez";
	amzn_assoc_p = "13";
	amzn_assoc_width = "468";
	amzn_assoc_height = "60";
	amzn_assoc_tracking_id = "academictorre-20";
	amzn_assoc_linkid = "ae512e8b70b1f144a78d3598c5aaeea2";
     </script>
     <script src="//z-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1"></script>
    </div>
    -->

<div style="width:320px;height:50px;overflow:none;">
<div style="position: absolute;z-index: -100;width:320px;">

<h5>
<a href="/give">Support Academic Torrents!</a><br>Disable your ad-blocker!
</h5>
</div>
<script type="text/javascript">
    google_ad_client = "ca-pub-2068283315745938";
    google_ad_slot = "6467570043";
    google_ad_width = 320;
    google_ad_height = 50;
</script>
<!-- AT small banner -->
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>

</center>
</div>
</div>


<table class="table" style="font-size: small">
<tr>

<td class='colhead' align='center' ><a href='browse.php?sort_field=cat_name&amp;sort_dir=DESC'><span style='display: block;white-space: nowrap;'>Type</span></a></td><td class='colhead' align='center' style='width:100%'><a href='browse.php?sort_field=name&amp;sort_dir=DESC'><span style='display: block;white-space: nowrap;'>Name</span></a></td><!-- <td class="colhead" align="center">DL</td> -->
<td class='colhead' align='center' ><a href='browse.php?sort_field=numfiles&amp;sort_dir=DESC'><span style='display: block;white-space: nowrap;'>Files</span></a></td><td class='colhead' align='center' ><a href='browse.php?sort_field=added&amp;sort_dir=DESC'><span style='display: block;white-space: nowrap;'>Added</span></a></td><td class='colhead' align='center' ><a href='browse.php?sort_field=size&amp;sort_dir=DESC'><span style='display: block;white-space: nowrap;'>Size</span></a></td><td class='colhead' align='center' ><a href='browse.php?sort_field=times_completed&amp;sort_dir=DESC'><span style='display: block;white-space: nowrap;'>DLs</span></a></td><td class='colhead' align='center' ><a href='browse.php?sort_field=seeders&amp;sort_dir=DESC'><span style='display: block;white-space: nowrap;'><span class="glyphicon glyphicon-cloud-upload"></span></span></a></td><td class='colhead' align='center' ><a href='browse.php?sort_field=leechers&amp;sort_dir=DESC'><span style='display: block;white-space: nowrap;'><span class="glyphicon glyphicon-cloud-download"></span></span></a></td>


<tr>
<td align=center><a href="/browse.php?cat=7"><span class='glyphicon glyphicon-facetime-video'></span></a></td>
<td align=left><a href="/details/52da574b6412862e199abeaea63e51bf8cea2140"><b>Introduction to Computer Science [CS50x] [Harvard] [2018]</b></a>
<span class=pull-right></span></td>
<td align="center"><b><a href="/details/52da574b6412862e199abeaea63e51bf8cea2140/tech&amp;hit=1&amp;filelist=1">192</a></b></td>
<td align=center><nobr>2018-01-24</nobr></td>
<td align=center>9.61GB</td>
<td align=center>575<td align="center" nowrap><b><a class="green" href="/details/52da574b6412862e199abeaea63e51bf8cea2140/tech&amp;dllist=1">39</a></b></td>
<td align="center"><b><a class="green" href="/details/52da574b6412862e199abeaea63e51bf8cea2140/tech&amp;dllist=1">2</a></b></td>
</tr>
<tr>
<td align=center><a href="/browse.php?cat=7"><span class='glyphicon glyphicon-facetime-video'></span></a></td>
<td align=left><a href="/details/5daa22057577521a378b71e0f0de6a934bd5c2ea"><b>Artificial Intelligence(EDX)</b></a>
<span class=pull-right></span></td>
<td align="center"><b><a href="/details/5daa22057577521a378b71e0f0de6a934bd5c2ea/tech&amp;hit=1&amp;filelist=1">193</a></b></td>
<td align=center><nobr>2017-11-29</nobr></td>
<td align=center>3.87GB</td>
<td align=center>1,130<td align="center" nowrap><b><a class="green" href="/details/5daa22057577521a378b71e0f0de6a934bd5c2ea/tech&amp;dllist=1">62</a></b></td>
<td align="center"><b><a class="green" href="/details/5daa22057577521a378b71e0f0de6a934bd5c2ea/tech&amp;dllist=1">1</a></b></td>
</tr>
<tr>
<td align=center><a href="/browse.php?cat=7"><span class='glyphicon glyphicon-facetime-video'></span></a></td>
<td align=left><a href="/details/c5af268ec55cf2d3b439e7311ad43101ba8322eb"><b>Richard Feynman's Lectures on Physics (The Messenger Lectures)</b></a>
<span class=pull-right><a class='eduicon' title="This user has a educational email address"><span class="glyphicon glyphicon-education"></span></a> </span></td>
<td align="center"><b><a href="/details/c5af268ec55cf2d3b439e7311ad43101ba8322eb/tech&amp;hit=1&amp;filelist=1">7</a></b></td>
<td align=center><nobr>2017-07-20</nobr></td>
<td align=center>1.07GB</td>
<td align=center>1,050<td align="center" nowrap><b><a class="green" href="/details/c5af268ec55cf2d3b439e7311ad43101ba8322eb/tech&amp;dllist=1">59+<span title='This entry is also stored on web servers' class='glyphicon glyphicon-globe' aria-hidden='true'></span></a></b></td>
<td align="center"><b><a class="green" href="/details/c5af268ec55cf2d3b439e7311ad43101ba8322eb/tech&amp;dllist=1">1</a></b></td>
</tr>
<tr>
<td align=center><a href="/browse.php?cat=7"><span class='glyphicon glyphicon-facetime-video'></span></a></td>
<td align=left><a href="/details/07f1555918ed051809f0075fedc0cd469a194c93"><b>Statistical Machine Learning CMU Spring 2016</b></a>
<span class=pull-right><a class='eduicon' title="This user has a educational email address"><span class="glyphicon glyphicon-education"></span></a> </span></td>
<td align="center"><b><a href="/details/07f1555918ed051809f0075fedc0cd469a194c93/tech&amp;hit=1&amp;filelist=1">39</a></b></td>
<td align=center><nobr>2018-03-22</nobr></td>
<td align=center>28.19GB</td>
<td align=center>65<td align="center" nowrap><b><a class="green" href="/details/07f1555918ed051809f0075fedc0cd469a194c93/tech&amp;dllist=1">19</a></b></td>
<td align="center"><b><a class="green" href="/details/07f1555918ed051809f0075fedc0cd469a194c93/tech&amp;dllist=1">1</a></b></td>
</tr>
<tr>
<td align=center><a href="/browse.php?cat=7"><span class='glyphicon glyphicon-facetime-video'></span></a></td>
<td align=left><a href="/details/d666bf4b83066bcf7401e9c155fcd1b1c01cfb11"><b>Internet History, Technology, and Security by Charles Severance</b></a>
<span class=pull-right><a class='eduicon' title="This user has a educational email address"><span class="glyphicon glyphicon-education"></span></a> </span></td>
<td align="center"><b><a href="/details/d666bf4b83066bcf7401e9c155fcd1b1c01cfb11/tech&amp;hit=1&amp;filelist=1">196</a></b></td>
<td align=center><nobr>2018-03-22</nobr></td>
<td align=center>2.35GB</td>
<td align=center>47<td align="center" nowrap><b><a class="green" href="/details/d666bf4b83066bcf7401e9c155fcd1b1c01cfb11/tech&amp;dllist=1">17</a></b></td>
<td align="center"><b><a class="green" href="/details/d666bf4b83066bcf7401e9c155fcd1b1c01cfb11/tech&amp;dllist=1">1</a></b></td>
</tr>
<tr>
<td align=center><a href="/browse.php?cat=7"><span class='glyphicon glyphicon-facetime-video'></span></a></td>
<td align=left><a href="/details/f7c9a9db5d0d9a1e0f2f383ec629fefffa475ae5"><b>MIT OCW 6.00 -  Introduction to Computer Science and Programming. Fall 2008</b></a>
<span class=pull-right><a class='eduicon' title="This user has a educational email address"><span class="glyphicon glyphicon-education"></span></a> </span></td>
<td align="center"><b><a href="/details/f7c9a9db5d0d9a1e0f2f383ec629fefffa475ae5/tech&amp;hit=1&amp;filelist=1">139</a></b></td>
<td align=center><nobr>2018-03-22</nobr></td>
<td align=center>5.34GB</td>
<td align=center>43<td align="center" nowrap><b><a class="green" href="/details/f7c9a9db5d0d9a1e0f2f383ec629fefffa475ae5/tech&amp;dllist=1">13</a></b></td>
<td align="center"><b><a class="green" href="/details/f7c9a9db5d0d9a1e0f2f383ec629fefffa475ae5/tech&amp;dllist=1">1</a></b></td>
</tr>
<tr>
<td align=center><a href="/browse.php?cat=6"><span class='glyphicon glyphicon-th-list'></span></a></td>
<td align=left><a href="/details/b79869ca12787166de88311ca1f28e3ebec12dec"><b>Breast Cancer Cell Segmentation</b></a>
<span class=pull-right><a class='eduicon' title="This user has a educational email address"><span class="glyphicon glyphicon-education"></span></a> </span></td>
<td align="center"><b><a href="/details/b79869ca12787166de88311ca1f28e3ebec12dec/tech&amp;hit=1&amp;filelist=1">174</a></b></td>
<td align=center><nobr>2018-02-19</nobr></td>
<td align=center>159.96MB</td>
<td align=center>36<td align="center" nowrap><b><a class="green" href="/details/b79869ca12787166de88311ca1f28e3ebec12dec/tech&amp;dllist=1">14+<span title='This entry is also stored on web servers' class='glyphicon glyphicon-globe' aria-hidden='true'></span></a></b></td>
<td align="center"><b><a class="red" href="/details/b79869ca12787166de88311ca1f28e3ebec12dec/tech&amp;dllist=1">0</a></b></td>
</tr>
<tr>
<td align=center><a href="/browse.php?cat=6"><span class='glyphicon glyphicon-th-list'></span></a></td>
<td align=left><a href="/details/557481faacd824c83fbf57dcf7b6da9383b3235a"><b>NIH Chest X-ray Dataset of 14 Common Thorax Disease Categories</b></a>
<span class=pull-right><a class='eduicon' title="This user has a educational email address"><span class="glyphicon glyphicon-education"></span></a> </span></td>
<td align="center"><b><a href="/details/557481faacd824c83fbf57dcf7b6da9383b3235a/tech&amp;hit=1&amp;filelist=1">15</a></b></td>
<td align=center><nobr>2017-10-09</nobr></td>
<td align=center>45.09GB</td>
<td align=center>159<td align="center" nowrap><b><a class="green" href="/details/557481faacd824c83fbf57dcf7b6da9383b3235a/tech&amp;dllist=1">10+<span title='This entry is also stored on web servers' class='glyphicon glyphicon-globe' aria-hidden='true'></span></a></b></td>
<td align="center"><b><a class="red" href="/details/557481faacd824c83fbf57dcf7b6da9383b3235a/tech&amp;dllist=1">0</a></b></td>
</tr>
<tr>
<td align=center><a href="/browse.php?cat=6"><span class='glyphicon glyphicon-th-list'></span></a></td>
<td align=left><a href="/details/fd62cc1d79f595cbe1de6356fb13c2165994e469"><b>CrackStation's Password Cracking Dictionary</b></a>
<span class=pull-right><a class='eduicon' title="This user has a educational email address"><span class="glyphicon glyphicon-education"></span></a> </span></td>
<td align="center"><b><a href="/details/fd62cc1d79f595cbe1de6356fb13c2165994e469/tech&amp;hit=1&amp;filelist=1">1</a></b></td>
<td align=center><nobr>2018-03-22</nobr></td>
<td align=center>4.50GB</td>
<td align=center>30<td align="center" nowrap><b><a class="green" href="/details/fd62cc1d79f595cbe1de6356fb13c2165994e469/tech&amp;dllist=1">10</a></b></td>
<td align="center"><b><a class="green" href="/details/fd62cc1d79f595cbe1de6356fb13c2165994e469/tech&amp;dllist=1">1</a></b></td>
</tr>
<tr>
<td align=center><a href="/browse.php?cat=6"><span class='glyphicon glyphicon-th-list'></span></a></td>
<td align=left><a href="/details/71631f83b11d3d79d8f84efe0a7e12f0ac001460"><b>AVA: A Large-Scale Database for Aesthetic Visual Analysis</b></a>
<span class=pull-right><a class='eduicon' title="This user has a educational email address"><span class="glyphicon glyphicon-education"></span></a> </span></td>
<td align="center"><b><a href="/details/71631f83b11d3d79d8f84efe0a7e12f0ac001460/tech&amp;hit=1&amp;filelist=1">92</a></b></td>
<td align=center><nobr>2017-07-16</nobr></td>
<td align=center>33.14GB</td>
<td align=center>132<td align="center" nowrap><b><a class="green" href="/details/71631f83b11d3d79d8f84efe0a7e12f0ac001460/tech&amp;dllist=1">11</a></b></td>
<td align="center"><b><a class="green" href="/details/71631f83b11d3d79d8f84efe0a7e12f0ac001460/tech&amp;dllist=1">1</a></b></td>
</tr>
<tr>
<td align=center><a href="/browse.php?cat=6"><span class='glyphicon glyphicon-th-list'></span></a></td>
<td align=left><a href="/details/3cde17e7e4d9886513630c1005ba20b8d37c333a"><b>Malignant lymphoma classification</b></a>
<span class=pull-right><a class='eduicon' title="This user has a educational email address"><span class="glyphicon glyphicon-education"></span></a> </span></td>
<td align="center"><b><a href="/details/3cde17e7e4d9886513630c1005ba20b8d37c333a/tech&amp;hit=1&amp;filelist=1">1</a></b></td>
<td align=center><nobr>2018-02-19</nobr></td>
<td align=center>1.44GB</td>
<td align=center>26<td align="center" nowrap><b><a class="green" href="/details/3cde17e7e4d9886513630c1005ba20b8d37c333a/tech&amp;dllist=1">8+<span title='This entry is also stored on web servers' class='glyphicon glyphicon-globe' aria-hidden='true'></span></a></b></td>
<td align="center"><b><a class="red" href="/details/3cde17e7e4d9886513630c1005ba20b8d37c333a/tech&amp;dllist=1">0</a></b></td>
</tr>
<tr>
<td align=center><a href="/browse.php?cat=6"><span class='glyphicon glyphicon-th-list'></span></a></td>
<td align=left><a href="/details/1490aec815141cdb50a32b81ef78b1eaf6b38b03"><b>Animals with Attributes 2 (AwA2) dataset</b></a>
<span class=pull-right><a class='eduicon' title="This user has a educational email address"><span class="glyphicon glyphicon-education"></span></a> </span></td>
<td align="center"><b><a href="/details/1490aec815141cdb50a32b81ef78b1eaf6b38b03/tech&amp;hit=1&amp;filelist=1">2</a></b></td>
<td align=center><nobr>2017-10-23</nobr></td>
<td align=center>13.92GB</td>
<td align=center>56<td align="center" nowrap><b><a class="green" href="/details/1490aec815141cdb50a32b81ef78b1eaf6b38b03/tech&amp;dllist=1">8+<span title='This entry is also stored on web servers' class='glyphicon glyphicon-globe' aria-hidden='true'></span></a></b></td>
<td align="center"><b><a class="red" href="/details/1490aec815141cdb50a32b81ef78b1eaf6b38b03/tech&amp;dllist=1">0</a></b></td>
</tr>
<tr>
<td align=center><a href="/browse.php?cat=6"><span class='glyphicon glyphicon-th-list'></span></a></td>
<td align=left><a href="/details/3ada3ae6ec71097e63d897cf878051bba3eaba25"><b>Electron Microscopy (CA1 hippocampus) Dataset</b></a>
<span class=pull-right><a class='eduicon' title="This user has a educational email address"><span class="glyphicon glyphicon-education"></span></a> </span></td>
<td align="center"><b><a href="/details/3ada3ae6ec71097e63d897cf878051bba3eaba25/tech&amp;hit=1&amp;filelist=1">5</a></b></td>
<td align=center><nobr>2017-10-24</nobr></td>
<td align=center>3.87GB</td>
<td align=center>39<td align="center" nowrap><b><a class="green" href="/details/3ada3ae6ec71097e63d897cf878051bba3eaba25/tech&amp;dllist=1">9+<span title='This entry is also stored on web servers' class='glyphicon glyphicon-globe' aria-hidden='true'></span></a></b></td>
<td align="center"><b><a class="red" href="/details/3ada3ae6ec71097e63d897cf878051bba3eaba25/tech&amp;dllist=1">0</a></b></td>
</tr>
<tr>
<td align=center><a href="/browse.php?cat=6"><span class='glyphicon glyphicon-th-list'></span></a></td>
<td align=left><a href="/details/1d154cde2fab9ec8039becd03d9bb877614d351b"><b>GANGogh training data set</b></a>
<span class=pull-right><a class='eduicon' title="This user has a educational email address"><span class="glyphicon glyphicon-education"></span></a> </span></td>
<td align="center"><b><a href="/details/1d154cde2fab9ec8039becd03d9bb877614d351b/tech&amp;hit=1&amp;filelist=1">1</a></b></td>
<td align=center><nobr>2017-11-29</nobr></td>
<td align=center>37.15GB</td>
<td align=center>42<td align="center" nowrap><b><a class="green" href="/details/1d154cde2fab9ec8039becd03d9bb877614d351b/tech&amp;dllist=1">7+<span title='This entry is also stored on web servers' class='glyphicon glyphicon-globe' aria-hidden='true'></span></a></b></td>
<td align="center"><b><a class="red" href="/details/1d154cde2fab9ec8039becd03d9bb877614d351b/tech&amp;dllist=1">0</a></b></td>
</tr>
<tr>
<td align=center><a href="/browse.php?cat=6"><span class='glyphicon glyphicon-th-list'></span></a></td>
<td align=left><a href="/details/c4f39a0a8e46e8d2174b8a8a81b9887150f44d50"><b>MICCAI 2015 Challenge on Multimodal Brain Tumor Segmentation (BraTS2015)</b></a>
<span class=pull-right><a class='eduicon' title="This user has a educational email address"><span class="glyphicon glyphicon-education"></span></a> </span></td>
<td align="center"><b><a href="/details/c4f39a0a8e46e8d2174b8a8a81b9887150f44d50/tech&amp;hit=1&amp;filelist=1">1812</a></b></td>
<td align=center><nobr>2017-09-19</nobr></td>
<td align=center>5.34GB</td>
<td align=center>52<td align="center" nowrap><b><a class="green" href="/details/c4f39a0a8e46e8d2174b8a8a81b9887150f44d50/tech&amp;dllist=1">8+<span title='This entry is also stored on web servers' class='glyphicon glyphicon-globe' aria-hidden='true'></span></a></b></td>
<td align="center"><b><a class="red" href="/details/c4f39a0a8e46e8d2174b8a8a81b9887150f44d50/tech&amp;dllist=1">0</a></b></td>
</tr>
<tr>
<td align=center><a href="/browse.php?cat=6"><span class='glyphicon glyphicon-th-list'></span></a></td>
<td align=left><a href="/details/e9ac5edf285a43309e57e1289e8816a4e78a937c"><b>UC Merced Land Use Dataset</b></a>
<span class=pull-right><a class='eduicon' title="This user has a educational email address"><span class="glyphicon glyphicon-education"></span></a> </span></td>
<td align="center"><b><a href="/details/e9ac5edf285a43309e57e1289e8816a4e78a937c/tech&amp;hit=1&amp;filelist=1">1</a></b></td>
<td align=center><nobr>2017-10-10</nobr></td>
<td align=center>332.47MB</td>
<td align=center>37<td align="center" nowrap><b><a class="green" href="/details/e9ac5edf285a43309e57e1289e8816a4e78a937c/tech&amp;dllist=1">8+<span title='This entry is also stored on web servers' class='glyphicon glyphicon-globe' aria-hidden='true'></span></a></b></td>
<td align="center"><b><a class="red" href="/details/e9ac5edf285a43309e57e1289e8816a4e78a937c/tech&amp;dllist=1">0</a></b></td>
</tr>
<tr>
<td align=center><a href="/browse.php?cat=7"><span class='glyphicon glyphicon-facetime-video'></span></a></td>
<td align=left><a href="/details/3374eb064817a8edd12167b6e9e1300b13d9f08a"><b>[Coursera] Social Psychology by Scott Plous (Wesleyan University)</b></a>
<span class=pull-right></span></td>
<td align="center"><b><a href="/details/3374eb064817a8edd12167b6e9e1300b13d9f08a/tech&amp;hit=1&amp;filelist=1">171</a></b></td>
<td align=center><nobr>2017-05-29</nobr></td>
<td align=center>2.53GB</td>
<td align=center>621<td align="center" nowrap><b><a class="green" href="/details/3374eb064817a8edd12167b6e9e1300b13d9f08a/tech&amp;dllist=1">32</a></b></td>
<td align="center"><b><a class="red" href="/details/3374eb064817a8edd12167b6e9e1300b13d9f08a/tech&amp;dllist=1">0</a></b></td>
</tr>
<tr>
<td align=center><a href="/browse.php?cat=6"><span class='glyphicon glyphicon-th-list'></span></a></td>
<td align=left><a href="/details/5bdb401695ad36d4ccd73da90c2f9f8ab6f82092"><b>Ischemic Stroke Lesion Segmentation Challenge 2017 (ISLES2017)</b></a>
<span class=pull-right><a class='eduicon' title="This user has a educational email address"><span class="glyphicon glyphicon-education"></span></a> </span></td>
<td align="center"><b><a href="/details/5bdb401695ad36d4ccd73da90c2f9f8ab6f82092/tech&amp;hit=1&amp;filelist=1">1382</a></b></td>
<td align=center><nobr>2017-09-13</nobr></td>
<td align=center>1.40GB</td>
<td align=center>59<td align="center" nowrap><b><a class="green" href="/details/5bdb401695ad36d4ccd73da90c2f9f8ab6f82092/tech&amp;dllist=1">7+<span title='This entry is also stored on web servers' class='glyphicon glyphicon-globe' aria-hidden='true'></span></a></b></td>
<td align="center"><b><a class="red" href="/details/5bdb401695ad36d4ccd73da90c2f9f8ab6f82092/tech&amp;dllist=1">0</a></b></td>
</tr>
<tr>
<td align=center><a href="/browse.php?cat=6"><span class='glyphicon glyphicon-th-list'></span></a></td>
<td align=left><a href="/details/95b58ebfc1952780cfe2102dd7290889feefad66"><b>Non-Small Cell Lung Cancer CT Scan Dataset (NSCLC-Radiomics-Genomics)</b></a>
<span class=pull-right><a class='eduicon' title="This user has a educational email address"><span class="glyphicon glyphicon-education"></span></a> </span></td>
<td align="center"><b><a href="/details/95b58ebfc1952780cfe2102dd7290889feefad66/tech&amp;hit=1&amp;filelist=1">183</a></b></td>
<td align=center><nobr>2017-09-19</nobr></td>
<td align=center>4.52GB</td>
<td align=center>34<td align="center" nowrap><b><a class="green" href="/details/95b58ebfc1952780cfe2102dd7290889feefad66/tech&amp;dllist=1">10+<span title='This entry is also stored on web servers' class='glyphicon glyphicon-globe' aria-hidden='true'></span></a></b></td>
<td align="center"><b><a class="green" href="/details/95b58ebfc1952780cfe2102dd7290889feefad66/tech&amp;dllist=1">1</a></b></td>
</tr>
<tr>
<td align=center><a href="/browse.php?cat=6"><span class='glyphicon glyphicon-th-list'></span></a></td>
<td align=left><a href="/details/80ecfefcabede760cdbdf63e38986501f7becd49"><b>NIH Pancreas-CT Dataset</b></a>
<span class=pull-right><a class='eduicon' title="This user has a educational email address"><span class="glyphicon glyphicon-education"></span></a> </span></td>
<td align="center"><b><a href="/details/80ecfefcabede760cdbdf63e38986501f7becd49/tech&amp;hit=1&amp;filelist=1">164</a></b></td>
<td align=center><nobr>2017-09-12</nobr></td>
<td align=center>4.86GB</td>
<td align=center>37<td align="center" nowrap><b><a class="green" href="/details/80ecfefcabede760cdbdf63e38986501f7becd49/tech&amp;dllist=1">7+<span title='This entry is also stored on web servers' class='glyphicon glyphicon-globe' aria-hidden='true'></span></a></b></td>
<td align="center"><b><a class="green" href="/details/80ecfefcabede760cdbdf63e38986501f7becd49/tech&amp;dllist=1">1</a></b></td>
</tr>
</table>

<center>
<p><ul class='pagination'><li class='disabled'><a href='#'><b>&lt;&lt;&nbsp;Prev</b></a></li>
 <li class='active'><a href='#'><b>1&nbsp;-&nbsp;20</b></a></li>
<li style='width:30px'><a href='browse.php?page=1'><b>21&nbsp;-&nbsp;40</b></a></li>
<li style='width:30px'><a href='browse.php?page=2'><b>41&nbsp;-&nbsp;60</b></a></li>
<li class='disabled'><a href='#'>...</a></li>
<li style='width:30px'><a href='browse.php?page=94'><b>1881&nbsp;-&nbsp;1900</b></a></li>
<li style='width:30px'><a href='browse.php?page=95'><b>1901&nbsp;-&nbsp;1920</b></a></li>
<li style='width:30px'><a href='browse.php?page=96'><b>1921&nbsp;-&nbsp;1927</b></a></li> <li><a href="browse.php?page=1"><b>Next&nbsp;&gt;&gt;</b></a></li>
</ul></p>
</center>

<center>
<div style="width:320px;height:50px;overflow:none;">
<div style="position: absolute;z-index: -100;width:320px;">

<h5>
<a href="/give">Support Academic Torrents!</a><br>Disable your ad-blocker!
</h5>
</div>
<script type="text/javascript">
    google_ad_client = "ca-pub-2068283315745938";
    google_ad_slot = "6467570043";
    google_ad_width = 320;
    google_ad_height = 50;
</script>
<!-- AT small banner -->
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
</center>


</td></tr></table>
</center>
<hr>

<style>
#chat-link {
	position: fixed;
	right: 5px;
	bottom: 10px;
	background: #fff;
	border: 1px solid #e0e0e0;
	padding: 5px 15px 10px;
	border-radius: 5px 0 0 5px;
	box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
	color: #979faf
}

.glyphicon-envelope {
	text-align: center;
	line-height: 26px;
	margin-right: 5px;
	position: relative
}
</style>

<script>
document.write('<a href="https://github.com/AcademicTorrents/academictorrents.com-feedback/issues" id="chat-link" target="_blank"><i class="glyphicon glyphicon-envelope"></i>Send Feedback</a>')
</script>

<footer class="footer">
	<center>
		We are a community-maintained distributed repository for datasets and scientific knowledge <br>
		<a href="/about.php">About</a> - <a href="/terms.php">Terms</a>
		<br><br>
	</center>
</footer>
</body>
</html>
