<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style type="text/css">
    .credits {
  position: absolute;
  top: 20px;
  width: 100%;
  text-align: center;  
}

.credits h2 {
  color: #fff;
  font-size: 18px;
  margin-bottom: 4px;
}

.credits p {
  font-size: 12px;
  color: rgba(255,255,255,0.7);
}

.credits a {
  color: rgba(255,255,255,0.7);
  text-decoration: underline;
}

.credits a:hover {
  color: #FFF;
  text-decoration: none;
}

.sep {
  padding: 0 8px;
}

.overlay-loader {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1000;
}

.overlay-loader .loader-background {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-color: #2C4762;
  -webkit-transition: background-color .2s 0s linear,right .2s .3s ease-out;
  -moz-transition: background-color .2s 0s linear,right .2s .3s ease-out;
  -ms-transition: background-color .2s 0s linear,right .2s .3s ease-out;
  -o-transition: background-color .2s 0s linear,right .2s .3s ease-out;
  transition: background-color .2s 0s linear,right .2s .3s ease-out;
}

.overlay-loader .loader-background.color-flip {
  -webkit-animation: color-flip 6.5s .6s infinite linear;
  -moz-animation: color-flip 6.5s .6s infinite linear;
  -ms-animation: color-flip 6.5s .6s infinite linear;
  -o-animation: color-flip 6.5s .6s infinite linear;
  animation: color-flip 6.5s .6s infinite linear;
}

@-webkit-keyframes color-flip {
  0% { background-color: #2c4762 }
  18% { background-color: #2c4762 }
  20% { background-color: #a77dc2 }
  38% { background-color: #a77dc2 }
  40% { background-color: #4aa8d8 }
  58% { background-color: #4aa8d8 }
  60% { background-color: #56bc8a }
  78% { background-color: #56bc8a }
  80% { background-color: #d95e40 }
  98% { background-color: #d95e40 }
  100% { background-color: #2c4762 }
}

@-moz-keyframes color-flip {
  0% { background-color: #2c4762 }
  18% { background-color: #2c4762 }
  20% { background-color: #a77dc2 }
  38% { background-color: #a77dc2 }
  40% { background-color: #4aa8d8 }
  58% { background-color: #4aa8d8 }
  60% { background-color: #56bc8a }
  78% { background-color: #56bc8a }
  80% { background-color: #d95e40 }
  98% { background-color: #d95e40 }
  100% { background-color: #2c4762 }
}

@-o-keyframes color-flip {
  0% { background-color: #2c4762 }
  18% { background-color: #2c4762 }
  20% { background-color: #a77dc2 }
  38% { background-color: #a77dc2 }
  40% { background-color: #4aa8d8 }
  58% { background-color: #4aa8d8 }
  60% { background-color: #56bc8a }
  78% { background-color: #56bc8a }
  80% { background-color: #d95e40 }
  98% { background-color: #d95e40 }
  100% { background-color: #2c4762 }
}

@keyframes color-flip {
  0% { background-color: #2c4762 }
  18% { background-color: #2c4762 }
  20% { background-color: #a77dc2 }
  38% { background-color: #a77dc2 }
  40% { background-color: #4aa8d8 }
  58% { background-color: #4aa8d8 }
  60% { background-color: #56bc8a }
  78% { background-color: #56bc8a }
  80% { background-color: #d95e40 }
  98% { background-color: #d95e40 }
  100% { background-color: #2c4762 }
}

.overlay-loader .loader-icon {
  position: absolute;
  top: 50%;
  left: 50%;
  margin: -48px 0 0 -48px;
  font-size: 96px;
  color: #FFF;
}

.button {
  text-decoration: none;
  font-weight: bold;
  text-align: center;
  -webkit-border-radius: 4px;
  border-radius: 4px;    
}

.button:hover {
  text-decoration: none;
}

.button.again {
  position: absolute;
  top: 50%;
  left: 50%;  
  margin-left: -70px;
  margin-top: -21px;
  font-size: 16px;    
  width: 140px;
  padding: 10px 0;
  display: block;
  background-color: #FFF;
}

.button.switch {
  position: relative;
  display: inline-block;
  font-size: 12px;
  padding: 8px;
  background-color: rgba(0,0,0,0.1);
  color: rgba(255,255,255,0.7);
  margin-bottom: 4px;  
}

.button.switch.active {
  background-color: rgba(255,255,255,0.4);
  color: #fff;
}

.switch-icon {
  width: 24px;
  height: 24px;
}

.switches {
  position: absolute;
  top: 50%;
  width: 100%;
  text-align: center;
  margin-top: 80px;
}

.overlay-loader .loader-icon.spinning-cog {
  -webkit-animation: spinning-cog 1.3s infinite ease;
  -moz-animation: spinning-cog 1.3s infinite ease;
  -ms-animation: spinning-cog 1.3s infinite ease;
  -o-animation: spinning-cog 1.3s infinite ease;
  animation: spinning-cog 1.3s infinite ease;
}

@-webkit-keyframes spinning-cog {
  0% { -webkit-transform: rotate(0deg) }
  20% { -webkit-transform: rotate(-45deg) }
  100% { -webkit-transform: rotate(360deg) }
}

@-moz-keyframes spinning-cog {
  0% { -moz-transform: rotate(0deg) }
  20% { -moz-transform: rotate(-45deg) }
  100% { -moz-transform: rotate(360deg) }
}

@-o-keyframes spinning-cog {
  0% { -o-transform: rotate(0deg) }
  20% { -o-transform: rotate(-45deg) }
  100% { -o-transform: rotate(360deg) }
}

@keyframes spinning-cog {
  0% { transform: rotate(0deg) }
  20% { transform: rotate(-45deg) }
  100% { transform: rotate(360deg) }
}

@-webkit-keyframes shrinking-cog {
  0% { -webkit-transform: scale(1) }
  20% { -webkit-transform: scale(1.2) }
  100% { -webkit-transform: scale(0) }
}

@-moz-keyframes shrinking-cog {
  0% { -moz-transform: scale(1) }
  20% { -moz-transform: scale(1.2) }
  100% { -moz-transform: scale(0) }
}

@-o-keyframes shrinking-cog {
  0% { -o-transform: scale(1) }
  20% { -o-transform: scale(1.2) }
  100% { -o-transform: scale(0) }
}

@keyframes shrinking-cog {
  0% { transform: scale(1) }
  20% { transform: scale(1.2) }
  100% { transform: scale(0) }
}

.overlay-loader .loader-icon.shrinking-cog {
  -webkit-animation: shrinking-cog .3s 1 ease forwards;
  -moz-animation: shrinking-cog .3s 1 ease forwards;
  -ms-animation: shrinking-cog .3s 1 ease forwards;
  -o-animation: shrinking-cog .3s 1 ease forwards;
  animation: shrinking-cog .3s 1 ease forwards;
}
  </style>
</head>
<body>
   <?php
  echo "<meta http-equiv=REFRESH CONTENT=1.5;url=change.php>"
  ?>
 
  <div id="loader" class="overlay-loader">
  <div class="loader-background color-flip"></div>
  <img class="loader-icon spinning-cog hidden" src="https://pasqualevitiello.github.io/Tumblr-Style-Cog-Spinners/cogs/cog05.svg" data-cog="cog05">
 
   </div>
 
</div>
</body>
</html>