
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

        const density = [
            ["От", "406"],
            ["375", "405"],
            ["344", "374"],
            ["313", "343"],
            ["281", "312"],
            ["250", "280"],
            ["227", "249"],
            ["206", "226"],
            ["188", "205"],
            ["172", "187"],
            ["150", "171"],
            ["130", "149"],
            ["117", "129"],
            ["100", "116"],
            ["99", "До"]
        ];

        const pricePerKilo = [
            0.66, 0.72, 0.79, 0.87, 0.96, 1.07, 1.18, 1.3, 1.39, 1.49, 1.72,
            2.0, 2.2, 2.6, 2.68
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

        const cargoVolume = parent.find("#cargo-volume");
        const cargoWeight = parent.find("#cargo-weight");
        const calculateBtn = parent.find("#calculate-btn");

        const cargoVolumeErrorField = cargoVolume.siblings(
            ".quiz__input-example.error"
        );
        const cargoWeightErrorField = cargoWeight.siblings(
            ".quiz__input-example.error"
        );

        function validateInput(inputField, errorField) {
            const value = inputField.val().trim();

            if (value === "") {
                errorField.text("Введите число!");
                calculateBtn.addClass("disabled");
            } else if (isNaN(parseFloat(value))) {
                errorField.text("Введите число!");
                calculateBtn.addClass("disabled");
            } else {
                errorField.text(""); 
                if (
                    isValidNumber(cargoVolume.val()) &&
                    isValidNumber(cargoWeight.val())
                ) {
                    calculateBtn.removeClass("disabled");
                }
            }
        }

        function isValidNumber(value) {
            return value !== "" && !isNaN(parseFloat(value));
        }

        cargoVolume.on("input", function () {
            validateInput(cargoVolume, cargoVolumeErrorField);
        });

        cargoWeight.on("input", function () {
            validateInput(cargoWeight, cargoWeightErrorField);
        });

        calculateBtn.click(function () {
            const weight = parseFloat(cargoWeight.val());
            const volume = parseFloat(cargoVolume.val());
            const resultingDensity = Math.floor(weight / volume);
        
            const calculatedPricePerKilo = findPricePerKilo(resultingDensity);
            const finalPrice = calculatedPricePerKilo * Math.floor(weight);
        
            parent.find(".calc-result").each(function () {
                $(this).text(finalPrice);
            });
        });

        function findPricePerKilo(density) {
            let resultingKey;
            for (key of map.keys()) {
                resultingKey = key;
                if (density > key) {
                    break;
                }
            }
            return map.get(resultingKey);
        }

        for (let i = 0; i < weights.length; i++) {
            let threshhold = density[i][0];
            threshhold = threshhold === "От" ? "406" : threshhold;
            map.set(parseFloat(threshhold), pricePerKilo[i]);
            const values = [
                weights[i],
                density[i][0],
                density[i][1],
                `$ ${pricePerKilo[i]}`
            ];
            for (let i = 0; i < values.length; i++) {
                const newDiv = $("<div></div>");
                newDiv.text(values[i]);
                parent.find(".table-content").append(newDiv);
            }
        }
    });
})(jQuery);
