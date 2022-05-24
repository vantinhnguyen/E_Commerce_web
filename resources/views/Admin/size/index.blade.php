@extends('Admin.master')
@section('title','QUẢN LÝ SIZE SẢN PHẨM')
@section('content')
<div class="box">
<div class="box-header with-border">
          @if(Session::has('ss'))
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>{{Session::get('ss')}}</strong>
          </div>
          @endif
          <a href="{{route('size.create')}}" class="btn btn-info">Thêm size mới</a>
        </div>
        <div class="box-body">
          <table class="table table-hover">
              <thead>
                  <tr>
                      <th>STT</th>
                      <th>Tên size</th>
                      <th>Trạng thái</th>
                      <th></th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($size as $value)
                  <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$value->name}}</td>
                      <td>{{$value->status==1 ? 'Hiện' : 'Ẩn'}}</td>
                      <td>
                          <form action="{{route('size.destroy',$value->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('size.edit',$value->id)}}" class="btn btn-info">Sửa</a>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?')">Xóa</button>
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