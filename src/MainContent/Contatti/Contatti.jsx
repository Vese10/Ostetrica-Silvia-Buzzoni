import { useState } from 'react'
import './Contatti.css'

function Contatti(){

  return(
    <div className='contacts'>
      <img className='img-contatti' src='https://ostetricasilviabuzzoni.files.wordpress.com/2021/11/image_editor_output_image1729886649-1637980771457.jpg' alt='piedini'></img>
      <div className='form-container'>
      <section class="contact">
        <div class="contact-container">
        <h1 class="contact-me">Contattami</h1>
        <p class="contact-text">Sentiti libero di inviarmi un messaggio per informazioni, collaborazioni o dubbi di ogni genere.
        </p>
        <form id="contact-form">
          <label for="user_name">Name</label>
          <input type="text" id="user_name" name="user_name" placeholder="Your name..." required></input>
          <label for="user_email">Email</label>
          <input type="email" id="user_email" name="user_email" placeholder="example@gmail.com" required></input>
          <label for="message">Messaggio</label>
          <textarea id="message" name="message" placeholder="Your message..." required></textarea>
          <button class="submit-btn" type="submit">Invia</button>
        </form>
        </div>
      </section>
      </div>
    </div>
  )
}

export default Contatti