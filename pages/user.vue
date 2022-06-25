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
    <!-- CSS only -->
    <!-- JavaScript Bundle with Popper -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
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
            <NuxtLink to="/index" class="nav-link">Home</NuxtLink>
            <NuxtLink to="/user" class="nav-link">Complaint</NuxtLink>
            <NuxtLink to="/search" class="nav-link">View</NuxtLink>
            <NuxtLink to="/admin" class="nav-link">Admin</NuxtLink>
          </div>
        </div>
      </div>
    </nav>

    <br /><br /><br /><br />
    <h1 class="text-center text-primary mb-5">User Complaint Box</h1>
    <div class="container mt-5 mb-5 d-flex justify-content-center">
      <div class="card px-1 py-3 text-center">
        <div class="card-body">
          <h4 class="card-title mb-3">Enter user details</h4>
          <form @submit="submit">
           <div class="row mt-4"> 
              <div class="col-sm-12">
                <div class="form-group">
                  <div class="input-group">
                    <input
                      class="form-control"
                      type=""
                      placeholder="Email"
                      v-model="data.email"
                      required
                    />
                  </div>
                </div>
              </div>
            </div>
           
             <div class="row mt-3">
              <div class="col-sm-12">
                <div class="form-group">
                  <div class="input-group">
                    <input
                      class="form-control"
                      type="text"
                      placeholder="Name"
                      v-model="data.name"
                      required
                    />
                  </div>
                </div>
              </div>
            </div>
           <div class="row mt-4">
              <div class="col-sm-12">
                <div class="form-group">
                  <div class="input-group">
                    <input
                      class="form-control"
                      type=""
                      placeholder="Mobile"
                      v-model="data.mobile"
                      required
                    />
                  </div>
                </div>
              </div>
            </div>   
               <div class="row mt-3">
              <div class="col-sm-12">
                <div class="form-group">
                  <div class="input-group">
                    <textarea
                      class="form-control"
                      id="exampleFormControlTextarea1"
                      rows="3"
                      placeholder="Message"
                      v-model="data.message"
                      required
                    ></textarea>
                  </div>
                </div>
              </div>
            </div>
         
            <div class="d-flex flex-column text-center px-5 mt-3 mb-3">
              <small class="agree-text"
                >Registered complaint should be geniune.
              </small>
            </div>
           <v-btn
              @click="submit" 
              class="btn btn-primary btn-block confirm-button mt-3"
              >Complaint</v-btn
            >
          </form>
        </div>
      </div>
    </div>
  </main>
</template>

<script>
import axios from "axios";
export default {
  name: "PostFormAxios",
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
    {
      type: "script",
      href: "https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.js",
    },
  ],

  data() {
    return {
      data: {
        mobile:"",
        name:"",
        message:"",
        email: "",
      },
    };
  },
  methods: {
  async submit(e) {
    e.preventDefault();
    alert('Complaint registed successfully');
      const data = await axios.post(
        "http://localhost/CMS/api1.php",
        this.data
      );
      this.$router.push("/search");
    },  
  },
};
</script>
