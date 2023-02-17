@extends('backend.layouts.master')
@section('content')

<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Dashboard</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Profession List</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal"><i class="fadeIn animated bx bx-comment-add"></i></button>
							
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">Profession List</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>#</th>
										<th>name</th>
										<th>Created Date </th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($pofession as $pro)
									<tr>
										<td>{{$loop->iteration}}</td>
										<td>{{$pro->name}}</td>
										<td>{{$pro->created_at}}</td>
										<td style="display: flex;">
											<a style="margin-right: 5px;" class="btn btn-warning" href="{{route('profession_edit',$pro->id)}}"><i class="fadeIn animated bx bx-message-square-edit"></i></a>
											<form action="{{route('profession_delete',$pro->id)}}" method="get"><button class="btn btn-danger show_confirm"  href="#"><i class="fadeIn animated bx bx-comment-x"></i></a></form>
										</td>
										
									</tr>
									
									

									@endforeach
								</tbody>
								
							</table>
						</div>
					</div>
				</div>


<!-- Modal -->
<div class="modal fade" id="exampleVerticallycenteredModal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Modal title</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="{{route('profession_save')}}" method="post">
			<div class="modal-body">
				@csrf
				<label>Profession Name</label>
				<input class="form-control" type="text" name="name" placeholder="Name">
				@error('name')
				   <span class="text-danger">{{$message}}</span>
				@enderror
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save </button>
			</div>
			</form>
		</div>
	</div>
</div>






<script type="text/javascript">
 
     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });
  
</script>
@endsection