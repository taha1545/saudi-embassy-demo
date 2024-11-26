const profileImgInput = document.getElementById('profile-img');
const uploadLabel = document.getElementById('upload-label');

profileImgInput.addEventListener('change', function(event) {
  const file = event.target.files[0]; 
  if (file) {
    const reader = new FileReader();
    reader.onload = function(e) {
      uploadLabel.style.backgroundImage = `url(${e.target.result})`;
      uploadLabel.querySelector('::before').content = "";
    };
    reader.readAsDataURL(file); 
  }
});