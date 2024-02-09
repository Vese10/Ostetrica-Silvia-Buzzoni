import './Card.css'

function Card({img, title}){
  const handleClick = () => {
    window.scrollTo(0, 753.55)
  }

  return(
    <div className='card' onClick={handleClick}>
      <img className='card-img' src={img} alt=''></img>
      <p className='card-title'>{title}</p>
    </div>
  )
}

export default Card