import './Footer.css'
import instagramLogo from '../assets/instagram-logo.webp'

function Footer(){
  return(
    <footer className="footer">
      <small>© 2024 Ostetrcia Silvia Buzzoni. All rights reserved.</small>
      <a className="social" href="https://www.instagram.com/ostetricasilviabuzzoni?igsh=MTNsdzdreGFkZ2RleA==" target="_blank" rel="noopener">
      <img className="instagram" src={instagramLogo} alt="Instagram logo" />
    </a>
    </footer>
  )
}

export default Footer