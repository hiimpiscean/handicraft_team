<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd Number</title>
</head>
<body>


<ul>
    @foreach($odds as $o)
        <li>{{$o}} # {{pow($o, 3)}}</li>
    @endforeach


</ul>

</body>
</html>
