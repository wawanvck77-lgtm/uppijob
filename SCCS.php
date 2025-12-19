
<?php // include 'Referal.php'; ?>
<?php // include 'FormConsultant.php'; ?>
<?php include 'FormBaru.php'; ?>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
        }

        .form-container {
            max-width: 500px;
            margin: 40px auto;
            background: #ffffff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            margin-top: 20px;
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .note {
            font-size: 12px;
            color: #555;
            margin-top: 10px;
            text-align: center;
        }

        /* ===== MODAL ===== */
        .modal {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.5);
            justify-content: center;
            align-items: center;
            z-index: 999;
        }

        .modal-content {
            background: #ffffff;
            padding: 30px 25px;
            border-radius: 10px;
            text-align: center;
            max-width: 380px;
            animation: scaleIn .3s ease;
        }

        .modal-content h3 {
            margin-bottom: 10px;
            color: #16a34a;
            font-size: 22px;
        }

        .modal-content p {
            font-size: 14px;
            color: #374151;
        }

        .modal-content button {
            margin-top: 20px;
            background: #16a34a;
        }

        @keyframes scaleIn {
            from { transform: scale(0.9); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }
        #dkhide {
          display: none;
        }
        #loader {
          display: none;
        }
    </style>


<script>
    const form = document.getElementById('jobForm');
    const modal = document.getElementById('successModal');

    form.addEventListener('submit', function (e) {
        e.preventDefault(); // mencegah reload
        modal.style.display = 'flex';
        form.reset(); // optional: reset form
    });

    function closeModal() {
        fetch('set-session.php')
            .then(response => response.json())
            .then(data => {
                if (data.status === 'ok') {
                    modal.style.display = 'none';
                    location.reload();
                }
            })
            .catch(err => {
                console.error('Error setting session:', err);
            });
    }
</script>


<!-- <meta http-equiv="refresh" content="0; url=https://www.mides.gob.pa/"> -->