<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Danh Sách</title>
</head>

<body>
    <a class="btn btn-pri" href="{{ route('categories.create') }}">Thêm Mới</a>

    @if (session('success'))
        <h2>{{ session('success') }}</h2>
    @endif
    <table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>CREATED AT</th>
            <th>UPDATED AT</th>
            <th>ACCTION</th>
        </tr>
        @foreach ($data as $item)
            <tr>
                <td> {{ $item->id }}</td>
                <td> {{ $item->name }}</td>
                <td> {{ $item->created_at }} </td>
                <td> {{ $item->updated_at }} </td>
                <td>
                    <a href="{{ route('categories.show', $item) }}">Show</a>
                    <a href="{{ route('categories.edit', $item) }}">Sửa</a>
                    <form action="{{ route('categories.destroy', $item) }}" method="post">

                        @csrf
                        @method('DELETE')

                        <button onclick="return confirm('Bạn có chắc muốn xóa không')" type="submit">Xóa</button>
                </td>
                </form>


            </tr>
        @endforeach
    </table>
    {{ $data->links() }}
</body>

</html>
