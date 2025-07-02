function registerUser(e) {
  e.preventDefault();
  const username = document.getElementById('register-username').value;
  const password = document.getElementById('register-password').value;
  localStorage.setItem('username', username);
  localStorage.setItem('password', password);
  alert('Registration successful!');
  window.location.href = 'login.html';
}

function loginUser(e) {
  e.preventDefault();
  const username = document.getElementById('login-username').value;
  const password = document.getElementById('login-password').value;
  const storedUsername = localStorage.getItem('username');
  const storedPassword = localStorage.getItem('password');
  if (username === storedUsername && password === storedPassword) {
    window.location.href = 'dashboard.html';
  } else {
    alert('Invalid credentials!');
  }
}