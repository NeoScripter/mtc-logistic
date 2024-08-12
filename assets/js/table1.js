const departureCity = "Москва";
    const arrivalCities = [
        [
            "Москва",
            "20 т.р. подача авто, от Мкада до точки загрузки, выгрузки и сдачи порожнего 100 р/км"
        ],
        ["Тольятти", "117000 ₽"],
        ["Владимир", "37000 ₽"],
        ["Волгоград", "115000 ₽"],
        ["Екатеринбург", "198000 ₽"],
        ["Краснодар", "164000 ₽"],
        ["Ростов-на-Дону", "134000 ₽"],
        ["Пятигорск", "177000 ₽"],
        ["Кисловодск", "180000 ₽"],
        ["Черкесск", "184000 ₽"],
        ["Назрань", "192000 ₽"],
        ["Махачкала", "198000 ₽"],
        ["Дербент", "212000 ₽"],
        ["Хасавюрт", "192000 ₽"],
        ["Ярославль", "44700 ₽"],
        ["Набережные Челны", "124000 ₽"],
        ["Челябинск", "198000 ₽"],
        ["Санкт-Петербург", "89000 ₽"],
        ["Уфа", "152000 ₽"],
        ["Самара", "125000 ₽"],
        ["Сочи", "194000 ₽"],
        ["Ульяновск", "104000 ₽"],
        ["Геленджик", "179000 ₽"],
        ["Пенза", "82000 ₽"],
        ["Новороссийск", "175000 ₽"],
        ["Крым", "203000 ₽"],
        ["Пермь", "142000 ₽"],
        ["Брянск", "59000 ₽"],
        ["Курск", "71000 ₽"],
        ["Оренбург", "164000 ₽"],
        ["Белгород", "84000 ₽"],
        ["Тюмень", "231000 ₽"],
        ["Ставрополь", "166000 ₽"],
        ["Петрозаводск", "120000 ₽"],
        ["Нижний Новгород", "61000 ₽"],
        ["Кузнецк", "94000 ₽"],
        ["Миасс", "188000 ₽"],
        ["Казань", "100000 ₽"],
        ["Омск", "290000 ₽"],
        ["Иваново", "49200 ₽"],
        ["Луганск", "128000 ₽"],
        ["Нальчик", "186000 ₽"]
    ];

    const map = new Map();

(function ($) {

    $(document).ready(() => {
        $(".table").click(function() {
            $(this).find(".table-content").toggleClass('open');
        });

        $('#calculate-btn').click(function() {
            const selectedCity = $('#arrival-city').val();
            const result = map.get(selectedCity);
            
            $('.calc-result').each(function() {
                $(this).text(result);
            });
        })

        const $departureCitySelect = $('#departure-city');
        
        const $departureCityOption = $("<option></option>");
        $departureCityOption.val(departureCity);
        $departureCityOption.text(departureCity);
        $departureCitySelect.append($departureCityOption);

        for (const [city, price] of arrivalCities) {
            map.set(city, price);
            const values = [departureCity, city, price];
            for (let i = 0; i < values.length; i++) {
                const newDiv = $("<div></div>");
                newDiv.text(values[i]);
                $(".table-content").append(newDiv);
            }

            const $arrivalCitySelect = $('#arrival-city');
            
            const $arrivalCityOption = $("<option></option>");
            $arrivalCityOption.val(city);
            $arrivalCityOption.text(city);
            $arrivalCitySelect.append($arrivalCityOption);
        }

    });
})(jQuery);
