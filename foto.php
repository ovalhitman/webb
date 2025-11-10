<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ucapan Spesial</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap');

    body {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      background: linear-gradient(135deg, #FFAFBD, #ffc3a0, #FF6B9D, #FFD93D);
      background-size: 400% 400%;
      animation: gradientShift 10s ease infinite;
      color: white;
      font-family: 'Poppins', sans-serif;
      text-align: center;
      overflow: hidden;
      position: relative;
      padding: 20px;
    }

    /* Efek partikel sederhana (titik jatuh) */
    .particle {
      position: absolute;
      width: 6px;
      height: 6px;
      background: rgba(255, 255, 255, 0.8);
      border-radius: 50%;
      animation: fall 12s linear infinite;
    }
    .particle:nth-child(odd) { animation-delay: -3s; }
    .particle:nth-child(even) { animation-delay: -6s; }

    @keyframes fall {
      0% { transform: translateY(-100vh) rotate(0deg); opacity: 1; }
      100% { transform: translateY(100vh) rotate(360deg); opacity: 0; }
    }

    @keyframes gradientShift {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    h1 {
      font-size: 2.5em;
      font-weight: 600;
      margin-bottom: 30px;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
      animation: bounce 1s ease-in-out both;
    }

    @keyframes bounce {
      0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
      40% { transform: translateY(-10px); }
      60% { transform: translateY(-5px); }
    }

    .icons {
      display: flex;
      justify-content: center;
      margin-bottom: 20px;
    }

    .icon {
      width: 40px;
      height: 40px;
      margin: 0 10px;
      fill: white;
      animation: float 4s ease-in-out infinite;
    }

    .icon:nth-child(2) { animation-delay: -1.5s; }
    .icon:nth-child(3) { animation-delay: -3s; }

    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-15px); }
    }

    .photo-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-template-rows: repeat(2, 1fr);
      gap: 20px;
      max-width: 900px;
      width: 100%;
      aspect-ratio: 3 / 2;
    }

    img {
      width: 100%;
      aspect-ratio: 1;
      object-fit: cover;
      border-radius: 15px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
      opacity: 0;
      transform: scale(0.8) rotate(-5deg);
      transition: all 0.8s ease;
      cursor: pointer;
    }

    img.show {
      opacity: 1;
      transform: scale(1) rotate(0deg);
    }

    img:nth-child(1) { animation-delay: 0.5s; }
    img:nth-child(2) { animation-delay: 1s; }
    img:nth-child(3) { animation-delay: 1.5s; }
    img:nth-child(4) { animation-delay: 2s; }
    img:nth-child(5) { animation-delay: 2.5s; }
    img:nth-child(6) { animation-delay: 3s; }

    img:hover {
      transform: scale(1.1) rotate(2deg);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
    }

    /* Modal untuk gambar penuh */
    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.8);
      justify-content: center;
      align-items: center;
      z-index: 1000;
      animation: fadeIn 0.3s ease;
    }

    .modal.show {
      display: flex;
    }

    .modal img {
      max-width: 90%;
      max-height: 90%;
      border-radius: 10px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
      transform: scale(0.9);
      transition: transform 0.3s ease;
    }

    .modal.show img {
      transform: scale(1);
    }

    .close {
      position: absolute;
      top: 20px;
      right: 20px;
      color: white;
      font-size: 2em;
      cursor: pointer;
      background: rgba(0, 0, 0, 0.5);
      border-radius: 50%;
      width: 50px;
      height: 50px;
      display: flex;
      justify-content: center;
      align-items: center;
      transition: background 0.3s ease;
    }

    .close:hover {
      background: rgba(0, 0, 0, 0.8);
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    /* Responsivitas */
    @media (max-width: 768px) {
      .photo-grid {
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(3, 1fr);
        gap: 15px;
        aspect-ratio: 2 / 3;
      }
      h1 { font-size: 2em; }
      .icon { width: 30px; height: 30px; }
    }

    @media (max-width: 480px) {
      .photo-grid {
        grid-template-columns: 1fr;
        grid-template-rows: repeat(6, 1fr);
        gap: 10px;
        aspect-ratio: auto;
      }
      h1 { font-size: 1.8em; }
      body { padding: 10px; }
    }
  </style>
</head>
<body>
  <!-- Partikel untuk efek confetti -->
  <div class="particle" style="left: 5%; animation-duration: 10s;"></div>
  <div class="particle" style="left: 15%; animation-duration: 14s;"></div>
  <div class="particle" style="left: 25%; animation-duration: 8s;"></div>
  <div class="particle" style="left: 35%; animation-duration: 12s;"></div>
  <div class="particle" style="left: 45%; animation-duration: 9s;"></div>
  <div class="particle" style="left: 55%; animation-duration: 11s;"></div>
  <div class="particle" style="left: 65%; animation-duration: 7s;"></div>
  <div class="particle" style="left: 75%; animation-duration: 13s;"></div>
  <div class="particle" style="left: 85%; animation-duration: 6s;"></div>
  <div class="particle" style="left: 95%; animation-duration: 15s;"></div>

  <div class="icons">
    <svg class="icon" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
    <svg class="icon" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
    <svg class="icon" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
  </div>

  <h1>🎁 Untukmu 🎁</h1>

  <div class="photo-grid">
    <img id="photo1" src="{{ asset('images/630324073dcc2.jpg') }}" alt="Ucapan Spesial 1">
    <img id="photo2" src="{{ asset('images/6787529463-d94e5a922f-k-b2720a2821122acb51a8610a271b3b44-7b77e620f2a10fad0a0a429e05756a40.jpg') }}" alt="Ucapan Spesial 2">
    <img id="photo3" src="{{ asset('images/monkey wallpaper hd - www.binatang.mewarnaigambar.web.id.jpg') }}" alt="Ucapan Spesial 3">
    <img id="photo4" src="{{ asset('images/monyet.jpg') }}" alt="Ucapan Spesial 4">
    <img id="photo5" src="{{ asset('images/monyet1.jpg') }}" alt="Ucapan Spesial 5">
    <img id="photo6" src="{{ asset('images/OIP.jpg') }}" alt="Ucapan Spesial 6">
  </div>

  <!-- Modal untuk gambar penuh -->
  <div class="modal" id="modal">
    <span class="close" id="close">&times;</span>
    <img id="modal-img" src="" alt="Gambar Penuh">
  </div>
  
  <script>
    window.onload = () => {
      // Animasi stagger untuk grid
      const photos = document.querySelectorAll('.photo-grid img');
      photos.forEach((photo, index) => {
        setTimeout(() => {
          photo.classList.add('show');
        }, index * 500);
      });

      // Fitur modal
      const modal = document.getElementById('modal');
      const modalImg = document.getElementById('modal-img');
      const closeBtn = document.getElementById('close');

      photos.forEach(photo => {
        photo.addEventListener('click', () => {
          modalImg.src = photo.src;
          modal.classList.add('show');
        });
      });

      closeBtn.addEventListener('click', () => {
        modal.classList.remove('show');
      });

      modal.addEventListener('click', (e) => {
        if (e.target === modal) {
          modal.classList.remove('show');
        }
      });
    };
  </script>
</body>
</html>
