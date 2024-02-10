import './Card.css'

function Card({img, title, yOffset}){
  const handleClick = (yOffset) => {
    window.scrollTo(0, yOffset)
  }

  return(
    <div className='card' onClick={() => handleClick(yOffset)}>
      <img className='card-img' src={img} alt=''></img>
      <p className='card-title'>{title}</p>
    </div>
  )
}

export default Card