<template>
  <main>
    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <!-- JavaScript Bundle with Popper -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand text-primary fs-3 fw-bold" href="#">CMS</a>
        <button
          class="navbar-toggler bg-danger"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <NuxtLink to="/" class="nav-link">Home</NuxtLink>
            <NuxtLink to="/user" class="nav-link">Complaint</NuxtLink>
            <NuxtLink to="/search" class="nav-link">View</NuxtLink>
            <NuxtLink to="/admin" class="nav-link">Admin</NuxtLink>
          </div>
        </div>
      </div>
    </nav>
    <section class="home" id="home">
      <div class="container-lg">
        <div class="row min-vh-100 align-items-center">
          <div class="col-md-6 mt-5 mt-md-0">
            <div class="home-text">
              <h2 class="text-primary text-uppercase fs-1 fw-bold">
                Complaint Management System
              </h2>
              <p class="mt-4 text-muted">
                Our Complaint Management System has all the right tools to help
                you take unprecedented control of the system operations. It lets
                you easily manage tickets, automatically assign tickets based on
                active and appropriate team members.
              </p>
              <a
                href="#contact"
                class="btn btn-primary px-3 mt-3 button1"
                style="border-radius: 20px"
                >Contact us</a
              >
            </div>
          </div>

          <div class="col-md-6 mt-5 mt-md-0">
            <img
              src="image1.png"
              style="height: 300px; width: 400px; margin-left: 120px"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- section -->
    <div class="container-fluid bg-primary text-white block">
      <p>
        "Make your customer service result oriented using the refined
        capabilities of Complaint Management System."
      </p>
    </div>

    <!-- section 2 -->
    <section class="home" id="home">
      <div class="container-lg">
        <div class="row min-vh-100 align-items-center">
          <div class="col-md-6 mt-5 mt-md-0">
            <img src="image2.png" style="height: 300px; width: 400px" />
          </div>

          <div class="col-md-6 mt-5 mt-md-0">
            <div class="home-text">
              <h2 class="text-primary text-uppercase fs-1 fw-bold">
                WHAT IS COMPLAINT MANAGEMENT?
              </h2>
              <p class="mt-4 text-muted">
                Complaint management is a process of taking customer concerns,
                allocation of the concerns to the appropriate persons and
                resolving the issues with utmost precision, certainty and
                swiftness.
              </p>
              <a
                href="#about"
                class="btn btn-primary px-3 mt-3 button3"
                style="border-radius: 20px"
                >About Us</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- about me  -->
<section id="about" class="mb-5">
            <div class="container-lg">
              <div class="row align-items-center">
                <div class="col-md-6 mt-md-0">
                  <div class="home-img">
                    <img
                      class="rounded-circle mw-100"
                      src="circle.png"
                      alt="Profile Image"
                      height="500"
                      width="500"
                    />
                  </div>
                </div>
                <div class="col-md-6 mt-5  mt-md-0">
                  <div class="home-text">
                    <p class="text-muted mb-1">Hello I'm</p>
                    <h1 class="text-primary text-uppercase fs-1 fw-bold">
                      Web Developer
                    </h1>
                    <h2 class="fs-4">Ravij Parikh</h2>
                    <p class="mt-4 text-muted">
                      I am a full stack developer working on various technologies like python , vue js , php.
                    </p>
                    <a href="Resume.pdf" class="btn btn-primary px-3 mt-3 button1" style="border-radius:20px;">Resume</a>
                  </div>
                </div>
              </div>
            </div>
          </section>

    <!-- contact form  -->
    <div class="container" id="contact">
      <section class="contact py-5" id="contact">
        <div class="container-lg py-4">
          <div class="row justify-content-center mb-4">
            <div class="col-lg-8">
              <div class="section-title text-center">
                <h2 class="fw-bold">CONTACT ME</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5">
              <div class="contact-item d-flex mb-3">
                <div class="icon fs-4">
                  <i class="fa fa-envelope text-primary fs-5"></i>
                </div>
                <div class="text ms-3">
                  <h3>Ravij Parikh</h3>
                  <p>ravijparikh0@gmail.com</p>
                </div>
              </div>
              <div class="contact-item d-flex mb-3">
                <div class="icon fs-4">
                  <i class="fa fa-phone text-primary"></i>
                </div>
                <div class="text ms-3">
                  <h3>Phone</h3>
                  <p>+9714443681</p>
                </div>
              </div>
              <div class="contact-item d-flex">
                <div class="icon fs-4">
                  <i class="fa fa-map-marker text-primary fs-4"></i>
                </div>
                <div class="text ms-3">
                  <h3>Visit Office</h3>
                  <p>M.G ROAD OFFICE 401</p>
                </div>
              </div>
            </div>
            <div class="col-md-7">
              <div class="contact-form">
                <form>
                  <div class="row">
                    <div class="col-lg-6 mb-4">
                      <input
                        type="text"
                        placeholder="Your name"
                        v-model="data.name"
                        id="name"
                        class="
                          form-control form-control-lg
                          fs-6
                          border-0
                          shadow-sm
                        "
                      />
                    </div>
                    <div class="col-lg-6 mb-4">
                      <input
                        type="text"
                        placeholder="Your Email"
                        id="email"
                        v-model="data.email"
                        class="
                          form-control form-control-lg
                          fs-6
                          border-0
                          shadow-sm
                        "
                      />
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 mb-4">
                      <input
                        type="text"
                        placeholder="Your Subject"
                        id="subject"
                        v-model="data.subject"
                        class="
                          form-control form-control-lg
                          fs-6
                          border-0
                          shadow-sm
                        "
                      />
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 mb-4">
                      <textarea
                        rows="5"
                        placeholder="Your Message"
                        v-model="data.message"
                        id="message"
                        class="
                          form-control form-control-lg
                          fs-6
                          border-0
                          shadow-sm
                        "
                      >
                      </textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <button
                        type="submit"
                        class="btn btn-primary px-3 mt-5 button2"
                        style="border-radius: 20px" @click="submit"
                      >
                        Send Message
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- footer  -->

    <footer class="footer border-top py-4 bg-primary text-white">
      <div class="container-lg">
        <div class="row">
          <div class="col-lg-12">
            <p class="m-0 text-center text-white fs-4">
              &copy; by Ravij Parikh
            </p>
          </div>
        </div>
      </div>
    </footer>
  </main>
</template>

<script>
import axios from "axios";
export default {
  link: [
    {
      type: "text/css",
      rel: "stylesheet",
      href: "//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css",
    },
    {
      type: "script",
      href: "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css",
    },
    {
      type: "script",
      href: "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js",
    },
  ],
  data() {
    return {
      data: {
        name:'',
        email:'',
        subject:'',
        message:'',
    },
    };
  },
   methods: {
    async submit(e){
      let a = document.getElementById('name').value;
      let b = document.getElementById('email').value;
      let c = document.getElementById('subject').value;
      let d = document.getElementById('message').value;
      if(a == '' || b == '' || c == '' || d == '')
      {
        alert('Enter all fields ...')
        e.preventDefault()
      }
      else
      {
          e.preventDefault();
        alert("Message sent successfully ...");
        const data = await axios.post(
        "http://localhost/CMS/contact.php",
        this.data
      );
      const clear = document.getElementById("contact");
      
    }
    },
   }
};
</script>
<style scoped>
.block {
  background-color: blue;
  color: white;
  font-style: italic;
  height: 100px;
  text-align: center;
  font-size: 30px;
  padding-top: 19px;
}
.button2:hover {
  border: 2px solid blue;
  background-color: transparent;
  color: blue;
  transition-duration: 0.3s;
  transition-timing-function: ease-out;
}
.button1:hover {
  border: 2px solid blue;
  background-color: transparent;
  color: blue;
  transition-timing-function: ease-out;
  transition-duration: 0.3s;
}
.button3:hover {
  border: 2px solid blue;
  background-color: transparent;
  color: blue;
  transition-timing-function: ease-in;
  transition-duration: 0.3s;
}
</style>
