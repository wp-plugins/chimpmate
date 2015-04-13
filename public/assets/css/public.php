<?php header('Content-Type: text/css');
?>
.wpmcerrora{
  -webkit-animation: wpmcshake .5s linear;
  animation: wpmcshake .5s linear;
}
@-webkit-keyframes wpmcshake {
    8%, 41% {
        -webkit-transform: translateX(-10px);
    }
    25%, 58% {
        -webkit-transform: translateX(10px);
    }
    75% {
        -webkit-transform: translateX(-5px);
    }
    92% {
        -webkit-transform: translateX(5px);
    }
    0%, 100% {
        -webkit-transform: translateX(0);
    }
}
@keyframes wpmcshake {
    8%, 41% {
        transform: translateX(-10px);
    }
    25%, 58% {
        transform: translateX(10px);
    }
    75% {
        transform: translateX(-5px);
    }
    92% {
        transform: translateX(5px);
    }
    0%, 100% {
        transform: translateX(0);
    }
}