@extends('master')

@section('header')
        <!-- Header -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Your Logo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Add to Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                </ul>
            </div>
            </nav>
        </header>
@endsection

@section('content')
    <!-- Main Content (Login Page) -->
    <div class="container mt-4">
        <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
            <div class="card-header">Login</div>
            <div class="card-body">
                <form>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection

@section('footer')
    <!-- Footer -->
    <footer class="bg-dark text-light text-center py-3 mt-4">
        &copy; 2024 Your Company. All rights reserved.
    </footer>
@endsection
