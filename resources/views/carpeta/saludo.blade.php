<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> HOLA <?php echo $nombre .' '. $apellidos ?></h2>
    <h5> H.O.L.A {{ $nombre .' '. $apellidos}}</h5>
    @if ($nombre == 'Francisco')
    {{'ERES PROFESOR'}}
    @else
    {{'NO ERES PROFESOR'}}
    @endif

</body>
</html>