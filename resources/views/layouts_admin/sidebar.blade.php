      <nav class="col-span-2 col-start-1 bg-black  h-screen px-4 text-gray-900 border border-yellow-500">
        <div class="flex flex-wrap mt-4">
            <div class="w-4/6 mx-auto">
                <img src="{{ asset('img/logo_tecno.png') }}" alt="">
            </div>
        </div>
        <div class="flex flex-wrap mt-8">
          <div class="w-1/2">
            <img
              src="https://randomuser.me/api/portraits/women/27.jpg"
              class="mx-auto w-20 h-20 rounded-full"
            />
          </div>
          <div class="w-1/2">
            <span class="font-semibold text-white">Ava Harper</span>
            <button class="bg-green-500 text-white px-4 py-2 rounded-md border border-blue-500 hover:bg-white hover:text-green-500">
              Premium
            </button>
          </div>
        </div>
        <div class="mt-10 mb-4">
          <ul class="ml-4">
            <li class="mb-2 px-4 py-4 text-gray-100 flex flex-row  border-gray-300 hover:text-white   hover:bg-yellow-500  hover:font-bold rounded rounded-lg">
              <span>
                <svg class="fill-current h-5 w-5 " viewBox="0 0 24 24">
                  <path
                    d="M16 20h4v-4h-4m0-2h4v-4h-4m-6-2h4V4h-4m6
                        4h4V4h-4m-6 10h4v-4h-4m-6 4h4v-4H4m0 10h4v-4H4m6
                        4h4v-4h-4M4 8h4V4H4v4z"
                  ></path>
                </svg>
              </span>
              <a href="{{ route('admin.index') }}">
                <span class="ml-2 font-bold">Inicio</span>
              </a>
            </li>
            <li class="mb-2 px-4 py-4 text-gray-100 flex flex-row  border-gray-300 hover:text-white   hover:bg-yellow-500  hover:font-bold rounded rounded-lg">
              <a href="{{ route('product.list') }}"><i class="fa fa-folder"></i><span class="ml-2 font-bold">Listar Productos</span>
              </a>
            </li>
            <li class="mb-2 px-4 py-4 text-gray-100 flex flex-row  border-gray-300 hover:text-white   hover:bg-yellow-500  hover:font-bold rounded rounded-lg">
              <span>
                <svg class="fill-current h-5 w-5 " viewBox="0 0 24 24">
                  <path
                    d="M19 19H5V8h14m-3-7v2H8V1H6v2H5c-1.11 0-2 .89-2
                        2v14a2 2 0 002 2h14a2 2 0 002-2V5a2 2 0
                        00-2-2h-1V1m-1 11h-5v5h5v-5z"
                  ></path>
                </svg>
              </span>
              <a href="#">
               
                <span class="ml-2 font-bold">Milestones</span>
              </a>
            </li>
            <li class="mb-2 px-4 py-4 text-gray-100 flex flex-row  border-gray-300 hover:text-white   hover:bg-yellow-500  hover:font-bold rounded rounded-lg">
              <span>
                <svg class="fill-current h-5 w-5" viewBox="0 0 24 24">
                  <path
                    d="M12 4a4 4 0 014 4 4 4 0 01-4 4 4 4 0 01-4-4 4 4 0
                        014-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4
                        8-4z"
                  ></path>
                </svg>
              </span>
              <a href="#">
                <span class="ml-2 font-bold">Team</span>
              </a>
            </li>
            <li class="mb-2 px-4 py-4 text-gray-100 flex flex-row  border-gray-300 hover:text-white   hover:bg-yellow-500  hover:font-bold rounded rounded-lg">
              <span>
                <svg class="fill-current h-5 w-5 " viewBox="0 0 24 24">
                  <path
                    d="M12 13H7v5h5v2H5V10h2v1h5v2M8
                        4v2H4V4h4m2-2H2v6h8V2m10 9v2h-4v-2h4m2-2h-8v6h8V9m-2
                        9v2h-4v-2h4m2-2h-8v6h8v-6z"
                  ></path>
                </svg>
              </span>
              <a href="#">
                <span class="ml-2 font-bold">Tasks</span>
              </a>
            </li>
            <li class="mb-2 px-4 py-4 text-gray-100 flex flex-row  border-gray-300 hover:text-white   hover:bg-yellow-500  hover:font-bold rounded rounded-lg">
              <span>
                <svg
                  class="fill-current h-5 w-5 "
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M7 3C8.86384 3 10.4299 4.27477 10.874 6H19V8H10.874C10.4299 9.72523 8.86384 11 7 11C4.79086 11 3 9.20914 3 7C3 4.79086 4.79086 3 7 3ZM7 9C8.10457 9 9 8.10457 9 7C9 5.89543 8.10457 5 7 5C5.89543 5 5 5.89543 5 7C5 8.10457 5.89543 9 7 9Z"
                    fill="currentColor"
                  />
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M17 20C15.1362 20 13.5701 18.7252 13.126 17H5V15H13.126C13.5701 13.2748 15.1362 12 17 12C19.2091 12 21 13.7909 21 16C21 18.2091 19.2091 20 17 20ZM17 18C18.1046 18 19 17.1046 19 16C19 14.8954 18.1046 14 17 14C15.8954 14 15 14.8954 15 16C15 17.1046 15.8954 18 17 18Z"
                    fill="currentColor"
                  />
                </svg>
              </span>
              <a href="#">
                <span class="ml-2 font-bold">Settings</span>
              </a>
            </li>
          </ul>
        </div>
      </nav>
 