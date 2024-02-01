import React, { useState } from 'react';
import ostLogo from '../assets/ost-logo-back.png'
import hamburgerMenu from '../assets/hamburger-menu.png'
import './Header.css'

function Header(){
  const [isMenuOpen, setIsMenuOpen] = useState(false);
  const handleMenuClick = () => {
    setIsMenuOpen(!isMenuOpen);
  }
  return (
    <header>
      <nav className={`nav ${isMenuOpen ? 'menu-open' : ''}`}>
        <div className="left-section">
          <img src={ostLogo} className="nav-logo" alt="Ost logo" />
          <p className="ost-name">Ostetrica <br/> Silvia <br/> Buzzoni</p>
        </div>
        <div className="right-section">
          <button className='hamburger-btn' id='hamburger-btn' onClick={handleMenuClick}>
            <img src={hamburgerMenu} className='hamburger-menu' alt='hamburger menu image' />
          </button>
          <ul className={`nav-items ${isMenuOpen ? 'menu-open' : ''}`}>
            <li>Home</li>
            <li>Servizi</li>
            <li>Tariffario</li>
            <li>About</li>
            <li>Contatti</li>
          </ul>
        </div>
      </nav>
    </header>
  )
}

export default Header