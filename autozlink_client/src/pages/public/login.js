import { Link } from 'react-router-dom';
import { useState } from 'react';

const Login = () => {

  const [eye, setEye] = useState(true);
  const [inputType, setInputType] = useState("password");
  // const [type, settype] = useState(false);

  const showPassword = () => {
    if (inputType === "password") {
      setInputType("text");
      setEye(false);
      // settype(true);
    }
    else {
      setInputType("password");
      setEye(true);
      // settype(false);
    }
  }

  // main
  return (
    <div className="signup-box-card">
      <main className="wosch-20">
        <form action="/autozlink/autozlinkz/login.php" method="post" className="form">
          <h1 className="text-center" style={{ fontSize: '16px' }}>Signin</h1>
          <div className="text-center mt-2">
            <Link to="#" className="btn btn-outline-primary force-color-black social-sigup">
              <i className="fab fa-google text-danger me-2"></i>
              <span>Register Via Google</span>
            </Link> <br />
            <Link to="#" className="btn btn-primary force-color-white mt-1 social-sigup">
              <i className="fab fa-facebook text-primary me-2"></i>
              <span>Register Via Facebook</span>
            </Link>
          </div>
          <div className="line-span-div">
            <span className="line-span"></span>
            <span className="line-text">or</span>
            <span className="line-span"></span>
          </div>
          <div className="input-group">
            <input type="email" name="username_email_phone" id="email" placeholder="Email" required />
            <span className="force-color-red" id="email_err"></span>
          </div>
          <div className="input-group input-wrap-pass">
            <input type={inputType} name="password" id="password" placeholder="Password" required />
            <span className="signup-pass" ><i className={`fa ${eye ? "fa-eye-slash" : "fa-eye"}`} onClick={showPassword}></i></span>
            <span className="force-color-red" id="password_err"></span>
          </div>
          <div className="text-end">
            <a href="sign-in.php" className="force-color-blue">Forget Password</a>
          </div>
          <div className="">
            <button type="submit" name="submit_login_btn" className="btn btn-next btn-primary px-5">SIGN IN</button>
          </div>
          <div className="text-center mt-4">
            <p className="blog-loop-card-para">
              Don’t have an account? <a href="register.php">Register</a><br />
              By continuing, you agree to the <a href="policy.php">Policy and Rules</a>
            </p>
          </div>
        </form>
      </main>
    </div>
  );
};

export default Login;