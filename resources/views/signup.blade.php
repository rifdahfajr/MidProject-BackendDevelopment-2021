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

    <section class="contact-us">
        <h1 class="section-title">Contact Us Now</h1>
        <form action="#" id="contact-us-form">
              <div class="form-container">
                    <label class="form-label" for="name">Name</label>
                    <input type="text">
              </div>
              <div class="form-container">
                    <label class="form-label" for="email">Email</label>
                    <input type="email">
              </div>
              <div class="form-container">
                    <label class="form-label" for="phone-number">Phone Number</label>
                    <input type="number">
              </div>
              <div class="form-container">
                    <label class="form-label" for="problems">Your Problems</label>
                    <span>
                          <input name="problems" type="radio" id="communication" value="communication"><label
                                for="communication">Communication</label>
                    </span>
                    <span>
                          <input name="problems" type="radio" id="error" value="error"><label
                                for="error">Error</label>
                    </span>
                    <span>
                          <input name="problems" type="radio" id="others" value="others"><label
                                for="others">Others</label>
                    </span>
              </div>
              <div class="form-container">
                    <label class="form-label" for="textarea">Your Message</label>
                    <textarea name="textarea" id="textarea" cols="30" rows="5"></textarea>
              </div>
              <input class="button-submit" type="submit" value="submit">
        </form>
        <input type="file" name="submit-tugas" id="input-tugas"/>
  </section>

  <style>
      .contact-us{
      padding: 20px;
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
      background-color: bisque;
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
      background-color: goldenrod;
      border-radius: 10px;
      color:white;
      margin-top: 10px;
}
.contact-us >h1{
      text-align: center;
      margin-bottom: 20px;
  </style>

    @include("footer")
    @yield('footer')
</body>
</html>
