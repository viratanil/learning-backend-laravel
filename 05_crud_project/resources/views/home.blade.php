<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>                               
</head>
<body class="bg-gray-100 p-10">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-4">Add Item</h2>
        <form action="{{ route('store') }}" method="POST" class="mb-4">
            @csrf
            <input type="text" name="name" placeholder="Enter name" class="border p-2 w-full mb-2" required>
            <textarea name="description" placeholder="Enter description" class="border p-2 w-full mb-2"></textarea>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add</button>
        </form>

        <h2 class="text-2xl font-bold mb-4">Saved Items</h2>
        <table class="w-full border-collapse border border-gray-300">           
            <tr class="bg-gray-200">
                <th class="border p-2">Name</th> 
                <th class="border p-2">Description</th>
                <th class="border p-2">Actions</th>                                
            </tr>
            @foreach ($items as $item)
            <tr>
                <td class="border p-2">{{ $item->name }}</td>
                <td class="border p-2">{{ $item->description }}</td>
                <td class="border p-2">
                    <button onclick="editItem({{ $item->id }})" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</button>
                    <a href="{{ route('delete', $item->id) }}" class="bg-red-500 text-white px-2 py-1 rounded">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>                             

    <script>
        function editItem(id) {
            $.get('/edit/' + id, function(item) {
                $('input[name="name"]').val(item.name);
                $('textarea[name="description"]').val(item.description);
                $('form').attr('action', '/update/' + id);
            });
        }
    </script>
</body>
</html>
