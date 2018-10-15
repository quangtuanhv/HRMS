@extends('layouts.Master')

@section('main')

<div class="content-area p-y-1">
	<div class="container-fluid">
		
		
		<div class="box box-block bg-white">
			<h5>Danh sách chức vụ</h5>
			<table class="table table-stripped table-bordered table-hover">
				<thead>
					<tr>
						<th>Mã chức vụ</th>
						<th>Tên chức vụ</th>
						<th>Thao tác</th>
					</tr>
				</thead>
				<tbody>
					@foreach($chucvu as $cv)
					<tr>
						<td>{{ $cv->macv }}</td>
						<td>{{ $cv->tencv }}</td>
						<td>
							<a id="p{{$cv->macv}}" href="#exampleModal" data-toggle="modal" data-whatever="@mdo"><span class="fa fa-pencil"></span></a>&nbsp;
							<a href="{{ url('/xoacv/'.$cv->macv) }}"><span class="fa fa-trash"></span></a>
							<script type="text/javascript">
							
								$(document).ready(function () {
									$('#p{{ $cv->macv }}').click(function(event) {
										$('#textedit').val('{{$cv->tencv}}');
										$('#macv').val('{{$cv->macv}}');
									});
								});
							</script>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<br>
			<form action="{{ url('/themcv') }}" method="POST">
				{{ csrf_field() }}
				<div class="form-group row">
					<label for="inputEmail3" class="col-sm-2 col-form-label">Tên chức vụ</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="tencv" id="tencv" placeholder="Tên chức vụ">
					</div>
				</div>
				{{-- <div class="form-group row">
					<label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
					</div>
				</div>
				<fieldset class="form-group row">
					<legend class="col-form-legend col-sm-2">Radios</legend>
					<div class="col-sm-10">
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
								Option one is this and that&mdash;be sure to include why it's great
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
								Option two can be something else and selecting it will deselect option one
							</label>
						</div>
						<div class="form-check disabled">
							<label class="form-check-label">
								<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
								Option three is disabled
							</label>
						</div>
					</div>
				</fieldset>
				<div class="form-group row">
					<label class="col-sm-2">Checkbox</label>
					<div class="col-sm-10">
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox"> Check me out
							</label>
						</div>
					</div>
				</div> --}}
				<div class="form-group row">
					<div class="offset-sm-2 col-sm-10">
						<button type="submit" class="btn btn-primary">Thêm chức vụ</button>
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
							<h4 class="modal-title" id="exampleModalLabel">Sửa chức vụ</h4>
						</div>
						<div class="modal-body">
							<form id="form-edit" action="suacv" method="POST">
							{{ csrf_field() }}
							<input type="hidden" name="macv" id="macv">
								<div class="form-group">
									<label for="recipient-name" class="form-control-label">Tên chức vụ</label>
									<input type="text" class="form-control" id="textedit" name="tencv">
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
