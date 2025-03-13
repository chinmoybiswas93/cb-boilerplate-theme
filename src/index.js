import "./styles/main.scss";
import ExampleReactComponent from "./scripts/ExampleReactComponent";
import React from "react";
import ReactDOM from "react-dom/client";

const root = ReactDOM.createRoot(document.querySelector("#cb-app-root"));
root.render(<ExampleReactComponent />);
