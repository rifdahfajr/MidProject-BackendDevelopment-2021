<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset("assets/css/login.css")}}">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/font/berlin_sans/berlinsans.ttf">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- <link rel="icon" type="image/x-icon" href="{{ asset("assets/img/Group.png") }}"> --}}
    <title>Login</title>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light" id="header-nav">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">OL Learn</a>
        </nav>
    </header>
<section>
        <article>
                <h3>Login</h3>
                <img src="{{ asset("assets/img/img-login.png" ) }}"alt="" class="img-login">
                <fieldset>
                        <form method="post" action="{{route("login")}}">
                            @csrf
                            <div class="form-group">
                                <label class="form-one-label">Email</label>
                                <input type="text" name="email"  placeholder="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-one-label">Password</label>
                                <input type="password" name="password" id="pass" placeholder="" class="form-control"/>
                            </div>
                            <br><br><br><br>
                            <div class="f1-buttons">
                                <button type="type" name="submit" id="submit" value="Login" class="btn btn-next text-light" style="font-size: 17px;" >Login</button>
                            <br><br><br>
                            <a  href="{{route('password.request')}}" style="font-size: 17px; text-decoration: none; color: #171717" class="forgot">Forgot your password?</a>
                            </div>
                            <div class="have-acc-container">
                            <p id="have-acc" >Don’t have an account?</p>&nbsp;<a style="text-decoration:underline; color: #171717;" href="{{route("register")}}">Register</a>
                            </div>
                        </form>
                    </fieldset>
        </article>
    </section>

<footer>
    <p class="footer-ollearn">OL Learn</p>
    <p class="cpy-rgt">Copyright © 2022, OL Learn</p>
    <p class="ToS">Privacy Policy & Terms of Service</p>

    <p class="social-media">Our Social Media</p>
    <img class= "line" src="{{ asset("assets/img/Line 1.png") }}" alt="">
    <img class="photo-sm" src="{{ asset("assets/img/Group 45.png")}}" alt="">
</footer>

    <!-- Javascript -->
        <script src="{{asset("assets/js/register.js")}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/8f7f0da4be.js" crossorigin="anonymous"></script>
</body>
</html>