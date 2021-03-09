<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sign Up</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    
    <form name = "POST" action = "/welcome">
        <h4 class = "form-title">Sign Up Form</h4>

        <p class = "firstName">First Name :</p>
        <input type = "text" name = "firstname"/>

        <p class = "lastName">Last Name :</p>
        <input type = "text" name = "lastname"/>

        <p class = "gender">Gender :</p>
        <input type="radio" name="gender" value="Male" id="male"/>
        <label for="male">Male</label>
        <br>

        <input type="radio" name="gender" value="Female" id="female"/>
        <label for="female">Female</label> 
        <br>
        
        <input type="radio" name="gender" value="Other" id="other"/>
        <label for="other">Other</label> 
        <br>

        <p class="national">Nationality :</p>
        <select name="Nationality" id="nationality">
            <option value="Indonesian">Indonesian</option>
            <option value="Singaporean">Singaporean</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Australian">Australian</option>
        </select>

        <p class="Languange">Language Spoken :</p>
        <input type="checkbox" name="language" value="indonesia" id="indonesia"/>
        <label for="indonesia">Bahasa Indonesia</label>

        <input type="checkbox" name="language" value="english" id="english"/>
        <label for="english">English</label>

        <input type="checkbox" name="language" value="other" id="other"/>
        <label for="other">Other</label>

        <p class="bio">Bio :</p>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea>
        <br>

        <button type="submit">Sign Up</button>
    </form>
</body>
</html>