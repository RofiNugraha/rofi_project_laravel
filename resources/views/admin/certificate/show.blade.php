<x-admin.layout>
    <div class="container mt-4">
        <h2>Detail Certificate</h2>
        <div class="mb-4">
            <a href="{{ route('admin.certificate') }}" class="btn btn-primary">Back</a>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Certificate Name:</h5>
                <p class="card-text">{{ $certificate->name }}</p>

                <h5 class="card-title">Issued By:</h5>
                <p class="card-text">{{ $certificate->issued_by }}</p>

                <h5 class="card-title">Issued At:</h5>
                <p class="card-text">{{ $certificate->issued_at }}</p>

                <h5 class="card-title">Description:</h5>
                <p class="card-text">{{ $certificate->description }}</p>
            </div>
        </div>
    </div>
</x-admin.layout>