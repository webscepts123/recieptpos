const tableWrapper = document.querySelector(".table-wrapper");
const tableWrapper2 = document.querySelector(".table-wrapper2");
const tableWrapper3 = document.querySelector(".table-wrapper3");

const switchInputs = document.querySelectorAll(".switch-wrapper input");
const prices = tableWrapper.querySelectorAll(".price");
const prices2 = tableWrapper2.querySelectorAll(".price2");
const prices3 = tableWrapper3.querySelectorAll(".price3");
const toggleClass = "hide";
for (const switchInput of switchInputs) {
  switchInput.addEventListener("input", function () {
    for (const price of prices) {
      price.classList.add(toggleClass);
    }
    const activePrices = tableWrapper.querySelectorAll(
      `.price.${switchInput.id}`
    );
    for (const activePrice of activePrices) {
      activePrice.classList.remove(toggleClass);
    }
    for (const price2 of prices2) {
      price2.classList.add(toggleClass);
    }
    const activePrices2 = tableWrapper2.querySelectorAll(
      `.price2.${switchInput.id}`
    );
    for (const activePrice2 of activePrices2) {
      activePrice2.classList.remove(toggleClass);
    }
    for (const price of prices) {
      price.classList.add(toggleClass);
    }
    const activePrices3 = tableWrapper3.querySelectorAll(
      `.price3.${switchInput.id}`
    );
    for (const activePrice3 of activePrices2) {
      activePrice3.classList.remove(toggleClass);
    }
    for (const price3 of prices3) {
      price3.classList.add(toggleClass);
    }
    for (const activePrice of activePrices) {
      activePrice.classList.remove(toggleClass);
    }

    for (const activePrice2 of activePrices2) {
      activePrice2.classList.remove(toggleClass);
    }

    for (const activePrice3 of activePrices3) {
      activePrice3.classList.remove(toggleClass);
    }
  });
}