//tabs contact

const tabs = document.querySelectorAll("[data-tab]");
const tabsContent = document.querySelectorAll("[data-tab-content]");

tabs.forEach(function (item) {
  item.addEventListener("click", function () {
    let curentBtn = item;

    tabs.forEach(function (item) {
      item.classList.remove("tab-active");
    });

    curentBtn.classList.add("tab-active");

    tabsContent.forEach(function (e) {
      e.classList.add("hidden");
    });

    const contentBox = document.querySelector("#" + this.dataset.tab);
    contentBox.classList.remove("hidden");
  });
});

//callendar for form

function setPlaceholder() {
  let today = new Date();
  let day = today.getDate();
  let month = today.getMonth() + 1; // Помітка: Місяці починаються з 0
  let year = today.getFullYear();

  // Форматування дати в формат yyyy-mm-dd, який відповідає вимогам для типу "date"
  if (day < 10) {
    day = "0" + day;
  }
  if (month < 10) {
    month = "0" + month;
  }

  let currentDate = day + "-" + month + "-" + year;

  // Встановлення поточної дати в поле вводу
  document.getElementById("calendar").setAttribute("value", currentDate);
}


