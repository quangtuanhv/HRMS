@extends('layouts.Master')

@section('main')
<div class="col-md-10 mt-5 ml-auto mr-auto">
    <div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Tạo mới nhân viên</div>
    <div class="card-body">
        <div class="table-responsive">
            <p style=" text-align: center">Các trường được gắn dấu <span class="text-danger">*</span> là các trường bắt buộc</p>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <form action="{{url('/tao-moi-nhan-vien')}}" method="post" novalidate>
						{{ csrf_field() }}
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tbody>
                    <tr>
                        <th>Họ<span class="text-danger">*</span></th>
                        <td><input name="ho" class="form-control" type="text" required></td>
                        <th>Tên<span class="text-danger">*</span></th>
                        <td><input name="ten" class="form-control" type="text" required></td>
                    </tr>
                    <tr>
                        <th>Địa chỉ<span class="text-danger">*</span></th>
                        <td>
                            <input name="diachi" class="form-control" type="text" required>
                        </td>
                        <th>Giới tính<span class="text-danger">*</span></th>
                        <td>
                            <select class="form-control" name="gioitinh" id="" required>
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                            </select>
                        </td>
                    </tr>
                   
                    <tr>
                        <th>Email<span class="text-danger">*</span></th>
                        <td><input name="email" class="form-control" type="text" required></td>
                        <th>Số điện thoại <span class="text-danger">*</span></th>
                        <td><input name="sodienthoai" class="form-control" type="text" required></td>
                    </tr>
                    <tr>
                        <th>Phòng ban(bộ phận)</th>
                        <td>
                            <select class="form-control" name="phongban" id="">
                                @foreach($phongban as $phongban)
                                    <option value="{{$phongban->id}}">{{$phongban->ten_bo_phan}}</option>
                                @endforeach
                            </select>
                        </td>
                        
                        <th>Ngày bắt đầu làm việc</th>
                        <td><input name="ngaybatdaulamviec" class="form-control" type="date"></td>
                        
                    </tr>
                    
                        <td colspan=" 4 ">
                            <button class="btn btn-success" style="float: right; " type="submit" ><i class="fa fa-floppy-o" aria-hidden="true"></i>
                                Lưu 
                            </button>    
                        </td>
                    </tr>
                </tbody>
            </table>
            </form>
        </div>
    </div>
</div>
</div>
@endsection

