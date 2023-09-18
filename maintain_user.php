<html>
<head>
    <title>Flowchart Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        div {
            margin: 20px;
            padding: 20px;
            border-radius: 5px;
        }
        #home {
            background-color: #f0f8ff;
        }
        #membership {
            background-color: #faebd7;
        }
        #user-management {
            background-color: #7fffd4;
        }
        #add {
            background-color: #f5f5dc;
        }
        #update {
            background-color: #ffe4c4;
        }
        #logout {
            background-color: #8a2be2;
            color: white;
        }
    </style>
<  
    </head>
<body>
    <div id="home">
        <h1>Home</h1>
        <a href="#membership">Membership</a>
        <a href="#user-management">User Management</a>
        <a href="#logout">Log Out</a>
    </div>
    <div id="membership">
        <h1>Membership</h1>
        <a href="#add">Add</a>
        <a href="#update">Update</a>
        <a href="#home">Home</a>
    </div>
    <div id="user-management">
        <h1>User Management</h1>
        <a href="#add">Add</a>
        <a href="#update">Update</a>
        <a href="#home">Home</a>
    </div>
    <div id="add">
        <h1>Add</h1>
        <form action="#" method="post">
            <!-- Add your form elements here -->
        </form>
        <a href="#membership">Membership</a>
        <a href="#user-management">User Management</a>
        <a href="#home">Home</a>
    </div>
    <div id="update">
        <h1>Update</h1>
        <form action="#" method="post">
            <!-- Add your form elements here -->
        </form>
        <a href="#membership">Membership</a>
        <a href="#user-management">User Management</a>
        <a href="#home">Home</a>
    </div>
    <div id="logout">
        <h1>Log Out</h1>
        <a href="#home">Home</a>
    </div>

</body>

</html>