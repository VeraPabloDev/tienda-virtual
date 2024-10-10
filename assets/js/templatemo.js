/*

TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

*/

const btnSwitch = document.querySelector('#switch');
btnSwitch.addEventListener('click', () => {
  document.body.classList.toggle('dark');
  btnSwitch.classList.toggle('active');

  //guardamos el modo en localstorage
  if (document.body.classList.contains('dark')) {
    localStorage.setItem('dark-mode', 'true');
  } else {
    localStorage.setItem('dark-mode', 'false');
  }
});

// Obtenemos el modo actual
if (localStorage.getItem('dark-mode') == 'true') {
  document.body.classList.add('dark');
  btnSwitch.classList.add('active');
} else {
  document.body.classList.remove('dark');
  btnSwitch.classList.remove('active');
}

"use strict";
$(document).ready(function () {
  // Accordion
  var all_panels = $(".templatemo-accordion > li > ul").hide();

  $(".templatemo-accordion > li > a").click(function (e) {
    e.preventDefault();
    console.log("Hello world!");

    var target = $(this).next();

    // Muestra u oculta la lista desplegable
    target.slideToggle();

    // Demora de 200 milisegundos antes de agregar o quitar la clase 'active'
    setTimeout(function () {
      target.toggleClass("active");
    }, 200);
  });
  // End accordion

  // Product detail
  $(".product-links-wap a").click(function () {
    var this_src = $(this).children("img").attr("src");
    $("#product-detail").attr("src", this_src);
    return false;
  });
  $("#btn-minus").click(function () {
    var val = $("#var-value").html();
    val = val == "1" ? val : val - 1;
    $("#var-value").html(val);
    $("#product-quanity").val(val);
    return false;
  });
  $("#btn-plus").click(function () {
    var val = $("#var-value").html();
    val++;
    $("#var-value").html(val);
    $("#product-quanity").val(val);
    return false;
  });
  $(".btn-size").click(function () {
    var this_val = $(this).html();
    $("#product-size").val(this_val);
    $(".btn-size").removeClass("btn-secondary");
    $(".btn-size").addClass("btn-success");
    $(this).removeClass("btn-success");
    $(this).addClass("btn-secondary");
    return false;
  });
  // End roduct detail
});
