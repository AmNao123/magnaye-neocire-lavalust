<!DOCTYPE html>
<html>
    <head>
        <title>Users List</title>
        <style>
            body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            padding: 40px;
            }
            .container {
            max-width: 1000px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            }
            h1 {
            text-align: center;
            margin-bottom: 25px;
            }
            table {
            width: 100%;
            border-collapse: collapse;
            }
            th, td {
            padding: 14px;
            border-bottom: 1px solid #ddd;
            text-align: left;
            }
            th {
            background: #333;
            color: white;
            }
            tr:hover {
            background: #f1f1f1;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Users List</h1>
            <table>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Username</th>

                   
                    <?php foreach ($users as $user): ?>
                        <tr>
                        <td><?= $user['id']; ?></td>
                        <td><?= $user['firstname']; ?></td>
                        <td><?= $user['lastname']; ?></td>
                        <td><?= $user['email']; ?></td>
                        <td><?= $user['username']; ?></td>
                        </tr>  
                    <?php endforeach; ?> 
                </tr>
            </table>
        </div>
    </body>
</html>