@extends('admin.layouts.master')

@section('title')
    Chi tiết {{ $model->name }}
@endsection

@section('content')
    <table>
        <tr>
            <th>Trường</th>
            <th>Giá trị</th>
        </tr>
        @foreach ($model->toArray() as $key => $value)
            <tr>
                <td>{{ $key }}</td>
                <td>
                    @php
                        if ($key == 'cover') {
                            $url = Storage::url($value);
                            echo "<img class='rounded-2' src=' $url'  width='50px'
                            height='50px'>";
                        } elseif (Str::contains($key, 'is_')) {
                            echo $value
                                ? '<span class="badge bg-primary">YES</span>'
                                : '<span class="badge bg-danger">NO</span>';
                        } else {
                            echo $value;
                        }
                    @endphp
                </td>
            </tr>
        @endforeach
    </table>
@endsection
