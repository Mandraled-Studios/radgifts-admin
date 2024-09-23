import "./bootstrap";

import "../../node_modules/cropperjs";

document.body.onload = function() {

    const carousel = document.getElementById("reviews");
    const items = document.querySelectorAll(".carousel-item");
    let currentItem = 0;
    let isActive = true;

    let banner1Timer = setInterval(() => {
        changeBanner1(items, "to-left", "from-right");
    }, 4000);

    function setCurrentItem(index) {
        currentItem = (index + items.length) % items.length;
    }

    function hideItem(direction) {
        console.log("Trying to hide item "+currentItem);
        isActive = false;
        items[currentItem].classList.add(direction);
        items[currentItem].addEventListener("animationend", function () {
            this.classList.remove("active", direction);
        });
    }

    function showItem(direction) {
        console.log("Trying to show item "+currentItem);
        items[currentItem].classList.add("next", direction);
        items[currentItem].addEventListener("animationend", function () {
            this.classList.remove("next", direction);
            this.classList.add("active");
            isActive = true;
        });
    }

    document.getElementById("carouselPrev").addEventListener("click", function (e) {
        e.preventDefault();
        changeBanner1(items, "to-right", "from-left");
    });

    document.getElementById("carouselNext").addEventListener("click", function (e) {
        e.preventDefault();
        changeBanner1(items, "to-left", "from-right");
    });

    function changeBanner1(items, direction1, direction2) {
        console.log("Trying to change banner to "+currentItem);
        if (isActive) {
            hideItem(direction1);
            setCurrentItem(currentItem - 1);
            console.log("Changing banner to "+currentItem);
            showItem(direction2);
        }
    }

    carousel.addEventListener("mouseenter", function () {
        clearInterval(banner1Timer);
    });

    carousel.addEventListener("mouseleave", function () {
        banner1Timer = setInterval(() => {
            changeBanner1(items, "to-left", "from-right");
        }, 4000);
    });

}
