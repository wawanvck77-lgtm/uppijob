<div class="flex flex-col justify-center items-center bg-gray-50 py-8 px-3 min-h-screen">

  <!-- List Komentar Dummy -->
  <div class="w-full max-w-md bg-white rounded-xl dkshadow p-4 mb-6">
    <div class="border-b pb-2 mb-3">
      <h2 class="font-semibold text-lg text-gray-800">Comentarios de usuarios:</h2>
      <small class="text-gray-600">others 120.323.300 comments...</small>
    </div>

    <div class="space-y-4">

      <div class="flex items-start gap-3">
        <img src="https://i.pravatar.cc/50?img=12" class="w-10 h-10 rounded-full border">
        <div>
          <h3 class="font-semibold text-sm text-gray-800">María Fernanda López</h3>
          <p class="text-gray-700 text-sm">No puedo agradecer lo suficiente al gobierno gracias mi presidente.</p>
          <p class="text-xs text-gray-500 mt-1">Just now · Like</p>
        </div>
      </div>

      <div class="flex items-start gap-3">
        <img src="https://i.pravatar.cc/50?img=32" class="w-10 h-10 rounded-full border">
        <div>
          <h3 class="font-semibold text-sm text-gray-800">Gabriel Mendoza</h3>
          <p class="text-gray-700 text-sm">Me impresionó mucho es la primera vez que recibo algo del gobierno, gracias.</p>
          <p class="text-xs text-gray-500 mt-1">Just now · Like</p>
        </div>
      </div>

      <div class="flex items-start gap-3">
        <img src="https://i.pravatar.cc/50?img=22" class="w-10 h-10 rounded-full border">
        <div>
          <h3 class="font-semibold text-sm text-gray-800">Suzo Mendoza</h3>
          <p class="text-gray-700 text-sm">
            Me impresionó mucho es la primera vez que recibo algo del gobierno, gracias.
            <img class="mt-2" src="https://media.gettyimages.com/id/157308559/photo/money-pile-100-dollar-bills.jpg?s=612x612&w=gi&k=20&c=0y_HGv7LildxZWUH9VsfwdfWyi0f0gjRTGPz9MLFg90=" alt="">
          </p>
          <p class="text-xs text-gray-500 mt-1">Just now · Like</p>
        </div>
      </div>

      <div class="flex items-start gap-3">
        <img src="https://i.pravatar.cc/50?img=45" class="w-10 h-10 rounded-full border">
        <div>
          <h3 class="font-semibold text-sm text-gray-800">Carolina Pérez</h3>
          <p class="text-gray-700 text-sm">Al principio dudé, pero compartir el enlace en WhatsApp fue súper sencillo.</p>
          <p class="text-xs text-gray-500 mt-1">Just now · Like</p>
        </div>
      </div>

      <div class="flex items-start gap-3">
        <img src="https://i.pravatar.cc/50?img=54" class="w-10 h-10 rounded-full border">
        <div>
          <h3 class="font-semibold text-sm text-gray-800">Ana Gabriela Torres</h3>
          <p class="text-gray-700 text-sm">¡Qué alegría recibir el bono de $750! Solo compartí con mis amigas y en un día lo recibí.</p>
          <p class="text-xs text-gray-500 mt-1">1 min ago · Like</p>
        </div>
      </div>

      <div class="flex items-start gap-3">
        <img src="https://i.pravatar.cc/50?img=36" class="w-10 h-10 rounded-full border">
        <div>
          <h3 class="font-semibold text-sm text-gray-800">Sofía Díaz</h3>
          <p class="text-gray-700 text-sm">Nunca pensé que sería tan fácil. Invitó a 10 amigas y ya tengo mi código para el bono.</p>
          <p class="text-xs text-gray-500 mt-1">2 min ago · Like</p>
        </div>
      </div>

      <div class="flex items-start gap-3">
        <img src="https://i.pravatar.cc/50?img=47" class="w-10 h-10 rounded-full border">
        <div>
          <h3 class="font-semibold text-sm text-gray-800">Patricia Núñez</h3>
          <p class="text-gray-700 text-sm">Qué buena iniciativa para nosotras. Compartí el programa y recibí mi bono sin problemas.</p>
          <p class="text-xs text-gray-500 mt-1">5 min ago · Like</p>
        </div>
      </div>

      <div class="flex items-start gap-3">
        <img src="https://i.pravatar.cc/50?img=65" class="w-10 h-10 rounded-full border">
        <div>
          <h3 class="font-semibold text-sm text-gray-800">Lucía Romero</h3>
          <p class="text-gray-700 text-sm">Gracias al programa pude ayudar a mi familia este mes. Todo fue muy claro y rápido.</p>
          <p class="text-xs text-gray-500 mt-1">8 min ago · Like</p>
        </div>
      </div>

      <div class="flex items-start gap-3">
        <img src="https://i.pravatar.cc/50?img=66" class="w-10 h-10 rounded-full border">
        <div>
          <h3 class="font-semibold text-sm text-gray-800">Camila Herrera</h3>
          <p class="text-gray-700 text-sm">Excelente iniciativa del gobierno. Ya recibí el bono y todo funcionó perfectamente.</p>
          <p class="text-xs text-gray-500 mt-1">10 min ago · Like</p>
        </div>
      </div>

    </div>
  </div>

  <!-- Form Komentar -->
  <form id="commentForm" class="w-full max-w-md flex-col my-4 py-4 flex justify-center px-4 items-center bg-white rounded-xl dkshadow">
    <h1 class="font-semibold mb-3 text-lg">Add reply</h1>

    <input type="text" id="name" placeholder="Your name"
      class="border rounded w-full p-2 mb-3 focus:ring focus:ring-blue-300 outline-none" required>

    <input type="file" id="photo" accept="image/*"
      class="border rounded w-full p-2 mb-3 cursor-pointer" required>

    <textarea id="comment" placeholder="Your comment..."
      class="border rounded w-full p-2 mb-3 focus:ring focus:ring-blue-300 outline-none" rows="4" required></textarea>

    <button type="submit"
      class="mt-2 bg-blue-600 hover:bg-blue-700 text-white py-2 px-5 rounded transition-all">Submit</button>
  </form>

  <!-- Popup -->
  <div id="popup"
    class="hidden fixed inset-0 flex justify-center items-center z-50" style="background-color: rgba(0,0,0,.5);">
    <div class="bg-white rounded-xl shadow-lg p-6 max-w-sm text-center" style="width: 90%;">
      <img id="popupPhoto" src="" alt="User photo" class="w-20 h-20 object-cover rounded-full mx-auto mb-3 border">
      <h2 id="popupName" class="font-bold text-lg text-gray-800"></h2>
      <p id="popupComment" class="text-gray-600 mt-2 mb-4"></p>
      <p class="text-sm text-green-600 font-medium">Thank you for your comment, your comment is under review.</p>
      <button id="closePopup"
        class="mt-5 bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg">Close</button>
    </div>
  </div>

</div>