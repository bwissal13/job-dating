

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>hi</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #333;
            padding: 10px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline-block;
            margin-right: 20px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        .container {
            margin: 20px;
        }
    </style>
</head>
<body>
    {{-- <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/companies">companies</a></li>
        </ul>
    </nav> --}}

    @yield('content')
</body>
<!-- Include TomSelect (without jQuery) -->
<script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>

<!-- Include jQuery separately, after TomSelect -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Initialize TomSelect -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    new TomSelect('#select-skill', {
      maxItems: 3,
    });
  });
</script>
</html>
