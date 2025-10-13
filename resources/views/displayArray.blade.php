<h1>Displaying Array ⬇️</h1>

<div>
    @foreach($users as $user)
    <p>{{$user}}</p>
    @endforeach
</div>


<!-- <h2>{{$name}}</h2> -->
<!-- <h2>{{$users[1]}}</h2> -->
<!-- <p>Your lucky number is: {{ rand() }}</p> -->
@if($name=='zack')
<h2>this is {{$name}}</h2>
@elseif($name=='peter')
<h2>this is sam</h2>
@else
<h2>other user</h2>
@endif



<div>
@for($i=0; $i<= 10 ; $i++ )
<h3>{{$i}}</h3>
@endfor
</div>