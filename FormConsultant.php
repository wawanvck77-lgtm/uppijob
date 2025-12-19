<div class="flex flex-col items-center justify-center bg-gray-100 py-8 px-3 min-h-screen">

  <!-- Modal Box -->
  <div class="w-full max-w-md bg-white rounded-xl shadow-lg border">

    <!-- Header -->
    <div class="flex justify-between items-center px-4 py-3 border-b">
      <h2 class="text-xl font-semibold">Consulta</h2>
      <!-- <button class="text-gray-500 text-xl">&times;</button> -->
    </div>

    <!-- Title -->
    <div class="px-4 pt-4">
      <h3 class="font-semibold text-gray-900 text-lg">Renta Ciudadana</h3>
      <p class="text-gray-600 text-sm">Digita tus datos y realiza la consulta</p>
    </div>

    <!-- Form -->
    <form id="commentForm" class="px-4 pb-5 mt-3">

      <!-- Tipo de documento -->
      <!-- <label class="block text-gray-700 mb-1">Tipo de documento</label>
      <input type="text"
        class="border rounded-md w-full p-3 mb-4 focus:ring-2 focus:ring-blue-300 outline-none"
        placeholder="" required> -->
        <label class="block text-gray-700 mb-1">Tipo de documento</label>
        <select
          class="border rounded-md w-full p-3 mb-4 focus:ring-2 focus:ring-blue-300 outline-none bg-white"
          required
        >
          <option value="" disabled selected>Seleccione</option>
          <option>No Definido</option>
          <option>Cédula de extranjería</option>
          <option>Cédula de ciudadanía</option>
          <option>Documento Nacional de Identidad</option>
          <option>Número Único de Identificación Personal</option>
          <option>Pasaporte</option>
          <option>Permiso por Protección Especial</option>
          <option>Permiso Especial de Permanencia</option>
          <option>Salvoconducto Permanencia Refugiados</option>
          <option>Registro Civil</option>
          <option>Tarjeta de identidad</option>
        </select>


      <!-- Número de documento -->
      <label class="block text-gray-700 mb-1">Número de documento</label>
      <input type="number"
        class="border rounded-md w-full p-3 mb-4 focus:ring-2 focus:ring-blue-300 outline-none"
        placeholder="" required>

      <!-- Fecha de nacimiento -->
      <label class="block text-gray-700 mb-1">Fecha de nacimiento</label>
      <input type="date"
        class="border rounded-md w-full p-3 mb-4 focus:ring-2 focus:ring-blue-300 outline-none"
        required>

      <!-- reCAPTCHA Dummy -->
      <!-- <div class="border rounded-md p-3 bg-gray-100 mb-4">
        <div class="flex items-center gap-3">
          <input type="checkbox" class="w-5 h-5">
          <span>Saya bukan robot</span>
        </div>
        <div class="text-xs text-gray-500 mt-1">
          reCAPTCHA mengubah persyaratan layanannya. <a href="#" class="text-blue-600">Ambil tindakan.</a>
        </div>
      </div> -->
      <!-- reCAPTCHA Dummy -->
      <div class="border rounded-md p-3 bg-gray-100 mb-4">
        <div class="flex items-center gap-3">
          <input type="checkbox" class="w-5 h-5">
          <span>No soy un robot</span>
        </div>
        <div class="text-xs text-gray-500 mt-1">
          reCAPTCHA ha actualizado sus condiciones del servicio. 
          <a href="#" class="text-blue-600">Tomar acción.</a>
        </div>
      </div>

      <!-- Buttons -->
      <div class="flex justify-between mt-6">
        <button type="submit"
          class="bg-primary text-white py-2 px-6 rounded-lg font-medium hover:bg-[#1b2a38]">
          Consultar
        </button>

        <!-- <button type="button"
          class="border border-gray-400 text-gray-800 py-2 px-6 rounded-lg font-medium hover:bg-gray-100">
          Cerrar
        </button> -->
      </div>

    </form>

  </div>
  <div id="popup"
    class="hidden fixed inset-0 flex justify-center items-center z-50"
    style="background-color: rgba(0,0,0,.5);">

    <div class="bg-white rounded-xl shadow-lg p-6 max-w-sm text-center" style="width: 90%;">

      <h2 id="popupName" class="font-bold text-lg text-gray-800 mb-2"></h2>

      <p id="popupComment" class="text-gray-600 mt-2 mb-4"></p>

      <button id="closePopup"
        class="mt-5 bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg">
        Cerrar
      </button>
    </div>
  </div>

</div>
