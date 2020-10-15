<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trophée 2</title>
    
    <script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script>
    <script src="https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>
<body style='margin : 0px; overflow: hidden;'>
    <a href="trophees.php">
        <div class="back" style='z-index: 100; position: absolute; top: 50px; left: 50px;'>
            <i class="fa fa-arrow-left" style="font-size: 5em; color: #fff;"></i>
        </div>
    </a>
	<a-scene embedded arjs='sourceType: webcam;'>
        <a-marker preset="custom" type='pattern' url="assets/arjs/pattern/pattern-Eduka.patt">
            <a-entity position="0 0 0" obj-model="obj: url(assets/arjs/trophees/1.obj); mtl: url(assets/arjs/trophees/1.mtl)"></a-entity>
        </a-marker>
        <a-entity camera></a-entity>
	</a-scene>
</body>
</html>