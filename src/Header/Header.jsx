import React, { useState } from 'react';
import ostLogo from '../assets/ost-logo-back.png'
import hamburgerMenu from '../assets/hamburger-menu.png'
import './Header.css'

function Header(){
  const [isMenuOpen, setIsMenuOpen] = useState(false);
  const handleMenuClick = () => {
    setIsMenuOpen(!isMenuOpen);
  }

  const handleClickHeader = (heightPoint) => {
    window.scrollTo(0, heightPoint)
  }
  
  return (
    <header>
      <nav className={`nav ${isMenuOpen ? 'menu-open' : ''}`}>
        <div className="left-section">
          <img src={ostLogo} className="nav-logo" alt="Ost logo" onClick={()=>handleClickHeader(0)}/>
          <p className="ost-name" onClick={()=>handleClickHeader(0)}>Ostetrica <br/> Silvia <br/> Buzzoni</p>
        </div>
        <div className="right-section">
          <button className='hamburger-btn' id='hamburger-btn' onClick={handleMenuClick}>
            <img src={hamburgerMenu} className='hamburger-menu' alt='hamburger menu image' />
          </button>
          <ul className={`nav-items ${isMenuOpen ? 'menu-open' : ''}`}>
            <li onClick={()=>handleClickHeader(0)}>Home</li>
            <li onClick={()=>handleClickHeader(754)}>About</li>
            <li onClick={()=>handleClickHeader(1510)}>Servizi</li>
            <li onClick={()=>handleClickHeader(2280)}>Contatti</li>
          </ul>
        </div>
      </nav>
    </header>
  )
}

export default Header