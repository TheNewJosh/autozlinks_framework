import React from 'react';
import { Link } from 'react-router-dom';

const Header = () => {
    return (
        <div>
            <nav className="navbar navbar-expand-lg navbar-light bg-white">
                <div className="container-fluid">
                    <Link to="/" className="navbar-brand logo-meui"><img src="http://localhost/autozlink/autozlinks/autozlink_server/img/logo.png" alt='Logo' /></Link>
                    <div className="navbar-toggler">
                        <span id="toggle-show-menu">
                            <i className="fas fa-bars force-color-blue" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style={{fontSize:'30px'}}></i>
                        </span>
                        <span id="toggle-close-menu" className="display-none">
                            <i className="far fa-user-circle force-color-blue" style={{fontSize:'30px'}}></i>
                            <i className="fas fa-times close-nav" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"></i>
                        </span>
                    </div>
                    <div className="collapse navbar-collapse navbarNavDropdown-cklj" id="navbarNavDropdown">
                        <ul className="navbar-nav nav-spacing">
                            <li className="nav-item">
                                <Link to="/" className="nav-link active-page" href="index.php">Home</Link>
                            </li>
                            <li className="nav-item dropdown">
                                <Link to="" className="nav-link dropdown-toggle " href="hnn#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Sell Your Car
                                </Link>
                                <ul className="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><Link to="" className="dropdown-item" href="account/user/choose-plan.php">Sell From Home</Link></li>
                                    <li><Link to="" className="dropdown-item" href="hnn#">Drop To Sell</Link></li>
                                </ul>
                            </li>
                            <li className="nav-item">
                                <Link to="" className="nav-link " href="advance-search.php">Find a Car</Link>
                            </li>
                            <li className="nav-item">
                                <Link to="" className="nav-link " href="blog.php">Blog</Link>
                            </li>
                            <li className="nav-item">
                                <Link to="" className="nav-link " href="hnn#">AZCoin</Link>
                            </li>
                            <li className="nav-item">
                                <Link to="" className="nav-link " href="hnn#">Live Auction</Link>
                            </li>
                            <li className="nav-item">
                                <Link to="" className="nav-link " href="hnn#">Contact Us</Link>
                            </li>
                            <li className="nav-item d-lg-none">
                                <Link to="" className="nav-link login-pop" id="login-close-menu" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" href="hnn#">Login</Link>
                            </li>
                            <li className="nav-item d-lg-none">
                                <Link to="" className="nav-link" href="register.php">Register</Link>
                            </li>
                        </ul>
                        <div className="border-left px-4 d-none d-lg-block">
                            <Link to="/login" className="login-class">Login</Link>
                            <Link to="" href="register.php" className="btn btn-primary" >Register</Link>
                        </div>
                        <div className="d-lg-none d-flex justify-content-around">
                            <Link to="" href="hnn#" className="menu-icon-mobile"><i className="fas fa-phone-alt"></i></Link>
                            <Link to="" href="hnn#" className="menu-icon-mobile"><i className="fas fa-envelope"></i></Link>
                            <Link to="" href="hnn#" className="menu-icon-mobile"><i className="fas fa-map-marker-alt"></i></Link>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    )
}

export default Header;