@extends('app')

@section ('content')
<div>
{!! link_to_route('posts','bosh') !!} &nbsp; &nbsp;&nbsp; {!! link_to_route('posts.nbosh','nbosh') !!}&nbsp; &nbsp;&nbsp; {!! link_to_route('shop.create','new') !!}
</div>

@foreach($categories as $category)
<h1>{{$category->title}}</h1>

<h2>{{$category->brand}}</h2>

<h2>{{$category->price}}</h2>
@endforeach
@stop

<!--Задание 1 -->
<?php
$string="hello world. trim function.  а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый.а ларчик просто открывался.а там хоть трава не расти.";
 $string = rtrim($string, '.');
$stringByPoint=explode(".",$string);
foreach ($stringByPoint as $point)
{
if (!function_exists('mb_ucfirst') && extension_loaded('mbstring'))
{ function mb_ucfirst($point, $encoding='UTF-8')
     {
         $point = mb_ereg_replace('^[\ ]+', '', $point);
         $point = mb_strtoupper(mb_substr($point, 0, 1, $encoding), $encoding).
                mb_substr($point, 1, mb_strlen($point), $encoding);
         return $point;
     }
}$prob= mb_ucfirst($point) ;
echo "$prob . &nbsp";
}

?>

'<br>'

<?php
$string="hello world. trim function.  а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый.а ларчик просто открывался.а там хоть трава не расти.";
 $string = rtrim($string, '.');
$stringByPoint=explode(".",$string);
krsort($stringByPoint);
foreach ($stringByPoint as $point)
{
if (!function_exists('mb_ucfirst') && extension_loaded('mbstring'))
{ function mb_ucfirst($point, $encoding='UTF-8')
     {
         $point = mb_ereg_replace('^[\ ]+', '', $point);
         $point = mb_strtoupper(mb_substr($point, 0, 1, $encoding), $encoding).
                mb_substr($point, 1, mb_strlen($point), $encoding);
         return $point;
     }
}$prob= mb_ucfirst($point) ;
echo "$prob . &nbsp";
}

?>

'<br>'

<?php
$string="яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня";
$stringByPoint=explode(" ",$string);
foreach ($stringByPoint as $fruts) {
$i=0;
$r=0;
$w=0;
$q=0;
if ($fruts='яблоко') {$i=$i+1;}
elseif ($fruts="черешня") {$r=$r+1;}
elseif ($fruts=="груша") {$w=$w+1;}
elseif ($fruts=="вишня") {$q=$q+1;}

echo "$i";
'<br>';
echo "$r";
'<br>';
echo "$w";
'<br>';
echo "$q";
'<br>';
}
?>
