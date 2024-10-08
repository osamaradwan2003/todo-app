import axios from "axios";

export function createTask(name: string) {
  return axios.post("/api/task", {
    name,
  });
}

export function getTasks() {
  return axios.get("/api/tasks");
}

export function updateState(id: string, is_complated: boolean) {
  return axios.put(`/api/task/${id}`, {
    is_completed: is_complated,
  });
}

export function deleteTask(id: string) {
  return axios.delete(`/api/task/${id}`);
}
