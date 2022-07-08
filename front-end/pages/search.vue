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
            <NuxtLink to="/" class="nav-link">Home</NuxtLink>
            <NuxtLink to="/user" class="nav-link">Complaint</NuxtLink>
            <NuxtLink to="/search" class="nav-link">View</NuxtLink>
            <NuxtLink to="/admin" class="nav-link">Admin</NuxtLink>
          </div>
        </div>
      </div>
    </nav>

    <br /><br /><br /><br />
    <h3 class="text-center text-primary">
      Enter email of user to see all previous complaints
    </h3>
    <div class="container mt-4 mb-5 d-flex justify-content-center">
      <div class="card px-1 py-3 text-center">
        <div class="card-body">
          <h4 class="card-title mb-3">
            Enter email of user to see previous complaints
          </h4>
          <form @submit.prevent="submit">
            <div class="row mt-5">
              <div class="col-sm-12">
                <div class="form-group">
                  <div class="input-group">
                    <input
                      class="form-control"
                      type="text"
                      id="email"
                      placeholder="Email"
                      v-model="data.query"
                    />
                  </div>
                </div>
              </div>
            </div>
            <button
              class="btn btn-primary btn-block confirm-button mt-3"
              type="submit"
            >
              Submit
            </button>
          </form>
        </div>
      </div>
    </div>
    <div class="box container">
      <table class="table table-bordered table-hover">
        <tr class="">
          <th style="padding: 20px;">Name</th>
          <th style="padding: 20px;">Email</th>
          <th style="padding: 20px;">Mobile</th>
          <th style="padding: 20px;">Status</th>
          <th style="padding: 20px;">view messages</th>
        </tr>

        <tr v-for="row in data.allData" :key="row">
          <td style="padding: 20px;">{{ row.name }}</td>
          <td style="padding: 20px;">{{ row.email }}</td>
          <td style="padding: 20px;">{{ row.mobile }}</td>
          <td style="padding: 20px;">{{ row.ticket_status }}</td>
          
            <td style="padding: 10px;"><button type="button" class="btn btn-primary bg-primary" @click="click(row.ticket_ID,row.user_ID)">Messages</button></td>
        </tr>
        <tr v-if="!data.allData">
          <td colspan="6" class="text-center" style="padding: 20px;">No Data Found</td>
        </tr>
      </table>
    </div>
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
    {
      type: "script",
      href: "https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.js",
    },
  ],

  data() {
    return {
      data: {
        allData: "",
        query: "",
        nodata: false,
      },
    };
  },
  
  methods: {
    async submit(e){
      let x = document.getElementById('email').value;
      if(x == '')
      {
        alert('Enter valid email ...')
      }
      else
      {
        const data = await axios.post(
        "http://localhost/CMS/search.php",
        this.data
      );
      this.data.allData = data.data;
    }
    },
    async click(ticketID,userID) {
      this.$router.push('/chat?ticket_ID='+ ticketID + '&' + 'user_ID=' + userID);
    }
  },
};
</script>
