document.addEventListener("DOMContentLoaded", function() {
    var menuLinks = document.querySelectorAll('.sidr-class-menu-link');
    console.log(menuLinks); // Перевірте, чи отримуєте очікуваний результат
    // Додаємо обробник подій іншим чином, якщо необхідно
});
// Знаходимо всі елементи меню
var menuLinks = document.querySelectorAll('.sidr-class-menu-link');
console.log(menuLinks);
// Додаємо обробник подій для кожного посилання в меню
menuLinks.forEach(function(menuLink) {
    menuLink.addEventListener('click', function(event) {
        // Перевіряємо, чи посилання має "href" і не є пустим
        if (this.getAttribute('href') && this.getAttribute('href') !== '#') {
            // Якщо у посилання є URL, то дозволяємо стандартну дію
            return; // Вихід з обробника подій
        }

        // Якщо посилання не має URL або має "#" в якості посилання,
        // то забороняємо стандартну дію, але не використовуємо preventDefault()
        // Можливо, ви захочете додати власні дії тут

        // Наприклад, ви можете відкривати або закривати підменю, якщо воно є
    });
});

