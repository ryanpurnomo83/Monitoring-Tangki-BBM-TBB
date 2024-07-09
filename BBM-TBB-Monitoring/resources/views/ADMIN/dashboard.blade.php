<!DOCTYPE html>
<html>
<head>
    <title>Oil-Tank-Info</title>
</head>
<body>
    <?php echo file_get_contents(public_path('ADMIN/html/dashboard.html')); ?>
    <script src = "{{ asset('ADMIN/js/dashboard-function.js') }}"></script>
</body>
</html>