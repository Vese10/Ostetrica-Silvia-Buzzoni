import './Card.css'

function Card({img, title}){
  return(
    <div className='card'>
      <img className='card-img' src={img} alt=''></img>
      <p className='card-title'>{title}</p>
    </div>
  )
}

export default Card