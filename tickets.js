const container = document.querySelector('.container');
const seats = document.querySelectorAll('.seat:not(.occupied)');
const count = document.getElementById('count');
const total = document.getElementById('total');
const theaterselect = document.getElementById('movie');
//const ticketprice = 500;
populateUI();
let ticketprice = +theaterselect.value;
//console.log(ticketprice);
// save selected movie index and price
function setTheaterData(theaterIndex, theaterprice){
    localStorage.setItem('selectedTheaterIndex', theaterIndex);
    localStorage.setItem('selectedTheaterPrice', theaterprice);
}
//update total and the count 
function selectedcount(){
    const selectedseats= document.querySelectorAll('.seat.selected');
    //console.log(selectedseats);
    const seatsIndex = [...selectedseats].map(function(seat){
        return [...seats].indexOf(seat);

    });
    //console.log(seatsIndex);
    localStorage.setItem('selectedseats', JSON.stringify(seatsIndex));
    const selectedseatscount = selectedseats.length;
    count.innerText = selectedseatscount;
    total.innerText = selectedseatscount * ticketprice;
    //console.log(selectedseatscount);
    //const selectedseatscount = selectedseats.length;
    //console.log(selectedseatscount);
    //count.innerText = selectedseatscount;
    //total.innerText = selectedseatscount *ticketprice;
}
//function clearSelection(){
    //const selectedSeats=document.querySelectorAll('.seat.selected');
    //selectedSeats.forEach((seat)=>{
        //seat.classList.remove('selected');
    //});
//}
//get data from local storage and populate UI
function populateUI(){
    //clearSelection();
    const selectedseats = JSON.parse(localStorage.getItem('selectedseats'));//grab the selected seats from local storage converting it back to the array
    if(selectedseats !== null && selectedseats.length>0){
        seats.forEach((seat,index)=>{
            if(selectedseats.indexOf(index)>-1){
                seat.classList.add('selected');
            }
        });
    }
    const selectedMovieIndex = localStorage.getItem('selectedTheaterIndex');
    if(selectedMovieIndex != null){
        theaterselect.selectedIndex = selectedMovieIndex;
    }

}
container.addEventListener('click',(e)=>{
    if(e.target.classList.contains('seat') && !e.target.classList.contains('seatoccupied')){
        e.target.classList.toggle('selected');
        //setTimeout(selectedcount,10);
    }
    selectedcount();
});
//update ticket price based on selected movie theater
theaterselect.addEventListener('change',(e)=>{
    ticketprice= +e.target.value;
    setTheaterData(e.target.selectedIndex, e.target.value);
    selectedcount();
});

//local storage
selectedcount()

