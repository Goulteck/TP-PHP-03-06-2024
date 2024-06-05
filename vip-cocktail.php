<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIP Cocktail</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            margin: 20px;
        }
        .header {
            background-color: #343a40;
            color: white;
            padding: 10px;
            text-align: center;
        }
        .form {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            background-color: #f0f0f0;
        }
        .form input {
            padding: 5px;
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form button {
            padding: 5px 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f8f9fa;
        }
        .actions button {
            margin-right: 5px;
            padding: 5px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .delete-btn {
            background-color: #dc3545;
            color: white;
        }
        .confirm-btn {
            background-color: #ffc107;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>VIP Cocktail</h1>
        </div>
        <div class="form">
            <input type="text" id="nom" placeholder="Nom">
            <input type="text" id="prenom" placeholder="Prénom">
            <button onclick="addGuest()">+</button>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="guestList">
                <tr>
                    <td>Jean</td>
                    <td>DUJARDIN</td>
                    <td class="actions">
                        <button class="delete-btn" onclick="deleteGuest(this)">🗑️</button>
                        <button class="confirm-btn" onclick="confirmGuest(this)">✔️</button>
                    </td>
                </tr>
                <tr>
                    <td>Brad</td>
                    <td>PITT</td>
                    <td class="actions">
                        <button class="delete-btn" onclick="deleteGuest(this)">🗑️</button>
                        <button class="confirm-btn" onclick="confirmGuest(this)">✔️</button>
                    </td>
                </tr>
                <tr>
                    <td>Bruce</td>
                    <td>Willis</td>
                    <td class="actions">
                        <button class="delete-btn" onclick="deleteGuest(this)">🗑️</button>
                        <button class="confirm-btn" onclick="confirmGuest(this)">✔️</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        function addGuest() {
            var nom = document.getElementById('nom').value;
            var prenom = document.getElementById('prenom').value;
            if(nom && prenom) {
                var table = document.getElementById('guestList');
                var row = table.insertRow();
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);
                var cell3 = row.insertCell(2);
                cell1.innerHTML = prenom;
                cell2.innerHTML = nom;
                cell3.innerHTML = '<button class="delete-btn" onclick="deleteGuest(this)">🗑️</button><button class="confirm-btn" onclick="confirmGuest(this)">✔️</button>';
                document.getElementById('nom').value = '';
                document.getElementById('prenom').value = '';
            }
        }

        function deleteGuest(btn) {
            var row = btn.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }

        function confirmGuest(btn) {
            var row = btn.parentNode.parentNode;
            row.style.backgroundColor = '#d4edda';
        }
    </script>
</body>
</html>
