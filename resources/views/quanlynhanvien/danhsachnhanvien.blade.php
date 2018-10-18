@extends('layouts.Master')
@section('header')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
@endsection
@section('main')
<div class="col-md-10 mt-5 ml-auto mr-auto">
    <div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-list"></i> Danh sách nhân viên</div>
    <div class="card-body">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Tên</th>
                            <th>Địa chỉ</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Phòng ban</th>
                            <th>Tùy chọn</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($nhanvien as $user)
                        <tr>
                            <td>{{ $user->ho .' '. $user->ten }}</td>
                            <td>{{ $user->dia_chi }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->so_dien_thoai }}</td>
                            <td>{{ $user->bophan->ten_bo_phan }}</td>
                            <td><a href="{{url('thong-tin-chi-tiet',$user->id)}}">Chi tiết</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                                <th>Tên</th>
                                <th>Địa chỉ</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Phòng ban</th>
                                <th>Tùy chọn</th>
                        </tr>
                    </tfoot>
                </table>
    </div>
</div>
</div>
@endsection
@section('script')
<script src="/js/jquery.dataTables.min.js"></script>
<script src="/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@endsection

