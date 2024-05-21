import React, { useState } from 'react';
import ProjectList from './Componentes/ProjectList';
import ProjectDetail from './Componentes/ProjectDetail';

function App() {
    const [selectedProjectId, setSelectedProjectId] = useState(null);

    const handleSelectProject = (projectId) => {
        setSelectedProjectId(projectId);
    };

    return (
        <div className="App">
            {selectedProjectId ? (
                <ProjectDetail id={selectedProjectId} />
            ) : (
                <ProjectList onSelectProject={handleSelectProject} />
            )}
        </div>
    );
}

export default App;
