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

    <section class="sign-up">
        <h1 class="section-title">Sign Up</h1>
        <form action="{{ route('signupUser') }}" method="post" enctype="multipart/form-data" id="sign-up-form">
            @csrf
                <div class="form-container">
                    <label class="form-label" for="fullname"> Full Name</label>
                    <input name="fullname" type="text" placeholder="input full name">
                </div>
                <div class="form-container">
                    <label class="form-label" for="username">Username</label>
                    <input name="username" type="text" placeholder="input username">
                </div>
                <div class="form-container">
                    <label class="form-label" for="password">Password</label>
                    <input name="password" type="text" placeholder="input password">
                </div>
                <div class="form-container">
                    <label class="form-label" for="confirmpassword">Confirm Password</label>
                    <input name="confirmpassword" type="text" placeholder="input confirm password">
                </div>
                <div class="form-container">
                    <label class="form-label" for="address">Address</label>
                    <input name="address" type="text" placeholder="input address">
                </div>
                <div class="form-container">
                    <label class="form-label" for="phonenumber">Phone Number</label>
                    <input name="phonenumber" type="numeric" placeholder="input phone number">
                </div>
                <div class="form-container">
                    <label class="form-label" for="age">Age</label>
                    <input name="age" type="numeric" placeholder="input age">
                </div>
                <div class="form-container">
                    <label class="form-label" for="birthdate">Birth Date</label>
                    <input name="birthdate" type="date" placeholder="input birth date">
                </div>
              {{-- <input class="button-submit" type="submit" value="submit"> --}}
              <button type="submit" class="button-submit" >Submit</button>
        </form>

  </section>

  <style>
        .sign-up{
            padding: 100px;
        }

        .form-container{
            display: flex;
            flex-direction: column;
            margin-bottom: 5px;
        }

        .sign-up{
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .sign-up>form{
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
        .sign-up >h1{
            text-align: center;
            margin-bottom: 20px;
        }
  </style>

</body>
</html>
