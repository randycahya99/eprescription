@extends('layout.main')

@section('title','E-Prescription')

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
									<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Obat & Alkes</div>
									<div class="mb-0 font-weight-bold text-gray-800">{{$obat}} Jenis</div>
								</div>
								<div class="col-auto">
									<i class="fas fa-box-open fa-2x text-gray-300"></i>
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
									<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Resep Racikan</div>
									<div class="mb-0 font-weight-bold text-gray-800">{{$resepRacikan}} Resep</div>
								</div>
								<div class="col-auto">
									<i class="fas fa-box-open fa-2x text-gray-300"></i>
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
									<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Resep Non-Racikan</div>
									<div class="mb-0 font-weight-bold text-gray-800">{{$resepNonRacikan}} Resep</div>
								</div>
								<div class="col-auto">
									<i class="fas fa-box-open fa-2x text-gray-300"></i>
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
									<div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Jumlah Signa</div>
									<div class="mb-0 font-weight-bold text-gray-800">{{$signa}} Aturan Pakai</div>
								</div>
								<div class="col-auto">
									<i class="fas fa-box-open fa-2x text-gray-300"></i>
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