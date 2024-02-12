import { useState } from 'react'
import './Services.css'

function Services({details, children}){
  const [showDiv, setShowDiv] = useState(false)
  const handleShowDiv = () => {
    setShowDiv(!showDiv);
  };

  return(
    <div className='servizi-container'>
      <p className='servizi' onClick={handleShowDiv}>{children}</p>
      {showDiv && (
        <div className='div-show'>
          <button className='btn-close' onClick={handleShowDiv}>X</button>
          <p className='p-show'>{details}</p>
        </div>
      )}
    </div>
  )
}

export default Services