window.addEventListener("load", () => {

    document.querySelector("#ip").onkeyup = function (e) {
        if (e.which == 13 && this.value.length > 7) {
            let ip = this.value;
            this.value = "";

            let animation = new Promise(animateLock);
            animation.then(() => lookupIp(ip));
        }
    }
});

const animateLock = (resolve, reject) => {
    let angle = 0;
    let lock = document.querySelector(".lock");

    const tick = () => {
        if (angle < 360) {
            angle += 2;
            lock.style.transform = "rotate(" + angle + "deg)";
            window.requestAnimationFrame(tick);
        }
        else {
            resolve();
        }
    }

    tick();
}

const lookupIp = ipAddress => {
    // À compléter
}