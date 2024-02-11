import { useState } from 'react'
import './Prova.css'

function Prova(){
  const [showDiv, setShowDiv] = useState(false)
  const handleShowDiv = () => {
    setShowDiv(!showDiv);
  };

  return(
    <div>
      <button className='button' onClick={handleShowDiv}>OnScreen</button>
      {showDiv && (
        <div className='div-show'>
          This is the div that appers on click.
        </div>
      )}
    </div>
  )
}

export default Prova