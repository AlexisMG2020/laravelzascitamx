@extends('index')
@section('content')
  @include('comercial/prospectos/nav_prospectos')

  <div class="h-full mb-4">
    <div class="relative bg-gray-50 border border-gray-200 dark:border-gray-700 shadow-md dark:bg-gray-800 sm:rounded-lg mb-3 " id="menuFiltros">
      <div class="flex flex-col items-center justify-between p-4 space-y-3 md:flex-row md:space-y-0 md:space-x-4">
        <!-- *Buscador tabla -->
        <div class="w-full md:w-1/2">
          <form class="flex items-center">
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                </svg>
              </div>
              <input type="text" id="simple-search" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-zascita-100 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-zascita-100 dark:focus:border-zascita-100" placeholder="Buscar">
            </div>
          </form>
        </div>
        
        <!-- *Filtros -->
        <div class="flex flex-col items-stretch justify-end flex-shrink-0 w-full space-y-2 md:w-auto md:flex-row md:space-y-0 md:items-center md:space-x-3">        
          <!-- Crear nuevo prospecto -->
          <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="flex items-center justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
            <!-- Icono -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="mr-2">
              <path fill="currentColor" d="M19 3h-4.18C14.4 1.84 13.3 1 12 1s-2.4.84-2.82 2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2m-7 0a1 1 0 0 1 1 1a1 1 0 0 1-1 1a1 1 0 0 1-1-1a1 1 0 0 1 1-1m1 9h3v2h-3v3h-2v-3H8v-2h3V9h2z"/>
            </svg>
            <!-- Texto -->
            Nuevo
          </button>
        </div>
      </div>
    </div>
    
    <div class="relative shadow-md sm:rounded-lg" id="tabla_prospectos">
      <!-- Table -->
      <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
          <tr>            
            <!-- Núm prospecto -->
            <th scope="col" class="px-2 py-2" (click)="sortById()">
              <span class="flex items-center hover:text-zascita-100 dark:hover:text-white cursor-pointer">
                ID
                <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                </svg>
              </span>
            </th>
            <!-- Estado -->
            <th scope="col" class="px-2 py-2" (click)="sortByEstado()">
              <span class="flex items-center hover:text-zascita-100 dark:hover:text-white cursor-pointer">
                Estado
                <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                </svg>
              </span>
            </th>
            <!-- Procedencia -->
            <th scope="col" class="px-2 py-2" (click)="sortByProcedencia()">
              <span class="flex items-center hover:text-zascita-100 dark:hover:text-white cursor-pointer">
                Procedencia
                <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                </svg>
              </span>
            </th>
            <!-- Razon social -->
            <th scope="col" class="px-2 py-2" (click)="sortByRazonSocial()">
              <span class="flex items-center hover:text-zascita-100 dark:hover:text-white cursor-pointer">
                Razón social
                <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                </svg>
              </span>
            </th>
            <!-- Nombre Comercial -->
            <th scope="col" class="px-2 py-2" (click)="sortByNombreComercial()">
              <span class="flex items-center hover:text-zascita-100 dark:hover:text-white cursor-pointer">
                Nombre Comercial
                <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                </svg>
              </span>
            </th>
            <!-- Acciones -->
            <th scope="col" class="px-2 py-2">
              <span class="sr-only">Actions</span>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr class="bg-gray-50 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
            
            <!-- Núm prospecto -->
            <td class="cursor-pointer px-2 py-2 text-gray-700 dark:text-white"></td>
            <!-- Estado -->
            <td class="cursor-pointer px-2 py-2 text-gray-700 dark:text-white"></td>
            <!-- Procedencia -->
            <td class="cursor-pointer px-2 py-2 text-gray-700 dark:text-white"></td>
            <!-- Razon social  -->
            <td class="cursor-pointer px-2 py-2 text-gray-700 dark:text-white"></td>
            <!-- Nombre Comercial -->
            <td class="cursor-pointer px-2 py-2 text-gray-700 dark:text-white"></td>
            <!-- acciones -->
            <td class=" px-2 py-2 flex items-center justify-center"></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  {{-- ! Modal de prospectos --}}
  


  


@endsection