<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <!--
    Copyright 2012 Amazon.com, Inc. or its affiliates. All Rights Reserved.

    Licensed under the Apache License, Version 2.0 (the "License"). You may not use this file except in compliance with the License. A copy of the License is located at

        http://aws.Amazon/apache2.0/

    or in the "license" file accompanying this file. This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.
  -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Welcome</title>
  <style>
  body {
    color: #ffffff;
    background-color: #FFFFFF;
    font-family: Arial, sans-serif;
    font-size:14px;
    -moz-transition-property: text-shadow;
    -moz-transition-duration: 4s;
    -webkit-transition-property: text-shadow;
    -webkit-transition-duration: 4s;
    text-shadow: none;
  }
  body.blurry {
    -moz-transition-property: text-shadow;
    -moz-transition-duration: 4s;
    -webkit-transition-property: text-shadow;
    -webkit-transition-duration: 4s;
    text-shadow: #fff 0px 0px 25px;
  }
  a {
    color: #0188cc;
  }
  .textColumn, .linksColumn {
    padding: 2em;
  }
  .textColumn {
    position: absolute;
    top: 0px;
    right: 50%;
    bottom: 0px;
    left: 0px;

    text-align: right;
    padding-top: 11em;
    background-color: #1BA86D;
    background-image: -moz-radial-gradient(left top, circle, #6AF9BD 0%, #00B386 60%);
    background-image: -webkit-gradient(radial, 0 0, 1, 0 0, 500, from(#6AF9BD), to(#00B386));
  }
  .textColumn p {
    width: 75%;
    float:right;
  }
  .linksColumn {
    position: absolute;
    top:5em;
    right: 0px;
    bottom: 0px;
    left: 50%;
    <!--background-color: #E0E0E0;-->
    background-color: #FFFFFF;
  }

  h1 {
    font-size: 500%;
    font-weight: normal;
    margin-bottom: 0em;
  }
  h2 {
	font-family: "Courier New", Courier, monospace;
    font-size: 200%;
    font-weight: heavy;
    margin-bottom: 0em;
	margin-right: 1em;
	color: #000000;
  }
  ul {
    padding-left: 1em;
    margin: 0px;
  }
  li {
    margin: 1em 0em;
  }
    text {
	font-family: "Courier New", Courier, monospace;    
	font-size: 100%;
    font-weight: normal;
    margin-bottom: 0em;
    padding-left: 5em;
    margin-left: 5em;
	color: #eeeeee;
  }
  </style>
</head>
<body id="sample">
  <div class="textColumn">
    <h1>Brewing Calculator<br>Pre-Alpha</h1>
    <h2>Joose</h2><br>
	<text>-The Brains</text>
    <h2>Lister</h2><br>
	<text>-The Talent</text>
    <h2>Wes</h2><br>
	<text>-The Brawn</text>
  </div>
  
    <div class="linksColumn"> 

	<img src="LOGO.jpg" >
	

	<form action="serviceCall.php">
		<input type="submit" class="button" name="callService" value="test" />
	</form>

	
	
  </div> 
</body>
</html>

