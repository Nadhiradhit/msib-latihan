<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Biodata Personal</title>
    <style>
      body{
        animation: transitionIn 0.75s;
      }
      @keyframes transitionIn{
        from {
          opacity: 0;
          transform: translateY(-10px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }
    </style>
</head>
<body>
    <div class="container sm:w-[750px] grid grid-cols-6 gap-5 mx-auto my-5 px-5 py-3 border rounded-md bg-slate-100 z-index-2">
        <div class="col-span-3 mt-3">
          <img src="img.jpg" alt="foto" class="rounded-lg w-52 mx-auto transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0">
          <p class="text-center text-xl font-bold mt-4 text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">This is my picture</p>
        </div>
        <div class="col-span-3 mt-5">
          <h4 class="mb-4 font-bold">My Bio</h4>
          <p class="text-justify text-red-400"><?php echo"My name is Nadhir Adhitya Zhalifunnas."; ?></p>
          <p class="text-justify text-blue-500"><?php echo"I liked to play basketball, and do nothing 😄";?></p>
          <p class="text-justify"><?php echo"My university is Politeknik Negeri Media Kreatif, But it's call Polimedia. And I'm from Techonology of multimedia"?></p>
          <button type="button" class="py-2.5 px-5 mr-2 mb-2 mt-3 w-32 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200"><a href="https://www.instagram.com/nadhiradhitt/">PencetAja</a></button>
        </div>
    </div>

</body>
</html>