import React from 'react';
import { createRoot } from 'react-dom/client';
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';
import App from './Componentes/Apps/App';
import InfoProjecte from '../InfoProyecto/InfoProjecte';
import Titol_article from '../Articulo/Titol_article';
import ArticleDetails from '../Articulo/ArticleDetails';
import ArticleList from '../Articulo/ArticleList.jsx';

const container = document.getElementById('root');
const root = createRoot(container);

root.render(
  <Router>
    <Routes>
      <Route path="/" element={<App />} />
      <Route path="/article-list" element={<ArticleList />} />
    <Route path="/infoprojecte/:id" element={<InfoProjecte />} />
      <Route path="/article/:id" element={<Titol_article />} />
    </Routes>
  </Router>
);
