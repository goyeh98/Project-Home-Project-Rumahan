import { Link } from 'react-router-dom';
import { Container, Nav, Navbar, Form, Button, Card, Col, Row } from 'react-bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import logoWeb from '../assets/Logo.svg';

const Comment = () => {
  return (
    <div className="container">
      <Navbar expand="lg">
        <Navbar.Brand href="#">
          <img src={logoWeb} alt="Logo" />
        </Navbar.Brand>
        <Navbar.Toggle aria-controls="navbarScroll" />
        <Navbar.Collapse id="navbarScroll">
          <Nav className="me-auto my-2 my-lg-0" style={{ maxHeight: '100px' }} navbarScroll>
            <Link to={'/home'} className="link-custom">
              <Nav.Link href="{/home}" className="mt-1 ">
                Home
              </Nav.Link>
            </Link>
          </Nav>
          <Nav className="d-flex ">
            <Link to={'/login'} className="link-custom">
              <Nav.Link href="{/login}">Login</Nav.Link>
            </Link>
            <Link to={'/signup'}>
              <Button variant="dark" size="md">
                Create an account
              </Button>{' '}
            </Link>
          </Nav>
        </Navbar.Collapse>
      </Navbar>
      <div className="container">
        <div className="row justify-content-center py-5 mt-5">
          <div className="col-6  mt-5">
            <h1>Add New Comment</h1>
            <br />
            <label for="exampleFormControlTextarea1" class="form-label">
              Description
            </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="this was probably the best camp ive visited this past year, definitely recommend visiting any time soon."></textarea>
            <br />
            <div>
              <Link to={'/home'} className="d-grid link-custom">
                <Button variant="dark">Post Comment</Button>
              </Link>
            </div>
          </div>
        </div>
      </div>
      <footer className="my-4">
        <img className="my-4" src={logoWeb} />
      </footer>
    </div>
  );
};

export default Comment;
