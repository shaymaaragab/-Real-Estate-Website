@extends('layouts.app')
@section('title')
كل العقارات
@endsection
@section('header')
{!!Html::style('admin.cus.buall.css') !!}
@endsection
@section('content')

  <div class="container">
    <div class="row profile">

  <div class="col-lg-9">

        <div class="profile-content">
            @include('wesite.bu.sharefile',['bu'=>$buall])
        </div>
        <div class="text-center">
          @if(!isset($search))
          {{$buall->appends(Request::except('page'))->render()}}
          @endif
   </div>
 </div>

 @include('wesite.bu.page')
</div>
</div>
<br>
<br>

@endsection
