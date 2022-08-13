import axios from "axios";

export default axios.create({
  // baseURL: "http://localhost:8080/api",  
  baseURL: "http://localhost:8000/siakad_simple/backend/public/api/v1",
  headers: {
    "Content-type": "application/json"
  }
});
