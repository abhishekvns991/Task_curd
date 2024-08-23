<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <h1 class="text-center">Login</h1>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" required placeholder="Enter email">
                        @error('email')
                        <div>{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="Password">Password:</label>
                        <input type="password" name="password" class="form-control" required placeholder="Enter Password">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success ">Login</button>
                        <a  class="btn btn-info" href="{{ route('register') }}">Register</a>
                    </div>
                </form>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</body>
</html>
