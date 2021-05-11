import React, {useState,useEffect} from 'react';
import ReactDOM from 'react-dom';


function Example() {

    const [nome, setNome] = useState(0);
    const [aux, setAux] = useState(0)

    useEffect(() => {
        setAux(aux+1);
    }, [nome])

    return (
        <div>
        <div>
           <p>Ola {nome}</p>
           <p>cnt {aux}</p>
           <button onClick={()=> setNome(nome+1)}>Clica aqui</button>
       </div>
        </div>

    );
}

export default Example;

if (document.getElementById('app')) {
    ReactDOM.render(<Example />, document.getElementById('app'));
}
