<!DOCTYPE html>
<html>
<head>
<style>
body

div.polaroid {
  width: 80%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
  margin-left: auto;
  margin-right: auto;
}

div.container {
  text-align: center;
  padding: 10px 20px;
}
h2 {
  font-family: Open Sans;
  font-style: normal;
  font-weight: bold;
  font-size: 54px;
  color: white;
  text-align: center;

}
p {
  font-family: Sans;
  font-style: normal;
  font-weight: bold;
  font-size: 25px;
  color: black;
  text-align: center;

}
.HeaderLL {
  position: center;
  top: 0;
  right: 0;
  left: 0;
  height: 300px;
  width: 100%;
  background-image: url('<?= base_url('/assets/img/header.png'); ?>');
  background-size: 70%;
  background-repeat: no-repeat;
  background-position: center;
}
</style>
</head>
<body>
  <div class="HeaderLL">
    <div class="row justify-content-center">
    </div>
  </div>
<h2>Theater of Lalajo Film</h2>

<div class="polaroid">
  <img src=<?= base_url('/assets/img/theater/trans.jpg') ?> alt="5 Terre" style="width:100%">
  <div class="container">
  <p>Transmart Buah Batu XXI</p>
  </div>
</div>

<div class="polaroid">
  <img src=<?= base_url('/assets/img/theater/citylink.jpg') ?> alt="Norther Lights" style="width:100%">
  <div class="container">
  <p>Festival Citylink XXI</p>
  </div>
</div>

<div class="polaroid">
  <img src=<?= base_url('/assets/img/theater/empire.jpg') ?> alt="Norther Lights" style="width:100%">
  <div class="container">
  <p>Empire XXI</p>
  </div>
</div>

<div class="polaroid">
  <img src=<?= base_url('/assets/img/theater/ciwalk.jpg') ?> alt="Norther Lights" style="width:100%">
  <div class="container">
  <p>Ciwalk XXI</p>
  </div>
</div>

<div class="polaroid">
  <img src=<?= base_url('/assets/img/theater/btc.jpg') ?> alt="Norther Lights" style="width:100%">
  <div class="container">
  <p>BTC XXI</p>
  </div>
</div>

<div class="polaroid">
  <img src=<?= base_url('/assets/img/theater/braga.jpg') ?> alt="Norther Lights" style="width:100%">
  <div class="container">
  <p>Braga XXI</p>
  </div>
</div>

<div class="polaroid">
  <img src=<?= base_url('/assets/img/theater/tsm.jpg') ?> alt="Norther Lights" style="width:100%">
  <div class="container">
  <p>Trans Studio Mall XXI</p>
  </div>
</div>

</body>
</html>
