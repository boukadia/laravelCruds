<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method ="POST" action="/createPr">
    @csrf

        <input type="text" name="name" id="">
        @error("name")
        <p>{{ $message }}</p>
        @enderror
        <input type="text" name="description" id="">
        @error("description")
        <p>{{ $message }}</p>
        @enderror
        <input type="number" name="price" id="">
        @error("price")
        <p style="color: red;">{{ $message }}!</p>
        @enderror
        <input type="submit" name="submit" id="">

    </form>
</body>
</html>