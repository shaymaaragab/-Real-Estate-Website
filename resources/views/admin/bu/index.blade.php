@extends('admin.layouts.layout')
@section('title')
التحكم ف العاقرات
@endsection


@section('header')
{!!Html::style('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')!!}
@endsection

@section('content')
<section class="content-header">
      <h1>
  التحكم ف العاقرات
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminplane')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="{{url('/adminplane/bu')}}"> التحكم ف العاقرات</a></li>

      </ol>
    </section>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">
التحكم ف العاقرات
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>اسم العقار </th>
                  <th>السعر </th>
                  <th>النوع </th>
                  <th>اضيف الى </th>
                  <th>الحالة </th>
                  <th>التحكم </th>
                </tr>
                </thead>
                <thead>
               @foreach ($bu as $buinfo)

                <tr>
                  <th>{{$buinfo->id}}</th>
                  <th>{{$buinfo->bu_name}}</th>
                  <th>{{$buinfo->bu_price}}</th>
                  <th>
                    @if($buinfo->bu_type==0)
                    {{$buinfo->bu_type='شقة'}}
                    @elseif($buinfo->bu_type==1)
                    {{$buinfo->bu_type='فيلا'}}
                    @else
                    {{$buinfo->bu_type='شاليه'}}
                    @endif
                  </th>

                  <th>{{$buinfo->created_at}}</th>
                  <th>   {{$buinfo->bu_type==1?'غير مفعل' :'مفعل'}}</th>
                  <th>{{$buinfo->bu_price}}</th>

                  <th>
                    <a href="{{url('/adminplane/bu/'.$buinfo->id.'/edit')}}">تعديل</a>
                    <a href="{{url('/adminplane/bu/'.$buinfo->id.'/delete')}}">حذف</a>
                  </th>
                </tr>
                @endforeach
                </thead>

              </tbody>
             <tfoot>
               <thead>
               <tr>
                 <th>#</th>
                 <th>اسم العقار </th>
                 <th>السعر </th>
                 <th>النوع </th>
                 <th>اضيف الى </th>
                 <th>الحالة </th>
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
