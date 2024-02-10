import backgroundImage from '../assets/background-logo.png'
import backgroundImage2 from '../assets/second-page-backgrond-image.jpg'
import './MainContent.css'
import Card from './Card/Card'

function MainContent(){
  return(
    <article className="main-page">
      <div className='first-page'>
        <img src={backgroundImage} className='background-image' alt='Baby feets black and white' />
        <div className='presentation'>
          <h1 className='title'>Ostetrica Silvia Buzzoni <br/> Libera Professionisa a Ferrara</h1>
          <p className='sub-title'>Prendersi cura. Della donna, della madre, dei bimbi</p>
          <div className='cards'>
            <Card img='https://ostetricasilviabuzzoni.files.wordpress.com/2021/11/home-2.jpg' title='Chi sono' yOffset='754'></Card>
            <Card img='https://ostetricasilviabuzzoni.files.wordpress.com/2021/11/home-1-e1637973689125.jpg' title='Servizi'></Card>
            <Card img='https://ostetricasilviabuzzoni.files.wordpress.com/2021/11/home-3.jpg' title='Dove mi trovo'></Card>
            <Card img='https://ostetricasilviabuzzoni.files.wordpress.com/2021/11/image_editor_output_image1729886649-1637980771457.jpg' title='Contatti'></Card>
          </div>
        </div>
      </div>
      <div className='second-page'>
        <img src={backgroundImage2} className='background-image-2' alt='The midwife into her studio' />
        <div className='about-me'>
          <h2 className='about-me-title'>Chi sono?</h2>
          <p className='about-me-text'>Mi chiamo Silvia Buzzoni e sono nata a Portomaggiore (FE). Mi sono laureata nel 2018 all’università degli studi di Ferrara. Svolgo la mia libera professione nella provincia di Ferrara e dintorni. Con il mio lavoro cerco di fare quello che la società spesso non è pronta a sostenere: prendermi cura di noi donne. Ogni donna, che sia madre, figlia, sorella, nonna, amica ha il diritto ad essere correttamente assistita, informata e formata in ogni suo bisogno ed è quello che provo a fare: stare al vostro fianco.</p>
        </div>
      </div>
    </article>
  )
}

export default MainContent