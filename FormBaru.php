
<div class="form-container">
    <h2>Formulario de Solicitud de Empleo</h2>

    <form id="jobForm" enctype="multipart/form-data">

        <label for="nombre">Nombre Completo</label>
        <input type="text" id="nombre" placeholder="Ingrese su nombre completo" required>

        <label for="telefono">Número de Teléfono</label>
        <input type="tel" id="telefono" placeholder="Ejemplo: +507 6000 0000" required>

        <label for="email">Correo Electrónico</label>
        <input type="email" id="email" placeholder="ejemplo@correo.com" required>

        <label for="cv">Subir CV / Resume</label>
        <input type="file" id="cv" accept=".pdf,.doc,.docx" required>

        <button type="submit">Postúlate ahora</button>

        <p class="note">
            Al enviar este formulario, acepta que su información será utilizada
            únicamente para fines de reclutamiento.
        </p>

    </form>
</div>

<!-- MODAL -->
<div class="modal" id="successModal">
    <div class="modal-content">
        <h3>¡Postulación recibida! ✅</h3>
        <p>
            Por favor, espere el siguiente proceso.  
            Le enviaremos una actualización a su correo electrónico.
        </p>
        <button onclick="closeModal()">Aceptar</button>
    </div>
</div>