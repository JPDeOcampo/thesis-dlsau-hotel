var hours = 5; // Reset when storage is more than 24hours
var now = new Date().getTime();
var setupTime = localStorage.getItem('setupTime');
if (setupTime == null) {
    localStorage.setItem('setupTime', now)
} else {
    if(now-setupTime > 5000) {
        localStorage.clear()
        localStorage.setItem('setupTime', now);
    }
}