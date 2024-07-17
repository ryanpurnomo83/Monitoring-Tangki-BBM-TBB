<!DOCTYPE html>
<html>
<head>
    <title>Oil-Tank-Info</title>
    <!-- <link rel="stylesheet" href="{{ asset('ADMIN/css/signup.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('ADMIN/bootstrap/css/bootstrap.min.css') }}"> 
</head>
<body>
    {!! $data == 0 ? file_get_contents(public_path('ADMIN/html/signup.html')) : file_get_contents(public_path('ADMIN/html/signin.html')) !!}
</body>
</html> 