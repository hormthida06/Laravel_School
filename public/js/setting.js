document.addEventListener('DOMContentLoaded', () => {

  const container = document.getElementById('Container') || document.body;

  const bgSelect = document.getElementById('bg');
  const borderSelect = document.getElementById('border');
  const colorSelect = document.getElementById('color');
  const fontSelect = document.getElementById('font');

  const photos = document.getElementsByClassName('photos'); // apply border here

  // Function to update background
  function updateBackground(mode) {
    if (mode === 'dark') {
      container.style.backgroundColor = '#093473c5';

    } else if (mode === 'none') {
      container.style.backgroundColor = 'white';
      container.style.color = 'black';
    } else { // bright
      container.style.backgroundColor = '#6c97d7c5';
  
    }
  }

  // Function to update profile borders (style + color)
  function updateBorder() {
    const style = borderSelect.value;
    const color = colorSelect.value;

    for (let i = 0; i < photos.length; i++) {
      photos[i].style.borderStyle = style === 'none' ? 'none' : style;
      photos[i].style.borderWidth = style === 'none' ? '0px' : '3px';
      photos[i].style.borderColor = style === 'none' ? 'transparent' : color;
      photos[i].style.borderRadius = '50%'; // make circular if desired
      photos[i].style.display = 'inline-block'; // ensure border wraps image
    }
  }

  // Function to update font
  function updateFont(font) {
    document.body.style.fontFamily = font;
  }

  // Event listeners
  bgSelect.addEventListener('change', (e) => updateBackground(e.target.value));
  borderSelect.addEventListener('change', updateBorder);
  colorSelect.addEventListener('change', updateBorder);
  fontSelect.addEventListener('change', (e) => updateFont(e.target.value));

  // Initial application
  updateBackground(bgSelect.value);
  updateBorder();
  updateFont(fontSelect.value);

});
