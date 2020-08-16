

<!DOCTYPE html>
<html class="h-full">
<head>
    <meta http-equiv="Content-Type"
    content=
    "text/html;charset=UTF-8">
    <title>Mail</title>
</head>
<body class="bg=gray-100 flex items-center justify-center h-full">
<div class="border border-blue">
 <form method="POST" action="/contact" class="bg-white p-6 rounded shadow-nd" style="width: 300px">
       
       @csrf

          <div class="mb-5">
              <label for="email" class="block text-xs uppercase font-semibold mb-l">
                  Email Address

              </label>
              <input type="text" id="email" name="email" class="border px-2 py-l text-sm w-full">

          </div>
          <button type="submit" class="bg-blue-500 py-2 text-white rounded-full text-sm w-full">
                Email
          </button>

          @if (session('message'))
              <div>
                  {{ session('message')}}
              </div>
          @endif  
 </form>
 </div>   
</body>
</html>