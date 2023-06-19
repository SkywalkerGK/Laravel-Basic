<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>
    <?php 
    $user = "Bass";
    $arr = array('home','member','about');
    
    ?>

    <h1>ยินดีต้อนรับสมาชิกทุกคน {{$user}}</h1>

    @if($user == "Bass")
        <h1>ผู้ใช้เป็นAdmin</h1>
    
    @else
        <h1>ผู้ใช้ไม่ได้เป็น Admin</h1>
    @endif

    @foreach($arr as $menu)
        <a href="">{{$menu}}</a>

    @endforeach

    @for($i=1;$i<=5;$i++)
        <li>{{$i}}</li>
    @endfor

</body>
</html>