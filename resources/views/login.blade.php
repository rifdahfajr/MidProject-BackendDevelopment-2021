<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>log-in</title>
</head>
<body>
    @include("header")
    @yield('navbar')

    <section class="log-in">
        <h1 class="section-title">Login</h1>
        <form action="{{ route('loginUser') }}" method="post" enctype="multipart/form-data" id="log-in-form">
            @csrf
              <div class="form-container">
                    <label class="form-label" for="username">Username</label>
                    <input type="text" name="username" @error('username') is-invalid
                    @enderror id="password" autofocus required>
                    @error('username')
                        <div class="invalid feedback">
                            {{ $message }}
                        </div>
                    @enderror
              </div>
              <div class="form-container">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" name="password" id="password" required>
              </div>

              <input class="button-submit" type="submit" value="Log In">
        </form>
        <small>Not registered?
            <a href="/signup">Register Now!</a>
        </small>
  </section>

    <style>
        .log-in{
            padding: 100px;
        }

        .form-container{
            display: flex;
            flex-direction: column;
            margin-bottom: 5px;
        }

        .log-in{
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .log-in>form{
            width: 50%;
            padding: 20px;
            background-color: #FBE9FF;
            border-radius: 10px;
        }

        .form-container>span{
            display: flex;
            align-items: center;
            }

        .form-container>span>label{
            margin-left: 5px;
        }

        .form-container > input,
        .form-container > textarea{
            padding: 5px 10px;
            border-radius: 5px;
            border-style: none;
        }
        .button-submit{
            padding: 10px;
            border-style: none;
            background-color: #4D095F;
            border-radius: 10px;
            color:white;
            margin-top: 10px;
        }
        .log-in >h1{
            text-align: center;
            margin-bottom: 20px;
        }
    </style>



</body>
</html>
