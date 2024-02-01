import backgroundImage from '../assets/background-logo.png'
import './MainContent.css'

function MainContent(){
  return(
    <article className="main-page">
      <img src={backgroundImage} className='background-image' alt='Baby feets black and white' />
    </article>
  )
}

export default MainContent