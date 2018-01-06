<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MLP - Box Shadow Generator</title>
    <link rel="stylesheet" href="css.css">
  </head>
  <body>
    <nav id="nav"></nav>


    <div class="container">

      <div class="shadows">
        <h1>Box Shadow</h1>
          X: <input type="range" min="-50" max="50" value="4" class="slider" id="shadowsliderX">
          Y: <input type="range" min="-50" max="50" value="4" class="slider" id="shadowsliderY">
          Blur: <input type="range" min="0" max="100" value="3" class="slider" id="shadowsliderBlur">
          <input type="text" value="#5d086e" placeholder="Hex Shadow Colour" id="shadowsliderHex">
          <p>Value X: <span id="valueX"></span></p>
          <p>Value Y: <span id="valueY"></span></p>
          <p>Value Blur: <span id="blur"></span></p>
          <div class="shadowdemo" contenteditable="true" id="shadowdemo"></div>
      </div>
    </div>


  </body>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js.js" charset="utf-8"></script>
  <script src="/assets/b.js" charset="utf-8"></script>
</html>
