<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Course</title>
</head>
<body>
    @include("header")
    @yield('navbar')

    <section class="our-team">
        <h1>Our Teams</h1>
        <div class="container">
              <div class="card">
                    <div class="card-image">
                          <img src="./assets/mathilde-langevin-PaCzyxEcqiw-unsplash.jpg" alt="card_img">
                    </div>
                    <div class="card-description">
                          <h3 class="description-title">Mathilde</h3>
                          <div class="description-info">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, culpa voluptate. Est corporis voluptatum repellendus rem debitis perspiciatis, enim voluptates fugit molestias dicta accusantium cupiditate ipsum, aut hic molestiae laboriosam.
                          </div>
                    </div>
              </div>
              <div class="card">
                    <div class="card-image">
                          <img src="./assets/mathilde-langevin-PaCzyxEcqiw-unsplash.jpg" alt="card_img">
                    </div>
                    <div class="card-description">
                          <h3 class="description-title">Mathilde</h3>
                          <div class="description-info">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, culpa voluptate. Est corporis voluptatum repellendus rem debitis perspiciatis, enim voluptates fugit molestias dicta accusantium cupiditate ipsum, aut hic molestiae laboriosam.
                          </div>
                    </div>
              </div>
              <div class="card">
                    <div class="card-image">
                          <img src="./assets/mathilde-langevin-PaCzyxEcqiw-unsplash.jpg" alt="card_img">
                    </div>
                    <div class="card-description">
                          <h3 class="description-title">Mathilde</h3>
                          <div class="description-info">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, culpa voluptate. Est corporis voluptatum repellendus rem debitis perspiciatis, enim voluptates fugit molestias dicta accusantium cupiditate ipsum, aut hic molestiae laboriosam.
                          </div>
                    </div>
              </div>
              <div class="card">
                    <div class="card-image">
                          <img src="./assets/mathilde-langevin-PaCzyxEcqiw-unsplash.jpg" alt="card_img">
                    </div>
                    <div class="card-description">
                          <h3 class="description-title">Mathilde</h3>
                          <div class="description-info">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, culpa voluptate. Est corporis voluptatum repellendus rem debitis perspiciatis, enim voluptates fugit molestias dicta accusantium cupiditate ipsum, aut hic molestiae laboriosam.
                          </div>
                    </div>
              </div>
              <div class="card">
                    <div class="card-image">
                          <img src="./assets/mathilde-langevin-PaCzyxEcqiw-unsplash.jpg" alt="card_img">
                    </div>
                    <div class="card-description">
                          <h3 class="description-title">Mathilde</h3>
                          <div class="description-info">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, culpa voluptate. Est corporis voluptatum repellendus rem debitis perspiciatis, enim voluptates fugit molestias dicta accusantium cupiditate ipsum, aut hic molestiae laboriosam.
                          </div>
                    </div>
              </div>
        </div>
  </section>
  <style>
      .our-team{
      background-color: goldenrod;
      padding: 20px;

}
.our-team > h1{
      text-align: center;
}
.container{
      padding: 25px;
      display: grid;
      /* grid-template-columns: 25% 25% 25%; */
      grid-template-columns: repeat(3, 25%);
      grid-column-gap: 20px;
      grid-row-gap: 20px;
      justify-content: center;
      width: 100%;
      flex-wrap: wrap;
      align-items: center;
}
.card{
      width: 100%;
      background-color: aliceblue;
      border-radius: 10px;
      padding: 10px;
      /* transition: transform 1s ease-in-out; */

}
.card-image{
      display: flex;
      justify-content: center;
}
.card-image > img {
      height: 200px;
      width: 200px;
      border-radius: 999px;
      object-fit: cover;
      /* object-position: center; */
      margin: 5px 0;
}
  </style>
    @include("footer")
    @yield('footer')
</body>

</html>
