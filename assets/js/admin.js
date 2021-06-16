const siteDateTime = document.querySelector(".site__datetime");

const displayDateTime = () => {
  const monthNames = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
  ];
  let date = new Date();
  let currentDate =
    monthNames[date.getMonth()] + ` ${date.getDate()}, ` + date.getFullYear();
  let currentTime =
    `${date.getHours() < 12 ? date.getHours() : date.getHours() - 12}:` +
    `${String(date.getMinutes()).padStart(2, "0")}:` +
    `${String(date.getSeconds()).padStart(2, "0")} ` +
    `${date.getHours() < 12 ? "AM" : "PM"}`;

  siteDateTime.innerText = `${currentDate} | ${currentTime}`;
};

setInterval(displayDateTime, 1000);
