import ReactPlayer from 'react-player'
import firstVideo from '../assets/first-video.mp4'
import backgroundImage from '../assets/background-logo.png'
import './MainContent.css'

function MainContent(){
  return(
    <article className="main-page">
      <img src={backgroundImage} className='background-image' alt='Baby feets black and white' />
      <div className='presentation'>
        <h1 className='title'>Ostetrica Silvia Buzzoni <br/> Libera Professionisa a Ferrara</h1>
        <p className='sub-title'>Prendersi cura. Della donna, della madre, dei bimbi</p>
        <ReactPlayer url={firstVideo} controls={true} className='first-video' />
      </div>
    </article>
  )
}

export default MainContent