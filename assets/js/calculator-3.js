(function ($) {
    $(document).ready(() => {
        if ($(".seacargo-wrapper")) {
        }
        const deliveryTerms = "FOB";
        const containerType = "40HQ";

        const departureCities = [
            "Шанхай",
            "Нингбо",
            "Цзиньхуа",
            "Ханчжоу",
            "Гуанчжоу",
            "Иу",
            "Шеньжень",
            "Циндао",
            "Тяньцзинь"
        ];

        const arrivalCity = "Москва";
        const weight = "до 20 тонн";

        const prices = [
            "$ 7260",
            "$ 7260",
            "$ 7260",
            "$ 7260",
            "$ 7260",
            "$ 7260",
            "$ 7090",
            "$ 6970",
            "$ 6800"
        ];

        const map = new Map();
        const names = ["Развернуть таблицу ставок", "Свернуть таблицу ставок"];
        let switcher = false;

        const parent = $(".seacargo-wrapper");
        parent.find(".table").click(function () {
            $(this).find(".table-content").toggleClass("open");
            $(this)
                .find(".table-title")
                .text(switcher ? names[0] : names[1]);
            switcher = !switcher;
        });

        const depatureCityField = parent.find("#departure-city");
        const arrivalCityField = parent.find("#arrival-city");
        const deliveryTermsField = parent.find("#delivery-terms");
        const containerTypeField = parent.find("#container-type");
        const cargoWeightField = parent.find("#cargo-weight");

        const calculateBtn = parent.find("#calculate-btn");

        function populateSelectFields(fields, options) {
            for (let i = 0; i < fields.length; i++) {
                const option = $("<option></option>");
                option.val(options[i]);
                option.text(options[i]);
                fields[i].append(option);
            }
        }

        populateSelectFields(
            [
                arrivalCityField,
                deliveryTermsField,
                containerTypeField,
                cargoWeightField
            ],
            [arrivalCity, deliveryTerms, containerType, weight]
        );

        function validateInput(fields) {
            let valid = true;
            for (let field of fields) {
                const selectedOption = field.find('option:selected');
                if (selectedOption.is(':disabled')) {
                    field
                        .siblings(".quiz__input-example.error")
                        .text("Заполните это поле!");
                    valid = false;
                } else {
                    field
                        .siblings(".quiz__input-example.error")
                        .text("");
                }
            }
            return valid;
        }

        calculateBtn.click(function () {
            const valid = validateInput([
                depatureCityField,
                arrivalCityField,
                deliveryTermsField,
                containerTypeField,
                cargoWeightField
            ]);

            if (valid) {
                const result = map.get(depatureCityField.val());
                parent.find(".calc-result").each(function () {
                    $(this).text(result);
                });
            }
        });

        for (let i = 0; i < departureCities.length; i++) {
            map.set(departureCities[i], prices[i]);
            const values = [
                deliveryTerms,
                containerType,
                departureCities[i],
                arrivalCity,
                weight,
                prices[i]
            ];
            for (let i = 0; i < values.length; i++) {
                const newDiv = $("<div></div>");
                newDiv.text(values[i]);
                parent.find(".table-content").append(newDiv);
            }
            const departureCityOption = $("<option></option>");
            departureCityOption.val(departureCities[i]);
            departureCityOption.text(departureCities[i]);
            depatureCityField.append(departureCityOption);
        }
    });
})(jQuery);
