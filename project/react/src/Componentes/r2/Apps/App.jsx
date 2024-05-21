import Header from '../NavBar/Header';
import Main_page from '../PaginaPrincipal/Main_page';
import Membres from '../Miembros/Miembros';
import Projectes from '../Proyectos/Proyectos';
import Publicaciones from '../Publicaciones/Publicaciones';
import Contacto from '../Contacto/Contacto';
import './App.css';
import ProjectesList from "../ProjectList.jsx";

export default function App() {
    return (
        <>
            <Header/>
            <div>
                {/*<Main_page id="main_page"/>*/}
                {/*<Membres id="miembros"/>*/}
                {/*<Projectes id="proyectos"/>*/}
                {/*<Publicaciones id="publicaciones"/>*/}
                {/*<Contacto id="contacto"/>*/}
                <ProjectesList id="projectList"/>
            </div>
        </>
    );
}

