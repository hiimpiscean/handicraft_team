@php
  $title = 'Blade Template Engine';
  $min = 2; $max = 50;
@endphp
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{$title}}</title>
</head>
<body>


<ul>
  @for ($i = $min; $i < $max; $i++)
    @if ($i % 2 == 1)
      <li>{{$i}} # {{pow($i, 3)}}</li>
    @endif
  @endfor
</ul>

</body>
</html>
