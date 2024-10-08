/* eslint-disable @typescript-eslint/ban-ts-comment */
import { createTask } from "../api/task";
import AddTaskForm from "../components/AddTaskForm";
import TaskList from "../components/TaskList";

export default function App() {
  const handleCreteSubmit = (name: string) => {
    if (name.trim() == "") {
      alert("Task cannot be empty");
      return;
    }
    createTask(name);
  };

  return (
    <>
      <div className="container">
        <header className="m-10 ">
          <AddTaskForm handelSubmit={handleCreteSubmit} />
        </header>
        <div className="card flex w-full justify-center ">
          <TaskList />
        </div>
      </div>
    </>
  );
}
