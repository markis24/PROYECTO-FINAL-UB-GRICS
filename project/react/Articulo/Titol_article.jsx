import React, { useState, useEffect } from 'react';
import axios from 'axios';
import './Titol_article.css';
import {useParams} from "react-router-dom";

function TitolArticle() {
  const [article, setArticle] = useState(null);
  const { id } = useParams(); // Obtener el ID del proyecto de los parámetros de la URL

  useEffect(() => {
    const fetchArticle = async () => {
      try {
        const response = await axios.get(`http://localhost:8000/api/articles/${id}`);
        console.log('Response data:', response.data);  // Log the response data
        setArticle(response.data);
      } catch (error) {
        console.error('Error fetching project:', error);
      }
    };

    fetchArticle();
  }, [id]); // Agregar id como dependencia para que se vuelva a ejecutar cuando cambie
  return (
    <div className="titol-article-container">
      {article ? (
        <div>
          <h1 className="titol-article-title">{article.title_article}</h1>
          <h2 className="titol-article-subtitle">Resumen del Articulo</h2>
          <p className="titol-article-text">{article.text_article}</p>
        </div>
      ) : (
        <h3>Cargando...</h3>
      )}
    </div>
  );
}

export default TitolArticle;
