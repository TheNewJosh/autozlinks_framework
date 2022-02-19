import './App.css';
import Nav from './components/Nav';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom'
import Index from './pages/public/index';
import Login from './pages/public/login';

function App() {
  return (
    <Router >
      <div>
        <Nav />
        <Routes>
          <Route path="/" exact element={<Index />} />
          <Route path="/login" element={<Login />} />
        </Routes >
      </div>
    </Router>
  );
}

export default App;
