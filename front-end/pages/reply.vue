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

    <br><br><br><br>
 <h4 class="text-center">Chat with User</h4>
<br><br>
<h5 class="text-center">Ticket ID of User : {{data.token}} Admin ID : {{data.adminID}} User ID : {{data.userID}} </h5>
<div class="d-flex mt-5">
    <table class="table table-bordered table-hover" style="width:40%;margin-left: 460px;">
        <tr>
          <th class="text-center bg-primary" style="padding: 15px;">Chats</th>
        </tr>
       <tr v-for="row in data.alldata" :key="row">
    <td :style="[ row.message_from == '0' ? { 'text-align': 'left','padding': '20px'}: { 'text-align':'right','padding': '20px'}]"> {{row.message_from == 0 ? 'User' : 'Admin'}} : {{row.messages}} <small>{{row.Date}}</small></td>
    </tr>
        <tr v-if="!data.alldata">
          <td colspan="6" class="text-center" style="padding:20px;">No Data Found</td>
        </tr>
      </table>
  </div>
  <br><br>
  <p v-if="data.status" style="font-size:40px;" class="text-center">Ticket is closed</p>
  <br>
<!-- chat section  -->
<section class="bg-primary">
  <div class="container my-5 py-5 text-dark">
      <div class="row d-flex justify-content-center">
          <div class="col-md-10 col-lg-8 col-xl-6">
              <div class="card">
          <div class="card-body p-4">
            <div class="d-flex flex-start w-100">
              <div class="w-100">
                <h5 class="text-center">Reply to complaint</h5>
                <form>
                  <div class="form-outline mt-3">
                    <textarea class="form-control" id="textAreaExample" v-model="data.message" rows="4" placeholder="Type yor messages here ..."></textarea>
                  <label class="form-label mt-2" for="textAreaExample">Have a chat with user?</label>
                </div>
                <div class="d-flex justify-content-between">
                  <button v-if="data.status == 'OPEN'" type="button" class="btn btn-primary px-4" style="margin-left:150px;" @click="reply()">
                    Send
                    <i class="fas fa-long-arrow-alt-right ms-1"></i>
                  </button>
                  <button v-if="data.status == 'OPEN'" type="button" class="btn btn-primary px-4" style="margin-right:150px;" @click="close()">
                    Close
                    <i class="fas fa-long-arrow-alt-right ms-1"></i>
                  </button>  
               </div>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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
        alldata: "",
        nodata: false,
        token: this.$route.query.ticket_ID,
        adminID: this.$route.query.admin_ID,
        userID: this.$route.query.user_ID,
        send: "",
        message: "",
        status: "",
      },
    };
  },
  async mounted() {
console.log("inside mounted");
 const data = await axios.post(
        "http://localhost/CMS/chat1.php",
        this.data
      );
      console.log("data", data);
      this.data.alldata = data.data;

      const data1 = await axios.post(
        "http://localhost/CMS/close1.php",
        this.data);
      console.log("status : ", data1);  
       this.data.status = data1.data[0].ticket_status; 
  },
  methods: {
    async reply(){
     alert("Replied successfully...")
      const data = await axios.post(
        "http://localhost/CMS/reply.php",
        this.data
      );
      this.data.send = data.data;
      const clear = document.getElementById("textAreaExample");
      clear.value='';
     },
     async close(){
        alert('Ticket closed successfully...')
        const data = await axios.post(
        "http://localhost/CMS/close.php",
        this.data
      );
        
     }
  }
}
</script>
