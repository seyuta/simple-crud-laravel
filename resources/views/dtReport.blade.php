<!DOCTYPE html>
<html>
<head>
	<title>Form Aktivasi Pelanggan</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/datepicker.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/datatables.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/dtButtonsB4.css') }}">
	<style type="text/css">
		.modal-header{
			background-color: #ffd801;
		}
	</style>
</head>
<body>
<div>
	<div class="card mt-3">
		<div class="card-header text-center">
			<h2 class="text-center"><a href="https://indosatooredoo.com/id"></a><img src="{{ asset('logo.png')}}" height="100" width="auto"></h2>
		</div>
		<div class="card-body">
			<h3 class="text-center"><b>Report Aktivasi Pelanggan</b></h3>
			<br/>
			<div class="box-header">
				
			</div>
			<br>
			<div class="box-body">
				<table id="dt_report" class="table table-striped table-bordered" style="width:100%">
			        <thead>
			            <tr>
			                <th>No</th>
			                <th>MSISDN</th>
			                <th>Nama Agen</th>
			                <th>Email Agen</th>
			                <th>Nama Pelanggan</th>
			                <th>Email Pelanggan</th>
			                <th>Nama Store</th>
			                <th>Region</th>
			                <th>Package Plan</th>
			                <th>Harga</th>
			                <th>Periode</th>
			            </tr>
			        </thead>
			        <tbody>
			            @php
			                $no = 1;
			            @endphp
			            @foreach($activations as $a)
			            <tr>
			                <td>{{ $no++ }}</td>
			                <td>{{ $a->msisdn }}</td>
			                <td>{{ $a->agent_name }}</td>
			                <td>{{ $a->agent_email }}</td>
			                <td>{{ $a->subscribers->fullname }}</td>
			                <td>{{ $a->subscribers->email }}</td>
			                <td>{{ $a->stores->store_name }}</td>
			                <td>{{ $a->stores->region }}</td>
			                <td>{{ $a->plans->plan_name }}</td>
			                <td>Rp. {{ $a->plans->price }}</td>
			                <td>{{ $a->periode }} Bulan</td>
			            </tr>
			            @endforeach
			        </tbody>
			    </table>
			</div>
			<a href="{{ url('/')}}" class="btn btn-secondary"><- Back</a>
		</div>
	</div>
</div>
<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/jquerydt.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/datatables.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/dtButtons.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/dtPrintButtons.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/dtButtonsB4.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/dtButtonsHtml5.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/dtJszip.js') }}"></script>
<script>
	$(document).ready(function() {
	    $('#dt_report').DataTable( {
	    	autoWidth: true,
	        lengthChange: false,
	        dom: 'Bfrtip',
	        buttons: [
	            'copy', 'excel', 'print'
	        ]
	    });
	});
</script>
</body>
</html>