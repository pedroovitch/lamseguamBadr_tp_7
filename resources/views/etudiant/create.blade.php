<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Ajouter un étudiant</h2>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<form method="POST" action="/etudiant/store">
    @csrf

    Nom : <br>
    <input type="text" value="{{ old('nom') }}" name="nom">
    @error('nom') <div style="color:red">{{ $message }}</div> @enderror
    <br><br>

    Prénom : <br>
    <input type="text" value="{{ old('prenom') }}" name="prenom">
    @error('prenom')  <div style="color:red">{{ $message }}</div> @enderror
    <br><br>

    Email : <br>
    <input type="email" value="{{ old('email') }}" name="email">
    @error('email') <div style="color:red">{{ $message }}</div> @enderror
    <br><br>

    Mot de passe : <br>
    <input type="password"  value="{{ old('password') }}" name="password">
    @error('password') <div style="color:red">{{ $message }}</div> @enderror
    <br><br>

    Confirmation : <br>
    <input type="password" value="{{ old('password_confirmation') }}" name="password_confirmation">
    <br><br>

    Type Bac : <br>
    <input type="radio"  name="bac" value="marocain"> Marocain
    <input type="radio" name="bac" value="international"> International
    @error('bac') <div style="color:red">{{ $message }}</div> @enderror
    <br><br>

    Filière : <br>
    <select name="filiere">
        <option value="">-- Choisir --</option>
        <option value="SMI">SMI</option>
        <option value="SMA">SMA</option>
        <option value="SEG">SEG</option>
        <option value="PC">PC</option>
    </select>
    @error('filiere') <div style="color:red">{{ $message }}</div> @enderror
    <br><br>

    <button type="submit">Ajouter</button>

</form>
</body>
</html>