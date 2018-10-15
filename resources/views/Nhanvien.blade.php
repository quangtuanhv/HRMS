@extends('layouts.Master')
@section('main')
<div class="content-area p-y-1">
	<div class="container-fluid">
		
		
		<div class="box box-block bg-white">
			<h5>Danh sách phòng ban</h5>
			<table class="table table-stripped table-bordered table-hover">
				<thead>
					<tr>
						<th>Mã nhân viên</th>
						<th>Tên nhân viên</th>
						<th>Giới tính</th>
						<th>Chức vụ</th>
						<th>Phòng ban</th>
						<th>Thao tác</th>
					</tr>
				</thead>
				<tbody>
					@foreach($nhanvien as $nv)
					<tr>
						<td>{{ $nv->manv }}</td>
						<td>{{ $nv->tennv }}</td>
						<td>{{ $nv->gioi_tinh }}</td>
						<td>{{ $nv->chuc_vu }}</td>
						<td>{{ $nv->phongban }}</td>
						<td>
							<a id="p{{$nv->manv}}" href="#exampleModal" data-toggle="modal" data-whatever="@mdo"><span class="fa fa-pencil"></span></a>&nbsp;
							<a href="{{ url('/xoanv/'.$nv->manv) }}"><span class="fa fa-trash"></span></a>
							<script type="text/javascript">
							
								$(document).ready(function () {
									$('#p{{ $nv->manv }}').click(function(event) {
										$('#textedit').val('{{$nv->tennv}}');
										$('#manv').val('{{$nv->manv}}');
										$('#chucvu').val('{{ $nv->chuc_vu }}').change();
										$('#phongban').val('{{ $nv->phongban }}').change();
										$("input[name=gioitinh][value={{ $nv->gioi_tinh }}]").prop("checked",true);
									});
								});
							</script>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<br>
			<form action="{{ url('/themnv') }}" method="POST">
				{{ csrf_field() }}
				
				<div class="form-group row">
					<label for="inputEmail3" class="col-sm-2 col-form-label">Tên phòng ban</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="tennv" id="tennv" placeholder="Tên nhân viên">
					</div>
				</div>
				<fieldset class="form-group row">
					<legend class="col-form-legend col-sm-2">Giới tính</legend>
					<div class="col-sm-10">
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="gioi_tinh" id="gridRadios1" value="Nam" checked>
								Nam
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="gioi_tinh" id="gridRadios2" value="Nữ">
								Nữ
							</label>
						</div>
					</div>
				</fieldset>
				<div class="form-group row">
					<label for="inputEmail3" class="col-sm-2 col-form-label">Chức vụ</label>
					<div class="col-sm-10">
						<select name="chucvu" class="form-control form-control-sm">
							@foreach($chucvu as $cv)
								<option value="{{ $cv->tencv }}">{{ $cv->tencv }}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputEmail3" class="col-sm-2 col-form-label">Phòng ban</label>
					<div class="col-sm-10">
						<select name="phongban" class="form-control form-control-sm">
							@foreach($phongban as $pb)
								<option value="{{ $pb->tenphong }}">{{ $pb->tenphong }}</option>
							@endforeach
						</select>
					</div>
				</div>

				
				<div class="form-group row">
					<div class="offset-sm-2 col-sm-10">
						<button type="submit" class="btn btn-primary">Thêm nhân viên</button>
					</div>
				</div>
			</form>
			
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
							<h4 class="modal-title" id="exampleModalLabel">Sửa phòng ban</h4>
						</div>
						<div class="modal-body">
							<form id="form-edit" action="suanv" method="POST">
								{{ csrf_field() }}
								<input type="hidden" name="manv" id="manv">
								<div class="form-group row">

									<label for="recipient-name" class="col-sm-3 form-label">Tên nhân viên</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="textedit" name="tennv">
									</div>
								</div>
								
								<fieldset class="form-group row">
								<legend class="col-form-legend col-sm-3">Giới tính</legend>
								<div class="col-sm-9">
									<div class="form-check">
										<label class="form-check-label">
											<input class="form-check-input" type="radio" name="gioitinh" id="gridRadios1" value="Nam" checked>
											Nam
										</label>
									</div>
									<div class="form-check">
										<label class="form-check-label">
											<input class="form-check-input" type="radio" name="gioitinh" id="gridRadios2" value="Nữ">
											Nữ
										</label>
									</div>
								</div>
							</fieldset>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Chức vụ</label>
								<div class="col-sm-9">
									<select name="chucvu" id="chucvu" class="form-control form-control-sm">
										@foreach($chucvu as $cv)
											<option value="{{ $cv->tencv }}">{{ $cv->tencv }}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Phòng ban</label>
								<div class="col-sm-9">
									<select name="phongban" id="phongban" class="form-control form-control-sm">
										@foreach($phongban as $pb)
											<option value="{{ $pb->tenphong }}">{{ $pb->tenphong }}</option>
										@endforeach
									</select>
								</div>
							</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
							<button type="button" class="btn btn-primary" id="edit-submit">Sửa</button>
							<script type="text/javascript">
								$(document).ready(function($) {
									$('#edit-submit').click(function(event) {
										$('#form-edit').submit();
									});
								});
							</script>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">

							
</script>
@endsection