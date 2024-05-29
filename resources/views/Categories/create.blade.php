<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm Mới</title>
</head>

<body>
    <h1>Thêm mới danh mục</h1>

    <form action="{{ route('categories.store') }}" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Tên danh mục">
        <button type="submit">Save</button>
    </form>
</body>

</html>
