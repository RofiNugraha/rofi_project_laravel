<x-admin.layout>
    <h1 class="h3 mb-0 text-gray-800">Edit Certificate</h1>
    <div class="card">
        <div class="card-body" style="width: 850px;">
            <form action="{{ route('admin.certificate.update', $certificate->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class=" mb-3">
                    <label for="name" class="form-label">Certificate Name</label>
                    <input name="name" class="form-control" id="name" value="{{ old('name', $certificate->name)}} "
                        required>
                    @error('name')
                    <span class="">{{ $name }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="issued_by" class="form-label">Issued By</label>
                    <input name="issued_by" id="issued_by" class="form-control"
                        value="{{ old('issued_by', $certificate->issued_by)}} " required>
                    @error('issued_by')
                    <span class="">{{ $issued_by }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="issued_at" class="form-label">Issued At</label>
                    <input type="date" name="issued_at" id="issued_at" class="form-control"
                        value="{{ old('issued_at', $certificate->issued_at)}} ">
                </div>
                <div class="mb-3">
                    <label for="file" class="form-label">File</label>
                    <input type="file" name="file" id="file" class="form-control"
                        value="{{ old('file', $certificate->file)}} " accept="application/pdf">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control"
                        required>{{ old('description', $certificate->description) }}</textarea>
                    @error('description')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href=""><button type="" class=" btn btn-warning">Back</button></a>
            </form>
        </div>
    </div>
</x-admin.layout>