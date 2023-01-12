import '../../node_modules/bootstrap/dist/css/bootstrap.min.css';
import { Link } from 'react-router-dom';
import { Button } from 'react-bootstrap';
import logoWeb from '../assets/Logo.svg';
import logoP1 from '../assets/Airbnb.svg';
import logoP2 from '../assets/Booking.svg';
import logoP3 from '../assets/PlumGuide.svg';
import '../style/index.css';

const Index = () => {
  return (
    <div>
      <div className="bgimage">1</div>
      <header className="container">
        <div className="pt-5">
          <img src={logoWeb} alt="Logo" />
        </div>
        <h1 className="pt-5">
          {' '}
          <b>
            Explore the best <br /> camps on Earth.
          </b>
        </h1>
        <p>
          YelpCamp is a curated list of the best camping spots on <br /> Earth. Unfiltered and unbiased reviews
        </p>
      </header>
      <article className="container">
        <div className="list">
          <ul>
            <li>Add your own camp suggestions.</li>
            <li>Leave reviews and experiences.</li>
            <li>See locations for all camps.</li>
          </ul>
        </div>
        <Link to={'/home'}>
          {' '}
          <Button variant="dark" size="lg" className="mb-4">
            View Campgrounds
          </Button>
        </Link>
      </article>
      <footer className="container">
        <div>
          <p>Partnered with :</p>
        </div>
        <div>
          <img src={logoP1} alt="Logo" />
          <img src={logoP2} alt="Logo" />
          <img src={logoP3} alt="Logo" />
        </div>
      </footer>
      <div></div>
    </div>
  );
};

export default Index;
