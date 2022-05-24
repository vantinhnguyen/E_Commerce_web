@extends('fe.master')
@section('main')
<link rel="stylesheet" href="{{url('assets')}}/fe-css/cart.css">
<!-- banner -->
<div class="banner">
    <div class="sub-banner">
        <h3 class="text-uppercase ">Giỏ hàng của bạn</h3>
    </div>
</div>

<!-- content -->
<div class="container cart_content">

    <div class="title pt-4 pb-3 mb-3">
        <h4 class="text-uppercase text-left">giỏ hàng</h4>
    </div>

    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th style="width:10%;" class="font-weight-normal">Hình ảnh</th>
                    <th style="width:40%;" class=" text-center font-weight-normal">Thông tin sản phẩm</th>
                    <th style="width:10%;" class=" text-center font-weight-normal">đơn giá</th>
                    <th style="width:30%;" class=" text-center font-weight-normal">số lượng</th>
                    <th style="width:10%;" class=" text-center font-weight-normal">Tổng giá</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart as $value)
                <tr>
                    <th style="width:10%;" class="font-weight-bold">
                        <img class="w-100" src="{{url('upload')}}/{{$value['productDetail_image']}}" alt="">
                    </th>

                    <td style="width:40%;" class=" text-center font-weight-normal">
                        <H5 class="font-italic text-left pro-name">{{$value['productDetail_name']}}</H5>
                        <p class="font-italic text-left">
                            Màu sắc: <span class="font-italic text-primary text-left">{{$value['color']}}</span>
                            -Kích cỡ: <span class="font-italic text-primary text-left">{{$value['productDetail_size']}}</span> 
                        </p>
                        <p class="text-danger text-left cart_del">Xóa</p>
                    </td>

                    <td style="width:10%;" class=" text-center font-weight-normal">
                        <p class="font-weight-bold text-left pro-name">{{number_format($value['productDetail_price'],0, ',', '.')}}đ</p>
                    </td>
                    <td style="width:30%;" class="text-center font-weight-normal">
                        <div class="wrapper d-flex order-1">
                            <button type="button" class="plusminus plusminus-left order-1 d-block plusminus-left-{{$value['productDetail_id']}}">-</button>
                            <input type="number" class="num order-1 d-block num-{{$value['productDetail_id']}}" value="{{$value['productDetail_quantity']}}" min="1" max="10" name="quantity">
                            <button type="button" class="plusminus plusminus-right order-1 d-block plusminus-right-{{$value['productDetail_id']}}">+</button>
                        </div>
                    </td>
                    <td style="width:10%;" class=" text-center font-weight-normal">
                        <p class="font-weight-bold pro-name">{{number_format($value['productDetail_price']*$value['productDetail_quantity'],0, ',', '.')}}đ</p>
                    </td>
                </tr>

                <script>
                    $('.qty_menu').html('{{$totalQty}}');
                    $('.total_price_menu').html(' -> {{$totalPrice}}đ')
                </script>

                <!-- sự kiện click vào nút tăng, giảm số lượng -->
                <script>
                    $('.plusminus-left-{{$value['productDetail_id']}}').click(function(){
                        var num = $('.num-{{$value['productDetail_id']}}').val();
                        if (num > 1) {
                            $('.num-{{$value['productDetail_id']}}').attr('value', Number(num)-1);
                        } else {
                            $('.num-{{$value['productDetail_id']}}').attr('value')=1;
                        }
                    });

                    $('.plusminus-right-{{$value['productDetail_id']}}').click(function(){
                        var num = $('.num-{{$value['productDetail_id']}}').val();
                        $('.num-{{$value['productDetail_id']}}').attr('value',Number(num)+1);
                    });

                    $('.plusminus-left-{{$value['productDetail_id']}}').mousedown(function(){
                        $(this).css('color','red');
                        $('.plusminus-right').css('color','black');
                    })

                    $('.plusminus-right-{{$value['productDetail_id']}}').mousedown(function(){
                        $(this).css('color','red');
                        $('.plusminus-left').css('color','black');
                    })
                </script>
                @endforeach
            </tbody>
        </table>
        
        <div class="w-100">
            <div class=" d-flex justify-content-end w-100">
                <p class="d-block font-weight-bold text-danger">Tổng tiền: {{number_format($totalPrice,0, ',', '.')}}đ</p>
            </div>
            <div class="d-flex justify-content-end w-100">
                <button class="btn btn-success d-block">Đặt hàng</button>
            </div>
        </div>

    </div>
</div>





@stop