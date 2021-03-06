<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
  </head>

  <body>
    <section class="hero-section">

      <nav class="navbar">
        <h2>Vendor Selection</h2>
        <ul>
          <li><a href="#">Login</a></li>
          <li><a href="#">Register</a></li>
        </ul>
      </nav>
      <div class="hero-text">
        <p class="mt">Vendor Selection Made Easy!</p>
        <h3 class="subt">Select from 1000s of prodcuts based on people's reviews</h3>
        <a href="#">Login</a>
      </div>
    </section>
  </body>
  <style>
      * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

:root {
  --text: 1.5rem;
  --head: calc(1rem + 5vw);
  --bg-color: #f6b93b;
}

body {
  font-family: "Poppins", sans-serif;
}

.hero-section {
  min-height: 100vh;
  background: url("https://3ggqje2jhgjp45f9yd48ay211i1-wpengine.netdna-ssl.com/wp-content/themes/shift-theme/page-templates/media/b2b-marketplace-background.ec971d4c.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  position: relative;
  z-index: 2;
  animation: slide 1s ease-in-out;
}

.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  height: 10vh;
  padding: 0rem 1.5rem;
  color: white;
  transform: translateY(-100%);
  animation: movedown 850ms ease-in 1s forwards;
}

@keyframes movedown {
  from {
    transform: translateY(-100%);
  }
  to {
    transform: translateY(0%);
  }
}

.navbar ul {
  list-style: none;
}

.navbar ul li {
  display: inline-block;
  margin-left: 3rem;
  font-size: var(--text);
}

.navbar ul li a {
  text-decoration: none;
  color: white;
  border-bottom: 2px solid transparent;
}

.navbar ul li a:hover {
  border-bottom: 2px solid var(--bg-color);
}

.mt{
font-size: 1.5rem;
font-weight: bold;
}

.subt{
    font-weight:0;
}
.hero-text {
  color: white;
  height: 90vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
}

@keyframes slide {
  from {
    transform: translateX(-100%);
  }
  to {
    transform: translateX(0%);
  }
}

.hero-text::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background: black;
  z-index: -1;
  top: 0;
  opacity: 0.6;
}

.hero-text a {
  color: white;
  background: var(--bg-color);
  font-weight: 900;
  font-size: var(--text);
  padding: 0.8rem 1rem;
  margin: 0.8rem auto;
  display: block;
  text-decoration: none;
  transition: opacity 250ms linear;
}

.hero-text a:hover {
  opacity: 0.8;
}

.hero-text h2 {
  font-size: var(--head);
}

.hero-text p {
  font-size: 3rem;
}

  </style>

</html>
