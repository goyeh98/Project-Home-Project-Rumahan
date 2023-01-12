import { Link } from 'react-router-dom';
import { Container, Nav, Navbar, Form, Button, Card, Col, Row } from 'react-bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import logoWeb from '../assets/Logo.svg';
import logoC1 from '../assets/Camp Images/Compressed Images/MountUlap.jpg';
import logoC2 from '../assets/Camp Images/Compressed Images/CalaguasIsland.jpg';
import logoC3 from '../assets/Camp Images/Compressed Images/OnayBeach.jpg';
import logoC4 from '../assets/Camp Images/Compressed Images/SevenSistersWaterfall.jpg';
import logoC5 from '../assets/Camp Images/Compressed Images/LatikRiverside.jpg';
import logoC6 from '../assets/Camp Images/Compressed Images/BuloySprings.jpg';

const Home = () => {
  return (
    <Container>
      <header>
        <Navbar expand="lg">
          <Navbar.Brand href="#">
            <img src={logoWeb} alt="Logo" />
          </Navbar.Brand>
          <Navbar.Toggle aria-controls="navbarScroll" />
          <Navbar.Collapse id="navbarScroll">
            <Nav className="me-auto my-2 my-lg-0" style={{ maxHeight: '100px' }} navbarScroll>
              <Link to={'/home'} className="link-custom">
                <Nav.Link href="{/home}" className="mt-1">
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
        <div className="container p-5 mt-3 judul-Home">
          <div>
            <h1>Welcome to YelpCamp</h1>
          </div>
          <div>
            <p>
              View our hand-picked campgrounds from all over <br /> the world, or add your own.
            </p>
          </div>
          <Form className="d-inline-flex ">
            <i className="fa fa-user icon"></i>
            <Form.Control type="search" placeholder="Search for camps" className="me-2 ps-5" aria-label="Search" />
            <Button variant="dark" size="lg">
              Search
            </Button>
          </Form>
          <div>Or add your own campground</div>
        </div>
      </header>
      <div className="mt-5">
        <Row md={3} className="g-6 ">
          <Col className="mt-5">
            <Card>
              <Card.Img variant="top" src={logoC1} />
              <Card.Body>
                <Card.Title>Mount Ulap</Card.Title>
                <Card.Text> One of the most famous hikes in Bengeut is Mt Ulap in Itogon.</Card.Text>
                <div className="d-grid gap-2">
                  <Link to={'/page'}>
                    <Button variant="outline-dark" size="lg">
                      <b> View Campground </b>
                    </Button>
                  </Link>
                </div>
              </Card.Body>
            </Card>
          </Col>
          <Col className="mt-5">
            <Card>
              <Card.Img variant="top" src={logoC2} />
              <Card.Body>
                <Card.Title>Calaguas Islands</Card.Title>
                <Card.Text>A paradise of islands that can rival the white sand beauty of Boracay.</Card.Text>
                <div className="d-grid gap-2">
                  <Button variant="outline-dark" size="lg">
                    <b> View Campground </b>
                  </Button>
                </div>
              </Card.Body>
            </Card>
          </Col>
          <Col className="mt-5">
            <Card>
              <Card.Img variant="top" src={logoC3} />
              <Card.Body>
                <Card.Title>Onay Beach</Card.Title>
                <Card.Text>This is one of the best beach camping sites, beautiful and pristine.</Card.Text>
                <div className="d-grid gap-2">
                  <Button variant="outline-dark" size="lg">
                    <b> View Campground </b>
                  </Button>
                </div>
              </Card.Body>
            </Card>
          </Col>
          <Col className="mt-5">
            <Card>
              <Card.Img variant="top" src={logoC4} />
              <Card.Body>
                <Card.Title>Seven Sisters Waterfall</Card.Title>
                <Card.Text>The Seven Sisters is the 39th tallest waterfall in Norway.</Card.Text>
                <div className="d-grid gap-2">
                  <Button variant="outline-dark" size="lg">
                    <b> View Campground </b>
                  </Button>
                </div>
              </Card.Body>
            </Card>
          </Col>
          <Col className="mt-5">
            <Card>
              <Card.Img variant="top" src={logoC5} />
              <Card.Body>
                <Card.Title>Latik Riverside</Card.Title>
                <Card.Text>Philippines is one of the most dazzling countries in all of Asia.</Card.Text>
                <div className="d-grid gap-2">
                  <Button variant="outline-dark" size="lg">
                    <b> View Campground </b>
                  </Button>
                </div>
              </Card.Body>
            </Card>
          </Col>
          <Col className="mt-5">
            <Card>
              <Card.Img variant="top" src={logoC6} />
              <Card.Body>
                <Card.Title>Buloy Springs</Card.Title>
                <Card.Text>This is one of the best beach camping sites, beautiful and pristine.</Card.Text>
                <div className="d-grid gap-2">
                  <Button variant="outline-dark" size="lg">
                    <b> View Campground </b>
                  </Button>
                </div>
              </Card.Body>
            </Card>
          </Col>
        </Row>
      </div>
      <footer className=" py-5">
        <img src={logoWeb} />
      </footer>
    </Container>
  );
};

export default Home;
