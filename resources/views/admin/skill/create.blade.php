<x-admin.layout>
    <h1 class="h3 mb-4 text-gray-800">Create Skill</h1>
    <div class="card">
        <div class="card-body" style="width: 850px;">
            <form action="{{ route('admin.skill.store')}}" method="post">
                @csrf
                <div class=" mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input name="title" class="form-control" id="title">
                </div>
                <div class="mb-3">
                    <label for="persen" class="form-label">Description</label>
                    <textarea name="description" id="title" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href=""><button type="" class=" btn btn-warning">Back</button></a>
            </form>
        </div>
    </div>

</x-admin.layout>