@extends('admin.layouts.layout')
@section('title')
تعديل عقار
  {{$bu->bu_name}}
@endsection


@section('header')
{!!Html::style('cus/css/select2.css')!!}
@endsection

@section('content')
<section class="content-header">
      <h1>
        تعديل عقار
        {{$bu->bu_name}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminplane')}}"><i class="fa fa-dashboard"></i>الرئيسية</a></li>
        <li><a href="{{url('/adminplane/bu')}}">النحكم ف الاعضاء </a></li>
         <li class="active"><a href="{{url('/adminplane/bu/'.$bu->id.'/edit')}}">
           تعديل عقار
           {{$bu->bu_name}}
         </a></li>
      </ol>
    </section>
    <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">
                       تعديل عقار
                      {{$bu->bu_name}}</h3>
                </div>
                <div class="box-body">


            {!!Form::model($bu, ['route' => ['bu.update', $bu->id],'method'=>'PATCH','files'=>true]) !!}
                     @include('admin.bu.form')
             {!!Form::close()!!}
                </div>
              </div>
                </div>
              </div>
</section>



@endsection


@section('footer')
{!!Html::script('cus/js/select2.js')!!}
<script type="text/javascript">
$('.select2').select2();
</script>
@endsection
