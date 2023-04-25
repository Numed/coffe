const buttonsFilter = document.querySelectorAll(".btn-filter"),
  input = document.querySelector(".input-search");

buttonsFilter.forEach((button) => {
  button.onclick = () => {
    const countries = document.querySelectorAll(".card-country"),
      activeBtn = document.querySelector(".btn-filter.active");

    if (activeBtn && button !== activeBtn) {
      activeBtn.classList.remove("active");
      button.classList.add("active");
      filterCards(button.value.toLowerCase(), countries);
    } else if (activeBtn && button === activeBtn) {
      button.classList.remove("active");
      filterCards("", countries);
    } else {
      button.classList.add("active");
      filterCards(button.value.toLowerCase(), countries);
    }
  };
});

input.oninput = () => {
  const nameCoffe = document.querySelectorAll(".card-title");
  console.log(nameCoffe);
  filterCards(input.value.toLowerCase(), nameCoffe);
};

const filterCards = (value, subjects) => {
  const nameSubject = subjects;
  let searchData = value;
  if (searchData !== "") {
    nameSubject.forEach(function (e) {
      if (e.textContent.toLowerCase().search(searchData) === -1) {
        e.parentElement.classList.add("hide");
      } else {
        e.parentElement.classList.remove("hide");
      }
    });
  } else {
    nameSubject.forEach((e) => {
      e.parentElement.classList.remove("hide");
    });
  }
};
