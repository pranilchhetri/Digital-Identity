<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Digital Identity based on Blockchain</title>
  <meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
  <meta name="author" content="Vincent Garreau" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" media="screen" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/w3.css">
  <style>
    h1 {
  
  text-align: center;
  
}


* { color:#ff0000; text-decoration: none;}
  </style>
  <script>
    
var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
  </script>
</head>
<body>

<!-- count particles 
<div class="count-particles">
  <span class="js-count-particles">--</span> particles
</div>
-->
<!-- particles.js container -->

<div id="particles-js" style="position: absolute;z-index: -1;">
  
 

  <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
<style type="text/css">
.fc {
  font-family: Roboto Condensed, sans-serif;
  text-align: center;
  text-transform: uppercase;
  color: #fff;
  font-weight: 60;
  
}

.fc-r2 {
  font-family: Roboto, sans-serif;
  font-size: 2.7em;
  font-weight: 100;
  line-height: 1em;
  letter-spacing: 0.64em;
  color: #fff;
  display: inline-block;
  margin-top: -0.7em;
  padding: 0.65em 0 0.65em 0.7em;
}
</style>

 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
<style>
.w3-lobster {
    font-family: "Lobster", serif;
}
</style>

 <div style="position: absolute;z-index: -1; margin: auto;width: 100%; text-align: center; padding-top: 250px;" align="center">
  <h1 class="fc-r2" style="padding-top: 20px;">Digital Identity</h1><h1 class="fc">Based on Blockchain</h1>
  
   
 </div>
 <div style=" width: 90%;
  margin: 0 auto;  position: absolute;
    z-index: 2; padding-top: 430px; padding-left: 600px;">
  <button class="btn success" >
   <a href="admin/login.php"> Get started</a>
  </button>
</div>
 <style>
   .btn {
  border: 1px solid white;
  border-radius: 50px;
  background-color: transparent;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
   position: absolute;
    z-index: 1;
}

/* Green */
.success {
  border-color: white;
  color: white;
}

.success:hover{
  background-color:white;
    color:#0d3370;
}
 </style>

<!--
<h1>
  <a href=""  class="typewrite w3-hide-small" data-period="2000" data-type='[ "Hi, Im Pranil", "I am Creative.", "I Love Design.", "I Love to Develop." ]'>
    <span class="wrap"></span>
  </a>
</h1>
-->

  </div>
    </div><!--
  <style>
img:hover {
  animation: shake 0.5s;
  animation-iteration-count: infinite;
}

@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}
</style>
  -->

<!-- scripts -->
<script src="particles.js"></script>
<script src="js/app.js"></script>

<!-- stats.js 
<script src="js/lib/stats.js"></script>
-->
<script>
  var count_particles, stats, update;
  stats = new Stats;
  stats.setMode(0);
  stats.domElement.style.position = 'absolute';
  stats.domElement.style.left = '0px';
  stats.domElement.style.top = '0px';
  document.body.appendChild(stats.domElement);
  count_particles = document.querySelector('.js-count-particles');
  update = function() {
    stats.begin();
    stats.end();
    if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
      count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
    }
    requestAnimationFrame(update);
  };
  requestAnimationFrame(update);
</script>

<style>
.div1{
  padding-top: 800px; padding-bottom: 350px; 
}
  @media only screen and (max-width: 768px) {
    /* For mobile phones: */
    .div1 {
       padding-top: 600px;padding-bottom:  200px;
    }
}

.div2{
  padding-top: 110px; padding-bottom: 100px; 
}

  @media only screen and (max-width: 768px) {
    /* For mobile phones: */
    .div2 {
       padding-top: 80px;padding-bottom:  80px;
    }
}
}
.developer{
  background-image: url("me2.jpg");
 
  background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  width: 100%;
}

</style>
  

<style>
  .footer{
    padding-top: 50px;
    padding-bottom: 20px;
    margin: auto;
    width: 100%;
    text-align: center;
  }
  .footicon{
    width: 30px;
  }


</style>
<!--
<div class="container-fluid div3" style="background-color: grey;">
    <div class="footer">
        <p class="w3-xlarge" style=" color: black; font-family: "Comic Sans MS", cursive, sans-serif;"> I  <img src="img/love.png" style="width: 70px;"> to make 
   </p><p class="w3-lobster w3-xxlarge" style="color: white;"><strong>New Friends
</strong></p>
</div>
    
<div class="container" style="padding-top: 20px;">
  <a href="https://www.facebook.com/pranilchhetri123" ><img src="img/icon/facebook.png" class="footicon" ></a>
  <a href="https://www.linkedin.com/in/pranil-g-c-7926a3149/"><img src="img/icon/linkedin.png" class="footicon"></a>
  <a href="https://twitter.com/pranil_chhetri"><img src="img/icon/twitter.png" class="footicon"></a>
  <a href="https://www.instagram.com/pranil_kshetri/"><img src="img/icon/insta.png" class="footicon"></a>
  
  <a href="https://www.youtube.com/channel/UC8Q3hTQL0I9eEpEu9JgkK2g?view_as=subscriber"><img src="img/icon/youtube.png" class="footicon"></a>
  
</div>

  </div>
  <div>
<p style="padding-top: 10px; font-size: 12px; color: black;margin: auto;
    width: 100%; text-align: center;">copyright&copy 2017</p>
</div>
-->
<!--#0d3370 primary clor-->
</body>
</html>