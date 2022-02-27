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

    <section class="contact-us">
        <h1 class="section-title">Login</h1>
        <form action="#" id="contact-us-form">
              <div class="form-container">
                    <label class="form-label" for="name">Username</label>
                    <input type="text">
              </div>
              <div class="form-container">
                    <label class="form-label" for="password">Password</label>
                    <input type="password">
              </div>
              <input class="button-submit" type="submit" value="submit">
        </form>
  </section>
  <footer>
    <div class="footer-content"></div>
          <div class="logo">My Company</div>
          <div class="footer-detail">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                      Est quibusdam quo optio consequuntur maiores officiis,
                      veniam officia nisi voluptatem culpa deserunt a ea,
                      beatae distinctio, accusamus provident minus magni possimus.
                </p>
          </div>
    <div class="social-media"></div>
          <a href="https://www.instagram.com">
                <span class="social-media-icon">

                </span>
          </a>
          <a href="https:www.facebook.com">
                <span class="social-media-icon">

                </span>
          </a>
    </footer>
  <style>
        .contact-us{
            padding: 100px;
        }

        .form-container{
            display: flex;
            flex-direction: column;
            margin-bottom: 5px;
        }

        .contact-us{
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .contact-us>form{
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
        .contact-us >h1{
            text-align: center;
            margin-bottom: 20px;
        }

        footer{
      display: flex;
      flex-direction: row;
      background-color: goldenrod;
      color: white;
      padding: 200px;
      margin-top: 300px;
      background-size: 1cm;
}
.footer-content{
      width: 50%;
}

.logo{
      font-size: 30px;
      font-weight: 600;
}
.footer-detail{
      font-size: 14px;
      text-align: justify;
}
.social-media {
      width: 50%;
      display: flex;
      justify-content: flex-end;
      align-items: flex-end;
}

  </style>



</body>
</html>
