<!DOCTYPE html>
<html>
<head>
	<title>PKBOARD</title>
	<script type="text/javascript">console.log(window.performance.timing);</script>
<style type="text/css">
	*{margin: 0;padding: 0}
body {
  font-family:arial,tahoma,sans-serif;background: #E0E0E0;font-size:14px;
}
.pkbHeader {
  background:#000;
  height: 70px;
  line-height: 70px;
  color:#777;
}
img{width: 70px;}
.pkbLogo {
    background: #111 url("pkboard1.png") no-repeat 50% 50%;
    height: 100%;
    float: left;transition: transform 0.1s ease;
    width: 100px;
    background-size: contain;
}
.pkbSearchBox {
  background:#222;
  width: 900px;
  padding: 0 20px;float: left;
}
#pkbSearchInput {
  background:#333;
  color:#FFF;
  border:1px solid #333;
  padding: 10px;
  width: 70%;
  outline:none;
  transition: all 0.2s ease;
}
#pkbSearchInput:focus {
  box-shadow: 0 0 0 5px #555;
  
}
label {padding: 10px;cursor: pointer;}


a {
    text-decoration: none;
    color: #196EAF;
}

a:hover {
    text-decoration: underline;
}

.pkbLinks a {
    display: inline-block;color:#00A6FF
}

.pkbLinks a:hover {
    background: #333;
}

.pkbLinks {
    background: #222;
    width: auto;
    float: left;
    padding: 0 10px;
    height: 40px;
    margin: 14px;
    border-radius: 3px;
    line-height: 40px;
}
/* basic responsive header */

@media (min-device-width: 300px) and (max-device-width: 1024px) {
.pkbLogo {float:none;}
.pkbSearchBox, #pkbSearchInput {width: 100%}

}

.container {
    margin: 10px auto;
    width: 900px;
    min-height: 100px;max-width: 90%;
    padding: 10px;border-bottom:1px solid #AAA
}


.aheader {
    background: #FFF;
    font-weight: bold;
    padding: 0 10px;
    height: 40px;
    border-radius: 3px 3px 0 0;
    line-height: 40px;
    border-bottom: 1px solid #CCC;
}

.acontent {
    background: #F0F0F0;
    padding: 3px;
    word-wrap: break-word;
    word-break: break-word;
}

.afooter {
    background: #EEE;
    font-size: 11px;
    border-radius: 0 0 3px 3px;
    text-align: right;
    border-top: 1px solid #CCC;
    padding: 0 10px;
    height: 20px;
    line-height: 20px;
    margin-bottom: 14px;
}

span.author {
    font-weight: bold;
}

.footer {
    margin: 10px auto;
    width: 900px;
    border-radius: 3px;
    font-size: 12px;
    padding: 3px;
}

span#poweredby {
    font-weight: bold;
    color: #444;
}.pkbLogo a {
    height: 100%;
    display: block;
}

.pkbLogo:active {transform: scale(0.9,0.9)}
</style>
</head>
<body>

<!-- START HEADER -->
<div class="pkbHeader">
<!-- START LOGO BOX -->
<div class="pkbLogo"><a href="index.php"></a></div>
<!-- END LOGO BOX -->
  <!-- START SEARCH BOX -->
  <div class="pkbSearchBox">
  <label for="pkbSearchInput">Search:</label>
  <input type="text" id="pkbSearchInput" value="" placeholder="Type something..."/>
  </div> 
<!-- END SEARCH BOX -->

<div class="pkbLinks">
	<a href="">Home</a>
	<a href="">Blog</a>
	<a href="">Contact Us</a>
	<a href="">News</a>
</div>

<!-- END HEADER -->
</div>


<div class="container">
<div class="pkbArticle">
	<div class="aheader"><a href="">Hello World !</a></div>
	<div class="acontent">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
	<div class="afooter">by <span class="author">Zain Ali</span> on <span class="awhen">04/04/2016</span></div>
</div>
<div class="pkbArticle">
	<div class="aheader"><a href="">Lorem Ipsum</a></div>
	<div class="acontent">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
	<div class="afooter">by <span class="author">Zain Ali</span> on <span class="awhen">04/04/2016</span></div>
</div>
<div class="pkbArticle">
	<div class="aheader"><a href="">pkboard is growing up !</a></div>
	<div class="acontent">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
	<div class="afooter">by <span class="author">Zain Ali</span> on <span class="awhen">04/04/2016</span></div>
</div>

</div>
<div class="footer">
	[blog] &copy; 2016 - <span id="poweredby">Powered by</span> <span id="pkblink"><a href="https://github.com/zainali99/pkboard">pkboard</a></span>
</div>

</body>
</html>