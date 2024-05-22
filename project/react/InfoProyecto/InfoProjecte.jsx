import React, { useState, useEffect } from 'react';
import axios from 'axios';
import './InfoProjecte.css';
import { useParams } from 'react-router-dom';

function InfoProjecte() {
  const [projecte, setProjecte] = useState(null);
  const { id } = useParams(); // Obtener el ID del proyecto de los parámetros de la URL

  useEffect(() => {
    const fetchProjecte = async () => {
      try {
        const response = await axios.get(`http://localhost:8000/api/projectes/${id}`);
        console.log('Response data:', response.data);  // Log the response data
        setProjecte(response.data);
      } catch (error) {
        console.error('Error fetching project:', error);
      }
    };

    fetchProjecte();
  }, [id]); // Agregar id como dependencia para que se vuelva a ejecutar cuando cambie

  return (
    <div className="info-projecte-container">
      {projecte ? (
        <>
          <h1 className="info-projecte-title">{projecte.title_projecte}</h1>
          <div>
            <h2 className="info-projecte-subtitle">Resum Projecte</h2>
            <p className="info-projecte-text">{projecte.text_projecte}</p>
            <h3 className="info-projecte-subtitle">Resultados:</h3>
            <p className="info-projecte-text">{projecte.text_resultat}</p>
          </div>
        </>
      ) : (
        <h3>Cargando...</h3>
      )}
    </div>
  );
}

export default InfoProjecte;
