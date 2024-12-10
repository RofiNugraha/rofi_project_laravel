<x-admin.layout>
    <a href="{{ route('admin.skill.create') }}" class="mb-4">
        <button type="button" class="btn btn-primary"
            style="background-color: #b1b493; color: #ffffff; font-weight: bold; border: none; border-radius: 5px; transition: all 0.3s ease;"
            onmouseover="this.style.backgroundColor='#4caf50'; this.style.boxShadow='0 2px 5px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1.05)';"
            onmouseout="this.style.backgroundColor='#b1b493'; this.style.boxShadow='none'; this.style.transform='scale(1)';">Create
            Skill</button>
    </a>

    <table class="table table-striped table-hover" id="skills-table" style="width: 850px;">
        <thead>
            <tr>
                <th>No.</th>
                <th>Skill Title</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach($skill as $item)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->description }}</td>
                <td style="display: flex; gap: 10px; justify-content: flex-start;">
                    <a href="{{ route('admin.skill.show', $item) }}" class="mb-4">
                        <button class="btn btn-warning" type="button" style="align-items: center; gap: 5px;">
                            <i class="material-icons">visibility</i></button>
                    </a>
                    <a href="{{ route('admin.skill.edit', $item) }}" class="mb-4">
                        <button class="btn btn-primary" type="button" style="align-items: center; gap: 5px;"><i
                                class="material-icons">edit</i></button>
                    </a>
                    <form action="{{ route('admin.skill.destroy', $item->id) }}" method="post"
                        onsubmit="return confirm('Apakah kamu yakin?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" style="align-items: center; gap: 5px;"><i
                                class="material-icons">delete</i></button>
                    </form>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Tambahkan JS jQuery dan DataTables -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <!-- Inisialisasi DataTables -->
    <script>
    $(document).ready(function() {
        $('#skills-table').DataTable();
    });
    </script>
</x-admin.layout>