@extends('userback.layouts.adminmaster')
@section('contant')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Add a Service</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('addservice')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="serviceName" class="form-label">Service Name:</label>
                            <input type="text" id="serviceName" name="title" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description:</label>
                            <textarea id="description" name="description" rows="4" class="form-control" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category:</label>
                            <select id="category" name="user_id" class="form-select" required>
                                <option value="">Select a category</option>
                                @foreach ($user as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price (USD):</label>
                            <input type="number" id="price" name="price" step="0.01" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="duration" class="form-label">Duration (in hours):</label>
                            <input type="number" id="duration" name="duration" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Upload Image (optional):</label>
                            <input type="file" id="image" name="image" class="form-control" accept="image/*">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Add Service</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
