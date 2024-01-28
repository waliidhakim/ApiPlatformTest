// // PrestationsCarousel.js
// import React, { useState, useEffect } from 'react';
// import Slider from 'react-slick';
// import styles from './Carousel.module.css';
// import "slick-carousel/slick/slick.css"; 
// import "slick-carousel/slick/slick-theme.css";

// import fetchData from '@/app/lib/fetchData';

// const PrestationsCarousel = () => {
//   const [prestations, setPrestations] = useState([]);
//   const [loading, setLoading] = useState(true);
//   const [error, setError] = useState(null);

//   const fetchPresataires = async () => {
//     try {
//         const data = await fetchData(`${process.env.NEXT_PUBLIC_API_URL}/prestations`);
//         console.log("data :" , data['hydra:member']);
//         setPrestations(data['hydra:member']);
//         setLoading(false)
//     } catch (error) {
//         console.error('Error fetching users:', error);
//         setError(error);
//         setLoading(false);
//     }
// };

//   useEffect(() => {
//     // Remplacer 'VOTRE_URL_API' par l'URL de votre API
//     fetchPresataires();
//   }, []);

//   // Paramètres pour le carrousel
//   const settings = {
//     dots: true,
//     infinite: true,
//     speed: 500,
//     slidesToShow: 3,
//     slidesToScroll: 1,
    
    
//   };

//   return (
//     <>
    
//     {loading && <div>Loading...</div> }
//     {error && <div>Error: {error.message}</div> }
    
//     <div style={{width : "900px"}}>
//       <h2>Prestations</h2>
//       <Slider {...settings}>
//         {prestations.map((prestation) => (
//           <div key={prestation.id} className={styles.carouselItem}>
//             <img src="https://challange-esgi.s3.eu-central-1.amazonaws.com/users/125.jpg" alt={prestation.name}/>
//             <h3>Prestation : {prestation.name}</h3>
//             <p>Description : {prestation.description}</p>
//             <p>Price: {prestation.price}</p>
//           </div>
//         ))}
//       </Slider>
//     </div>

//     </>
//   );
// };

// export default PrestationsCarousel;



import React, { useState, useEffect } from 'react';
import Slider from 'react-slick';
import Link from 'next/link';
import styles from './Carousel.module.css';
import "slick-carousel/slick/slick.css"; 
import "slick-carousel/slick/slick-theme.css";
import fetchData from '@/app/lib/fetchData';

const PrestationsCarousel = () => {
  const [prestations, setPrestations] = useState([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(null);

  useEffect(() => {
    const fetchPresataires = async () => {
      try {
        const data = await fetchData(`${process.env.NEXT_PUBLIC_API_URL}/prestations`);
        setPrestations(data['hydra:member']);
        setLoading(false);
      } catch (error) {
        console.error('Error fetching prestation:', error);
        setError(error);
        setLoading(false);
      }
    };
    fetchPresataires();
  }, []);

  const settings = {
    dots: true,
    infinite: true,
    speed: 500,
    slidesToShow: 3,
    slidesToScroll: 1,
  };

  if (loading) return <div>Loading...</div>;
  if (error) return <div>Error: {error.message}</div>;

  return (
    <div style={{width : "900px"}}>
      <h2>Prestations</h2>
      <Slider {...settings}>
        {prestations.map((prestation) => (
          <div key={prestation.id} className={styles.carouselItem}>
            <Link href={`/prestation/${prestation.id}`}>
              
                <img src="https://challange-esgi.s3.eu-central-1.amazonaws.com/users/125.jpg" alt={prestation.name} />
                <h3>{prestation.name}</h3>
              
            </Link>
            <p>{prestation.description}</p>
            <p>Prix: {prestation.price}</p>
          </div>
        ))}
      </Slider>
    </div>
  );
};

export default PrestationsCarousel;
