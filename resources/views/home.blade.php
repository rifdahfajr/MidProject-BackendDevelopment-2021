<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
</head>
<body>
    @include("header")
    @yield('navbar')

    <section class="home">
        <div class="home-info">
              <div class="name">WELCOME</div>
              <p class="description">ONLINE LEARNING</p>
        </div>
  </section>
  <section class="home">
    
</section>
  <style>
    .home{
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
    /* padding-top: 20px; */
    }

    .home-info{
    background-color: #4D095F;
    width: fit-content;
    padding: 20px;
    border-radius: 10px;
    margin-top: 0;
    }

    .name{
    font-size: 50px;
    font-weight: 600;
    color: white;
    }
    .description{
    font-size: 25px;
    color: white;
    }
</style>
</body>
</html>
