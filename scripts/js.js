function change(objName, min, max, step) {
    var obj = document.getElementById(objName);
    var tmp = +obj.value + step;
    if (tmp<min) tmp=min;
    if (tmp>max) tmp=max;
    obj.value = tmp;
}
$(document).ready(function(){
    $('.Ritem').owlCarousel ({
        items:4,
        loop: false,
        rewind: true,
        margin:25,
        nav:true,
        // autoWidth: true
    });
});

function myFunction(){
    let x = document.getElementById("searchHeader");
    x.style.display = x.style.display === 'none' ? 'flex' : 'none';
}

function myFunction1() {
    var x = document.getElementById("ya");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
};

$('.wrap-owl.owl-carousel').owlCarousel({
    items:4,
    margin:10,
    rewind:true,
    responsive: {
        0:{
            items:1,
            nav:false,
            autoWidth: true
        }
    }
});