<template>
  <div class="submit-form">
    <div v-if="!submitted">
      
      <div class="form-group">
        <label for="id_matakuliah" class="col-form-label">Matakuliah</label>
            <select class="form-control" name="id_matakuliah" v-model="id_matakuliah">
              <option value="">Pilih Mata Kuliah</option>
              <option
                :key="index"
                v-for="(item, index) in list_matakuliah"
                :value="item.id"
              >
                {{ item.nama_matakuliah }}
              </option>
            </select>
        </div>
      <div class="form-group">
        <label for="id_dosen" class="col-form-label">Matakuliah</label>
            <select class="form-control" name="id_dosen" v-model="id_dosen">
              <option value="">Pilih Dosen</option>
              <option
                :key="index"
                v-for="(item, index) in list_dosen"
                :value="item.id"
              >
                {{ item.nama_dosen }}
              </option>
            </select>
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
import DosenMatakuliahDataService from "../../services/DosenMatakuliahDataService";

import DosenDataService from "../../services/DosenDataService";
import MataKuliahService from "../../services/MataKuliahService";

export default {
  name: "add-dosen_matakuliah",
  
  data() {

    return {
        id_dosen: "",
        list_dosen: [],

        id_matakuliah: "",
        list_matakuliah: [],
        
        submitted: false
    };
  },
  methods: {
    saveTutorial() {
      var data = {
        id_dosen: this.id_dosen,
        id_mata_kuliah: this.id_matakuliah
      };

      DosenMatakuliahDataService.create(data)
        .then(response => {
          // this.tutorial.id = response.data.id;
          console.log(response.data);
          this.submitted = true;
        })
        .catch(e => {
          console.log(e);
        });

      
    },
    loadMatakuliah() {
      DosenDataService.getAll()
        .then(response => {
          this.list_dosen = response.data.tutorials;
          console.log(this.list_matakuliah);
        })
        .catch(e => {
          console.log(e);
        });

      MataKuliahService.getAll()
        .then(response => {
          // const { tutorial } = response.data;
          this.list_matakuliah = response.data.tutorials;
          // console.log(response.data);
          console.log(this.list_matakuliah);
          // this.submitted = true;
        })
        .catch(e => {
          console.log(e);
        });
    },
    newTutorial() {
      this.submitted = false;
      this.tutorial = {};
    },
    
  },
  mounted() {
    this.loadMatakuliah();
  },
};
</script>

<style>
.submit-form {
  max-width: 300px;
  margin: auto;
}
</style>
