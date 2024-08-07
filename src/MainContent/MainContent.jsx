import backgroundImage from '../assets/background-logo.png'
import backgroundImage2 from '../assets/second-page-backgrond-image.jpg'
import './MainContent.css'
import Card from './Components/Card'
import Services from './Servizi/Services'
import Dove from './DoveMiTrovo/Dove'
import Contatti from './Contatti/Contatti'

function MainContent(){
  return(
    <article className="main-page">
      <div className='first-page'>
        <div className='presentation'>
          <div className='cards'>
            <Card img='https://ostetricasilviabuzzoni.files.wordpress.com/2021/11/home-2.jpg' title='Chi' yOffset='754'></Card>
            <Card img='https://ostetricasilviabuzzoni.files.wordpress.com/2021/11/home-1-e1637973689125.jpg' title='Servizi' yOffset='1510'></Card>
            <Card img='https://ostetricasilviabuzzoni.files.wordpress.com/2021/11/home-3.jpg' title='Dove mi trovo' yOffset='2280'></Card>
            <Card img='https://ostetricasilviabuzzoni.files.wordpress.com/2021/11/image_editor_output_image1729886649-1637980771457.jpg' title='Contatti' yOffset='3030'></Card>
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
      <div className='third-page'>
        <div className='services-cont'>
          <div className='grids-3'>
            <img className='img-servizi' src='https://ostetricasilviabuzzoni.files.wordpress.com/2021/11/home-1-e1637973689125.jpg' alt='Pancia'></img>
            <Services>Pavimento Pelvico</Services>
            <Services>Allattamento</Services>
            <Services>Gravidanza</Services>
            <Services>Accompagnamento in ospedale</Services>
            <Services>Parto a domicilio</Services>
            <Services>Altri servizi</Services>
          </div>
        </div>
      </div>
      <div className='fourth-page'>
        <Dove></Dove>
      </div>
      <div className='fifth-page'>
        <Contatti></Contatti>
      </div>
    </article>
  )
}

export default MainContent