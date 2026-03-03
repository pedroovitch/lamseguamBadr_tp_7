<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<h2>Calculatrice</h2>

<form method="POST" action="/calculer">
    @csrf

    <input type="number" name="n1" required>

    <select name="op">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>

    <input type="number" name="n2" required>

    <button type="submit">Calculer</button>
</form>

</body>
</html>
