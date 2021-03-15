@extends('layouts.backend')

@section('content')

@include('backend.components.sidebar')

<div class="content">
	@include('backend.components.header')
	<div class="content-header">
		<div>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="">Home</a></li>
					<li class="breadcrumb-item"><a href="{{ url('product') }}">Product List</a></li>
					<li class="breadcrumb-item active" aria-current="page">Product Create</li>
				</ol>
			</nav>
			<h4 class="content-title content-title-xs">Product Create</h4>
		</div>
	</div><!-- content-header -->
	<div class="content-body">
		<div class="row row-xs">
			<div class="col-md-4">
				<ul class="list-group list-group-settings">
					<li class="list-group-item list-group-item-action">
						<a href="#paneProfile" data-toggle="tab" class="media active">
							<i data-feather="user"></i>
							<div class="media-body">
								<h6>Product Information</h6>
								<span>About product information</span>
							</div>
						</a>
					</li>
				</ul>
			</div><!-- col -->
			<div class="col-md-8">
				<div class="card card-body pd-sm-40 pd-md-30 pd-xl-y-35 pd-xl-x-40">
					<div class="tab-content">
						<form action="{{ url('product/store') }}" method="POST" enctype="multipart/form-data">
							@csrf
							<div id="paneProfile" class="tab-pane active show">
								<h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Product Information</h6>
								<hr>
								<div class="form-settings">
									<div class="form-group">
										<label class="form-label">Product Code</label>
										<input type="text" class="form-control" name="product_code" required>
										<div class="tx-11 tx-sans tx-color-04 mg-t-5">Your name may appear around here where you are mentioned. You can change or remove it at any time.</div>
									</div><!-- form-group -->

									<div class="form-group">
										<label class="form-label">Product Name</label>
										<input type="text" class="form-control" name="product_name" required>
										<div class="tx-11 tx-sans tx-color-04 mg-t-5">Your name may appear around here where you are mentioned. You can change or remove it at any time.</div>
									</div><!-- form-group -->

									<div class="form-group">
										<label class="form-label">Product Description</label>
										<textarea class="form-control" rows="5" name="desription"></textarea>
									</div><!-- form-group -->

									<div class="form-group tx-13 tx-color-04">
										All of the fields on this page are optional and can be deleted at any time, and by filling them out, you're giving us consent to share this data wherever your user profile appears.
									</div>

									<hr class="op-0">

									<button class="btn btn-brand-02" type="submit">Save Product</button>
									<button class="btn btn-white mg-l-2">Reset Changes</button>
								</div>
							</div><!-- tab-pane -->
						</form>
					</div><!-- tab-content -->
				</div><!-- card -->
			</div><!-- col -->
		</div><!-- row -->
	</div><!-- content-body -->
</div>
</div>

@endsection