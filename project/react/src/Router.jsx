import React from "react";
import { BrowserRouter as Router, Routes, Route } from "react-router-dom";
import App from "./Componentes/Apps/App.jsx";

const AppRouter = () => {
  return (
    <Router>
      <Routes>
        <Route path="/" element={<App/>} />
      </Routes>
    </Router>
  );
};

export default AppRouter;
