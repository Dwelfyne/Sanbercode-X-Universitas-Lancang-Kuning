<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <h1>Daftar Sanberbook</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="POST">
        @csrf
        <label for="">First Name :</label><br>
        <input type="text" name="ndepan" id=""><br>
        <label for="">Last Name :</label><br>
        <input type="text" name="nbelakang" id=""><br>
        <br>
        <label>Gender :</label><br>
        <input type="radio" name="Gender" id="Male"><label for="Male">Male</label><br>
        <input type="radio" name="Gender" id="Female"><label for="Female">Female</label><br>
        <input type="radio" name="Gender" id="Other"><label for="Other">Other</label><br>
        <br>
        <label>Nationality :</label><br>
        <select name="Nationality">
            <option value="Indonesia">Indonesia</option>
            <option value="English">English</option>
            <option value="Other">Other</option>
        </select>
        <br><br>
        <label for="Language Spoker">Language Spoken</label><br>
        <input type="checkbox" name="Indonesia" id="Indonesia">
        <label for="Indonesia">Bahasa Indonesia</label><br>
        <input type="checkbox" name="English" id="English">
        <label for="English">English</label><br>
        <input type="checkbox" name="Other" id="Other">
        <label for="Other">Other</label><br><br>
        <label>Bio</label><br>
        <textarea name="" id="" cols="30" rows="10"></textarea><br>
        <button type="submit">Sign Up</button>
    </form>
    </form>
    </form>
</body>

</html>
