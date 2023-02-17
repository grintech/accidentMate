@extends('backend.layouts.master')
@section('content')
 
				
				<div class="row">
					<div class="col-xl-6 mx-auto">
						
						<div class="card">
							<div class="card-body p-4">
								<h5 class="mb-4">Vertical Form</h5>
								<form class="row g-3" action="{{route('profession_update',$profession->id)}}" method="post">
									@csrf
									<div class="col-md-12">
										<label for="input1" class="form-label">Name</label>
										<input type="text" class="form-control" id="input1"  name="name"  value="{{$profession->name}}">
										@error('name')
									   <span class="text-danger">{{$message}}</span>
									@enderror
									</div>
									
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="submit" class="btn btn-primary px-4">Submit</button>
											
										</div>
									</div>
								</form>
							</div>
						</div>

						


					


					</div>
				</div>
				<!--end row-->

@endsection