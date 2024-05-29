<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cập Nhật {{ $category->name }}</title>
</head>

<body>
    <h1>Cập Nhật danh mục</h1>
    @if (session('success'))
        <h2>{{ session('success') }}</h2>
    @endif

    <form action="{{ route('categories.update', $category) }}" method="post">
        @csrf

        @method('PUT')

        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Tên danh mục" value="{{ $category->name }}">
        <button type="submit">Save</button>
    </form>
</body>

</html>
