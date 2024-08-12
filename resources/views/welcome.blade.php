<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube to MP3</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>
<body>
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white p-8 rounded shadow-md w-1/3">
        <h1 class="text-2xl mb-4">Convert YouTube Video to MP3</h1>
        <form action="{{ route('convert') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="url" class="block text-sm font-medium text-gray-700">YouTube URL</label>
                <input type="url" name="url" id="url" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
            </div>
            <div>
                <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md">Convert</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
