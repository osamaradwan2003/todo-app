// interface TaskListProbs {
//   items: [];
//   onDelete: (id: string) => void;
//   onCheck: (id: string) => void;
// }

import { useEffect, useState } from "react";
import { getTasks } from "../api/task";
import ListItem from "./ListItem";

const TaskList: React.FC = () => {
  const [listItems, setListItems] = useState();

  useEffect(() => {
    getTasks()
      .then((res) => setListItems(res.data.data))
      .catch((err) => alert(err.response.message));
  }, []);
  return (
    <div className="task-list w-1/2 flex gap-2 bg-slate-200 p-2 rounded-lg flex-col min-h-60 text-center">
      {/*@ts-ignore*/}
      {listItems && listItems.length > 0
        ? //@ts-ignore
          listItems.map((item) => (
            <ListItem
              is_complete={item.is_completed}
              key={item.id}
              name={item.name}
              id={item.id}
            />
          ))
        : "No Task. "}
    </div>
  );
};

export default TaskList;
