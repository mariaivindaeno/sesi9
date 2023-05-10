<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 3</title>
</head>
<body>
      <h3>hitung luas segitiga</h3>
    <form>
        <div>
            Nilai alas
            <input type="number" id="txALAS">
        </div>
        <div>
            Nilai tinggi
            <input type="number" id="txTINGGI">
        </div>
        <div>
            Nilai luas
            <input type="number" id="txLUAS" disabled>
        </div>
        <div>
            <button type="button" onclick="hLUAS()"> Hitung luas</button>
        </div>
    </form>
    <div id="hsl"></div>
           
        <script>
            function hLUAS(){
                let a = document.getElementById("txALAS").value;
                let t = document.getElementById("txTINGGI").value;
                let l = a*t/2;

                document.getElementById("txLUAS").value = L;
            }
        </script>
</body>
</html>