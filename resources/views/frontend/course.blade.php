<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('frontend/css/course.css') }}">
</head>
<body>

    <header>

        <a href="{{url('home')}}"><img src="{{url('frontend/images/image.jpg')}}" alt="Your Logo" class="logo"></a>

    </header>

    <div class="container">
        <div class="card dark">
          <img src="{{url('frontend/images/php-programming-language.jpg')}}" class="card-img-top" alt="..." height="200">
          <div class="card-body">
            <div class="text-section">
              <h5 class="card-title">PHP</h5>
              <p class="card-text">"Explore the dynamic world of web development with our PHP course. Dive into server-side scripting and unlock the power to create dynamic and interactive web pages.
                <details>
                    <summary class="summary">Read More..</summary>
                    Learn the fundamentals of PHP programming, from variables and control structures to functions and databases. Through practical examples and hands-on exercises, master the art of building dynamic websites and web applications. Whether you're a beginner or seasoned developer, this PHP course equips you with essential skills for web development success."</p></details>
            </div>
            <div class="cta-section">
              <div>$129.00</div>
              <a href="#" class="btn btn-outline-primary">Buy Now</a>
            </div>
          </div>
        </div>



        <div class="card mt-4">
            <img src="{{url('frontend/images/unnamed.png')}}" class="card-img-top" alt="..." height="200">
            <div class="card-body">
              <div class="text-section">
                <h5 class="card-title fw-bold text-white">HTML5</h5>
                <span class="card-text text-white">
                  "Unlock the basics of web development with our HTML course. Learn to structure content, create links, and incorporate images in your web pages.

                  <details>
                    <summary class="summary">Read More..</summary>
                    Dive into the world of HyperText Markup Language and build a solid foundation for crafting visually appealing and well-structured websites.Whether you're a novice or an experienced developer, this course provides the essential skills needed to excel in web design and development.
                  </details>
                </span>

              </div>
              <div class="cta-section">
                <div class="text-white">$129.00</div>
                <a href="#" class="btn btn-light">Buy Now</a>
              </div>
            </div>
          </div>



        <div class="card bg-dark-subtle mt-4">
          <img src="{{url('frontend/images/sta-je-css.png')}}" class="card-img-top" alt="..." height="200">
          <div class="card-body">
            <div class="text-section">
              <h5 class="card-title fw-bold">CSS</h5>
              <p class="card-text">"Immerse yourself in the world of web design with our CSS course. Discover the power of cascading style sheets to transform the look and feel of your web pages. Learn the fundamentals of CSS, from selectors and properties to layouts and animations.
                <details>
                    <summary class="summary">Read More..</summary>
                    Through practical exercises and real-world examples, master the art of styling websites to perfection. Whether you're a novice or seasoned developer, this CSS course equips you with essential skills to create visually stunning and responsive web designs."</details></p>
            </div>
            <div class="cta-section">
              <div>$129.00</div>
              <a href="#" class="btn btn-dark">Buy Now</a>
            </div>
          </div>
        </div>
        <div class="card bg-success mt-4">
          <img src="{{url('frontend/images/images (1).jpg')}}" class="card-img-top" alt="..." height="200">
          <div class="card-body">
            <div class="text-section">
              <h5 class="card-title fw-bold text-white">JavaScript</h5>
              <p class="card-text text-white">"Embark on an exciting journey into web development with our JavaScript course.
                <details>
                    <summary class="summary">Read More..</summary>
                    Delve into the realm of client-side scripting and unleash the potential to create dynamic and interactive web applications. Learn the core concepts of JavaScript programming, from variables and functions to DOM manipulation and event handling. Through hands-on projects and real-world examples, develop the skills needed to breathe life into your web pages. Whether you're a beginner or an experienced coder, this JavaScript course empowers you to build engaging and responsive web experiences."</p></details>
            </div>
            <div class="cta-section">
              <div class="text-white">$129.00</div>
              <a href="#" class="btn btn-light">Buy Now</a>
            </div>
          </div>
        </div>
      </div>
      <div class="card bg-success mt-4">
        <img src="{{url('frontend/images/laravel.webp')}}" class="card-img-top" alt="..." height="200">
        <div class="card-body">
          <div class="text-section">
            <h5 class="card-title fw-bold text-white">Laravel</h5>
            <p class="card-text text-white">"Dive into modern web development with our Laravel course. Explore the elegant PHP framework that streamlines the creation of robust, scalable web applications. Learn the ins and outs of Laravel, from its powerful routing and templating system to its built-in authentication and security features. Through hands-on projects and expert guidance, master the art of building high-quality web applications efficiently.
                <details>
                    <summary class="summary">Read More..</summary>
                    Whether you're a beginner or an experienced developer, this Laravel course is your gateway to building professional-grade web applications with ease."</p></details>
          </div>
          <div class="cta-section">
            <div class="text-white">$129.00</div>
            <a href="#" class="btn btn-light">Buy Now</a>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
