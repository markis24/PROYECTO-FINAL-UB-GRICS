import React from 'react';

const ProjecteListItem = ({ projecte, onSelect }) => {
    const handleClick = () => {
        onSelect(projecte.id);
    };

    return (
        <div className="projecte-list-item" onClick={handleClick}>
            <h3>{projecte.title_projecte}</h3>
        </div>
    );
};

export default ProjecteListItem;
