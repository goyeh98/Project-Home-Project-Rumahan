import { Link } from 'react-router-dom';
import { Container, Nav, Navbar, Form, Button, Card, Col, Row } from 'react-bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import '../style/index.css';
import logoWeb from '../assets/Logo.svg';
import map from '../assets/Map.png';
import logoP from '../assets/Camp Images/High Quality Images/MountUlap.png';

const Page = () => {
  return (
    <div className="container">
      <Navbar expand="lg">
        <Navbar.Brand href="#">
          <img src={logoWeb} alt="Logo" />
        </Navbar.Brand>
        <Navbar.Toggle aria-controls="navbarScroll" />
        <Navbar.Collapse id="navbarScroll">
          <Nav className="me-auto my-2 my-lg-0" style={{ maxHeight: '100px' }} navbarScroll>
            <Link to={'/home'}>
              <Nav.Link href="{/home}" className="mt-1">
                Home
              </Nav.Link>
            </Link>
          </Nav>
          <Nav className="d-flex ">
            <Link to={'/login'}>
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
      <Row>
        <Col xs="5">
          <div className=" border-custom">
            <img className="border d-block p-5" src={map} />
          </div>
        </Col>
        <Col>
          <div className="">
            <Card className="p-5">
              <Card.Img variant="top" src={logoP} />
              <Card.Body>
                <div className="d-flex justify-content-between">
                  <Card.Title>
                    <b> Mount Ulap </b>
                  </Card.Title>
                  <Card.Title>$104.99/night</Card.Title>
                </div>
                <Card.Text>
                  Mount Ulap is a 7.7 kilometer moderately traficked point-to-point trail located near Tuba, Bengeut, Phillippines that offers the chance to see wildlife and is rated as moderate. The trail is primarily used for hiking.
                </Card.Text>
                <Card.Text>
                  <i>Submitted by Andrew Mike</i>
                </Card.Text>
              </Card.Body>
            </Card>
          </div>
          <div className="border mt-5 p-5">
            <div className="d-flex justify-content-between">
              <Card.Title>Adam Jones</Card.Title>
              <Card.Subtitle className="text-muted">13h ago</Card.Subtitle>
            </div>
            <br />
            <Card.Text>Honestly one of the best experiences ever, took us a while to figure out how to get there but it was amazing</Card.Text>
            <hr />
            <div className="d-flex justify-content-between">
              <Card.Title>Isaac Dylan</Card.Title>
              <Card.Subtitle className="text-muted">1 day ago</Card.Subtitle>
            </div>
            <br />
            <Card.Text>Traveling changes you as a person, you gain more perspective, this is the perfect spot to do that.</Card.Text>
            <hr />
            <div className="d-flex justify-content-between">
              <Card.Title>Hudson Luca</Card.Title>
              <Card.Subtitle className="text-muted">3 days ago</Card.Subtitle>
            </div>
            <br />
            <Card.Text>Definitely recommend going there, not too far and not a lot of people to ruin the experience.</Card.Text>
            <div className="d-flex justify-content-end">
              <Link to={'/comment'}>
                <Button variant="dark" size="md">
                  Leave a Review
                </Button>
              </Link>
            </div>
          </div>
        </Col>
      </Row>
      <footer>
        <img className="my-4" src={logoWeb} />
      </footer>
    </div>
  );
};

export default Page;
