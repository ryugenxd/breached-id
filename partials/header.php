<header class="h-[20vh] w-full bg-blue-semi">
  <div class="w-full p-3 flex md:flex-row justify-between items-center bg-blue-bold text-sm">
    <!-- navigation -->
    <div class="md:w-fit relative group/nav">
       <div class="group/button md:hidden transition duration-500 rounded-md border-main flex flex-col gap-1.5 justify-center items-center">
          <span class="block w-6 h-1 transition-all bg-slate-50"></span>
          <span class="block w-6 h-1 transition-all bg-slate-50"></span>
          <span class="block w-6 h-1 transition-all bg-slate-50"></span>
      </div>
      <ul id="nav" class="whitespace-nowrap group-hover/nav:flex w-[50vw] font-bold md:w-full text-md h-fit hidden md:flex absolute md:relative left-0 top-[200%] md:top-0 flex-col items-end md:items-center md:flex-row md:gap-2 bg-stone-800 md:bg-transparent text-slate-100">
        <li class="group/list w-full flex items-center gap-2 p-2 outline outline-stone-700 md:outline-0 capitalize cursor-pointer">
          <i class="fa fa-database group-hover/list:text-slate-50 md:group-hover/list:bg-blue-light md:group-hover/list:rounded-full p-2 text-blue-lite"></i>
          database
        </li>
        <li class="group/list w-full flex items-center gap-2 p-2 outline outline-stone-700 md:outline-0 capitalize cursor-pointer">
          <i class="fa fa-star group-hover/list:text-slate-50 md:group-hover/list:bg-blue-light md:group-hover/list:rounded-full p-2 text-blue-lite"></i>
          upgrades
        </li>
        <li class="group/list w-full flex items-center gap-2 p-2 outline outline-stone-700 md:outline-0 capitalize cursor-pointer">
          <i class="fa fa-search group-hover/list:text-slate-50 md:group-hover/list:bg-blue-light md:group-hover/list:rounded-full p-2 text-blue-lite"></i>
          search
        </li>
        <li class="group/list w-full flex items-center gap-2 p-2 outline outline-stone-700 md:outline-0 capitalize cursor-pointer">
          <i class="fa fa-user-ninja group-hover/list:text-slate-50 md:group-hover/list:bg-blue-light md:group-hover/list:rounded-full p-2 text-blue-lite"></i>
          hidden service
        </li>
        <li class="group/list w-full flex items-center gap-2 p-2 outline outline-stone-700 md:outline-0 capitalize cursor-pointer">
          <i class="fa fa-plus group-hover/list:text-slate-50 md:group-hover/list:bg-blue-light md:group-hover/list:rounded-full p-2 text-blue-lite"></i>
          extras
        </li>
      </ul>
    </div>
    <!-- end navigation -->
    <div class="flex items-center gap-2">
      <div class="flex items-center gap-2 px-3 py-1 rounded-md text-slate-50 hover:bg-slate-50 hover:text-slate-900">
        <i class="fa-solid fa-right-to-bracket"></i>
        login
      </div>
      <div class="flex items-center gap-2 px-3 py-1 rounded-md bg-green-600 text-slate-50 hover:bg-slate-50 hover:text-slate-900">
        <i class="fa-solid fa-user-plus"></i>
        register
      </div>
    </div>
    
  </div>
  
</header>