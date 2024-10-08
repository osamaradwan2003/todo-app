import { useEffect, useRef, useState } from "react";
import { deleteTask, updateState } from "../api/task";

interface ListItemProps {
  id: string;
  name: string;
  is_complete: boolean;
  // onDelete: (id: string) => void;
}

const ListItem: React.FC<ListItemProps> = ({ id, name, is_complete }) => {
  const [isComplated, setIscomplated] = useState(is_complete);
  const handeleComplateSubmit = () => {
    setIscomplated(!is_complete);
    setTimeout(update, 5);
  };

  function update() {
    updateState(id, isComplated)
      .then((res) => {
        setIscomplated(res.data.is_complete);
      })
      .catch((err) => alert(err.response.data.message));
  }

  return (
    <div
      className={`todo-item flex justify-between bg-slate-300 px-2 py-1 rounded-xl ${
        isComplated ?? "line-through decoration-solid decoration-2"
      }`}
    >
      <div className="flex gap-2">
        <input
          onChange={() => handeleComplateSubmit()}
          type="checkbox"
          checked={isComplated}
        />
        <p>{name}</p>
      </div>
      <button
        onClick={() => {
          deleteTask(id)
            .then((res) => alert(res.data.message))
            .catch((err) => alert(err.response.data.message));
        }}
        className="delete-btn"
      >
        &#x1F5D1;
      </button>
    </div>
  );
};

export default ListItem;
