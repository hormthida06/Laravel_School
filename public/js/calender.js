
const monthYear = document.getElementById("monthYear");
const dates = document.getElementById("dates");
const today = new Date();
let currentMonth = today.getMonth();
let currentYear = today.getFullYear();

function renderCalendar(month, year) {
  const firstDay = new Date(year, month, 1).getDay();
  const daysInMonth = new Date(year, month + 1, 0).getDate();

  monthYear.textContent = `${new Date(year, month).toLocaleString('default', { month: 'long' })} ${year}`;
  dates.innerHTML = "";

  for (let i = 0; i < firstDay; i++) {
    dates.innerHTML += `<div></div>`;
  }

  for (let day = 1; day <= daysInMonth; day++) {
    const isToday = day === today.getDate() && month === today.getMonth() && year === today.getFullYear();
    dates.innerHTML += `<div class="date${isToday ? ' today' : ''}">${day}</div>`;
  }
}

function prevMonth() {
  currentMonth--;
  if (currentMonth < 0) {
    currentMonth = 11;
    currentYear--;
  }
  renderCalendar(currentMonth, currentYear);
}

function nextMonth() {
  currentMonth++;
  if (currentMonth > 11) {
    currentMonth = 0;
    currentYear++;
  }
  renderCalendar(currentMonth, currentYear);
}

renderCalendar(currentMonth, currentYear);

// ----------------Slide--------------------

const slides = document.querySelector('.slides');
const images = document.querySelectorAll('.slides img');
let index = 0;

function autoSlide() {
  index++;
  if(index >= images.length) index = 0;
  slides.style.transform = `translateX(-${index * 800}px)`;
}

setInterval(autoSlide, 3000); // Move every 3 seconds

