@extends('userback.layouts.adminmaster')
@section('contant')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Service</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Edit Service</h2>
    <form action="#" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <!-- Title -->
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter service title" value="{{old($service->title)}}">
        </div>

        <!-- Image -->
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*" value="{{old($service->image)}}">
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter service description" required></textarea>
        </div>

        <!-- Duration -->
        <div class="mb-3">
            <label for="duration" class="form-label">Duration (in hours)</label>
            <input type="number" class="form-control" id="duration" name="duration" placeholder="Enter duration" min="1" required>
        </div>

        <!-- User ID -->
        <div class="mb-3">
            <label for="user_id" class="form-label">User ID</label>
            <input type="text" class="form-control" id="user_id" name="user_id" placeholder="Enter user ID" required>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</div>
@endsection
{{-- endse --}}
