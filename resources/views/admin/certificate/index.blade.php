<x-admin.layout>
    <a href="{{ route('admin.certificate.create') }}" class="mb-4">
        <button type="button" class="btn btn-primary"
            style="background-color: #b1b493; color: #ffffff; font-weight: bold; border: none; border-radius: 5px; transition: all 0.3s ease;"
            onmouseover="this.style.backgroundColor='#4caf50'; this.style.boxShadow='0 2px 5px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1.05)';"
            onmouseout="this.style.backgroundColor='#b1b493'; this.style.boxShadow='none'; this.style.transform='scale(1)';">Create
            Certificate</button>
    </a>

    <table class="table table-striped table-hover" id="certificates-table" style="width: 850px;">
        <thead>
            <tr>
                <th>No.</th>
                <th>Certificate Name</th>
                <th>Issued By</th>
                <th>Issued At</th>
                <th>File</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach($certificate as $item)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->issued_by }}</td>
                <td>{{ $item->issued_at }}</td>
                <td>
                    @if ($item->file)
                    <a href="{{ asset('storage/certificate/' . $item->file) }}" class="btn btn-info"
                        target="_blank">View Certificate</a>
                    @else
                    <span>No File Uploaded</span>
                    @endif
                </td>
                <td style="display: flex; gap: 10px; justify-content: flex-start;">
                    <a href="{{ route('admin.certificate.show', $item) }}" class="mb-4">
                        <button class="btn btn-warning" type="button" style="align-items: center; gap: 5px;">
                            <i class="material-icons">visibility</i></button>
                    </a>
                    <a href="{{ route('admin.certificate.edit', $item) }}" class="mb-4">
                        <button class="btn btn-primary" type="button" style="align-items: center; gap: 5px;"><i
                                class="material-icons">edit</i></button>
                    </a>
                    <form id="delete-form-{{ $item->id }}" action="{{ route('admin.certificate.destroy', $item->id) }}"
                        method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger" onclick="confirmDelete('{{ $item->id }}')">
                            <i class="material-icons">delete</i>
                        </button>
                    </form>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Tambahkan JS jQuery dan DataTables -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <!-- Sweetalert -->
    <script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + id).submit();
            }
        });
    }
    </script>

    <!-- Inisialisasi DataTables -->
    <script>
    $(document).ready(function() {
        $('#certificates-table').DataTable();
    });
    </script>
</x-admin.layout>