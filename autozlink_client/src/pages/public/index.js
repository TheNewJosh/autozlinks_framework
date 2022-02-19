import { useState, useEffect } from 'react';
import { Link } from 'react-router-dom';
import CarPostDisplay from '../../components/CarPostDisplay';
import UrlApiService from "../../services/UrlApiService";
import { Swiper, SwiperSlide } from 'swiper/react';
import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/navigation";
import { Pagination, Navigation, Autoplay } from "swiper";

const Home = () => {

  const [mileage, setMileage] = useState('');
  const [fuelType, setFuelType] = useState('');
  const [carBrand, setCarBrand] = useState('');
  const [carModel, setCarModel] = useState('');
  const [carCondition, setCarCondition] = useState('');
  const [carPriceMin, setCarPriceMin] = useState('');
  const [carPriceMax, setCarPriceMax] = useState('');

  const searchSubmit = async () => {
      console.log(mileage);
      console.log(fuelType);
      console.log(carBrand);
      console.log(carModel);
      console.log(carCondition);
      console.log(carPriceMin);
      console.log(carPriceMax);
  }

  const [sliders, setSliders] = useState([])
  const [carCategorys, setCarCategorys] = useState([])
  const [postCars, setPostCars] = useState([])
  const [carBrands, setCarBrands] = useState([])
  const [carConditions, setCarConditions] = useState([])
  const [carFuelTypes, setCarFuelTypes] = useState([])
  const [carModels, setCarModels] = useState([])

  useEffect(() => {
    getSliders();
    getCarCategorys();
    getPostCars();
    getCarBrands();
    getCarConditions();
    getCarFuelTypes();
    getCarModels();
  }, [])

  const getSliders = async () => {
    const api = UrlApiService.UrlApi()+"sliders";
    let result = await fetch(api, UrlApiService.UrlApiHeader());
    result = await result.json();
    setSliders(result.data);
  }
  
  const getCarCategorys = async () => {
    const api = UrlApiService.UrlApi()+"carCategorys";
    let result = await fetch(api, UrlApiService.UrlApiHeader());
    result = await result.json();
    setCarCategorys(result.data);
  }

  const getPostCars = async () => {
    const api = UrlApiService.UrlApi()+"postCars";
    let result = await fetch(api, UrlApiService.UrlApiHeader());
    result = await result.json();
    setPostCars(result.data);
  }
  
  const getCarBrands = async () => {
    const api = UrlApiService.UrlApi()+"carBrands";
    let result = await fetch(api, UrlApiService.UrlApiHeader());
    result = await result.json();
    setCarBrands(result.data);
  }
  
  const getCarConditions = async () => {
    const api = UrlApiService.UrlApi()+"carConditions";
    let result = await fetch(api, UrlApiService.UrlApiHeader());
    result = await result.json();
    setCarConditions(result.data);
  }
  
  const getCarFuelTypes = async () => {
    const api = UrlApiService.UrlApi()+"carFuelTypes";
    let result = await fetch(api, UrlApiService.UrlApiHeader());
    result = await result.json();
    setCarFuelTypes(result.data);
  }
  
  const getCarModels = async () => {
    const api = UrlApiService.UrlApi()+"carModels";
    let result = await fetch(api, UrlApiService.UrlApiHeader());
    result = await result.json();
    setCarModels(result.data);
  }

  // main
  return (
    <main>
      <section>
        <Swiper
          autoplay={{
            delay: 2500,
            disableOnInteraction: false,
          }}
          slidesPerView={1}
          spaceBetween={0}
          navigation={false}
          pagination={{
            dynamicBullets: true,
          }}
          modules={[Pagination, Navigation, Autoplay]}
          className="mySwiper"
        >
          {
            sliders.map((item, index) =>
              <SwiperSlide key={item.id}>
                <div className="hero-banner" style={{ backgroundImage: "url("+UrlApiService.UrlDomain()+"/img/slider/"+item.attributes.image+")" }}>
                  <div className="hero-content">
                    <h2 className="force-color-white">{item.attributes.heading}</h2>
                    <p className="force-color-white">{item.attributes.description}</p>
                    <div>
                      <a href="advance-search.php" className="btn btn-outline-primary force-color-white me-2">Find a Car</a>
                      <a className="btn btn-primary force-color-white" href="account/user/choose-plan.php">Sell my Car</a>
                    </div>
                  </div>
                </div>
              </SwiperSlide>
            )
          }

        </Swiper>
      </section>
      <section className="search-box-card">
            <div className="d-flex justify-content-center">
                <div className="force-bg-white search-box-card-div">
                    <h3 align="center" className="heading-search">See cars your budget will love</h3>
                    <div className="d-flex justify-content-around dis-sm-block">
                        <div>
                          <div className="car-icon-select">
                            <Swiper
                              autoplay={false}
                              slidesPerView={3}
                              spaceBetween={10}
                              centeredSlides={true}
                              centeredSlidesBounds={true}
                              centerInsufficientSlides={true}
                              grabCursor={false}
                              loop={false}
                              navigation={true}
                              pagination={{
                                dynamicBullets: false,
                              }}
                              modules={[Navigation]}
                              className="mySwiperC"
                            >
                              {
                                carCategorys.map((item, index) =>
                                <SwiperSlide key={item.id}>
                                  <div className="car-icon-select-area select-cat-div" align="center">
                                    <input type="checkbox" name="select_cat[]" id={item.id} value={item.id} className="toggle-switch-social-input-legend" />
                                    <label htmlFor={item.id} className="tss-ad">
                                      <span className='select-cat'><i className="far fa-check-circle force-color-white"></i></span>
                                      <img src={ UrlApiService.UrlDomain()+"img/"+item.attributes.image} alt=""/><br/>
                                      <span className="car-icon-select-text">{item.attributes.name}</span>
                                    </label>
                                  </div>
                                </SwiperSlide>
                                )
                              }
                            </Swiper>
                          </div>
                            <div className="form-group mt-4">
                                <label htmlFor="exampleInputMileage">Mileage</label>
                                <input type="text" value={mileage} onChange={(e) => { setMileage(e.target.value) }} className="form-control input-bg-off" id="exampleInputMileage" placeholder="66,493Km"/>
                            </div>
                            <div className="form-group mt-3">
                                <label>Fuel Type</label>
                                <select value={fuelType} onChange={(e) => { setFuelType(e.target.value) }} className="form-control input-bg-off">
                                    <option value="">Select Fuel Type</option>
                                    {
                                      carFuelTypes.map((item, index) =>
                                        <option value={item.id} key={item.id}>{item.attributes.name}</option>
                                      )
                                    }
                                </select>
                            </div>
                        </div>
                        <div className="search-card-divs">
                            <div className="form-group">
                                <label htmlFor="exampleInputEmail1">Car Brand</label>
                                <select value={carBrand} onChange={(e) => { setCarBrand(e.target.value) }} className="form-control input-bg-off">
                                    <option value="">Select Fuel Type</option>
                                    {
                                      carBrands.map((item, index) =>
                                        <option value={item.id} key={item.id}>{item.attributes.name}</option>
                                      )
                                    }
                                </select>
                            </div>
                            <div className="form-group mt-3">
                                <label htmlFor="exampleInputEmail1">Car Model</label>
                                <select value={carModel} onChange={(e) => { setCarModel(e.target.value) }} className="form-control input-bg-off">
                                    <option value="">Select Fuel Type</option>
                                    {
                                      carModels.map((item, index) =>
                                        <option value={item.id} key={item.id}>{item.attributes.name}</option>
                                      )
                                    }
                                </select>
                            </div>
                            <div className="form-group mt-3">
                                <label htmlFor="exampleInputEmail1">Condition</label>
                                <select value={carCondition} onChange={(e) => { setCarCondition(e.target.value) }} className="form-control input-bg-off">
                                    <option value="">Select Fuel Type</option>
                                    {
                                      carConditions.map((item, index) =>
                                        <option value={item.id} key={item.id}>{item.attributes.name}</option>
                                      )
                                    }
                                </select>
                            </div>
                        </div>
                    </div>
                    <div className="mt-4">
                        <label htmlFor="">Price Range</label>
                        <div className="d-flex justify-content-start">
                            <div className="form-group">
                                <input type="text" value={carPriceMin} onChange={(e) => { setCarPriceMin(e.target.value) }} className="form-control input-bg-bck" id="exampleInputMileage" placeholder="₦ 1, 200 000" />
                            </div>
                            <div className="border-price-range"></div>
                            <div className="form-group">
                                <input type="text" value={carPriceMax} onChange={(e) => { setCarPriceMax(e.target.value) }} className="form-control input-bg-bck" id="exampleInputMileage" placeholder="₦ 11, 200 000" />
                            </div>
                        </div>
                    </div>
                    <div className="d-flex justify-content-end pr-5 mt-4">
                        <button onClick={searchSubmit} className="btn btn-primary force-color-white">Search</button>
                    </div>
                </div>
            </div>
      </section>
      <section className="container mt-4">
        <div className="d-flex justify-content-between">
            <h3 className="force-color-red">Featured Cars</h3>
            <span><Link to="#" className="see-more-cars">See more</Link></span>
        </div>
        <div className="row">
          {
            postCars.map((item, index) =>
              <CarPostDisplay 
                key={item.id}
                id={item.id}
                image={item.attributes.image}
                title={item.attributes.title}
                price={item.attributes.price} 
                mileage={item.attributes.mileage}
                city={item.attributes.city}
                state={item.attributes.state}
                country={item.attributes.country}
                car_condition={item.attributes.car_condition.attributes.name}
                rating="3"
                phone={item.attributes.phone}
                favorite="1"
              />
            )
          }
        </div>
      </section>
    </main>
  );
};

export default Home;