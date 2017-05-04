
<!DOCTYPE html>
<html>
<head><title>KCC</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
    box-sizing: border-box;
}
.row::after {
    content: "";
    clear: both;
    display: table;
}
[class*="col-"] {
    float: left;
    padding: 10px;
}

html, body, #header {
    margin: 0 !important;
    padding: 0 !important;
    font-family: "Lucida Sans", sans-serif;
    font-size: 24px;
    color :#0000ff;
}
body{   
    margin:0;    padding: 0;
    background:#fff;
    }

.header {
    background-color: #fff;
    

    color: #777777;
    padding: 15px;
}
.menu ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    color : #fff;
     text-decoration: none;
}

content{
    padding: 50px;
    margin-bottom: 20px;
    background-color: #0000ff;
    color: #fff;
    font-weight: bold;
     text-decoration: none;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.menu li:hover {
    background-color: #425c9f;
    color: #f0f0f0;
     text-decoration: none;
}
a{
	color: #fff;
	font-weight: bold;
text-decoration: none;	
}
a.link{
display:inline-block;
font-family:sans-serif;
font-size: 24px;
padding: 3px 3px 3px 3px;
background-color:#fff;
color:#777;
text-decoration: none;
box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

a.link:hover {
font-family:sans-serif;
 color:#8eb1e1;
 text-decoration: none;
}
.aside {
    background-color: #fff;
    padding: 15px;
    color: #00f;
    text-align: center;
    font-size: 14px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.aleft {
    background-color: #fff;
    padding: 15px;
    color: #ffffff;
    text-align: center;
    font-size: 14px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.footer {
    background-color: #fff;
    color: #0000ff;
    text-align: center;
    font-size: 12px;
    padding: 7px;
}
/* For mobile phones: */
[class*="col-"] {
    width: 100%;
}

@media only screen and (min-width: 600px) {
    /* For tablets: */
    .col-m-1 {width: 8.33%;}
    .col-m-2 {width: 16.66%;}
    .col-m-3 {width: 25%;}
    .col-m-4 {width: 33.33%;}
    .col-m-5 {width: 41.66%;}
    .col-m-6 {width: 50%;}
    .col-m-7 {width: 58.33%;}
    .col-m-8 {width: 66.66%;}
    .col-m-9 {width: 75%;}
    .col-m-10 {width: 83.33%;}
    .col-m-11 {width: 91.66%;}
    .col-m-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
    /* For desktop: */
    .col-1 {width: 8.33%;}
    .col-2 {width: 16.66%;}
    .col-3 {width: 25%;}
    .col-4 {width: 33.33%;}
    .col-5 {width: 41.66%;}
    .col-6 {width: 50%;}
    .col-7 {width: 58.33%;}
    .col-8 {width: 66.66%;}
    .col-9 {width: 75%;}
    .col-10 {width: 83.33%;}
    .col-11 {width: 91.66%;}
    .col-12 {width: 100%;}
}
</style>
</head>

<body>

 <header>

<script>
var random_images_array = ["img/K.png", "img/I.png", "img/I.png"];
function getRandomImage(imgAr, path) {
    path = path || 'images/'; // default path here
    var num = Math.floor( Math.random() * imgAr.length );
    var img = imgAr[ num ];
    var imgStr = '<img src="' + path + img + '" alt = "">';
    document.write(imgStr); document.close();
}


</script>
<img src = "img/K.png" <?php $h=rand(100, 200); echo $h; height=$h;?>>
<img src = "img/I.png">
<img src = "img/D.png">
<img src = "img/S.png">
<img src = "img/C.png">
<img src = "img/A.png">
<img src = "img/N.png">
<img src = "img/C.png">
<img src = "img/O.png">
<img src = "img/D.png">
<img src = "img/E.png">

</header>

<div class="row">
<div class="col-4 col-m-4 ">
	 <div class="aside">
  Game Design <br />
  </div>
</div>

<div class="col-4 col-m-4">
  	 <div class="aside">
  Cyber Security<br />
<pre>
*****************************************
* Set up a Raspberry Pi.                *
* Boot a Raspberry Pi.                  *
* Start XFCE in Debian Linux.           *
* * $startx                             *
* Type some Linux commands.             *
* Type $ipconfig                        *
* * *  Do not type the $                *
* Navigate to the Desktop.              *
* *   $cd /home/pi/Desktop              *
* * *  Do not type the $                *
* Run some Python code.                 *
* * python helloworld.py                *
* Start Minecraft Pi from the Desktop.  *
* Run some python code to create blocks.*
* Change the code.                      *
* Copy your *.py file and rename it.    *
* Change some more code.                *
* Change your Minecraft Pi name.        *
* *  StevePi is default.                *
* * * The name must be 7 characters.    *
* * * * Have fun! Stay out of my world! *
*****************************************
  </pre>
  </div>


</div>

<div class="col-4 col-m-4">
  <div class="aside">
    <img src = "img/code.png" height ="200" ><br />
    <img src = "img/mario.png" height ="200"  > 
  </div>
</div>
</div>
<div class="footer">
  <p>Tri-Tech Skills Center - We <img src = "img/heart.png"> Computer Science	</p>
</div>

</body>
</html>
