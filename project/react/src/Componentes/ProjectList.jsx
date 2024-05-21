import React, { useEffect, useState } from 'react';
import axios from 'axios';
import ProjecteListItem from './ProjectListItem';

const ProjectList = ({ onSelectProject }) => {
    const [projectes, setProjectes] = useState([]);
    const [loading, setLoading] = useState(true);
    const [error, setError] = useState(null);

    useEffect(() => {
        axios.get('http://localhost:8000/api/projectes')
            .then(response => {
                setProjectes(response.data.data); // Ajuste dependiendo de cómo Laravel envía la respuesta paginada
                setLoading(false);
            })
            .catch(error => {
                setError(error);
                setLoading(false);
            });
    }, []);

    if (loading) return <p>Cargando...</p>;
    if (error) return <p>Error al cargar: {error.message}</p>;

    return (
        <div className="projecte-list">
            {projectes.map(projecte => (
                <ProjecteListItem
                    key={projecte.id}
                    projecte={projecte}
                    onSelect={onSelectProject}
                />
            ))}
        </div>
    );
};

export default ProjectList;
