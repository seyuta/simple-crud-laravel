<table id="dt_aktivasi" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Agen</th>
                <th>Nama Pelanggan</th>
                <th>Nama Store</th>
                <th>Package Plan</th>
                <th>Periode</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach($activations as $a)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $a->agent_name }}</td>
                <td>{{ $a->subscribers->fullname }}</td>
                <td>{{ $a->stores->store_name }}</td>
                <td>{{ $a->plans->plan_name }}</td>
                <td>{{ $a->periode }} Bulan</td>
                <td>
                    <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#detailModal_{{$a->id}}" title="Detail Data">Detail</button>
                    @include('detailModal')
                    |
                    <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editModal_{{$a->id}}" title="Edit Data">Edit</button>
                    @include('editModal')
                    |
                    <a href="{{ url('/delete')}}/{{$a->id}}" class="btn btn-sm btn-danger" title="Hapus Data">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>