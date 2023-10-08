<style>
  @import url('https://fonts.googleapis.com/css2?family=Asap&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

  body {
    margin: 0px;
    padding: 0px;
    font-family: "Asap", sans-serif;
  }

  * {
    box-sizing: border-box;
  }

  ul {
    list-style: none;
  }

  a {
    text-decoration: none;
  }

  nav {
    display: inline-flex;
    justify-content: space-around;
    align-items: center;
    height: 60px;
    position: fixed;
    width: 100%;
    backdrop-filter: blur(15px);
    -webkit-backdrop-filter: blur(15px);
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    padding: 0px 5%;
    z-index: 1;
  }

  .logo a {
    font-weight: 700;
    color: #00c2cb;
    font-size: 2rem;
  }

  nav ul {
    display: flex;
  }

  nav ul li a {
    height: 40px;
    line-height: 43px;
    margin: 10px;
    padding: 0px 30px;
    display: flex;
    font-size: 1rem;
    font-weight: 600;
    color: #e0ffff;
    transition: 0.1s;
  }

  nav ul li a:hover,
  .main-text a:hover {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 3px;
    color: #fff;
  }

  #main {
    width: 100%;
    height: 100vh;
    position: relative;
  }

  .main-text {
    position: absolute;
    left: 13%;
    top: 42%;
    transform: translate(-13%, -42%);
    line-height: 0;
  }

  .main-text h2 {
    font-weight: 500;
    font-size: 30px;
    color: #e0ffff;
  }

  .main-text h1 {
    font-size: 70px;
    font-weight: 500;
    font-family: "Roboto", sans-serif;
    color: #fff;
  }

  .main-text p {
    font-size: 20px;
    color: #e0ffff;
    margin: 25px 0px 25px;
    line-height: 50px;
  }

  .main-text a {
    width: 150px;
    height: 40px;
    outline: none;
    border-radius: 5px;
    font-size: 15px;
    font-weight: 200;
    padding: 1rem;
  }

  .btn {
    border: 1px solid rgba(255, 255, 255, 0.1);
    color: #e0ffff;
    font-family: "Asap", sans-serif;
  }

  #main video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    background-image: linear-gradient(to bottom, rgba(34, 35, 46, 0.75) 50%, rgba(34, 35, 46));
  }

  .slider-btns {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    transform: translateY(50px);
    z-index: 100;
  }

  .slide-btn {
    width: 10px;
    height: 10px;
    background: #e0ffff;
    border-radius: 50%;
    cursor: pointer;
  }

  .slide-btn.active {
    background: #00c2cb;
  }

  .slide-btn:not(:last-child) {
    margin-right: 20px;
  }

  .slide-btn:hover {
    transform: scale(1.2);
  }

  .video-bg {
    position: absolute;
    width: 100%;
    clip-path: circle(0% at 0 50%);
  }

  .video-bg.active {
    clip-path: circle(150% at 0 50%);
    transition: 1s ease;
    transition-property: clip-path;
  }
</style>
<script>
  const btns = document.querySelectorAll(".slide-btn");
  const slider = document.querySelectorAll(".video-bg");

  var slideVideo = function(index) {
    btns.forEach((btn) => {
      btn.classList.remove('active');
    });
    slider.forEach((slide) => {
      slide.classList.remove('active');
    });
    btns[index].classList.add('active');
    slider[index].classList.add('active');
  }

  btns.forEach((btn, i) => {
    btn.addEventListener('click', () => {
      slideVideo(i);
    })
  })
</script>
<section id="main">
  <video class="video-bg active" src="../data/dbd01.mp4" muted autoplay loop></video>
  <video class="video-bg" src="https://res.cloudinary.com/oscarjite/video/upload/v1663096372/video2_xfhih7.mp4" muted autoplay loop></video>
  <video class="video-bg" src="https://res.cloudinary.com/oscarjite/video/upload/v1663096368/video3_vfcnhd.mp4" muted autoplay loop></video>
  <div class="overlay"></div>
  <div class="main-text">

    <h1>Kuto</h1>
    <p>This demo shows a video background slider.</p>


  </div>
</section>