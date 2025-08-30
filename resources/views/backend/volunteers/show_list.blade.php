@extends('backend.layout.layout')


@push('css')
<style>
    /* Make the search box full width */
.dataTables_filter {
    text-align: right;
    width: 100%;
}

.dataTables_filter input {
    width: 100%;
    padding: 0.5rem;
    margin: 0;
    box-sizing: border-box;
}

/* Make pagination controls full width */
.pagination {
    display: flex;
    justify-content: end;
}

.dataTables_paginate .paginate_button {
    margin: 0 2px;
}


.dataTables_processing {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: rgba(255, 255, 255, 0.8);
    padding: 10px;
    border-radius: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Optional: If you want to center the pagination buttons on mobile devices */
/* @media (max-width: 768px) {
    .dataTables_paginate {
        text-align: center;
    }
} */

</style>

@endpush

@section('content')
<div class="content-wrapper">
    <div class="container pt-5">
        <div class="card">
            <h3 class="card-header p-3">Volunteer List</h3>
            <div class="card-body">
                <table class="table table-bordered data_table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>DOB</th>
                            <th>Phone</th>
                            <th>Area</th>
                            <th>NID No</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    $(function () {
        var table = $('.data_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('volunteer.acceptace.list') }}",
            columns: [
                {
                    data: null,
                    render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {data: 'name', name: 'name'},
                {data: 'type', name: 'type'},
                {data: 'dob', name: 'dob'},
                {data: 'phone', name: 'phone'},
                {data: 'area', name: 'area'},
                {data: 'nid', name: 'nid'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
    });
</script>
@endpush
