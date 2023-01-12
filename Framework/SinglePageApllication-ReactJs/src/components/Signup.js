import 'bootstrap/dist/css/bootstrap.min.css';
import { Link } from 'react-router-dom';
import { Container, Nav, Navbar, Form, Button, Card, Col, Row } from 'react-bootstrap';
import logoWeb from '../assets/Logo.svg';
import testi from '../assets/UserTestimonial.svg';
import logoBack from '../assets/arrow-left.svg';
import '../style/index.css';

const SignUp = () => {
  return (
    <div className="test">
      <Container>
        <Row>
          <Col xs={7} className="px-5">
            <div className="">
              <header className="pb-5 mb-5">
                <Navbar className="d-flex justify-content-between">
                  <Navbar.Brand href="#">
                    <img src={logoWeb} alt="Logo" />
                  </Navbar.Brand>
                  <Link to={'/home'} className="link-custom link-custom-1">
                    {' '}
                    <img src={logoBack} /> back to campgrounds
                  </Link>
                </Navbar>
              </header>
              <article>
                <h1>
                  <b>Start exploring camps from all around the world.</b>
                </h1>
                <Form className="form-custom">
                  <Form.Group className="mb-3" controlId="formBasicEmail">
                    <Form.Label>Username</Form.Label>
                    <Form.Control type="email" placeholder="johndoe_19" />
                  </Form.Group>

                  <Form.Group className="mb-3" controlId="formBasicPassword">
                    <Form.Label>Password</Form.Label>
                    <Form.Control type="password" placeholder="Choose Password" />
                  </Form.Group>
                  <Button variant="dark" type="submit" className="button-custom">
                    Create an account
                  </Button>
                </Form>
              </article>
              <footer>
                <p>
                  Already a user? <Link to={'/login'}>Sign In</Link>
                </p>
              </footer>
            </div>
          </Col>
          <Col className=" bgimage1">
            <div className=" posisi-bgimage1">
              <h4 className="mb-4">"YelpCamp has honestly saved me hours of research time, and the camps on here are definitely well picked and aded."</h4>
              <div>
                <img src={testi} />
                <p>
                  <b>May Andrew</b> <br /> Professional Hiker
                </p>
                <p></p>
              </div>
            </div>
          </Col>
        </Row>
      </Container>
    </div>
  );
};

export default SignUp;
