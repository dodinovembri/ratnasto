@extends('layouts.backend')
@section('content')

@include('backend.components.sidebar')

<div class="content">
	@include('backend.components.header')
	@include('backend.components.helper')
	<div class="content-header">
		<div>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Products List</li>
				</ol>
			</nav>
			<h4 class="content-title content-title-xs">Products List</h4>
		</div>
	</div><!-- content-header -->
	<div class="content-body">
		<div class="component no-code">
			<div class="card">
				<div class="card-body">
					<div class="component">
						<a href="{{ url('product/create') }}">
							<button class="btn btn-primary"><i data-feather="plus"></i> Add New</button>
						</a><br><br>
						@if(session()->has('success'))
							<div class="alert alert-success alert-dismissible mg-b-0 fade show" role="alert">
								<i class="icon fa fa-close"></i> {{ session()->get('success') }}
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div><br>
						@endif
						<div class="table table-responsive">
							<table id="example1" class="table">
								<thead>
									<tr>
										<th class="wd-5p">No</th>
										<th class="wd-20p">Product Code</th>
										<th class="wd-20p">Product Name</th>
										<th class="wd-25p">Status</th>
										<th class="wd-10p">Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 0;
									foreach ($products as $key => $value) {
										$no++; ?>
										<tr>
											<td>{{ $no }}</td>
											<td>{{ $value->product_code }}</td>
											<td>{{ $value->product_name }}</td>
											<td>{{ CheckStatus($value->status) }}</td>
											<td>
												<a href=""><i class="fa fa-eye"></i></a>
												<a href=""><i class="fa fa-edit" style="margin-left: 8px"></i></a>
												<a href="#modal1" data-toggle="modal"><i class="fa fa-trash" style="margin-left: 8px"></i></a>
											</td>
										</tr>
										<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h6 class="modal-title" id="exampleModalLabel">Konfirmasi Delete</h6>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true"><i data-feather="x"></i></span>
														</button>
													</div>
													<div class="modal-body">
														<p class="mg-b-0">Are you sure want to delete this record? </p>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary rounded-5" data-dismiss="modal">Cancel</button>
														<a href=""><button type="button" class="btn btn-dark rounded-5">Delete</button></a>
													</div>
												</div>
											</div>
										</div>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div><!-- component-section -->
				</div>
			</div>
		</div>
	</div><!-- content-body -->
</div>

@endsection