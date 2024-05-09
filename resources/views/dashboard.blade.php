<!DOCTYPE html>
<html>

<head>
    <title>Your Website</title>
    <style>
        body {
            background-color: #F9FAFB;
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

    <div>
        @include('section-1')
    </div>

    <div>
        @include('highlights')
    </div>

    <div>
        @include('team')
    </div>

    <div class="footer">
        @include('components/footer')
    </div>
</body>

</html>