@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1>Edit User</h1>
                <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Back to Users
                </a>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.users.update', $user) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Full Name *</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                                   id="name" name="name" value="{{ old('name', $user->name) }}" required>
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email Address *</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                                   id="email" name="email" value="{{ old('email', $user->email) }}" required>
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="role" class="form-label">User Role *</label>
                                            <select class="form-control @error('role') is-invalid @enderror" 
                                                    id="role" name="role" required>
                                                <option value="">Select Role</option>
                                                <option value="user" {{ old('role', $user->role) == 'user' ? 'selected' : '' }}>User</option>
                                                <option value="editor" {{ old('role', $user->role) == 'editor' ? 'selected' : '' }}>Editor</option>
                                                <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
                                            </select>
                                            @error('role')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <div class="form-text">
                                                <small>
                                                    <strong>User:</strong> Can only view the frontend<br>
                                                    <strong>Editor:</strong> Can manage posts and pages<br>
                                                    <strong>Admin:</strong> Full access to all features
                                                </small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="password" class="form-label">New Password</label>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" 
                                                   id="password" name="password">
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <div class="form-text">Leave blank to keep current password. Minimum 8 characters if changing.</div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="password_confirmation" class="form-label">Confirm New Password</label>
                                            <input type="password" class="form-control" 
                                                   id="password_confirmation" name="password_confirmation">
                                            <div class="form-text">Required only if changing password</div>
                                        </div>

                                        <div class="card mt-4">
                                            <div class="card-header">
                                                <h6 class="mb-0">Profile Image</h6>
                                            </div>
                                            <div class="card-body">
                                                @if($user->profile_image)
                                                    <div class="mb-3 text-center">
                                                        <img src="{{ Storage::url($user->profile_image) }}" alt="{{ $user->name }}" 
                                                             class="img-fluid rounded-circle" style="max-height: 150px; max-width: 150px;">
                                                        <div class="mt-2">
                                                            <small class="text-muted">Current profile image</small>
                                                        </div>
                                                    </div>
                                                @endif
                                                
                                                <div class="mb-3">
                                                    <input type="file" class="form-control @error('profile_image') is-invalid @enderror" 
                                                           id="profile_image" name="profile_image" accept="image/*">
                                                    @error('profile_image')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                    <div class="form-text">
                                                        @if($user->profile_image)
                                                            Upload a new image to replace current one (JPG, PNG, GIF - Max: 2MB)
                                                        @else
                                                            Upload a profile image (JPG, PNG, GIF - Max: 2MB)
                                                        @endif
                                                    </div>
                                                </div>

                                                <div id="image-preview" class="text-center" style="display: none;">
                                                    <img id="preview-img" src="" alt="Profile Preview" class="img-fluid rounded-circle" style="max-height: 150px; max-width: 150px;">
                                                    <br>
                                                    <button type="button" class="btn btn-sm btn-outline-danger mt-2" onclick="removeImagePreview()">Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end gap-2 mt-4">
                                    <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary" style="background: #2b8a6a !important;">Update User</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Password strength indicator
document.getElementById('password').addEventListener('input', function() {
    const password = this.value;
    
    if (password.length > 0 && password.length < 8) {
        this.classList.remove('is-valid');
        this.classList.add('is-invalid');
    } else if (password.length >= 8) {
        this.classList.remove('is-invalid');
        this.classList.add('is-valid');
    } else {
        this.classList.remove('is-invalid', 'is-valid');
    }
});

// Confirm password validation
document.getElementById('password_confirmation').addEventListener('input', function() {
    const password = document.getElementById('password').value;
    const confirmPassword = this.value;
    
    if (password.length > 0) {
        if (password !== confirmPassword) {
            this.classList.remove('is-valid');
            this.classList.add('is-invalid');
        } else {
            this.classList.remove('is-invalid');
            this.classList.add('is-valid');
        }
    } else {
        this.classList.remove('is-invalid', 'is-valid');
    }
});

// Profile image preview
document.getElementById('profile_image').addEventListener('change', function() {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('preview-img').src = e.target.result;
            document.getElementById('image-preview').style.display = 'block';
        };
        reader.readAsDataURL(file);
    }
});

function removeImagePreview() {
    document.getElementById('profile_image').value = '';
    document.getElementById('image-preview').style.display = 'none';
}
</script>
@endsection