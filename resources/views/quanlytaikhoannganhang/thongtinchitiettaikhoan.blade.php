@extends('layouts.Master')

@section('main')
<div class="col-md-10 mt-5 ml-auto mr-auto">
<div class="card">
	<div class="card-header">
        <h4>Thông tin chi tiết tài khoản ngân hàng của <a href="{{route('thongtinnguoidung',$nhansu->id)}}" style="color:red;"> {{$nhansu->ho.' '.$nhansu->ten}}</a></h4>
	</div>
	<div class="card-body">
	  <div class="table-responsive">
		<table class="table">
		  <thead>
			<tr>
			  <th>Mã</th>
			  <th>Tên Ngân Hàng</th>
			  <th>Số Tài Khoản</th>
			  <th>Trạng thái</th>
			  <th>Thao Tác</th>
			</tr>
		  </thead>
		  <tbody>
				@foreach($taikhoan as $cv)
			<tr>
			  <th scope="row">{{ $cv->id }}</th>
			  <td>{{ $cv->ten_ngan_hang }}</td>
			  <td>{{ $cv->so_tai_khoan }}</td>
                  @if( $cv->kich_hoat )
                    <td>Đã kích hoạt</td>    
                  
                  @else
                  <td>Chưa kích hoạt</td>    
                  @endif
			  <td>
				  <a id="p{{ $cv->id }}" href="#exampleModal" data-toggle="modal" data-whatever="@mdo"  title="Sửa tên bộ phận">
						<i class="fa fa-pencil-square-o" aria-hidden="true"></i>Chỉnh sửa
				  </a>
				  <a id="d{{ $cv->id }}"  href="#xoaModal" data-toggle="modal" data-whatever="@mdo"  title="Xóa bộ phận">
						<i class="ml-2 fa fa-trash-o" aria-hidden="true"></i> Xóa
				  </a>
				  <script type="text/javascript">
							
					$(document).ready(function () {
						$('#p{{ $cv->id }}').click(function(event) {
							$('#tennganhang').val('{{$cv->ten_ngan_hang}}');
							$('#sotaikhoan').val('{{$cv->so_tai_khoan}}');
							$('#trangthai').val('{{$cv->kich_hoat}}');
							$('#macv').val('{{$cv->id}}');
						});
						$('#d{{ $cv->id }}').click(function(event) {
							$('#delcv').val('{{$cv->id}}');
						});
					});
				</script>
			  </td>
			</tr>
			@endforeach
		  </tbody>
		</table>
	  </div>
	</div>
	<div class="card-header">
		<form action="{{url('tao-moi-tai-khoan-ngan-hang',$nhansu->id)}}" method="POST">
			{{ csrf_field() }}
			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Tên Ngân Hàng</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="tennganhang" placeholder="Tên Ngân Hàng">
                </div>
				<label class="col-sm-3 col-form-label">Số tài khoản</label>                
				<div class="col-sm-9">
					<input type="text" class="form-control" name="sotaikhoan" placeholder="Số tài khoản">
                </div>
				<label class="col-sm-3 col-form-label">Trạng thái</label>                
				<div class="col-sm-9">
                    <select name="kichhoat" class="form-control">
                        <option value="1">Kích hoạt</option>
                        <option value="0">Không kích hoạt</option>
                    </select>
                </div>
			</div>

			<div class="form-group row">
				<div class="offset-sm-3 col-sm-9">
					<button type="submit" class="btn btn-primary">Thêm tài khoản </button>
				</div>
			</div>
		</form>
	</div>

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="exampleModalLabel">Sửa bộ phận</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form id="form-edit" action="{{url('sua-tai-khoan-ngan-hang',$nhansu->id)}}" method="POST">
						{{ csrf_field() }}
						<input type="hidden" name="taikhoan_id" id="macv">
							<div class="form-group">
								<label for="recipient-name" class="form-control-label">Tên Ngân Hàng</label>
								<input type="text" class="form-control" id="tennganhang" name="tennganhang">
							</div>
							<div class="form-group">
								<label for="recipient-name" class="form-control-label">Số Tài Khoản</label>
								<input type="text" class="form-control" id="sotaikhoan" name="sotaikhoan">
							</div>
							<div class="form-group">
								<label for="recipient-name" class="form-control-label">Trạng Thái </label>
								<select id="trangthai" name="kichhoat" class="form-control">
                                        <option value="1">Kích hoạt</option>
                                        <option value="0">Không kích hoạt</option>
                                    </select>
							</div>
							
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
						<button type="button" class="btn btn-primary" id="edit-submit">Sửa</button>
					</div>
				</div>
			</div>
	</div>
	<div class="modal fade" id="xoaModal" tabindex="-1" role="dialog" aria-labelledby="exampleMLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="exampleMLabel">Xóa thông tin tài khoản ngân hàng ?!</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h1 class="text-danger">Chú ý !!!</h1>
						<p>Bạn đang xóa thông tin tài khoản ngân hàng của  <Strong class="text-danger"> {{$nhansu->ho.' '.$nhansu->ten}}</Strong></p>
					</div>
					<div class="modal-footer">
							<form id="form-delete" action="{{url('xoa-thong-tin-tai-khoan')}}" method="POST">
									{{ csrf_field() }}
									<input type="hidden" name="taikhoan_id" id="delcv">
							</form>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
						<button type="button" id="delete-submit" class="btn btn-primary" >Xóa</button>
					</div>
				</div>
			</div>
	</div>

</div>
</div>
@endsection
@section('script')
<script>
	$(document).ready(function($) {
	$('#edit-submit').click(function(event) {
		$('#form-edit').submit();
	});
	$('#delete-submit').click(function(event) {
		$('#form-delete').submit();
	});
});
</script>
@endsection

