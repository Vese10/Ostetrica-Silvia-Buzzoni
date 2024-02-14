import { useState } from 'react'
import './Contatti.css'

function Contatti(){

  return(
    <div className='contacts'>
      <img className='img-contatti' src='https://ostetricasilviabuzzoni.files.wordpress.com/2021/11/image_editor_output_image1729886649-1637980771457.jpg' alt='piedini'></img>
      <div className='form-container'>
        <form className="contact-form">
          <div className='label-cont'>
            <div className='label'>
              <label>Nome:</label>
              <input 
                type="text" 
                name="name"></input>
            </div>
            <div className='label'>
              <label>Cognome:</label>
              <input
                name="description"></input>
            </div>
            <div className='label'>
              <label>Messaggio:</label>
              <textarea
                name="imgUrl"></textarea>
            </div>
          </div>
          <button type="submit" className='contattami-btn'>Contattami</button>
        </form>
      </div>
    </div>
  )
}

export default Contatti