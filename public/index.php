<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>breached-id | home</title>
  <link rel="stylesheet" href="../dist/output.css">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/brands.min.css" integrity="sha512-G/T7HQJXSeNV7mKMXeJKlYNJ0jrs8RsWzYG7rVACye+qrcUhEAYKYzaa+VFy6eFzM2+/JT1Q+eqBbZFSHmJQew==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-stone-900 h-min-screen">
  <div class="container relative">
    <!-- header -->
    <?php include __DIR__."/../partials/header.php"; ?>
    <!-- end header -->
    
    <!-- main -->
    <main class="h-min-screen px-2">
      <!-- main header -->
      <div class="flex items-center justify-between bg-stone-900 text-slate-50 p-2 text-xs">
        <div class="flex items-center gap-1">
          <div class="fa fa-home"></div>
          <span class="font-bold">BreachForums</span>
        </div>
        <a href="#" class="hover:bg-blue-light bg-neutral-700 py-[.2rem] px-[.3rem] rounded-sm">
          Today's posts
        </a>
      </div>
      <!-- end main header -->
      
      <!-- tabs -->
      <nav class="px-4 py-2 md:px-0 bg-stone-900">
        <ul class="flex gap-2 items-center justify-center md:justify-start text-xs">
          <li>
            <a href="" class="visited:text-slate-50 visited:bg-blue-light bg-stone-800 text-stone-400 flex items-center gap-2 capitalize justify-center p-3 md:p-2 rounded-sm">
              <i class="fa fa-home"></i>
              <span class="hidden md:block">home</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- end tabs -->
      
      <div class="overflow-scroll rounded-t-sm outline outline-stone-800">
        <div class="flex w-full items-center gap-2 capitalize text-sm p-2 bg-blue-light text-slate-50">
          <i class="fa fa-home text-blue-lite"></i>
          <span class="font-bold">general</span>
        </div>
        <table>
          <tbody>
            <tr class="py-1 capitalize flex gap-[1rem] h-20 overflow-hidden">
              <td class="w-16 text-md flex justify-center items-center">
                <i class="fa fa-user"></i>
              </td>
              <td class="w-28">
                <h1 class="text-md text-slate-50 font-bold">announcements</h1>
                <p class="text-xs font-semibold text-slate-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias hic, omnis, excepturi natus quos cumque necessitatibus amet repellat similique fugiat velit dolor voluptas ratione saepe a ducimus harum nihil debitis.</p>
              </td>
              <td class="flex flex-col justify-center items-center">
                <h1 class="text-md font-light text-blue-lite">threads</h1>
                <p class="text-slate-50 text-xs font-light">500</p>
              </td>
              <td class="flex flex-col justify-center items-center">
                <h1 class="text-md font-light text-blue-lite">posts</h1>
                <p class="text-slate-50 text-xs font-light">1000</p>
              </td>
              <td class="flex flex-col justify-start items-center border-l border-dotted border-slate-50">
                <h1 class="text-md font-bold text-slate-50">title new thread here</h1>
                <p class="text-slate-60 text-xs font-semibold">by fiandev</p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
    <!-- end main -->
    
  </div>
</body>
</html>