import React, { useState, useEffect, useRef } from 'react';
import ostLogo from '../assets/ost-logo-back.png'
import hamburgerMenu from '../assets/hamburger-menu.png'
import './Header.css'

function Header(){
  const [isMenuOpen, setIsMenuOpen] = useState(false);
  const menuRef = useRef(null);

  const handleMenuClick = () => {
    setIsMenuOpen(!isMenuOpen);
  }

  const handleClickHeader = (heightPoint) => {
    setIsMenuOpen(false);
    window.scrollTo(0, heightPoint)
  }

  useEffect(() => {
    const handleClickOutside = (event) => {
      if (menuRef.current && !menuRef.current.contains(event.target)) {
        setIsMenuOpen(false);
      }
    };

    document.addEventListener('mousedown', handleClickOutside);
    return () => {
      document.removeEventListener('mousedown', handleClickOutside);
    };
  }, []);
  
  return (
    <header>
      <nav className={`nav ${isMenuOpen ? 'menu-open' : ''}`} ref={menuRef}>
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
            <li onClick={()=>handleClickHeader(2280)}>Dove mi trovo</li>
            <li onClick={()=>handleClickHeader(3030)}>Contatti</li>
          </ul>
        </div>
      </nav>
    </header>
  )
}

export default Header