(function () {
  function redirect_filter(country, state = "", city = "") {
    let base_url = location.origin + location.pathname;

    if (country != 0 && state == 0 && city == 0) {
      window.location.href = base_url + "?pais=" + country;
    }

    if (country != 0 && state != 0 && city == 0) {
      window.location.href = base_url + "?pais=" + country + "&estado=" + state;
    }

    if (country != 0 && state != 0 && city != 0) {
      window.location.href =
        base_url + "?pais=" + country + "&estado=" + state + "&cidade=" + city;
    }

    if (country == 0) {
      window.location.href = base_url;
    }
  }

  function show_inputs_params() {
    let params = new URLSearchParams(document.location.search);
    let country = params.get("pais");
    let state = params.get("estado");
    let city = params.get("cidade");

    document.querySelector(".js-field-country").value =
      country != null ? country : 0;

    document.querySelector(".js-field-state").value = state != null ? state : 0;

    document.querySelector(".js-field-city").value = city != null ? city : 0;
  }

  if (document.querySelector(".js-field-country")) {
    const fieldCountry = document.querySelector(".js-field-country");
    const fieldState = document.querySelector(".js-field-state");
    const fieldCity = document.querySelector(".js-field-city");

    show_inputs_params();

    fieldCountry.addEventListener("change", function () {
      redirect_filter(this.value);
    });

    fieldState.addEventListener("change", function () {
      redirect_filter(fieldCountry.value, this.value);
    });

    fieldCity.addEventListener("change", function () {
      redirect_filter(fieldCountry.value, fieldState.value, this.value);
    });
  }
})();
