@extends('master')
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


