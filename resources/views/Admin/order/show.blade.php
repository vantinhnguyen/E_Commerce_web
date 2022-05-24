@extends('Admin.master')
@section('title','QUẢN LÝ ĐƠN HÀNG')
@section('content')
<div class="box">
<div class="box-header with-border">
          @if(Session::has('ss'))
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>{{Session::get('ss')}}</strong>
          </div>
          @endif
          <!-- <a href="{{route('product_detail.create')}}" class="btn btn-info">Thêm biến thể sản phẩm mới</a> -->
          <h3>Chi tiết đơn hàng số</h3>
        </div>
        <div class="box-body">
          <table class="table table-hover">
              <thead>
                  <tr>
                      <th>STT</th>
                      <th>Tên sản phẩm</th>
                      <th>Ảnh</th>
                      <th>Màu</th>
                      <th>Size</th>
                      <th>Giá</th>
                      <th>Số lượng</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($order_detail as $value)
                  <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$value->product_detail->product->name}}</td>
                      <td><img src="{{url('upload')}}/{{$value->product_detail->image}}" alt="" style="width:100px"></td>
                      <td>{{$value->product_detail->color->name}}</td>
                      <td>{{$value->product_detail->size->name}}</td>
                      <td>{{$value->price}}</td>
                      <td>{{$value->quantity}}</td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Cho phân trang vào đây!
        </div>
        <!-- /.box-footer-->
      </div>
@stop