@extends('layouts.lay1')

@section('content')
            
    
              @if (session('success'))
                        
<div
              class="px-4 py-3 mb-8  rounded-lg shadow-md dark:bg-gray-800"
            >
              <p class="text-sm text-gray-600 dark:text-gray-400">
          {{            
            session('success')
          }}
          <span style="float:right">
          <a href="{{route('paccueil')}}" >
          Revenir à l'accueil &RightArrow;
          </a></span>
          </p>
          
            </div>
          @endif
            
          
            <h4
              class="mb-4 text-lg font-semibold text-gray-600  dark:text-gray-300 rounded-lg shadow-md dark:bg-gray-800"
              style="MARGIN-top: 10px;" >
              <Center style="padding-top: 10px; " > FORMULAIRE DE PUBLICATION DES SOLUTIONS</Center>  

              
            </h4>

            <form method="POST" action="{{ route('perreur') }}"
             class="sidebar-enabled sidebar-end needs-validation" enctype="multipart/form-data">
            @csrf
            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">VOTRE NOM </span>
                <input name="nom"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Eric ZIN"
                />
                </label>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Langages OU Framework</span>
                <input name="lang"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Laravel"
                />
              </label>
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Problèmes</span>
                <input name="probleme"
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="The generate key do not exist "
                />
              </label>

              
              <div class="col-12 mb-3 pb-1">
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                            <div class="field" style="margin-top: 10px;">
                            <span class="text-gray-700 dark:text-gray-400">Ajoutez des captures d'écran des solutions obtenues</span> <br>

                                <input type="file" id="image" name="image" required />

                            </div>
                        </div>
             
              <button class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple
              " style="margin-top: 10px;">
                  Soumettre
                </button>
              <div class="flex mt-6 text-sm">
              </div>
            </div>
        


          </form>
          
       
@endsection