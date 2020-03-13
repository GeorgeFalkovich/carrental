// AJAX Call on Car Manufactor choose model
const onCarCompanyClicked = v => {
  let company_id = v;
  let xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      let car_models_obj = JSON.parse(this.responseText);
      let car_models = Object.values(car_models_obj);
      document.getElementById("car_model").innerHTML = fillSelectModel(
        car_models
      );
    }
  };
  xmlhttp.open("GET", "model/getModels.php?company_id=" + company_id);
  xmlhttp.send();
};

const fillSelectModel = carModels => {
  let options = "";
  for (let i = 0; i < carModels.length; i++) {
    options += "<option>" + carModels[i] + "</option>";
  }
  return options;
};

// OnScroll navbar effect
$(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 170) {
            $("nav").css("background-color", "rgba(0, 0, 0, 0.55)");
            $(".nav-link").css("color", "white");
            $(".navbar-brand").css("color", "white");
        }
        if ($(this).scrollTop() < 170) {
            $("nav").css("background-color", "transparent");
            $(".nav-link").css("color", "#4e555b");
            $(".navbar-brand").css("color", "black");
        }
    });
});

// Show other driver info
$("#other-driver").hide();
$("#driver-check").click(function() {
    if(this.checked === true) {
        $("#other-driver").show(1000)
    }
    else {
        $("#other-driver").hide(1000);
    }
});



