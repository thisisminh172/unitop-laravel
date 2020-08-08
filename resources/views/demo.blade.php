{{-- @extends('layouts.app')

@section('content')
@for($i = 2 ; $i <=10;$i++)
 <p>Giá trị của i hiện tại: {{$i}}</p>
@endfor
@endsection --}}


{{-- @foreach ($users as $user)
    <p>{{$user['name']}}</p>
@endforeach --}}
@include('inc.comment',['title'=>'Comment bài viết']);
@php

    foreach($users as $user){
        echo $user['name'] . "<br>-";
    }
@endphp