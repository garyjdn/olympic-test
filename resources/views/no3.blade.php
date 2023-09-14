<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <style type="text/css">
        .classku {
            color: orange;
        }
    </style>
</head>
<body>
    <p>
        Selamat datang di <b class="classku" id="namaperusahaan">Olympic Group</b>
    </p>

    <ul>
        <li id="txt_1">Nama : Jhon Doe</li>
        <li id="txt_2">Umur : 25 Tahun</li>
    </ul>

    <script type="text/javascript">
        document.getElementById('namaperusahaan').style.color = 'blue';
        document.getElementById('txt_1').innerHTML = "Nama : Calvine Jardinia Tanuwidjaja"; 
        document.getElementById('txt_2').innerHTML = "Umur : 28 Tahun"; 
    </script>
</body>
</html>