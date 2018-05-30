@extends('backend.master')
@section('title','Home')
@section('main')



<div>
	<div>
		<h3 class="">Thêm mới Banner</h3>
	</div>
	<div>
		<form method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6 col-sm-8 col-xs-12">
					<div class="form-group ">
					    <label>Tiêu đề</label>
					    <input type="text" class="form-control" name="ban_name" placeholder="Tiêu đề" required>
					</div>
					<div class="form-group">
						<label>Ảnh</label>
						<input id="img" type="file" name="img" class="cssInput " onchange="changeImg(this)" style="display: none!important;">
		                <img style="cursor: pointer;" id="avatar" class="cssInput thumbnail" width="100%" src="img/banner.png">
					</div>
				</div>
			</div>
			
		  	<div class="form-group">
		    	
		    	<input type="submit" class="btn btn-success" value="Thêm mới">
		    	<a href="{{asset('admin/banner')}}" class="btn btn-warning"> Quay lại</a>
		  	</div>
		  	{{csrf_field()}}
		</form>
	</div>
</div>

@stop