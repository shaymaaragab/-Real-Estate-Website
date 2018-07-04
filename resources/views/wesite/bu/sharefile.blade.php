@if(count($bu)>0)
    @foreach($bu as $key=>$b)
    @if($key%3==0 && $key!=0 )
    <div class="clearfix"></div>
    @endif
<div class="col-md-4 pull-right">
  <div class="productbox">
<img src="{{checkImageIsexist($b->image)}}" alt="" class="img-responsive">
    <div class="producttitle">{{$b->bu_name}}</div>
    <p class="text-justify">{{str_limit($b->bu_small_dis,70)}}</p>
    <div class="productprice">
      <span class="pull-right">
        المساحه
        :
        {{$b->bu_square}}
      </span>
      <span class="pull-left">
       نوع العملية
       :
        {{bu_rent()[$b->bu_rent]}}
      </span>
      <div class="clearfix"></div>
      <span class="pull-right">
       نوع العقار
       :
        {{bu_type()[$b->bu_type]}}
      </span>
      <span class="pull-left">
     المكان
      :
        {{place()[$b->bu_place]}}
      </span>
      <div class="clearfix"></div>
    </div>
    <br>
    <div class="productprice"><div class="pull-right">
      <a href="{{url('/singleBullding/'.$b->id)}}" class="btn btn-primary btm-sm" role="button"> اظهر التفاصيل<span class="glyphicon glyphicon-shopping-cart"></span></a></div>
      <div class="pricetext">{{$b->bu_price}}</div></div>
  </div>
</div>
     @endforeach

<div class="clearfix"></div>
</br>
@else
<div class="alert alert-danger">
  لا يوجد اى عقارات حالية
</div>
@endif
