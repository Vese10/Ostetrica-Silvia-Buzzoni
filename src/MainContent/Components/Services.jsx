import { useState } from 'react'
import './Services.css'

function Services({children}){
  const [showDiv, setShowDiv] = useState(false)
  const handleShowDiv = () => {
    setShowDiv(!showDiv);
  };

  return(
    <div className='servizi-container'>
      <p className='servizi' onClick={handleShowDiv}>{children}</p>
      {showDiv && (
        <div className='div-show'>
          <p className='p-show'>Ciao</p>
        </div>
      )}
    </div>
  )
}

export default Services