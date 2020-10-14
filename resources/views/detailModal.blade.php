<div class="modal fade" id="detailModal_{{$a->id}}">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Detail Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form_aktivasi" data-parsley-validate class="form-horizontal">
          <h4 class="text-center"><b>Data Aktivasi</b></h4>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="agent_name">Nama Agen</label>
              <input type="input" class="form-control" name="agent_name" value="{{ $a->agent_name }}" readonly>
            </div>
            <div class="form-group col-md-6">
              <label for="agent_email">Email Agen</label>
              <input type="email" class="form-control" name="agent_email" value="{{ $a->agent_email }}" readonly>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="msisdn">MSISDN</label>
              <input type="input" class="form-control" name="msisdn" value="{{ $a->msisdn }}" readonly>
            </div>
            <div class="form-group col-md-4">
              <label for="periode">Periode</label>
              <input type="input" class="form-control" name="periode" value="{{ $a->periode }}" readonly>
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
              <input type="input" class="form-control" name="status" value="{{ $s }}" readonly>
            </div>
          </div>
          <br>
          <h4 class="text-center"><b>Subscriber</b></h4>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="fullname">Nama Lengkap</label>
              <input type="input" class="form-control" name="fullname" value="{{ $a->subscribers->fullname }}" readonly>
            </div>
            <div class="form-group col-md-4">
              <label for="email_pelanggan">Email Pelanggan</label>
              <input type="email_pelanggan" class="form-control" name="email" value="{{ $a->subscribers->email }}" readonly>
            </div>
            <div class="form-group col-md-4">
              <label for="birth_date">Tanggal Lahir</label>
              <input type="text" class="form-control datepicker" name="birth_date" value="{{ $a->subscribers->birth_date }}" readonly>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="alamat_pelanggan">Alamat</label>
              <textarea name="alamat_pelanggan" class="form-control" rows="2" placeholder="{{ $a->subscribers->address }}" readonly></textarea>
            </div>
          </div>
          <br>
          <h4 class="text-center"><b>Gerai/Store</b></h4>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="store_name">Nama Gerai/Store</label>
              <input type="input" class="form-control" name="store_name" value="{{ $a->stores->store_name }}" readonly>
            </div>
            <div class="form-group col-md-4">
              <label for="region">Region</label>
              <input type="input" class="form-control" name="region" value="{{ $a->stores->region }}" readonly>
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
              <input type="input" class="form-control" name="store_status" value="{{ $ss }}" readonly>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="alamat_store">Alamat</label>
              <textarea name="alamat_store" class="form-control" rows="2" placeholder="{{ $a->stores->address }}" readonly></textarea>
            </div>
          </div>
          <br>
          <h4 class="text-center"><b>Package Plan</b></h4>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="plan_name">Plan</label>
              <input type="input" class="form-control" name="plan_name" value="{{ $a->plans->plan_name }}" readonly>
            </div>
            <div class="form-group col-md-6">
              <label for="price">Harga (Rp)</label>
              <input type="input" class="form-control" name="price" value="{{ $a->plans->price }}" readonly>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>