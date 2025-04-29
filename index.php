<!DOCTYPE html>
<!-- ICS2O-Unit5-04-HTML-MDL -->

<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta
    name="description"
    content="Museum prices for day depending on age, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Trisha Ray" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link
    rel="stylesheet"
    href="https://code.getmdl.io/1.3.0/material.pink-purple.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="./apple-touch-icon.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="./favicon-32x32.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="./favicon-16x16.png" />
  <title>Museum prices for day depending on age, in PHP</title>
</head>


<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="./js/script.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Museum prices for day depending on age, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/museum.jpeg" alt="museum" />
      </div>
      <div class="page-content">Enter age</div>
      <br />
      <form action="answer.php" method="GET">
        <br />
        <!-- Numeric Textfield -->
        <div class="mdl-textfield mdl-js-textfield">
          <input
            class="mdl-textfield__input"
            type="text"
            name="age"
            pattern="-?[0-9]*(\.[0-9]+)?"
            id="age" />
          <label class="mdl-textfield__label" for="age">enter age...</label>
          <!-- class "mdl-textfield__error" -->
          <span class="mdl-textfield__error">Input is not a number!</span>
        </div>
        <br />
        <label
          class="mdl-radio mdl-js-radio mdl-js-ripple-effect"
          for="option-Sunday">
          <input
            type="radio"
            id="option-Sunday"
            class="mdl-radio__button"
            name="days"
            value="sunday"
            checked />
          <span class="mdl-radio__label">Sunday</span>
        </label>
        <br />
        <label
          class="mdl-radio mdl-js-radio mdl-js-ripple-effect"
          for="option-Monday">
          <input
            type="radio"
            id="option-Monday"
            class="mdl-radio__button"
            name="days"
            value="monday" />
          <span class="mdl-radio__label">Monday</span>
        </label>
        <br />
        <label
          class="mdl-radio mdl-js-radio mdl-js-ripple-effect"
          for="option-Tuesday">
          <input
            type="radio"
            id="option-Tuesday"
            class="mdl-radio__button"
            name="days"
            value="tuesday" />
          <span class="mdl-radio__label">Tuesday</span>
        </label>
        <br />
        <label
          class="mdl-radio mdl-js-radio mdl-js-ripple-effect"
          for="option-Wednesday">
          <input
            type="radio"
            id="option-Wednesday"
            class="mdl-radio__button"
            name="days"
            value="wednesday" />
          <span class="mdl-radio__label">Wednesday</span>
        </label>
        <br />
        <label
          class="mdl-radio mdl-js-radio mdl-js-ripple-effect"
          for="option-Thursday">
          <input
            type="radio"
            id="option-Thursday"
            class="mdl-radio__button"
            name="days"
            value="thrusday" />
          <span class="mdl-radio__label">Thursday</span>
        </label>
        <br />
        <label
          class="mdl-radio mdl-js-radio mdl-js-ripple-effect"
          for="option-Friday">
          <input
            type="radio"
            id="option-Friday"
            class="mdl-radio__button"
            name="days"
            value="friday" />
          <span class="mdl-radio__label">Friday</span>
        </label>
        <br />
        <label
          class="mdl-radio mdl-js-radio mdl-js-ripple-effect"
          for="option-Saturday">
          <input
            type="radio"
            id="option-Saturday"
            class="mdl-radio__button"
            name="days"
            value="saturday" />
          <span class="mdl-radio__label">Saturday</span>
        </label>
        <br />
        <!-- Accent-colored raised button with ripple -->
        <button
          class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
          type="submit">
          Show prices
        </button>
      </form>
      <br />
      <div class="page-content-answer">
        <div id="results"></div>
      </div>
    </main>
  </div>
</body>
</html>
