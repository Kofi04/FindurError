@extends('layouts.layout')

@section('content')
 <!-- With avatar -->
 <h4
              class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
            >
              <center>ERREUR RESOLUES</center>
            </h4>
            <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                      <th class="px-4 py-3">NOM</th>
                      <th class="px-4 py-3">ERREUR</th>
                      <th class="px-4 py-3">LANGAGE OU FRAMEWORK</th>
                      <th class="px-4 py-3">Explication</th>
                    </tr>
                  </thead>
                  @csrf 
                          @foreach ($erreur as $item )
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >
                    <tr class="text-gray-700 dark:text-gray-400 border-b dark:border-gray-700">
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                          <!-- Avatar with inset shadow -->
                          
                          
                          <div>
                            <p class="font-semibold">{{$item->nom}} </p>
                            <p class="text-xs text-gray-600 dark:text-gray-400">
                              Developer
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-sm">
                      {{$item->probleme}} 
                      </td>
                      <td class="px-4 py-3 text-xs">
                        <span
                          class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                        >
                        {{$item->lang}} 
                        </span>
                      </td>
                      <td class=" px-4 py-3 text-sm" style="width:500px;height:100px">
                      
                      <!-- <img src="{{ asset('public/imagesolus/'.$item->image) }}" alt="Image de la solution"> -->
                      <img src="{{asset('storage/'.$item->image)}}" alt="Image de la solution">

                      </td>
                    </tr>
                    @endforeach

           
@endsection
                             