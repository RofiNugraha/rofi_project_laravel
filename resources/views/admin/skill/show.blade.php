<x-admin.layout>
    <div class="container mt-4">
        <h2>Detail Skill</h2>
        <div class="mb-4">
            <a href="{{ route('admin.skill') }}" class="btn btn-primary">Back</a>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Title:</h5>
                <p class="card-text">{{ $skill->title }}</p>

                <h5 class="card-title">Description:</h5>
                <p class="card-text">{{ $skill->description }}</p>
            </div>
        </div>
    </div>
</x-admin.layout>