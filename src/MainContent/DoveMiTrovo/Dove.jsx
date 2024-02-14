import { useState } from 'react'
import './Dove.css'

function Contatti(){

  return(
    <div className='dove-cont'>
      <img className='img-dove' src='https://ostetricasilviabuzzoni.files.wordpress.com/2021/11/home-3.jpg' alt='studio'></img>
      <div className='text'>
        <h1 className='title'>Dove mi trovo</h1>
        <div className='luoghi'>
          <p className='casa'>A domicilio. Spesso le mie consulenze si svolgono proprio a casa vostra, specialmente in periodi delicati come il post parto.</p>
          <p className='studio-fe'>Visite e consulenze in studio: 
          <a href='https://www.google.com/maps/place/Ostetrica+Silvia+Buzzoni/@44.8384608,11.6593649,17z/data=!3m1!4b1!4m6!3m5!1s0x477e4f99a3816739:0xdad6577ba44b293b!8m2!3d44.838457!4d11.6619398!16s%2Fg%2F11sgdqz5d3?entry=ttu' target='blank'>– Ambulatorio presso “Up Studio” in via Pioppa 176, Ferrara;</a>
          </p>
          <p className='studio-porto'>Visite e consulenze in ambulatiorio:
          <a href='https://www.google.com/maps/place/Fisiosport+S.A.S.+Di+Dinardo+Paolo+%26+C./@44.6953738,11.8076841,17z/data=!4m15!1m8!3m7!1s0x477e400d450f584b:0x18700e0faf96a49e!2sVia+Fausto+Beretta,+43,+44015+Portomaggiore+FE!3b1!8m2!3d44.6953738!4d11.8076841!16s%2Fg%2F11ddwgd23x!3m5!1s0x477e400d463fac8d:0xfc68f9609bfa208a!8m2!3d44.695343!4d11.8076286!16s%2Fg%2F11h58m590w?entry=ttu' target='blank'>– Ambulatorio presso lo studio di fiosioterapia di Cristofori Emanuela in via Beretta 43, Portomaggiore</a>
          </p> 
        </div>
      </div>
    </div>
  )
}

export default Contatti