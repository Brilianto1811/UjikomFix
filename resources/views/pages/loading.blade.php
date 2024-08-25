<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Digital Kabupaten Bogor</title>
    <script>
        // Redirect to login page after 3 seconds
        setTimeout(function() {
            window.location.href = "{{ url('/login') }}";
        }, 3000);
    </script>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 97vh;
            flex-direction: column;
            text-align: center;
            background: linear-gradient(to bottom, #2852b6, #3d81d9);
            /* Gradient from dark blue to light blue */
        }

        .container {
            text-align: center;
        }

        .w-10 {
            width: 150px;
            /* Adjust the width as needed */
        }

        .loading-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 1rem;
            /* Adjust the margin as needed */
        }
    </style>
    <link rel="icon" href="{{ Vite::asset('resources/images/logo_pnj.png') }}" type="image/png">
</head>

<body>
    <div class="container">
        <img class="w-10" src="{{ Vite::asset('resources/images/logo_pnj.png') }}" alt="Lambang Kabupaten Bogor" />
        <div class="loading-container">
            <x-base.loading-icon class="h-8 w-8" icon="spinning-circles" />
        </div>
    </div>
</body>

</html>
