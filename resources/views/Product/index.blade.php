<!DOCTYPE html>
<body>
    <p>Products:</p>
    <table>
        <thead>
            <tr>
                @foreach(['ID', 'Name', 'Category'] as $column)
                    <td>{{ $column }}</td>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product['id'] }}</td>
                <td>{{ $product['name'] }}</td>
                <td>{{ $product['category'] }}</td>
            </tr>
            @endforeach
        </body>
    </table>

    <p>Tasks:</p>
    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>

    <p>Global Variables</p>
    <p>{{$sharedVariable}}</p>

    <p>Product Key: {{ $productKey }}</p>

</body>
</html>