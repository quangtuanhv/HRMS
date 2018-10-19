@extends('layouts.Master')

@section('main')
<div class="col-md-10 mt-5 ml-auto mr-auto">
<div class="card">
	<div class="card-header">
	  <h4>Danh sách hệ số lương</h4>
	</div>
	<div class="card-body">
	  <div class="table-responsive">
		<table class="table">
		  <thead>
			<tr>
			  <th>Mã </th>
			  <th>Hệ số lương</th>
			  <th>Thao tác</th>
			</tr>
		  </thead>
		  <tbody>
				@foreach($hsl as $cv)
			<tr>
			  <th scope="row">{{ $cv->id }}</th>
			  <td>{{ $cv->HSL }}</td>
			  <td>
				  <a id="p{{ $cv->id }}" href="#exampleModal" data-toggle="modal" data-whatever="@mdo"  title="Sửa tên hệ số lương">
						<i class="fa fa-pencil-square-o" aria-hidden="true"></i>Sửa
				  </a>
				  <a id="d{{ $cv->id }}"  href="#xoaModal" data-toggle="modal" data-whatever="@mdo"  title="Xóa hệ số lương">
						<i class="ml-2 fa fa-trash-o" aria-hidden="true"></i>Xóa
				  </a>
				  <script type="text/javascript">
							
					$(document).ready(function () {
						$('#p{{ $cv->id }}').click(function(event) {
							$('#textedit').val('{{$cv->HSL}}');
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
		<form action="{{url('tao-moi-he-so-luong')}}" method="POST">
			{{ csrf_field() }}
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-3 col-form-label">Hệ số lương</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="hsl" placeholder="Hệ số lương">
				</div>
			</div>

			<div class="form-group row">
				<div class="offset-sm-3 col-sm-9">
					<button type="submit" class="btn btn-primary">Thêm Hệ Số Lương</button>
				</div>
			</div>
		</form>
	</div>
	<div class="card-header">
	  <h4>Danh sách mức lương cơ bản</h4>
	</div>
	<div class="card-body">
	  <div class="table-responsive">
		<table class="table">
		  <thead>
			<tr>
			  <th>Mã </th>
			  <th>Mức lương cơ bản</th>
			  <th>Thao tác</th>
			</tr>
		  </thead>
		  <tbody>
				@foreach($lcb as $lcb)
			<tr>
			  <th scope="row">{{ $lcb->id }}</th>
			  <td>{{ $lcb->luong_co_ban }}</td>
			  <td>
				  <a id="lcb{{ $lcb->id }}" href="#sualcbModal" data-toggle="modal" data-whatever="@mdo"  title="Sửa tên chức vụ">
						<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
				  </a>
				  <a id="dlcb{{ $lcb->id }}"  href="#xoalcbModal" data-toggle="modal" data-whatever="@mdo"  title="Xóa chức vụ">
						<i class="ml-2 fa fa-trash-o" aria-hidden="true"></i>
				  </a>
				  <script type="text/javascript">
							
					$(document).ready(function () {
						$('#lcb{{ $lcb->id }}').click(function(event) {
							$('#lcbedit').val('{{$lcb->luong_co_ban}}');
							$('#malcb').val('{{$lcb->id}}');
						});
						$('#dlcb{{ $lcb->id }}').click(function(event) {
							$('#dellcb').val('{{$lcb->id}}');
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
		<form action="{{url('tao-moi-muc-luong-co-ban')}}" method="POST">
			{{ csrf_field() }}
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-3 col-form-label">Mức Lương Cơ Bản</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="lcb" placeholder="Mức Lương Cơ Bản">
				</div>
			</div>

			<div class="form-group row">
				<div class="offset-sm-3 col-sm-9">
					<button type="submit" class="btn btn-primary">Thêm Mức Lương Cơ Bản</button>
				</div>
			</div>
		</form>
	</div>

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="exampleModalLabel">Sửa chức vụ</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form id="form-edit" action="{{url('sua-he-so-luong')}}" method="POST">
						{{ csrf_field() }}
						<input type="hidden" name="id_hsl" id="macv">
							<div class="form-group">
								<label for="recipient-name" class="form-control-label">Hệ Số lương</label>
								<input type="text" class="form-control" id="textedit" name="hsl">
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
						<h4 class="modal-title" id="exampleMLabel">Xóa chức vụ ?!</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h1 class="text-danger">Chú ý !!!</h1>
						<p>Bạn đang xóa hệ số lương</p>
					</div>
					<div class="modal-footer">
							<form id="form-delete" action="{{url('xoa-he-so-luong')}}" method="POST">
									{{ csrf_field() }}
									<input type="hidden" name="id_hsl" id="delcv">
							</form>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
						<button type="button" id="delete-submit" class="btn btn-primary" >Xóa</button>
					</div>
				</div>
			</div>
	</div>
	<div class="modal fade" id="sualcbModal" tabindex="-1" role="dialog" aria-labelledby="sualcbModal" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="exampleModalLabel">Sửa mức lương cơ bản</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form id="form-edit-lcb" action="{{url('sua-muc-luong-co-ban')}}" method="POST">
						{{ csrf_field() }}
						<input type="hidden" name="id_lcb" id="malcb">
							<div class="form-group">
								<label for="recipient-name" class="form-control-label">Lương cơ bản</label>
								<input type="text" class="form-control" id="lcbedit" name="lcb">
							</div>
							
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
						<button type="button" class="btn btn-primary" id="edit-submit-lcb">Sửa</button>
					</div>
				</div>
			</div>
	</div>
	<div class="modal fade" id="xoalcbModal" tabindex="-1" role="dialog" aria-labelledby="xoalcbModal" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="exampleMLabel">Xóa chức vụ ?!</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h1 class="text-danger">Chú ý !!!</h1>
						<p>Bạn đang xóa mức lương cơ bản</p>
					</div>
					<div class="modal-footer">
							<form id="form-delete-lcb" action="{{url('xoa-muc-luong-co-ban')}}" method="POST">
									{{ csrf_field() }}
									<input type="hidden" name="id_lcb" id="dellcb">
							</form>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
						<button type="button" id="delete-submit-lcb" class="btn btn-primary" >Xóa</button>
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
	$('#edit-submit-lcb').click(function(event) {
		$('#form-edit-lcb').submit();
	});
	$('#delete-submit').click(function(event) {
		$('#form-delete').submit();
	});
	$('#delete-submit-lcb').click(function(event) {
		$('#form-delete-lcb').submit();
	});
});
</script>
@endsection

