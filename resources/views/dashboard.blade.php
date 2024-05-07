<!DOCTYPE html>
<html>

<head>
    <title>Your Website</title>
    <style>
        body {
            background-color: #F4F4F4;
            display: flex;
            flex-direction: column;
        }
        
    </style>
    <!-- Add your CSS and JS files here -->
</head>

<body>
    <div class="header">
        @include('components/header')
    </div>

    <div class="header">
        @include('highlights')
    </div>

    <div class="footer">
        @include('components/footer')
    </div>
</body>

</html>