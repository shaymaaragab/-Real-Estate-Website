@extends('admin.layouts.layout')
@section('title')
اضف عضو
@endsection


@section('header')

@endsection

@section('content')
<section class="content-header">
      <h1>
    اضف عضو
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminplane')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/adminplane/users')}}">النحكم ف الاعضاء </a></li>
         <li class="active"><a href="{{url('/adminplane/users/create')}}">اضف عضو </a></li>
      </ol>
    </section>
    <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">اضف عضو جديد</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
<form class="form-horizontal" method="POST" action="{{ url('/adminplane/users') }}">
              @include('admin.user.form')
</form>
                </div>
              </div>
                </div>




@endsection


@section('footer')

@endsection
