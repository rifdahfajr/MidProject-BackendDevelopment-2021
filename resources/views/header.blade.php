@section("navbar")

<nav class="navbar">
    <div id="navbar-icon" class="icon"><i class="fa fa-bars"></i></div>
    <div class="navbar-item"><a href="{{ url('signup') }}">Sign Up</a></div>
    <div class="navbar-item"><a href="{{ url('login') }}">Login</a></div>
    <div class="navbar-item"><a href="{{ url('user') }}">User</a></div>
    <div class="navbar-item"><a href="{{ url('home') }}">Home</a></div>
    <div class="navbar-item"><a href="{{ url('aboutus') }}">About Us</a></div>
    <div class="navbar-item"><a href="{{ url('course') }}">Course</a></div>
</nav>
<style>
    .navbar{
    display: flex;
    flex-direction: row;
    /* justify-content: center; */
    align-items: center;
    background-color: #4D095F;
    height: 60px;
    padding: 20px;
    width: 100%;
    position: fixed;
    /* z-index: 10; */
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
