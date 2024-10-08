import { StrictMode } from "react";
import { createRoot } from "react-dom/client";
import "./css/index.css";
import "./config/axios.ts";
import App from "./layout/App";

createRoot(document.getElementById("root")!).render(
  <StrictMode>
    <App />
  </StrictMode>
);
