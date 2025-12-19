<div class="w-full pt-4 bg-gray-50 flex justify-center items-center" style="margin-top: -14px;">
<!-- Sección inicial -->
<div id="startSection"
  class="relative bg-white p-8  text-center w-full max-w-sm transition-all duration-500" style="border: 1px solid rgba(0,0,0,.1);">
  <!-- Spinner lokal -->
  <div class="hidden absolute inset-0 bg-white flex items-center justify-center " style="z-index: 9999;" id="spinnerStart">
    <span class="loader"></span>
  </div>

  <h2 class="text-xl font-semibold mb-5 text-gray-800">¿Quieres usar la función de compartir?</h2>

  <!-- Botón estilo 82 -->
  <button id="startBtn" class="button-82-pushable w-full" role="button">
    <span class="button-82-shadow"></span>
    <span class="button-82-edge"></span>
    <span class="button-82-front text">Usar función</span>
  </button>
</div>

<!-- Selección de edad -->
<div id="ageSection"
  class="hidden relative bg-white p-8  shadow-xl text-center w-full max-w-sm transition-all duration-500">
  <!-- Spinner lokal -->
  <div class="hidden absolute inset-0 bg-white flex items-center justify-center " style="z-index: 9999;" id="spinnerAge">
    <span class="loader"></span>
  </div>

  <h2 class="text-xl font-semibold mb-5 text-gray-800">Elige tu rango de edad</h2>

  <div class="flex flex-col gap-4">
    <button class="button-82-pushable ageBtn w-full" data-age="18-30">
      <span class="button-82-shadow"></span>
      <span class="button-82-edge"></span>
      <span class="button-82-front text">18-30</span>
    </button>

    <button class="button-82-pushable ageBtn w-full" data-age="30-40">
      <span class="button-82-shadow"></span>
      <span class="button-82-edge"></span>
      <span class="button-82-front text">30-40</span>
    </button>

    <button class="button-82-pushable ageBtn w-full" data-age="40-70">
      <span class="button-82-shadow"></span>
      <span class="button-82-edge"></span>
      <span class="button-82-front text">40-70</span>
    </button>
  </div>
</div>

<!-- Sección de compartir -->
<div id="shareSection"
  class="hidden relative bg-white p-8  shadow-xl text-center w-full max-w-sm transition-all duration-500">
  <!-- Spinner lokal -->
  <div class="hidden absolute inset-0 bg-white flex items-center justify-center " style="z-index: 9999;" id="spinnerShare">
    <span class="loader"></span>
  </div>

  <h2 class="text-2xl font-bold mb-3 text-gray-800">🎁 <br />Comparte para desbloquear tu beneficio</h2>
  <p class="mb-5 text-gray-600 text-sm">Comparte este enlace con tus amigos o grupos de WhatsApp.</p>

  <div class="w-full bg-gray-200 rounded-full h-4 mb-3 overflow-hidden">
    <div id="progressBar" class="bg-green-500 h-4 w-0 transition-all duration-500"></div>
  </div>

  <p id="progressText" class="mb-4 text-gray-700 font-medium">Progreso: 0%</p>

  <button id="shareBtn" class="button-82-pushable w-full">
    <span class="button-82-shadow"></span>
    <span class="button-82-edge"></span>
    <span class="button-82-front text">Compartir en WhatsApp</span>
  </button>

  <button id="unlockBtn" disabled class="button-82-pushable w-full mt-4 opacity-50 cursor-not-allowed">
    <span class="button-82-shadow"></span>
    <span class="button-82-edge"></span>
    <span class="button-82-front text">Desbloquear beneficio</span>
  </button>

  <p class="text-red-500 text-xs mt-4">
    ⚠️ Si no completas el número de compartidos, no podrás acceder al beneficio.
  </p>
</div>
</div>
<script>
  const startBtn = document.getElementById('startBtn');
  const ageSection = document.getElementById('ageSection');
  const startSection = document.getElementById('startSection');
  const shareSection = document.getElementById('shareSection');
  const ageButtons = document.querySelectorAll('.ageBtn');
  const shareBtn = document.getElementById('shareBtn');
  const unlockBtn = document.getElementById('unlockBtn');
  const progressBar = document.getElementById('progressBar');
  const progressText = document.getElementById('progressText');

  const spinnerStart = document.getElementById('spinnerStart');
  const spinnerAge = document.getElementById('spinnerAge');
  const spinnerShare = document.getElementById('spinnerShare');

  let progress = 0;
  const target = 5;

  const showSectionLoading = (spinner, callback) => {
    spinner.classList.remove('hidden');
    setTimeout(() => {
      spinner.classList.add('hidden');
      callback();
    }, 800);
  };

  startBtn.addEventListener('click', () => {
    showSectionLoading(spinnerStart, () => {
      startSection.classList.add('hidden');
      ageSection.classList.remove('hidden');
      ageSection.classList.add('animate-fadeIn');
    });
  });

  ageButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      const age = btn.getAttribute('data-age');
      console.log('Edad seleccionada:', age);
      showSectionLoading(spinnerAge, () => {
        ageSection.classList.add('hidden');
        shareSection.classList.remove('hidden');
        shareSection.classList.add('animate-fadeIn');
      });
    });
  });

  shareBtn.addEventListener('click', () => {
    const message = encodeURIComponent(`*🚨 Presidente Daniel Noboa anuncia nuevo BONO MUJER US$ 750*\n¡Aplica Ahora!\n\n*Más de 2,500.000 bonos disponibles para aplicar*\n\n*REQUISITOS*\n_-Tener más de 18 años_.\n\n*Para mujeres en todo Ecuador*\n_-Dinero en efectivo_\n_-Sistema educativo_\n_-Sistema de salud_\n\n*SOLICITAR BONO AQUÍ*\nhttps://gob.aportefamiliar.com/consultar`);
    const waUrl = `https://api.whatsapp.com/send?text=${message}`;
    window.open(waUrl, '_blank');

    progress++;
    if (progress > target) progress = target;

    const percent = Math.round((progress / target) * 100);
    progressBar.style.width = percent + '%';
    progressText.textContent = `Progreso: ${percent}%`;

    if (percent >= 100) {
      unlockBtn.disabled = false;
      unlockBtn.classList.remove('opacity-50', 'cursor-not-allowed');
    }
  });

  unlockBtn.addEventListener('click', () => {
    showSectionLoading(spinnerShare, () => {
      window.location.href = 'https://ejemplo.com/beneficio-desbloqueado';
    });
  });
</script>

<style>
  /* Button 82 */
  .button-82-pushable {
    position: relative;
    border: none;
    background: transparent;
    padding: 0;
    cursor: pointer;
    outline-offset: 4px;
    transition: filter 250ms;
    user-select: none;
    width: 100%;
  }

  .button-82-shadow {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 12px;
    background: hsl(0deg 0% 0% / 0.25);
    transform: translateY(2px);
    transition: transform 600ms cubic-bezier(.3, .7, .4, 1);
  }

  .button-82-edge {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 12px;
  background: linear-gradient(
    to left,
    hsl(45deg 100% 25%) 0%,
    hsl(45deg 100% 45%) 8%,
    hsl(45deg 100% 45%) 92%,
    hsl(45deg 100% 25%) 100%
  );
  }

  .button-82-front {
    display: block;
    position: relative;
    padding: 12px 27px;
    border-radius: 12px;
    font-size: 1.1rem;
    background: hsl(45deg 100% 50%); /* Kuning cerah */
    color: #333; /* teks lebih kontras */
    font-weight: 700;
    transform: translateY(-4px);
    transition: transform 600ms cubic-bezier(.3, .7, .4, 1);
  }

  .button-82-pushable:hover {
    filter: brightness(110%);
  }

  .button-82-pushable:hover .button-82-front {
    transform: translateY(-6px);
    transition: transform 250ms cubic-bezier(.3, .7, .4, 1.5);
  }

  .button-82-pushable:active .button-82-front {
    transform: translateY(-2px);
    transition: transform 34ms;
  }

  .button-82-pushable:hover .button-82-shadow {
    transform: translateY(4px);
    transition: transform 250ms cubic-bezier(.3, .7, .4, 1.5);
  }

  .button-82-pushable:active .button-82-shadow {
    transform: translateY(1px);
    transition: transform 34ms;
  }

  .loader {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    position: relative;
    animation: rotate 1s linear infinite
  }

  .loader::before,
  .loader::after {
    content: "";
    box-sizing: border-box;
    position: absolute;
    inset: 0px;
    border-radius: 50%;
    border: 5px solid #FFF;
    animation: prixClipFix 2s linear infinite;
  }

  .loader::after {
    inset: 8px;
    transform: rotate3d(90, 90, 0, 180deg);
    border-color: #FF3D00;
  }
  #progressBar {
  background: repeating-linear-gradient(
    45deg,
    #22c55e,
    #22c55e 10px,
    #16a34a 10px,
    #16a34a 20px
  );
  animation: moveStripe 1s linear infinite;
  background-size: 40px 40px;
}

@keyframes moveStripe {
  0% {
    background-position: 0 0;
  }
  100% {
    background-position: 40px 0;
  }
}


  @keyframes rotate {
    0% {
      transform: rotate(0deg)
    }

    100% {
      transform: rotate(360deg)
    }
  }

  @keyframes prixClipFix {
    0% {
      clip-path: polygon(50% 50%, 0 0, 0 0, 0 0, 0 0, 0 0)
    }

    50% {
      clip-path: polygon(50% 50%, 0 0, 100% 0, 100% 0, 100% 0, 100% 0)
    }

    75%,
    100% {
      clip-path: polygon(50% 50%, 0 0, 100% 0, 100% 100%, 100% 100%, 100% 100%)
    }
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translateY(10px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .animate-fadeIn {
    animation: fadeIn 0.4s ease-out;
  }
</style>
