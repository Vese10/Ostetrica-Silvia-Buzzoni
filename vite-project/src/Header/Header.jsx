import ostLogo from '../assets/ost-logo-back.png'
import './Header.css'

function Header(){
  return (
    <header>
      <nav className="nav">
        <div className="right-section">
          <img src={ostLogo} className="nav-logo" alt="Ost logo" />
          <p className="ost-name">Ostetrica <br/> Silvia <br/> Buzzoni</p>
        </div>
        <div className="left-section">
          <ul className="nav-items">
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