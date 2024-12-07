function checkLoginStatus() {
  const isLoggedIn = localStorage.getItem('isLoggedIn');
  const profilePhoto = localStorage.getItem('profile_photo');
  const loginButton = document.querySelector('.btn-login-link');

  console.log('Login status:', isLoggedIn);
  console.log('Profile photo URL:', profilePhoto);

  if (isLoggedIn === 'true' && loginButton) {
      const profileContainer = document.createElement('a');
      profileContainer.href = '/dashboard';
      profileContainer.className = 'profile-container';

      const profileImage = document.createElement('img');
      profileImage.className = 'profile-icon';
      
      if (profilePhoto) {
          profileImage.src = profilePhoto;
          console.log('Setting image src:', profilePhoto);
      } else {
          profileImage.src = 'images/default-profile.jpg';
          console.log('Using default image');
      }

      profileContainer.appendChild(profileImage);
      loginButton.parentNode.replaceChild(profileContainer, loginButton);
  }
}

// Fungsi untuk handle logout
function handleLogout() {
  // Hapus semua data dari localStorage
  localStorage.removeItem('isLoggedIn');
  localStorage.removeItem('name');
  localStorage.removeItem('nim');
  localStorage.removeItem('profile_photo');
}

// Jalankan fungsi saat DOM content loaded
document.addEventListener('DOMContentLoaded', checkLoginStatus);

// Jalankan fungsi saat storage berubah
window.addEventListener('storage', checkLoginStatus);