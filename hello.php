<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />

    <!-- AOS Animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>My Portfolio | Eggi Mugi</title>
  </head>
  <body id="home">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Eggi Mugi</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#projects">Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

    <!-- jumbotron -->
    <section class="jumbotron text-center">
      <img src="img/male.jpg" alt="Sigma male" width="200" class="rounded-circle img-thumbnail" />
      <h1 class="display-4">Eggi Mugi</h1>
      <p class="lead">Student | Web Developer</p>
      <a class="btn btn-outline-dark" role="button" href="#about">More about me</a>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#B19470"
          fill-opacity="1"
          d="M0,160L24,149.3C48,139,96,117,144,96C192,75,240,53,288,64C336,75,384,117,432,154.7C480,192,528,224,576,245.3C624,267,672,277,720,256C768,235,816,181,864,149.3C912,117,960,107,1008,122.7C1056,139,1104,181,1152,208C1200,235,1248,245,1296,240C1344,235,1392,213,1416,202.7L1440,192L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- akhir jumbotron -->

    <div class="b-example-divider"></div>

    <!-- about -->
    <section id="about" class="about">
      <div class="container">
        <div class="row mb-3">
          <div class="col">
            <h2 class="pb-2 border-bottom">About me</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <img src="img/Questions-pana.png" alt="About" class="img-fluid" />
          </div>
          <div class="col-lg-8">
            <div class="row justify-content-center text-center mt-5">
              <div class="col mb-5">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium recusandae, odio molestiae repellat, ipsam fuga nemo voluptatibus sequi eum quaerat dicta voluptates quos beatae voluptatum?</p>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Accordion Item #1</button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall
                        appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the
                        <code>.accordion-body</code>, though the transition does limit overflow.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Accordion Item #2</button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall
                        appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the
                        <code>.accordion-body</code>, though the transition does limit overflow.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Accordion Item #3</button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall
                        appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the
                        <code>.accordion-body</code>, though the transition does limit overflow.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#f8fae5"
          fill-opacity="1"
          d="M0,128L24,128C48,128,96,128,144,144C192,160,240,192,288,218.7C336,245,384,267,432,250.7C480,235,528,181,576,149.3C624,117,672,107,720,128C768,149,816,203,864,218.7C912,235,960,213,1008,181.3C1056,149,1104,107,1152,96C1200,85,1248,107,1296,122.7C1344,139,1392,149,1416,154.7L1440,160L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- akhir about -->

    <div class="b-example-divider" style="background-color: #f8fae5 !important"></div>

    <!-- Projects -->
    <section id="projects" class="projects">
      <div class="container">
        <div class="row mb-5">
          <div class="col">
            <h2 class="pb-2 border-bottom border-black">My Projects</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6 mb-3">
            <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden" style="border-radius: 20px">
              <div class="my-3 p-3">
                <h2 class="display-5">Another headline</h2>
                <p class="lead">And an even wittier subheading.</p>
              </div>
              <div class="bg-body shadow-sm mx-auto projects" style="width: 80%; border-radius: 21px 21px 0 0">
                <img src="img/projects/1.png" alt="Ocean" class="img-fluid" />
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden" style="border-radius: 20px">
              <div class="my-3 p-3">
                <h2 class="display-5">Another headline</h2>
                <p class="lead">And an even wittier subheading.</p>
              </div>
              <div class="bg-body shadow-sm mx-auto projects" style="width: 80%; border-radius: 21px 21px 0 0">
                <img src="img/projects/2.png" alt="My First Portfolio Website" class="img-fluid" />
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden" style="border-radius: 20px">
              <div class="my-3 p-3">
                <h2 class="display-5">Another headline</h2>
                <p class="lead">And an even wittier subheading.</p>
              </div>
              <div class="bg-body shadow-sm mx-auto projects" style="width: 80%; border-radius: 21px 21px 0 0">
                <img src="img/projects/3.png" alt="Landing-page" class="img-fluid" />
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden" style="border-radius: 20px">
              <div class="my-3 p-3">
                <h2 class="display-5">Another headline</h2>
                <p class="lead">And an even wittier subheading.</p>
              </div>
              <div class="bg-body shadow-sm mx-auto projects" style="width: 80%; border-radius: 21px 21px 0 0">
                <img src="img/projects/5.png" alt="Reog1" class="img-fluid" />
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden" style="border-radius: 20px">
              <div class="my-3 p-3">
                <h2 class="display-5">Another headline</h2>
                <p class="lead">And an even wittier subheading.</p>
              </div>
              <div class="bg-body shadow-sm mx-auto projects" style="width: 80%; border-radius: 21px 21px 0 0">
                <img src="img/projects/4.png" alt="Reog2" class="img-fluid" />
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- 3D Keyboards -->
      <section id="keyboards" class="keyboards">
        <div class="container">
          <div class="row text-center mb-3">
            <div class="col">
              <h2>Dreams Keyboards</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-4 mb-3">
              <div class="keyboard-box">
                <h4 class="keyboard-name">Keychron K2</h4>
                <img src="img/keyboards/3.png" alt="Keychron K3" class="keyboard-img" />
                <a href="#" class="btn btn-light keyboard-detail-button">Show details</a>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-3">
              <div class="keyboard-box">
                <h4 class="keyboard-name">Womier RGB</h4>
                <img src="img/keyboards/1.png" alt="Womier RGB" class="keyboard-img" />
                <a href="#" class="btn btn-light keyboard-detail-button">Show details</a>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-3">
              <div class="keyboard-box">
                <h4 class="keyboard-name">Red Dragon</h4>
                <img src="img/keyboards/2.png" alt="Red Dragon" class="keyboard-img" />
                <a href="#" class="btn btn-light keyboard-detail-button">Show details</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Akhir 3D Keyboards -->

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#B19470"
          fill-opacity="1"
          d="M0,288L40,266.7C80,245,160,203,240,165.3C320,128,400,96,480,112C560,128,640,192,720,197.3C800,203,880,149,960,154.7C1040,160,1120,224,1200,224C1280,224,1360,160,1400,128L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir projects -->

    <div class="b-example-divider"></div>

    <!-- contact -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="row mb-3">
          <div class="col">
            <h2 class="pb-2 border-bottom border-light">My Projects</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-4 mb-3">
            <div class="card text-white mb-3" style="background-color: #43766c">
              <div class="card-body">
                <h5 class="card-title">Contact Me</h5>
                <p class="card-text">Silahkan kirimkan pesan terkait kritik dan saran anda pada form yang telah disediakan.</p>
              </div>
            </div>

            <ul class="list-group">
              <li class="list-group-item"><h1>Location</h1></li>
              <li class="list-group-item">SMK Telkom Malang</li>
              <li class="list-group-item">Jl. Danau Ranau, Sawojajar, Kec. Kedungkandang, Kota Malang, 65139</li>
              <li class="list-group-item">Jawa Timur, Indonesia</li>
            </ul>
          </div>

          <div class="col-lg-6">
            <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
              <strong>Terima kasih!</strong> Pesan anda sudah saya terima.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <form name="eggimu-contact-form">
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" name="nama" />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" name="email" />
                <div id="email" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesan" rows="3" name="pesan"></textarea>
              </div>
              <button type="submit" class="btn btn-kirim text-white" style="background-color: #43766c">Kirim</button>

              <button class="btn btn-loading text-white d-none" type="button" disabled style="background-color: #43766c">
                <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                <span role="status">Loading...</span>
              </button>
            </form>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#76453B"
          fill-opacity="1"
          d="M0,128L40,154.7C80,181,160,235,240,234.7C320,235,400,181,480,133.3C560,85,640,43,720,64C800,85,880,171,960,186.7C1040,203,1120,149,1200,149.3C1280,149,1360,203,1400,229.3L1440,256L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>

    <!-- akhir contact -->

    <div class="b-example-divider" style="background-color: #76453b !important"></div>

    <!-- footer -->
    <footer class="text-white text-center pb-5 pt-5">
      <p>Created with <i class="bi bi-heart-fill text-danger"></i> by <a href="https://www.instagram.com/e.eggi_/" class="text-white fw-bold">Eggi Mugi</a></p>
    </footer>
    <!-- akhir footer -->

    <!-- JS GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/TextPlugin.min.js"></script>
    <script>
      gsap.from(".jumbotron img", { duration: 1, y: -100, opacity: 0, ease: "bounce" });
    </script>

    <!-- JS Bootstrsap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
      const scriptURL = "https://script.google.com/macros/s/AKfycbwpFH8BLm3iolnNjht8Xn1jxxV-oEH9aRC2WikSRL5sHG0yjDs2nszLLmobiaAyLX0/exec";
      const form = document.forms["eggimu-contact-form"];
      const btnKirim = document.querySelector(".btn-kirim");
      const btnLoading = document.querySelector(".btn-loading");
      const myAlert = document.querySelector(".my-alert");

      form.addEventListener("submit", (e) => {
        e.preventDefault();
        // ketika tombol submit diklik
        // tampilkan tombol loading, hilangkan tombol kirim
        btnLoading.classList.toggle("d-none");
        btnKirim.classList.toggle("d-none");
        fetch(scriptURL, { method: "POST", body: new FormData(form) })
          .then((response) => {
            // tampilkan tombol kirim, hilangkan tombol loading
            btnLoading.classList.toggle("d-none");
            btnKirim.classList.toggle("d-none");
            // tampilkan alert
            myAlert.classList.toggle("d-none");
            // reset form
            form.reset();
            console.log("Success!", response);
          })
          .catch((error) => console.error("Error!", error.message));
      });
    </script>

    <!-- Tilt JS -->
    <script type="text/javascript" src="vanilla-tilt.min.js"></script>
    <script type="text/javascript">
      VanillaTilt.init(document.querySelectorAll('.keyboard-box'), {
        max: 25,
        speed: 1000,
        glare: true,
      });
    </script>
  </body>
</html>
