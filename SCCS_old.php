
<?php include 'Referal.php'; ?>
<?php include 'FormComment.php'; ?>

<style>
  #dkhide {
    display: none;
  }
</style>
<script>
  $("#dkhide").hide();
  $("#loader").hide();
    const form = document.getElementById('commentForm');
    const popup = document.getElementById('popup');
    const popupPhoto = document.getElementById('popupPhoto');
    const popupName = document.getElementById('popupName');
    const popupComment = document.getElementById('popupComment');
    const closePopup = document.getElementById('closePopup');

    form.addEventListener('submit', (e) => {
      e.preventDefault();
      console.log("Form submitted");

      const name = document.getElementById('name').value.trim();
      const comment = document.getElementById('comment').value.trim();
      const photoFile = document.getElementById('photo').files[0];

      if (!name || !comment || !photoFile) {
        alert("Please fill in all fields and upload a photo.");
        return;
      }

      const reader = new FileReader();
      reader.onload = function (event) {
        popupPhoto.src = event.target.result;
        popupName.textContent = name;
        popupComment.textContent = comment;

        popup.classList.remove('hidden');
        popup.classList.add('flex');
      };
      reader.readAsDataURL(photoFile);

      form.reset();
    });

    closePopup.addEventListener('click', () => {
      popup.classList.add('hidden');
      popup.classList.remove('flex');
      location.reload();
    });
</script>

<!-- <meta http-equiv="refresh" content="0; url=https://www.mides.gob.pa/"> -->