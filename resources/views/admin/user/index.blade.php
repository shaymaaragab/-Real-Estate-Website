@extends('admin.layouts.layout')
@section('title')
التحكم ف الاعضاء
@endsection


@section('header')
{!!Html::style('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')!!}
@endsection

@section('content')
<section class="content-header">
      <h1>
    التحكم ف الاعضاء
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminplane')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="{{url('/adminplane/users')}}">النحكم ف الاعضاء </a></li>

      </ol>
    </section>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">
      التحكم ف الاعضاء
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>اسم المستخدم</th>
                  <th>البريد الالكترونى</th>
                  <th>اضيف الى</th>
                  <th>الصلاحيات </th>
                  <th>التحكم </th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($user as $userinfo)

                   <tr>
                     <th>{{$userinfo->id}}</th>
                     <th>{{$userinfo->name}}</th>
                     <th>{{$userinfo->email}}</th>
                     <th>{{$userinfo->created_at}}</th>
                     <th>
                       {{$userinfo->admin==1?'مدير':'عضو'}}
                     </th>
                     <th>
                       <a href="{{url('/adminplane/users/'.$userinfo->id.'/edit')}}">تعديل</a>
                       <a href="{{url('/adminplane/users/'.$userinfo->id.'/delete')}}">حذف</a>
                     </th>
                   </tr>
                   @endforeach


              </tbody>
             <tfoot>
               <thead>
               <tr>
                 <th>#</th>
                 <th>اسم المستخدم</th>
                 <th>البريد الالكترونى</th>
                 <th>اضيف الى</th>
                 <th>الصلاحيات </th>
                 <th>التحكم </th>
               </tr>
               </thead>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
@endsection


@section('footer')
{!!Html::script('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')!!}
{!!Html::script('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')!!}

@endsection
