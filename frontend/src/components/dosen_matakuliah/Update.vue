<template>
  <div v-if="currentTutorial" class="edit-form">
    <h4>Update</h4>
    <form>
      
      <div class="form-group">
        <label for="id_matakuliah" class="col-form-label">Matakuliah</label>
            <select class="form-control" name="id_matakuliah" v-model="currentTutorial.id_mata_kuliah">
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
        <label for="id_dosen" class="col-form-label">Dosen</label>
            <select class="form-control" name="id_dosen" v-model="currentTutorial.id_dosen">
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

      <!-- <div class="form-group">
        <label><strong>Status:</strong></label>
        {{ currentTutorial.published ? "Published" : "Pending" }}
      </div> -->
    </form>



    <button type="submit" class="badge badge-success mr-2"
      @click="updateTutorial"
    >
      Update
    </button>
    
    <button class="badge badge-danger mr-2"
      @click="deleteTutorial"
    >
      Delete
    </button>
    
    <p>{{ message }}</p>
  </div>

  <div v-else>
    <br />
    <p>Please click on a Tutorial...</p>
  </div>
</template>

<script>
import DosenMatakuliahDataService from "../../services/DosenMatakuliahDataService";

import DosenDataService from "../../services/DosenDataService";
import MataKuliahService from "../../services/MataKuliahService";

export default {
  name: "tutorial",
  data() {
    return {
      list_dosen: [],
      list_matakuliah: [],
      currentTutorial: null,
      message: ''
    };
  },
  methods: {
    getTutorial(id) {
      DosenMatakuliahDataService.get(id)
        .then(response => {
          this.currentTutorial = response.data;
          console.log(response.data);
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
    updateTutorial() {
      DosenMatakuliahDataService.update(this.currentTutorial.id, this.currentTutorial)
        .then(response => {
          console.log(response.data);
          this.message = 'The tutorial was updated successfully!';
        })
        .catch(e => {
          console.log(e);
        });
    },

    deleteTutorial() {
      DosenMatakuliahDataService.delete(this.currentTutorial.id)
        .then(response => {
          console.log(response.data);
          this.$router.push({ name: "dosen_matakuliah-list" });
        })
        .catch(e => {
          console.log(e);
        });
    }
  },
  mounted() {
    this.message = '';
    this.getTutorial(this.$route.params.id);
    this.loadMatakuliah();
  }
};
</script>

<style>
.edit-form {
  max-width: 300px;
  margin: auto;
}
</style>
