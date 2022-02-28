@section('navbar')
<nav class="navbar">
    <div id="navbar-icon" class="icon"><i class="fa fa-bars"></i></div>
    <div class="navbar-item">
        <a href="/login">LOGIN</a>
    </div>
    <div class="navbar-item">
        <a href="/user">USER</a>
    </div>
    <div class="navbar-item">
        <a href="/home">HOME</a>
    </div>
    <div class="navbar-item">
        <a href="/about">ABOUT</a>
    </div>
    <div class="navbar-item">
        <a href="course">COURSE</a>
    </div>
</nav>

<style>
    .navbar{
      display: flex;
      flex-direction: row;
      align-items: center;
      background-color: #4D095F;
      height: 70px;
      padding: 10px;
      width: 100%;
      top: 0;
}
.navbar > div{
      height: 100%;
      margin-right: 10px;
      display: flex;
      align-items: center;
}
.navbar > div > a{
      background-color: #FBE9FF;
      padding: 10px;
      text-decoration: none;
      color: black;
      border-radius: 10px;
}
</style>
@endsection
