@extends('layout')

@section('content')
<div class="row justify-content-center align-items-center vh-100">
    <div class="col-md-5">
        <div class="card shadow-lg border-0 rounded-4">
            <div class="card-header text-white text-center rounded-top-4" style="background: linear-gradient(135deg, #FF512F, #DD2476);">
                <h2 class="fw-bold mb-0">Create an Account</h2>
                <p class="mb-0">Join us today!</p>
            </div>

            <div class="card-body p-4">
                @if($errors->any())
                    <div class="alert alert-danger rounded-3">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label fw-medium">Full Name</label>
                        <input type="text" name="name" class="form-control rounded-3 p-2" placeholder="Enter your name" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label fw-medium">Email Address</label>
                        <input type="email" name="email" class="form-control rounded-3 p-2" placeholder="Enter your email" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label fw-medium">Password</label>
                        <input type="password" name="password" class="form-control rounded-3 p-2" placeholder="Create a password" required>
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label fw-medium">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control rounded-3 p-2" placeholder="Confirm password" required>
                    </div>

                    <button type="submit" class="btn w-100 py-2 text-white rounded-3 fw-bold" 
                        style="background: linear-gradient(135deg, #FF512F, #DD2476); border: none; transition: 0.3s;">
                        Register
                    </button>

                    <p class="mt-3 text-center text-muted">
                        Already have an account? <a href="/login" class="text-decoration-none fw-bold" style="color: #DD2476;">Login here</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
