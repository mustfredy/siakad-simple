<template>
  <div class="list row">


    <div class="col-md-6">
      <h4>Mata Kuliah List</h4>
      <a href="/matakuliah-add"  class="btn btn-success btn-sm">Add</a>
      <br>
      <br>
      <ul class="list-group" id="tutorials-list">
        <li
          class="list-group-item"
          :class="{ active: index == currentIndex }"
          v-for="(tutorial, index) in tutorials"
          :key="index"
          @click="setActiveTutorial(tutorial, index)"
        >
          {{ tutorial.nama_matakuliah }}
        </li>
      </ul>

      <br>
    </div>

    

    <div class="col-md-6">
      <div v-if="currentTutorial">
        <h4>Data Mata Kuliah :</h4>
        <div>
          <label><strong>Nama Mata Kuliah:</strong></label> {{ currentTutorial.nama_matakuliah }}
        </div>
        <!-- <div>
          <label><strong>Description:</strong></label>
          {{ currentTutorial.description }}
        </div> -->

        <a
          class="badge badge-warning"
          :href="'/matakuliah-update/' + currentTutorial.id"
        >
          Edit
        </a>
      </div>
      <div v-else>
        <br />
        <p>Please click on a Data...</p>
      </div>
    </div>

    
    <div class="col-md-12">

      <b-pagination
        v-model="page"
        :total-rows="count"
        :per-page="pageSize"
        prev-text="Prev"
        next-text="Next"
        @change="handlePageChange"
      ></b-pagination>
    </div>
    
  </div>
</template>

<script>
import MataKuliahService from "../../services/MataKuliahService";

export default {
  name: "tutorials-list",
  data() {
    return {
      tutorials: [],
      currentTutorial: null,
      currentIndex: -1,
      searchTitle: "",

      page: 1,
      count: 0,
      pageSize: 10,

      pageSizes: [5, 10],
    };
  },
  methods: {
    getRequestParams(searchTitle, page, pageSize) {
      let params = {};

      if (searchTitle) {
        params["title"] = searchTitle;
      }

      if (page) {
        // params["page"] = page - 1;
        params["page"] = page;
      }

      if (pageSize) {
        params["size"] = pageSize;
      }

      return params;
    },

    retrieveTutorials() {
      const params = this.getRequestParams(
        this.searchTitle,
        this.page,
        this.pageSize
      );

      MataKuliahService.getAll(params)
        .then((response) => {
          const { tutorials, totalItems } = response.data;
          this.tutorials = tutorials;
          this.count = totalItems;

          console.log(response.data);
        })
        .catch((e) => {
          console.log(e);
        });
    },

    handlePageChange(value) {
      this.page = value;
      this.retrieveTutorials();
    },

    handlePageSizeChange(event) {
      this.pageSize = event.target.value;
      this.page = 1;
      this.retrieveTutorials();
    },

    refreshList() {
      this.retrieveTutorials();
      this.currentTutorial = null;
      this.currentIndex = -1;
    },

    setActiveTutorial(tutorial, index) {
      this.currentTutorial = tutorial;
      this.currentIndex = index;
    },

    removeAllTutorials() {
      MataKuliahService.deleteAll()
        .then((response) => {
          console.log(response.data);
          this.refreshList();
        })
        .catch((e) => {
          console.log(e);
        });
    },
  },
  mounted() {
    this.retrieveTutorials();
  },
};
</script>

<style>
.list {
  text-align: left;
  max-width: 750px;
  margin: auto;
}
</style>
