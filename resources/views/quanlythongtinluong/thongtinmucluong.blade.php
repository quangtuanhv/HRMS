@extends('layouts.Master')

@section('main')
<div class="col-md-10 mt-5 ml-auto mr-auto">
<div class="card">
	<div class="card-header">
        <h4>Thông tin chi tiết mức lương của <a href="{{route('thongtinnguoidung',$nhansu->id)}}" style="color:red;"> {{$nhansu->ho.' '.$nhansu->ten}}</a></h4>
	</div>
	<div class="card-body">
	  <div class="table-responsive">
		<table class="table">
		  <thead>
			<tr>
			  <th>Mã</th>
			  <th>Mức lương cơ bản</th>
			  <th>Hệ số lương</th>
			  <th>Lương cơ bản</th>
			  <th>Ngày áp dụng</th>
			  <th>Trạng thái</th>
			</tr>
		  </thead>
		  <tbody>
				@foreach($ttl as $cv)
			<tr>
			  <th scope="row">{{ $cv->id }}</th>
			  <td>{{ $cv->luongcoban['luong_co_ban'] }}</td>
				<td>{{ $cv->hesoluong['HSL'] }}</td>
				<td>{{ $cv->tongluong }}</td>
			  <td>{{ $cv->ngay }}</td>
				@if($cv->ap_dung)
				<td>Đang áp dụng</td>
				@else
				<td>Không áp dụng (<a href="{{url('/ap-dung-luong',[$nhansu->id, $cv->id])}}">Áp dụng</a>)</td>
				@endif
			</tr>
			@endforeach
		  </tbody>
		</table>
	  </div>
	</div>
	<div class="card-header">
		<form action="{{url('tao-moi-thong-tin-luong',$nhansu->id)}}" method="POST">
			{{ csrf_field() }}
			<div class="form-group row">
				<label class="col-sm-3 col-form-label">Mức lương cơ bản</label>
				<div class="col-sm-9">
					<select name="muclcb" class="form-control">
							@foreach($lcb as $lcb)
							<option value="{{$lcb->id}}">{{$lcb->luong_co_ban}}</option>
							@endforeach
					</select>
        </div>
				<label class="col-sm-3 col-form-label">Hệ số lương</label>                
				<div class="col-sm-9">
					<select name="hsl" class="form-control">
							@foreach($hsl as $hsl)
							<option value="{{$hsl->id}}">{{$hsl->HSL}}</option>
							@endforeach
					</select>
        </div>
				<label class="col-sm-3 col-form-label">Ngày áp dụng</label>                
				<div class="col-sm-9">
  					<input  class="form-control" type="date" name="ngayapdung" >
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
					<button type="submit" class="btn btn-primary">Kích hoạt lương mới	</button>
				</div>
			</div>
		</form>
	</div>

</div>
</div>
@endsection

