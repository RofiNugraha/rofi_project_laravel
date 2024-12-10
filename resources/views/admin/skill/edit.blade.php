<x-admin.layout>
    <h2>Edit Skill</h2>
    <div class="card">
        <div class="card-body" style="width: 850px;">
            <form action="{{ route('admin.skill.update', $skill->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class=" mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input name="title" class="form-control" id="title" value="{{ old('title', $skill->title)}} "
                        required>
                    @error('title')
                    <span class="">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="persen" class="form-label">Description</label>
                    <input name="description" id="description" class="form-control"
                        value="{{ old('description', $skill->description)}} " required></input>
                    @error('title')
                    <span class="">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.skill') }}"><button type="" class=" btn btn-warning">Back</button></a>
        </div>
        </form>
    </div>
</x-admin.layout>