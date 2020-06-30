<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Account Baru</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <!-- Dengan menggunkan form ketika button sign up ditekan maka akan menuju ke action yang didefinisikan  -->
    <!-- Pada input menggunakan required yang artinya input wajib diisi -->
    <form method="POST" action="welcome">
        @csrf
        <div>
            <p>First name:</p>
            <input type="text" name="firstname" required/>
        </div>
        <div>
            <p>Last name:</p>
            <input type="text" name="lastname" required/>
        </div>
        <div>
            <p>Gender:</p>
            <input type="radio" name="gender" value="Male" required/>Male<br/>
            <input type="radio" name="gender" value="Female" required/>Female<br/>
            <input type="radio" name="gender" value="Other" required/>Other
        </div>
        <div>
            <p>Nationality:</p>
            <select name="nationality" required>
                <option value="indonesian">Indonesian</option>
                <option value="singapurean">Singapurean</option>
                <option value="malaysian">Malaysian</option>
                <option value="australian">Australian</option>
            </select>
        </div>
        <div>
            <p>Language Spoken:</p>
            <input type="checkbox" name="language" value="bahasa indonesia" /> Bahasa Indonesia <br/>
            <input type="checkbox" name="language" value="English" /> English <br/>
            <input type="checkbox" name="language" value="Other" /> Other <br/>
        </div>
        <div>
            <p>Bio:</p>
            <textarea name="bio" cols="30" rows="10" required></textarea>
        </div>
        <div>
            <input type="submit" value="Sign Up">
        </div>
    </form>
</body>
</html>