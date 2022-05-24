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
        </div>
        <div class="box-body">
          <table class="table table-hover">
              <thead>
                  <tr>
                      <th>STT</th>
                      <th>Tên khách hàng</th>
                      <th>Số điện thoại</th>
                      <th>Địa chỉ giao hàng</th>
                      <th>Giá trị đơn hàng</th>
                      <th>Ghi chú</th>
                      <th>Trạng thái</th>
                      <th></th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($order as $value)
                  <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$value->user->name}}</td>
                      <td>{{$value->user->phone}}</td>
                      <td>{{$value->address}}</td>
                      <td>{{$value->total_price}}</td>
                      <td>{{$value->note}}</td>
                      <td>
                        <form action="{{route('order.update',$value->id)}}" method="post">
                        @csrf
                        @method('PUT')
                          <select name="status" id="" class="" style="height:33px">
                              <option value="1" {{$value->status == 1 ? 'selected' : ''}}>
                                Đang chờ xác nhận
                              </option>
                              <option value="2" {{$value->status == 2 ? 'selected' : ''}}>
                                Đang vận chuyển
                              </option>
                              <option value="3" {{$value->status == 3 ? 'selected' : ''}}>
                                Đã hoàn thành
                              </option>
                          </select>
                          <button type="submit" class="btn btn-success">Cập nhật trạng thái</button>
                        </form>
                      </td>
                      <td>
                          <form action="{{route('order.destroy',$value->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('order.show',$value->id)}}" class="btn btn-info">Xem chi tiết</a>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn hủy đơn hàng này không này không?')">Hủy</button>
                          </form>
                      </td>
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