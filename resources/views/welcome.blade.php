

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
    <style>
        body {
            background: url("{{ asset('assets/images/background.svg') }}") no-repeat center center;
            background-size: cover;
            height: 125vh;
        }
    </style>
    <title>WorkQuilt</title>
</head>
<body>
   
    @if (Route::has('login'))
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="img-fluid"/>
            </a>
            <div class="navbar-nav ml-auto">
                @auth
                    <a href="{{ url('/dashboard') }}" class="nav-item nav-link font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="nav-item nav-link font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="nav-item nav-link ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        </div>
    </nav>
@endif


    <section>

        <div style="left: 70px; top: 161px; position: absolute">
            <span style="color: #459ab3; font-size: 40px; font-family: Abril Fatface; font-weight: 400; word-wrap: break-word;">
                Welcome to Work</span
            ><span style="color: #b89a55; font-size: 40px; font-family: Abril Fatface; font-weight: 400; word-wrap: break-word;">
                Quilt</span
            ><span style="color: #459ab3; font-size: 40px; font-family: Abril Fatface; font-weight: 400; word-wrap: break-word;">
                <br />Your Gateway to Diverse Opportunities</span
            >
        </div>
        <div
        style="
          width: 573px;
          height: 197px;
          left: 70px;
          top: 294px;
          position: absolute;
          color: #333333;
          font-size: 20px;
          font-family: Sarabun;
          font-weight: 500;
          line-height: 26.02px;
          word-wrap: break-word;
        "
      >
        Connect. Explore. Thrive.<br />WorkQuilt is more than just a job portal;
        it's a vibrant community where opportunities are woven together,
        creating a tapestry of endless possibilities for your career journey.
      </div>
      <div
        style="
          width: 160px;
          height: 52px;
          left: 70px;
          top: 439px;
          position: absolute;
        "
      >
        <div
          style="
            width: 160px;
            height: 52px;
            left: 50%;
            top: 50%;
            position: absolute;
            background: #b89a55;
            border-radius: 50px;
            transform: translate(-50%, -50%);
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
          "
        >
          <a
            style="
              color: white;
              font-size: 20px;
              font-family: Abril Fatface;
              font-weight: 400;
              line-height: 27px;
              word-wrap: break-word;
              text-decoration: none;
            "
            href="#"
            >Join Us</a
          >
        </div>
      </div>

      <div
        style="
          width: 223px;
          height: 292.79px;
          left: 857px;
          top: 161px;
          position: absolute;
        "
      >
        <div
          style="
            width: 207px;
            height: 272.67px;
            left: 16px;
            top: 0px;
            position: absolute;
          "
        >
          <img
            style="
              width: 200px;
              height: 266.67px;
              left: 7px;
              top: 0px;
              position: absolute;
              border-radius: 22px;
            "
            src="{{ asset('assets/images/pic1.png') }}"
          />
        </div>
      </div>
      <div
        style="
          width: 220.67px;
          height: 293.67px;
          left: 1120px;
          top: 200px;
          position: absolute;
        "
      >
        <div
          style="
            width: 205px;
            height: 272.67px;
            left: 0px;
            top: 21px;
            position: absolute;
          "
        >
          <img
            style="
              width: 200px;
              height: 266.67px;
              left: 5px;
              top: 0px;
              position: absolute;
              border-radius: 22px;
            "
            src="{{ asset('assets/images/pic2.png') }}"
          />
        </div>
      </div>
    </section>
    <section>
        <div
          style="
            left: 535px;
            top: 741px;
            position: absolute;
            color: #459ab3;
            font-size: 40px;
            font-family: Abril Fatface;
            font-weight: 400;
            word-wrap: break-word;
          "
        >
          Browse by Company
        </div>
        <div
          style="
            width: 1187px;
            height: 271px;
            left: 116px;
            top: 833px;
            position: absolute;
          "
        >
          <div class="container">
            <div class="row">
              <div
                class=""
                style="
                  width: 215px;
                  height: 69px;
                  border-radius: 22px;
                  border: 1px #b89a55 solid;
                "
              >
                <div class="text-center mt-2">Name</div>
                <div class="text-center mt-2">Domain</div>
              </div>
              <div
                class=""
                style="
                  width: 215px;
                  height: 69px;
                  border-radius: 22px;
                  border: 1px #b89a55 solid;
                "
              >
                <div class="text-center mt-2">Name</div>
                <div class="text-center mt-2">Domain</div>
              </div>
            
            </div>
           
          </div>
        </div>
      </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
