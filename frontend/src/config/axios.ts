/* eslint-disable @typescript-eslint/ban-ts-comment */
import axios from "axios";
// import { getCookie } from "../utils/helpers";

//@ts-ignore
axios.defaults.baseURL = import.meta.env.VITE_BASE_URL;
// axios.defaults.headers.common["Accept"] = "application/json";
// axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
// axios.get("/sanctum/csrf-cookie", { withCredentials: true });
// axios.defaults.headers.common["XSRF-TOKEN"] = getCookie("XSRF-TOKEN");

// axios.defaults.withCredentials = true;
