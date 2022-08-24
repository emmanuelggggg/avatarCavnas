<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My avatar</title>
</head>
<body>

    <canvas id="myCanvas" width="1000px" height="600px">

    </canvas>
    <script>
        cv  =document.getElementById('myCanvas');
        ctx = cv.getContext('2d');
        ctx1 =cv.getContext('2d');

        ctx1.fillStyle ="#876445";
        ctx1.fillRect(10,100,205,150);
        // gorro
        ctx.beginPath();
        ctx.arc(100, 25, 20, 0, 2 * Math.PI);
        ctx.fillStyle = "#319DA0";
        ctx.fill();
        ctx.stroke();        
        // cabeza
        ctx.beginPath();
        ctx.fillStyle = "#FFD39A";
        ctx.arc(100, 35, 20, 0, 2 * Math.PI);
        ctx.stroke();
        ctx.fill();
        // ojos 
        ctx.beginPath();
        ctx.fillStyle ='black';
        ctx.arc(91, 32, 3, 0, 2 * Math.PI);
        ctx.fill();

        ctx.beginPath();
        ctx.fillStyle ='black';
        ctx.arc(109, 32, 3, 0, 2 * Math.PI);
        ctx.fill();
        // barba y bigote
        ctx.beginPath();
        ctx.fillStyle = "black";
        ctx.arc(100, 39, 20, 0, Math.PI, false);
        ctx.fill();
      
        // boca
        ctx.beginPath();
        ctx.fillStyle = "#FFD39A";
        ctx.arc(100, 41, 10, 0, Math.PI, false);
        ctx.fill();
        ctx.stroke();
        
        // cuello
        ctx.fillStyle ="#FFD39A";
        ctx.fillRect(90,58,20,5);
        // cuerpo
        ctx.fillStyle ="#eee";
        ctx.fillRect(74,62,52,40);

        // brazos
        ctx.moveTo(74,62);
        ctx.fillStyle ="rgb(57, 91, 100)";
        ctx.lineTo(30,78);
        ctx.lineTo(80,110);
        ctx.lineTo(80,100);
        ctx.lineTo(67,90);
        ctx.lineTo(47,79);
        ctx.lineTo(74,72);
        ctx.stroke();
        ctx.fill();

        ctx.moveTo(125,62);
        ctx.fillStyle ="rgb(57, 91, 100)";
        ctx.lineTo(140,10);
        ctx.lineTo(150,10);
        ctx.lineTo(126,82);
        ctx.stroke();
        ctx.fill();
        // mano derecha
        ctx.beginPath();
        ctx.arc(84, 103, 7, 0, 2 * Math.PI);
        ctx.fillStyle = "#FFD39A";
        ctx.stroke();
        ctx.fill();
        //mano izquierda
        ctx.beginPath();
        ctx.arc(144, 6, 7, 0, 2 * Math.PI);
        ctx.fillStyle = "#FFD39A";
        ctx.stroke();
        ctx.fill();
        // 
        ctx.beginPath();
        ctx.arc(100, 83, 5, 0, 2 * Math.PI);
        ctx.fillStyle = "#A5C9CA";
        ctx.stroke();
        ctx.fill();

        ctx.beginPath();
        ctx.arc(105, 72, 5, 0, 0.5 * Math.PI, 0* Math.PI);
        ctx.fillStyle = "#A5C9CA";
        ctx.stroke();
        ctx.fill();
    
    </script>
</body>
</html>