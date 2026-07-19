// JavaScript Document

function updateTime() {

    const timeDisplay = document.getElementById('timeDisplay');

    const now = new Date(); // Getting date
	
	const year = now.getYear().toString();
	//Getting year in date and change into string
	
	const month = now.getMonth().toString().padStart(2, '0');
	//Getting month in date and change into string
	//padding "0" at the beginning if length of string is lower than 2

	const day = now.getDay().toString().padStart(2, '0');
	//Getting day in date and change into string

    const hours = now.getHours().toString().padStart(2, '0'); 
	//Getting hours in date and change into string

    const minutes = now.getMinutes().toString().padStart(2, '0');
	//Getting minutes in date and change into string

    const seconds = now.getSeconds().toString().padStart(2, '0');
	//Getting seconds in date and change into string

    const currentTime = `${hours}:${minutes}:${seconds}`;
	
	const displayDate = `${year}-${month}-${day}`;

    timeDisplay.textContent = displayDate + " " +currentTime;

}

setInterval(updateTime, 1000); //update the time every second

updateTime(); // Initial call to display time immediately