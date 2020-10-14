<div class="modal fade" id="reportModal">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Report</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form_report" data-parsley-validate class="form-horizontal" method="post" action="{{ url('/report')}}">
          {{ csrf_field() }}
          <h4 class="text-center"><b>Filter Data</b></h4>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="plan_name">Plan</label>
              <select name="plan_name" class="form-control">
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
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="periode">Periode</label>
              <select name="periode" class="form-control">
                <option value="">-- Pilih Periode --</option>
                <option value="1">1 Bulan</option>
                <option value="3">3 Bulan</option>
                <option value="6">6 Bulan</option>
                <option value="12">12 Bulan</option>
                <option value="24">24 Bulan</option>
              </select>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit" value="Print" class="btn btn-success">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>