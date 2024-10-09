<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit Categorie</title>
  </head>
  <body>
    <div class="container">
        <h1>Edit Categorie</h1>
        <form method="POST" action="{{ route('categories.update', ['category' => $category->id]) }}">
            @csrf
            @method('PUT')
        
            <div class="mb-3">
                <label for="id" class="form-label">Id</label>
                <input type="text" class="form-control" id="id" name="id" disabled="disabled" value="{{ $category->id }}">
            </div>
        
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" required class="form-control" id="name" name="name" placeholder="Categorie name" value="{{ $category->name }}">
            </div>
        
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" required class="form-control" id="description" name="description" placeholder="Categorie description" value="{{ $category->description }}">
            </div>
        
            <button type="submit" class="btn btn-primary">Update Categorie</button>
            <a href="{{ route('categories.index') }}" class="btn btn-warning">Cancel</a>
        </form>
        
    </div>