<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		body, html {
  position: relative;
  margin-top:250px;
  background: #f76666;
}
*, *:before, *:after {position: absolute;}
.screen {
  width: 530px; height: 145px;
  top: 50%; left: 50%;
  transform: translate(-50%, -50%);
}
  .bike-screen {
    bottom: 0px; left: 0;
    width: 100%; height: 130%;
    overflow: hidden;
  }
  .bike {
    bottom: 4px; left: 50%;
    width: 80px; height: 139px;
    margin-left: -40px;
    animation:
      bike-translate 7s ease-in-out infinite,
      bike-shake     .5s linear infinite .75s;
    transform-origin: 50% 100%;
  }
    .left-handle,
    .right-handle {
      top: 15px;
      width: 26px; height: 4px;
      border-radius: 1px;
      background: #041830;
    }
    .left-handle {
      left: 0;
      transform: rotate(-20deg);
    }
    .right-handle {
      right: 0;
      transform: rotate(20deg);
    }
    .headlight {
      width: 26px; height: 26px;
      top: 0; left: 50%;
      margin-left: -13px;
      border-radius: 50%;
      box-shadow: inset 0 0 0 4px #041830;
    }
      .headlight:before {
        content: '';
        width: 10px; height: 10px;
        top: 50%; left: 50%;
        margin: -5px 0 0 -5px;
        border-radius: 50%;
        background: #041830;
      }
      .headlight:after {
        content: '';
        width: 100%; height: 3px;
        bottom: -2px; left: 0;
        border-radius: 1px;
        background: #041830;
      }
    .left-suspension {
      width: 11px; height: 26px;
      top: 32px; left: 21px;
      background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAECAYAAAC3OK7NAAAAH0lEQVQIW2NkAAIWCYP/IBofYCSkAGYI8QqJsRZkKwCpfwUxsQUgTAAAAABJRU5ErkJggg==) repeat-y;
      background-size: 100% auto;
      background-position-y: 1px;
    }
      .left-suspension:before {
        content: '';
        width: 8px; height: 30px;
        bottom: 95%; left: 2px;
        border-radius: 1px;
        background: #fff;
        box-shadow: inset 0 0 1px 3px #041830;
      }
      .left-suspension:after {
        content: '';
        width: 2px; height: 2px;
        top: 100%; left: 5px;
        box-shadow:
          -2px 0 1px #041830,
          2px 0 1px #041830;
      }
    .left-support {
      width: 11px; height: 48px;
      top: 60px; left: 21px;
      border-radius: 1px;
      background: #fff;
      box-shadow: inset 0 0 1px 3px #041830;
    }
    .right-suspension {
      width: 11px; height: 26px;
      top: 32px; right: 21px;
      background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAECAYAAAC3OK7NAAAAH0lEQVQIW2NkAAIWCYP/IBofYCSkAGYI8QqJsRZkKwCpfwUxsQUgTAAAAABJRU5ErkJggg==) repeat-y;
      background-size: 100% auto;
      background-position-y: 1px;
    }
      .right-suspension:before {
        content: '';
        width: 8px; height: 30px;
        bottom: 95%; right: 2px;
        border-radius: 1px;
        background: #fff;
        box-shadow: inset 0 0 1px 3px #041830;
      }
      .right-suspension:after {
        content: '';
        width: 2px; height: 2px;
        top: 100%; right: 4px;
        box-shadow:
          -2px 0 1px #041830,
          2px 0 1px #041830;
      }
    .right-support {
      width: 11px; height: 48px;
      top: 60px; right: 21px;
      border-radius: 1px;
      background: #fff;
      box-shadow: inset 0 0 1px 3px #041830;
    }
    .body {
      top: 29px; left: 30px;
      border-top: 28px solid #041830;
      border-right: 10px solid #041830;
      border-left: 10px solid transparent;
      border-bottom: 28px solid transparent;
    }
    .wheel {
      overflow: hidden;
      width: 20px; height: 86px;
      bottom: 0; left: 30px;
      border-radius: 20px;
      box-shadow: inset 0 0 1px 3px #041830;
      background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAAECAYAAACp8Z5+AAAASklEQVQIW2M8snrN/y/MLAwfHjxgYPnymYHx6LLl/7+zsjL8eP2agQkksGbS5P/iAgIMXED8g5MTKNDV9l+Cg4dBSE2d4TsbOwMALuAaA/XaXuUAAAAASUVORK5CYII=) repeat;
      background-size: 4px 4px;
    }
      .wheel:after {
        content: '';
        top: 0; left: 0;
        width: 100%; height: 100%;
        background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAJklEQVQYV2NkgABjKI2LOstIhCKwZtooJNqNBPwBkQa5kSgwgAoBGPoCpNTsO2QAAAAASUVORK5CYII=) repeat;
        animation: wheel 1s linear infinite;
      }
  .road {
    bottom: 0; left: 50%;
    width: 100%; height: 6px;
    transform: translateX(-50%);
    border-radius: 6px;
    background: #1c1c38;
    animation: road 7s ease-in-out;
  }

@keyframes wheel {
  0% {background-position: 0 0}
  100% {background-position: 0 100%}
}
@keyframes road {
  0% {width: 0%;}
  6% {width: 120%;}
  8% {width: 100%;}
  100% {width: 100%;}
}
@keyframes bike-translate {
  0% {transform: translateY(100%)}
  6% {transform: translateY(-20%)}
  8% {transform: translateY(0)}
  100% {transform: translateY(0)}
}
@keyframes bike-shake {
  0% {transform: rotate(0)}
  25% {transform: rotate(-2deg)}
  50% {transform: rotate(0)}
  75% {transform: rotate(2deg)}
  100% {transform: rotate(0)}
}

h1 {
  bottom: 20px; right: 20px;
  margin: 0;
  font-size: 20px;
  font-family: 'Oswald';
  color: #fff;
  text-align: right;
}
	</style>
</head>
<body>
	 <?php
  echo "<meta http-equiv=REFRESH CONTENT=1.5;url=index.php>"
  ?>
	<div class="screen">
  <div class="bike-screen">
    <div class="bike">
      <div class="left-handle"></div>
      <div class="right-handle"></div>
      <div class="headlight"></div>
      <div class="left-suspension"></div>
      <div class="left-support"></div>
      <div class="right-suspension"></div>
      <div class="right-support"></div>
      <div class="body"></div>
      <div class="wheel"></div>
    </div>
  </div>
  <div class="road"></div>
</div>
</body>
</html>