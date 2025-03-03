<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('form') }}">ajouter</a>
    <table>
        <thead>
            <tr>
                <th>name</th>
                <th>description</th>
                <th>price</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produits as $produit )
            
            
            <tr>
                <td>{{ $produit->name }}</td>
                <td>{{ $produit->description }}</td>
                <td>{{ $produit->price }}</td>
                <td>
                    <a href="{{ route("delete",parameters:$produit->id) }}">delete</a>
                    <a href="{{ route("edit", $produit->id) }}">modifier</a>
                </td>
            </tr>
            @endforeach
            
        </tbody>
       
</body>
</html>