@vite(['resources/css/app.css'])
<div class="w-full">

    <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 w-full">
        <!-- <a href="#">
            <img class="rounded-t-lg w-full" src="{{ asset('img/logo-ieq.jpg') }}" alt="" />
        </a> -->
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white mb-8">
                  {{$details['week_day']}} - {{$details['service_date']['period']}}
                </h5>
            </a>

            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
              Dia: <b>{{$details['service_date']['date']}}</b></h1>
            </p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
              Horário: <b>{{$details['service_date']['hour']}}( {{$details['service_date']['period']}} )</b></h1>
            </p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
              Ensaio: <b>{{$details['rehearsal_date']}}( {{$details['service_date']['period']}} )</b></h1>
            </p>
        </div>
    </div>

    <br>

    <div id="accordion-collapse" data-accordion="collapse">
      <h2 id="accordion-collapse-heading-1">
        <button type="button" class="btn-expand-accordion flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
          <span>Escala</span>
          <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
          </svg>
        </button>
      </h2>
      <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900 w-full">                        
              <ul class="max-w-md divide-y divide-gray-200 dark:divide-gray-700 lg:min-w-full">
                <li class="pb-3 sm:pb-4">
                    <div class="flex items-center space-x-4 rtl:space-x-reverse">
                      <div class="flex-shrink-0">
                          <img class="w-10 h-10 rounded-full" src="{{ asset('img/integrantes/1.jpeg') }}" alt="Neil image">
                      </div>
                      <div class="flex-1 min-w-0">
                          <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            Neil Sims
                          </p>
                          <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                            Ministro
                          </p>
                      </div>
                    </div>
                </li>
                <li class="py-3 sm:py-4">
                    <div class="flex items-center space-x-4 rtl:space-x-reverse">
                      <div class="flex-shrink-0">
                      <img class="w-10 h-10 rounded-full" src="{{ asset('img/integrantes/2.jpeg') }}" alt="Neil image">
                      </div>
                      <div class="flex-1 min-w-0">
                          <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            Bonnie Green
                          </p>
                          <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                            Back'n vocal
                          </p>
                      </div>
                    </div>
                </li>
                <li class="py-3 sm:py-4">
                    <div class="flex items-center space-x-4 rtl:space-x-reverse">
                      <div class="flex-shrink-0">
                      <img class="w-10 h-10 rounded-full" src="{{ asset('img/integrantes/3.jpeg') }}" alt="Neil image">
                      </div>
                      <div class="flex-1 min-w-0">
                          <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            Joyce Green
                          </p>
                          <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                            Back'n vocal
                          </p>
                      </div>
                    </div>
                </li>
                <li class="py-3 sm:py-4">
                    <div class="flex items-center space-x-4 rtl:space-x-reverse">
                      <div class="flex-shrink-0">
                      <img class="w-10 h-10 rounded-full" src="{{ asset('img/integrantes/4.jpeg') }}" alt="Neil image">
                      </div>
                      <div class="flex-1 min-w-0">
                          <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            Josef Green
                          </p>
                          <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                            Back'n vocal
                          </p>
                      </div>
                    </div>
                </li>
                <li class="py-3 sm:py-4">
                    <div class="flex items-center space-x-4 rtl:space-x-reverse">
                      <div class="flex-shrink-0">
                      <img class="w-10 h-10 rounded-full" src="{{ asset('img/integrantes/5.jpeg') }}" alt="Neil image">
                      </div>
                      <div class="flex-1 min-w-0">
                          <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            Anna Green
                          </p>
                          <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                            Back'n vocal
                          </p>
                      </div>
                    </div>
                </li>
                <li class="py-3 sm:py-4">
                    <div class="flex items-center space-x-4 rtl:space-x-reverse">
                      <div class="flex-shrink-0">
                      <img class="w-10 h-10 rounded-full" src="{{ asset('img/integrantes/6.jpeg') }}" alt="Neil image">
                      </div>
                      <div class="flex-1 min-w-0">
                          <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            Bonnie Green
                          </p>
                          <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                            Tecladista
                          </p>
                      </div>
                    </div>
                </li>
                <li class="py-3 sm:py-4">
                    <div class="flex items-center space-x-4 rtl:space-x-reverse">
                      <div class="flex-shrink-0">
                      <img class="w-10 h-10 rounded-full" src="{{ asset('img/integrantes/7.jpeg') }}" alt="Neil image">
                      </div>
                      <div class="flex-1 min-w-0">
                          <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            Bonnie Green
                          </p>
                          <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                            Guitarrista
                          </p>
                      </div>
                    </div>
                </li>
                <li class="py-3 sm:py-4">
                    <div class="flex items-center space-x-4 rtl:space-x-reverse">
                      <div class="flex-shrink-0">
                      <img class="w-10 h-10 rounded-full" src="{{ asset('img/integrantes/8.jpeg') }}" alt="Neil image">
                      </div>
                      <div class="flex-1 min-w-0">
                          <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            Bonnie Green
                          </p>
                          <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                            Violonista
                          </p>
                      </div>
                    </div>
                </li>
                <li class="py-3 sm:py-4">
                    <div class="flex items-center space-x-4 rtl:space-x-reverse">
                      <div class="flex-shrink-0">
                      <img class="w-10 h-10 rounded-full" src="{{ asset('img/integrantes/9.jpeg') }}" alt="Neil image">
                      </div>
                      <div class="flex-1 min-w-0">
                          <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            Bonnie Green
                          </p>
                          <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                            Contra-baixista
                          </p>
                      </div>
                    </div>
                </li>
                <li class="py-3 sm:py-4">
                    <div class="flex items-center space-x-4 rtl:space-x-reverse">
                      <div class="flex-shrink-0">
                      <img class="w-10 h-10 rounded-full" src="{{ asset('img/integrantes/10.jpeg') }}" alt="Neil image">
                      </div>
                      <div class="flex-1 min-w-0">
                          <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            Bonnie Green
                          </p>
                          <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                            Baterista
                          </p>
                      </div>
                    </div>
                </li>
              </ul>
        </div>
      </div>

      <h2 id="accordion-collapse-heading-3">
        <button type="button" class="btn-expand-accordion flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
          <span>Músicas</span>
          <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
          </svg>
        </button>
      </h2>
      <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
        <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700 w-full">
          
            <div id="accordion-collapse" data-accordion="collapse">

              @for($i=1; $i <= 8; $i++)
                @if($i == 1)
                <h2 id="title-accordion-{{$i}}">
                  <button type="button" 
                    class="btn-expand-accordion flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" 
                    data-accordion-target="#content-accordion-{{$i}}" 
                    aria-expanded="true" 
                    aria-controls="content-accordion-{{$i}}">
                    <span>{{ $i }}- Grande é o Senhor</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                  </button>
                </h2>

                <div id="content-accordion-{{$i}}" 
                  class="hidden transition-all w-full" 
                  aria-labelledby="title-accordion-{{$i}}">
                  <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900 w-full">

                    <p class="mb-2 text-gray-500 dark:text-gray-400 w-full p-2">
                      <b>Autor:</b> Adhemar de Campos
                    </p>

                    <p class="mb-2 text-gray-500 dark:text-gray-400 w-full p-2">
                      <b>Tonalidade:</b> A
                    </p>

                    <p class="mb-2 text-gray-500 dark:text-gray-400 w-full bg-red-100 p-2 rounded">
                      <b>Observação:</b> Irá começar do "Queremos o teu nome engrandecer" canta 3x o refrão e vai para o começo.
                    </p>

                    <div class="w-full">
                        <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded flex flex-row justify-center align-center w-full mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m9 9 10.5-3m0 6.553v3.75a2.25 2.25 0 0 1-1.632 2.163l-1.32.377a1.803 1.803 0 1 1-.99-3.467l2.31-.66a2.25 2.25 0 0 0 1.632-2.163Zm0 0V2.25L9 5.25v10.303m0 0v3.75a2.25 2.25 0 0 1-1.632 2.163l-1.32.377a1.803 1.803 0 0 1-.99-3.467l2.31-.66A2.25 2.25 0 0 0 9 15.553Z" />
                            </svg>
                            &nbsp;&nbsp;Cifra
                        </button>
                    </div>
                    

                    <div class="w-full">
                        <button type="button" class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded flex flex-row justify-center align-center w-full mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                            </svg>
                            &nbsp;&nbsp;Letra
                        </button>
                    </div>
                    

                    <div class="w-full">
                        <button type="button" class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded flex flex-row justify-center align-center w-full mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                            </svg>
                            &nbsp;&nbsp;Música
                        </button>
                    </div>
                    
                  </div>
                </div>
                @elseif($i > 1)
                  <h2 id="title-accordion-{{$i}}">
                    <button type="button" 
                        class="btn-expand-accordion flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" 
                        data-accordion-target="#content-accordion-{{$i}}" 
                        aria-expanded="false" 
                        aria-controls="content-accordion-{{$i}}">
                      <span>{{ $i }}- Grande é o Senhor</span>
                      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                      </svg>
                    </button>
                  </h2>
                  <div id="content-accordion-{{$i}}" 
                    class="hidden" 
                    aria-labelledby="title-accordion-{{$i}}">
                    <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700 w-full">

                      <p class="mb-2 text-gray-500 dark:text-gray-400 w-full p-2">
                        <b>Autor:</b> Adhemar de Campos
                      </p>

                      <p class="mb-2 text-gray-500 dark:text-gray-400 w-full p-2">
                        <b>Tonalidade:</b> A
                      </p>

                      <p class="mb-2 text-gray-500 dark:text-gray-400 w-full bg-red-100 p-2 rounded">
                        <b>Observação:</b> Irá começar do "Queremos o teu nome engrandecer" canta 3x o refrão e vai para o começo.
                      </p>

                      <div class="w-full">
                          <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded flex flex-row justify-center align-center w-full mt-2">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="m9 9 10.5-3m0 6.553v3.75a2.25 2.25 0 0 1-1.632 2.163l-1.32.377a1.803 1.803 0 1 1-.99-3.467l2.31-.66a2.25 2.25 0 0 0 1.632-2.163Zm0 0V2.25L9 5.25v10.303m0 0v3.75a2.25 2.25 0 0 1-1.632 2.163l-1.32.377a1.803 1.803 0 0 1-.99-3.467l2.31-.66A2.25 2.25 0 0 0 9 15.553Z" />
                              </svg>
                              &nbsp;&nbsp;Cifra
                          </button>
                      </div>
                      

                      <div class="w-full">
                          <button type="button" class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded flex flex-row justify-center align-center w-full mt-2">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                              </svg>
                              &nbsp;&nbsp;Letra
                          </button>
                      </div>
                      

                      <div class="w-full">
                          <button type="button" class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded flex flex-row justify-center align-center w-full mt-2">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                              </svg>
                              &nbsp;&nbsp;Música
                          </button>
                      </div>

                    </div>
                  </div>
                @endif
              @endfor
        </div>

        </div>
      </div>
    </div>


    

    <br>

    

</div>

<script src="{{ asset('js/servicepage/service-detail.js') }}"></script>