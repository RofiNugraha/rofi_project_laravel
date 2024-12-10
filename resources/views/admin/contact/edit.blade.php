<x-admin.layout>
    <h1 class="h3 mb-0 text-gray-800">Edit Contact</h1>
    <div class="card">
        <div class="card-body" style="width: 850px;">
            <form action="{{ route('admin.contact.update', $contact->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class=" mb-3">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $contact->name)}}"
                        required>
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class=" mb-3">
                    <label>Email:</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email', $contact->email)}}"
                        required>
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone:</label>
                    <input type="text" name="phone" class="form-control" id="phone"
                        value="{{ old('phone', $contact->phone)}}">
                    @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label>Sosial Media:</label>
                    <input type="sosial_media" name="sosial_media" class="form-control"
                        value="{{ old('sosial_media', $contact->sosial_media)}}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.contact') }}"><button type="" class=" btn btn-warning">Back</button></a>
            </form>
        </div>
    </div>
</x-admin.layout>