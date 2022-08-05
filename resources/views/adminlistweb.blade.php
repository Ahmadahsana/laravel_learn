@extends('layout.main')


@section('nocontainer')


    <div class="flex">
        @include('partial.sidebar')
        

        <div class="container mx-auto">
            <div class="h-full w-full py-4 my-4">
                <div class="col-span-12">
                    <div class="overflow-auto lg:overflow-visible ">
                        <table class="table text-gray-400 border-separate space-y-6 text-sm">
                            <thead class="bg-gray-100 dark:bg-slate-600 text-gray-500">
                                <tr class="dark:text-slate-100">
                                    <th class="p-3 text-left">Nama</th>
                                    <th class="p-3 text-left">Alamat</th>
                                    <th class="p-3 text-left">Deskripsi</th>
                                    <th class="p-3 text-left">Status</th>
                                    <th class="p-3 text-left">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $l)
                                
                                <tr class="bg-gray-100 dark:bg-slate-700">
                                    <td class="p-3 font-bold">
                                        {{ $l->name }}
                                    </td>
                                    <td class="p-3">
                                        {{ $l->address }}
                                    </td>
                                    <td class="p-3 max-w-xl">
                                        {{ $l->description }}
                                    </td>
                                    <td class="p-3">
                                        <span class="bg-green-600 text-gray-50 rounded-md px-2">active</span>
                                    </td>
                                    <td class="p-3 ">
                                        <a href="#"
                                            class="text-gray-400 hover:text-gray-800 dark:hover:text-gray-100  mx-2">
                                            <img src="landing/public/img/edit.svg" alt="" class="h-6 inline">
                                        </a>
                                        <a href="#"
                                            class="text-gray-400 hover:text-gray-800 dark:hover:text-gray-100  ml-2">
                                            <img src="landing/public/img/delete.svg" alt="" class="h-6 inline">
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- {{ dd($list) }} --}}