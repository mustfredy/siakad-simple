import http from "../http-common";

class DosenDataService {
  getAll(params) {
    return http.get("/dosen", { params });
  }

  get(id) {
    return http.get(`/dosen/${id}`);
  }

  create(data) {
    return http.post("/dosen", data);
  }

  update(id, data) {
    return http.put(`/dosen/${id}`, data);
  }

  delete(id) {
    return http.delete(`/dosen/${id}`);
  }

  deleteAll() {
    return http.delete(`/dosen`);
  }
}

export default new DosenDataService();
