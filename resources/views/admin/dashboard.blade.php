@extends('layout.main')

@section('title','Dashboard')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
		{{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Buat order</a> --}}
	</div>

	<div class="row">
		
		<div class="col-md-12">
			
			<div class="row">
				
				<div class="col-xl-4 col-md-6 mb-4">
					<div class="card border-left-primary shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Customer</div>
									{{-- <div class="mb-0 font-weight-bold text-gray-800">{{$customer}} Orang</div> --}}
								</div>
								<div class="col-auto">
									<i class="fas fa-users fa-2x text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-md-6 mb-4">
					<div class="card border-left-success shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Customer Approve</div>
									{{-- <div class="mb-0 font-weight-bold text-gray-800">{{$approve}} Orang</div> --}}
								</div>
								<div class="col-auto">
									<i class="fas fa-users fa-2x text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-md-6 mb-4">
					<div class="card border-left-warning shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Customer Valid</div>
									{{-- <div class="mb-0 font-weight-bold text-gray-800">{{$valid}} Orang</div> --}}
								</div>
								<div class="col-auto">
									<i class="fas fa-users fa-2x text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="row">
				
				<div class="col-xl-4 col-md-6 mb-4">
					<div class="card border-left-danger shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Customer In Process</div>
									{{-- <div class="mb-0 font-weight-bold text-gray-800">{{$process}} Orang</div> --}}
								</div>
								<div class="col-auto">
									<i class="fas fa-users fa-2x text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-md-6 mb-4">
					<div class="card border-left-secondary shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Customer Cancel</div>
									{{-- <div class="mb-0 font-weight-bold text-gray-800">{{$cancel}} Orang</div> --}}
								</div>
								<div class="col-auto">
									<i class="fas fa-users fa-2x text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-md-6 mb-4">
					<div class="card border-left-dark shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Customer Reject</div>
									{{-- <div class="mb-0 font-weight-bold text-gray-800">{{$reject}} Orang</div> --}}
								</div>
								<div class="col-auto">
									<i class="fas fa-users fa-2x text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			
		</div>
		
	</div>
	<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection