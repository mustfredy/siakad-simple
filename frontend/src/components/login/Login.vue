<template>
  <div class="submit-form">
    <div v-if="!submitted">
      <div class="form-group">
        <label for="email">Email</label>
        <input
          placeholder="admin@gmail.com"
          type="text"
          class="form-control"
          id="email"
          required
          v-model="tutorial.email"
          name="email"
        />
      </div>
      <div class="form-group">
        <label for="nama_dosen">Password</label>
        <input
          placeholder="admin@gmail.com"
          type="password"
          class="form-control"
          id="password"
          required
          v-model="tutorial.password"
          name="password"
        />
      </div>


      <button @click="saveTutorial" class="btn btn-success">Login</button>
    </div>

    <div v-else>
      <h4>You are login successfully!</h4>
    </div>
    <p>{{ message }}</p>
  </div>
</template>

<script>
import UserDataService from "../../services/UserDataService";

export default {
  name: "add-tutorial",
  data() {
    return {
      tutorial: {
      },
      message: '',
      submitted: false
    };
  },
  methods: {
    saveTutorial() {
      var data = {
        email: this.tutorial.email,
        password: this.tutorial.password,
      };

      UserDataService.login(data)
        .then(response => {
          // this.tutorial.id = response.data.id;
          console.log(response.data);
          this.message = '';
          this.submitted = true;
        })
        .catch(e => {
          console.log(e);
          if (e.response.status === 401) {
          this.message = 'Not Authorized';
          }
          
        });
    },
    
    newTutorial() {
      this.submitted = false;
      this.tutorial = {};
    }
  }
};
</script>

<style>
.submit-form {
  max-width: 300px;
  margin: auto;
}
</style>
