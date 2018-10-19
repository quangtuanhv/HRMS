@extends('layouts.Master')
@section('header')
<style>
    .image-container {
            position: relative;
        }

        .image {
            opacity: 1;
            display: block;
            width: 100%;
            height: auto;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        .image-container:hover .image {
            opacity: 0.3;
        }

        .image-container:hover .middle {
            opacity: 1;
        }

</style>
@endsection
@section('main')
<div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <div class="image-container">
                                    <img src="http://placehold.it/150x150" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                                    <div class="middle">
                                        <input type="button" class="btn btn-secondary" id="btnChangePicture" value="Change" />
                                        <input type="file" style="display: none;" id="profilePicture" name="file" />
                                    </div>
                                </div>
                                <div class="userData ml-3">
                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a href="javascript:void(0);">{{$nhanvien->ho.' '.$nhanvien->ten}}</a></h2>
                                </div>
                                <div class="ml-auto">
                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Thông tin cơ bản</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="infoAdvanced-tab" data-toggle="tab" href="#infoAdvanced" role="tab" aria-controls="infoAdvanced" aria-selected="false">Thông tin nâng cao</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="connectedServices-tab" data-toggle="tab" href="#connectedServices" role="tab" aria-controls="connectedServices" aria-selected="false">Cập nhật thông tin</a>
                                    </li>
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">

                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-5">
                                                <label style="font-weight:bold;">Họ và tên</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                    {{$nhanvien->ho.' '.$nhanvien->ten}}
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-5">
                                                <label style="font-weight:bold;">Địa chỉ</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                    {{$nhanvien->dia_chi}}
                                            </div>
                                        </div>
                                        <hr />
                                        
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-5">
                                                <label style="font-weight:bold;">Giới tính</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                    {{$nhanvien->gioi_tinh}}
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-5">
                                                <label style="font-weight:bold;">Email</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                    {{$nhanvien->email}}
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-5">
                                                <label style="font-weight:bold;">Số điện thoại</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                    {{$nhanvien->email}}
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-5">
                                                <label style="font-weight:bold;">Bộ phận (phòng ban)</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                    {{$nhanvien->bophan->ten_bo_phan}}
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-5">
                                                <label style="font-weight:bold;">Ngày bắt đầu làm việc</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                    {{$nhanvien->thoigianhoptac['ngay_bat_dau']}}
                                            </div>
                                        </div>
                                        <hr />

                                    </div>
                                    <div class="tab-pane fade" id="infoAdvanced" role="tabpanel" aria-labelledby="infoAdvanced-tab">
                                        
                                        @foreach($nhanvien->thongtinnganhang as $tttk)
                                        <div class="row">
                                            
                                            <div class="col-sm-12 col-md-3 col-12">
                                                <label style="font-weight:bold;">Thông tin tài khoản ngân hàng</label>
                                            </div>
                                         
                                            <div class="row col-md-8 col-12">
                                                    <div class="col-md-4 col-12 text-danger">
                                                            Tên ngân hàng 
                                                    </div>
                                                    <div class="col-md-8 col-12">
                                                            {{$tttk->ten_ngan_hang}}
                                                    </div>
                                                    <div class="col-md-4 col-12 text-danger">
                                                            Số tài khoản
                                                    </div>
                                                    <div class="col-md-8 col-12">
                                                            {{$tttk->so_tai_khoan}}
                                                    </div>
                                                    <div class="col-md-4 col-12 text-danger">
                                                            Trạng thái
                                                    </div>
                                                    <div class="col-md-8 col-12">
                                                            @if($tttk->kich_hoat)
                                                            Đã kích hoạt
                                                            @else
                                                            Chưa kích hoạt
                                                            @endif
                                                    </div>
                                            </div>

                                        </div>
                                        <hr />
                                        @endforeach
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-5">
                                                <label style="font-weight:bold;">Thông tin lương</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                    {{$nhanvien->thoigianhoptac['ngay_bat_dau']}}
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-5">
                                                <label style="font-weight:bold;">Thông tin bảo hiểm</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                    {{$nhanvien->thoigianhoptac['ngay_bat_dau']}}
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-5">
                                                <label style="font-weight:bold;">Trình độ</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                    {{$nhanvien->thoigianhoptac['ngay_bat_dau']}}
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-5">
                                                <label style="font-weight:bold;">Thông tin hợp đồng</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                    {{$nhanvien->thoigianhoptac['ngay_bat_dau']}}
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-5">
                                                <label style="font-weight:bold;">Thời gian hợp tác</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                    {{$nhanvien->thoigianhoptac['ngay_bat_dau']}}
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-5">
                                                <label style="font-weight:bold;">Hình ảnh</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                    {{$nhanvien->thoigianhoptac['ngay_bat_dau']}}
                                            </div>
                                        </div>
                                        <hr />

                                    </div>
                                    <div class="tab-pane fade" id="connectedServices" role="tabpanel" aria-labelledby="ConnectedServices-tab">
                                            <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-5">
                                                        <label style="font-weight:bold;">Cập nhật thông tin tài khoản ngân hàng</label>
                                                    </div>
                                                    <div class="col-md-8 col-6">
                                                            <a href="{{url('thong-tin-tai-khoan-ngan-hang',$nhanvien->id)}}" class="btn btn-light text-success"><i class="fa fa-sign-in" aria-hidden="true"></i>
                                                                &nbsp;Đến trang quản lý tài khoản ngân hàng
                                                            </a>
                                                    </div>
                                                </div>
                                                <hr />
                                                
                                                <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-5">
                                                        <label style="font-weight:bold;">Cập nhật thông tin lương</label>
                                                    </div>
                                                    <div class="col-md-8 col-6">
                                                            <a href="{{url('/thong-tin-muc-luong',$nhanvien->id)}}" class="btn btn-light text-success"><i class="fa fa-sign-in" aria-hidden="true"></i>
                                                                &nbsp;Đến trang quản lý lương
                                                            </a>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-5">
                                                        <label style="font-weight:bold;">Cập nhật thông tin bảo hiểm</label>
                                                    </div>
                                                    <div class="col-md-8 col-6">
                                                            <a href="{{url('thong-tin-tai-khoan-ngan-hang',$nhanvien->id)}}" class="btn btn-light text-success"><i class="fa fa-sign-in" aria-hidden="true"></i>
                                                                &nbsp;Đến trang quản lý bảo hiểm
                                                            </a>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-5">
                                                        <label style="font-weight:bold;">Cập nhật trình độ</label>
                                                    </div>
                                                    <div class="col-md-8 col-6">
                                                             <button class="btn btn-light text-success"><i class="fa fa-sign-in" aria-hidden="true"></i>
                                                                &nbsp;Đến trang Cập nhật trình độ
                                                            </button>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-5">
                                                        <label style="font-weight:bold;">Cập nhật thông tin hợp đồng</label>
                                                    </div>
                                                    <div class="col-md-8 col-6">
                                                             <button class="btn btn-light text-success"><i class="fa fa-sign-in" aria-hidden="true"></i>
                                                                &nbsp;Đến trang Cập nhật thông tin hợp đồng
                                                            </button>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-5">
                                                        <label style="font-weight:bold;">Cập nhật thời gian hợp tác</label>
                                                    </div>
                                                    <div class="col-md-8 col-6">
                                                             <button class="btn btn-light text-success"><i class="fa fa-refresh" aria-hidden="true"></i>

                                                                &nbsp;Cập nhật thời gian hợp tác
                                                            </button>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-5">
                                                        <label style="font-weight:bold;">Cập nhật hình ảnh</label>
                                                    </div>
                                                    <div class="col-md-8 col-6">
                                                             <button class="btn btn-light text-success"><i class="fa fa-sign-in" aria-hidden="true"></i>
                                                                &nbsp;Đến trang quản lý hình ảnh nhân sự
                                                            </button>
                                                    </div>
                                                </div>
                                                <hr />
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
<script>
    $(document).ready(function () {
    $imgSrc = $('#imgProfile').attr('src');
    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imgProfile').attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    $('#btnChangePicture').on('click', function () {
        // document.getElementById('profilePicture').click();
        if (!$('#btnChangePicture').hasClass('changing')) {
            $('#profilePicture').click();
        }
        else {
            // change
        }
    });
    $('#profilePicture').on('change', function () {
        readURL(this);
        $('#btnChangePicture').addClass('changing');
        $('#btnChangePicture').attr('value', 'Confirm');
        $('#btnDiscard').removeClass('d-none');
        // $('#imgProfile').attr('src', '');
    });
    $('#btnDiscard').on('click', function () {
        // if ($('#btnDiscard').hasClass('d-none')) {
        $('#btnChangePicture').removeClass('changing');
        $('#btnChangePicture').attr('value', 'Change');
        $('#btnDiscard').addClass('d-none');
        $('#imgProfile').attr('src', $imgSrc);
        $('#profilePicture').val('');
        // }
    });
});
</script>
@endsection