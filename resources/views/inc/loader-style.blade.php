<style>
/* 

.loader-wrapper {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  background-color: #0074d9;
  display:flex;
  justify-content: center;
  align-items: center;
}
.loader {
  display: inline-block;
  width: 30px;
  height: 30px;
  position: relative;
  border: 4px solid #Fff;
  animation: loader 2s infinite ease;
}
.loader-inner {
  vertical-align: top;
  display: inline-block;
  width: 100%;
  background-color: #fff;
  animation: loader-inner 2s infinite ease-in;
}
@keyframes loader {
  0% { transform: rotate(0deg);}
  25% { transform: rotate(180deg);}
  50% { transform: rotate(180deg);}
  75% { transform: rotate(360deg);}
  100% { transform: rotate(360deg);}
}
@keyframes loader-inner {
  0% { height: 0%;}
  25% { height: 0%;}
  50% { height: 100%;}
  75% { height: 100%;}
  100% { height: 0%;}
} */





#plspc{
    width:250px;
    height:250px;
}

.bar{
  background-color: #0074d9;
}

.preloader {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 999;
  -webkit-display: flex;
  -moz-display: flex;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -moz-flex-direction: column;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
}

.preloader.loaded {
  -webkit-transform: translateX(-100%);
  transform: translateX(-100%);
  -webkit-transition-delay: 0.8s;
  transition-delay: 0.8s;
}

.preloader__img {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}

.bar {
  width: 100%;
  height: 25%;
  border-bottom: 2px solid #0265bb;
  -webkit-transition: transform 0.4s ease-in-out;
  -webkit-transition: -webkit-transform 0.4s ease-in-out;
  transition: -webkit-transform 0.4s ease-in-out;
  transition: transform 0.4s ease-in-out;
  transition: transform 0.4s ease-in-out, -webkit-transform 0.4s ease-in-out;
}

.bar1.loaded {
  -webkit-transform: translateX(-100%);
          transform: translateX(-100%);
}
.bar2.loaded {
    -webkit-transform: translateX(200%);
            transform: translateX(200%);
  }



.bar:nth-child(1) {
  -webkit-transition-delay: 0.1s;
  transition-delay: 0.1s;
}

.bar:nth-child(2) {
  -webkit-transition-delay: 0.2s;
  transition-delay: 0.2s;
}

.bar:nth-child(3) {
  -webkit-transition-delay: 0.3s;
  transition-delay: 0.3s;
}

/* .spinner {
  width: 250px;
  height: 170px;
  border: 3px solid #fff;
  position: absolute;
  top: 43.7%;
  left: 46.8%;
  margin: -25px 0 0 -25px;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  -webkit-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-animation: spin 1.5s infinite alternate linear;
  animation: spin 1.5s infinite alternate linear;
}

.spinner.loaded {
  opacity: 0;
}



@-webkit-keyframes spin {
  0% {
    -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
  }

  50% {
    -webkit-transform: rotate(90deg) scale(1.2);
            transform: rotate(90deg) scale(1.2);
  }

  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}

@keyframes spin {
  0% {
    -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
  }

  50% {
    -webkit-transform: rotate(90deg) scale(1.2);
            transform: rotate(90deg) scale(1.2);
  }

  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}

@media screen and (max-width: 375px) {
  .spinner {
    top: 43%;
    left: 34.5%;
  }
}

@media screen and (max-width: 360px) {
  .spinner {
    top: 41%;
    left: 34%;
  }
}

@media screen and (max-width: 320px) {
  .spinner {
    top: 40%;
    left: 31%;
  }
} */

</style>