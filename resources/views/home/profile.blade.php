@extends('system.app')

@section('title', 'Il Mio Profilo - Bacheca')

@section('container-class', 'container-max-width-900')

@section('header-title', 'La Mia Bacheca')

@section('navigation')
  <a href="{{ url('/') }}">Home</a>
  <a href="{{ url('/profilo') }}">Profilo</a>
  <a href="{{ url('/logout') }}">Esci</a>
@endsection

@section('content')
  <div class="board-title">Il Mio Profilo</div>

  <div class="profile-section">
    <div class="profile-image-container">
      <img id="profile-image" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20100%20100%22%20fill%3D%22%23AAA%22%3E%3Ccircle%20cx%3D%2250%22%20cy%3D%2240%22%20r%3D%2225%22%2F%3E%3Cpath%20d%3D%22M15%2095%20Q50%2070%2085%2095%20A40%2040%200%200%200%2015%2095%22%2F%3E%3C%2Fsvg%3E" alt="Immagine Profilo">
      <input type="file" id="profile-image-input" accept="image/*" style="display: none;">
      <button id="change-image-button">Cambia Immagine</button>
    </div>

    <div class="profile-details-form">
      <h3>Dati Personali</h3>
      <form id="profile-form">
        {{-- In un'applicazione Laravel reale, qui useresti la direttiva @csrf e caricheresti i dati dell'utente dal backend --}}
        <div>
          <label for="first-name">Nome:</label>
          <input type="text" id="first-name" name="firstName" value="Mario" disabled>
        </div>
        <div>
          <label for="last-name">Cognome:</label>
          <input type="text" id="last-name" name="lastName" value="Rossi" disabled>
        </div>
        <div>
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" value="mario.rossi@example.com" disabled>
        </div>
        <div class="form-actions">
          <button type="button" id="edit-profile-button">Modifica Dati</button>
          <button type="submit" id="save-profile-button" style="display: none;">Salva Modifiche</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Elemento per la notifica Toast -->
  <div id="toast-notification" class="toast">
    Messaggio notifica
  </div>
@endsection

@section('footer-class', 'footer-offset-top')

@section('scripts')
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const profileImage = document.getElementById('profile-image');
    const profileImageInput = document.getElementById('profile-image-input');
    const changeImageButton = document.getElementById('change-image-button');

    const profileForm = document.getElementById('profile-form');
    const formInputs = profileForm.querySelectorAll('input[type="text"], input[type="email"]');
    const editProfileButton = document.getElementById('edit-profile-button');
    const saveProfileButton = document.getElementById('save-profile-button');
    const toastNotification = document.getElementById('toast-notification');

    let toastTimeout;

    function showToast(message, type = 'default') {
      if (toastNotification) {
        toastNotification.textContent = message;
        toastNotification.classList.remove('success');
        if (type === 'success') {
          toastNotification.classList.add('success');
        }
        toastNotification.classList.add('show');
        clearTimeout(toastTimeout);
        toastTimeout = setTimeout(() => {
          toastNotification.classList.remove('show', 'success');
        }, 3000);
      }
    }

    if (changeImageButton && profileImageInput && profileImage) {
      changeImageButton.addEventListener('click', () => {
        profileImageInput.click();
      });

      profileImageInput.addEventListener('change', (event) => {
        const file = event.target.files[0];
        if (file) {
          const reader = new FileReader();
          reader.onload = (e) => {
            profileImage.src = e.target.result;
          }
          reader.readAsDataURL(file);
        }
      });
    }

    if (editProfileButton && saveProfileButton && formInputs.length > 0) {
      editProfileButton.addEventListener('click', () => {
        saveProfileButton.disabled = true;
        formInputs.forEach(input => input.disabled = false);
        editProfileButton.style.display = 'none';
        saveProfileButton.style.display = 'inline-block';
        if (formInputs[0]) formInputs[0].focus();

        const enableSaveOnInputChange = () => {
          saveProfileButton.disabled = false;
          formInputs.forEach(input => input.removeEventListener('input', enableSaveOnInputChange));
        };

        formInputs.forEach(input => {
          input.addEventListener('input', enableSaveOnInputChange);
        });
      });

      profileForm.addEventListener('submit', (event) => {
        event.preventDefault();
        formInputs.forEach(input => input.disabled = true);
        saveProfileButton.style.display = 'none';
        saveProfileButton.disabled = true;
        editProfileButton.style.display = 'inline-block';

        showToast("Modifiche apportate con successo", "success");

        console.log('Dati profilo "salvati":');
        formInputs.forEach(input => console.log(`${input.name}: ${input.value}`));
      });
    }
  });
</script>
@endsection
