import './App.css';
import '../node_modules/bootstrap/dist/css/bootstrap.min.css';
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';
import Index from './components/Index';
import Login from './components/Login';
import Signup from './components/Signup';
import Home from './components/Home';
import Page from './components/Page';
import Comment from './components/Comment';

function App() {
  return (
    <div>
      <Router>
        <Routes>
          <Route exact path="/" element={<Index />} />
          <Route path="/login" element={<Login />} />
          <Route path="/signup" element={<Signup />} />
          <Route path="/home" element={<Home />} />
          <Route path="/page" element={<Page />} />
          <Route path="/comment" element={<Comment />} />
        </Routes>
      </Router>
    </div>
  );
}

export default App;
