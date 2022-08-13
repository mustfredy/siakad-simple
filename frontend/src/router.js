import Vue from "vue";
import Router from "vue-router";

Vue.use(Router);

export default new Router({
  mode: "history",
  routes: [
    
    {
      // path: "/dosen-list",
      path: "/",
      name: "dosen-list",
      component: () => import("./components/dosen/List")
    },
    {
      path: "/dosen-add",
      name: "dosen-add",
      component: () => import("./components/dosen/Add")
    },
    {
      path: "/dosen-update/:id",
      name: "dosen-update",
      component: () => import("./components/dosen/Update")
    },
    {
      path: "/matakuliah-list",
      name: "matakuliah-list",
      component: () => import("./components/matakuliah/List")
    },
    {
      path: "/matakuliah-add",
      name: "matakuliah-add",
      component: () => import("./components/matakuliah/Add")
    },
    {
      path: "/matakuliah-update/:id",
      name: "matakuliah-update",
      component: () => import("./components/matakuliah/Update")
    },

    {
      path: "/dosen_matakuliah-list",
      name: "dosen_matakuliah-list",
      component: () => import("./components/dosen_matakuliah/List")
    },
    {
      path: "/dosen_matakuliah-add",
      name: "dosen_matakuliah-add",
      component: () => import("./components/dosen_matakuliah/Add")
    },
    {
      path: "/dosen_matakuliah-update/:id",
      name: "dosen_matakuliah-update",
      component: () => import("./components/dosen_matakuliah/Update")
    },
    {
      path: "/login",
      name: "login",
      component: () => import("./components/login/Login")
    },


  ]
});
