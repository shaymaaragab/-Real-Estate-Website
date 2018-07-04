@extends('admin.layouts.layout')
@section('title')
اضف عقار جديد
@endsection


@section('header')

@endsection

@section('content')
<section class="content-header">
      <h1>
اضف عقار جديد
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminplane')}}"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li><a href="{{url('/adminplane/bu')}}">التحكم ف العقارات </a></li>
         <li class="active"><a href="{{url('/adminplane/bu/create')}}">اضف عقار جديد </a></li>
      </ol>
    </section>
    <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">اضف عقار جديد</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <form action="{{ route('bu.store') }}" method="post" enctype="multipart/form-data">
                  @include('admin.bu.form')
                    </form>
                </div>
              </div>
                </div>




@endsection


@section('footer')

@endsection
