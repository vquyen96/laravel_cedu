@extends('backend.master')
@section('title','Home')
@section('main')


<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 col-sm-6 col-xs-12">
			<div>
				<h3>Sửa lĩnh vực</h3>
			</div>
			<div>
				<form method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="form-group">
					    <label>Tên lĩnh vực</label>
					    <input type="text" class="form-control" name="name" value="{{$item->gr_name}}" placeholder="Tên của bạn" required>
					</div>
					<div class="form-group">
						<label>Ảnh</label>
						<input id="img" type="file" name="img" class="cssInput " onchange="changeImg(this)" style="display: none!important;">
		                <img style="cursor: pointer;" id="avatar" class="cssInput thumbnail tableImgAvatar" width="s%" src="{{asset('lib/storage/app/group/'.$item->gr_img)}}">
					</div>

					{{-- <div class="form-group">
					    <label>Mã Icon </label>
					    <input type="text" class="form-control" name="icon" placeholder="Tên của bạn" >
					</div> --}}
				</div>
				
				
				
			  	<div class="form-group">
			    	
			    	<input type="submit" class="btn btn-success" value="Sửa lại">
			    	<a href="{{asset('admin/group')}}" class="btn btn-warning"> Quay lại</a>
			  	</div>
			  	{{csrf_field()}}
			</form>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12">
			<div>
				<h3>Danh sách lĩnh vực</h3>
			</div>
			<table class="table table-hover">
				<tr>
					
					<th>Icon</th>
					<th>Tên</th>
					<th>Tùy chọn</th>

				</tr>
				@foreach($items as $item)
				<tr>	
					
					<td class="tableAcountImg">
						<img src="{{asset('lib/storage/app/group/'.$item->gr_img)}}">
					</td>
					<td>{{$item->gr_name}}</td>
					<td>
						<a href="{{asset('admin/group/edit/'.$item->gr_id)}}" class="btn btn-primary">Sửa</a>
						<a href="{{asset('admin/group/delete/'.$item->gr_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa ?')" class="btn btn-danger">Xóa</a>
					</td>
				</tr>
				@endforeach
			</table>
			{{$items->links()}}
		</div>
	</div>
		
</div>

@stop