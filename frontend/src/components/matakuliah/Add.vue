<template>
  <div class="submit-form">
    <div v-if="!submitted">
      <div class="form-group">
        <label for="nama_matakuliah">Nama Mata Kuliah</label>
        <input
          type="text"
          class="form-control"
          id="nama_matakuliah"
          required
          v-model="tutorial.nama_matakuliah"
          name="nama_matakuliah"
        />
      </div>


      <button @click="saveTutorial" class="btn btn-success">Submit</button>
    </div>

    <div v-else>
      <h4>You submitted successfully!</h4>
      <button class="btn btn-success" @click="newTutorial">Add</button>
    </div>
  </div>
</template>

<script>
import MataKuliahService from "../../services/MataKuliahService";

export default {
  name: "add-tutorial",
  data() {
    return {
      tutorial: {
        id: null,
        nama_matakuliah: "",
      },
      submitted: false
    };
  },
  methods: {
    saveTutorial() {
      var data = {
        nama_matakuliah: this.tutorial.nama_matakuliah
      };

      MataKuliahService.create(data)
        .then(response => {
          this.tutorial.id = response.data.id;
          console.log(response.data);
          this.submitted = true;
        })
        .catch(e => {
          console.log(e);
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
