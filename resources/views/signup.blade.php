<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sign-up</title>
</head>
<body>
    @include("header")
    @yield('navbar')

    <section class="signup">
        <div class="signup-info">
              <div class="name">Sign Up</div>
              <p class="description">Untuk Sign Up</p>
        </div>
        <style>
            .signup{
            height: 500px;
            background-color: #FBE9FF;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            /* padding-top: 200px;
            padding-left: 100px; */
            display: flex;
            align-items: center;
            /* margin-top: 70px; */
            }

            .signup-info{
            background-color: rgba(255, 255, 255, 0.5);
            width: fit-content;
            padding: 20px;
            border-radius: 10px;
            }

            .name{
            font-size: 50px;
            font-weight: 600;
            }
            .description{
            font-size: 25px;
            }
        </style>
  </section>


    @include("footer")
    @yield('footer')
</body>
</html>
