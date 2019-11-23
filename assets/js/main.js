function closeburger() {
    let otherBurger = document.getElementById('otherburger');
    if ($(otherBurger).hasClass("burgereffect2")) {
        otherBurger.classList.remove("burgereffect2")
        otherBurger.classList.add("burgereffect")
        setTimeout(dnone, 1000);
    }
}

function openMenu() {
    let otherBurger = document.getElementById('otherburger');
    let closeBurger = document.getElementById('closeburger');
    if ($(otherBurger).hasClass("burgereffect")){
        closeBurger.classList.remove("d-none")
        otherBurger.classList.remove("burgereffect")
        otherBurger.classList.add("burgereffect2")
    } else {
        otherBurger.classList.remove("burgereffect2")
        otherBurger.classList.add("burgereffect")
        setTimeout(dnone, 1000);
    }
}

function dnone() {
    let closeBurger = document.getElementById('closeburger');
    closeBurger.classList.add("d-none");
}

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}