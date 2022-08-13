import http from "../http-common";

class DosenMatakuliahDataService {
  getAll(params) {
    return http.get("/dosen-matakuliah", { params });
  }

  get(id) {
    return http.get(`/dosen-matakuliah/${id}`);
  }

  create(data) {
    return http.post("/dosen-matakuliah", data);
  }

  update(id, data) {
    return http.put(`/dosen-matakuliah/${id}`, data);
  }

  delete(id) {
    return http.delete(`/dosen-matakuliah/${id}`);
  }

  deleteAll() {
    return http.delete(`/dosen-matakuliah`);
  }
}

export default new DosenMatakuliahDataService();
