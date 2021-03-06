@extends('fe.master')
@section('main')

    @if(Session::has('ss'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-center',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
            })

            Toast.fire({
                icon: 'success',
                title: '{{Session::get('ss')}}'
            })
        </script>
    @endif

<!-- ban ner 1 -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://royalhelmet.com.vn/ckfinder/userfiles/images/banner/web-banner-tu-tin-song-chat%20(1).png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://royalhelmet.com.vn/ckfinder/userfiles/images/banner/web%20ads%20-%20M139.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://royalhelmet.com.vn/ckfinder/userfiles/images/banner/bANNER%20WEB%20rOYAL.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
</div>

<!-- s??? ki???n n???i b???t -->

<div class="sknb">
    <div class="container">
        <div class="row title">
            <div class="gachTrai col-lg-4"></div>
            <div class="text  col-lg-4">
                <h2 class="text-uppercase text-center">s??? ki???n n???i b???t</h2>
            </div>
            <div class="gachPhai col-lg-4"></div>
        </div>
        <div class="row pt-4">
            <div class="col-lg-6 p-2">
                <img src="https://royalhelmet.com.vn/ckfinder/userfiles/images/banner/song-chat-cung-m139.jpg" alt="">
            </div>
            <div class="col-lg-6 p-2">
                <img src="https://royalhelmet.com.vn/ckfinder/userfiles/images/banner/tu-tin-song-chat.jpg" alt="">
            </div>
        </div>
    </div>
</div>

<!-- s???n ph???m b??n ch???y -->

<div class="spbc">
    <div class="container">
        <div class="row title">
            <div class="gachTrai col-lg-4"></div>
            <div class="text  col-lg-4">
                <h2 class="text-uppercase text-center">s???n ph???m b??n ch???y</h2>
            </div>
            <div class="gachPhai col-lg-4"></div>
        </div>

        <div class="row pt-4">
            <div class="col-4 mb-4">
                <div class="card w-100" style="width: 18rem;">
                    <a href="#">
                        <img src="https://royalhelmet.com.vn/ckfinder/userfiles/images/products/vcXD1J139%20bien%20hieu%202-kinh.png" class="card-img-top sp-img" alt="">
                    </a>
                    <div class="card-body card-body_product">
                        <h5 class="card-title text-uppercase">M?? B???O HI???M 3/4 ROYAL M134C</h5>
                        <!-- <p class="card-text">Gi??</p> -->
                        <div class="row">
                            <!-- <a href="#" class="btn d-block col-6 mau-nut">Mua</a> -->
                            <!-- <a href="#" class="btn d-block  col-6 mau-nut">Chi ti???t</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-4">
                <div class="card w-100" style="width: 18rem;">
                    <a href="#">
                        <img src="https://royalhelmet.com.vn/ckfinder/userfiles/images/products/vcXD1J139%20bien%20hieu%202-kinh.png" class="card-img-top sp-img" alt="">
                    </a>
                    <div class="card-body card-body_product">
                        <h5 class="card-title text-uppercase">M?? B???O HI???M 3/4 ROYAL M134C</h5>
                        <!-- <p class="card-text">Gi??</p> -->
                        <div class="row">
                            <!-- <a href="#" class="btn d-block col-6 mau-nut">Mua</a> -->
                            <!-- <a href="#" class="btn d-block  col-6 mau-nut">Chi ti???t</a> -->
                        </div>
                    </div>
                </div>
            </div><div class="col-4 mb-4">
                <div class="card w-100" style="width: 18rem;">
                    <a href="#">
                        <img src="https://royalhelmet.com.vn/ckfinder/userfiles/images/products/vcXD1J139%20bien%20hieu%202-kinh.png" class="card-img-top sp-img" alt="">
                    </a>
                    <div class="card-body card-body_product">
                        <h5 class="card-title text-uppercase">M?? B???O HI???M 3/4 ROYAL M134C</h5>
                        <!-- <p class="card-text">Gi??</p> -->
                        <div class="row">
                            <!-- <a href="#" class="btn d-block col-6 mau-nut">Mua</a> -->
                            <!-- <a href="#" class="btn d-block  col-6 mau-nut">Chi ti???t</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-6 m-0 p-0">
            <img class="w-100" src="https://royalhelmet.com.vn/ckfinder/userfiles/images/banner/banner%20link%20web%20royal%20-%202.png" alt="">
        </div>
        <div class="col-6 m-0 p-0">
            <img class="w-100 m-0 p-0" src="https://royalhelmet.com.vn/ckfinder/userfiles/images/banner/banner%20link%20web%20royal%20-1.png" alt="">
        </div>
    </div>
</div>

<!-- ch??o m???ng ?????n v???i -->

<div class="cmdv">
    <div class="container">
        <div class="title-cm text-center">
            <h3 class="cm1">CH??O M???NG ?????N V???I</h3>
            <h3 class="cm2">ROYAL HELMET</h3>
        </div>
        <div class="row mt-5">
            <div class="col-6 mt-5">
                <h4 class="text-center tit-1">K??NH G???I: QU?? KH??CH H??NG!</h4>
                <h4 class="text-center  tit-2">CTY TNHH SX TM MAFA VN</h4>
                <p class="text-center vb-1">--------***--------</p>
                <p class="text-justify vb-2">???X??y d???ng th????ng hi???u t??? nh???ng gi?? tr??? th???t???, tri???t l?? kinh doanh ri??ng c?? lu??n ???????c ROYAL ki??n tr?? th???c hi???n. D?? th??? tr?????ng bi???n ?????ng li??n t???c hay kh??ch h??ng c?? qu?? nhi???u s???n ph???m c??ng lo???i ????? ch???n l???a, nh??ng ROYAL v???n lu??n ?????m b???o quy
                    tr??nh s???n xu???t nghi??m ng???t v?? l???a ch???n k??? c??ng nguy??n v???t li???u ?????u v??o ????? ?????m b???o ch???t l?????ng an to??n tuy???t ?????i c???a s???n ph???m, c??ng nh?? ti???t ki???m t???i ??a chi ph?? s???n xu???t ????? cho ra d??ng s???n ph???m t???t v???i gi?? th??nh c???nh tranh.</p>
                <p class="text-justify vb-2">M???t h??nh tr??nh ???? qua v?? ch???ng ???????ng ph??a tr?????c lu??n r???ng m???, nh???ng ph???n th?????ng, danh hi???u ch??nh v?? ni???m tin c???a kh??ch h??ng, ?????i t??c l?? ti???n ????? v?? ?????ng l???c ????? ROYAL lu??n s??ng t???o, ??o??n k???t, b???t ph?? v?? th??nh c??ng tr??n th????ng tr?????ng, ti???p
                    t???c gi??? v???ng v??? tr?? l?? m???t trong nh???ng th????ng hi???u m???nh h??ng ?????u trong l??nh v???c s???n xu???t, kinh doanh m?? b???o hi???m Vi???t Nam v?? tr??n th???i gi???i, m???t h??nh tr??nh v????n ra bi???n l???n b???t ?????u???./</p>
            </div>
            <div class="col-6 mt-5">
                <img class="w-100" src="https://royalhelmet.com.vn/images/193aa2d20309f957a018.jpg" alt="">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="d-flex">
            <div class="p-5 w-25">
                <img class="w-100  scase" src="https://royalhelmet.com.vn/ckfinder/userfiles/images/logo/Logo2020-01.png" alt="">
            </div>
            <div class="p-5 w-25">
                <img class="w-100  scase" src="https://royalhelmet.com.vn/ckfinder/userfiles/images/logo/Logo2020-02.png" alt="">
            </div>
            <div class="p-5 w-25">
                <img class="w-100  scase" src="https://royalhelmet.com.vn/ckfinder/userfiles/images/logo/Logo2020-03.png" alt="">
            </div>
            <div class="p-5 w-25">
                <img class="w-100  scase" src="https://royalhelmet.com.vn/ckfinder/userfiles/images/logo/Logo2020-05.png" alt="">
            </div>
        </div>
    </div>
</div>


<!-- b??i vi???t -->
<div class="bai-viet p-5">
    <div class="row title pb-4">
        <div class="gachTrai col-lg-5"></div>
        <div class="text  col-lg-2">
            <h2 class="text-uppercase text-center">b??i vi???t</h2>
        </div>
        <div class="gachPhai col-lg-5"></div>
    </div>


    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active nen-do"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1" class="nen-do"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2" class="nen-do"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card mb-6  no-boder">
                    <div class="row no-gutters">

                        <div class="col-md-3">
                            <img class="w-100 d-block img-bv" src="https://royalhelmet.com.vn/ckfinder/userfiles/images/blogs/mu-bao-hiem-mua-dong-thumb.png" alt="...">
                        </div>
                        <div class="col-md-3">
                            <div class="card-body no-background">
                                <h5 class="card-title  text-uppercase">TH??? L??? PHOTO CHALLENGE T??? TIN S???NG CH???T</h5>
                                <p class="card-text">
                                    C??c t???nh ph??a B???c chu???n b??? b?????c v??o m??a thu ????ng v???i ?????c tr??ng l?? th???i ti???t l???nh v?? kh??. Ki???u th???i ti???t ?????c th?? n??y g??y ra nh???ng tr??? ng???i, kh?? kh??n nh???t ?????nh cho m???i ng?????i, ?????c bi???t ...
                                </p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <img class="w-100 img-bv" src="https://royalhelmet.com.vn/ckfinder/userfiles/images/blogs/web%2022-9-06%20(1).jpg" alt="...">
                        </div>

                        <div class="col-md-3">
                            <div class="card-body no-background">
                                <h5 class="card-title text-uppercase">Top 5 m?? b???o hi???m ph??ng d???ch t???t nh???t hi???n nay</h5>
                                <p class="card-text">
                                    C??c t???nh ph??a B???c chu???n b??? b?????c v??o m??a thu ????ng v???i ?????c tr??ng l?? th???i ti???t l???nh v?? kh??. Ki???u th???i ti???t ?????c th?? n??y g??y ra nh???ng tr??? ng???i, kh?? kh??n nh???t ?????nh cho m???i ng?????i, ?????c bi??? ...
                                </p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card mb-6  no-boder">
                    <div class="row no-gutters">

                        <div class="col-md-3">
                            <img class="w-100 d-block img-bv" src="https://royalhelmet.com.vn/ckfinder/userfiles/images/blogs/mu-bao-hiem-tre-em.png" alt="...">
                        </div>
                        <div class="col-md-3">
                            <div class="card-body no-background">
                                <h5 class="card-title  text-uppercase">TH??? L??? PHOTO CHALLENGE T??? TIN S???NG CH???T</h5>
                                <p class="card-text">
                                    C??c t???nh ph??a B???c chu???n b??? b?????c v??o m??a thu ????ng v???i ?????c tr??ng l?? th???i ti???t l???nh v?? kh??. Ki???u th???i ti???t ?????c th?? n??y g??y ra nh???ng tr??? ng???i, kh?? kh??n nh???t ?????nh cho m???i ng?????i, ?????c bi???t ...
                                </p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <img class="w-100 img-bv" src="https://royalhelmet.com.vn/ckfinder/userfiles/images/blogs/tu-tin-song-chat-cung-royal-helmet.png" alt="...">
                        </div>

                        <div class="col-md-3">
                            <div class="card-body no-background">
                                <h5 class="card-title text-uppercase">Top 5 m?? b???o hi???m ph??ng d???ch t???t nh???t hi???n nay</h5>
                                <p class="card-text">
                                    C??c t???nh ph??a B???c chu???n b??? b?????c v??o m??a thu ????ng v???i ?????c tr??ng l?? th???i ti???t l???nh v?? kh??. Ki???u th???i ti???t ?????c th?? n??y g??y ra nh???ng tr??? ng???i, kh?? kh??n nh???t ?????nh cho m???i ng?????i, ?????c bi??? ...
                                </p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card mb-6  no-boder">
                    <div class="row no-gutters">

                        <div class="col-md-3">
                            <img class="w-100 d-block img-bv" src="https://royalhelmet.com.vn/ckfinder/userfiles/images/blogs/mu-bao-hiem-mua-dong-thumb.png" alt="...">
                        </div>
                        <div class="col-md-3">
                            <div class="card-body no-background">
                                <h5 class="card-title  text-uppercase">TH??? L??? PHOTO CHALLENGE T??? TIN S???NG CH???T</h5>
                                <p class="card-text">
                                    C??c t???nh ph??a B???c chu???n b??? b?????c v??o m??a thu ????ng v???i ?????c tr??ng l?? th???i ti???t l???nh v?? kh??. Ki???u th???i ti???t ?????c th?? n??y g??y ra nh???ng tr??? ng???i, kh?? kh??n nh???t ?????nh cho m???i ng?????i, ?????c bi???t ...
                                </p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <img class="w-100 img-bv" src="https://royalhelmet.com.vn/ckfinder/userfiles/images/blogs/web%2022-9-06%20(1).jpg" alt="...">
                        </div>

                        <div class="col-md-3">
                            <div class="card-body no-background">
                                <h5 class="card-title text-uppercase">Top 5 m?? b???o hi???m ph??ng d???ch t???t nh???t hi???n nay</h5>
                                <p class="card-text">
                                    C??c t???nh ph??a B???c chu???n b??? b?????c v??o m??a thu ????ng v???i ?????c tr??ng l?? th???i ti???t l???nh v?? kh??. Ki???u th???i ti???t ?????c th?? n??y g??y ra nh???ng tr??? ng???i, kh?? kh??n nh???t ?????nh cho m???i ng?????i, ?????c bi??? ...
                                </p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
          <span class="carousel-control-prev-icon nen-do" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
          <span class="carousel-control-next-icon nen-do" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
    </div>

</div>
@stop