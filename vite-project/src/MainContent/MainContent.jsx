import backgroundImage from '../assets/background-logo.png'
import './MainContent.css'

function MainContent(){
  return(
    <div className="main-page">
      <img src={backgroundImage} className='background-image' alt='Baby feets black and white' />
    </div>
  )
}

export default MainContent