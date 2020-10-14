<div class="modal fade" id="editModal_{{$a->id}}">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form_aktivasi" data-parsley-validate class="form-horizontal" method="post" action="{{ url('/edit')}}/{{$a->id}}">
          {{ csrf_field() }}
          {{ method_field('PUT') }}
          <h4 class="text-center"><b>Data Aktivasi</b></h4>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="agent_name">Nama Agen</label>
              <input type="input" class="form-control" name="agent_name" value="{{ $a->agent_name }}">
            </div>
            <div class="form-group col-md-6">
              <label for="agent_email">Email Agen</label>
              <input type="email" class="form-control" name="agent_email" value="{{ $a->agent_email }}">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="msisdn">MSISDN</label>
              <input type="input" class="form-control" name="msisdn" value="{{ $a->msisdn }}">
            </div>
            <div class="form-group col-md-4">
              <label for="periode">Periode</label>
              <select name="periode" class="form-control">
                <option value="{{ $a->periode }}">{{ $a->periode }} Bulan</option>
                <option value="1">1 Bulan</option>
                <option value="3">3 Bulan</option>
                <option value="6">6 Bulan</option>
                <option value="12">12 Bulan</option>
                <option value="24">24 Bulan</option>
              </select>
            </div>
            <div class="form-group col-md-4">
              <label for="status">Status</label>
              @php
              if( $a->status == 1){
                $s = 'Active';
              }
              elseif ( $a->status == 0){
                $s = 'Not Active';
              }
              @endphp
              <select name="status" class="form-control">
                <option value="{{ $a->status }}">{{ $s }}</option>
                <option value="1">Active</option>
                <option value="0">Not Active</option>
              </select>
            </div>
          </div>
          <br>
          <h4 class="text-center"><b>Subscriber</b></h4>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="fullname">Nama Lengkap</label>
              <input type="input" class="form-control" name="fullname" value="{{ $a->subscribers->fullname }}">
            </div>
            <div class="form-group col-md-4">
              <label for="email_pelanggan">Email Pelanggan</label>
              <input type="email_pelanggan" class="form-control" name="email" value="{{ $a->subscribers->email }}">
            </div>
            <div class="form-group col-md-4">
              <label for="birth_date">Tanggal Lahir</label>
              <input type="text" class="form-control datepicker" name="birth_date" value="{{ $a->subscribers->birth_date }}" autocomplete="off">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="alamat_pelanggan">Alamat</label>
              <textarea name="alamat_pelanggan" class="form-control" rows="2">{{ $a->subscribers->address }}</textarea>
            </div>
          </div>
          <br>
          <h4 class="text-center"><b>Gerai/Store</b></h4>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="store_name">Nama Gerai/Store</label>
              <input type="input" class="form-control" name="store_name" value="{{ $a->stores->store_name }}">
            </div>
            <div class="form-group col-md-4">
              <label for="region">Region</label>
              <input type="input" class="form-control" name="region" value="{{ $a->stores->region }}">
            </div>
            <div class="form-group col-md-4">
              <label for="store_status">Status</label>
              @php
              if( $a->stores->status == 1){
                $ss = 'Active';
              }
              else if ( $a->stores->status == 0){
                $ss = 'Not Active';
              };
              @endphp
              <select name="store_status" class="form-control">
                <option value="{{ $a->stores->status }}">{{ $ss }}</option>
                <option value="1">Active</option>
                <option value="0">Not Active</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="alamat_store">Alamat</label>
              <textarea name="alamat_store" class="form-control" rows="2">{{ $a->stores->address }}</textarea>
            </div>
          </div>
          <br>
          <h4 class="text-center"><b>Package Plan</b></h4>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="plan_name">Plan</label>
              <select name="plan_name" class="form-control">
                <option value="{{ $a->plans->plan_name }}">{{ $a->plans->plan_name }}</option>
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
              <input type="input" class="form-control" name="price" value="{{ $a->plans->price }}">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit" value="Update" class="btn btn-warning">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>