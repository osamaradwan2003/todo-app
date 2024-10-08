import { useRef } from "react";

interface AddTaskFormProbs {
  handelSubmit: (name: string) => void;
}

const AddTaskForm: React.FC<AddTaskFormProbs> = ({ handelSubmit }) => {
  const taskInput = useRef<HTMLInputElement>(null);
  return (
    <form
      className="flex gap-2 w-full justify-center"
      onSubmit={function (e) {
        e.preventDefault();
        //@ts-ignore
        handelSubmit(taskInput.current.value);
        //@ts-ignore
        taskInput.current.value = ""; // Reset the input field after form submission
      }}
    >
      <input
        ref={taskInput}
        className="py-2 px-5 bg-slate-200 rounded-lg  block w-[50%]"
        type="text"
        name="task"
        placeholder="Add a new task"
      />
      <button
        type="submit"
        className="w-20  bg-slate-600 text-slate-50 text-2xl font-bold cursor-pointer rounded-lg"
      >
        +
      </button>
    </form>
  );
};

export default AddTaskForm;
