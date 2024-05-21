import React, { useEffect, useState } from 'react';
import axios from 'axios';
import './Project.css';

const ProjectDetail = ({ id }) => {
    const [projecte, setProjecte] = useState(null);
    const [loading, setLoading] = useState(true);
    const [error, setError] = useState(null);

    useEffect(() => {
        axios.get(`http://localhost:8000/api/projectes/${id}`)
            .then(response => {
                setProjecte(response.data);
                setLoading(false);
            })
            .catch(error => {
                setError(error);
                setLoading(false);
            });
    }, [id]);

    if (loading) return <p>Cargando...</p>;
    if (error) return <p>Error al cargar: {error.message}</p>;

    return (
        <div className="info-projecte-container">
            <h1 className="info-projecte-title">{projecte.title_projecte}</h1>
            <h2 className="info-projecte-subtitle">Resum Projecte</h2>
            <p className="info-projecte-text">{projecte.text_projecte}</p>
            <h2 className="info-projecte-subtitle">Contingut</h2>
            <p className="info-projecte-text">{projecte.text_resultat}</p>
        </div>
    );
};

export default ProjectDetail;
