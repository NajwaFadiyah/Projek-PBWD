<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mytask.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="mynotes.css">
    <title>My Notes | MyList</title>
    <style>
        body {
            font-family: 'Comic Sans MS', cursive;
            background-color: #ffffff; /* Background color putih */
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
        }
        .diary-container {
            max-width: 800px;
            width: 100%;
            background-color: #6D1B94; /* Background color untuk kontainer catatan */
            padding: 20px; /* Padding di dalam kontainer catatan */
            border-radius: 10px; /* Sudut bulat */
            box-shadow: 0 0 10px #0000001a; /* Efek bayangan */
        }
        header {
            text-align: center;
            margin-bottom: 20px;
            background-color: #ffffff; /* Warna latar belakang untuk header */
            padding: 10px; /* Padding untuk header */
            border-radius: 8px; /* Sudut bulat untuk header */
            font-size: 32px; /* Ukuran font lebih besar untuk header */
            color: #6D1B94; /* Warna teks putih */
            font-style: italic; /* Gaya font italic */
        }
        .list-notes {
            font-size: 28px; /* Ukuran font lebih besar untuk "List Notes" */
            margin-bottom: 10px; /* Margin bawah untuk "List Notes" */
            color: #6D1B94; /* Warna teks pink yang lebih gelap */
        }
        .note {
            background-color: #ffffff;
            border: 2px solid #000000; /* Warna border untuk catatan */
            padding: 10px;
            border-radius: 8px; /* Sudut bulat untuk catatan */
            margin-bottom: 20px;
            width: calc(50% - 20px); /* Lebar 50% dengan margin */
            margin-right: 20px;
            display: inline-block;
            vertical-align: top;
            box-sizing: border-box;
            position: relative; /* Posisi relatif untuk emoji span */
        }
        .note h2 {
            margin-top: 0;
            margin-bottom: 10px;
            font-size: 24px; /* Ukuran font lebih besar untuk judul catatan */
            color: #6D1B94; /* Warna teks judul lebih gelap */
            font-weight: bold; /* Ketebalan font untuk judul */
        }
        .note p {
            margin: 5px 0;
            font-size: 16px; /* Ukuran font untuk alamat, tanggal, dan deskripsi */
            color: #6D1B94; /* Warna ungu yang lebih gelap untuk teks */
        }
        .note-actions {
            margin-top: 10px;
        }
        .note-actions button {
            margin-right: 10px;
            padding: 8px 12px; /* Padding lebih besar untuk tombol */
            font-size: 14px;
            cursor: pointer;
            border: none;
            border-radius: 3px;
            background-color: #6D1B94;
            color: #ffffff;
        }
        .note-actions button:hover {
            background-color: #ffffff;
        }
        #add-save-container {
            display: flex;
            justify-content: space-between;
            align-items: Time;
            margin-bottom: 20px;
            gap: 8px;
        }
        #add-note,
        #save-note {
            padding: 8px 16px; /* Padding lebih besar untuk tombol */
            font-size: 14px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            background-color: #ffffff;
            color: #6D1B94;
        }
        #add-note:hover,
        #save-note:hover {
            background-color: #6D1B94;
        }
    </style>
</head>
<body>
    <!-- side bar -->
    <aside class="sidebar">
        <!-- side bar -->
    <aside class="sidebar">
        <div class="header">
            <h1 style="font-size: large;"> MyList </h1>
        </div>
        <nav>
            <a href="/task">
                <i class="fa-solid fa-list-check" style="color: white;"></i>
                <p> My Task </p>
            </a>
            <a href="/task">
                <i class="fa-solid fa-square-check" style="color: white;"></i>
                <p> My Done </p>
            </a>
            <a href="/task">
                <i class="fa-solid fa-note-sticky" style="color: white;"></i>
                <p> My Notes </p>
            </a>

            <hr>
            <br>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger btn-sm">Logout</button>
            </form>
        </nav>
    </aside>
    <!-- End Side Bar -->
    </aside>
    <!-- End Side Bar -->
    
    <!-- Main Content -->
    <main class="utama">
    <div class="diary-container">
        <header>
            <div style="font-family: 'Comic Sans MS', cursive;">MY NOTES</div> <!-- Gaya font yang lucu untuk "MY NOTES" -->
            <div class="list-notes">List Notes</div> <!-- Ukuran font yang lebih besar untuk "List Notes" -->
        </header>

        <div id="add-save-container">
            <button id="add-note">Tambah Catatan</button>
            <button id="save-note">Simpan Catatan</button>
        </div>

        <div class="notes-container" id="notes-container"></div>
    </div>

    <script>
        const notesContainer = document.getElementById('notes-container');
        const addNoteButton = document.getElementById('add-note');
        const saveNoteButton = document.getElementById('save-note');
        let notes = [];

        // Check if there are saved notes in local storage
        if (localStorage.getItem('notes')) {
            notes = JSON.parse(localStorage.getItem('notes'));
            renderNotes();
        }

        addNoteButton.addEventListener('click', () => {
            const newTitle = prompt('Masukkan judul catatan:');
            if (!newTitle) return;

            const newAddress = prompt('Masukkan alamat:');
            if (!newAddress) return;

            const newDate = prompt('Masukkan tanggal:');
            if (!newDate) return;

            const newDescription = prompt('Masukkan deskripsi:');
            if (!newDescription) return;

            notes.push({
                nomor: notes.length + 1,
                judul: newTitle,
                alamat: newAddress,
                tanggal: newDate,
                deskripsi: newDescription
            });

            saveNotesLocally();
            renderNotes();
        });

        saveNoteButton.addEventListener('click', () => {
            alert('Catatan disimpan!');
        });

        function saveNotesLocally() {
            localStorage.setItem('notes', JSON.stringify(notes));
        }

        function renderNotes() {
            notesContainer.innerHTML = '';
            notes.forEach((note, index) => {
                const noteElement = document.createElement('div');
                noteElement.className = 'note';
                noteElement.innerHTML = `
                    <h2>${note.judul}</h2>
                    <p><strong>Alamat:</strong> ${note.alamat}</p>
                    <p><strong>Tanggal:</strong> ${note.tanggal}</p>
                   <p><strong>Deskripsi:</strong> ${note.deskripsi}</p>
                    <div class="note-actions">
                        <button class="edit-note" data-index="${index}">Edit</button>
                        <button class="delete-note" data-index="${index}">Hapus</button>
                    </div>
                    <span style="position: absolute; bottom: 5px; right: 5px; font-size: 24px;"></span> <!-- Emoji icon -->
                `;

                noteElement.querySelector('.edit-note').addEventListener('click', () => {
                    const newDescription = prompt('Edit deskripsi catatan:', note.deskripsi);
                    if (newDescription) {
                        notes[index].deskripsi = newDescription;
                        saveNotesLocally();
                        renderNotes();
                    }
                });

                noteElement.querySelector('.delete-note').addEventListener('click', () => {
                    notes.splice(index, 1);
                    saveNotesLocally();
                    renderNotes();
                });

                notesContainer.appendChild(noteElement);
            });
        }
    </script>
    </main>
    <!-- End Main -->

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>