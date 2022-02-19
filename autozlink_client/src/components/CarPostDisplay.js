import React from 'react';
import PropTypes from 'prop-types'
import { Link } from 'react-router-dom';
import UrlApiService from "../services/UrlApiService";

const CarPostDisplay = ({ image, title, price, mileage, city, state, country, car_condition, rating, id, phone, favorite }) => {

    const getRating = () =>{
        if(parseFloat(rating) === 1){
            return <span>
                <i className="fas fa-star feature-adjust-hcar" style={{color:"#FC9700"}}></i>
                <i className="far fa-star feature-adjust-hcar" style={{color:"#FC9700"}}></i>
                <i className="far fa-star feature-adjust-hcar" style={{color:"#FC9700"}}></i>
            </span>;
        }else if(parseFloat(rating) >= 1 && parseFloat(rating) < 2){
            return <span>
                <i className="fas fa-star feature-adjust-hcar" style={{color:"#FC9700"}}></i>
                <i className="fas fa-star-half-alt feature-adjust-hcar" style={{color:"#FC9700"}}></i>
                <i className="far fa-star feature-adjust-hcar" style={{color:"#FC9700"}}></i>
            </span>;
        }else if(parseFloat(rating) === 2){
            return <span>
                <i className="fas fa-star feature-adjust-hcar" style={{color:"#FC9700"}}></i>
                <i className="fas fa-star feature-adjust-hcar" style={{color:"#FC9700"}}></i>
                <i className="far fa-star feature-adjust-hcar" style={{color:"#FC9700"}}></i>
            </span>;
        }else if(parseFloat(rating) >= 2 && parseFloat(rating) < 3){
            return <span>
                <i className="fas fa-star feature-adjust-hcar" style={{color:"#FC9700"}}></i>
                <i className="fas fa-star feature-adjust-hcar" style={{color:"#FC9700"}}></i>
                <i className="fas fa-star-half-alt feature-adjust-hcar" style={{color:"#FC9700"}}></i>
            </span>;
        }else if(parseFloat(rating) === 3){
            return <span>
                <i className="fas fa-star feature-adjust-hcar" style={{color:"#FC9700"}}></i>
                <i className="fas fa-star feature-adjust-hcar" style={{color:"#FC9700"}}></i>
                <i className="fas fa-star feature-adjust-hcar" style={{color:"#FC9700"}}></i>
            </span>;
        }else{
            return <span>
                <i className="far fa-star feature-adjust-hcar" style={{color:"#FC9700"}}></i>
                <i className="far fa-star feature-adjust-hcar" style={{color:"#FC9700"}}></i>
                <i className="far fa-star feature-adjust-hcar" style={{color:"#FC9700"}}></i>
            </span>;
        }
    }

    const addToFavorite = () => {
        console.log("90");
    };

    return (
        <div className="col-6 col-md-4 mt-4">
            <div className="feature-cars-div">
                <div>
                    <div className="feature-car text-end fc-p-4" style={{ backgroundImage: "url("+UrlApiService.UrlDomain()+"/img/post-car/"+image}}>
                        <i className={favorite ? "fas fa-star force-color-red" : "fas fa-star force-color-white"} onClick={addToFavorite} style={{cursor:"pointer"}}></i>
                    </div>
                </div>
                <div className="force-bg-gray fc-p-5">
                    <Link to={"/product-detail/"+id}>
                        <h4 className="force-color-red text-center feature-adjust-hcar">{title}</h4>
                    </Link>
                    <div className="d-flex justify-content-between">
                        <span>
                            {getRating()}
                        </span>
                        <span className="force-color-blue feature-adjust-hcar">
                            ₦ {new Intl.NumberFormat('en-US').format(price)}
                        </span>
                    </div>
                    <div>
                        <span><i className="fa fa-tachometer force-color-blue feature-adjust-hcar"></i><span className="feature-text-sp feature-adjust-hcar">{mileage}</span></span>
                    </div>
                    <div className="d-flex justify-content-between">
                        <span><i className="fas fa-map-marker-alt feature-adjust-hcar"></i><span className="feature-text-sp feature-adjust-hcar">{city}, {state} {country}</span></span>
                        <span><i className="fas fa-car feature-adjust-hcar"></i><span className="feature-text-sp feature-adjust-hcar">{car_condition}</span></span>
                    </div>
                </div>
                <div className="d-flex">
                    <Link to={"/chat/"+id} className="feature-car-footer feature-car-footer-l force-bg-white"><i className="far fa-comment-dots"></i><span className="feature-text-sp">Chat</span></Link>
                    <Link to={"tel:"+phone} className="feature-car-footer feature-car-footer-r force-bg-blue"><i className="fas fa-phone-volume"></i><span className="feature-text-sp">Call</span></Link>
                </div>
            </div>
        </div>
    )
}

CarPostDisplay.propTypes = {
    image: PropTypes.string,
    title: PropTypes.string,
    price: PropTypes.number,
    mileage: PropTypes.string,
    city: PropTypes.string,
    state: PropTypes.string,
    country: PropTypes.string,
    car_condition: PropTypes.string,
    rating: PropTypes.string,
    id: PropTypes.string,
    phone: PropTypes.string,
    favorite: PropTypes.string,
}

export default CarPostDisplay;