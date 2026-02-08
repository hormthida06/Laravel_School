const mainbox = document.querySelector('.mainbox');
let isDragging = false;
let currentX = 50;
let currentY = 50;
let initialX;
let initialY;

mainbox.addEventListener('mousedown', startDragging);
document.addEventListener('mousemove', drag);
document.addEventListener('mouseup', stopDragging);

function startDragging(e) {
    initialX = e.clientX - currentX;
    initialY = e.clientY - currentY;
    isDragging = true;
    mainbox.style.cursor = 'grabbing';
}

function drag(e) {
    if (isDragging) {
        e.preventDefault();

        let newX = e.clientX - initialX;
        let newY = e.clientY - initialY;

        currentX = newX;
        currentY = newY;

        mainbox.style.left = currentX + 'px';
        mainbox.style.top = currentY + 'px';
    }
}

function stopDragging() {
    isDragging = false;
    mainbox.style.cursor = 'move';
}


