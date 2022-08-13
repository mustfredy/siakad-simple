import http from "../http-common";

class MataKuliahService {
  getAll(params) {
    return http.get("/matakuliah", { params });
  }

  get(id) {
    return http.get(`/matakuliah/${id}`);
  }

  create(data) {
    return http.post("/matakuliah", data);
  }

  update(id, data) {
    return http.put(`/matakuliah/${id}`, data);
  }

  delete(id) {
    return http.delete(`/matakuliah/${id}`);
  }

  deleteAll() {
    return http.delete(`/matakuliah`);
  }
}

export default new MataKuliahService();
