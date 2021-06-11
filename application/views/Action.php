<!DOCTYPE html>
<style>
  * {box-sizing: border-box}

  /* Container needed to position the overlay. Adjust the width as needed */
  .container {
    position: relative;
    width: 400%;
    max-width: 300px;
  }

  .container img {
    width: 200%;
    height: 100%;
  }

  /* Make the image to responsive */
 

  /* The overlay effect - lays on top of the container and over the image */
  .overlay {
    position: absolute;
    bottom: 0;
    background: rgb(0, 0, 0);
    background: rgba(0, 0, 0, 0.5); /* Black see-through */
    color: #f1f1f1;
    width: 100%;
    transition: .5s ease;
    opacity:0;
    color: white;
    font-size: 20px;
    padding: 20px;
    text-align: center;
  }

.card-img-top {
    width: 100%;
    height: 60vh;
}
  /* When you mouse over the container, fade in the overlay title */
  .container:hover .overlay {
    opacity: 1;
  }

</style>
<html>

<div class="row">
  <div class="HeaderLL">
    <div class="row justify-content-center">
    </div>
  </div>
  
  <div class="DaftarLL">

    <div class="card-group ">
      <div class="card mb-3" style="width: 18rem;">
        <img src="<?= base_url('/assets/img/movies/Kingsman.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Kingsman</h5>
          <a href="#"></a>
        </div>
      </div>

      <div class="card mb-3" style="width: 18rem;">
        <img src="<?= base_url('/assets/img/movies/MortalKombat.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Mortal Kombat</h5>
          <a href="#"></a>
        </div>
      </div>

      <div class="card mb-3" style="width: 18rem;">
        <img src="<?= base_url('/assets/img/movies/SuicideSquad.jpg') ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Suicide Squad</h5>
          <a href="#"></a>
        </div>
      </div>

    </div>

  </div>
</div>