
var content = document.querySelector('#hamburger-content');

var sidebarBody = document.querySelector('#hamburger-sidebar-body')

var button =document.querySelector('#hamburger-button');
var overlay =document.querySelector('#hamburger-overlay');
var activatedClass ="hamburger-activated";
sidebarBody.innerHTML = content.innerHTML;

button.addEventListener('click',function (e) {
    e.preventDefault();

    this.parentNode.classList.add(activatedClass);



})
button.addEventListener("keydown", function (e) {
    if(this.parentNode.classList.contains(activatedClass)){

        if (e.repeat === false && e.wich=== 27)
            this.parentNode.classList.remove(activatedClass)

    }
})
overlay.addEventListener("click", function (e) {
    e.preventDefault()
    this.parentNode.classList.remove(activatedClass);

})


//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiIiwic291cmNlcyI6WyJzY3JpcHQuanMiXSwic291cmNlc0NvbnRlbnQiOlsiXG52YXIgY29udGVudCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJyNoYW1idXJnZXItY29udGVudCcpO1xuXG52YXIgc2lkZWJhckJvZHkgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjaGFtYnVyZ2VyLXNpZGViYXItYm9keScpXG5cbnZhciBidXR0b24gPWRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJyNoYW1idXJnZXItYnV0dG9uJyk7XG52YXIgb3ZlcmxheSA9ZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI2hhbWJ1cmdlci1vdmVybGF5Jyk7XG52YXIgYWN0aXZhdGVkQ2xhc3MgPVwiaGFtYnVyZ2VyLWFjdGl2YXRlZFwiO1xuc2lkZWJhckJvZHkuaW5uZXJIVE1MID0gY29udGVudC5pbm5lckhUTUw7XG5cbmJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsZnVuY3Rpb24gKGUpIHtcbiAgICBlLnByZXZlbnREZWZhdWx0KCk7XG5cbiAgICB0aGlzLnBhcmVudE5vZGUuY2xhc3NMaXN0LmFkZChhY3RpdmF0ZWRDbGFzcyk7XG5cblxuXG59KVxuYnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoXCJrZXlkb3duXCIsIGZ1bmN0aW9uIChlKSB7XG4gICAgaWYodGhpcy5wYXJlbnROb2RlLmNsYXNzTGlzdC5jb250YWlucyhhY3RpdmF0ZWRDbGFzcykpe1xuXG4gICAgICAgIGlmIChlLnJlcGVhdCA9PT0gZmFsc2UgJiYgZS53aWNoPT09IDI3KVxuICAgICAgICAgICAgdGhpcy5wYXJlbnROb2RlLmNsYXNzTGlzdC5yZW1vdmUoYWN0aXZhdGVkQ2xhc3MpXG5cbiAgICB9XG59KVxub3ZlcmxheS5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgZnVuY3Rpb24gKGUpIHtcbiAgICBlLnByZXZlbnREZWZhdWx0KClcbiAgICB0aGlzLnBhcmVudE5vZGUuY2xhc3NMaXN0LnJlbW92ZShhY3RpdmF0ZWRDbGFzcyk7XG5cbn0pXG5cbiJdLCJmaWxlIjoic2NyaXB0LmpzIn0=
