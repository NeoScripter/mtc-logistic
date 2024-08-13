(function ($) {
    $(document).ready(() => {
        if ($(".multiload-wrapper")) {
            
        }
        const weights = [
            "26000",
            "24000",
            "22000",
            "20000",
            "18000",
            "16000",
            "14500",
            "13200",
            "12000",
            "11000",
            "9600",
            "8300",
            "7500",
            "6400",
            "6200"
        ];

        const map = new Map();
        const names = ["Развернуть таблицу ставок", "Свернуть таблицу ставок"];
        let switcher = false;

        const parent = $(".multiload-wrapper");
        parent.find(".table").click(function () {
            $(this).find(".table-content").toggleClass("open");
            $(this)
                .find(".table-title")
                .text(switcher ? names[0] : names[1]);
            switcher = !switcher;
        });

        parent.find("#calculate-btn").click(function () {
            const selectedCity = $("#arrival-city").val();
            const result = map.get(selectedCity);

            parent.find(".calc-result").each(function () {
                $(this).text(result);
            });
        });

        const $cargoWeightSelect = $("#cargo-weight");

        const $departureCityOption = $("<option></option>");
        $departureCityOption.val(departureCity);
        $departureCityOption.text(departureCity);
        $cargoWeightSelect.append($departureCityOption);

        for (const [city, price] of arrivalCities) {
            map.set(city, price);
            const values = [departureCity, city, price];
            for (let i = 0; i < values.length; i++) {
                const newDiv = $("<div></div>");
                newDiv.text(values[i]);
                parent.find(".table-content").append(newDiv);
            }

            const $arrivalCitySelect = $("#arrival-city");

            const $arrivalCityOption = $("<option></option>");
            $arrivalCityOption.val(city);
            $arrivalCityOption.text(city);
            $arrivalCitySelect.append($arrivalCityOption);
        }
    });
})(jQuery);
