<!DOCTYPE html>
<html>
<head>
	<title>Form Aktivasi Pelanggan</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/datepicker.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/datatables.css') }}">
	<style type="text/css">
		.modal-header{
			background-color: #ffd801;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="card mt-3">
		<div class="card-header text-center">
			<h2 class="text-center"><a href="https://indosatooredoo.com/id"></a><img src="{{ asset('logo.png')}}" height="100" width="auto"></h2>
		</div>
		<div class="card-body">
			<h3 class="text-center"><b>Data Aktivasi Pelanggan</b></h3>
			<br>
			<div class="box-header">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal" title="Tambah Pelanggan">
				  + Tambah Aktivasi
				</button>
				<div class="modal fade" id="addModal">
				  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title">Tambah Aktivasi</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form id="form_aktivasi" data-parsley-validate class="form-horizontal" method="post" action="{{ url('/form/store')}}">
				          {{ csrf_field() }}
				          <h4 class="text-center"><b>Data Aktivasi</b></h4>
				          <div class="form-row">
				            <div class="form-group col-md-6">
				              <label for="agent_name">Nama Agen</label>
				              <input type="input" class="form-control" name="agent_name" placeholder="Nama Agen" required>
				            </div>
				            <div class="form-group col-md-6">
				              <label for="agent_email">Email Agen</label>
				              <input type="email" class="form-control" name="agent_email" placeholder="Email Agen" required>
				            </div>
				          </div>
				          <div class="form-row">
				            <div class="form-group col-md-4">
				              <label for="msisdn">MSISDN</label>
				              <input type="input" class="form-control" name="msisdn" placeholder="MSISDN" required>
				            </div>
				            <div class="form-group col-md-4">
				              <label for="periode">Periode</label>
				              <select name="periode" class="form-control" required>
				                <option value="">-- Pilih Periode --</option>
				                <option value="1">1 Bulan</option>
				                <option value="3">3 Bulan</option>
				                <option value="6">6 Bulan</option>
				                <option value="12">12 Bulan</option>
				                <option value="24">24 Bulan</option>
				              </select>
				            </div>
				            <div class="form-group col-md-4">
				              <label for="status">Status</label>
				              <select name="status" class="form-control">
				                <option value="1" selected>Active</option>
				                <option value="0">Not Active</option>
				              </select>
				            </div>
				          </div>
				          <br>
				          <h4 class="text-center"><b>Subscriber</b></h4>
				          <div class="form-row">
				            <div class="form-group col-md-4">
				              <label for="fullname">Nama Lengkap</label>
				              <input type="input" class="form-control" name="fullname" placeholder="Nama Lengkap" required>
				            </div>
				            <div class="form-group col-md-4">
				              <label for="email_pelanggan">Email Pelanggan</label>
				              <input type="email_pelanggan" class="form-control" name="email" placeholder="Email Pelanggan" required>
				            </div>
				            <div class="form-group col-md-4">
				              <label for="birth_date">Tanggal Lahir</label>
				              <input type="text" class="form-control datepicker" name="birth_date" placeholder="Tanggal Lahir" autocomplete="off" required>
				            </div>
				          </div>
				          <div class="form-row">
				            <div class="form-group col-md-12">
				              <label for="alamat_pelanggan">Alamat</label>
				              <textarea name="alamat_pelanggan" class="form-control" rows="2" placeholder="Alamat"></textarea>
				            </div>
				          </div>
				          <br>
				          <h4 class="text-center"><b>Gerai/Store</b></h4>
				          <div class="form-row">
				            <div class="form-group col-md-4">
				              <label for="store_name">Nama Gerai/Store</label>
				              <input type="input" class="form-control" name="store_name" placeholder="Nama Gerai/Store" required>
				            </div>
				            <div class="form-group col-md-4">
				              <label for="region">Region</label>
				              <input type="input" class="form-control" name="region" placeholder="Region" required>
				            </div>
				            <div class="form-group col-md-4">
				              <label for="store_status">Status</label>
				              <select name="store_status" class="form-control" required>
				                <option value="1" selected>Active</option>
				                <option value="0">Not Active</option>
				              </select>
				            </div>
				          </div>
				          <div class="form-row">
				            <div class="form-group col-md-12">
				              <label for="alamat_store">Alamat</label>
				              <textarea name="alamat_store" class="form-control" rows="2" placeholder="Alamat" required></textarea>
				            </div>
				          </div>
				          <br>
				          <h4 class="text-center"><b>Package Plan</b></h4>
				          <div class="form-row">
				            <div class="form-group col-md-6">
				              <label for="plan_name">Plan</label>
				              <select name="plan_name" class="form-control" required>
				                <option value="">-- Pilih Plan --</option>
				                <option value="Super Plan 100">Super Plan 100</option>
				                <option value="Super Plan 150">Super Plan 150</option>
				                <option value="Super Plan 200">Super Plan 200</option>
				                <option value="Super Plan 300">Super Plan 300</option>
				                <option value="Super Plan 400">Super Plan 400</option>
				                <option value="Super Plan 600">Super Plan 600</option>
				                <option value="Super Plan 900">Super Plan 900</option>
				                <option value="Super Plan 1200">Super Plan 1200</option>
				              </select>
				            </div>
				            <div class="form-group col-md-6">
				              <label for="price">Harga (Rp)</label>
				              <input type="number" step="any" class="form-control" name="price" placeholder="Harga (Rp)" required>
				            </div>
				          </div>
				          <div class="modal-footer">
				            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				            <input type="submit" value="Save" class="btn btn-success">
				          </div>
				        </form>
				      </div>
				    </div>
				  </div>
				</div>
				|
				<button type="button" class="btn btn-primary margin" data-toggle="modal" data-target="#reportModal" title="Report">Report</button></a>
				@include('reportModal')
			</div>
			<br>
			<div class="box-body">
				@include('dtAktivasi')
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/datepicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/jquerydt.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/datatables.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/sweetalert.min.js') }}"></script>
@include('sweet::alert')
<script>
    $('.datepicker').datepicker({
        uiLibrary: 'bootstrap4',
        format: 'dd/mm/yyyy',
        autoclose: true,
      	todayHighlight: true,
    });
</script>
<script>
	$(document).ready(function() {
	    $('#dt_aktivasi').DataTable({
	    	'autoWidth'   : true
	    });
	} );
</script>
</body>
</html>